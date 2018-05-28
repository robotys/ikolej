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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Registration;
use App\Mail\NewRegistration;

Route::get('/', function () {
    return redirect('/apel');
});

Route::get('/apel', function () {
    return view('front.apel.home');
});
Route::get('/contact-us', function () {
    return view('front.apel.contact');
});

Route::get('/credits/{det?}', function ($det) {
    return view('front.apel.credit');
});

Route::get('/about/{det?}', function ($det) {
    return view('front.apel.about');
});

Route::get('/dev/{view}', function ($view) {
    return view('front.'.$view);
});

Route::post('/apply', function(Request $request){
	$data['request'] = $request;
	return view('front.apel.register', $data);
});

Route::post('/register', function(Request $request){
	$arr = $request->all();
	unset($arr['_token']);
	// dd($arr);
	// dd('Send email!');



	Mail::to(env('ADMINMAIL'))
    ->send(new NewRegistration($arr));

	// DB::table('registrations')->insert($arr);
	return view('front.apel.thankyou');
});
