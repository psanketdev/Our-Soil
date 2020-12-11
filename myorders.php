<?php 
include('header.php');
?>
    <div data-bs-parallax-bg="true" style="background-image: url(&quot;assets/img/order-banner.jpg&quot;);background-position: center;background-size: cover;width: 100%;height: 600px;background-repeat: no-repeat;"></div>
    <section>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span>Library</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span>Data</span></a></li>
        </ol>
        <div class="row py-5">
            <div class="col-md-3">
                <h2 class="mb-3">Filter</h2>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between w-100 mb-3">
                    <h2>My Orders</h2>
                    <div class="form-group mb-0 pull-right col-lg-4">
                        <input type="text" class="search form-control" placeholder="Search by typing here..">
                    </div>
                </div>
                <div class="col-md-12 search-table-col pl-0">     
                        <table class="table table-bordered table-hover">
                            <thead class="bill-header cs">
                                <tr>
                                    <th id="trs-hd" class="col-lg-1" style="    width: 3px;">SL. No.</th>
                                    <th id="trs-hd" class="col-lg-2">Order ID</th>
                                    <th id="trs-hd" class="col-lg-3">Total Items</th>
                                    <th id="trs-hd" class="col-lg-2">Company Name</th>
                                    <th id="trs-hd" class="col-lg-2">Status</th>
                                    <th id="trs-hd" class="col-lg-2">Action</th>
                                    <th id="trs-hd" class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger"  type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><a href="myorderdetails.php" class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></a></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger"  type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><button class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></button></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><button class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <?php 
    include('footer.php');
?>