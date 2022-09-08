<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

//index routing



Route::get('/','IndexController@index')->name('index.page');
Route::get('generate', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

//contact routing
Route::get('/contact-us','ContactController@index');
Route::post('post','ContactController@store');
Route::get('/admin/show-message','ContactController@show');
Route::delete('/message/delete/{contact}','ContactController@destroy');


//auth routing
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
//blog routing
Route::resource('/blog', BlogController::class);
Route::get('admin/blog/posts','BlogController@posts');
//


//profile routing
Route::get('admin/profile/create','ProfileController@create');
Route::post('post-profile','ProfileController@store');
Route::get('admin/profile/edit','ProfileController@edit');
Route::post('update-profile','ProfileController@update');
//header router
Route::get('admin/header/create','HeaderController@create');
Route::post('post-header','HeaderController@store');
Route::get('admin/header/edit','HeaderController@edit');
Route::post('update-header','HeaderController@update');

//experience router

Route::resource('admin/experience', ExperienceController::class);

//education router

Route::resource('admin/education', EducationController::class);

//category router

Route::get('admin/category/create','CategoryController@create');
Route::post('post-category','CategoryController@store');

Route::get('admin/category/','CategoryController@index');
Route::delete('admin/category/delete/{category}','CategoryController@destroy');

//works

Route::resource('admin/works', WorksController::class);
Route::get('admin/works/works','WorksController@works');

//price
Route::get('admin/price/create','PriceController@create');
Route::post('post-price','PriceController@store');
Route::get('admin/price/','PriceController@index');
Route::delete('admin/price/delete/{price}','PriceController@destroy');

//project
Route::get('project-order','ProjectController@index');
Route::post('post-project','ProjectController@store');
Route::get('admin/project-order/','ProjectController@show');
Route::delete('admin/project-order/delete/{project}','ProjectController@destroy');
Route::get('portfolios','PortfoliosController@frontList');
Route::get('refresh_captcha', 'ContactController@refreshCaptcha')->name('refresh_captcha');
//skills

Route::resource('admin/skills', SkillController::class);

//users panel
Route::get('user/dashboard','UserDashboardController@index')->name('dashboard.member');
Route::get('user/send-tiket','UserTiketController@index');

Route::get('user/show-tiket/{id}','UserTiketController@ViewTicket');
//admin tiket
Route::get('admin/tikets','AdminTicketController@listOfTicket');
Route::get('admin/tikets/view/{id}','AdminTicketController@show');
Route::post('admin/tikets/post/{id}','AdminTicketController@store');
Route::get('member/register','MemberController@register');
Route::post('member/store','MemberController@store')->name('resgiter.member');
Route::get('member/login','MemberController@login');
Route::post('member/login/post','MemberController@loginPost')->name('member.login');
Route::post('user/send-tiket/post','UserTiketController@store')->name('ticket.send');
Route::post('user/send-tiket/viewPost','UserTiketController@storeViewTicket')->name('viewTicket.send');

Route::post('/dropzone/image', 'DropzoneController@store')->name('dropzone.images.store');
Route::post('/dropzone/image/delete', 'DropzoneController@delete')->name('dropzone.image.delete');
Route::resource('admin/portfolios',PortfoliosController::class);
Route::post('member/logout',function (Request $request){
    Auth::guard('member')->logout();
    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('index.page');
})->name('member.logout');
