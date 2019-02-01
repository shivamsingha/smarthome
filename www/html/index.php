<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<meta name="description" content="Control and setup page for Smart Home project. --KVNBQ">
    	<meta name="author" content="ShivamSingha">
		
    	<title>Smart Home Control Centre</title>
		
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/additional.css">
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/additional.js"></script>
		
		<script>
    		$(document).ready(function() {
				$('#content').load('home.php');
				$.ajax({
						type:"POST",
      				data:("id=init"), 
      				url: "submit.php"
    				}).always(function() {
						console.log("ajax called, data received:init");
					}).done(function() {
						console.log("success, GPIOs init:");
					}).fail(function() {
						console.log("fail, init ERROR");
					});
				
				$(".nforajax").click(function() {
					var navid=$(this).attr('id');
					$('#content').load(navid+'.php');
				});
    		});
    	</script>
	<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white nforajax" id="home">Smart Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white nforajax" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white nforajax" id="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white nforajax" id="debug">*Debug</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselLogo" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselLogo" data-slide-to="0" class="active"></li>
            <li data-target="#carouselLogo" data-slide-to="1"></li>
            <li data-target="#carouselLogo" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="res/front1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="res/front2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="res/front3.jpg" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselLogo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselLogo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	<div id="content">
    
	</div>
    <footer class="footer bg-dark text-white">
        <div class="bg-primary">
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-6 col-lg-7">
                        <a class="nforajax" id="about">
							<h4 class="mb-0 white-text">Get connected with us on social networks!</h4>
						</a>
                    </div>
                    <a class="text-white nforajax" id="about">
						<div class="col-md-6 col-lg-5 text-right">
							<a><i class="fa fa-facebook white-text mr-lg-4 fa-2x"> </i></a>
							<a><i class="fa fa-twitter white-text mr-lg-4 fa-2x"> </i></a>
							<a><i class="fa fa-google-plus white-text mr-lg-4 fa-2x"> </i></a>
							<a><i class="fa fa-linkedin white-text mr-lg-4 fa-2x"> </i></a>
							<a><i class="fa fa-instagram white-text mr-lg-4 fa-2x"> </i></a>
						</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-2">
            <div class="row">

                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h4>Kendriya Vidyalaya</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p>
                    	New Bongaigaon
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h4>Useful links</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p><a class="text-white nforajax" id="home">Home</a></p>
                    <p><a class="text-white nforajax" id="about">About Us</a></p>
                    <p><a class="text-white nforajax" id="debug">*Debug</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h4>Contact</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p><i class="fa fa-home mr-3"></i> KV, NBQ, Assam</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 91 3664 222 458 </p>
                    <p><i class="fa fa-phone mr-3"></i> + 91 3664 230 266 </p>
                    <p><i class="fa fa-print mr-3"></i> + 91 3664 222 887 </p>
                </div>

            </div>
        </div>
    </footer>
	</body>
</html>
