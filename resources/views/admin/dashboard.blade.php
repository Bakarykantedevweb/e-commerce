@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 half-gutter grid-margin">
            <div class="card card-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="mb-0 text-blue">850</h4>
                            <p class="text-muted mb-0">Products Sold</p>
                        </div>
                        <div>
                            <i class="fas fa-shopping-cart text-blue fs-2"></i>
                        </div>
                    </div>
                    <div class="custom-progress bg-blue progress mb-0">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:70%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 half-gutter grid-margin">
            <div class="card card-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="mb-0 text-orange">$748</h4>
                            <p class="text-muted mb-0">Net Profit</p>
                        </div>
                        <div>
                            <i class="fas fa-chart-pie text-orange fs-2"></i>
                        </div>
                    </div>
                    <div class="custom-progress bg-orange progress mb-0">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:80%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 half-gutter grid-margin">
            <div class="card card-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="mb-0 text-green">146</h4>
                            <p class="text-muted mb-0">New Customers</p>
                        </div>
                        <div>
                            <i class="far fa-user text-green fs-2"></i>
                        </div>
                    </div>
                    <div class="custom-progress bg-green progress mb-0">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:60%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 half-gutter grid-margin">
            <div class="card card-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="mb-0 text-pink">99.89 %</h4>
                            <p class="text-muted mb-0">Customer Satisfaction</p>
                        </div>
                        <div>
                            <i class="far fa-heart text-pink fs-2"></i>
                        </div>
                    </div>
                    <div class="custom-progress bg-pink progress mb-0">
                        <div class="animated custom-bar progress-bar slideInLeft" style="width:90%" aria-valuemax="100"
                            aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- row -->
    <div class="row">
        <div class="col-xl-7 half-gutter grid-margin">
            <div class="card card-white h-100">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Market Value</h4>
                </div>
                <div class="card-body">
                    <div id="apexchart1"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 half-gutter grid-margin">
            <div class="card card-white h-100">
                <div class="card-heading clearfix">
                    <h4 class="card-title">New Orders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Product</th>
                                    <th class="border-top-0">Customers</th>
                                    <th class="border-top-0">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>iPhone X</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Nicolette Villeneuve">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-01.jpg') }}" alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Carl M. Gaier">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-02.jpg') }}" alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Frank Manning">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-03.jpg') }}" alt="...">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>$8999</td>
                                </tr>
                                <tr>
                                    <td>Pixel 2</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Gary Bradley">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-04.jpg') }}" alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Chandra Cirillo">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-05.jpg') }}"
                                                    alt="...">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>$5550</td>
                                </tr>
                                <tr>
                                    <td>OnePlus</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Frederick Cooper">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-06.jpg') }}"
                                                    alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Elizabeth Elzey">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-07.jpg') }}"
                                                    alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Eugene Rivera">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-08.jpg') }}"
                                                    alt="...">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>$9000</td>
                                </tr>
                                <tr>
                                    <td>Galaxy</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Janet Zoller">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-09.jpg') }}"
                                                    alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="George Biddle">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-10.jpg') }}"
                                                    alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Nicolette Villeneuve">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-01.jpg') }}"
                                                    alt="...">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>$7500</td>
                                </tr>
                                <tr>
                                    <td>Moto Z2</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Carl M. Gaier">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-02.jpg') }}"
                                                    alt="...">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Frank Manning">
                                                <img class="rounded-circle" src="{{ asset('admin/img/avatars/avatar-03.jpg') }}"
                                                    alt="...">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>$8500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- row -->
    <div class="row">
        <div class="col-lg-6 col-xl-4 half-gutter grid-margin">
            <div class="card card-white mb-3">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Social Source</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 text-center mb-4 mb-sm-0">
                            <i class="fab fa-facebook-f social-icon text-white"></i>
                            <h3 class="h6">Facebook</h3>
                            <span>125 sales</span>
                        </div>
                        <div class="col-sm-4 text-center mb-4 mb-sm-0">
                            <i class="fab fa-twitter social-icon bg-blue text-white"></i>
                            <h3 class="h6">Twitter</h3>
                            <span>112 sales</span>
                        </div>
                        <div class="col-sm-4 text-center">
                            <i class="fab fa-instagram social-icon bg-pink text-white"></i>
                            <h3 class="h6">Instagram</h3>
                            <span>104 sales</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-white">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Monthly Earning</h4>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <p class="mb-4">This month</p>
                            <h3>$34,252</h3>
                            <p class="f-s-13 mb-4"><span class="text-success">12%</span> <i
                                    class="fas fa-arrow-up text-success f-s-11 me-3"></i> From previous period</p>
                            <a href="#" class="btn btn-primary btn-sm btn-rounded">View More</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="apexchart2"></div>
                        </div>
                    </div>
                    <span>We craft digital, graphic and dimensional thinking.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 half-gutter grid-margin">
            <div class="card card-white h-100">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Top Cities Selling Product</h4>
                </div>
                <div class="card-body pt-lg-4">
                    <div class="text-center">
                        <i class="fas fa-map-pin text-primary display-4 mb-4"></i>
                        <h3>1,456</h3>
                        <p>San Francisco</p>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-centered">
                            <tbody>
                                <tr>
                                    <td style="width: 30%">
                                        <p class="mb-0">San Francisco</p>
                                    </td>
                                    <td style="width: 25%">
                                        <h5 class="mb-0">1,456</h5>
                                    </td>
                                    <td>
                                        <div class="custom-progress bg-blue progress mb-0">
                                            <div class="animated custom-bar progress-bar slideInLeft" style="width:90%"
                                                aria-valuemax="100" aria-valuemin="0" aria-valuenow="10"
                                                role="progressbar"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">Los Angeles</p>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">1,123</h5>
                                    </td>
                                    <td>
                                        <div class="custom-progress bg-orange progress mb-0">
                                            <div class="animated custom-bar progress-bar slideInLeft" style="width:70%"
                                                aria-valuemax="100" aria-valuemin="0" aria-valuenow="10"
                                                role="progressbar"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">San Diego</p>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">1,026</h5>
                                    </td>
                                    <td>
                                        <div class="custom-progress bg-green progress mb-0">
                                            <div class="animated custom-bar progress-bar slideInLeft" style="width:66%"
                                                aria-valuemax="100" aria-valuemin="0" aria-valuenow="10"
                                                role="progressbar"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0">London</p>
                                    </td>
                                    <td>
                                        <h5 class="mb-0">1,000</h5>
                                    </td>
                                    <td>
                                        <div class="custom-progress bg-pink progress mb-0">
                                            <div class="animated custom-bar progress-bar slideInLeft" style="width:50%"
                                                aria-valuemax="100" aria-valuemin="0" aria-valuenow="10"
                                                role="progressbar"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 half-gutter grid-margin">
            <div class="card card-white h-100">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Revenue Report</h4>
                </div>
                <div class="card-body">
                    <div id="apexchart3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- row -->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card card-white h-100">
                <div class="card-heading clearfix">
                    <h4 class="card-title">Latest Transaction</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Billing Name</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Payment Method</th>
                                    <th>View Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2540</a> </td>
                                    <td>Nicolette Villeneuve</td>
                                    <td>
                                        20 Mar, 2022
                                    </td>
                                    <td>
                                        $400
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2541</a> </td>
                                    <td>Carl M. Gaier</td>
                                    <td>
                                        19 Mar, 2022
                                    </td>
                                    <td>
                                        $380
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-pink">Chargeback</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2542</a> </td>
                                    <td>Frank Manning</td>
                                    <td>
                                        19 Mar, 2022
                                    </td>
                                    <td>
                                        $384
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2543</a> </td>
                                    <td>Gary Bradley</td>
                                    <td>
                                        18 Mar, 2022
                                    </td>
                                    <td>
                                        $412
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2544</a> </td>
                                    <td>Chandra Cirillo</td>
                                    <td>
                                        16 Mar, 2022
                                    </td>
                                    <td>
                                        $404
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-orange">Refund</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td><a href="#">#SK2545</a> </td>
                                    <td>Frederick Cooper</td>
                                    <td>
                                        14 Mar, 2022
                                    </td>
                                    <td>
                                        $392
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-soft-green">Paid</span>
                                    </td>
                                    <td>
                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-rounded">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
