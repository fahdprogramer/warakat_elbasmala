@extends('layouts.app')

@section('content')
<body id="travaille">
<div class="well">
		
			<h2>عرض الوظائف</h2>
			
		
				
				
				<div class="well">
<<<<<<< HEAD
				<form action="" method="post" >
				   {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-3">
                            <select name="wilaya" id="wilaya" class="form-control" ="" value="">
=======
				<form action="/recherche_travaille" method="post" >
				   {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-3">
                            <select name="wilaya" id="wilaya" class="form-control" value="">
>>>>>>> origin/master
                            <option value="">-- الولاية --</option>
                            <option value="ADRAR">01 - ADRAR</option><option value="CHLEF">02 - CHLEF</option><option value="LAGHOUAT">03 - LAGHOUAT</option><option value="OUM-EL-BOUAGHI">04 - OUM-EL-BOUAGHI</option><option value="BATNA">05 - BATNA</option><option value="BEJAIA">06 - BEJAIA</option><option value="BISKRA">07 - BISKRA</option><option value="BECHAR">08 - BECHAR</option><option value="BLIDA">09 - BLIDA</option><option value="BOUIRA">10 - BOUIRA</option><option value="TAMANRASSET">11 - TAMANRASSET</option><option value="TEBESSA">12 - TEBESSA</option><option value="TLEMCEN">13 - TLEMCEN</option><option value="TIARET">14 - TIARET</option><option value="TIZI-OUZOU">15 - TIZI-OUZOU</option><option value="ALGER">16 - ALGER</option><option value="DJELFA">17 - DJELFA</option><option value="JIJEL">18 - JIJEL</option><option value="SETIF">19 - SETIF</option><option value="SAIDA">20 - SAIDA</option><option value="SKIKDA">21 - SKIKDA</option><option value="SIDI-BEL-ABBES">22 - SIDI-BEL-ABBES</option><option value="ANNABA">23 - ANNABA</option><option value="GUELMA">24 - GUELMA</option><option value="CONSTANTINE">25 - CONSTANTINE</option><option value="MEDEA">26 - MEDEA</option><option value="MOSTAGANEM">27 - MOSTAGANEM</option><option value="M-SILA">28 - M-SILA</option><option value="MASCARA">29 - MASCARA</option><option value="OUARGLA">30 - OUARGLA</option><option value="ORAN">31 - ORAN</option><option value="EL-BAYADH">32 - EL-BAYADH</option><option value="ILLIZI">33 - ILLIZI</option><option value="BORDJ-BOU-ARRERIDJ">34 - BORDJ-BOU-ARRERIDJ</option><option value="BOUMERDES">35 - BOUMERDES</option><option value="EL-TARF">36 - EL-TARF</option><option value="TINDOUF">37 - TINDOUF</option><option value="TISSEMSILT">38 - TISSEMSILT</option><option value="EL-OUED">39 - EL-OUED</option><option value="KHENCHELA">40 - KHENCHELA</option><option value="SOUK-AHRAS">41 - SOUK-AHRAS</option><option value="TIPAZA">42 - TIPAZA</option><option value="MILA">43 - MILA</option><option value="AIN-DEFLA">44 - AIN-DEFLA</option><option value="NAAMA">45 - NAAMA</option><option value="AIN-TEMOUCHENT">46 - AIN-TEMOUCHENT</option><option value="GHARDAIA">47 - GHARDAIA</option><option value="RELIZANE">48 - RELIZANE</option>                </select>
                        </div>
                        <div class="col-sm-3" id="div1">
                            <select name="domin_travaille" class="form-control">
                                <option value="">-- مجال الوظيفة --</option>
                                <option value="informatique">-- إعلام آلي --</option>
                            </select>
                        </div>
                        <div class="col-sm-3" id="div2">
                            <select name="temp_travaille"  class="form-control">
                                <option value="">-- فترة العمل  --</option>
                                <option value="sba7">-- صباحية --</option>
                            </select>
                        </div>

                        <div class="col-sm-3" id="div3">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="submit" class="btn btn-default">بحث <span class='glyphicon glyphicon-search' aria-hidden='true'></span></button>
                            </div>


                        </div>
                    </div>
					

</form>		
				
			</div>
				
			<div class="container-fluid text-center bg-grey">
  
  <div class="row text-center">
	   @foreach ($demend as $mydemend)
	   <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/13.png"  alt="اسم العامل"  style="height: 200px;"  >
        <p><strong>{{ $mydemend->nom.' '.$mydemend->prenom }}</strong></p>
        <p>المهنة المطلوبة : <b> {{ $mydemend->wadifa }}</b></p>
		  <a href="/show_demend/{{ $mydemend->id }}" class="hidden-xs">
		  <button class="btn btn-lg" >المعلومات الكاملة</button></a>
          <a href="/show_demend/{{ $mydemend->id }}" class="visible-xs-block"  >
              <button class="btn btn-lg " style="padding: 9px 9px; font-size: 13px;" >المعلومات الكاملة</button></a>
      </div>
    </div>
	  @endforeach


	 
  </div>
                {{$demend->links()}}
            </div>
				
			
		<!--
<form action="uploaded" method="post" enctype="multipart/form-data">
		  {{ csrf_field() }}
	  إختر ملف لرفعه :
		  <input type="file" name="file" id="file">
		  <input type="submit" value="رفع الملف" name="submit">
	  </form>
-->
	
		
</div>
</body>
@endsection