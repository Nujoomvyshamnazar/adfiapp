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

// admin Dashboard Route
Route::get('/admin/', function()
{
    return View::make('admin.pages.dashboard');
});

Route::get('/admin/all-enquirys', function()
{
    return View::make('admin.pages.all-enquiry');
});

Route::get('/admin/supplier-enquiry', function()
{
    return View::make('admin.pages.supplier-enquiry');
});


Route::get('/admin/buyer-enquiry', function()
{
    return View::make('admin.pages.buyer-enquiry');
});

Route::get('/admin/investor-enquiry', function()
{
    return View::make('admin.pages.investor-enquiry');
});

Route::get('/admin/invitation-pending', function()
{
    return View::make('admin.pages.invitation-pending');
});


Route::get('/admin/invited-emails', function()
{
    return View::make('admin.pages.invited-emails');
});

Route::get('/admin/invitation-success-statistics', function()
{
    return View::make('admin.pages.invitation-success-statistics');
});



// Admin Early payments
Route::get('/admin/offer-pending-supplier', function()
{
    return View::make('admin.pages.offer-pending-supplier');
});

Route::get('/admin/offer-pending-buyer', function()
{
    return View::make('admin.pages.offer-pending-buyer');
});


Route::get('/admin/buyer-returned-offer', function()
{
    return View::make('admin.pages.buyer-returned-offer');
});


Route::get('/admin/offer-pending-investor', function()
{
    return View::make('admin.pages.offer-pending-investor');
});



// Admin Invoices Module

Route::get('/admin/invoices-pending-admin-Approval', function()
{
    return View::make('admin.pages.invoices-pending-admin-Approval');
});


Route::get('/admin/invoices-rejected', function()
{
    return View::make('admin.pages.invoices-rejected');
});


Route::get('/admin/invoices-uploaded', function()
{
    return View::make('admin.pages.invoices-uploaded');
});

Route::get('/admin/pending-for-buyer-Approval', function()
{
    return View::make('admin.pages.pending-for-buyer-Approval');
});


// Admin Kyc Updations
Route::get('/admin/Buyer-KYC-edits', function()
{
    return View::make('admin.pages.Buyer-KYC-edits');
});

Route::get('/admin/supplier-KYC-edits', function()
{
    return View::make('admin.pages.supplier-KYC-edits');
});

Route::get('/admin/supplier-alerts', function()
{
    return View::make('admin.pages.supplier-alerts');
});

Route::get('/admin/password-Change', function()
{
    return View::make('admin.pages.password-Change');
});

Route::get('/admin/admin-users', function()
{
    return View::make('admin.pages.admin-users');
});

Route::get('/admin/deleted-admin-users', function()
{
    return View::make('admin.pages.deleted-admin-users');
});


Route::get('/admin/date-range', function()
{
    return View::make('admin.pages.date-range');
});

Route::get('/admin/buyer-wise', function()
{
    return View::make('admin.pages.buyer-wise');
});

Route::get('/admin/investor-wise', function()
{
    return View::make('admin.pages.investor-wise');
});

Route::get('/admin/user-profile', function()
{
    return View::make('admin.pages.userprofile');
});
// admin menu ends


// Buyer routing



Route::get('/buyer/', function()
{
    return View::make('buyer.pages.dashboard');
});

Route::get('/buyer/edit-KYC', function()
{
    return View::make('buyer.pages.editkyc');
});

Route::get('/buyer/Submit-KYC', function()
{
    return View::make('buyer.pages.submitkyc');
});
// Supplier routing


//Investor routing


//supplier MENU

Route::get('/supplier', function()
{
    return View::make('supplier.pages.dashboard');
});


//investor routes
Route::get('/investor', function()
{
    return View::make('investor.pages.dashboard');
});
// Force Email Vari
//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



//Route::get('/home', 'HomeController@index')->name('home');
