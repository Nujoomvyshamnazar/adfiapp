@extends('buyer.layouts.adminlayout')

@section('title', 'New Purchase Order')
@section('maintitle', 'New Purchase Order')





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
                                            <th>Purchase Order No:</th>
                                            <th>Product Category</th>
                                            <th class="numeric">Product Code</th>
                                            <th class="numeric">Supplier Name</th>
                                            <th class="numeric">Supplier Contact</th>
                                            <th class="numeric">Acceptance Status</th>
                                            <th class="numeric">Acceptance Date</th>
                                  <th class="numeric">Delivery Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PO1234 </td>
                                            <td>IT Supply</td>
                                            <td>PC234</td>
                                            <td>Intel</td>

                                            <td class="numeric">William John</td>

                                            <td>
<span class="label label-sm label-primary">Pending</span>
<span class="label label-sm label-success">Accepted</span>
<span class="label label-sm label-danger">Rejected</span>

</td>
                                            <td class="numeric">30/11/2019</td>


                                              <td class="numeric">2/12/2019</td>
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
