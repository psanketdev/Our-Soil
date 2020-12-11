<?php 
include('header.php');

?>
    <ol class="breadcrumb" style="margin-top: 70px;">
        <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
    </ol>
    <h2 class="text-center py-5">Shopping Cart</h2>
     <div class="row pb-5">
        <div class="col-md-7">
            <span style="font-size: 20px" class="mb-3 d-block">Products (3 items)</span>

            <div class="border b-shadow row align-items-center mb-3">
                <div class="col-md-3 pl-0">
                    <div class="text-center">
                        <img src="assets/img/products/handi.jpg" class="img-fluid p-0 w-100" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <h5 class="text-dark mb-2">Handi</h5>
                            <div>
                                <span>Shirt: Blue</span>
                                <span>Color: Blue</span>
                                <span>Size: M</span>
                            </div>
                            <span class="d-block text-primary fs-16">Status : On the way<br></span>
                            <span class="d-block fs-14">Expected Delivery on</span>
                            <span class="d-block fs-14 text-secondary">29-09-2020</span>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <div>
                                <span class="fs-16 text-info">Quantity</span>
                                <input class="border rounded" type="text" style="background-color: rgb(246,250,255);height: 38px;width: 56.95px;padding: 6px 12px;" value="1">
                            </div>
                            <div class="pt-5">
                                <span class="fs-20 text-gray font-weight-bold">$121</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" type="button">Cancel Order</button>
                        <!-- <button class="btn btn-secondary btn-sm" type="button"> Add Your Review</button> -->
                    </div>                  
                </div>
            </div>

             <div class="border b-shadow row align-items-center mb-3">
                <div class="col-md-3 pl-0">
                    <div class="text-center">
                        <img src="assets/img/products/bowls.jpg" class="img-fluid p-0 w-100" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <h5 class="text-dark mb-2">Bowls</h5>
                            <div>
                                <span>Shirt: Blue</span>
                                <span>Color: Blue</span>
                                <span>Size: M</span>
                            </div>
                            <span class="d-block text-primary fs-16">Status : On the way<br></span>
                            <span class="d-block fs-14">Expected Delivery on</span>
                            <span class="d-block fs-14 text-secondary">29-09-2020</span>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <div>
                                <span class="fs-16 text-info">Quantity</span>
                                <input class="border rounded" type="text" style="background-color: rgb(246,250,255);height: 38px;width: 56.95px;padding: 6px 12px;" value="1">
                            </div>
                            <div class="pt-5">
                                <span class="fs-20 text-gray font-weight-bold">$121</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" type="button">Cancel Order</button>
                        <!-- <button class="btn btn-secondary btn-sm" type="button"> Add Your Review</button> -->
                    </div>                  
                </div>
            </div>

             <div class="border b-shadow row align-items-center">
                <div class="col-md-3 pl-0">
                    <div class="text-center">
                        <img src="assets/img/products/flower-pots.jpg" class="img-fluid p-0 w-100" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <h5 class="text-dark mb-2">Flowers Pots</h5>
                            <div>
                                <span>Shirt: Blue</span>
                                <span>Color: Blue</span>
                                <span>Size: M</span>
                            </div>
                            <span class="d-block text-primary fs-16">Status : On the way<br></span>
                            <span class="d-block fs-14">Expected Delivery on</span>
                            <span class="d-block fs-14 text-secondary">29-09-2020</span>
                        </div>
                        <div class="d-flex flex-column align-items-end">
                            <div>
                                <span class="fs-16 text-info">Quantity</span>
                                <input class="border rounded" type="text" style="background-color: rgb(246,250,255);height: 38px;width: 56.95px;padding: 6px 12px;" value="1">
                            </div>
                            <div class="pt-5">
                                <span class="fs-20 text-gray font-weight-bold">$121</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" type="button">Cancel Order</button>
                        <!-- <button class="btn btn-secondary btn-sm" type="button"> Add Your Review</button> -->
                    </div>                  
                </div>
            </div>
            <div class="mt-5 d-flex align-items-center bg-warning py-3 px-2">
                <h5 class="fs-20">Expected Shipping Delivery: </h5>&nbsp;
                <span class="fs-14 text-dark">Thu., 12.03. - Mon., 16.03.</span>
            </div>
        </div>
        <div class="col-md-5 bg-light h-100 pt-1 pb-4 px-2">
            <div>
                <h3 class="mb-3">The total amount of<br></h3>
                <div class="table-responsive table-hover">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Temporary amount<br></td>
                                <td>95.4</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>19.6</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>5.5</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>128.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div><button class="btn btn-primary" type="button">Download Invoice</button></div>
            </div>
        </div>
    </div>
<!--   -->
<?php 
    include('footer.php');
?>