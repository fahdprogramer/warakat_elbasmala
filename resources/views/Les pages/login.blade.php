<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
						<div class="panel-heading">
							<div class="panel-title">تسجيل الدخول </div>
							<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">نسيت كلمة السر ! </a></div>
						</div>     

						<div style="padding-top:30px" class="panel-body" >

							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

							<form id="loginform" class="form" role="form">

								<div style="margin-bottom: 25px" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="إسم المستخدم او الايميل ">                                        
										</div>

								<div style="margin-bottom: 25px" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input id="login-password" type="password" class="form-control" name="password" placeholder="الرقم السري ">
										</div>



								<div class="input-group">
										  <div class="checkbox">
											<label>
											  <input id="login-remember" type="checkbox" name="remember" value="1"> تذكرني 
											</label>
										  </div>
										</div>


									<div style="margin-top:10px" class="form-group">
										<!-- Button -->

										<div class="col-sm-12 controls">
										  <a id="btn-login" href="#" class="btn btn_width btn-success">دخول   </a>
										  <a id="btn-fblogin" href="#" class="btn btn_width btn-primary" style="width:auto;">دخول بواسطة facebook</a>

										</div>
									</div>


									<div class="form-group">
										<div class="col-md-12 control"><br><br>
											<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										ليس لدي حساب  ! 
											<a href="index.php?git=enregistrer" onClick="$('#loginbox').hide(); $('#signupbox').show()">
												انشاء حساب
							
											</a>
											</div>
										</div>
									</div>    
								</form>     



							</div>                     
						</div>  
			</div>
			