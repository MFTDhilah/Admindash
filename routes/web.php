<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;

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



Auth::routes();

Route::controller(LandingController::class)->group(function () {
	Route::get('/', 'index');
});

Route::get('/facial', function () {
	return view('facial');
});
Route::get('/home', function () {
	return view('welcome');
});
Route::controller(DashboardController::class)->group(function () {
	Route::get('/dashboard', 'index');
});

Route::controller(PostsController::class)->group(function () {
	Route::name('posts.')->prefix('posts')->group(function () {
		Route::get('all', 'index')->name('all');
		Route::get('add', 'create')->name('add');
		Route::post('save', 'store')->name('save');
		Route::get('view/{slug}', 'show')->name('view');
		Route::get('edit/{slug}', 'edit')->name('edit');
		Route::post('update/{slug}', 'update')->name('update');
		Route::get('activate/{slug}', 'publish')->name('activate');
		Route::get('deactivate/{slug}', 'unpublish')->name('deactivate');
		Route::get('deletepostimage/{slug}', 'deleteimage')->name('deletepostimage');
		Route::get('delete/{slug}', 'destroy')->name('delete');
	});
});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/', 'LandingController@index')->name('.all');
	Route::get('/about', 'LandingController@about')->name('about.all');
	Route::get('/facial', 'LandingController@facial')->name('facial.all');
	Route::get('/body', 'LandingController@body')->name('body.all');
	Route::get('/hair', 'LandingController@hair')->name('hair.all');
	Route::get('/nail', 'LandingController@nail')->name('nail.all');
	Route::get('/p100', 'LandingController@package100')->name('p100.all');
	Route::get('/p150', 'LandingController@package150')->name('p150.all');
	Route::get('/p200', 'LandingController@package200')->name('p200.all');
	Route::get('/bronze', 'LandingController@prewedbronze')->name('bronze.all');
	Route::get('/silver', 'LandingController@prewedsilver')->name('silver.all');
	Route::get('/gold', 'LandingController@prewedgold')->name('gold.all');
	Route::get('/package', 'LandingController@package')->name('package.all');
	Route::get('/bodypackage', 'LandingController@packagebody')->name('bodypackage.all');
});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/licences/all', 'LicencesController@index')->name('licences.all');
	Route::get('/licences/add', 'LicencesController@create')->name('licences.add');
	Route::post('/licences/save', 'LicencesController@store')->name('licences.save');
	Route::get('/licences/view/{slug}', 'LicencesController@show')->name('licences.view');
	Route::get('/licences/edit/{slug}', 'LicencesController@edit')->name('licences.edit');
	Route::post('/licences/update/{slug}', 'LicencesController@update')->name('licences.update');
	Route::get('/licences/activate/{slug}', 'LicencesController@publish')->name('licences.activate');
	Route::get('/licences/deactivate/{slug}', 'LicencesController@unpublish')->name('licences.deactivate');
	Route::get('/licences/deletepostimage/{slug}', 'LicencesController@deleteimage')->name('licences.deletepostimage');
	Route::get('/licences/delete/{slug}', 'LicencesController@destroy')->name('licences.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/certifications/all', 'CertificationsController@index')->name('certifications.all');
	Route::get('/certifications/add', 'CertificationsController@create')->name('certifications.add');
	Route::post('/certifications/save', 'CertificationsController@store')->name('certifications.save');
	Route::get('/certifications/view/{slug}', 'CertificationsController@show')->name('certifications.view');
	Route::get('/certifications/edit/{slug}', 'CertificationsController@edit')->name('certifications.edit');
	Route::post('/certifications/update/{slug}', 'CertificationsController@update')->name('certifications.update');
	Route::get('/certifications/activate/{slug}', 'CertificationsController@publish')->name('certifications.activate');
	Route::get('/certifications/deactivate/{slug}', 'CertificationsController@unpublish')->name('certifications.deactivate');
	Route::get('/certifications/deletepostimage/{slug}', 'CertificationsController@deleteimage')->name('certifications.deletepostimage');
	Route::get('/certifications/delete/{slug}', 'CertificationsController@destroy')->name('certifications.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/reviews/all', 'ReviewsController@index')->name('reviews.all');
	Route::get('/reviews/add', 'ReviewsController@create')->name('reviews.add');
	Route::post('/reviews/save', 'ReviewsController@store')->name('reviews.save');
	Route::get('/reviews/view/{slug}', 'ReviewsController@show')->name('reviews.view');
	Route::get('/reviews/edit/{slug}', 'ReviewsController@edit')->name('reviews.edit');
	Route::post('/reviews/update/{slug}', 'ReviewsController@update')->name('reviews.update');
	Route::get('/reviews/activate/{slug}', 'ReviewsController@publish')->name('reviews.activate');
	Route::get('/reviews/deactivate/{slug}', 'ReviewsController@unpublish')->name('reviews.deactivate');
	Route::get('/reviews/deletepostimage/{slug}', 'ReviewsController@deleteimage')->name('reviews.deletepostimage');
	Route::get('/reviews/delete/{slug}', 'ReviewsController@destroy')->name('reviews.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/facility/all', 'FacilityController@index')->name('facility.all');
	Route::get('/facility/add', 'FacilityController@create')->name('facility.add');
	Route::post('/facility/save', 'FacilityController@store')->name('facility.save');
	Route::get('/facility/view/{slug}', 'FacilityController@show')->name('facility.view');
	Route::get('/facility/edit/{slug}', 'FacilityController@edit')->name('facility.edit');
	Route::post('/facility/update/{slug}', 'FacilityController@update')->name('facility.update');
	Route::get('/facility/activate/{slug}', 'FacilityController@publish')->name('facility.activate');
	Route::get('/facility/deactivate/{slug}', 'FacilityController@unpublish')->name('facility.deactivate');
	Route::get('/facility/deletepostimage/{slug}', 'FacilityController@deleteimage')->name('facility.deletepostimage');
	Route::get('/facility/delete/{slug}', 'FacilityController@destroy')->name('facility.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/postsworker/all', 'PostsWorkerController@index')->name('postsworker.all');
	Route::get('/postsworker/add', 'PostsWorkerController@create')->name('postsworker.add');
	Route::post('/postsworker/save', 'PostsWorkerController@store')->name('postsworker.save');
	Route::get('/postsworker/view/{slug}', 'PostsWorkerController@show')->name('postsworker.view');
	Route::get('/postsworker/edit/{slug}', 'PostsWorkerController@edit')->name('postsworker.edit');
	Route::post('/postsworker/update/{slug}', 'PostsWorkerController@update')->name('postsworker.update');
	Route::get('/postsworker/activate/{slug}', 'PostsWorkerController@publish')->name('postsworker.activate');
	Route::get('/postsworker/deactivate/{slug}', 'PostsWorkerController@unpublish')->name('postsworker.deactivate');
	Route::get('/postsworker/deletepostimage/{slug}', 'PostsWorkerController@deleteimage')->name('postsworker.deletepostimage');
	Route::get('/postsworker/delete/{slug}', 'PostsWorkerController@destroy')->name('postsworker.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/servicesbody/all', 'ServicesBodyController@index')->name('servicesbody.all');
	Route::get('/servicesbody/add', 'ServicesBodyController@create')->name('servicesbody.add');
	Route::post('/servicesbody/save', 'ServicesBodyController@store')->name('servicesbody.save');
	Route::get('/servicesbody/view/{slug}', 'ServicesBodyController@show')->name('servicesbody.view');
	Route::get('/servicesbody/edit/{slug}', 'ServicesBodyController@edit')->name('servicesbody.edit');
	Route::post('/servicesbody/update/{slug}', 'ServicesBodyController@update')->name('servicesbody.update');
	Route::get('/servicesbody/activate/{slug}', 'ServicesBodyController@publish')->name('servicesbody.activate');
	Route::get('/servicesbody/deactivate/{slug}', 'ServicesBodyController@unpublish')->name('servicesbody.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/servicesbody/delete/{slug}', 'ServicesBodyController@destroy')->name('servicesbody.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/servicesfacial/all', 'ServicesFacialController@index')->name('servicesfacial.all');
	Route::get('/servicesfacial/add', 'ServicesFacialController@create')->name('servicesfacial.add');
	Route::post('/servicesfacial/save', 'ServicesFacialController@store')->name('servicesfacial.save');
	Route::get('/servicesfacial/view/{slug}', 'ServicesFacialController@show')->name('servicesfacial.view');
	Route::get('/servicesfacial/edit/{slug}', 'ServicesFacialController@edit')->name('servicesfacial.edit');
	Route::post('/servicesfacial/update/{slug}', 'ServicesFacialController@update')->name('servicesfacial.update');
	Route::get('/servicesfacial/activate/{slug}', 'ServicesFacialController@publish')->name('servicesfacial.activate');
	Route::get('/servicesfacial/deactivate/{slug}', 'ServicesFacialController@unpublish')->name('servicesfacial.deactivate');
	Route::get('/servicesfacial/delete/{slug}', 'ServicesFacialController@destroy')->name('servicesfacial.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/serviceshair/all', 'ServicesHairController@index')->name('serviceshair.all');
	Route::get('/serviceshair/add', 'ServicesHairController@create')->name('serviceshair.add');
	Route::post('/serviceshair/save', 'ServicesHairController@store')->name('serviceshair.save');
	Route::get('/serviceshair/view/{slug}', 'ServicesHairController@show')->name('serviceshair.view');
	Route::get('/serviceshair/edit/{slug}', 'ServicesHairController@edit')->name('serviceshair.edit');
	Route::post('/serviceshair/update/{slug}', 'ServicesHairController@update')->name('serviceshair.update');
	Route::get('/serviceshair/activate/{slug}', 'ServicesHairController@publish')->name('serviceshair.activate');
	Route::get('/serviceshair/deactivate/{slug}', 'ServicesHairController@unpublish')->name('serviceshair.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/serviceshair/delete/{slug}', 'ServicesHairController@destroy')->name('serviceshair.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/servicesnail/all', 'ServicesNailController@index')->name('servicesnail.all');
	Route::get('/servicesnail/add', 'ServicesNailController@create')->name('servicesnail.add');
	Route::post('/servicesnail/save', 'ServicesNailController@store')->name('servicesnail.save');
	Route::get('/servicesnail/view/{slug}', 'ServicesNailController@show')->name('servicesnail.view');
	Route::get('/servicesnail/edit/{slug}', 'ServicesNailController@edit')->name('servicesnail.edit');
	Route::post('/servicesnail/update/{slug}', 'ServicesNailController@update')->name('servicesnail.update');
	Route::get('/servicesnail/activate/{slug}', 'ServicesNailController@publish')->name('servicesnail.activate');
	Route::get('/servicesnail/deactivate/{slug}', 'ServicesNailController@unpublish')->name('servicesnail.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/servicesnail/delete/{slug}', 'ServicesNailController@destroy')->name('servicesnail.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/packagebody/all', 'PackageBodyController@index')->name('packagebody.all');
	Route::get('/packagebody/add', 'PackageBodyController@create')->name('packagebody.add');
	Route::post('/packagebody/save', 'PackageBodyController@store')->name('packagebody.save');
	Route::get('/packagebody/view/{slug}', 'PackageBodyController@show')->name('packagebody.view');
	Route::get('/packagebody/edit/{slug}', 'PackageBodyController@edit')->name('packagebody.edit');
	Route::post('/packagebody/update/{slug}', 'PackageBodyController@update')->name('packagebody.update');
	Route::get('/packagebody/activate/{slug}', 'PackageBodyController@publish')->name('packagebody.activate');
	Route::get('/packagebody/deactivate/{slug}', 'PackageBodyController@unpublish')->name('packagebody.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/packagebody/delete/{slug}', 'PackageBodyController@destroy')->name('packagebody.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/package100/all', 'Package100Controller@index')->name('package100.all');
	Route::get('/package100/add', 'Package100Controller@create')->name('package100.add');
	Route::post('/package100/save', 'Package100Controller@store')->name('package100.save');
	Route::get('/package100/view/{slug}', 'Package100Controller@show')->name('package100.view');
	Route::get('/package100/edit/{slug}', 'Package100Controller@edit')->name('package100.edit');
	Route::post('/package100/update/{slug}', 'Package100Controller@update')->name('package100.update');
	Route::get('/package100/activate/{slug}', 'Package100Controller@publish')->name('package100.activate');
	Route::get('/package100/deactivate/{slug}', 'Package100Controller@unpublish')->name('package100.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/package100/delete/{slug}', 'Package100Controller@destroy')->name('package100.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/package150/all', 'Package150Controller@index')->name('package150.all');
	Route::get('/package150/add', 'Package150Controller@create')->name('package150.add');
	Route::post('/package150/save', 'Package150Controller@store')->name('package150.save');
	Route::get('/package150/view/{slug}', 'Package150Controller@show')->name('package150.view');
	Route::get('/package150/edit/{slug}', 'Package150Controller@edit')->name('package150.edit');
	Route::post('/package150/update/{slug}', 'Package150Controller@update')->name('package150.update');
	Route::get('/package150/activate/{slug}', 'Package150Controller@publish')->name('package150.activate');
	Route::get('/package150/deactivate/{slug}', 'Package150Controller@unpublish')->name('package150.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/package150/delete/{slug}', 'Package150Controller@destroy')->name('package150.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/package200/all', 'Package200Controller@index')->name('package200.all');
	Route::get('/package200/add', 'Package200Controller@create')->name('package200.add');
	Route::post('/package200/save', 'Package200Controller@store')->name('package200.save');
	Route::get('/package200/view/{slug}', 'Package200Controller@show')->name('package200.view');
	Route::get('/package200/edit/{slug}', 'Package200Controller@edit')->name('package200.edit');
	Route::post('/package200/update/{slug}', 'Package200Controller@update')->name('package200.update');
	Route::get('/package200/activate/{slug}', 'Package200Controller@publish')->name('package200.activate');
	Route::get('/package200/deactivate/{slug}', 'Package200Controller@unpublish')->name('package200.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/package200/delete/{slug}', 'Package200Controller@destroy')->name('package200.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/preweddingbronze/all', 'PreweddingBronzeController@index')->name('preweddingbronze.all');
	Route::get('/preweddingbronze/add', 'PreweddingBronzeController@create')->name('preweddingbronze.add');
	Route::post('/preweddingbronze/save', 'PreweddingBronzeController@store')->name('preweddingbronze.save');
	Route::get('/preweddingbronze/view/{slug}', 'PreweddingBronzeController@show')->name('preweddingbronze.view');
	Route::get('/preweddingbronze/edit/{slug}', 'PreweddingBronzeController@edit')->name('preweddingbronze.edit');
	Route::post('/preweddingbronze/update/{slug}', 'PreweddingBronzeController@update')->name('preweddingbronze.update');
	Route::get('/preweddingbronze/activate/{slug}', 'PreweddingBronzeController@publish')->name('preweddingbronze.activate');
	Route::get('/preweddingbronze/deactivate/{slug}', 'PreweddingBronzeController@unpublish')->name('preweddingbronze.deactivate');	
	Route::get('/preweddingbronze/delete/{slug}', 'PreweddingBronzeController@destroy')->name('preweddingbronze.delete');

});

Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/preweddinggold/all', 'PreweddingGoldController@index')->name('preweddinggold.all');
	Route::get('/preweddinggold/add', 'PreweddingGoldController@create')->name('preweddinggold.add');
	Route::post('/preweddinggold/save', 'PreweddingGoldController@store')->name('preweddinggold.save');
	Route::get('/preweddinggold/view/{slug}', 'PreweddingGoldController@show')->name('preweddinggold.view');
	Route::get('/preweddinggold/edit/{slug}', 'PreweddingGoldController@edit')->name('preweddinggold.edit');
	Route::post('/preweddinggold/update/{slug}', 'PreweddingGoldController@update')->name('preweddinggold.update');
	Route::get('/preweddinggold/activate/{slug}', 'PreweddingGoldController@publish')->name('preweddinggold.activate');
	Route::get('/preweddinggold/deactivate/{slug}', 'PreweddingGoldController@unpublish')->name('preweddinggold.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/preweddinggold/delete/{slug}', 'PreweddingGoldController@destroy')->name('preweddinggold.delete');

});


