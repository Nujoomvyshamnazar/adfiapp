@extends('admin.layouts.adminlayout')

@section('title', 'Admin/Buyer KYC List')

@section('maintitle', 'Buyer KYC List')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Buyer KYC List
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Buyer Name</th>
                                            <th>View</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dell </td>
                                            <td><a class="btn btn-raised btn-success btn-large" data-toggle="modal" data-href="#responsive" href="#responsive">Print</a></td>


                                            <td>
<button type="button" class="btn btn-primary btn_sizes">Approve</button>
<button type="button" class="btn btn-danger btn_sizes">Reject</button>

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
