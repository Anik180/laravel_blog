<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//frontend
Route::get('/', 'FrontController@index')->name('home');
//search
Route::get('/search', 'SearchController@search')->name('search');
//past events
Route::get('past-events', 'FrontController@past_events');
Route::get('single-past/{slug}', 'FrontController@singlepast')->name('single.past');
// upcomming event
Route::get('upcoming-events', 'FrontController@upcoming_events');
Route::get('single-events/{slug}', 'FrontController@singleevents')->name('single.events');
//about
Route::get('about', 'FrontController@about');
//volunteer
Route::get('volunteer', 'FrontController@volunteer');
//members
Route::get('member-zone', 'FrontController@member_zone');
//team
Route::get('our-team', 'FrontController@team');
//contact us
Route::get('contact-us', 'FrontController@contactus');
Route::post('store-message', 'FrontController@storemessage');
Route::post('store-voulnteer', 'FrontController@storevoulnteer');

Route::post('subscriber', 'FrontController@store')->name('subscriber.store');
Route::get('post/{slug}', 'PostController@singlepost')->name('single.post');
Route::get('/category/{slug}', 'PostController@postcategory')->name('category.post');
Route::get('/tag/{slug}', 'PostController@posttag')->name('tag.post');

Auth::routes();

Route::group(['middleware'=>['auth']], function (){
  Route::post('comment/{post}','CommentController@store')->name('comment.store');
});

Route::get('/home', 'HomeController@index')->name('home');
//admin------------------------------------------------------------------
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
       Route::get('dashboard', 'DashboardController@index')->name('dashboard');
       Route::resource('tag','TagController');
       Route::resource('category','CategoryController');
       Route::resource('post','PostController');
       //member
       Route::resource('members','MemberController');
       // events
       Route::resource('events','EventController');
       //about
       Route::resource('abouts','AboutController');
       //Volunteer
       Route::resource('volunteer','VolunteerController');
       Route::get('request','SubscriberController@volunteer_request')->name('volunteer.request');
      Route::DELETE ('request-delete/{id}', 'SubscriberController@delete')->name('volunteer_requests.destroy');
       //message
       Route::get('single-message/{id}', 'DashboardController@singlemessage')->name('single.message');
       Route::get('more-message', 'DashboardController@moremessage')->name('all.message');
       //team
       Route::resource('teams','TeamController');
         
       Route::put('/post/{id}/approve', 'PostController@approve')->name('post.approve');
       Route::get('pending/post', 'PostController@pending')->name('post.pending');

       //subscriber
       Route::get('/subscriber', 'SubscriberController@index')->name('subscriber.index');
       Route::delete('/subscriber/{subscriber}', 'SubscriberController@destroy')->name('subscriber.destroy');

       //config
       Route::get('edit/config', 'HomeController@editconfig')->name('edit.config');
       Route::post('update/config{id}', 'HomeController@Update')->name('update.config');

       //sliders
       Route::get('sliders', 'HomeController@index')->name('sliders.index');
       Route::get('sliders/create', 'HomeController@create')->name('sliders.create');
       Route::post('sliders/store', 'HomeController@store')->name('sliders.store');
       Route::get('sliders/edit/{id}', 'HomeController@edit')->name('sliders.edit');
       Route::post('sliders/update/{id}', 'HomeController@updateslider')->name('sliders.update');
       Route::delete('sliders/delete/{id}', 'HomeController@destroy')->name('sliders.destroy');

       //settings
      Route::get('settings', 'SettingsController@index')->name('settings');
      Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
      Route::put('password-update','SettingsController@updatePassword')->name('password.update');

      // comment
      Route::get('comments','CommentController@index')->name('comment.index');
      Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');
     
});
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function(){

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('post','PostController');

        Route::get('settings','SettingsController@index')->name('settings');
        Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
       Route::put('password-update','SettingsController@updatePassword')->name('password.update');

       //comments
        Route::get('comments','CommentController@index')->name('comment.index');
        Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');
});

View::composer('layouts.frontend.app',function ($view) {
  $config = App\Config::first();
  $view->with('config',$config);
});
View::composer('welcome',function ($view) {
  $config = App\Config::first();
  $view->with('config',$config);
});
View::composer('welcome',function ($view) {
  $slider = App\Slider::all();
  $view->with('slider',$slider);
});



