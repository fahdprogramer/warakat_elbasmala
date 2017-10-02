@extends('layouts.app')

@section('content')
<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="panel-title">التسجيل في الموقع </div>
								<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php?git=login" >لدي حساب</a></div>
							</div>  
							<div class="panel-body" >
								<form id="signupform" class="form-horizontal" role="form">

									<div id="signupalert" style="display:none" class="alert alert-danger">
										<p>خطأ :</p>
										<span></span>
									</div>

									<div class="form-group">
										<label for="firstname" class="col-md-3 control-label">إسم المستخدم  </label>
										<div class="col-md-9">
											<input type="text" class="form-control" name="firstname" placeholder="إسم المستخدم ">
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="col-md-3 control-label">البريد الالكتروني </label>
										<div class="col-md-9">
											<input type="email" class="form-control" name="email" placeholder="البريد الالكتروني ">
										</div>
									</div>

									
									<div class="form-group">
										<label for="lastname" class="col-md-3 control-label">كلمة المرور </label>
										<div class="col-md-9">
											<input type="password" class="form-control" name="lastname" placeholder="كلمة المرور">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-md-3 control-label">تأكيد كلمة المرور</label>
										<div class="col-md-9">
											<input type="password" class="form-control" name="passwd" placeholder="تأكيد كلمة المرور">
										</div>
									</div>

									

									<div class="form-group">
										<!-- Button -->  
										<div class="col-sm-12 controls">
										  <a id="btn-login" href="#" class="btn btn_width btn-info">تسجيل   </a>
										  <a id="btn-fblogin" href="#" class="btn btn_width btn-primary" style="width:auto;">تسجيل بواسطة  facebook</a>

										</div>
										
										
										
										
									</div>

									

										                                           

									


								</form>
							 </div>
						</div>




			 </div> 
		@endsection