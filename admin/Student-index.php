
<html>
<head>
	<meta charset="utf-8">
	<title>1440x1024 Student-sign in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link type="text/css" href="bannerify.css" rel="stylesheet" />
</head>
<body>
	<form  id="login_form1" class="form-signin" method="post"> 
	<div id="banner5_585729988">
		<div  id="b_1_banner5_585729988" class="js-bnfy">
			<img id="img_1_banner5_585729988" class="bnfy-enter" alt="Rectangle 1" width="1440" height="1024" src="images/rectangle-1_478752148.svg"/>
		</div>
		<div  id="b_2_banner5_585729988" class="js-bnfy">
			<img id="img_2_banner5_585729988" class="bnfy-enter" alt="Rectangle 2" width="1184" height="805" src="images/rectangle-2_691989447.png"/>
		</div>
		<div  id="b_3_banner5_585729988" class="js-bnfy">
			<img id="img_3_banner5_585729988" class="bnfy-enter" alt="Rectangle 3" width="590" height="750" src="images/rectangle-3_462364285.svg"/>
		</div>
		<div  id="b_4_banner5_585729988" class="js-bnfy">
			<img id="img_4_banner5_585729988" class="bnfy-enter" alt="Rectangle 4" width="482" height="93" src="images/rectangle-4_952335878.png"/>
		</div>
		<div  id="b_5_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_5_banner5_585729988" class="bnfy-enter" alt="Forgot Password?" width="134" height="24" src="images/forgot-password_687343992.svg"/></a>
		</div>
	
		<div  id="b_7_banner5_585729988" class="js-bnfy">
			<img id="img_7_banner5_585729988" class="bnfy-enter" alt="Rectangle 5" width="1440" height="108" src="images/rectangle-5_887050907.svg"/>
		</div>
		
		
		<div  id="b_11_banner5_585729988" class="js-bnfy">
			<img id="img_11_banner5_585729988" class="bnfy-enter" alt="SIGN IN" width="84" height="36" src="images/sign-in_443548288.svg"/>
		</div>
		<div  id="b_12_banner5_585729988" class="js-bnfy">
			<img id="img_12_banner5_585729988" class="bnfy-enter" alt="Sign in" width="60" height="26" src="images/sign-in_617582797.svg"/>
		</div>
		<div  id="b_13_banner5_585729988" class="js-bnfy">
			<img id="img_13_banner5_585729988" class="bnfy-enter" alt="Sign in to continue to our application" width="298" height="24" src="images/sign-in-to-continue-to-our-application_755159944.svg"/>
			<br><br>
			<label class="field a-field a-field_a3">
				<input class="field__input a-field__input" type="text" id="username"  name="username" placeholder="Eg. Abebe001" required>
				<span class="a-field__label-wrap">
				  <span class="a-field__label">User Name</span>
				</span>
			  </label>
			<label class="field a-field a-field_a3">
				<input class="field__input a-field__input" id="password" name="password" type="password" placeholder="Type your password" required>
				<span class="a-field__label-wrap">
				  <span class="a-field__label">Password</span>
				</span>
			  </label>
			  <button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info hidden" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
		</div>
		
</form>
		<div  id="b_16_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_16_banner5_585729988" class="bnfy-enter" alt="Login" width="56" height="26" src="images/login_923333428.svg"/></a>
		</div>
		<div  id="b_17_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_17_banner5_585729988" class="bnfy-enter" alt="Teacher" width="86" height="28" src="images/teacher_292242968.svg"/></a>
		</div>
		<div  id="b_18_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_18_banner5_585729988" class="bnfy-enter" alt="Adminstrator" width="132" height="28" src="images/adminstrator_005258347.svg"/></a>
		</div>
		<div  id="b_19_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_19_banner5_585729988" class="bnfy-enter" alt="Sign Up" width="74" height="26" src="images/sign-up_976046699.svg"/></a>
		</div>
		<div  id="b_20_banner5_585729988" class="js-bnfy">
			<img id="img_20_banner5_585729988" class="bnfy-enter" alt="logo and name" width="186" height="64" src="images/logo-and-name_115148592.svg"/>
		</div>
		<div  id="b_21_banner5_585729988" class="js-bnfy">
		<a href="#">	<img id="img_21_banner5_585729988" class="bnfy-enter" alt="logo and name" width="186" height="64" src="images/logo-and-name_283455557.svg"/></a>
		</div>
		<div  id="b_22_banner5_585729988" class="js-bnfy">
			<img id="img_22_banner5_585729988" class="bnfy-enter" alt="undraw_mathematics_4otb 1" width="372" height="336" src="images/undraw-mathematics-4otb-1_421775488.svg"/>
		</div>
		<div  id="b_23_banner5_585729988" class="js-bnfy">
			<img id="img_23_banner5_585729988" class="bnfy-enter" alt="Ellipse 1" width="524" height="514" src="images/ellipse-1_465685397.svg"/>
		</div>
		
	</div>
	
	<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>	
														
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to Da-viruz School Management System", { header: 'Access Granted' });
									var delay = 2000;
										setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Welcome to Da-viruz School Management System", { header: 'Access Granted' });
									var delay = 2000;
										setTimeout(function(){ window.location = 'student_notification.php'  }, delay);  
									}else
									{
									$.jGrowl("Please Check your Username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>	
							<div id="button_form" class="form-signin" >
				<?php
					$title_query = mysqli_query($conn, "select * from content where title='title'");
					$title = mysqli_fetch_assoc($title_query);
				?>
			<div style="font-size: 10">New to <?php echo $title['content']; ?></div>
			<hr>
				<h3 class="form-signin-heading"><i class="icon-edit"></i> Sign up</h3>
				<button data-placement="top" title="Sign In as Student" id="signin_student" onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn btn-info" type="submit">I`m a Student</button>
				<div class="pull-right">
					<button data-placement="top" title="Sign In as Teacher" id="signin_teacher" onclick="window.location='signup_teacher.php'" name="login" class="btn btn-info" type="submit">I`m a Teacher</button>
				</div>
			</div>
					<script type="text/javascript">
					$(document).ready(function(){
						$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
					});
					</script>	
					<script type="text/javascript">
					$(document).ready(function(){
						$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
					});
					</script>	
</body>
</html>