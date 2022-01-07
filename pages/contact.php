
    <!-- Content -->
    <div class="page-content bg-white">

    	<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr6.jpg); background-size: cover;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->

        <!-- Contact Form -->
		<div class="section-full content-inner contact-page-9 overlay-black-dark" style="background-image: url(images/background/bg5.jpg); background-position: 30% 100%">
			<div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 text-white">
						<div class="row">
							<div class="col-lg-12 col-md-12 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-location-pin"></i></span> 
											Company Address
										</h5>
										<p>Midland House, Unit 1 111-113 Victoria Road Romford, RM1 2LX</p>
										<h6 class="m-b15 text-black font-weight-400"><i class="ti-alarm-clock"></i> Office Hours</h6>
										<p class="m-b0">Mon To Sat - 10.00 - 07.00</p>
										<p>Sunday - Close</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-email"></i></span> 
											E-mail
										</h5>
										<p class="m-b0">info@greenutilitiesconsultancy.co.uk</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
									<div class="icon-content">
										<h5 class="dlab-tilte">
											<span class="icon-sm text-primary"><i class="ti-mobile"></i></span> 
											Phone Numbers
										</h5>
										<p class="m-b0">+4401708705703</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12 m-b30">
			            <div class="row" >
			                <div id="loader" class="text-center" style="height: 100px; position: absolute; top: 50%; left: 50%; z-index: 1;display: none;">
			                    <img src="images/roaling.gif" alt="" width="60" height="60">
			                </div>
			                <h4 class="sent-notification text-center"></h4>
			            </div>
						<form method="POST" class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s" id="myForm">
							<h3 class="title-box font-weight-300 m-t0 m-b10">Let's Convert Your Idea into Reality <span class="bg-primary"></span></h3>
							
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-user text-primary"></i></span>
											<input id="name" type="text" required class="form-control" placeholder="Full Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-mobile text-primary"></i></span>
											<input id="phone" type="text" required class="form-control" placeholder="Phone">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-check-box text-primary"></i></span>
											<select id="service" required="true" >
												<option disabled selected>Select Service Type</option>
												<option value="Commercial Electricity">Commercial Electricity</option>
												<option value="Commercial Gas">Commercial Gas</option>
												<option value="Commercial Water">Commercial Water</option>
												<option value="Energy Management">Energy Management</option>
												<option value="Bills Validation">Bills Validation</option>
												<option value="Meter Installation">Meter Installation</option>
												<option value="Card Machine">Card Machine</option>
												<option value="E-POS">E-POS</option>
												<option value="Payment Gateway">Payment Gateway</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group"> 
											<span class="input-group-addon"><i class="ti-email text-primary"></i></span>
											<input id="email" type="text" class="form-control" required  placeholder="Email Id" >
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="ti-agenda text-primary"></i></span>
											<textarea id="body" rows="4" class="form-control" required placeholder="Tell us about your query"></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<input type="checkbox" name="gdpr" id="gdpr" required value="By continuing to use this, you agree to our GDPR policy" >
  									<label for="gdpr">By continuing to use this, you agree to our GDPR policy</label><br>
								</div>	
								<div class="col-lg-12 col-md-12">
									<button type="button" onclick="sendEmail()" class="site-button button-md"> <span>Get A Free Quote!</span> </button>
								</div>
							</div>
						</form>	
					</div>
				</div>
            </div>
		</div>
        <!-- Contact Form END -->
    </div>
    <!-- Content END-->

    <br><br>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>


 		function sendEmail(){
            var name = $("#name");
            var phone = $("#phone");
            var service = $("#service");
            var email = $("#email");
            var body = $("#body");
            var gdpr = $("#gdpr");

            if (isNotEmpty(name) && isNotEmpty(phone) && isNotEmpty(service) && isNotEmpty(email) && isNotEmpty(body) && isNotEmpty(gdpr)){
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        name: name.val(),
                        phone: phone.val(),
                        service: service.val(),
                        email: email.val(),
                        body: body.val(),
                        gdpr: gdpr.val(),

                    }, 
                    beforeSend: function(){
                        $("#loader").show();
                    },
                    complete:function(){
                        $("#loader").hide();
                    },

                    success: function(response){
                        $('#myForm')[0].reset();
                        $('.sent-notification')
                        swal({
                            text:"Message sent successfully.",
                        })
                        
                    },
                    error:function () {
                        $('.sent-notification')
                         swal({
                            text:" Invalid Email Detected ! ",
                        })

                        
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border', '1px solid red');
                return false;
            }
            else{
                caller.css('border', '');
                return true;
            }
        }

		// =================== Contact page End =========================
	</script>
     
