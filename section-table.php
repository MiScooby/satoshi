<style>
    .ulks li span {
        line-height: 2.5;
        font-size: 21px;
    }

    .ulks li {
        list-style: none;
        position: relative;
    }

    .ulks li span::before {
        content: '\f26a';
        font-family: bootstrap-icons !important;
        position: absolute;
        top: 0;
        left: -30px;
    }

    .tab--area .btnlist .nav-item .nav-link.active .d-flex {
        padding-bottom: 10px;
        border-bottom: 1px solid #ffc107;
    }

    .tab--area .btnlist .nav-item .nav-link {
        background-color: transparent !important;
    }

    .tab--area .btnlist2 .nav-item .nav-link.active span {
        background-color: #ffc107;
    }

    .tab--area .btnlist2 .nav-item .nav-link span {
        padding: 10px 30px;
        border-radius: 6px;
        font-size: 17px;
    }

    .tab--area .btnlist2 .nav-item .nav-link {
        background-color: transparent !important;
    }
</style>
<section class="table-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="section-heading position-relative z-index-1000 d-flex align-items-center justify-content-center">
                    <h2 class="mb-0 text-center">Leading the Expansion of Altcoin Options Markets</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="ulks">
                    <li><span>Real-time standardised pricing</span></li>
                    <li><span>Secure clearing mechanisms</span></li>
                    <li><span>Standard contracts</span></li>
                </ul>
            </div>
            <div class="col-md-6 text-end">
                <img src="img\right-img.png" alt="">
            </div>
        </div>
        <div class="px-0 tab--area py-4 py-lg-5">
            <ul class="nav nav-tabs justify-content-around btnlist" id="funtoTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded-pill active" id="tab--3" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h4>Options</h4>
                            <span>24h Volume:3,003,654</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link rounded-pill" id="tab--4" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h4>Options</h4>
                            <span>24h Volume:3,003,654</span>
                        </div>
                    </a></li>
                <li class="nav-item"><a class="nav-link rounded-pill" id="tab--5" data-bs-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h4>Options</h4>
                            <span>24h Volume:3,003,654</span>
                        </div>
                    </a></li>
            </ul>
            <div class="tab-content">
                <!-- Tab Pane-->
                <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                    <div class="px-0 tab--area py-4 py-lg-5">
                        <ul class="nav nav-tabs justify-content-center btnlist2" id="funtoTab" role="tablist">
                            <li class="nav-item"><a class="nav-link rounded-pill active" id="tab--1" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                                    <span>Details</span>
                                </a></li>
                            <li class="nav-item"><a class="nav-link rounded-pill" id="tab--2" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><span>Details 2</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Tab Pane-->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="table-responsive border shadow-sm ranking-table mb-70">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Position</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Base Price</th>
                                                <th scope="col">
                                                    Last 1 Day<i class="ms-1 bi bi-arrow-down-up"></i></th>
                                                <th scope="col">
                                                    7 Days<i class="ms-1 bi bi-arrow-down-up"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">#1</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Monkey Arts</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>4035</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#2</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Kings with Bitcoin</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3978</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-success">+0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#3</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Pixel Plane</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3245</span></td>
                                                <td><span class="text-danger">-1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#4</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Macaw Bird</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3122</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#5</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Sculpture Human Face</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2987</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-success">+0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#6</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Monkey Arts</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2574</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#7</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Kings with Bitcoin</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2347</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-success">+0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#8</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Pixel Plane</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2102</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#9</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Macaw Bird</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>1875</span></td>
                                                <td><span class="text-danger">+1.065%</span></td>
                                                <td><span class="text-success">-0.75%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#10</th>
                                                <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Sculpture Human Face</a></td>
                                                <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>1874</span></td>
                                                <td><span class="text-success">+1.065%</span></td>
                                                <td><span class="text-danger">-0.75%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Tab Pane-->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="table-responsive border shadow-sm activity-table bg-white">
                                    <div class="table-responsive border shadow-sm ranking-table mb-70">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Base Price</th>
                                                    <th scope="col">
                                                        Last 1 Day<i class="ms-1 bi bi-arrow-down-up"></i></th>
                                                    <th scope="col">
                                                        7 Days<i class="ms-1 bi bi-arrow-down-up"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">#1</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Monkey Arts</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>4035</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#2</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Kings with Bitcoin</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3978</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-success">+0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#3</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Pixel Plane</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3245</span></td>
                                                    <td><span class="text-danger">-1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#4</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Macaw Bird</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>3122</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#5</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Sculpture Human Face</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2987</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-success">+0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#6</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Monkey Arts</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2574</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#7</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Kings with Bitcoin</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2347</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-success">+0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#8</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Pixel Plane</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>2102</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#9</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Macaw Bird</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>1875</span></td>
                                                    <td><span class="text-danger">+1.065%</span></td>
                                                    <td><span class="text-success">-0.75%</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#10</th>
                                                    <td> <a class="btn btn-minimal text-dark hover-primary fw-bold" href="#">Sculpture Human Face</a></td>
                                                    <td><span class="d-inline-block"><i class="bi bi-currency-dollar"></i>1874</span></td>
                                                    <td><span class="text-success">+1.065%</span></td>
                                                    <td><span class="text-danger">-0.75%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Pane-->
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">

                </div>
                <!-- Tab Pane-->
                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">

                </div>
            </div>
        </div>
    </div>
</section>