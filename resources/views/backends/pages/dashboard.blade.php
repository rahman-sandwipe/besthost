@extends('backends.master')
@section('title')
    <title>Dashboard :: Project Name</title>
@endsection
@section('main_contents')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <a href="" class="btn btn-success">
                        <span><i class="fa fa-newspaper-o"></i> Add News</span>
                    </a>
                    <a href="" class="btn btn-success">
                        <span><i class="fa fa-camera"></i> Add Video</span>
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-success">
                        <span><i class="fa fa-user"></i> Add User</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-info"><i class="fa fa-user"></i> </div>
                        <div class="content">
                            <div class="text">Total User</div>
                            <h5 class="number">11</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-warning"><i class="fa fa-tags"></i> </div>
                        <div class="content">
                            <div class="text">Total News</div>
                            <h5 class="number">12</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-danger"><i class="fa fa-credit-card"></i> </div>
                        <div class="content">
                            <div class="text">Videos</div>
                            <h5 class="number">12</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-success"><i class="fa fa-smile-o"></i> </div>
                        <div class="content">
                            <div class="text">Happy Clients</div>
                            <h5 class="number">528</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>New Admission List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>27</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>23</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td>James</td>
                                        <td>23</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td>charlie</td>
                                        <td>21</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>
                                        <td><span class="badge badge-success">BBA</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis<small>8% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="sparkline-pie text-center">6,4,8</div>
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Science</h5>
                                <b class="col-black">84.60%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Commerce</h5>
                                <b class="col-black">15.40%</b>
                            </div>
                            <div class="stat-item">
                                <h5>Atrs</h5>
                                <b class="col-black">5.10%</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Science Department<small >All Earnings are in million $</small></h2>
                    </div>
                    <div class="body">
                        <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771"
                            data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="#ffcd55"
                            data-fill-Color="#ffcd55"> 2,5,3,2,1,7,6,0,2</div>
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">7,000</b>
                            </div>
                            <div class="stat-item">
                                <h5>2016</h5>
                                <b class="col-indigo">2,000</b>
                            </div>
                            <div class="stat-item">
                                <h5>2017</h5>
                                <b class="col-indigo">5,000</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Commerce Department<small>All Earnings are in million $</small></h2>
                    </div>
                    <div class="body">
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="7" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">3,200</b>
                            </div>
                            <div class="stat-item">
                                <h5>2016</h5>
                                <b class="col-indigo">1,200</b>
                            </div>
                            <div class="stat-item">
                                <h5>2017</h5>
                                <b class="col-indigo">2,000</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection