<?php
use Illuminate\Support\Facades\Route;

Route::get('/','Front\PageController@index')->name('home');
Route::get('source-list', 'Front\PageController@get_source');
Route::get('destination-list', 'Front\PageController@get_destination');
Route::get('airport-list', 'Front\PageController@get_airports');
Route::get('/about','Front\PageController@about')->name('about');
Route::get('/services','Front\PageController@services')->name('services');
Route::get('/contact','Front\PageController@contact')->name('contact');
Route::get('/terms-and-condition','Front\PageController@terms_and_condition')->name('terms-and-condition');
Route::get('/privacy-policy','Front\PageController@privacy_policy')->name('privacy-policy');
Route::get('/one-way-taxi','Front\PageController@one_way_taxi')->name('one-way-taxi');
Route::get('/outstation-taxi','Front\PageController@outstation_taxi')->name('outstation-taxi');
Route::get('/airport-taxi','Front\PageController@airport_taxi')->name('airport-taxi');
Route::get('/local-taxi','Front\PageController@local_taxi')->name('local-taxi');
Route::get('/car-rental','Front\PageController@car_rental')->name('car-rental');
/* Route::redirect('/', '/login'); */
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Source
    Route::delete('sources/destroy', 'SourceController@massDestroy')->name('sources.massDestroy');
    Route::post('sources/media', 'SourceController@storeMedia')->name('sources.storeMedia');
    Route::post('sources/ckmedia', 'SourceController@storeCKEditorImages')->name('sources.storeCKEditorImages');
    Route::post('sources/parse-csv-import', 'SourceController@parseCsvImport')->name('sources.parseCsvImport');
    Route::post('sources/process-csv-import', 'SourceController@processCsvImport')->name('sources.processCsvImport');
    Route::resource('sources', 'SourceController');

    // Destination
    Route::delete('destinations/destroy', 'DestinationController@massDestroy')->name('destinations.massDestroy');
    Route::post('destinations/media', 'DestinationController@storeMedia')->name('destinations.storeMedia');
    Route::post('destinations/ckmedia', 'DestinationController@storeCKEditorImages')->name('destinations.storeCKEditorImages');
    Route::resource('destinations', 'DestinationController');

    // Trip
    Route::delete('trips/destroy', 'TripController@massDestroy')->name('trips.massDestroy');
    Route::post('trips/media', 'TripController@storeMedia')->name('trips.storeMedia');
    Route::post('trips/ckmedia', 'TripController@storeCKEditorImages')->name('trips.storeCKEditorImages');
    Route::post('trips/parse-csv-import', 'TripController@parseCsvImport')->name('trips.parseCsvImport');
    Route::post('trips/process-csv-import', 'TripController@processCsvImport')->name('trips.processCsvImport');
    Route::resource('trips', 'TripController');



    // Local Cab
    Route::delete('local-cabs/destroy', 'LocalCabController@massDestroy')->name('local-cabs.massDestroy');
    Route::post('local-cabs/media', 'LocalCabController@storeMedia')->name('local-cabs.storeMedia');
    Route::post('local-cabs/ckmedia', 'LocalCabController@storeCKEditorImages')->name('local-cabs.storeCKEditorImages');
    Route::post('local-cabs/parse-csv-import', 'LocalCabController@parseCsvImport')->name('local-cabs.parseCsvImport');
    Route::post('local-cabs/process-csv-import', 'LocalCabController@processCsvImport')->name('local-cabs.processCsvImport');
    Route::resource('local-cabs', 'LocalCabController');



        // PricePerKM
    Route::delete('priceperkm/destroy', 'PricePerKmController@massDestroy')->name('priceperkm.massDestroy');
    Route::resource('priceperkm', 'PricePerKmController');

         // Blog Category
    Route::delete('blog-categories/destroy', 'BlogCategoryController@massDestroy')->name('blog-categories.massDestroy');
    Route::post('blog-categories/media', 'BlogCategoryController@storeMedia')->name('blog-categories.storeMedia');
    Route::post('blog-categories/ckmedia', 'BlogCategoryController@storeCKEditorImages')->name('blog-categories.storeCKEditorImages');
    Route::resource('blog-categories', 'BlogCategoryController');

    // Blog Post
    Route::delete('blog-posts/destroy', 'BlogPostController@massDestroy')->name('blog-posts.massDestroy');
    Route::post('blog-posts/media', 'BlogPostController@storeMedia')->name('blog-posts.storeMedia');
    Route::post('blog-posts/ckmedia', 'BlogPostController@storeCKEditorImages')->name('blog-posts.storeCKEditorImages');
    Route::resource('blog-posts', 'BlogPostController');

    // Inquiry
    Route::delete('inquiries/destroy', 'InquiryController@massDestroy')->name('inquiries.massDestroy');
    Route::post('inquiries/parse-csv-import', 'InquiryController@parseCsvImport')->name('inquiries.parseCsvImport');
    Route::post('inquiries/process-csv-import', 'InquiryController@processCsvImport')->name('inquiries.processCsvImport');
    Route::resource('inquiries', 'InquiryController');

     //Faq
    Route::delete('faqs/destroy', 'FaqsController@massDestroy')->name('faqs.massDestroy');
   Route::resource('faqs', 'FaqsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});


Route::post('confirm-booking','Front\PageController@confirm_booking')->name('confirm-booking');
Route::get('/{pickup}-to-{drop}-taxi', 'Front\PageController@my_trip')->where(['pickup' => '[a-z0-9-]+', 'drop' => '[a-z0-9-]+'])->name('trip.show');
Route::post('/{pickup}-to-{drop}-taxi', 'Front\PageController@showRoute')->where(['pickup' => '[a-z0-9-]+', 'drop' => '[a-z0-9-]+'])->name('booking.route');
Route::get('{any}', 'Front\PageController@my_trip')->where('any', '.*')->name('routes');
