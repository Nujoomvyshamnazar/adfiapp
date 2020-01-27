@extends('investor.layouts.adminlayout2')

@section('title', 'Offers Available')
@section('maintitle', 'Offers Available')


@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Offer Pending
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                        <table class="table table-striped table-bordered" id="table1">
                                    <thead class="flip-content">

                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Buyer</th>

                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Early Payment Days</th>

                                              <th class="numeric">Due Date</th>
                                            <th class="numeric" width="22%">Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>

                                            <td class="numeric">$10000</td>
                                            <td class="numeric">65 days</td>
                                            <td class="numeric">30/11/2019</td>


                                            <td>
<button type="button" class="btn btn-primary btn_sizes" data-toggle="modal" data-href="#view" href="#view">View</button>
<button type="button" class="btn btn-success btn_sizes" data-toggle="modal" data-href="#accept" href="#accept">Accept</button>
<button type="button" class="btn btn-danger btn_sizes" data-toggle="modal" data-href="#reject" href="#reject">Reject</button>


                                            </td>

                                        </tr>



                                    </tbody>
                                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>



                                    </tr>
                                    <tfoot>



                                                                <tr>
                                                                  <th>Invoice No</th>
                                                                  <th>Transaction ID</th>
                                                                  <th class="numeric">PO reference</th>
                                                                  <th class="numeric">Buyer</th>

                                                                  <th class="numeric">Invoice Amount</th>
                                                                  <th class="numeric">Early Payment Days</th>

                                                                    <th class="numeric">Due Date</th>


                                                                </tr>
                                                            </tfoot>


                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>
<div class="modal fade in" id="view" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Early Payment Offer</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <!-- Name input-->

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control-label" for="name">Buyer: </label>
                                                    <div class="col-md-4">
                                                        <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Number : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Amount : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>
                                            <!-- Email input-->
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Due Date : </label>
                                                <div class="col-md-4">
                                                  <input id="name" name="name" type="text"  class="form-control" disabled="" ></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Days Paid Early : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>

</div>
                                              <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Payment Offer: </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Discount Value : </label>
                                                <div class="col-md-4">
                                                    <div class=" input-group">
                                                    <input id="name" name="name" type="text"  class="form-control">
                                                  </div>
                                          </div>  </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Available Limits : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control"></div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Insurence Coverage : </label>
                                                <div class="col-md-4">
                                                  <div class="input-group">
                                                  <input id="name" name="name" type="text"  class="form-control"><span class="input-group-addon">%</span></div>
                                        </div></div>



                                            </div>
                                        </fieldset>


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

<!-- Offer Detailed view -->
<div class="modal fade in" id="accept" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Accepted Early Payment Offer</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <!-- Name input-->

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-6 control-label" for="name">Buyer: </label>
                                                    <div class="col-md-4">
                                                        <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Number : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Invoice Amount : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>
                                            <!-- Email input-->
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Due Date : </label>
                                                <div class="col-md-4">
                                                  <input id="name" name="name" type="text"  class="form-control" disabled="" ></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" for="name">Days Paid Early : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control" disabled=""></div>
                                            </div>

</div>
                                              <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Discount Offer : </label>
                                                <div class="col-md-4">
                                                  <div class="input-group">
                                                  <input id="name" name="name" type="text"  class="form-control"><span class="input-group-addon">%</span></div>
                                        </div></div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Discount Value : </label>
                                                <div class="col-md-4">
                                                    <div class=" input-group">
                                                    <input id="name" name="name" type="text"  class="form-control">
                                                  </div>
                                          </div>  </div>
                                          <div class="form-group">
                                              <label class="col-md-8 control-label" for="name">Payment Date : </label>
                                              <div class="col-md-4">
                                                <div class="input-group">
                                                <input id="name" name="name" type="text"  class="form-control"></div>
                                      </div></div>


                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="name">Available Limits : </label>
                                                <div class="col-md-4">
                                                    <input id="name" name="name" type="text"  class="form-control"></div>
                                            </div>







                                            </div>
                                        </fieldset>

                                                <div class="col-md-6">
                                        <div class="panel panel-success" id="hidepanel1">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                  Source Bank Account:
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
                                                            <label class="col-md-3 control-label" for="name">Title:</label>
                                                            <div class="col-md-6">

                                                              <div class="input-group">
                                                              <input id="name" name="name" type="text" value="20" class="form-control" disabled=""></div></div>
                                                        </div>
                                                        <!-- Email input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="email">Bank: </label>
                                                            <div class="col-md-6">
                                                                <input id="bb" name="bb" type="text"  class="form-control" disabled=""></div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="email">A/C No: </label>
                                                            <div class="col-md-6">
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
</div>

<div class="col-md-6">
<div class="panel panel-success" id="hidepanel1">
<div class="panel-heading">
<h3 class="panel-title">
    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
    Destination Bank Account:
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
            <label class="col-md-3 control-label" for="name">Title:</label>
            <div class="col-md-6">

              <div class="input-group">
              <input id="name" name="name" type="text" value="20" class="form-control" disabled=""></div></div>
        </div>
        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-3 control-label" for="email">Bank: </label>
            <div class="col-md-6">
                <input id="bb" name="bb" type="text"  class="form-control" disabled=""></div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="email">A/C No: </label>
            <div class="col-md-6">
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
</div>



                                    </form>
                                </div>
                </div>
            </div>
            <div class="modal-footer">
  <button type="submit" class="btn btn-responsive btn-success btn-sm">Pay Early</button>
  <button type="submit" class="btn btn-responsive btn-warning btn-sm">Archive</button>
    <button type="submit" class="btn btn-responsive btn-danger btn-sm">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- END modal-->

<!-- reject model -->
<div class="modal fade in" id="reject" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"Reject Offer Reason</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <!-- Name input-->


                                        </fieldset>


                                    </form>
                                </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- reject -->
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
