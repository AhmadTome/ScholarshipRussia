<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/advert', function (\Illuminate\Http\Request $request) {
    $advertInfo = \App\advertisment::where('advertisement_id',$request->id)->get();
    return view('advertAlone')->with('advertInfo',$advertInfo);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/addAdverts', function (){
    return redirect()->to('/home');
});


Route::get('/EditAdverts', function (){

    return view('Advertisments.EditAdvert');

});

Route::post('/addAdvert','adverts@store');
Route::post('/editAdvert/{id}','adverts@edit');


Route::get('/getAdverts', 'adverts@getAdverts');
Route::get('/get_an_Advert', 'adverts@getanAdvert');
Route::get('/deleteAdvert', 'adverts@deleteAdvert');


Route::get('/Scholarship', function (\Illuminate\Http\Request $request){

    return view('Scholarship.ApplicationInfo')->with('id',$request->id);

});



Route::post('/applyscholarship/{id}','adverts@StoreScholarship');

Route::get('/PreviewScholarship', function (){

    return view('Scholarship.previewScholarship');

});


Route::get('/PreviewAppliedScholarship', function (){

    return view('Scholarship.previreAppliedScholarship');

});

Route::get('/previewApplicationScholarship', function (){

    return view('Scholarship.previewApplicationScholarship');

});

Route::get('/getScholarships', 'adverts@getScholarships');

Route::get('/getApplierInformation', function (\Illuminate\Http\Request $request){
    $sql = "SELECT * FROM contact_info inner join family_info 
on contact_info.sholarship_id = family_info.sholarship_id
inner join highschool_info ON
contact_info.sholarship_id = highschool_info.sholarship_id
inner JOIN languages_info on 
contact_info.sholarship_id = languages_info.sholarship_id
inner join motivation_letter_info ON
contact_info.sholarship_id = motivation_letter_info.sholarship_id
inner JOIN personal_info ON
contact_info.sholarship_id = personal_info.sholarship_id
where contact_info.sholarship_id = ".$request->id;

    $inforamation = \Illuminate\Support\Facades\DB::select($sql);
    $lang = $inforamation[0]->language_name;

    return view('Scholarship.previreAppliedScholarship')->with('inforamation',$inforamation);

});
