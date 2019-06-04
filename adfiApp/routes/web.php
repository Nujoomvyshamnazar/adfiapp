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

Route::get('/activate', function () {
    return view('common.activate');
});

// admin Dashboard Route
Route::get('/admin/', function()
{
    return View::make('admin.pages.dashboard');
});
//add-admin
Route::get('/admin/add-admin', function()
{
    return View::make('admin.pages.add-users');
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


//edit-KYC
Route::get('/buyer/edit-KYC', function()
{
    return View::make('buyer.pages.editkyc');
});


//Submit-KYC
Route::get('/buyer/Submit-KYC', function()
{
    return View::make('buyer.pages.submitkyc');
});

//offer-pending
Route::get('/buyer/offer-pending', function()
{
    return View::make('buyer.pages.offer-pending');
});

//payed-early
Route::get('/buyer/payed-early', function()
{
    return View::make('buyer.pages.payed-early');
});


//Returned Offers
Route::get('/buyer/returned-offer', function()
{
    return View::make('buyer.pages.returned-offer');
});


//Approval-pending

Route::get('/buyer/Approval-pending', function()
{
    return View::make('buyer.pages.Approval-pending');
});

//date-range
Route::get('/buyer/date-range', function()
{
    return View::make('buyer.pages.date-range');
});


//supplier-wise
Route::get('/buyer/supplier-wise', function()
{
    return View::make('buyer.pages.supplier-wise');
});

//request-kyc
Route::get('/buyer/request-kyc', function()
{
    return View::make('buyer.pages.request-kyc');
});

//report-supplier

Route::get('/buyer/report-supplier', function()
{
    return View::make('buyer.pages.report-supplier');
});

//supplier-list

Route::get('/buyer/supplier-list', function()
{
    return View::make('buyer.pages.supplier-list');
});

//change-Password

Route::get('/buyer/change-Password', function()
{
    return View::make('buyer.pages.change-Password');
});

//report-supplier

Route::get('/buyer/report-supplier', function()
{
    return View::make('buyer.pages.report-supplier');
});

// supplier-list
Route::get('/buyer/supplier-list', function()
{
    return View::make('buyer.pages.supplier-list');
});

//new-purchase-order
Route::get('/buyer/new-purchase-order', function()
{
    return View::make('buyer.pages.new-purchase-order');
});

//manage-po
Route::get('/buyer/manage-po', function()
{
    return View::make('buyer.pages.manage-po');
});

//user Profile

Route::get('/buyer/user-profile', function()
{
    return View::make('buyer.pages.userprofile');
});




// Supplier routing


//Investor routing
//dashboard
Route::get('/investor', function()
{
    return View::make('investor.pages.dashboard');
});

// offer Availables
Route::get('/investor/offer-Availables', function()
{
    return View::make('investor.pages.offer-Availables');
});

//offer-Accepted
Route::get('/investor/offer-Accepted', function()
{
    return View::make('investor.pages.offer-Accepted');
});


// bids-lost
Route::get('/investor/bids-lost', function()
{
    return View::make('investor.pages.bids-lost');
});

//date-range
Route::get('/investor/date-range', function()
{
    return View::make('investor.pages.date-range');
});

//buyer-wise

Route::get('/investor/buyer-wise', function()
{
    return View::make('investor.pages.buyer-wise');
});

// supplier-wise

Route::get('/investor/supplier-wise', function()
{
    return View::make('investor.pages.supplier-wise');
});


// buyer-financials
Route::get('/investor/buyer-financials', function()
{
    return View::make('investor.pages.buyer-financials');
});

//media-coverage
Route::get('/investor/media-coverage', function()
{
    return View::make('investor.pages.media-coverage');
});

//industry-analysis

Route::get('/investor/industry-analysis', function()
{
    return View::make('investor.pages.industry-analysis');
});


//Regulations
Route::get('/investor/Regulations', function()
{
    return View::make('investor.pages.Regulations');
});

//password-Change
Route::get('/investor/password-Change', function()
{
    return View::make('investor.pages.password-Change');
});

//add-users

Route::get('/investor/add-users', function()
{
    return View::make('investor.pages.add-users');
});

//change-view-settings
Route::get('/investor/change-view-settings', function()
{
    return View::make('investor.pages.change-view-settings');
});




//supplier MENU

Route::get('/supplier', function()
{
    return View::make('supplier.pages.dashboard');
});

//offer-pending

Route::get('/supplier/offer-pending', function()
{
    return View::make('supplier.pages.offer-pending');
});

//offer-submitted

Route::get('/supplier/offer-submitted', function()
{
    return View::make('supplier.pages.offer-submitted');
});


//upload-invoice
Route::get('/supplier/upload-invoice', function()
{
    return View::make('supplier.pages.upload-invoice');
});


//date-range

Route::get('/supplier/date-range', function()
{
    return View::make('supplier.pages.date-range');
});

//select-buyer
Route::get('/supplier/select-buyer', function()
{
    return View::make('supplier.pages.select-buyer');
});

///edit-KYC
Route::get('/supplier/edit-KYC', function()
{
    return View::make('supplier.pages.edit-KYC');
});

//Submit-KYC
Route::get('/supplier/Submit-KYC', function()
{
    return View::make('supplier.pages.Submit-KYC');
});

//password-Change

Route::get('/supplier/password-Change', function()
{
    return View::make('supplier.pages.password-Change');
});


//add-users
Route::get('/supplier/add-users', function()
{
    return View::make('supplier.pages.add-users');
});

//add-buyer
Route::get('/supplier/add-buyer', function()
{
    return View::make('supplier.pages.add-buyer');
});


// deleted-buyer
Route::get('/supplier/deleted-buyer', function()
{
    return View::make('supplier.pages.deleted-buyer');
});

//list-buyer
Route::get('/supplier/list-buyer', function()
{
    return View::make('supplier.pages.list-buyer');
});

// user Profile
Route::get('/supplier/user-profile', function()
{
    return View::make('supplier.pages.userprofile');
});




//investor routes

// Force Email Vari
//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



//Route::get('/home', 'HomeController@index')->name('home');
