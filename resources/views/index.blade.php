@section('title') 
Booster - Home
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Dashboard</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- End XP Row -->
    <div class="row"> 
        <!-- End XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary">2580</h4>
                            <p class="mb-0 text-muted">Total Projects</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                <i class="mdi mdi-file-document font-30 text-primary"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success">55790</h4>
                            <p class="mb-0 text-muted">Total Revenue</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                <i class="mdi mdi-currency-usd font-30 text-success"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                      
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-warning">930</h4>
                            <p class="mb-0 text-muted">Total Clients</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                                <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                      
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-danger">2750</h4>
                            <p class="mb-0 text-muted">Total Visitors</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                                <i class="mdi mdi-eye font-30 text-danger"></i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Daily Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-warning"></i>Series D</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-advanced-smil-animations" class="ct-chart ct-golden-section xp-chartist-advanced-smil-animations"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Monthly Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-stacked-bar" class="ct-chart ct-golden-section xp-chartist-stacked-bar"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->            
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Yearly Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="mdi mdi-circle-outline text-danger"></i>Series C</p>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-donut-fill-rather-chart"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-8 col-xl-8 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Our Projects</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Index</th>
                                    <th class="border-top-0">Project Name</th>
                                    <th class="border-top-0">Earnings</th>
                                    <th class="border-top-0">Start Date</th>
                                    <th class="border-top-0">Due Date</th>
                                    <th class="border-top-0">Reviews</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);">Web Designing</a>
                                    </td>
                                    <td>$100</td>                                 
                                    <td>01/05/2018</td>
                                    <td>30/07/2018</td>
                                    <td>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="javascript:void(0);">Website Development</a>
                                    </td>
                                    <td>$300</td>                                 
                                    <td>10/08/2018</td>
                                    <td>15/09/2018</td>
                                    <td>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star-half text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-primary">Running</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="javascript:void(0);">UI App Kit</a>
                                    </td>
                                    <td>$250</td>                                 
                                    <td>05/05/2018</td>
                                    <td>20/07/2018</td>
                                    <td>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-danger">Cancelled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <a href="javascript:void(0);">Social Marketing</a>
                                    </td>
                                    <td>$550</td>                                 
                                    <td>01/06/2018</td>
                                    <td>30/08/2018</td>
                                    <td>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star-half text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-info">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <a href="javascript:void(0);">App Development</a>
                                    </td>
                                    <td>$270</td>                                 
                                    <td>11/04/2018</td>
                                    <td>25/05/2018</td>
                                    <td>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <i class="mdi mdi-star-half text-warning"></i>
                                        <i class="mdi mdi-star-outline text-warning"></i>
                                    </td>
                                    <td>
                                        <span class="badge badge-pill badge-secondary">Processing</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Project Statistics</h5>
                </div>
                <div class="card-body">
                    <div class="xp-progressbar">
                        <p class="">WordPress<span class="pull-right">85%</span></p>
                        <div class="progress m-b-20" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="">HTML<span class="pull-right">30%</span></p>
                        <div class="progress m-b-20" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="">Android<span class="pull-right">75%</span></p>
                        <div class="progress m-b-20" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="">UI/UX<span class="pull-right">50%</span></p>
                        <div class="progress m-b-20" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="">SEO<span class="pull-right">65%</span></p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>   
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
<!-- Chartist Chart JS -->
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('assets/js/init/dashborad.js') }}"></script>
@endsection 