<?php

//Route::redirect('/', '/login');
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

    // Asset Category
    Route::delete('asset-categories/destroy', 'AssetCategoryController@massDestroy')->name('asset-categories.massDestroy');
    Route::resource('asset-categories', 'AssetCategoryController');

    // Asset Location
    Route::delete('asset-locations/destroy', 'AssetLocationController@massDestroy')->name('asset-locations.massDestroy');
    Route::resource('asset-locations', 'AssetLocationController');

    // Asset Status
    Route::delete('asset-statuses/destroy', 'AssetStatusController@massDestroy')->name('asset-statuses.massDestroy');
    Route::resource('asset-statuses', 'AssetStatusController');

    // Asset
    Route::delete('assets/destroy', 'AssetController@massDestroy')->name('assets.massDestroy');
    Route::post('assets/media', 'AssetController@storeMedia')->name('assets.storeMedia');
    Route::post('assets/ckmedia', 'AssetController@storeCKEditorImages')->name('assets.storeCKEditorImages');
    Route::resource('assets', 'AssetController');

    // Assets History
    Route::resource('assets-histories', 'AssetsHistoryController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Integrations
    Route::delete('integrations/destroy', 'IntegrationsController@massDestroy')->name('integrations.massDestroy');
    Route::resource('integrations', 'IntegrationsController');

    // Platform
    Route::delete('platforms/destroy', 'PlatformController@massDestroy')->name('platforms.massDestroy');
    Route::resource('platforms', 'PlatformController');

    // Fortnox
    Route::delete('fortnoxes/destroy', 'FortnoxController@massDestroy')->name('fortnoxes.massDestroy');
    Route::resource('fortnoxes', 'FortnoxController');

    //Blog Categories
    Route::resource('blog-categories', 'BlogCategoryController');
    Route::get('blog-categories/del/{id}', 'BlogCategoryController@del')->name('blog-categories.delete');
    Route::get('blog-categories/status/{id}', 'BlogCategoryController@status')->name('blog-categories.status');

    //Blogs
    Route::resource('blogs', 'BlogController');
    Route::get('blogs/del/{id}', 'BlogController@del')->name('blogs.delete');
    Route::get('blogs/status/{id}', 'BlogController@status')->name('blogs.status');

//    Companies
    Route::resource('companies', 'CompanyController');
    Route::get('companies/del/{id}', 'CompanyController@del')->name('companies.delete');
    Route::get('companies/status/{id}', 'CompanyController@status')->name('companies.status');

//    Agents
    Route::resource('agents', 'AgentController');
    Route::get('agents/del/{id}', 'AgentController@del')->name('agents.delete');
    Route::get('agents/status/{id}', 'AgentController@status')->name('agents.status');

//    Property Types
    Route::resource('property-types', 'PropertyTypeController');
    Route::get('property-types/del/{id}', 'PropertyTypeController@del')->name('property-types.delete');
    Route::get('property-types/status/{id}', 'PropertyTypeController@status')->name('property-types.status');

//    Property Promotion Types
    Route::resource('property-promotion-types', 'PropertyPromotionTypeController');
    Route::get('property-promotion-types/del/{id}', 'PropertyPromotionTypeController@del')->name('property-promotion-types.delete');
    Route::get('property-promotion-types/status/{id}', 'PropertyPromotionTypeController@status')->name('property-promotion-types.status');

//    Property Ads Types
    Route::resource('property-ads-types', 'PropertyAdsTypeController');
    Route::get('property-ads-types/del/{id}', 'PropertyAdsTypeController@del')->name('property-ads-types.delete');
    Route::get('property-ads-types/status/{id}', 'PropertyAdsTypeController@status')->name('property-ads-types.status');

//    Property Types
    Route::resource('properties', 'PropertyController');
    Route::get('properties/del/{id}', 'PropertyController@del')->name('properties.delete');
    Route::get('properties/status/{id}', 'PropertyController@status')->name('properties.status');

//    SEO Management
    Route::resource('seo', 'SeoController');
    Route::get('seo/del/{id}', 'SeoController@del')->name('seo.delete');
    Route::get('seo/status/{id}', 'SeoController@status')->name('seo.status');
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
