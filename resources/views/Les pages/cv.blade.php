@extends('layouts.app')

@section('content')
<body id="personel">
<section id="aaa" class="cv text-center">
  <div class="page-header ">
    <h1 style="font-family:monospace;">أنشئ سيرتك الذاتية</h1>      
  </div>
  
 
  
 <div class="well fff">
	 <form action="/employes" method="post" >
		    {{ csrf_field() }}
		  <section id="info" >
			<div class="container-fluid bg-grey">
  <h2 class="text-center">الحالة المدنية </h2>
  <div class="row">
    
    <div class="col-sm-12">
      <div class="row">
<<<<<<< HEAD

=======
          <div class="row">
>>>>>>> origin/master
          <label for="email" class="col-sm-2 control-label">الاسم</label>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="nom" placeholder="الاسم " type="text" >
        </div>
          <label for="email" class="col-sm-2 control-label">اللقب</label>
		  <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="prenom" placeholder="اللقب " type="text" >
        </div>
<<<<<<< HEAD


=======
          </div>
          <div class="row">
>>>>>>> origin/master
          <label for="email" class="col-sm-2 control-label">تاريخ الميلاد </label>
          <div class="col-sm-4 form-group">

              <input class="form-control" id="name" name="date_n" placeholder="تاريخ الميلاد " type="date" >
          </div>

          <label for="email" class="col-sm-2 control-label">الحالة العائلية </label>
          <div class="col-sm-4 form-group">

              <select name="etat_f" id="commune" onchange="communeChoisie();" class="form-control">
                  <option value="">-- الحالة العائلية  --</option>
<<<<<<< HEAD
                  <option value="أعزب">             أعزب</option>
                  <option value="متزوج">             متزوج</option>
              </select>
          </div>


=======
                  <option value="1">             أعزب</option>
                  <option value="2">             متزوج</option>
              </select>
          </div>

          </div>
>>>>>>> origin/master
          <div class="row">
          <label for="email" class="col-sm-2 control-label">رقم الهاتف</label>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="name" name="num_t" placeholder="رقم الهاتف" type="text" >
          </div>


              <label for="email" class="col-sm-2 control-label">الجنس</label>
              <div class="col-sm-2 form-group">
                  <label><input type="radio" name="optradio">  ذكر </label>
              </div>
              <div class="col-sm-2 form-group">
                  <label><input type="radio" name="optradio">  أنثى </label>
              </div>
          </div>

          <div class="row">
          <label for="email" class="col-sm-2 control-label">العنوان </label>

              <div class="col-sm-4">
                  <select name="wilaya" id="wilaya" class="form-control" >
                  <option value="">-- الولاية --</option>

                  <option value="ADRAR">01 - ADRAR</option><option value="CHLEF">02 - CHLEF</option><option value="LAGHOUAT">03 - LAGHOUAT</option><option value="OUM-EL-BOUAGHI">04 - OUM-EL-BOUAGHI</option><option value="BATNA">05 - BATNA</option><option value="BEJAIA">06 - BEJAIA</option><option value="BISKRA">07 - BISKRA</option><option value="BECHAR">08 - BECHAR</option><option value="BLIDA">09 - BLIDA</option><option value="BOUIRA">10 - BOUIRA</option><option value="TAMANRASSET">11 - TAMANRASSET</option><option value="TEBESSA">12 - TEBESSA</option><option value="TLEMCEN">13 - TLEMCEN</option><option value="TIARET">14 - TIARET</option><option value="TIZI-OUZOU">15 - TIZI-OUZOU</option><option value="ALGER">16 - ALGER</option><option value="DJELFA">17 - DJELFA</option><option value="JIJEL">18 - JIJEL</option><option value="SETIF">19 - SETIF</option><option value="SAIDA">20 - SAIDA</option><option value="SKIKDA">21 - SKIKDA</option><option value="SIDI-BEL-ABBES">22 - SIDI-BEL-ABBES</option><option value="ANNABA">23 - ANNABA</option><option value="GUELMA">24 - GUELMA</option><option value="CONSTANTINE">25 - CONSTANTINE</option><option value="MEDEA">26 - MEDEA</option><option value="MOSTAGANEM">27 - MOSTAGANEM</option><option value="M-SILA">28 - M-SILA</option><option value="MASCARA">29 - MASCARA</option><option value="OUARGLA">30 - OUARGLA</option><option value="ORAN">31 - ORAN</option><option value="EL-BAYADH">32 - EL-BAYADH</option><option value="ILLIZI">33 - ILLIZI</option><option value="BORDJ-BOU-ARRERIDJ">34 - BORDJ-BOU-ARRERIDJ</option><option value="BOUMERDES">35 - BOUMERDES</option><option value="EL-TARF">36 - EL-TARF</option><option value="TINDOUF">37 - TINDOUF</option><option value="TISSEMSILT">38 - TISSEMSILT</option><option value="EL-OUED">39 - EL-OUED</option><option value="KHENCHELA">40 - KHENCHELA</option><option value="SOUK-AHRAS">41 - SOUK-AHRAS</option><option value="TIPAZA">42 - TIPAZA</option><option value="MILA">43 - MILA</option><option value="AIN-DEFLA">44 - AIN-DEFLA</option><option value="NAAMA">45 - NAAMA</option><option value="AIN-TEMOUCHENT">46 - AIN-TEMOUCHENT</option><option value="GHARDAIA">47 - GHARDAIA</option><option value="RELIZANE">48 - RELIZANE</option>                </select>
              </div>
              <div class="col-sm-3" id="div1">
                  <select name="daira" class="form-control" id="daira">
                  <option value="">-- الدائرة --</option>
                  </select>
              </div>
              <div class="col-sm-3" id="div2">
                  <select name="commune" id="commune" onchange="communeChoisie();" class="form-control">
                  <option value="">-- البلدية --</option>
                  </select>
              </div>

          </div>


          <div class="row">
              <label for="email" class="col-sm-3 control-label">العنوان الكامل </label>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="adr" placeholder="الحي .. مقر السكن" type="text" >
        </div>
          </div>
		  <div class="row">

                            <label for="email" class="col-sm-3 control-label">الحالة اتجاه الخدمة العسكرية </label>

                            <div class="col-md-6 form-group">
                                <input id="email" type="text" class="form-control" placeholder=" مؤهل / تأجيل / إعفاء / لايجند " name="khidma" >
			  </div></div>
                   
		 
