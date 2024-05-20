
<?php
session_start();
//echo $_SESSION["semail"];
if(isset($_SESSION["semail"]))
{
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!------ Include the above in your HEAD tag ---------->


<style type="text/css">
	body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}


}
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }

</style>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../bootstrap/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-chevron-down pull-right">
                            </span>Content</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="dashboard.php?a=1">View Course</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="dashboard.php?a=0">Apply</a>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="dashboard.php?a=3">view Apply</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-file text-info"></span><a href="dashboard.php?a=4">Check Merit List</a>
                                    </td>
                                </tr>
                         
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-comment text-success"></span><a href="dashboard.php?a=5">Admission</a>
                                        
                                    </td>
                                </tr>
                                    <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user">
                            </span><a href="dashboard.php?a=6">Logout</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
           
        
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
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
<?php
}
else
{
	echo "<script type='text/javascript' language='javascript'>
	alert('plz login');
	</script>";
	header("Refresh:0;index.html");
}
?>