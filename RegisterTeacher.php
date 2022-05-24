

<?php
	require('connection.php');
	require('sendmail.php');
	extract($_POST);
	if(isset($save))
	{

	$sql=mysqli_query($conn,"select * from teacher where email='$txtEMail'");

	$r=mysqli_num_rows($sql);

		if($r==true)
		{
		$err= "<font color='red'>This teacher already exists</font>";
		}
		else
		{
		$branch=$_REQUEST['branch'];
	
		$imageName=$_FILES['img']['name'];

	
		$pass=md5($txtPassword);

		$query="insert into teacher values('','$txtName','$txtMobNo','$txtEMail','$branch','$txtPassword','$imageName',now(),'pending')";
		mysqli_query($conn,$query);
	

		//mkdir("images/$txtEMail");
		//move_uploaded_file($_FILES['img']['tmp_name'],"images/$txtEMail/".$_FILES['img']['name']);


		$err="<font color='blue'>Registration successfull !!</font>";

		sendmail($txtEMail,'Registration','Dear '.$txtName.', You are Successfully Registered to Online Notice Board Site');

		$Name=str_replace(' ','+',$txtName);
		$MobileNo=$txtMobNo;
		$msgn = "Dear+".$Name.",+You+Registered+for+Online+Notice+Board+App+and+Your+Status+is+Pending";
	

		}
	}

?>


<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parul University - A Vibrant University Experience</title>
    
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style-starter.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #037EF3;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropbtn2 {
  background-color: #FFC949;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropbtn3 {
  background-color: #FF4F81;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropbtn4 {
  background-color: #1EE697;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropbtn5 {
  background-color: #FF6E65;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: black;}

.dropdown:hover .dropdown-content {display: block;}


.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>

<body>
    
    <section class="w3l-top-header">
        <div class="container-fluid">
            <div class="top-content-w3ls d-flex align-items-center justify-content-between">
                <div class="top-headers">
                    <ul>
                        <li>
                            <a href="#help" class="d-sm-block d-none">Have any question ?</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:18001231104">18001231104</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:info@paruluniversity.ac.in">info@paruluniversity.ac.in</a>
                        </li>
                    </ul>
                </div>
                <div class="top-headers top-headers-2">
                    
                </div>
            </div>
        </div>
    </section>
    
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="assets/images/logo.png" alt="" class="mr-1" /></a>
                </h1>
    
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="dropbtn" href="about.html">About Us</a>
                        </li>
						<li class="nav-item">
                            <a class="dropbtn2" href="contact.php">Contact Us</a>
                        </li>

                        <li class="nav-item">
							<div class="dropdown"><button class="dropbtn3">Register</button>
							  <div class="dropdown-content">
								<a href="RegisterTeacher.php">Teacher</a>
								<a href="RegisterStudent.php">Student</a>
							  </div>
							</div>
                        </li>
                        <li class="nav-item">
                            <a class="dropbtn4" href="GeneralNotice.php">Notice</a>
                        </li>
				
						<li class="nav-item">
							<div class="dropdown"><button class="dropbtn5">Login</button>
							  <div class="dropdown-content">
								<a href="admin/AdminLogin.php">Admin</a>
								<a href="teacher/TeacherLogin.php">Teacher</a>
								<a href="student/StudentLogin.php">Student</a>
							  </div>
							</div>
                        </li>					

                       
                    </ul>
                </div>
                
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
               
            </nav>
        </div>
    </header>
    

    
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Teacher Registration</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Register Teacher</li>
                </ul>
            </div>
        </section>
    </div>
    

    
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4 mb-5">
            <div class="mx-auto" style="max-width:1000px">
                
    
                <div class="contact-form-sec pt-5 mt-md-5">
                    <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4">
					<h2 class="title-main"><?php echo @$err;?></h3>
                        <h3 class="title-main">Registeration for <span>Teacher</span></h3>
                    </div>
                    <div class="row contact-block align-items-center">
                        <div class="col-md-5 contact-left">
                            <img src="assets/images/register.jpg" alt="" class="img-fluid img-responsive">
                        </div>
                        <div class="col-md-7 contact-right mt-md-0 mt-4 pl-lg-4">
                            <form method="post" class="signin-form" enctype="multipart/form-data">
                                <div class="input-grids">
                                    <input type="text" name="txtName" placeholder="Your Name*"
                                        class="contact-input" required="" />
										<input type="text" name="txtMobNo" placeholder="Your Mobile Number*"
                                        class="contact-input" required="" />
                                    <input type="email" name="txtEMail" placeholder="Your Email*"
                                        class="contact-input" required="" />
									<label for="branch">Choose a Branch:</label>

										<select id="branch" name="branch" style="width:100px; left-margin=20px;">
										  <option value="BCA">BCA</option>
										  <option value="MCA">MCA</option>
										</select>
									
									
                                    <input type="password" name="txtPassword" placeholder="Your Password*"
                                        class="contact-input" required="" />
										<label for="branch">Select Your Image:</label>
										<input class="contact-input" type="file" name="img" required/>
                                </div>
                                <button class="btn btn-style btn-style-secondary mt-sm-3" value="Save" name="save">Register Me</button>
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>

        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }


        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>


    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
              autoType(".type-js", 200);
        });
    </script>

    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });


        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>

    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>