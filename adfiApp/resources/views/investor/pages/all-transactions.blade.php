@extends('investor.layouts.adminlayout2')

@section('title', 'Admin/All Transactions')

@section('maintitle', 'All Transactions')

@section('content')


<section class="content">
                <div class="row">
                    <div class="col-md-12">

<div class="portlet box primary">
                  <div class="portlet-title">
                      <div class="caption">
                          <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> All Transactions
                      </div>
                  </div>
                  <div class="portlet-body">

<div class="row">
  <div class="col-md-6 display-no" style="display: block;">

                    From Date:
                    <div class="input-group">
         <div class="input-group-addon">
         <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
         </div>
         <input type="text" class="form-control" id="rangepicker4" />
         </div>
          </div>
          <div class="col-md-6 display-no" style="display: block;">
               To Date:
               <div class="input-group">
    <div class="input-group-addon">
    <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
    </div>
    <input type="text" class="form-control" id="rangepicker4" />
    </div>
     </div>
  </div>

                      <div class="table-scrollable">

                              <table class="table table-striped table-bordered" id="table1">
                              <thead>


                                  <tr>
                                    <th scope="col" style="width:450px !important">Invoice No</th>
                                    <th>Transaction ID</th>
                                    <th class="numeric">PO reference</th>
                                    <th class="numeric">Buyer</th>
                                    <th class="numeric">Supplier</th>
                                    <th class="numeric">investor-individual</th>
                                    <th class="numeric">investor-institutional</th>
                                    <th class="numeric">Invoice Amount</th>
                                    <th class="numeric">Discount Amount</th>
                                    <th class="numeric">Due Date</th>
                                    <th class="numeric">Status</th>
                                    <th class="numeric">Remark</th>

                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#0000477</td>
                                  <td>4vfvc55vf</td>
                                  <td>7785474</td>
                                <td>Dell</td>
                                  <td>Intel</td>
                                  <td>Mashrik Bank</td>
                                  <td>Nil</td>
                                  <td>100000 AED</td>
                                  <td>900000 AED</td>
                                  <td>20-06-2019</td>
                                <td>Buyer Approved</td>
                                  <td>No Remarks</td>

                                </tr>

                              </tbody>
                              <tfoot>
                            <tr>
                              <th>Invoice No</th>
                              <th>Transaction ID</th>
                              <th class="numeric">PO reference</th>
                              <th class="numeric">Buyer</th>
                              <th class="numeric">Supplier</th>
                              <th class="numeric">investor-individual</th>
                              <th class="numeric">investor-institutional</th>
                              <th class="numeric">Invoice Amount</th>
                              <th class="numeric">Discount Amount</th>
                              <th class="numeric">Due Date</th>
                              <th class="numeric">Status</th>
                              <th class="numeric">Remark</th>
                            </tr>
                        </tfoot>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
              <!-- END SAMPLE TABLE PORTLET-->

@endsection

@section('addheader')


<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}" />
   <link href="{{asset('assets/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">




@endsection

@section('addfooter')

<!-- end of global js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/pages/table-advanced2.js')}}"></script>

<script src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
 <script src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/vendors/select2/js/select2.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
 <script src="{{asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<!-- to add bottons


<script type="text/javascript" src="{{asset('assets/vendors/jeditable/js/jquery.jeditable.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.colReorder.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.rowReorder.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/pdfmake.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.scroller.js')}}"></script>

-->

<script>

$(document).ready(function() {

    $("#dob").datetimepicker({
        format: 'YYYY-MM-DD',
        widgetPositioning:{
            vertical:'bottom'
        },
        keepOpen:false,
        useCurrent: false,
        maxDate: new Date()
    });
});
</script>



@endsection
