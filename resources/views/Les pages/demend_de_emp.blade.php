@extends('layouts.app')

@section('content')
<body id="personel">
<section id="aaa" class="cv text-center">
	<div class="row">
  <div class="col-sm-6 col-sm-push-3">
	  
	  <div class="page-header "><h1 style="font-family:monospace;"><b>إنشاء طلب عمّـــال</b></h1></div>
          
  </div>
	</div>
 
  
 <div class="well fff">
		
	 
		  <section >
			   <form action="travaille" method="post" >
				   {{ csrf_field() }}
			<div class="container-fluid bg-grey">
				
 <div class="row">
	  <div class="col-sm-12 form-group">
		   <p id="abcde"></p>
		 
    
	 </div>
        <div class="col-sm-6 form-group">
	  <input class="form-control" id="name" name="nom" placeholder="الاسم " type="text" >
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        </div>
		  <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="prenom" placeholder="اللقب " type="text" >
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        </div>
		  <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="wadifa" placeholder=" الوطيفة المطلوبة   " type="text" >
			  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        </div>
		  <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="ajr" placeholder="الأجر المدفوع" type="text" >
			  <span class="input-group-addon"><b>دج</b></span>
        </div>
	 <div class="col-sm-12 form-group">
     	
	 </div>
		  
        </div>
				
								   
			
				
				<div class="row">
              <div class="col-sm-4">
                <select name="wilaya" id="wilaya" class="form-control" ="">
                  <option value="">-- الولاية --</option>
					@foreach ($wilaya as $mywilaya)
					<option value="{{ $mywilaya->id }}">{{ $mywilaya->nom }}</option>
					@endforeach
                  <option value="ADRAR">01 - ADRAR</option><option value="CHLEF">02 - CHLEF</option><option value="LAGHOUAT">03 - LAGHOUAT</option><option value="OUM-EL-BOUAGHI">04 - OUM-EL-BOUAGHI</option><option value="BATNA">05 - BATNA</option><option value="BEJAIA">06 - BEJAIA</option><option value="BISKRA">07 - BISKRA</option><option value="BECHAR">08 - BECHAR</option><option value="BLIDA">09 - BLIDA</option><option value="BOUIRA">10 - BOUIRA</option><option value="TAMANRASSET">11 - TAMANRASSET</option><option value="TEBESSA">12 - TEBESSA</option><option value="TLEMCEN">13 - TLEMCEN</option><option value="TIARET">14 - TIARET</option><option value="TIZI-OUZOU">15 - TIZI-OUZOU</option><option value="ALGER">16 - ALGER</option><option value="DJELFA">17 - DJELFA</option><option value="JIJEL">18 - JIJEL</option><option value="SETIF">19 - SETIF</option><option value="SAIDA">20 - SAIDA</option><option value="SKIKDA">21 - SKIKDA</option><option value="SIDI-BEL-ABBES">22 - SIDI-BEL-ABBES</option><option value="ANNABA">23 - ANNABA</option><option value="GUELMA">24 - GUELMA</option><option value="CONSTANTINE">25 - CONSTANTINE</option><option value="MEDEA">26 - MEDEA</option><option value="MOSTAGANEM">27 - MOSTAGANEM</option><option value="M-SILA">28 - M-SILA</option><option value="MASCARA">29 - MASCARA</option><option value="OUARGLA">30 - OUARGLA</option><option value="ORAN">31 - ORAN</option><option value="EL-BAYADH">32 - EL-BAYADH</option><option value="ILLIZI">33 - ILLIZI</option><option value="BORDJ-BOU-ARRERIDJ">34 - BORDJ-BOU-ARRERIDJ</option><option value="BOUMERDES">35 - BOUMERDES</option><option value="EL-TARF">36 - EL-TARF</option><option value="TINDOUF">37 - TINDOUF</option><option value="TISSEMSILT">38 - TISSEMSILT</option><option value="EL-OUED">39 - EL-OUED</option><option value="KHENCHELA">40 - KHENCHELA</option><option value="SOUK-AHRAS">41 - SOUK-AHRAS</option><option value="TIPAZA">42 - TIPAZA</option><option value="MILA">43 - MILA</option><option value="AIN-DEFLA">44 - AIN-DEFLA</option><option value="NAAMA">45 - NAAMA</option><option value="AIN-TEMOUCHENT">46 - AIN-TEMOUCHENT</option><option value="GHARDAIA">47 - GHARDAIA</option><option value="RELIZANE">48 - RELIZANE</option>                </select>
              </div>
              <div class="col-sm-4" id="div1">
                <select name="daira" class="form-control" id="daira" ="">
                    <option value="">-- الدائرة --</option>
                </select>
              </div>
              <div class="col-sm-4" id="div2">
                <select name="commune" id="commune" onchange="communeChoisie();" class="form-control" ="">
                    <option value="">-- البلدية --</option>
                </select>
              </div>
            </div>
	 
			  <div class="row">
			   <div class="col-sm-6 form-group">
          <input class="form-control"  name="adr" placeholder="العنوان الكامل" type="text" >
				   <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        </div>
				  <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="tel" placeholder="رقم الهاتف " type="text" >
			<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        </div>
				  </div>
			 
		 
				
				<div class="row">
				
					<div class="col-sm-5">
                            <label for="email"> متطلبات الوظيفة</label>
					</div>

                            <div class="col-md-7 form-group">
                               <input type="text" class="form-control" placeholder="الديبلوم / ...الخ" name="motatalabat" >
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            </div>
                        
				</div>
				<div class="row">
				
                            <label for="email" class="col-md-5 control-label">فترات العمل</label>

                            <div class="col-md-7 form-group">
                                <input type="text" class="form-control" placeholder="صباحية / مسائية / دوام كامل" name="temp" >
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            </div>
                        
				</div>
				 
                            <label for="email" class="col-md-5 control-label">عدد الــــعـــمــال الـــمـــطــلـــوبــيــن</label>

                            <div class="col-md-2 form-group">
                  <input type="text" class="form-control" placeholder="01" name="nombre" >
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            </div>
                        
				
				 <div class="col-sm-12 form-group">
     	
	 </div>
				
				<label for="email" class="col-md-5 control-label" > معلومات إضافية  </label>
					<div class="col-md-7 form-group">
				 <textarea class="form-control" id="comments" name="info" placeholder="معلومات أخرى" rows="3"></textarea>
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span><br>
				</div>
		
				
				
				
			
  
</div>  
			  
			  <input type="submit"  class="btn btn_f btn-success" value="مـعــايــنـة"> 
 </form> 
	 	  </section>
		 
		 
		  
		  
	
  
</div>
	  </section>
 <script>
	 
	 
	 
	 $('#wilaya').on('change',function(e){
					 var wil =e.target.value;
		 $.get('/ajaxDaira?wil='+wil,function(data){
			 $('#daira').empty();
			 $('#daira').append('<option value="">-- الدائرة --</option>');
			$.each(data,function(index,BD_daira){
				$('#daira').append('<option value="'+BD_daira.id+'">'+BD_daira.nom+'</option>');});	 });	

		});
	 
 
	  

	  $('#daira').on('change',function(e){
					 var daira =e.target.value;
		 $.get('/ajaxCommune?daira='+daira,function(data){
			 $('#commune').empty();
			 $('#commune').append('<option value="">-- البلدية  --</option>');
			$.each(data,function(index,BD_commune){
				$('#commune').append('<option value="'+BD_commune.id+'">'+BD_commune.nom+'</option>');});		 });
					
		 });
	 
	 
	 
</script>
</body>
@endsection