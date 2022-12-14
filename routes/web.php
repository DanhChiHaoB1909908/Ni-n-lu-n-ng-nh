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
// Frontend
Route::get('/','HomeController@index' );
Route::get('/trang-chu','HomeController@index' );
Route::post('/tim-kiem','HomeController@search' );

// Danh muc san pham trang chu
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_category_home' );
Route::get('/thuong-hieu-san-pham/{brand_id}','BrandProduct@show_brand_home' );
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@details_product' );



// Backend
Route::get('/admin','AdminController@index' );
Route::get('/dashboard','AdminController@show_dashboard' );
Route::get('/logout','AdminController@logout' );
Route::post('/admin-dashboard','AdminController@dashboard' );


// Category Product
Route::get('/add-category-product','CategoryProduct@add_category_product' );

Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product' );
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product' );

Route::get('/all-category-product','CategoryProduct@all_category_product' );

Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product' );
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product' );

Route::post('/save-category-product','CategoryProduct@save_category_product' );
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product' );


// Brand Product
Route::get('/add-brand-product','BrandProduct@add_brand_product' );

Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product' );
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product' );

Route::get('/all-brand-product','BrandProduct@all_brand_product' );

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product' );
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product' );

Route::post('/save-brand-product','BrandProduct@save_brand_product' );
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product' );


// Product
Route::get('/add-product','ProductController@add_product' );

Route::get('/edit-product/{product_id}','ProductController@edit_product' );
Route::get('/delete-product/{product_id}','ProductController@delete_product' );

Route::get('/all-product','ProductController@all_product' );

Route::get('/unactive-product/{product_id}','ProductController@unactive_product' );
Route::get('/active-product/{product_id}','ProductController@active_product' );

Route::post('/save-product','ProductController@save_product' );
Route::post('/update-product/{product_id}','ProductController@update_product' );


// Cart
Route::post('/save-cart','CartController@save_cart' );
Route::post('/update-cart-quantity','CartController@update_cart_quantity' );
Route::get('/show-cart','CartController@show_cart' );
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart' );


// CheckOut
Route::get('/login-checkout','CheckoutController@login_checkout' );
Route::get('/logout-checkout','CheckoutController@logout_checkout' );
Route::post('/add-customer','CheckoutController@add_customer' );
Route::post('/order-place','CheckoutController@order_place' );
Route::post('/login-customer','CheckoutController@login_customer' );
Route::get('/checkout','CheckoutController@checkout' );
Route::get('/payment','CheckoutController@payment' );
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer' );



// Order admin
Route::get('/manage-order','CheckoutController@manage_order' );
Route::get('/view-order/{orderId}','CheckoutController@view_order' );
Route::get('/view-order-customer/{orderId}','CheckoutController@view_order_customer' );
Route::get('/delete-order/{orderId}','CheckoutController@delete_order' );

Route::get('/active-order-status/{order_id}','CheckoutController@active_order_status' );
Route::get('/unactive-order-status/{order_id}','CheckoutController@unactive_order_status' );
Route::get('/active-order-ordered/{order_id}','CheckoutController@active_order_ordered' );




// Ordered Frontend
Route::get('/view-ordered','CheckoutController@view_ordered' );
Route::get('/view-ordered-details/{orderId}','CheckoutController@view_ordered_details' );


// Product Frontend
Route::get('/show-product','ProductController@show_product' );


// Category News 
Route::get('/add-category-news','NewsController@add_category_news' );
Route::get('/all-category-news','NewsController@all_category_news' );
Route::post('/save-category-news','NewsController@save_category_news' );

Route::get('/active-category-news/{category_news_id}','NewsController@active_category_news' );
Route::get('/unactive-category-news/{category_news_id}','NewsController@unactive_category_news' );

Route::get('/edit-category-news/{category_news_id}','NewsController@edit_category_news' );
Route::get('/delete-category-news/{category_news_id}','NewsController@delete_category_news' );

Route::post('/update-category-news/{category_news_id}','NewsController@update_category_news' );


// News
Route::get('/add-news','NewsController@add_news' );
Route::get('/all-news','NewsController@all_news' );
Route::post('/save-news','NewsController@save_news' );

Route::get('/active-news/{news_id}','NewsController@active_news' );
Route::get('/unactive-news/{news_id}','NewsController@unactive_news' );

Route::get('/edit-news/{news_id}','NewsController@edit_news' );
Route::get('/delete-news/{news_id}','NewsController@delete_news' );

Route::post('/update-news/{news_id}','NewsController@update_news' );

// Show News trang ch???
Route::get('/chi-tiet-tin-tuc/{tintuc_id}','NewsController@details_news' );

Route::get('/show-news','NewsController@show_news' );

// Li??n H???
Route::get('/show-contact','ContactController@show_contact' );

// Th??nh vi??n
Route::get('/all-customer','CustomerController@all_customer' );

