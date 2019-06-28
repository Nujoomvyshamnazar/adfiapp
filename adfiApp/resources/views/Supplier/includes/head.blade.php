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
@yield('addheader')
</head>

<body class="skin-josh">
