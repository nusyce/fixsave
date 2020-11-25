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

$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'front_routes' . DIRECTORY_SEPARATOR;

/* * ******** IndexController ************ */

Route::get('/', 'IndexController@index')->name('index');

Route::post('set-locale', 'IndexController@setLocale')->name('set.locale');

/* * ******** HomeController ************ */

Route::get('home', 'HomeController@index')->name('home');

/* * ******** TypeAheadController ******* */

Route::get('typeahead-currency_codes', 'TypeAheadController@typeAheadCurrencyCodes')->name('typeahead.currency_codes');

/* * ******** FaqController ******* */

Route::get('faq', 'FaqController@index')->name('faq');

/* * ******** CronController ******* */

Route::get('check-packag

e-validity', 'CronController@checkPackageValidity');

/* * ******** Verification ******* */

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');

Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

Route::get('company-email-verification/error', 'Company\Auth\RegisterController@getVerificationError')->name('company.email-verification.error');

Route::get('company-email-verification/check/{token}', 'Company\Auth\RegisterController@getVerification')->name('company.email-verification.check');

/* * ***************************** */

// Sociallite Start

// OAuth Routes

Route::get('login/jobseeker/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('login/jobseeker/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/employer/{provider}', 'Company\Auth\LoginController@redirectToProvider');

Route::get('login/employer/{provider}/callback', 'Company\Auth\LoginController@handleProviderCallback');

// Sociallite End

/* * ***************************** */

Route::post('tinymce-image_upload-front', 'TinyMceController@uploadImage')->name('tinymce.image_upload.front');



Route::get('cronjob/send-alerts', 'AlertCronController@index')->name('send-alerts');



Route::post('subscribe-newsletter', 'SubscriptionController@getSubscription')->name('subscribe.newsletter');



/* * ******** OrderController ************ */

include_once($real_path . 'order.php');

/* * ******** CmsController ************ */

include_once($real_path . 'cms.php');

/* * ******** JobController ************ */

include_once($real_path . 'job.php');

/* * ******** ContactController ************ */

include_once($real_path . 'contact.php');

/* * ******** CompanyController ************ */

include_once($real_path . 'company.php');

/* * ******** AjaxController ************ */

include_once($real_path . 'ajax.php');

/* * ******** UserController ************ */

include_once($real_path . 'site_user.php');

/* * ******** User Auth ************ */

Auth::routes();

/* * ******** Company Auth ************ */

include_once($real_path . 'company_auth.php');

/* * ******** Admin Auth ************ */

include_once($real_path . 'admin_auth.php');



Route::get('bewerbung', 'BewerbungController@index')->name('bewerbung');
Route::get('/register_mail/{name}/{pass}', 'Company\Auth\RegisterController@register')->name('verifmail');
Route::get('standorte', 'StandorteController@index')->name('standorte');
Route::get('datenschutzbestimmung', 'DatenschutzbestimmungController@index')->name('datenschutzbestimmung');
Route::post('bewerbung_save', 'BewerbungController@register')->name('bewerbung.save');
Route::post('/password-email', 'StandorteController@ResetLinkEmail')->name('password');
Route::post('/password-reset', 'StandorteController@Reset2LinkEmail')->name('password2');
Route::post('/reset-user-password', 'StandorteController@resetPasswordUser')->name('user.password.reset');
Route::post('/verify-email', 'StandorteController@verifyEmailUser')->name('user.verify');
Route::get('blog', 'BlogController@index')->name('blogs');

Route::get('blog/search', 'BlogController@search')->name('blog-search');

Route::get('blog/{slug}', 'BlogController@details')->name('blog-detail');

Route::get('/blog/category/{blog}', 'BlogController@categories')->name('blog-category');

Route::get('/company-change-message-status', 'CompanyMessagesController@change_message_status')->name('company-change-message-status');
Route::get('/seeker-change-message-status', 'Job\SeekerSendController@change_message_status')->name('seeker-change-message-status');

Route::get('/sitemap', 'SitemapController@index');

Route::get('/sitemap/companies', 'SitemapController@companies');



Route::get('list-berufe',['uses' => 'Admin\BerufeController@indexBerufe'])->name('list.berufe');
Route::get('create-berufe',['uses' => 'Admin\BerufeController@createBerufe'])->name('create.berufe');


Route::get('list-wahle',['uses' => 'Admin\WahleController@indexWahle'])->name('list.wahle');
Route::get('create-wahle',['uses' => 'Admin\WahleController@createWahle'])->name('create.wahle');
Route::post('store-wahle',['uses' => 'Admin\WahleController@storeWahle'])->name('store.wahle');
Route::get('ajax-wahle',['uses' => 'Admin\WahleController@ajaxWahle'])->name('ajax.wahle');
Route::get('loschen-wahle/{id}',['uses' => 'Admin\WahleController@deleteWahle'])->name('loschen.wahle');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
