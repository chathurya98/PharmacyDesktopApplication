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
                        <div class="flex-grow-1 bg-register-image" style="background: url(&quot;assets/img/Update.jpg&quot;) center / contain no-repeat;margin-top: 20px;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">

                            <?php
                        // check whether the id parameter is set in the url
                        if (isset($_REQUEST["id"])) {
                            // Hidden field will be added to the form only if the parameter id is set
                            ?>
                                <h4 class="text-dark mb-4">Update Doctor Details!</h4>
                                <?php
                        }else
                        {?>
                            <h4 class="text-dark mb-4">Register Doctor Details!</h4>
                           
                            <?php
                        }
                        ?>
                            </div>

                            
		
   

        <?php
        include 'dbconfig.php';
        // create variables to sore member details
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : ""; // get value from url parameter, id
        
             $fname = "";
        $lname ="";
        $specializ = "";
		$workhos = "";
		
		$residence= "";
		$dispensary= "";
        $docpic="";
        $password = "";
		
		
        $sql = "SELECT * FROM doctor WHERE doc_id='" . $id . "'";
                
       
        $result = $conn->query($sql);

       
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                // Get database data and store in variables

				
               
                $fname = $row["f_name"];
                $lname = $row["l_name"];
                $specializ = $row["specialization"];
                $workhos = $row["work_hospital"];
                
                $residence= $row["address"];
                $dispensary= $row["dispensary_location"];
                $docpic= $row["doc_pic"];
                $password = $row["password"];
		
            }
        }
        $conn->close();
        ?>
                            <form class="user" action="logic/doc_reg.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" value="<?php echo $fname; ?>" name="f_name" required>
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName-1" placeholder="Specialized In" value="<?php echo $specializ; ?>" name="specialization"></div>
                                   
                                    <div class="col-sm-6">
                                    
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" value="<?php echo $lname; ?>" name="l_name" required>
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName-2" placeholder="Working Hospital" value="<?php echo $workhos; ?>" name="workaddress">
                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                
                                <input class="form-control form-control-user" type="text" id="exampleInputEmail"  placeholder="Address" value="<?php echo $residence; ?>" name="residence" required>
                                <input class="form-control form-control-user" type="text" id="exampleInputEmail-1"  placeholder="Dispensary Location" value="<?php echo $dispensary; ?>" name="disloc"></div>
                                
                                <div class="form-group">
                                    <div class="col">
                                        <p><strong>Upload doctor picture</strong>&nbsp;<span class="text-danger">*</span></p>
                                        
                                        <?php
                                        // check whether the id parameter is set in the url
                                        if (isset($_REQUEST["id"])) {
                                            
                                            ?>

                                        <input  type="file"  id="upload_file" value="<?php echo $docpic; ?>"  name="upload_file"  > 
                                        
                                        <?php
                                    }
                                    else
                                   {   
                                     ?>
                                        <input  type="file"  id="upload_file" value="upload_file"  name="upload_file"  >
                           
                            <?php
                        }
                        ?>

                                    </div>
                                </div>
                               
                   
                                
                                <?php
                        // check whether the id parameter is set in the url
                        if (isset($_REQUEST["id"])) {
                            // Hidden field will be added to the form only if the parameter id is set
                            ?>
                            <input type="hidden" name="isUpdate" value="<?php echo $id;?>"/>
                            <?php
                        }
                        ?>
                        <input class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit_image" id="button" value="Submit" />
                        <a class="btn btn-danger btn-block text-white btn-user" role="button"   href="Doctor_management.php" >Back to menu</a>
                                
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
		
		
//if page is redirected by save customer.php then we check the parameter
		if(isset($_GET['sucess'])){
	//if querry excuted succesfully
		if($_GET['sucess']=='yes'){
			$message = "DOCTOR has been succesfully added to the database";
			echo "<script type='text/javascript'>alert('$message');</script>";
			}
		elseif($_GET['sucess']=='no')
		{
			$message = "Some Error occured .Please try again!!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
				}
	}
        // edit doctor
    if(isset($_GET['update'])){
        //if querry excuted succesfully
          if($_GET['update']=='yes'){
            $message = "Doctor has been updated succesfully ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            }
          elseif($_GET['update']=='no')
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