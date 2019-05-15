@extends('buyer.layouts.adminlayout')

@section('title', 'Request KYC')
@section('maintitle', 'Request KYC')





@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Request KYC
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact Name</th>
                                            <th class="numeric">Contact Number</th>
                                            <th class="numeric">Registration Number</th>
                                            <th class="numeric">Bank Details</th>
                                            <th class="numeric">Turn Over(AED)</th>
                                            <th class="numeric">Trade Licence</th>

                                            <th class="numeric">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Intel</td>
                                            <td>William John</td>
                                            <td>0581714776</td>
                                            <td>2382171</td>
                                            <td class="numeric">FAB Account No:1204852588</td>
                                            <td class="numeric">85</td>

                                            <td>
<button type="button" class="btn btn-primary btn_sizes">View</button>


                                            </td>
                                            <td class="numeric">A Very Good</td>
                                        </tr>

                                        <tr>
                                            <td>Intel</td>
                                            <td>William John</td>
                                            <td>0581714776</td>
                                            <td>2382171</td>
                                            <td class="numeric">FAB Account No:1204852588</td>
                                            <td class="numeric">85</td>

                                            <td>
  <button type="button" class="btn btn-primary btn_sizes">View</button>


                                            </td>
                                            <td class="numeric">A Very Good</td>
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