<<<<<<< HEAD


		<button type="button" class="btn-info" id="s_moahelat">التـــــــــــــالــــــــــــــي </button>
=======
		    <div class="row">
                            <label for="email" class="col-md-3 control-label">مستوى الدراسة   </label>

                            <div class="col-md-6 form-group">
                                <input id="email" type="text" class="form-control" placeholder="جامعي / ثانوي / معهد / تكوين ... الخ" name="niveau" >
                            </div>
                        </div>
		  <div class="row">
                            <label for="email" class="col-md-3 control-label">الشهادات المتحصل عليها</label>

                            <div class="col-md-6 form-group">
                                <input id="email" type="text" class="form-control" placeholder="الشهادات ،الاعتمادات ...الخ اللتي حصلت عليها" name="chahada" >
                            </div>
                        </div>
		<button type="button" class="btn-info" id="s_khebra">التـــــــــــــالــــــــــــــي </button>
>>>>>>> origin/master
		  
      </div>
      
      
    </div>
  </div>
</div>  
	 	  </section>


         <!--  ...................................................................................................................  -->

<<<<<<< HEAD
         <section id="moahelat" style="display:none">
=======
         <section id="khebra" style="display:none">
>>>>>>> origin/master
             <div class="container-fluid bg-grey">
                 <h2 class="text-center">الشهادات المتحصل عليها </h2>
                 <div class="row">

                     <div class="col-sm-12">

                             <div class="row">


                                     <div class="col-sm-4">
                                         <select name="" id="" class="form-control" >
                                             <option value="">-- المستوى --</option></select>
                                     </div>
                                     <div class="col-sm-4" id="">
                                         <select name="daira" class="form-control" id="daira">
                                             <option value="">-- السنة --</option>
                                         </select>
                                     </div>
                                     <div class="col-sm-4" id="">
                                         <select name="commune" id="commune" onchange="communeChoisie();" class="form-control">
                                             <option value="">-- التخصص --</option>
                                         </select>
                                     </div>

                             </div>
                            

                             <div class="row">

                                 <div class="col-sm-6 form-group">

                                 </div>
                             </div>
                         <textarea class="form-control" id="comments" name="info" placeholder="معلومات أخرى" rows="3"></textarea><br>
                         <div class="col-sm-12 form-group">

                         </div>
<<<<<<< HEAD
                         <button type="button"  class="btn-success" id="s_info">رجــــــــوع</button>
                             <button type="button" class="btn-info" id="s_khebra">التـــــــــــــالــــــــــــــي </button>
=======
                             <button type="button" class="btn-info" id="s_moahelat">التـــــــــــــالــــــــــــــي </button>
>>>>>>> origin/master

                         </div>


                     </div>
                 </div>

         </section>

	 <!--   ..................................................3...................................................................   -->



         <section id="khebra" style="display:none">
             <div class="container-fluid bg-grey">
