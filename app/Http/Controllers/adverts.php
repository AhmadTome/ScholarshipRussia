<?php

namespace App\Http\Controllers;

use App\advertisment;
use App\contact_info;
use App\family_info;
use App\high_school_info;
use App\img;
use App\language_info;
use App\motivation_letter_info;
use App\personal_info;
use App\scholarship_applied;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use function MongoDB\BSON\toJSON;

class adverts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Input::get('isScholarship') == "") {
            $scholar_status = "off";
        } else {
            $scholar_status = "on";
        }

        if(Input::get('isactivity') == "on"){
            $scholar_status = "activity";
        }

        if ($request->hasFile('adv_image')) {
            $image = $request->file('adv_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        } else {
            $name = "Noimage.png";
        }


        $user = new advertisment;
        $user->advertisement_title = Input::get('adv_title');
        $user->advertisement_Text = Input::get('adv_text');
        $user->advertisement_publisher_id = Auth::id();
        $user->advertisement_imagePath = "/images/" . $name;
        $user->isScholarship = $scholar_status;

        if ($user->save()) {
            session()->flash("notif", "تم اضافة الاعلان بنجاح ");
        } else {
            session()->flash("notif", "لم يتم اضافة الاعلان لحدوث خطأ في الادخال");
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {


        if (Input::get('isScholarship') == "") {
            $scholar_status = "off";
        } else {
            $scholar_status = "on";
        }


        if ($request->hasFile('adv_image')) {
            $image = $request->file('adv_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        } else {
            $name = "Noimage.png";
        }

        $advert_title = Input::get('adv_title');
        $advert_txt = Input::get('adv_text');

        if($name == "Noimage.png") {
            advertisment::where('advertisement_id', '=', $id)
                ->update(array('advertisement_title'=>$advert_title , 'advertisement_Text'=> $advert_txt , 'isScholarship' => $scholar_status));

        }else{
            advertisment::where('advertisement_id', '=', $id)
                ->update(array('advertisement_title'=>$advert_title , 'advertisement_Text'=> $advert_txt , 'isScholarship' => $scholar_status,
                    'advertisement_imagePath' => ('/images/'.$name) ));
        }
        session()->flash("notif", "تم تعديل الاعلان بنجاح ");
        return redirect()->back();


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAdverts(Request $request)
    {
        return \App\advertisment::all();
    }


    public function deleteAdvert(Request $request)
    {
        advertisment::where('advertisement_id', $request->advertid)->delete();
        session()->flash("notif", "تم حذف الاعلان بنجاح ");
        return redirect()->back();

    }

    public function getScholarships(Request $request)
    {
        return \Illuminate\Support\Facades\DB::select('select * from scholarship_applied sp inner join advertisement ad
on sp.advertisement_id = ad.advertisement_id
inner join personal_info p 
on sp.sholarship_id = p.sholarship_id');
    }

    public function StoreScholarship(Request $request)
    {
        $user = new scholarship_applied;
        $user->advertisement_id = $request->id;

        if ($user->save()) {
            session()->flash("notif", "تم التقديم للطلب بنجاح ");
            $scholarship_id = scholarship_applied::orderBy('sholarship_id', 'desc')->first()->sholarship_id;
        } else {
            session()->flash("notif", "لم يتم تقديم الطلب لحدوث خطأ في الادخال");
        }

        // Personal info

        if ($request->hasFile('IDimage')) {
            $image = $request->file('IDimage');
            $IDname = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $IDname);
        } else {
            $IDname = "Noimage.png";
        }


        if ($request->hasFile('Personalimage')) {
            $image = $request->file('Personalimage');
            $Personalname = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $Personalname);
        } else {
            $Personalname = "Noimage.png";
        }



        $personal_info = new personal_info;
        $personal_info->student_name = Input::get('fname').' '.Input::get('lname');
        $personal_info->student_image_path = '/images/'.$Personalname;
        $personal_info->student_age = Input::get('age');
        $personal_info->student_nationality = Input::get('nationlaity');
        $personal_info->student_marital_status = Input::get('inputState');
        $personal_info->student_Identication_number = Input::get('IDnumber');
        $personal_info->student_Identication_inage_path = '/images/'.$IDname;
        $personal_info->student_religion = Input::get('religion');
        $personal_info->gender = Input::get('gender');
        $personal_info->sholarship_id = $scholarship_id;

        $personal_info->save();



        // family Info
        $family_info = new family_info;
        $family_info->month_incom = Input::get('incom_monthly');
        $family_info->father_name = Input::get('fathername');
        $family_info->mother_name = Input::get('mothername');
        $family_info->family_members = Input::get('family_members');
        $family_info->sholarship_id = $scholarship_id;
        $family_info->save();


        // contact_info
        $contact_info = new contact_info;
        $contact_info->phone_number = Input::get('pphone');
        $contact_info->second_phone_number = Input::get('sphone');
        $contact_info->email_address = Input::get('email');
        $contact_info->address = Input::get('full_address');
        $contact_info->sholarship_id = $scholarship_id;
        $contact_info->save();


        //education_info

        if ($request->hasFile('certificate')) {
            $image = $request->file('certificate');
            $certificatename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $certificatename);
        } else {
            $certificatename = "Noimage.png";
        }

        $education_info = new high_school_info;
        $education_info->school_name = Input::get('school_name');
        $education_info->school_address = Input::get('school_address');
        $education_info->school_final_grade = Input::get('school_final_grade');
        $education_info->High_School_certificate_path = '/images/'.$certificatename;
        $education_info->school_graduated_date = Input::get('graduationyear');
        $education_info->school_major = Input::get('major');
        $education_info->sholarship_id =  $scholarship_id;
        $education_info->save();

        // language_info
        $language_info = new language_info;

        $out_name=Input::get('lang_name');
        $out_level=Input::get('lang_level');

        $attach='';
        echo count($out_name);
        for($i=0;$i<count($out_name);$i++){

            $attach=$attach.$out_name[$i].'-'.$out_level[$i].'&';
        }

        $language_info->language_name = $attach ;
        $language_info->sholarship_id = $scholarship_id;

        $language_info->save();

        // motivation_letter_info
        $motivation_info = new motivation_letter_info;
        $motivation_info->Motivation_Message = Input::get('motivationletter');
        $motivation_info->sholarship_id = $scholarship_id;
        $motivation_info->save();

        return redirect()->back();

    }

    public function addimg(Request $request){
        $imagcount=1;
        if($request->hasFile('images')){
            foreach($request->file('images') as $file) {
                $ext=$file->getClientOriginalExtension();
                $date=date('Ymd_His');
                $imagename =time().'_'.$date.'_'.($imagcount++).'.'.$ext ;
                $file->move(public_path().'/uploads', $imagename);
                $user=new img;
                $user->title=Input::get('adv_title');
                $user->path='/uploads/'.$imagename;
                if ($user->save()) {
                    session()->flash("notif", "تم ادخال الصور بنجاح ");
                } else {
                    session()->flash("notif", "لم يتم ادخال الصور لحدوث خطأ في الادخال");
                }
            }
        }
        return redirect()->back();
    }

    public function getimgs(Request $request){
        return img::where('title',$request->title)->get();
    }
}
