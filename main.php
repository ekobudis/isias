    <?php
        session_start();
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(-1);
        include_once 'config.php';
        include_once 'public/header.php';
    ?>
            <!-- Main content -->
            <section class="content" id="content">
                <?php

                    if (isset($_GET['m'])) {
                        $menu_id = $_GET['m'];

                        $stmt = $h->GetURLMenus($menu_id);

                        $num = $stmt->rowCount();

                        if($num>0){
                            //to Redirect URL
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                extract($row);
                                $sub_menuname = $menu_name;
                                $header_menu = $menu_header;
                                include_once (VIEWS_PATH . $link_urlmenu);
                            }
                        }
                    }else{
                        echo $_SESSION['tahun_pk'];
                         echo " 
                                <div class='row'>
                                    <div class='col-md-3 col-sm-6 col-xs-12'>
                                        <div class='info-box'>
                                            <span class='info-box-icon bg-green'><i class='ion ion-ios-cart-outline'></i></span>
                                            <div class='info-box-content'>
                                                <span class='info-box-text'>Income</span>
                                                <span class='info-box-number'>90<small>%</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-6 col-xs-12'>
                                        <div class='info-box'>
                                            <span class='info-box-icon bg-aqua'><i class='ion ion-ios-cart-outline'></i></span>
                                            <div class='info-box-content'>
                                                <span class='info-box-text'>Jumlah Cumloud</span>
                                                <span class='info-box-number'>90<small>%</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-6 col-xs-12'>
                                        <div class='info-box'>
                                            <span class='info-box-icon bg-red'><i class='ion ion-ios-cart-outline'></i></span>
                                            <div class='info-box-content'>
                                                <span class='info-box-text'>Jumlah Jatuh Tempo</span>
                                                <span class='info-box-number'>90<small>%</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-3 col-sm-6 col-xs-12'>
                                        <div class='info-box'>
                                            <span class='info-box-icon bg-yellow'><i class='ion ion-ios-people-outline'></i></span>
                                            <div class='info-box-content'>
                                                <span class='info-box-text'>New Registration</span>
                                                <span class='info-box-number'>2,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='box'>
                                            <div class='box-header with-border'>
                                                <h3 class='box-title'>Monthly Recap Report</h3>
                                                <div class='box-tools pull-right'>
                                                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                                    <div class='btn-group'>
                                                        <button class='btn btn-box-tool dropdown-toggle' data-toggle='dropdown'><i class='fa fa-wrench'></i></button>
                                                        <ul class='dropdown-menu' role='menu'>
                                                            <li><a href='#'>Action</a></li>
                                                            <li><a href='#'>Another action</a></li>
                                                            <li><a href='#'>Something else here</a></li>
                                                            <li class='divider'></li>
                                                            <li><a href='#'>Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                                                </div>
                                            </div>
                                            <div class='box-body'>
                                                <div class='row'>
                                                    <div class='col-md-8'>
                                                        <p class='text-center'>
                                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                                        </p>
                                                        <div class='chart'>
                                                            <canvas id='salesChart' height='180'></canvas>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4'>
                                                        <p class='text-center'>
                                                            <strong>Goal Completion</strong>
                                                        </p>
                                                        <div class='progress-group'>
                                                            <span class='progress-text'>Add Products to Cart</span>
                                                            <span class='progress-number'><b>160</b>/200</span>
                                                            <div class='progress sm'>
                                                                <div class='progress-bar progress-bar-aqua' style='width: 80%'></div>
                                                            </div>
                                                        </div>
                                                        <div class='progress-group'>
                                                            <span class='progress-text'>Complete Purchase</span>
                                                            <span class='progress-number'><b>310</b>/400</span>
                                                            <div class='progress sm'>
                                                                <div class='progress-bar progress-bar-red' style='width: 80%'></div>
                                                            </div>
                                                        </div>
                                                        <div class='progress-group'>
                                                            <span class='progress-text'>Visit Premium Page</span>
                                                            <span class='progress-number'><b>480</b>/800</span>
                                                            <div class='progress sm'>
                                                                <div class='progress-bar progress-bar-green' style='width: 80%'></div>
                                                            </div>
                                                        </div>
                                                        <div class='progress-group'>
                                                            <span class='progress-text'>Send Inquiries</span>
                                                            <span class='progress-number'><b>250</b>/500</span>
                                                            <div class='progress sm'>
                                                                <div class='progress-bar progress-bar-yellow' style='width: 80%'></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='box-footer'>
                                                <div class='row'>
                                                    <div class='col-sm-3 col-xs-6'>
                                                        <div class='description-block border-right'>
                                                            <span class='description-percentage text-green'><i class='fa fa-caret-up'></i> 17%</span>
                                                            <h5 class='description-header'>$35,210.43</h5>
                                                            <span class='description-text'>TOTAL REVENUE</span>
                                                        </div>
                                                    </div>
                                                    <div class='col-sm-3 col-xs-6'>
                                                        <div class='description-block border-right'>
                                                            <span class='description-percentage text-yellow'><i class='fa fa-caret-left'></i> 0%</span>
                                                            <h5 class='description-header'>$10,390.90</h5>
                                                            <span class='description-text'>TOTAL COST</span>
                                                        </div>
                                                    </div>
                                                    <div class='col-sm-3 col-xs-6'>
                                                        <div class='description-block border-right'>
                                                            <span class='description-percentage text-green'><i class='fa fa-caret-up'></i> 20%</span>
                                                            <h5 class='description-header'>$24,813.53</h5>
                                                            <span class='description-text'>TOTAL PROFIT</span>
                                                        </div>
                                                    </div>
                                                    <div class='col-sm-3 col-xs-6'>
                                                        <div class='description-block'>
                                                            <span class='description-percentage text-red'><i class='fa fa-caret-down'></i> 18%</span>
                                                            <h5 class='description-header'>1200</h5>
                                                            <span class='description-text'>GOAL COMPLETIONS</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='box box-info'>
                                    <div class='box-header with-border'>
                                      <h3 class='box-title'>Latest Orders</h3>
                                      <div class='box-tools pull-right'>
                                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                        <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                                      </div>
                                    </div>
                                    <div class='box-body'>
                                      <div class='table-responsive'>
                                        <table class='table no-margin'>
                                          <thead>
                                            <tr>
                                              <th>Order ID</th>
                                              <th>Item</th>
                                              <th>Status</th>
                                              <th>Popularity</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR9842</a></td>
                                              <td>Call of Duty IV</td>
                                              <td><span class='label label-success'>Shipped</span></td>
                                              <td><div class='sparkbar' data-color='#00a65a' data-height='20'>90,80,90,-70,61,-83,63</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR1848</a></td>
                                              <td>Samsung Smart TV</td>
                                              <td><span class='label label-warning'>Pending</span></td>
                                              <td><div class='sparkbar' data-color='#f39c12' data-height='20'>90,80,-90,70,61,-83,68</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR7429</a></td>
                                              <td>iPhone 6 Plus</td>
                                              <td><span class='label label-danger'>Delivered</span></td>
                                              <td><div class='sparkbar' data-color='#f56954' data-height='20'>90,-80,90,70,-61,83,63</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR7429</a></td>
                                              <td>Samsung Smart TV</td>
                                              <td><span class='label label-info'>Processing</span></td>
                                              <td><div class='sparkbar' data-color='#00c0ef' data-height='20'>90,80,-90,70,-61,83,63</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR1848</a></td>
                                              <td>Samsung Smart TV</td>
                                              <td><span class='label label-warning'>Pending</span></td>
                                              <td><div class='sparkbar' data-color='#f39c12' data-height='20'>90,80,-90,70,61,-83,68</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR7429</a></td>
                                              <td>iPhone 6 Plus</td>
                                              <td><span class='label label-danger'>Delivered</span></td>
                                              <td><div class='sparkbar' data-color='#f56954' data-height='20'>90,-80,90,70,-61,83,63</div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='pages/examples/invoice.html'>OR9842</a></td>
                                              <td>Call of Duty IV</td>
                                              <td><span class='label label-success'>Shipped</span></td>
                                              <td><div class='sparkbar' data-color='#00a65a' data-height='20'>90,80,90,-70,61,-83,63</div></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <div class='box-footer clearfix'>
                                      <a href='javascript::;' class='btn btn-sm btn-info btn-flat pull-left'>Place New Order</a>
                                      <a href='javascript::;' class='btn btn-sm btn-default btn-flat pull-right'>View All Orders</a>
                                    </div>
                                  </div>
                                </div>
                                ";
                    }
                ?>
            </section>
    </div> <!-- /.content-wrapper -->
    <?php
        require_once "public/footer.php";
    ?>