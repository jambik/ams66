<?php

/* ------------------------------------------- Admin routes --------------------------------------------------------- */
Route::group(['prefix' => 'admin'], function()
{
    ## Admin login/logout
    Route::get('login', ['as' => 'admin.login', 'uses' =>'Admin\Auth\AuthController@getLogin']);
    Route::post('login', ['as' => 'admin.login.post', 'uses' =>'Admin\Auth\AuthController@postLogin']);
    Route::get('logout', ['as' => 'admin.logout', 'uses' =>'Admin\Auth\AuthController@getLogout']);

    ## Models routes
    Route::group(['middleware' => 'admin'], function()
    {
        ## Admin index
        Route::get('/', ['as' => 'admin', 'uses' =>'Admin\IndexController@index']);

        ## Settings
        Route::get('settings', ['as' => 'admin.settings', 'uses' =>'Admin\SettingsController@index']);
        Route::post('settings', ['as' => 'admin.settings.save', 'uses' =>'Admin\SettingsController@save']);

        ## Categories
        Route::resource('categories', 'Admin\CategoriesController');
        Route::match(['get', 'post'], 'categories/move', ['as' => 'admin.categories.move', 'uses' =>'Admin\CategoriesController@move']);

        ## Products
        Route::resource('products', 'Admin\ProductsController');

        ## Galleries
        Route::resource('galleries', 'Admin\GalleriesController');

        ## Photos
        Route::resource('photos', 'Admin\PhotosController');

        ## Pages
        Route::resource('pages', 'Admin\PagesController');

        ## Blocks
        Route::resource('blocks', 'Admin\BlocksController');

        ## News
        Route::resource('news', 'Admin\NewsController');

        ## Articles
        Route::resource('articles', 'Admin\ArticlesController');

        ## Slides
        Route::resource('slides', 'Admin\SlidesController');

        ## Partners
        Route::resource('partners', 'Admin\PartnersController');

        ## Recalls
        Route::resource('recalls', 'Admin\RecallsController');

        ## Users
        Route::resource('users', 'Admin\UsersController');

        ## Administrators
        Route::resource('administrators', 'Admin\AdministratorsController');

        ## Sortable routes
        Route::post('sort', ['as' => 'sort', 'uses' => '\Rutorika\Sortable\SortableController@sort']);

        ## Imageable routes
        Route::delete('imageable', ['as' => 'imageable.delete', 'uses' => 'Admin\ImageableController@delete']);

        ## Photoable routes
        Route::post('photoable', ['as' => 'photoable.save', 'uses' =>'Admin\PhotoableController@savePhoto']);
        Route::delete('photoable/{id}', ['as' => 'photoable.delete', 'uses' => 'Admin\PhotoableController@deletePhoto'])->where('id', '[0-9]+');
    });
});


/* --------------------------------------------- App routes --------------------------------------------------------- */
Route::group([], function ()
{
    ## Authentication / Registration / Password Reset
    Route::auth();

    ## Index
    Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
    Route::get('/land-department', ['as' => 'land-department', 'uses' => 'PagesController@landDepartment']);
    Route::get('/building-department', ['as' => 'building-department', 'uses' => 'PagesController@buildingDepartment']);
    Route::get('/investing-department', ['as' => 'investing-department', 'uses' => 'PagesController@investingDepartment']);

    ## Search
    Route::get('/search', ['as' => 'search', 'uses' => 'SearchController@search']);

    # Feedback
    Route::post('feedback', ['as' => 'feedback.send', 'uses' => 'CommonController@feedbackSend']);

    ## Recall
    Route::post('recall', ['as' => 'recall.send', 'uses' => 'CommonController@recallSend']);

    ## Get Info
    Route::post('get_info', ['as' => 'get_info.send', 'uses' => 'CommonController@getInfoSend']);

    ## Consultation
    Route::post('consultation', ['as' => 'consultation.send', 'uses' => 'CommonController@consultationSend']);
});