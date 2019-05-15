@extends('buyer.layouts.adminlayout')

@section('title', 'Supplier List')
@section('maintitle', 'Supplier List')





@section('content')

<section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Supplier List
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
                                            <th class="numeric">Product category</th>
                                            <th class="numeric">Product code</th>
                                            <th class="numeric">RelationShip Start Date</th>

                                            <th class="numeric">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Intel</td>
                                            <td>William John</td>
                                            <td>0581714776</td>
                                            <td>2382171</td>
                                            <td class="numeric">IT Supply</td>
                                            <td class="numeric">PC 234</td>

                                            <td>
10/01/1998


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
