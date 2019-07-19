@extends('investor.layouts.adminlayout2')

@section('title', 'Admin / View investor KYC Details')

@section('maintitle', 'View investor KYC Details')

@section('content')


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
<tr>
<td><label class="control-label">ID Type:</label></td>
<td>Value</td>
<td><label class="control-label">ID No:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Date of Issuance:</label></td>
<td>Value</td>
<td><label class="control-label">Date of Expiry:</label></td>
<td>Value</td>
</tr>


<tr>
<td><label class="control-label">Issuing Authority:</label></td>
<td>Value</td>

</tr>


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




<tbody>



</tbody>

 </table>


 <table class="table table-striped table-bordered" id="inline_edit">
 <tr>
 <h3>Maximum Investment:</h3>
 </tr>
 <thead>
   <tr>
       <th>Monthly</th>
       <th>Half yearly</th>
       <th>Annually</th>



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


<div style="background-color: #eee;padding:15px;margin-top:20px;" id="footer-bg">


        <hr>

        <div style="margin:10px 20px;text-align:center;" class="btn-section">
            <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                <span style="color:#fff;" onclick="javascript:window.print();">
                <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                   data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                Print
            </span>
            </button>


            <button type="button" class="btn btn-primary btn_sizes">       <i class="livicon" data-name="edit" data-size="16" data-loop="true"
                      data-c="#fff" data-hc="#fff" style="position:relative;top:3px;"></i>Edit</button>


        </div>
    </div>

@endsection
@section('addheader')
<style>.panel-heading {
    background: #458bca;
    color: #fff;
}
.dataTables_filter {
display: none;
}
.dataTables_length{
display: none;
}

.dataTables_info{
display: none;
}

div.table-responsive > div.dataTables_wrapper > div.row {
    margin: 0;
    padding: 0;
}
.dataTables_paginate {
display: none;
}
</style>
<link href="{{asset('assets/css/pages/invoice.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('addfooter')
<script>
$('#example').dataTable( {
  "searching": false
} );
</script>
<script src="{{asset('assets/js/pages/invoice.js')}}" type="text/javascript"></script>
@endsection
