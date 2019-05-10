@extends('admin.layouts.adminlayout')

@section('title', 'Dashboard')
@section('maintitle', 'Welcome to Dashboard')

@section('signin-alert  ')
<div class="alert alert-success alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success:</strong> You have successfully logged in.
</div>

@endsection



@section('widget')
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="lightbluebg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 text-right">
                                <span>Views Today</span>
                                <div class="number" id="myTargetElement1"></div>
                            </div>
                            <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement1.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement1.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
            <!-- Trans label pie charts strats here-->
            <div class="redbg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 pull-left">
                                <span>Today's Sales</span>
                                <div class="number" id="myTargetElement2"></div>
                            </div>
                            <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement2.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement2.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
            <!-- Trans label pie charts strats here-->
            <div class="goldbg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 pull-left">
                                <span>Subscribers</span>
                                <div class="number" id="myTargetElement3"></div>
                            </div>
                            <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement3.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement3.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
            <!-- Trans label pie charts strats here-->
            <div class="palebluecolorbg no-radius">
                <div class="panel-body squarebox square_boxs">
                    <div class="col-xs-12 pull-left nopadmar">
                        <div class="row">
                            <div class="square_box col-xs-7 pull-left">
                                <span>Registered Users</span>
                                <div class="number" id="myTargetElement4"></div>
                            </div>
                            <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <small class="stat-label">Last Week</small>
                                <h4 id="myTargetElement4.1"></h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <small class="stat-label">Last Month</small>
                                <h4 id="myTargetElement4.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
@endsection


@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invoices Pending For Admin Approvals
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Transaction ID</th>
                                            <th class="numeric">PO reference</th>
                                            <th class="numeric">Buyer</th>
                                            <th class="numeric">supplier</th>
                                            <th class="numeric">Invoice Amount</th>
                                            <th class="numeric">Due Date</th>
                                            <th class="numeric">Action</th>
                                            <th class="numeric">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<button type="button" class="btn btn-primary btn_sizes">Approve</button>
<button type="button" class="btn btn-danger btn_sizes">Reject</button>

                                            </td>
                                            <td class="numeric">test</td>
                                        </tr>

                                        <tr>
                                            <td>INV20002 </td>
                                            <td>235612</td>
                                            <td>PO 1321</td>
                                            <td>DELL</td>
                                            <td class="numeric">INTEL</td>
                                            <td class="numeric">$10000</td>
                                            <td class="numeric">30/11/2019</td>
                                            <td>
<button type="button" class="btn btn-primary btn_sizes">Approve</button>
<button type="button" class="btn btn-danger btn_sizes">Reject</button>

                                            </td>
                                            <td class="numeric">test</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->

</div>
</div>
</div>

@endsection
