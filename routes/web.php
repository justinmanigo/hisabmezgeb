<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view("receipt",'hmreceipt');
Route::view("customers",'hmcustomer');
Route::view("deposit",'hmdeposit');
Route::view("new_deposit",'hmndeposit');
Route::view("new_receipt",'hmnreceipt');
Route::view("new_advance",'hmnadvancereceipt');
Route::view("new_credit_receipt",'hmncreditreceipt');
Route::view("new_proforma",'hmnproforma');
Route::view("new_customer",'hmncustomer');
Route::view("bill",'hmbill');
Route::view("new_bill",'hmnbill');
Route::view("payment",'hmpayment');
Route::view("purchase_order",'hmnpo');
Route::view("new_bill_payment",'hmnbpayment');
Route::view("new_vat_payment",'hmnvpayment');
Route::view("new_withholding_payment",'hmnwpayment');
Route::view("new_payroll_payment",'hmnppayment');
Route::view("new_commission_payment",'hmncpayment');
Route::view("vendors",'hmvendor');
Route::view("new_vendors",'hmnvendor');
Route::view("bank_accounts",'hmbankaccounts');
Route::view("new_bank_account",'hmnbankaccount');
Route::view("transfer",'hmtransfer');
Route::view("new_transfer",'hmntransfer');
Route::view("transactions",'hmtransactions');
Route::view("bankreconciliation",'hmbankreconciliation');
Route::view("new_reconciliation",'hmnbankreconciliation');
Route::view("jv",'hmjournalvoucher');
Route::view("new_jv",'hmnjournalvoucher');
Route::view("companyinfo",'hmci');
Route::view("users",'hmusers');
Route::view("new_user",'hmnuser');
Route::view("theme",'hmtheme');
Route::view("taxes",'hmtaxes');
Route::view("new_tax",'hmntax');
Route::view("withholding",'hmwithholding');
Route::view("new_withholding",'hmnwithholding');
Route::view("chart_of_accounts",'hmchartofaccounts');
Route::view("new_coa",'hmncoa');
Route::view("begining_balance",'hmbb');
Route::view("default",'hmdefault');
Route::view("settings",'hmsettings');
Route::view("actionbuttons",'hmsample1');
Route::view("items",'hmitems');
Route::view("new_item",'hmnitem');
Route::view("staffs",'hmstaffs');
Route::view("new_staff",'hmnstaff');
Route::view("reports",'hmreports');
Route::view("new_income_tax",'hmnit');
Route::view("new_pension",'hmnpension');
Route::view("calendar",'hmc');
Route::view("notification",'hmn');
Route::view("default_advance_receipt",'hmdefaultar');
Route::view("default_credit_receipt",'hmdefaultcr');
Route::view("default_bill",'hmdefaultb');
Route::view("default_payment",'hmdefaultp');
Route::view("referral",'hmreferralcode');