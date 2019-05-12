@extends('admin.layouts.adminlayout')

@section('title', 'Supplier Alerts')

@section('maintitle', 'Supplier Alerts')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Supplier Alerts
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Buyer Name</th>
                                            <th>Supplier Update</th>
                                              <th>Supplier </th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dell </td>
                                            <td><a class="btn btn-raised btn-success btn-large" data-toggle="modal" data-href="#responsive" href="#responsive">View Fields</a></td>

<td>Global Alliance </td>
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

<div class="extended_modals">
    <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Supplier Updates</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Some More data</h4>
                            <p>
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name1" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name2" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name3" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name4" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name5" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4>Some More data</h4>
                            <p>
                                <input id="name6" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name7" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name8" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name9" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name10" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                            <p>
                                <input id="name41" name="name" type="text" placeholder="Your name" class="form-control">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>

                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
