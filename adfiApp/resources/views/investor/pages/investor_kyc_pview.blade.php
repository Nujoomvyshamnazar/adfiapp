@extends('investor.layouts.adminlayout')

@section('title', 'User Profile')

@section('maintitle', 'User Profile')

@section('content')
<section class="content paddingleft_right15">
     <div class="row">
         <div class="col-md-12">
             <div class="panel panel-success">
                 <div class="panel-heading">
                     <h3 class="panel-title"><i class="livicon" data-name="money" data-size="14" data-loop="true" data-c="#fff" data-hc="#fff"></i> Invoice from <b>JOSH</b></h3>
                     <div class="pull-right pan_colors">
                         <ul class="list-inline colors">
                             <li class="bg-default"></li>
                             <li class="bg-primary"></li>
                             <li class="bg-success"></li>
                             <li class="bg-warning"></li>
                             <li class="bg-danger"> </li>
                             <li class="bg-info"></li>
                         </ul>
                     </div>
                 </div>
                 <div class="panel-body" style="border:1px solid #ccc;padding:0;margin:0;">
                     <div class="row" style="padding: 15px;margin-top:5px;">
                         <div class="col-md-6">
                             <img src="img/logo2.png" alt="logo" class="img-responsive">
                         </div>
                         <div class="col-md-6">
                             <div class="pull-right">
                                 <strong>Pay To:</strong>
                                 <br>
                                 <strong>JOSH</strong>
                                 <br> 3946 Penn Street
                                 <br> Birmingham, AL 35209
                                 <br> josh@example.com
                                 <br> SALES TAX:254876
                             </div>
                         </div>
                     </div>
                     <div class="row" style="padding: 15px;">
                         <div class="col-md-9 col-xs-6" style="margin-top:5px;">
                             <strong>Invoice To:</strong>
                             <br> Bryan C. Kurtz
                             <br> 3848 Lunetta Street
                             <br> Denton, TX 76201
                             <br> LOCALITY
                             <br> Region MV28SX
                             <br> SALES TAX: 21456783
                         </div>
                         <div class="col-md-3 col-xs-6" style="padding-right:0">
                             <div id="invoice" style="background-color: #eee;text-align:right;padding: 15px;padding-bottom:23px;border-bottom-left-radius: 6px;border-top-left-radius: 6px;">
                                 <h4><strong>Invoice INV001</strong></h4>
                                 <h4><strong>20 DEC 2015</strong></h4>
                                 Payment Terms: 15days
                                 <br> Payment Due by 01 Jan 2016
                                 <br>
                             </div>
                         </div>
                     </div>
                     <div class="row" style="padding:15px;">
                         <div class="col-md-12 col-xs-12">
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>SI No.</th>
                                             <th>Details</th>
                                             <th>Quantity</th>
                                             <th>Unit Price($)</th>
                                             <th>Tax</th>
                                             <th>NetSubtotal($)</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>1.</td>
                                             <td>Volex 13A 2G DP White Chrome angled Edge</td>
                                             <td>3</td>
                                             <td>165.00</td>
                                             <td>10.0%</td>
                                             <td>500.00</td>
                                         </tr>
                                         <tr>
                                             <td>2.</td>
                                             <td>Volex 1G 400W M/Lv Chrme Angled Edge</td>
                                             <td>5</td>
                                             <td>198.00</td>
                                             <td>14.1%</td>
                                             <td>1000.00</td>
                                         </tr>
                                         <tr>
                                             <td>3.</td>
                                             <td>Halolite Polished Chrome Circular Cabinet Downlight pack of 3</td>
                                             <td>2</td>
                                             <td>374.00</td>
                                             <td>5.5%</td>
                                             <td>750.00</td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>10% Discount</td>
                                             <td>225</td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Net Total</td>
                                             <td>2025.00</td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>tax</td>
                                             <td>599.40</td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td><strong>TOTAL</strong></td>
                                             <td><strong>2624.60</strong></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <div style="background-color: #eee;padding:15px;" id="footer-bg">
                         <div class="row">
                             <div class="col-md-6">
                                 <strong>Payment Details</strong>
                                 <br>
                                 <strong>Kayin Bank</strong>
                                 <br>
                                 <strong>Bank/Sort code</strong>: 32-25-85
                                 <br>
                                 <strong>Account Number</strong>: 54257963
                                 <br>
                                 <strong>Payment Reference</strong>: INV001
                                 <br>
                             </div>
                             <div class="col-md-6">
                                 <div class="pull-right">
                                     <strong>Other Information</strong>
                                     <br>
                                     <strong>Company Registration Number</strong>:254798621
                                     <br>
                                     <strong>Contact/PO</strong>:PO5876452
                                 </div>
                             </div>
                         </div>
                         <hr>
                         <p class="text-center"><strong>Payment should be made by bank transfer or cheque made by payable to Josh</strong></p>
                         <div style="margin:10px 20px;text-align:center;" class="btn-section">
                             <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                                 <span style="color:#fff;" onclick="javascript:window.print();">
                                 <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                    data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                 Print
                             </span>
                             </button>
                             <button type="button" class="btn btn-responsive button-alignment btn-default" data-toggle="button">
                                 <span class="btn_send">
                                 <i class="livicon" data-name="check" data-size="16" data-loop="true"
                                    data-c="#111" data-hc="#111" style="position:relative;top:3px;"></i>
                                 Send Your Invoice
                             </span>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
@endsection
