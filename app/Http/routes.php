<?php

Route::group(['prefix' => '/'], function () {

    Route::get('/', [ 
    	'as' => 'index', 
    	'uses' => 'Fontend\HomeController@index'
    ]);

    Route::get('/gioi-thieu', [ 
      'as' => 'gioi-thieu', 
      'uses' => 'Fontend\IntroController@index'
  ]);

    Route::get('/lien-he', [ 
      'as' => 'lien-he', 
      'uses' => 'Fontend\ContactController@index'
  ]);

    Route::get('/tin-tuc', [ 
      'as' => 'tin-tuc', 
      'uses' => 'Fontend\NewsController@index'
  ]);

    Route::get('/tuyen-dung', [ 
      'as' => 'tuyen-dung', 
      'uses' => 'Fontend\CareersController@index'
  ]);

    Route::get('/giao-hang-nhanh', [ 
      'as' => 'giao-hang-nhanh', 
      'uses' => 'Fontend\FastShipController@index'
  ]);

    Route::get('/giao-hang-thu-tien-cod', [ 
      'as' => 'giao-hang-thu-tien-cod', 
      'uses' => 'Fontend\CashReceiptsCodController@index'
  ]);

    Route::get('/giao-hang-tiet-kiem', [ 
      'as' => 'giao-hang-tiet-kiem', 
      'uses' => 'Fontend\DeliveryOfSavingsController@index'
  ]);

    Route::get('/giao-hang-trong-ngay', [ 
      'as' => 'giao-hang-trong-ngay', 
      'uses' => 'Fontend\DeliveryOfDayController@index'
  ]);

    Route::get('/giao-hang-dia-phuong', [ 
      'as' => 'giao-hang-dia-phuong', 
      'uses' => 'Fontend\DeliveryOfRegionController@index'
  ]);

    Route::get('/van-tai-bac-nam', [ 
      'as' => 'van-tai-bac-nam', 
      'uses' => 'Fontend\NorthSouthTransportationController@index'
  ]);

    Route::get('/luu-kho', [ 
      'as' => 'luu-kho', 
      'uses' => 'Fontend\StorageController@index'
  ]);

});

// Backend
Route::group(['prefix' => '/fs/cpanel/'], function () {

    Route::get('/dashboard' ,[ 
    	'as' => 'dashboard-index', 
    	'uses' => 'Backend\IndexController@index'
    ]);

    Route::get('/settings' ,[ 
    	'as' => 'settings-index', 
    	'uses' => 'Backend\SettingsController@index'
    ]);

    // Pages
    Route::get('/pages' ,[ 
    	'as' => 'pages-index', 
    	'uses' => 'Backend\PagesController@index'
    ]);
    Route::get('/pages/add' ,[ 
    	'as' => 'pages-get-add', 
    	'uses' => 'Backend\PagesController@add'
    ]);
    Route::post('/pages/add' ,[ 
        'as' => 'pages-post-add', 
        'uses' => 'Backend\PagesController@postAdd'
    ]);
    Route::get('/pages/edit/{id}' ,[ 
        'as' => 'pages-get-edit', 
        'uses' => 'Backend\PagesController@edit'
    ]);
    Route::post('/pages/edit/{id}' ,[ 
        'as' => 'pages-post-edit', 
        'uses' => 'Backend\PagesController@update'
    ]);
    Route::post('/pages/delete/{id}' ,[ 
        'as' => 'pages-get-delete', 
        'uses' => 'Backend\PagesController@delete'
    ]);
     // End Pages

    // Pages
    Route::get('/menu' ,[ 
      'as' => 'menu-index', 
      'uses' => 'Backend\MenuController@index'
    ]);
     Route::post('/menu/add' ,[ 
      'as' => 'menu-add', 
      'uses' => 'Backend\MenuController@create'
    ]);
    Route::post('/menu/update/{id}' ,[ 
      'as' => 'menu-update', 
      'uses' => 'Backend\MenuController@update'
    ]);
   
     // End Pages

    

    Route::get('/order' ,[ 
    	'as' => 'order-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/delivery' ,[ 
    	'as' => 'delivery-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/email' ,[ 
    	'as' => 'email-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/customer' ,[ 
    	'as' => 'page-add', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/finance' ,[ 
    	'as' => 'finance-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/users' ,[ 
    	'as' => 'users-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/statistical' ,[ 
    	'as' => 'statistical-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/news' ,[ 
    	'as' => 'news-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/partner' ,[ 
    	'as' => 'partner-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/slides' ,[ 
    	'as' => 'slides-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);
    Route::get('/branch' ,[ 
    	'as' => 'branch-index', 
    	'uses' => 'Backend\PagesController@create'
    ]);

});