<<<<<<< HEAD
                 <h2 class="text-center"> الخبرات </h2>
                 <div class="row">

                     <div class="col-sm-12">

                         <div class="row">


                             <label for="email" class="col-sm-3 control-label">مكان العمل</label>

                             <div class="col-md-6 form-group">
                                 <input id="email" type="text" class="form-control" placeholder="" name="khidma" >
                             </div>

                             <div class="row">
                             </div>
                                 <label for="email" class="col-sm-3  control-label">المنصب</label>

                                 <div class="col-md-6 form-group">
                                     <input id="email" type="text" class="form-control" placeholder="" name="khidma" >
                                 </div>

                             <div class="row">
                             </div>

                             <label for="email" class="col-sm-2 control-label">من </label>
                             <div class="col-sm-4 form-group">
                                 <input class="form-control" id="email" name="bidaya" placeholder="تاريخ البداية" type="date" >
                             </div>

                             <label for="email" class="col-sm-2 control-label">إلى</label>
                             <div class="col-sm-4 form-group">
                                 <input class="form-control" id="name" name="nihaya" placeholder="تاريخ النهاية" type="date" >
                             </div>




                         </div>



                         <textarea class="form-control" id="comments" name="info" placeholder="معلومات أخرى" rows="3"></textarea><br>
                         <div class="col-sm-12 form-group">

                         </div>
                         <button type="button"  class="btn-success" id="r_moahilat">رجــــــــوع</button>
                         <button type="button" class="btn-info" id="s_talim">التـــــــــــــالــــــــــــــي </button>
                     </div>


                 </div>
             </div>

         </section>

         <!--   ..................................................4..................................................................   -->

         <!--  ...................................................................................................................  -->

         <section id="talim" style="display:none">
             <div class="container-fluid bg-grey">
                 <h2 class="text-center">اللغات </h2>
=======
                 <h2 class="text-center"> </h2>
>>>>>>> origin/master
                 <div class="row">

                     <div class="col-sm-12">

                         <div class="row">


                             <div class="col-sm-4">
                                 <select name="" id="" class="form-control" >
<<<<<<< HEAD
                                     <option value="">-- اللغة --</option></select>
                             </div>
                             <div class="col-sm-4" id="">
                                 <select name="daira" class="form-control" id="daira">
                                     <option value="">-- القراءة --</option>
=======
                                     <option value="">-- المستوى --</option></select>
                             </div>
                             <div class="col-sm-4" id="">
                                 <select name="daira" class="form-control" id="daira">
                                     <option value="">-- السنة --</option>
>>>>>>> origin/master
                                 </select>
                             </div>
                             <div class="col-sm-4" id="">
                                 <select name="commune" id="commune" onchange="communeChoisie();" class="form-control">
<<<<<<< HEAD
                                     <option value="">-- الكتابة --</option>
=======
                                     <option value="">-- التخصص --</option>
>>>>>>> origin/master
                                 </select>
                             </div>

                         </div>


                         <div class="row">

                             <div class="col-sm-6 form-group">

                             </div>
                         </div>
<<<<<<< HEAD


                         <button type="button"  class="btn btn-success" id="r_khebra">رجــــــــوع</button>
			  <button type="submit"  class="btn btn-success" >معاينة</button>
=======
                         <textarea class="form-control" id="comments" name="info" placeholder="معلومات أخرى" rows="3"></textarea><br>
                         <div class="col-sm-12 form-group">

                         </div>
                         <button type="button" class="btn-info" id="s_moahelat">التـــــــــــــالــــــــــــــي </button>

>>>>>>> origin/master
                     </div>


                 </div>
             </div>

         </section>

<<<<<<< HEAD


     </form>
=======
         <!--   ..................................................4..................................................................   -->

         <section id="moahelat" style="display:none">
			<div class="container-fluid bg-grey">
  <h1 class="text-center">الديبللوم </h1>
				
				<div class="row">
    <div class="col-sm-5">
		<br>
					<h2> قم برفع الديبلوم الخاص بك </h2>
					</div>
		<div class="col-sm-5">
					<span class="glyphicon glyphicon-plus-sign" style="color: #96f37f; font-size: 80px;" ></span>
					</div>
				
				</div>
			
  <div class="row">
    <div class="col-sm-5"><br><br>
		<h2>ماهي الاماكن التي عملت بها مسبقا  </h2>
    </div>
    <div class="col-sm-7">
		<input class="form-control" id="name" name="nom_ch" placeholder="اسم الشركة" type="text" ><br>
		<input class="form-control" id="name" name="wadifa" placeholder="منصب العمل" type="text" ><br>
      <div class="row">
       
          
        
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="bidaya" placeholder="تاريخ البداية" type="date" >
        </div>
		  <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="nihaya" placeholder="تاريخ النهاية" type="date" >
        </div>
        
      </div>
      <textarea class="form-control" id="comments" name="info" placeholder="معلومات أخرى" rows="3"></textarea><br>
      
    </div>
  </div>
</div>  
			  <button type="button"  class="btn btn-success" id="s_info">رجــــــــوع</button>
			  <button type="submit"  class="btn btn-success" >معاينة</button>
			  
	 	  </section>
		 
		 
		  
	</form>	  
>>>>>>> origin/master
		  
  
</div>
	  </section>
</body>
@endsection