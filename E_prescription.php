<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - Suwani Pharmacy</title>
    <meta name="description" content="A POS web app to manage  a pharmacy">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Block-Responsive-Item-List.css">
    <link rel="stylesheet" href="assets/css/Card-Group1-Shadow.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #116e80;border-style: none;border-radius: 1px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="margin-left: 0px;">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="material-icons">local_pharmacy</i></div>
                    <div class="sidebar-brand-text mx-3"><span style="margin-right: 0px;">PMS System</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="Invoice_management.php"><i class="fas fa-file-invoice"></i><span>Invoice Management</span></a><a class="nav-link" href="Stock_management.php"><i class="fas fa-box"></i><span>Stock Management</span></a>
                        <a
                            class="nav-link" href="supplier%20Management.php"><i class="fas fa-truck-moving"></i><span>Supplier Management</span></a><a class="nav-link" href="staff_mangement.php"><i class="fas fa-user-tie"></i><span>Staff Management</span></a><a class="nav-link" href="Doctor_management.php"><i class="fas fa-syringe"></i><span>Doctor Management</span></a>
                            <a
                                class="nav-link active" href="E_prescription.php"><i class="fas fa-notes-medical"></i><span>E-Prescription&nbsp;</span></a><a class="nav-link" href="E-Channeling.php"><i class="fas fa-hand-holding-heart"></i><span>E-Chanelling</span></a><a class="nav-link" href="Delivery_management.php"><i class="fas fa-motorcycle"></i><span>Delivery Management</span></a>
                                <a
                                    class="nav-link" href="Payment_management.php"><i class="fas fa-money-bill"></i><span>Payment Management</span></a>
                                    <div style="height: 62px;"></div><a class="nav-link" href="Payment_management.php"><i class="far fa-clipboard"></i><span>Reports</span></a><a class="nav-link" href="Payment_management.php"><i class="material-icons">backup</i><span>Back Up System</span></a>
                                    <a
                                        class="nav-link" href="Payment_management.php"><i class="far fa-compass"></i><span>Help</span></a>
                    </li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background: #116e80;"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            
                                        </a>
                                        
                                      
                                       
                                           
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                       
                                            
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">NilanMeegoda@gmail.com&nbsp;</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar3.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid" style="margin-right: 49px;">
                <h3 class="text-justify text-dark bg-light border rounded border-success shadow mb-1" style="width: 352px;background: rgb(99,114,158);box-shadow: 19px 0px;border-width: 37px;border-style: solid;text-align: center;margin-right: 25px;">Patient E-Prescription Form</h3>
            </div>
            <br>
            <img style="margin-right: 40px;margin-bottom: 150px;margin-left: 200px;width: 295px;height: 255px;margin-top: 42px;"src="assets/img/prescription.webp">
            <a class="btn btn-primary" role="button" style="width: 210px;margin-left: 250px;margin-top: -235px;margin-right: -450px;" href="More_prescriptions.php">View All Prescriptions</a>
           <a class="btn btn-primary text-center" role="button" style="padding-left: 22px;margin-left: 250px;background: rgb(227,45,89);" href="AddPrescription.php">+ Add Prescription</a>
                
            <div class="form-group" style="margin-left: 180px;"><label class="text-center" style="color: rgb(7,7,7);font-size: 25px;font-family: 'Abril Fatface', cursive;">Name Of The Patient -</label><input type="text" class="form-control" style="width: 420px;margin-right: 0px;margin-left: 40px;text-align: center;background: rgb(238,208,208);"></div>
            <div
                class="form-group" style="margin-left: 180px;"><label class="text-center" style="color: rgb(7,7,7);font-size: 25px;font-family: 'Abril Fatface', cursive;">Date Of Issue-</label><input type="text" class="form-control" style="width: 420px;margin-right: 0px;margin-left: 40px;text-align: center;background: rgb(238,208,208);"></div>
        <div
            class="form-group" style="margin-left: 180px;"><label style="color: rgb(7,7,7);font-size: 25px;font-family: 'Abril Fatface', cursive;">Illness-</label><input type="text" class="form-control" style="width: 293px;margin-right: 0px;margin-left: 40px;background: rgb(238,208,208);"></div>
    <div class="form-group"
        style="margin-left: 180px;"><label style="color: rgb(7,7,7);font-size: 25px;font-family: 'Abril Fatface', cursive;">Age -</label><input type="text" class="form-control" style="width: 293px;margin-right: 0px;margin-left: 40px;background: rgb(238,208,208);"></div>
    <div class="form-group"
        style="margin-left: 180px;"><label style="color: rgb(7,7,7);font-size: 25px;font-family: 'Abril Fatface', cursive;">Contact-</label><input type="text" class="form-control" style="width: 293px;margin-right: 0px;margin-left: 40px;background: rgb(238,208,208);"></div>
    <div class="form-group"
        style="margin-left: 180px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="margin-left: 30px;margin-right: 8px;background: #4d1544;font-size: 20px;">Drug Name</th>
                        <th style="margin-left: 30px;margin-right: 8px;background: #4d1544;font-size: 20px;">Number Of Units</th>
                        <th style="margin-left: 30px;margin-right: 8px;background: #4d1544;font-size: 20px;">Number Of Times</th>
                        <th style="background: #4d1544;font-size: 20px;">Number Of Days</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><br>Azulene<br><br></td>
                        <td>10.0gm</td>
                        <td>Three</td>
                        <td>Six Days</td>
                    </tr>
                    <tr>
                        <td><br>Amoxxicillin<br><br></td>
                        <td>2.0gm</td>
                        <td>Two</td>
                        <td>Five Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Suwani Pharmacy 2020</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>