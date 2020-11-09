<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Suwani Pharmacy</title>
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

<body class="bg-gradient-warning">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(&quot;assets/img/Update3.jpg&quot;) center / contain no-repeat;margin-top: 20px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">

                            <?php
                        // check whether the id parameter is set in the url
                        if (isset($_REQUEST["Number"])) {
                            // Hidden field will be added to the form only if the parameter id is set
                            ?>
                                <h4 class="text-dark mb-4">Add Prescriptions!</h4>
                                <?php
                        }else
                        {?>
                            <h4 class="text-dark mb-4">Register All The Prescriptions!</h4>
                           
                            <?php
                        }
                        ?>
                            </div>

                            
		
   

        <?php
        include 'dbconfig.php';
        // create variables to sore member details
        $id = isset($_REQUEST['Number']) ? $_REQUEST['Number'] : ""; // get value from url parameter, id
        
        $Number = "";
        $IssueDate ="";
        $PatientName = "";
		$Illness= "";
		$Age= "";
		
		
		
        $sql = "SELECT * FROM `prescription` WHERE `Number`='" . $Number . "'";
        
                
        
        $result = $conn->query($sql);

      //  if result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
           
            while ($row = $result->fetch_array()) {

				
               
                $Number = $row["Number"];
                $IssueDate = $row["Issue Date"];
                $PatientName = $row["Patient Name"];
                $Illness = $row["Illness"];
                $Age= $row["Age"];
               
		
        }
    }
        $conn->close();
        ?>
                            <form class="user" action="logic/doc_pres .php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    
                                    <input class="form-control form-control-user" type="text" id="exampleNumber" placeholder="Patient Name" value="<?php echo $PatientName; ?>" name="PatientName" required>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                    
                                    <input class="form-control form-control-user" type="date" id="exampleDate" placeholder="Date Of Issued" value="<?php echo $IssueDate; ?>" name="IssueDate">
                                    
                                    </div>
                                    <div class="col-sm-6">
                                    
                                    <input class="form-control form-control-user" type="text" id="examplepname" placeholder="Illness" value="<?php echo $Illness; ?>" name="Illness" required>
                                    
                                    </div>
                                    <div class="col-sm-6">
                                    
                                    <input class="form-control form-control-user" type="number" id="exampleage" placeholder="Age" value="<?php echo $Age; ?>" name="Age">
                                    
                                    </div>

                                    </div>
                                
                               <input type ="hidden" value="<?php echo $Number?>" name="id" >
                               
                           
                        <input class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit_image" id="button" value="Submit" />
                        <a class="btn btn-danger btn-block text-white btn-user" role="button"   href="More_prescriptions.php" >Back to menu</a>
                                
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"></div>
                            <div class="text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?PHP
		
		
//saving is success
		if(isset($_GET['sucess'])){
	//if querry excuted succesfully
		if($_GET['sucess']=='yes'){
			$message = "Prescription has been succesfully added to the database";
			echo "<script type='text/javascript'>alert('$message');</script>";
			}
		elseif($_GET['sucess']=='no')
		{
			$message = "Some Error occured .Please try again!!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
				}
	}
        
   
    
 ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>