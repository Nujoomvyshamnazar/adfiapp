@extends('buyer.layouts.adminlayout')

@section('title', 'Invoices Approved')
@section('maintitle', 'Invoices Approved')





@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoices Approved
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Supplier</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>
                                            <th class="numeric">Status</th>
                                  <th class="numeric">Action</th>
                                            <th class="numeric">Justification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>

                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<span class="label label-sm label-success">Admin Approved</span>

</td>
<td>

<button type="button" data-toggle="modal" data-href="#stack3" href="#stack3" class="btn btn-info btn_sizes">View</button>
                                            </td>
                                            <td class="numeric">Justification</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>


                                      <!--- stack1 model -->
                                                         <div class="modal fade bs-example-modal-sm in" id="stack3" tabindex="-1" role="dialog" aria-hidden="false">
                                                             <div class="modal-dialog modal-lg">
                                                                 <div class="modal-content">
                                                                     <div class="modal-header">
                                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                         <h4 class="modal-title">Transaction ID: 554885222</h4>
                                                                     </div>
                                                                     <div class="modal-body">

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
                                                                     <div class="modal-footer">
                                                                         <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                                         <button type="button" class="btn btn-primary">Submit</button>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <!-- stack2 modal-->

@endsection
