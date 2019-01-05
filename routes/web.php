<?php


Route::group(['namespace'=>'Front'], function () {
    Route::get('/', 'PostController@index')->name('homepage');
    Route::get('/category/{category}', 'PostController@category')->name('category');
    Route::get('/tag/{tag}', 'PostController@tag')->name('tag');
    Route::resource('post', 'PostController');

});


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'], function () {

    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'AdminAuth\LoginController@login')->name('login.submit');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');


    Route::resource('tag', 'TagController');
    Route::any('/tag/delall', 'TagController@delall')->name('tag.delall');
    Route::resource('category', 'CategoryController');
    //文章管理
    Route::any('/editor/upload_img', 'PostController@upload_img');
    Route::resource('post', 'PostController');
   //高级分类
    Route::any('/highlevel/delall', 'HighLevelController@delall')->name('highlevel.delall');
    Route::get('/json-middles','HighlevelController@middlelevels');
    Route::resource('highlevel', 'HighlevelController');
    //中级分类
    Route::any('/middlelevel/delall', 'MiddleLevelController@delall')->name('middlelevel.delall');
    Route::resource('middlelevel', 'MiddlelevelController');
    //初级分类
    Route::any('/elementary/delall', 'ElementaryLevelController@delall')->name('elementarylevel.delall');
    Route::resource('elementarylevel', 'ElementaryLevelController');

});

Auth::routes();
