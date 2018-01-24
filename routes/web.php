<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/student','Admin\StudentController');
////Route::get('/upload','Admin\AdminController@upload');
////Auth::routes();
//
Route::any('/home', 'HomeController@index')->name('home');
////Route::get('test',function(){
////    return 'hello world!';
////});
////Route::view('view','welcome',['website'=>'Laravel学院']);
//////Route::get('user/{id}', function ($id) {
//////    return 'User ' . $id;
//////});
////Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
////    return $postId . '-' . $commentId;
////});
//////Route::get('user/{id}',function($id){
//////    return '你好，我的学号是'.$id;
//////});
////Route::get('dr/{name?}',function($name='john'){
////    return '我是'.$name;
////})->where('name','[A-Za-z]+');
////Route::get('rd/{id?}',function($id='100'){
////    return  'wodexuehaoshi'.$id;
////})->where('id','[0-9]+');
////Route::get('/gs/{id}/mm/{name}',function($id,$name){
////    return 'gegejiao'.$name.'jinnian'.$id;
////})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
////Route::get('user/profile', function () {
////    // 通过路由名称生成 URL
////    return 'my url: ' . route('profile');
////})->name('profile');
////Route::get('/student/index', 'Admin\StudentController@index')->name('show');
//Route::get('redirect', function() {
//    // 通过路由名称进行重定向
//    return redirect()->route('profile');
//});
////Route::get('user/profile', ['as' => 'profile', function () {
////return 'hello world!';
////}]);
////Route::prefix('admin')->group(function () {
////    Route::get('users', function () {
////        // Matches The "/admin/users" URL
////    });
////});
////Route::get('/student/create',['uses' => 'Admin\StudentController@create']);
//Route::domain('{account}.blog.dev')->group(function () {
//    Route::get('user/{id}', function ($account, $id) {
//        return 'This is ' . $account . ' page of User ' . $id;
//    });
//});
//


Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/{id}', 'UserController@show');
Route::get('/', function () {
    return '1234';
})->middleware('token');




