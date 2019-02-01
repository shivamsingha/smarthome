<script>
	$(".opbtnxz").click(function() {
		var Bid=$(this).attr('id');
		$.ajax({
			type:"POST",
			data:("id="+Bid), 
			url: "submit.php"
		}).always(function() {
			console.log("ajax called, data received:"+Bid);
		}).done(function() {
			console.log("success, data posted:"+Bid);
		}).fail(function() {
			console.log("fail, ERROR");
		});

		if(Bid=="bon")
			$("#bimg").attr("src", "res/bulb.jpg");
		else if(Bid=="boff")
			$("#bimg").attr("src", "res/bulbOff.jpg");
		else if(Bid=="fon")
			$("#fimg").attr("src", "res/fan.jpg");
		else if(Bid=="foff")
			$("#fimg").attr("src", "res/fanOFF.jpg");
		else if(Bid=="xon")
			$("#ximg").attr("src", "res/xon.jpg");
		else if(Bid=="xoff")
			$("#ximg").attr("src", "res/xoff.jpg");
	});
</script>

<div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center"> Appliances </h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" id="bimg" src="res/bulb.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Lights</h4> 
                        <p class="card-text"></p>
                        <input type="button" value="ON" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="bon"> &nbsp;&nbsp;
                        <input type="button" value="OFF" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="boff"> &nbsp;&nbsp;
                        <input type="button" value="Auto" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="baut">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" id="fimg" src="res/fan.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Fans</h4>
                        <p class="card-text"></p>
                        <input type="button" value="ON" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="fon"> &nbsp;&nbsp;
                        <input type="button" value="OFF" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="foff"> &nbsp;&nbsp;
                        <input type="button" value="Auto" data-toggle="tooltip" title="Feature not implemented yet!" class="btn btn-primary rounded-0 mb-2" id="fauto" disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" id="ximg" src="res/xon.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Other Appliances</h4>
							  	
                        <p class="card-text"></p>
                        <input type="button" value="ON" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="xon"> &nbsp;&nbsp;
                        <input type="button" value="OFF" class="btn btn-primary rounded-0 mb-2 opbtnxz" id="xoff"> &nbsp;&nbsp;
                        <input type="button" value="Auto" data-toggle="tooltip" title="Feature not implemented yet!" class="btn btn-primary rounded-0 mb-2" id="xauto" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="display-4">Hardware Used</h3>
                <hr class="bg-dark w-29 ml-0">
                <p class="lead">
                    Raspberry Pi 3 model B+
                </p>
                <p>
                    It is at the heart of the whole system, its is a single board computer which is also QUIET POWERFUL. It has a 64 bit ARM cpu which makes the board fairly powerful. It is no different from a PC or a laptop and can run a full fat Operating System. Unlike PC or mac it runs on Linux, there is a variety of Linux operating system both GUI (graphical user interface) and CLI(command line interface) some of them are Raspbian Linux which is a OS made by Raspberry Pi developers for the Raspberry Pi.
                </p>
                <ul class="list-unstyled pl-4">
                    <li><i class="fa fa-check"></i> Lighttpd (pronounced Lightly), to create the web-based GUI. </li>
                    <li><i class="fa fa-check"></i> PHP, the most popular server-side scripting language, which receives the commands executes the commands to turn the GPIOs on or off</li>
                    <li><i class="fa fa-check"></i> AJAX ,to send data to PHP in real time without reloading the page. </li>
                </ul>
            </div>
            <div class="col-md-4 mt-5">
                <img class="card-img-top" src="res/side.jpg" alt="Card image cap">
            </div>
        </div>
    </div>

    <div class="container pb-4">
        <h3 class="display-4 text-center">Powered By</h3>
        <hr class="bg-dark w-25">
        <div id="carouselLogo" class="carousel slide pt-1" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-4"><img class="d-block img-fluid" src="res/pi.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="res/bcm.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="res/rees.png" alt="First slide"></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-4"><img class="d-block img-fluid" src="res/boot.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                    </ul>
                </div>
                <!--div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                    </ul>
                </div-->
            </div>
        </div>
    </div>
