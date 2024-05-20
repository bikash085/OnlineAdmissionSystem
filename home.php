<?php
session_start();
if(isset($_SESSION["semail"]))
{
?>

<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../bootstrap/2.css" rel="stylesheet" type="text/css">
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                    </span>Content</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <ul class="list-group">
                

                  <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="home.php?a=1">View Course</a></li>
                 

 <li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="home.php?a=0">Apply</a>
                   
                  </li>
                  
                  <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="home.php?a=3">View Apply</a></li


><li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="home.php?a=4">Check Merit List</a>
                   
                  </li>
                  <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="home.php?a=5">Admission</a></li>
                  <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="home.php?a=6">Logout</a>
                  
                   
                  </li>


                 
                </ul>
              </div>
            </div>
            <div class="panel panel-default">
              
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    Cras justo odio
                  </a>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      Cras justo odio
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                  </div>
                  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                  <a href="#" class="list-group-item">Morbi leo risus</a>
                  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                  <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              
              <div id="collapseFive" class="panel-collapse collapse">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Dashboard</h3>
            </div>
            <div class="panel-body">
             <?php
             if(isset($_GET["a"]))
			 {
				 $id=$_GET["a"];
				 if($id==0)
				 {
					 include("apply.php");
				 }
				 
				if($id==1)
				 {
					 include("viewcourse.php");
				 }
				 if($id==2)
				 {
					 include("fees_details_entry.php");
				 }
				 if($id==3)
				 {
					 include("viewapplydetails.php");
				 }
				  if($id==4)
				 {
					 include("view_merit.php");
				 }
				

				 if($id==5)
				 {
					 include("stuadmission.php");
				 }
				 if($id==7)
				 {
					 include("new.php");
				 }
				 
				 if($id==6)
				 {
					 include("logout.php");
				 }
				 

			 }
             
             ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('Please login');
	</script>";
	header("Refresh:0;index.html");
}
