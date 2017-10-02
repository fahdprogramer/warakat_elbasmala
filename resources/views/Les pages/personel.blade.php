@extends('layouts.app')

@section('content')

		<body id="personel">
    

		
  <div class="row">
    <div class="col-sm-12">
      <div class="card card-profile">
        <div class="card-header" style=background-image:url(../images/07.jpg);"">
            <div class="row">
                <div class="col-xs-7">
            <h1 class="hidden-xs" style="font-family:monospace;">{{ Auth::user()->name }}</h1>
                    <h1 class="visible-xs-block" style="font-family: monospace;font-size: 11px; color: black;">{{ Auth::user()->name }}</h1>
                </div></div></div>
        <div class="card-block text-xs-center">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-7">
          <img class="card-profile-img hidden-xs" src="images/14.jpg">
                    <img class="card-profile-img visible-xs-block" src="images/14.jpg" style="height: 90px;
    width: 70px;
    margin-right: -29px;">
                </div>
            </div>
            </div>
			
			
			
			<div class="row">
				<a href="cv">
    <div class="col-sm-3" ><br>
      <span class="glyphicon glyphicon-plus-sign" style="color: #96f37f; font-size: 80px;" ></span>
		<h2>أنشئ سيرتك الذاتية</h2>
    </div>
					</a>
					
				<div class="col-sm-6" >
					<div class="well">
      <h1>إعلاناتك </h1>
					</div>
					
					<div class="well">
					الاعلان الاول 
     <!-- <br><br><br><h3 style="color:red;">لم تقم بإنشاء اعلانات</h3><br><br><br> -->
					</div>
				
				</div>
   <a href="demend_de_emp">
		 <div class="col-sm-3" ><br>
      <span class="glyphicon glyphicon-plus-sign" style="  color: rgb(236, 60, 227); font-size: 80px;" ></span>
		<h2>أنشئ طلب عمــــــال</h2>
    					
	   </div></a>
			
  </div>
			
			
			
			
         
        </div>
      </div>
    </div>



  </div>


 
</body>	
			
			
			
	 
@endsection