@extends('admin.layouts.adminlayout2')

@section('title', 'Buyer Returned Offer')

@section('maintitle', 'Buyer Returned Offer')

@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Buyer Returned offer
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content" id="table1">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Buyer</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due date</th>
                                            <th class="numeric">Status</th>

                                            <th class="numeric">Remark</th>
                                            <th class="numeric">Action</th>
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
                                            <td class="Returned">
Offer Returned

</td>

                                            <td class="numeric">Followup</td>
                                            <td>
                                      <button type="button" class="btn btn-primary btn_sizes" data-toggle="modal" data-href="#stack2" href="#stack2">Investor</button>

                                      </td>
                                        </tr>
                                    </tbody>

                                    <tr>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td class="numeric"></td>
                                        <td class="numeric"></td>
                                        <td >


</td>

                                        <td class="numeric"></td>
                                        <td>

                                  </td>
                                    </tr>
                                    <tfoot>




                                                                  <tr>
                                                                    <th>Invoice No</th>
                                                                    <th>Transaction ID</th>
                                                                    <th class="numeric">PO reference</th>
                                                                    <th class="numeric">Buyer</th>
                                                                    <th class="numeric">Invoice Amount</th>
                                                                    <th class="numeric">Due date</th>
                                                                    <th class="numeric">Status</th>

                                                                    <th class="numeric">Remark</th>
                                                                  </tr>

                                                            </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>

<div class="modal fade bs-example-modal-sm in" id="stack2" tabindex="-1" role="dialog" aria-hidden="false">
                               <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                       <div class="modal-header bg-primary">
                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                           <h4 class="modal-title">Choose Investor</h4>
                                       </div>
                                       <div class="modal-body">


                                         <div class="form-group label-floating">
                                                                              <label>Select Investor Type</label>
                                                                              <select class="form-control">
                                                                                <option>Institutional Investor</option>
                                                                                <option>individual Investor</option>


                                                                              </select>
                                                                          </div>

                                                                          <div class="form-group label-floating">
                                                                                                               <label>Select Investor</label>
                                                                                                               <select class="form-control">
                                                                                                                   <option>Investor 1</option>
                                                                                                                   <option>Investor 2</option>


                                                                                                               </select>
                                                                                                           </div>
                                           <div class="form-group label-floating">
                                               <label class="control-label">Remark: </label>
                                                 <textarea placeholder="Write something here..." class="auto2 form-control pd-45 resize_vertical " data-autogrow="" rows="3" cols="80"></textarea>
                                           </div>


                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                           <button type="button" class="btn btn-primary">Submit</button>
                                       </div>
                                   </div>
                               </div>
                           </div>
@endsection
@section('addheader')

<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/select2/css/select2-bootstrap.css')}}" />

@endsection

@section('addfooter')

<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
 <script type="text/javascript" src="{{asset('assets/js/pages/table-advanced2.js')}}"></script>
@endsection
