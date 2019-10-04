@extends('buyer.layouts.adminlayout2')

@section('title', 'Offer Received')
@section('maintitle', 'Offer Received')


@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Offer Received
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content" id="table1">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Supplier</th>
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
                                            <td class="Approved">
Offer Rejected

</td>

                                            <td class="numeric">Followup</td>

                                            <td>
                                            <button type="button" data-toggle="modal" data-href="#approve" href="#approve"  class="btn btn-primary btn_sizes">Approve</button>
<button type="button" data-toggle="modal" data-href="#reject" href="#reject"  class="btn btn-danger btn_sizes">Reject</button>
<button type="button" data-toggle="modal" data-href="#view" href="#view" class="btn btn-info btn_sizes">View</button>
                                                                                        </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>




                                                                  <tr>
                                                                    <th>Invoice No</th>
                                                                    <th>Transaction ID</th>
                                                                    <th class="numeric">PO reference</th>
                                                                    <th class="numeric">Supplier</th>
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

<!--- Approve model -->
<div class="modal fade in" id="approve" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Approve Offer Receaved</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <!-- Name input-->

                                              <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Number : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled="" value="auto fill"></div>
                                            </div>
                                            <!-- Email input-->
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Approval Date : </label>
                                                <div class="col-md-4">
                                                  <input id="name" name="name" type="text"  class="form-control" disabled="" ></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Buyer Bank Account : </label>
                                                <div class="col-md-6">
                                                  <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea></div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Discount Amount : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>




</div>
                                              <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Early Payment Date : </label>
                                                <div class="col-md-5">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Due date : </label>
                                                <div class="col-md-5">
                                                    <div class=" input-group">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""><span class="input-group-addon">%</span></div>
                                          </div>  </div>

                                          <div class="form-group">
                                              <label class="col-md-6 control-label" for="name">Supplier Bank Account : </label>
                                              <div class="col-md-6">
                                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea></div>
                                          </div>






                                            </div>
                                        </fieldset>

                                        <div class="panel panel-success" id="hidepanel1">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    Enter Your Transaction reference Number:
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>

                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" action="#" method="post">
                                                    <fieldset>
                                                        <!-- Name input-->

                                                        <!-- Email input-->
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label" for="email">Transaction reference Number: </label>
                                                            <div class="col-md-3">
                                                                <input id="bb" name="bb" type="text"  class="form-control"></div>
                                                        </div>
                                                        <!-- Message body -->


                                                        <!-- Form actions -->
                                                        <div class="form-group">
                                                            <div class="col-md-12 text-right">
<button type="button" class="btn btn-success btn_sizes">Submit</button>
<button type="button" class="btn btn-danger btn_sizes">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- END modal-->
                   <!-- approve modal-->

                   <!--- reject model -->
                                      <div class="modal fade bs-example-modal-sm in" id="reject" tabindex="-1" role="dialog" aria-hidden="false">
                                          <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                  <div class="modal-header danger">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      <h4 class="modal-title" style="color:#fff;">Reject Offer</h4>
                                                  </div>
                                                  <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <!-- Name input-->

                                              <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Number : </label>
                                                <div class="col-md-5">
                                                    <input id="name" name="name" type="text" class="form-control" disabled="" value="auto fill"></div>
                                            </div>
                                            <!-- Email input-->
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Rejection Date : </label>
                                                <div class="col-md-5">
                                                  <input id="name" name="name" type="text" class="form-control" disabled=""></div>
                                            </div>






