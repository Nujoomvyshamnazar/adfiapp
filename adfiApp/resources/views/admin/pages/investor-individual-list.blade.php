@extends('admin.layouts.adminlayout')

@section('title', 'Admin/Investor List')

@section('maintitle', 'Investor List')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Individual Investor List
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Entity Name</th>
                                            <th>Counter Party</th>
                                            <th>Relationship Start Date</th>
<th>Rating</th>
<th>Status</th>

  <th>Action</th>                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td> </td>
                                            <td></td>
                                            <td> </td>



                                            <td>
<a class="btn btn-info btn_sizes" data-toggle="modal" data-href="#responsive" href="#responsive">View</a>
<button type="button" class="btn btn-success btn_sizes">Activate</button>
<button type="button" class="btn btn-danger btn_sizes">Deactivate</button>
  <button type="button" class="btn btn-warning btn_sizes">
          Archive</button>                                  </td>

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
