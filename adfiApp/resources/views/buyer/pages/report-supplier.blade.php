@extends('buyer.layouts.adminlayout')

@section('title', 'Report Supplier')
@section('maintitle', 'Report supplier')





@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Report Supplier
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Supplier Name</th>
                                            <th>Edit Status</th>

                                            <th class="numeric">Justification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Global Alliance </td>
                                            <td>

                                              <button type="button" class="btn btn-primary btn_sizes">Watch List Supplier</button>
                                            <button type="button" class="btn btn-danger btn_sizes">Delete Supplier</button></td>
                                            <td>PO 1321</td>

                                        </tr>

                                        <tr>
                                            <td>Global Alliance </td>
                                            <td>

                                              <button type="button" class="btn btn-primary btn_sizes">Watch List Supplier</button>
                                            <button type="button" class="btn btn-danger btn_sizes">Delete Supplier</button></td>
                                            <td>PO 1321</td>

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
