@extends('layouts.dashboard')

@section('title', 'Vendor | Gudpanda')

@section('content')

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-primary rounded">
                                    <i class="bx bx-layer avatar-title fs-24 text-primary"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate"> Products </p>
                                <h3 class="text-dark mt-1 mb-0"> 13, 647 </h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-success rounded">
                                    <i class="bx bx-award avatar-title fs-24 text-success"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate"> Orders </p>
                                <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-danger rounded">
                                    <i class="bx bxs-backpack avatar-title fs-24 text-danger"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate"> Sales </p>
                                <h3 class="text-dark mt-1 mb-0"> 976 </h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-warning rounded">
                                    <i class="bx bx-dollar-circle avatar-title fs-24 text-warning"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate"> Earnings </p>
                                <h3 class="text-dark mt-1 mb-0">$123</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                 <div class="card">
                      <div class="card-body p-0">
                           <div class="row g-0">
                                <div class="col-lg-4">
                                     <div class="p-3">
                                          <h5 class="card-title"> Weekly Progress Report </h5>
                                          <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                                          <div class="row text-center">
                                               <div class="col-6">
                                                    <p class="text-muted mb-2">This Week</p>
                                                    <h3 class="text-dark mb-3">23.5k</h3>
                                               </div> <!-- end col -->
                                               <div class="col-6">
                                                    <p class="text-muted mb-2">Last Week</p>
                                                    <h3 class="text-dark mb-3">41.05k</h3>
                                               </div> <!-- end col -->
                                          </div> <!-- end row -->
                                          <div class="text-center">
                                               <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                                          </div> <!-- end row -->
                                     </div>
                                </div> <!-- end left chart card -->
                                <div class="col-lg-8 border-start border-5">
                                     <div class="p-3">
                                          <div class="d-flex justify-content-between align-items-center">
                                               <h4 class="card-title">Performance</h4>
                                               <div>
                                                    <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                                    <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                                    <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                                    <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                               </div>
                                          </div> <!-- end card-title-->

                                          <div class="alert alert-info mt-3 text text-truncate mb-0" role="alert">
                                               Track how you have performed through our analysis feature.
                                          </div>

                                          <div dir="ltr">
                                               <div id="dash-performance-chart" class="apex-charts"></div>
                                          </div>
                                     </div>
                                </div> <!-- end right chart card -->
                           </div> <!-- end chart card -->
                      </div> <!-- end card body -->
                 </div> <!-- end card -->
            </div> <!-- end col-->
       </div> <!-- end row-->

    </div>
@endsection
