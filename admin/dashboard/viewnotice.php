
<script>
	function UpdateStatus(email)
	{
		if(confirm("You want to Change STATUS of this STUDENT ?"))
		{
		window.location.href="update_StudentStatus.php?email="+email;
		}
	}
	function DeleteStudent(email)
	{
		if(confirm("You want to DELETE this STUDENT ?"))
		{
		window.location.href="delete_Student.php?email="+email;
		}
	}
</script>
<?php 
session_start();
include('../connection.php');
require('../sendmail.php');

$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:../AdminLogin.php');
}
else
{
		$que1=mysqli_query($conn,"select * from teacher");
		$que2=mysqli_query($conn,"select * from user");
		$que3=mysqli_query($conn,"select * from teacher_notice");
		$row1=mysqli_num_rows($que1);
		$row2=mysqli_num_rows($que2);
		$row3=mysqli_num_rows($que3);

		$TCount=0;
		$SCount=0;
		$NCount=0;
		
		if($row1)
		{	
			$TCount=$row1;
		}
		else
		{
			$TCount=0;
		}
		if($row2)
		{	
			$SCount=$row2;
		}
		else
		{
			$SCount=0;
		}
		if($row3)
		{	
			$NCount=$row3;
		}
		else
		{
			$NCount=0;
		}
}

	extract($_POST);
	if(isset($save))
	{
		$type=$_REQUEST['type'];
		$branch=$_REQUEST['branch'];
		$sem=$_REQUEST['sem'];
			
		//image
		$imageName=$_FILES['file']['name'];

		$query="insert into notice values('','$branch','$sem','$subject','$desc',now(),'$imageName','$type')";
		mysqli_query($conn,$query);
		//upload image

		move_uploaded_file($_FILES['file']['tmp_name'],"notice/".$_FILES['file']['name']);
		$err="<font color='blue'>Notice Upload successfull !!</font>";

/*
		$err="<font color='blue'>Registration successfull !!</font>";

		sendmail($txtEMail,'Registration','Dear '.$txtName.', You are Successfully Registered to Online Notice Board Site');

		$Name=str_replace(' ','+',$txtName);
		$MobileNo=$txtMobNo;
		$msgn = "Dear+".$Name.",+You+Registered+for+Online+Notice+Board+App+and+Your+Status+is+Pending";
		//$page = file_get_contents("http://api.fast2sms.com/sms.php?token=MY4Sl25kaJ&mob=$MobileNo&mess=$msgn&sender=InfoGC&route=1");
*/
	}
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Parul University - A Vibrant University Experience</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

<script src="js/Chart.js"></script>

<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>

<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
    	<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="admindashboard.php"><span class="fa fa-area-chart"></span> Parul University <span class="dashboard_text">- A Vibrant University Experience</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="admindashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Teachers</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="manageteacher.php"><i class="fa fa-angle-right"></i> Manage</a></li>
                  <li><a href="manageteachernotice.php"><i class="fa fa-angle-right"></i> Notifications</a></li>

                </ul>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Students</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="managestudent.php"><i class="fa fa-angle-right"></i> Manage</a></li>
                  <li><a href="managefeedback.php"><i class="fa fa-angle-right"></i> Feedbacks</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="charts.html">
                <i class="fa fa-edit"></i>
                <span>Notifications</span>
				<i class="fa fa-angle-left pull-right"></i>
                </a>
				<ul class="treeview-menu">
                  <li><a href="managenotice.php"><i class="fa fa-angle-right"></i> Add New Notification</a></li>
                  <li><a href=""><i class="fa fa-angle-right"></i> View All Notification</a></li>
                </ul>
              </li>
              <li class="treeview">
              
			  <li>
                <a href="adminprofile.php">
                <i class="fa fa-th"></i> <span>Profile</span>
                </a>
              </li>
              
              
          </div>
      
      </nav>
    </aside>
	</div>
	
		<div class="sticky-header header-section ">
			<div class="header-left">
	
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
	
				<div class="profile_details_left">
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
												
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="changepassword.php"><i class="fa fa-cog"></i> Settings</a> </li>  
								<li> <a href="adminprofile.php"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $TCount; ?></strong></h5>
                      <span>Total Registered Teachers</span>
                    </div>
                </div>
        	</div>
        	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $NCount; ?></strong></h5>
                      <span>Total Teacher Notifications</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $SCount; ?></strong></h5>
                      <span>Total Students Registered</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div></div>

    <script  src="js/index1.js"></script>
	
		
		
	<!--	<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>UPLOAD NOTICE</h2>

					<div class="scrollbar" id="style-1">

					<form method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4"><?php //echo @$err;?></div>
						</div>

						<div class="row">
						<div class="col-sm-4">Category </div>
						<div class="col-sm-5">
							<select id="type" name="type" style="width:100px; left-margin=20px;">
							<option value="Holiday">Holiday</option>
							<option value="Exam">Exam</option>
							<option value="Result">Result</option>
							<option value="Ceremony">Ceremony</option>
							</select>
							</div>
						</div>
						
						<div class="row">
						<div class="col-sm-4">Branch </div>
						<div class="col-sm-5">
							<select id="branch" name="branch" style="width:100px; left-margin=20px;">
							<option value="BCA">BCA</option>
							<option value="MCA">MCA</option>
							</select>
							</div>
						</div>
						<div class="row">
						<div class="col-sm-4">Semester </div>
						<div class="col-sm-5">
							<select id="sem" name="sem" style="width:100px; left-margin=20px;">
										  <option value="First">Ist Sem</option>
										  <option value="Second">IInd Sem</option>
										  <option value="Third">IIIrd Sem</option>
										  <option value="Fourth">IVth Sem</option>
										  <option value="Fifth">Vth Sem</option>
										  <option value="Sixth">VIth Sem</option>
										</select>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-4">Subject</div>
							<div class="col-sm-5">
							<input type="text" name="subject" class="form-control" style="width:200px; left-margin=20px;"/></div>
						</div>

						<div class="row">
							<div class="col-sm-4">Description</div>
							<div class="col-sm-5">
							<input type="text" name="desc" class="form-control" style="width:200px; left-margin=20px;"/></div>
						</div>

						<div class="row">
						<div class="col-sm-4">Select File</div>
							<div class="col-sm-5">
								<input class="contact-input" type="file" name="file" required style="width:200px; left-margin=20px;"/>
							</div>
						</div>
						<div class="row" style="margin-top:10px;">
							<input type="submit" value="Save" name="save" class="btn btn-success"/>
							<input type="reset" class="btn btn-success"/>
						</div>
					</form>
					</div>
					
				</div>
			</div>-->
			
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>ALL NOTICES</h3>

					<div class="scrollbar" id="style-2">

					<?php
						$que=mysqli_query($conn,"select * from notice");
						while($row=mysqli_fetch_array($que))
						{
						?>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='../../images/ppt.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><?php echo $row[1].'  '.$row[2].' Sem' ?></h5>
								<p><?php echo $row[3] ?></p>
								<p><?php echo $row[4] ?></p>
							</div>
							<!--<div class="col-xs-2 activity-desc1"><h6><p><a href="notice/ echo $row[6] ?>" style='color:Red'><font color=red >View</font></a></p></h6></div>-->
							
							<div class="col-xs-2 activity-desc1"><h6><p><font color=red ><?php echo $row[5] ?></font></a></p></h6></div>
							
							<div class="clearfix"> </div>
						</div>
					<?php
						}
						?>
					</div>
					
				</div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
		</div>
	
	</div>
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
	
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<script src="js/SimpleChart.js"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script>
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>