@extends('Supplier.layouts.adminlayout2')

@section('title', 'Admin / View Supplier KYC Details')

@section('maintitle', 'View Supplier KYC Details')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> SupplierName KYC Details
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">



<table class="table table-striped table-bordered" id="inline_edit">
<tr>
<h3>Entity Profiling:</h3>
</tr>
<tr>
<td><label class="control-label">Entity Name:</label></td>
<td>Value</td>
<td><label class="control-label">Entity Type:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Nature of Business:</label></td>
<td>Value</td>
<td><label class="control-label">Industry:</label></td>
<td>Value</td>
</tr>


<tr>
<td><label class="control-label">Incorporation date:</label></td>
<td>Value</td>
<td><label class="control-label">Country of Operations:</label></td>
<td>Value</td>
</tr>


<tr>
<td><label class="control-label">Country of Head office:</label></td>
<td>Value</td>
<td><label class="control-label">Company ID Type:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Company ID Number:</label></td>
<td>Value</td>
<td><label class="control-label">Company ID Date of First Issuance:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Company ID Date of Expiry:</label></td>
<td>Value</td>
<td><label class="control-label">Name of the Auditor:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Registered Addresss:</label></td>
<td>Value</td>
<td><label class="control-label">Mailing Adresss:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Contact Numbers:</label></td>
<td>Value</td>
<td><label class="control-label">Sources of Income / Other businesses:</label></td>
<td>Value</td>
</tr>

<tr>
<td><label class="control-label">Annual Turnover:</label></td>
<td>Value</td>
<td><label class="control-label">Group Company Details:</label></td>
<td>Value</td>
</tr>

</table>


<table class="table table-striped table-bordered" id="inline_edit">
<tr>
<h3>Board of Directors and Senior Management :</h3>
</tr>
<thead>
 <tr>
     <th>Name </th>
     <th>Age</th>
     <th>Title</th>
     <th>Country of residence</th>
       <th>Years with the establishment</th>
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
   <h3>Shareholders Information:</h3>
 </tr>
 <thead>
   <tr>
       <th> Name </th>
       <th>Nationality</th>
       <th>Shareholding % </th>
       <th>Date of Birth</th>
         <th>Country of birth </th>
           <th>Passport Number </th>
           <th>Physical address </th>
   </tr>
 </thead>
 <tbody>
     <tr>
         <td>value</td>
           <td>value</td>
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
       <h3>Beneficial Owner:</h3>
     </tr>
     <thead>

         <tr>
             <th> Name </th>
             <th>Country</th>
             <th>Shareholding % </th>

                 <th>Physical address </th>
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
           <h3>Details of major Clients:</h3>
         </tr>
         <thead>

             <tr>
                 <th> Name </th>
                 <th>Country </th>
                 <th>Address</th>
                 <th>Location</th>
                   <th>Yearly Turnover</th>


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
               <h3>Details of Major Suppliers:</h3>
             </tr>
             <thead>

                 <tr>
                     <th> Name </th>
                     <th>Country </th>
                     <th>Address</th>
                     <th>Location</th>
                       <th>Yearly Turnover</th>


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
<h3>Activity Profile:</h3>
</tr>
<thead>

 <tr>
     <th>  <h4>Anticipated Monthly activity:</h4></th>
 <th> </th>
  <th> </th>
    <th> </th>
</tr>
 </thead>
<tr>
   <td><label class="control-label">Invoices /Buyer   :</label></td>
     <td>Value</td>
     <td><label class="control-label">Invoices Generated/Month:</label></td>
     <td>value</td>
</tr>
<tr></tr>
<tr>
<td><label class="control-label">Average Credit Period / Buyer</label></td>
<td>
Value
</td>

<td><label class="control-label">Monthly Turnover:</label></td>
<td>
Value
</td>

</tr>
<tr>
<td><label class="control-label">Highest Invoice Value:</label></td>
<td>
Value
</td>

<td><label class="control-label">Lowest Invoice Value:</label></td>
<td>
Value
</td>

</tr>

<tr>
<td><label class="control-label">Average Annual Sales/Client:</label></td>
<td>
Value
</td>

<td><label class="control-label">Number of Suppliers:</label></td>
<td>
Value
</td>

</tr>

<tr>
<td><label class="control-label">Number of Buyers:</label></td>
<td>
Value
</td>

<td><label class="control-label">Projected Growth in Turnover(Monthly):</label></td>
<td>
Value
</td>

</tr>

<tr>
<td><label class="control-label">Projected Growth in Turnover(Yearly):</label></td>
<td>
Value
</td>

<td><label class="control-label">Major markets:</label></td>
<td>
Value
</td>

</tr>



<tr>
<td><label class="control-label">Any Sanctioned/Sensitive markets::</label></td>
<td>
Value
</td>



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

       <th>Bank:</th>
       <th>IBAN No:</th>
       <th>Branch:</th>


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
   <h3>Attachments:</h3>
 </tr>
<tr>

<td><label class="col-sm-5 control-label">Valid Trade License/ Chamber of commerce:</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-5 control-label">MOA/AOA with amendments:</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-5 control-label">Passport Copies of the Promoters/ Signatories:</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-8 control-label">Cancelled Cheque image to validate the bank details for each of the banks :</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-8 control-label">Audited Annual Reports :</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-8 control-label">Transaction Profile Declaration :</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>

<tr>

<td><label class="col-sm-8 control-label">Confirmation of disclosures :</label></td>
<td>  <i class="livicon" data-name="download" data-size="25" data-loop="true" data-c="#000" data-hc="#000"></i></td>
</tr>
</table>

</section>

<div style="background-color: #eee;padding:15px;" id="footer-bg">

                            <hr>

                            <div style="margin:10px 20px;text-align:center;" class="btn-section">
                                <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                                    <span style="color:#fff;" onclick="javascript:window.print();">
                                    <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                       data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                    Print
                                </span>
                                </button>


                                <button type="button" class="btn btn-responsive button-alignment btn-success" data-toggle="button">
                                    <span style="color:#fff;" onclick="javascript:window.print();">
                                    <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                       data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                    Approve
                                </span>
                                </button>


                                <button type="button" class="btn btn-responsive button-alignment btn-danger" data-toggle="button">
                                    <span style="color:#fff;" onclick="javascript:window.print();">
                                    <i class="livicon" data-name="printer" data-size="16" data-loop="true"
                                       data-c="#fff" data-hc="white" style="position:relative;top:3px;"></i>
                                    Reject
                                </span>
                                </button>
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
