@extends('supplier.layouts.adminlayout')

@section('title', 'Upload Invoice')
@section('maintitle', 'Transaction ID: 44444')

@section('addheader')
@endsection



@section('content')
<section class="content paddingleft_right15">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title"><i class="livicon" data-name="money" data-size="14" data-loop="true" data-c="#fff" data-hc="#fff"></i> Invoice No: <b>l455555</b></h3>
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
                              <img src="{{asset('assets/img/logo2.png')}}" alt="logo" class="img-responsive">
                          </div>
                          <div class="col-md-6">
                              <div class="pull-right">
                                  <strong>To Buyer:</strong>
                                  <br>
                                  <strong>ADFI</strong>
                                  <br> 3946 Penn Street
                                  <br> Birmingham, AL 35209
                                  <br> josh@example.com
                                  <br> SALES TAX:254876
                              </div>
                          </div>
                      </div>
                      <div class="row" style="padding: 15px;">
                          <div class="col-md-9 col-xs-6" style="margin-top:5px;">
                              <strong>From Supplier:</strong>
                              <br> Lulu
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
                                  P.O Reference: 5666666
                                  <br>Delivery Date: 01 Jan 2016
                                  <br>Invoice Due Date: 01 Jan 2016
                                  <br> Delivery Date: 01 Jan 2016
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
                                              <th>#</th>
                                              <th>Item ID</th>
                                              <th>Item Description</th>
                                              <th>Item Quantity</th>
                                              <th>Item Price</th>

                                          </tr>
                                      </thead>
                                      <tbody>


                                          <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>

                                          </tr>
                                          <tr>
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
                                  <strong>Attachments</strong>
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

@section('addheader')
<link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
   <!-- end of global css -->
   <!--page level css -->
   <!-- daterange picker -->
   <link href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.cs')}}s" rel="stylesheet" type="text/css" />
@endsection

@section('addfooter')

   <script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
   <!-- end of global js -->
   <!-- begining of page level js -->
   <script src="{{asset('assets/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/daterangepicker/js/daterangepicker.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/clockface/js/clockface.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
   <script src="{{asset('assets/js/pages/datepicker.js')}}" type="text/javascript"></script>
   @endsection