Route::group(['namespace' => 'App\Http\Controllers'], function (){
	//Users
	Route::get('/preweddingsilver/all', 'PreweddingSilverController@index')->name('preweddingsilver.all');
	Route::get('/preweddingsilver/add', 'PreweddingSilverController@create')->name('preweddingsilver.add');
	Route::post('/preweddingsilver/save', 'PreweddingSilverController@store')->name('preweddingsilver.save');
	Route::get('/preweddingsilver/view/{slug}', 'PreweddingSilverController@show')->name('preweddingsilver.view');
	Route::get('/preweddingsilver/edit/{slug}', 'PreweddingSilverController@edit')->name('preweddingsilver.edit');
	Route::post('/preweddingsilver/update/{slug}', 'PreweddingSilverController@update')->name('preweddingsilver.update');
	Route::get('/preweddingsilver/activate/{slug}', 'PreweddingSilverController@publish')->name('preweddingsilver.activate');
	Route::get('/preweddingsilver/deactivate/{slug}', 'PreweddingSilverController@unpublish')->name('preweddingsilver.deactivate');
	Route::get('/servicesbody/deletepostimage/{slug}', 'servicesbodyController@deleteimage')->name('servicesbody.deletepostimage');
	Route::get('/preweddingsilver/delete/{slug}', 'PreweddingSilverController@destroy')->name('preweddingsilver.delete');

});
