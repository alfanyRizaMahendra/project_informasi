<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed container-body">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-lg order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDash" aria-expanded="false" aria-controls="collapseDash">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDash" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.html">Painting 1</a>
                                    <a class="nav-link" href="index.html">Painting 2</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Report and Adjust</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStore" aria-expanded="false" aria-controls="collapseStore">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Store
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStore" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="store-fg.html">Store FG</a>
                                    <a class="nav-link" href="store-ok-mach.html">Store Ok Machining</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Loading history
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">by date</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">by shift</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="loading-adjustment">
                                <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>
                                Loading Adjustment
                            </a>
                            <div class="sb-sidenav-menu-heading">Setup</div>
                            <a class="nav-link" href="kanban-store.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kanban and Store
                            </a>
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAuth" aria-expanded="false" aria-controls="collapseAuth">
                                <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        User Admin
                    </div>
                </nav>
            </div>

            <!-- Body Start here !!!! -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 fw-bold text-white text-center">Loading Painting 1</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-process text-black mb-4">
                                    <div class="card-body fs-1">K2FA Rear</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link text-decoration-none fs-2" href="#">200 PCS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-wait text-black mb-4">
                                    <div class="card-body fs-1">K0JA Front</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link text-decoration-none fs-2" href="#">200 PCS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-wait text-black mb-4">
                                    <div class="card-body fs-1">K0JA Rear</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link text-decoration-none fs-2" href="#">200 PCS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-delay text-white mb-4 animated-scale" id = "animatebutton">
                                    <span class ="text-center fs-3">LOT Tertahan</span>
                                    <div class="card-body fs-1">K93 Front</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none fs-2" href="#">100 PCS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card mb-4 table-default">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area fa-3x"></i>
                                        <span class ="fs-1">Store OK Machining</span>
                                    </div>
                                    <!-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 table-format">
                                                <div class="table-responsive">
                                                    <table class = "table table-store " width = "100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipe</th>
                                                                <th>Front</th>
                                                                <th>Rear</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-danger">PK2</td>
                                                                <td>150 PCS</td>
                                                                <td class="table-danger">50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Front</td>
                                                                <td>250 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Rear</td>
                                                                <td>150 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Front</td>
                                                                <td>125 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-danger">PK2 Rear</td>
                                                                <td>250 PCS</td>
                                                                <td class="table-danger">50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Front</td>
                                                                <td>250 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Rear</td>
                                                                <td>150 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Front</td>
                                                                <td>125 PCS</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-6 table-format">
                                                <div class="table-responsive">
                                                    <table class = "table table-store" width = "100%">
                                                        <thead>
                                                            <tr>
                                                                <th >Tipe</th>
                                                                <th>Qty</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>PK2 Rear</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Front</td>
                                                                <td>250 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Rear</td>
                                                                <td>150 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Front</td>
                                                                <td>125 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Rear</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Front</td>
                                                                <td>250 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Rear</td>
                                                                <td>150 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Front</td>
                                                                <td>125 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Rear</td>
                                                                <td>50 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PK2 Front</td>
                                                                <td>250 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Rear</td>
                                                                <td>150 PCS</td>
                                                            </tr>
                                                            <tr>
                                                                <td>K45 ABS Front</td>
                                                                <td>125 PCS</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card mb-4 table-load-order">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar fa-1x"></i>
                                        <span class ="fs-3">Urutan Loading</span>
                                    </div>
                                    <div class="card-body">
                                        <table class="table" width = "100%">
                                            <thead>
                                                <tr>
                                                    <th>Tipe</th>
                                                    <th>Qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>PK2 Rear</td>
                                                    <td>200 PCS</td>
                                                </tr>
                                                <tr>
                                                    <td>PK2 Front</td>
                                                    <td>200 PCS</td>
                                                </tr>
                                                <tr>
                                                    <td>K45 ABS Rear</td>
                                                    <td>100 PCS</td>
                                                </tr>
                                                <tr>
                                                    <td>K45 ABS Front</td>
                                                    <td>100 PCS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2W Painting Loading Dashboard 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/flash-div.js"></script>
        <script src="js/auto-make-button.js"></script>
    </body>
</html>
