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
                                class="nav-link" href="E_prescription.php"><i class="fas fa-notes-medical"></i><span>E-Prescription&nbsp;</span></a><a class="nav-link" href="E-Channeling.php"><i class="fas fa-hand-holding-heart"></i><span>E-Chanelling</span></a><a class="nav-link" href="Delivery_management.php"><i class="fas fa-motorcycle"></i><span>Delivery Management</span></a>
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
            <div class="container-fluid">
                <h3 class="text-dark mb-1" style="width: 1026px;">Doctor Details</h3>
            </div>
           
            <div class="col-md-12 search-table-col">
                <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
                <div class="table-responsive table-bordered table table-hover table-bordered results">
                    <table class="table table-bordered table-hover">
                        <thead class="bill-header cs">
                            <tr>
                                <th id="trs-hd" class="col-lg-3" style="width: 598px;font-size: 18px;">Doctor ID</th>
                                <th id="trs-hd" class="col-lg-1" style="width: 485px;font-size: 18px;">Doctor Name&nbsp;</th>
                                <th id="trs-hd-2" class="col-lg-1" style="width: 485px;font-size: 18px;">Specialized in&nbsp;</th>
                                <th id="trs-hd" class="col-lg-2" style="width: 578px;font-size: 18px;">Working Hospital</th>
                                <th id="trs-hd" class="col-lg-2" style="width: 616px;font-size: 18px;">Residence Address</th>
                                <th id="trs-hd" class="col-lg-2" style="width: 591px;font-size: 18px;">Dispensary Location</th>
                                
                                <th id="trs-hd" class="col-lg-2" style="width: 593px;font-size: 18px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>

                            <?php 
				   include './dbconfig.php';
				   $sql = "SELECT * FROM doctor";
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
					   
				   ?>
                            <tr>
                                <td><?php echo $row['doc_id']; ?></td>
                                <td><?php echo $row['f_name']; ?>&nbsp<?php echo $row['l_name']; ?></td>
                                <td><?php echo $row['specialization']; ?></td>
                                <td><?php echo $row['work_hospital']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['dispensary_location']; ?></td>
                                
                                <td>
                                <!-- update doctor -->
                                <a class="btn btn-danger" role="button" style="margin-left: 5px;height: 36px;width: 37px;background: url(&quot;assets/img/editpen.png&quot;);background-size: contain;" href="Register%20Doctor.php?id=<?php echo $row["doc_id"];?>"></a>
                                <!-- delete doctor -->
                                <a class="btn btn-danger" role="button"  style="margin-left: 5px;" href="./logic/doc_del.php?doc_id=<?php echo $row['doc_id']; ?>" ><i class="fa fa-trash" style="font-size: 15px;"></i></a>
                                </td>
                            </tr>
                            <?php
					}
				   }
				   
                   ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-sucess text-center" role="button" style="padding-left: 30px;margin-left: 800px;background: rgb(227,45,89)"; href="../pdf/report2.php">Generate Reports</a>
        </div>

        <?PHP
		
		
        //successs
                if(isset($_GET['delete'])){
            //if querry excuted succesfully
                if($_GET['delete']=='yes'){
                    $message = "Doctor has been deleted from the system";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                elseif($_GET['delete']=='no')
                {
                    $message = "Some Error occured .Please try again!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                        }
            }
                
         ?>

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