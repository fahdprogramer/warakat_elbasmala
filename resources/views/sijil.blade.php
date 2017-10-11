@extends('layouts.app')

@section('content')



	@php if(empty($cais->mochtarayat_mobilis))$cais->mochtarayat_mobilis=0;@endphp
	@php if(empty($cais->mochtarayat_djezy))$cais->mochtarayat_djezy=0;@endphp
	@php if(empty($cais->mochtarayat_oridoo))$cais->mochtarayat_oridoo=0;@endphp
	@php if(empty($cais->nombre_carte_mobilis_500))$cais->nombre_carte_mobilis_500=0;@endphp
	@php if(empty($cais->nombre_carte_mobilis_200))$cais->nombre_carte_mobilis_200=0;@endphp
	@php if(empty($cais->nombre_carte_mobilis_100))$cais->nombre_carte_mobilis_100=0;@endphp
	@php if(empty($cais->mochtarayat_carte_mobilis))$cais->mochtarayat_carte_mobilis=0;@endphp
	@php if(empty($cais->nom_emprent))$cais->nom_emprent='لم يستلف أحد';@endphp
	@php if(empty($cais->cout_emprent))$cais->cout_emprent=0;@endphp
	@php if(empty($cais->cout_mochtarayat_mokhtalifa))$cais->cout_mochtarayat_mokhtalifa=0;@endphp
	@php if(empty($cais->nom_mochtarayat_mokhtalifa))$cais->nom_mochtarayat_mokhtalifa='لا توجد مشتريات';@endphp
	@php if(empty($cais->nom_mawad_lawazim))$cais->nom_mawad_lawazim='لامواد ولا لوازم';@endphp
	@php if(empty($cais->cout_mawad_lawazim))$cais->cout_mawad_lawazim=0;@endphp
        <div class="text-left" style="padding-left: 20px; ">
            <a href="/edit_day/{{$cais->id}}" class="btn btn-danger btn-lg" >
      <span class="glyphicon glyphicon-wrench" style="font-size:25px;"></span> 
    </a>
            </div>
<div class="container text-center">
    
    <div class="row text-center">

        <form action="cais" method="post" >
            {{ csrf_field() }}


        <label for="email" class="col-sm-2 control-label">سجل يوم  :</label>
        <div class="col-sm-2 form-group">
           {{ $cais->année.'/'.$cais->month.'/'.$cais->day }}
        </div>
        <label for="email" class="col-sm-2 col-sm-offset-2 control-label">اسم المسجل :</label>
        <div class="col-sm-4 form-group">
            {{ $cais->name }}
        </div>

        <table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>

                <th >المبلغ الكلي</th>
                <th>

                    {{ $cais->mablaghe_kouli }},00 دج

                </th>

            </tr>
        </table>

فليكسي :
        <table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='2' width="100%" >

            <tr>
                <th>شريحة </th>
                <th >المبلغ الموجود في الهاتف</th>
				<th >فليكسي جديد</th>
                <th>الربح</th>
            </tr>
            <tr>
                
                <th >موبيليس</th>
                <th >

                    
{{ $cais->flixy_mobilis }},00 دج
                </th>
				<th >

              {{ $cais->mochtarayat_mobilis }},00 دج

                </th>
                <th>
                  {{ ((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis)) }},00 دج

                </th>
            </tr>
            <tr>

                <th >جازي</th>
				<th >{{ $cais->flixy_djezy }},00 دج
				</th>
                <th>

               {{ $cais->mochtarayat_djezy }},00 دج

                </th>
                <th>{{ ((($cais->mochtarayat_djezy)+($cais_d->flixy_djezy))-($cais->flixy_djezy)) }},00 دج</th>
            </tr>
            <tr>

                <th >اوريدو</th>
				<th >{{ $cais->flixy_oridoo }},00 دج</th>
                <th>
{{ $cais->mochtarayat_oridoo }},00 دج
                </th>
                <th>{{ ((($cais->mochtarayat_oridoo)+($cais_d->flixy_oridoo))-($cais->flixy_oridoo)) }},00 دج</th>
            </tr>
			</table>
			كارت :
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>
                <th rowspan="3">عدد بطاقات موبيليس المباعة</th>
                <th>كارت 500 دج</th>
				<th>{{ $cais->mochtarayat_carte_mobilis+($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500) }}</th>
                <th rowspan="3">المضافة</th>
				
				
				<th>{{$cais->mochtarayat_carte_mobilis}}</th>
				<th rowspan="3">عدد البطاقات المتبقية 
                </th>
				
				<th>كارت 500 دج</th>
				<th>{{ $cais->nombre_carte_mobilis_500 }} </th>
                <th rowspan="3">الربح </th>
				<th rowspan="3">{{ (((($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500))*500)+((($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200))*200)+((($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100))*100))}},00 دج</th>
            </tr>
			<tr>
				<th>كارت 200 دج</th>
				<th>{{ ($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200) }}</th>
				<th>0</th>
				
				<th>كارت 200 دج</th>
				<th>{{ $cais->nombre_carte_mobilis_200 }}</th>
				
				</tr>
				<tr>
				<th>كارت 100 دج</th>
					<th>{{ ($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100) }}</th>
					<th>0</th>
					<th>كارت 100 دج</th>
				<th>{{ $cais->nombre_carte_mobilis_100 }}</th>
				
				
				</tr>
			</table>
			مجموع الربح لفليكسي + كارت :
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
	<tr>

                <th >{{ ((((($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500))*500)+((($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200))*200)+((($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100))*100))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis))+((($cais->mochtarayat_djezy)+($cais_d->flixy_djezy))-($cais->flixy_djezy))+((($cais->mochtarayat_oridoo)+($cais_d->flixy_oridoo))-($cais->flixy_oridoo)))}},00 دج</th>
                

            </tr>
			</table>
			المدخول الصافي :
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
	<tr>

                <th >{{ ($cais->mablaghe_kouli)-(((((($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500))*500)+((($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200))*200)+((($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100))*100))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis))+((($cais->mochtarayat_djezy)+($cais_d->flixy_djezy))-($cais->flixy_djezy))+((($cais->mochtarayat_oridoo)+($cais_d->flixy_oridoo))-($cais->flixy_oridoo)))+($cais_d->ba9i_sondo9)) }},00 دج</th>
                

            </tr>
			</table>
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>

                <th >سلفية </th>
                <th>

                    {{ $cais->cout_emprent }},00 دج

                </th>
                <th>{{ $cais->nom_emprent }}</th>
            </tr>




            <tr>

                <th>مشتريات مختلفة </th>
                <th>

                    {{ $cais->cout_mochtarayat_mokhtalifa }},00 دج
                </th>
                <th>{{ $cais->nom_mochtarayat_mokhtalifa }}</th>
            </tr>
            <tr>

                <th >مواد ولوازم </th>
                <th>

{{ $cais->cout_mawad_lawazim }},00 دج

                </th>
                <th>{{ $cais->nom_mawad_lawazim }}</th>
            </tr>
</table>
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
	
	<tr>

                <th>الباقي في الصندوق</th>
                <th>

                    {{ $cais->ba9i_sondo9 }} ,00 دج
                </th>

            </tr>

        </table>


        </form>
    </div>

</div>


@endsection