    <?php require('header.php');?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="https://healthtimes.co.zw/wp-content/uploads/2020/01/1800x1200_coronavirus_1.jpg" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">COVID-19 Data Center <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">What is COVID-19?</a>
                                <a class="dropdown-item" href="#">Preventive Measures</a>
                                <a class="dropdown-item" href="#">In case of Emergency</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-info"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">What is COVID-19?</h4>
                                        <p>Information</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <p>The Novel-Corona virus also known as COVID-19...</p>
                                        
                                    </div>
                                </div>
                                <canvas id="coin_sales1" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-info"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Preventive Measures</h4>
                                        <p>Information</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <p>In order to stay safe during this period...</p>
                                       
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-ambulance"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">In case of an Emergency?</h4>
                                        <p>Information</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <p>In the event that you have contracted the virus or suspect that you...</p>
                                        
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">World Health Organisation</h4>
                                    <sup class="custome-select border-0 pr-3">Latest Tweets</sup>
                                     </sup>
                                </div>
                                <div>
                                    <!-- WHO timeline -->
                                    <a class="twitter-timeline" data-height="700" data-theme="dark" href="https://twitter.com/WHO?ref_src=twsrc%5Etfw">
                                    Tweets by WHO</a>
                                     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Ministry of Health & Childcare Zimbabwe</h4>
                                <div>
                                    <!-- MoHCC Timeline -->
                                    <a class="twitter-timeline" data-height="700" data-theme="dark" href="https://twitter.com/MoHCCZim?ref_src=twsrc%5Etfw">
                                    Tweets by MoHCCZim</a> 
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                
                </div>
                <!-- row area end -->
               
                   
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <?php require_once('footer.php');?>