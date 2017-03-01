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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/404', 'PageNotFoundController@index')->name('404');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/accordion', 'AccordionController@index')->name('accordion');

Route::get('/alert', 'AlertController@index')->name('alert');

Route::get('/badge', 'BadgeController@index')->name('badge');

Route::get('/blank', 'BlankController@index')->name('blank');

Route::get('/button', 'ButtonController@index')->name('button');

Route::get('/card', 'CardController@index')->name('card');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/custom-scrollbar', 'CustomScrollbarController@index')->name('custom-scrollbar');

Route::get('/data-table', 'DataTableController@index')->name('data-table');

Route::get('/datetimepicker', 'DatetimepickerController@index')->name('datetimepicker');

Route::get('/dropdown', 'DropdownController@index')->name('dropdown');

Route::get('/floating-button', 'FloatingButtonController@index')->name('floating-button');

Route::get('/form-element', 'FormElementController@index')->name('form-element');

Route::get('/form', 'FormController@index')->name('form');

Route::get('/icons', 'IconsController@index')->name('icons');

Route::get('/inbox', 'InboxController@index')->name('inbox');

Route::get('/list', 'ListController@index')->name('list');

Route::get('/login-page', 'LoginPageController@index')->name('login-page');

Route::get('/modal', 'ModalController@index')->name('modal');

Route::get('/navbar', 'NavbarController@index')->name('navbar');

Route::get('/notifications', 'NotificationsController@index')->name('notifications');

Route::get('/popover', 'PopoverController@index')->name('popover');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/progressbar', 'ProgressbarController@index')->name('progressbar');

Route::get('/range-slider', 'RangeSliderController@index')->name('range-slider');

Route::get('/select2', 'Select2Controller@index')->name('select2');

Route::get('/shadow', 'ShadowController@index')->name('shadow');

Route::get('/tab', 'TabController@index')->name('tab');

Route::get('/table-with-expand-collapse', 'TableExpandCollapseController@index')->name('table-with-expand-collapse');

Route::get('/table', 'TableController@index')->name('table');

Route::get('/tooltip', 'TooltipController@index')->name('tooltip');

Route::get('/typography', 'TypographyController@index')->name('typography');
