@extends('buyer.layouts.adminlayout')

@section('title', 'Manage PO')
@section('maintitle', 'Manage PO')





@section('content')
<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> New Purchase Order
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Purchase No:</th>
                                            <th>Supplier</th>
                                            <th class="numeric">Product Code</th>
                                            <th class="numeric">Product Category</th>

                                            <th class="numeric">Acceptance Status</th>
<th class="numeric">Acceptance Date</th>

                                            <th class="numeric">Delivery Date</th>
                                  <th class="numeric">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PO1234 </td>
                                            <td>Intel</td>
                                            <td>PC234</td>
                                            <td>IT Supply</td>



                                            <td>
<span class="label label-sm label-primary">Pending</span>
<span class="label label-sm label-success">Accepted</span>
<span class="label label-sm label-danger">Rejected</span>

</td>
                                            <td class="numeric">30/11/2019</td>


                                              <td class="numeric">2/12/2019</td>
                                              <td width="30%">
<button type="button" class="btn btn-primary btn_sizes">Complete </button>
<button type="button" class="btn btn-danger btn_sizes">Withdraw</button>

                                            </td>
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
