<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adfi Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages/calendar_custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="{{asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">

    <!--end of page level css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
   <link href="{{asset('assets/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
   <style>
   .table-bordered {
    border: 4px solid #458bca;
}

.Submitted {
 background:#67C5DF;
 color:#fff;
 font-weight: bold;
}
.Pending {
 background:#F89A14;
 color:#fff;
 font-weight: bold;
}

.Paid {

  background:#418BCa;
  color:#fff;
  font-weight: bold;
}
.Approved {
 background:#01BC8C;
 color:#fff;
 font-weight: bold;
}

.Rejected{

 background:#EF6F6C;
 color:#fff;
 font-weight: bold;
}

.Returned{

 background:#EF6F6C;
 color:#fff;
 font-weight: bold;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #458bca;
}

th {
    background: #458bca;
    color: #fff;
}
   </style>

</head>

<body class="skin-josh">

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
                                  <strong>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i> Filename</strong>

                                  <br>
                              </div>
                              <div class="col-md-6">
                                  <div class="pull-right">

                                  </div>
                              </div>
                          </div>
                          <hr>

                          <div style="margin:10px 20px;text-align:center;" class="btn-section">
                              <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                                  <span style="color:#fff;" onclick="javascript:window.print();">
                                  <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                     data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                  PDF Downloaad
                              </span>
                              </button>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
         <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
     </a>
     <!-- global js -->
     <script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
     <!-- end of global js -->
     <!-- begining of page level js -->
     <!-- EASY PIE CHART JS -->
     <script src="{{asset('assets/vendors/jquery.easy-pie-chart/js/easypiechart.min.js')}}"></script>
     <script src="{{asset('assets/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery.easingpie.js')}}"></script>
     <!--end easy pie chart -->
     <!--for calendar-->
     <script src="{{asset('assets/vendors/moment/js/moment.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')}}" type="text/javascript"></script>
     <!--   Realtime Server Load  -->
     <script src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" type="text/javascript"></script>
     <script src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}" type="text/javascript"></script>
     <!--Sparkline Chart-->
     <script src="{{asset('assets/vendors/sparklinecharts/jquery.sparkline.js')}}"></script>
     <!-- Back to Top-->
     <script type="{{asset('assets/text/javascript" src="vendors/countUp.js/js/countUp.js')}}"></script>
     <!--   maps -->
     <script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
     <script src="{{asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>
     <script src="{{asset('assets/vendors/chartjs/Chart.js')}}"></script>
     <script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
     <!--  todolist-->
     <script src="{{asset('assets/js/pages/todolist.js')}}"></script>

  <!-- end of global js -->
  <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
  <script src="{{asset('assets/js/pages/table-responsive.js')}}"></script>

</body>

  </html>
