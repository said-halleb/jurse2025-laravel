@extends('dashboardnav')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Jurse Admin Dashboard  </h2>
            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="ecommerce-widget">

    <div class="row">
        <!-- ============================================================== -->
        <!-- sales  -->
        <!-- ============================================================== -->
      
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a  href="{{ route('admin.manageMedia')}}">
                    <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Add banners</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{ $totalPhotos }}</h1>
                    </div>
                    
                </div>
            </div></a>
        </div>
        <!-- ============================================================== -->
        <!-- end sales  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- new customer  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <a  href="{{ route('admin.manageSponcor')}}">

            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Add  Sponcors</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$totalSponcor}}</h1>
                    </div>
                  
                </div>
            </div>
            </a>
        </div>
       
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <a  href="{{ route('admin.manageSpeaker')}}">

            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Add Speakers </h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$totalSpeaker}}</h1>
                    </div>
                  
                </div>
            </div>
            </a>
        </div>
  
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Add Photos and videos</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{$totalSponcor}}</h1>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total orders  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <!-- ============================================================== -->
  
        <!-- ============================================================== -->

                      <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Recent Articles</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Article Name</th>
                                    <th class="border-0">Article Id</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Order Time</th>
                                    <th class="border-0">Customer</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    
                                    <td>Article #1 </td>
                                    <td>id000001 </td>
                                    <td>20</td>
                                    <td>$80.00</td>
                                    <td>27-08-2018 01:22:12</td>
                                    <td>Patricia J. King </td>
                                    <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    
                                    <td>Article #2 </td>
                                    <td>id000002 </td>
                                    <td>12</td>
                                    <td>$180.00</td>
                                    <td>25-08-2018 21:12:56</td>
                                    <td>Rachel J. Wicker </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                   
                                    <td>Article #3 </td>
                                    <td>id000003 </td>
                                    <td>23</td>
                                    <td>$820.00</td>
                                    <td>24-08-2018 14:12:77</td>
                                    <td>Michael K. Ledford </td>
                                    <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                </tr>
                             
                                <tr>
                                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customer acquistion  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Customer Acquisition</h5>
                <div class="card-body">
                    <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                    <div class="text-center">
                        <span class="legend-item mr-2">
                                <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Returning</span>
                        </span>
                        <span class="legend-item mr-2">

                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">First Time</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end customer acquistion  -->
        <!-- ============================================================== -->
    </div>
 

 
    <div class="row">
        <!-- ============================================================== -->
        <!-- total revenue  -->
        <!-- ============================================================== -->

        
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- category revenue  -->
        <!-- ============================================================== -->
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Revenue by Category</h5>
                <div class="card-body">
                    <div id="c3chart_category" style="height: 420px;"></div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end category revenue  -->
        <!-- ============================================================== -->

        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"> Add Banner</h5>
                <div class="card-body">
                    <div id="morris_totalrevenue"></div>
                </div>
             
            </div>
        </div>
    </div>

</div>
@endsection