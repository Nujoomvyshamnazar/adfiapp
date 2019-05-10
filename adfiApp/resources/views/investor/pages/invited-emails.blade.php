@extends('admin.layouts.adminlayout')

@section('title', 'Invited Emails')

@section('maintitle', 'Invited Emails')

@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Invited Emails
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Category</th>
                                            <th>Company Name</th>
                                            <th class="numeric">Email</th>
                                            <th class="numeric">Contact</th>
                                            <th class="numeric">Followup Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Supplier </td>
                                            <td>Apple</td>
                                            <td>nujoomnazar@gmail.com</td>
                                            <td>05817764776</td>

                                            <td>
25/05/2019

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