</div>

                                        </fieldset>

                                    </form>

                                </div>
                                                  <div class="modal-body">
      <fieldset>



                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Reject Reason: </label>
                                                            <textarea placeholder="Write something here..." class="auto2 form-control pd-45 resize_vertical " data-autogrow="" rows="3" cols="80"></textarea>
                                                      </div>

      </fieldset>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                      <button type="button" class="btn btn-danger">Submit</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- reject modal-->

                                      <!--- View model -->
                                      <div class="modal fade in" id="view" tabindex="-1" role="dialog" aria-hidden="false">
                                          <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                  <div class="modal-header bg-primary">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      <h4 class="modal-title">Accepted Offer</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div class="row">
                                                        <div class="panel-body">
                                                                          <form class="form-horizontal" action="#" method="post">
                                                                              <fieldset>
                                                                                  <!-- Name input-->

                                                                                    <div class="col-md-6">
                                                                                  <div class="form-group">
                                                                                      <label class="col-md-6 control-label" for="name">Invoice Number : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>
                                                                                  <!-- Email input-->
                                                                                  <div class="form-group">
                                                                                      <label class="col-md-6 control-label" for="name">Transaction ID : </label>
                                                                                      <div class="col-md-4">
                                                                                        <input id="name" name="name" type="text"  class="form-control" disabled="" ></div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <label class="col-md-6 control-label" for="name">Invoice Amount : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                      <label class="col-md-6 control-label" for="name">Due Date : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                      <label class="col-md-6 control-label" for="name">Early Payment Date : </label>
                                                                                      <div class="col-md-4">
                                                                                        <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>
                                      </div>
                                                                                    <div class="col-md-6">
                                                                                  <div class="form-group">
                                                                                      <label class="col-md-8 control-label" for="name">Days Paid Early : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>

                                                                                  <div class="form-group">
                                                                                      <label class="col-md-8 control-label" for="name">ADFI Offer : </label>
                                                                                      <div class="col-md-4">
                                                                                          <div class=" input-group">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""><span class="input-group-addon">%</span></div>
                                                                                </div>  </div>

                                                                                  <div class="form-group">
                                                                                      <label class="col-md-8 control-label" for="name">Discount in Value terms: AED/USD : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>



                                                                                  <div class="form-group">
                                                                                      <label class="col-md-8 control-label" for="name">Supplier Offer : </label>
                                                                                      <div class="col-md-4">
                                                                                        <div class="input-group">
                                                                                        <input id="name" name="name" type="text"  class="form-control" disabled=""><span class="input-group-addon">%</span></div>
                                                                              </div></div>


                                                                                  <div class="form-group">
                                                                                      <label class="col-md-8 control-label" for="name">Discount in Value terms: AED/USD : </label>
                                                                                      <div class="col-md-4">
                                                                                          <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                                                  </div>
                                                                                  </div>
                                                                              </fieldset>

                                                                              <div class="panel panel-primary" id="hidepanel1">
                                                                                  <div class="panel-heading">
                                                                                      <h3 class="panel-title">
                                                                                          <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                                          Final Supplier Offer:
                                                                                      </h3>
                                                                                      <span class="pull-right">
                                                                                          <i class="glyphicon glyphicon-chevron-up clickable"></i>

                                                                                      </span>
                                                                                  </div>
                                                                                  <div class="panel-body">
                                                                                      <form class="form-horizontal" action="#" method="post">
                                                                                          <fieldset>
                                                                                              <!-- Name input-->
                                                                                              <div class="form-group">
                                                                                                  <label class="col-md-3 control-label" for="name">Discount Percentage:</label>
                                                                                                  <div class="col-md-3">

                                                                                                    <div class="input-group">
                                                                                                    <input id="name" name="name" type="text" value="20" class="form-control" disabled=""><span class="input-group-addon">%</span></div></div>
                                                                                              </div>
                                                                                              <!-- Email input-->
                                                                                              <div class="form-group">
                                                                                                  <label class="col-md-3 control-label" for="email">Discount Value: </label>
                                                                                                  <div class="col-md-3">
                                                                                                      <input id="bb" name="bb" type="text"  class="form-control" disabled=""></div>
                                                                                              </div>
                                                                                              <!-- Message body -->


                                                                                              <!-- Form actions -->
                                                                                              <div class="form-group">
                                                                                                  <div class="col-md-12 text-right">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </fieldset>
                                                                                      </form>
                                                                                  </div>
                                                                              </div>
                                                                          </form>
                                                                      </div>
                                                      </div>
                                                  </div>
                                                  <div class="modal-footer">

                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- END modal-->
                                                         <!-- View modal-->





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
