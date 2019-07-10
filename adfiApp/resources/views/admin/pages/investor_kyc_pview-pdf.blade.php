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



   </style>

</head>

<body class="skin-josh">
  <div class="container">
     <div class="row">
       <section class="content">
                       <div class="row">
                           <div class="col-md-12">
                               <!-- BEGIN SAMPLE TABLE PORTLET-->
                               <div class="portlet box primary">
                                   <div class="portlet-title">
                                       <div class="caption">
                                           <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> InvestorName KYC Details
                                       </div>
                                   </div>
                                   <div class="portlet-body flip-scroll">



       <table class="table table-striped table-bordered" id="inline_edit">
       <tr>
       <h3>Entity Profiling:</h3>
       </tr>
       <tr>
       <td><label class="control-label">First Name:</label></td>
       <td>Value</td>
       <td><label class="control-label">Last Name::</label></td>
       <td>Value</td>
       </tr>

       <tr>
       <td><label class="control-label">Date of Birth:</label></td>
       <td>Value</td>
       <td><label class="control-label">Gender:</label></td>
       <td>Value</td>
       </tr>


       <tr>
       <td><label class="control-label">Nationality :</label></td>
       <td>Value</td>
       <td><label class="control-label">Residency Status:</label></td>
       <td>Value</td>
       </tr>


       </table>



       <table class="table table-striped table-bordered" id="inline_edit">
         <tr>
         <h3>Identity Details:</h3>
       </tr>
       <thead>

           <tr>
               <th>ID Type: </th>
               <th>ID No</th>
               <th>Date of Issuance</th>
               <th>Date of Expiry</th>
       <th>Issuing Authority</th>


         </tr>
       </thead>
       <tbody>
           <tr>
               <td>value</td>
                 <td>value</td>
                 <td>value</td>
               <td>value</td>
       <td>value</td>

           </tr>


       </tbody>

           </table>



           <table class="table table-striped table-bordered" id="inline_edit">
             <tr>
             <h3>Source of Wealth:</h3>
           </tr>
           <thead>

               <tr>
                   <th>Annual Income </th>
                   <th>Income Source</th>
                   <th>Estimated investment corpus or ADFI</th>



             </tr>
           </thead>
           <tbody>
               <tr>
                   <td>value</td>
                     <td>value</td>
                     <td>value</td>


               </tr>


           </tbody>

               </table>



       <table class="table table-striped table-bordered" id="inline_edit">
       <tr>
       <h3>Activity Profile:</h3>
       </tr>
       <thead>

        <tr>
            <th>  <h4>Anticipated Monthly activity:</h4></th>
        <th>  </th>
       </tr>
        </thead>
       <tr>
           <td><label class="control-label">Buyer Invoices preferred:</label></td>
       <td> Value</td>
       </tr>

       <tr>
          <td><label class="control-label">Preferred Investment tenure:</label></td>
            <td>Value</td>

       </tr>
       <tr>
         <td><label class="control-label">Maximum investment /invoice:</label></td>
         <td>value</td>

       </tr>

       <tr>
         <td><label class="control-label">Maximum Investment/ month/Half yearly/Annually:</label></td>
         <td>value</td>

       </tr>


       <tbody>



       </tbody>

        </table>


        <table class="table table-striped table-bordered" id="inline_edit">
          <tr>
          <h3>Current Banks/ Sources of Finance:</h3>
        </tr>
        <thead>

            <tr>

                <th>Bank Particulars with IBAN No:</th>
                <th>Bank Name:</th>
                <th>Branch:</th>
       <th>Type of account</th>


          </tr>
        </thead>
        <tbody>
            <tr>

                  <td>value</td>
                  <td>value</td>
                <td>value</td>
       <td>value</td>

            </tr>


        </tbody>

            </table>


        <table class="table table-striped table-bordered" id="inline_edit">
          <tr>
          <h3>Attachments:</h3>
        </tr>
       <tr>

       <td><label class="col-sm-5 control-label">Passport Copies with Visas</label></td>
       <td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
       </tr>

       <tr>

       <td><label class="col-sm-5 control-label">Local ID copy:</label></td>
       <td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
       </tr>

       <tr>

       <td><label class="col-sm-7 control-label">Cancelled bank account cheque copy for validating the bank account details:</label></td>
       <td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
       </tr>





       </table>

       </section>






    </div>
    </div>
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
