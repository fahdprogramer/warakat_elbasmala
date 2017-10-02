<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>وراقة البسملة</title>

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}">

    </script>

    <!-- Styles -->
    <style>
        @font-face{
            font-family:GretaTextArabicBold;
            src:url(../fonts/GretaTextArabicBold.ttf);
            font-style:normal;

        }
        @font-face{
            font-family:dthuluth2;
            src:url(../fonts/dthuluth2.ttf);
            font-style:normal;

        }
        html, body {
            background-color: #fff;
            color:black;
            font-family:GretaTextArabicBold;
            font-size: 25px;
            padding-bottom: 50px;


        }
        input{
            border-radius: 20px;
            margin: 10px;
            text-align: center;

        }
        th{
            text-align: center;
        }


        .title {
            font-size: 60px;
            text-align: center;

        }
        .bg1{
            background-color: #f9f9f9;
        }



    </style>
</head>
<body>


<div class="title">
    ورّاقة البسملة
    
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
				<th >{{ $cais->flixy_djezy }},00 دج</th>
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
                <th>{{ ((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis)) }},00 دج</th>
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

                <th >{{ ((((($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500))*500)+((($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200))*200)+((($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100))*100))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis))+((($cais->mochtarayat_djezy)+($cais_d->flixy_djezy))-($cais->flixy_djezy))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis)))}},00 دج</th>
                

            </tr>
			</table>
			المدخول الصافي :
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
	<tr>

                <th >{{ ($cais->mablaghe_kouli)-(((((($cais_d->nombre_carte_mobilis_500)-($cais->nombre_carte_mobilis_500))*500)+((($cais_d->nombre_carte_mobilis_200)-($cais->nombre_carte_mobilis_200))*200)+((($cais_d->nombre_carte_mobilis_100)-($cais->nombre_carte_mobilis_100))*100))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis))+((($cais->mochtarayat_djezy)+($cais_d->flixy_djezy))-($cais->flixy_djezy))+((($cais->mochtarayat_mobilis)+($cais_d->flixy_mobilis))-($cais->flixy_mobilis)))+($cais_d->ba9i_sondo9)) }},00 دج</th>
                

            </tr>
			</table>
<table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>

                <th >سلفية </th>
                <th>

                    {{ $cais->flixy_oridoo }},00 دج

                </th>
                <th><input  id="name" name="nom_emprent" placeholder="اسم المستلف " type="text" ></th>
            </tr>




            <tr>

                <th colspan="2">مشتريات مختلفة </th>
                <th>

                    <input  id="name" name="cout_mochtarayat_mokhtalifa" placeholder=" " type="number" >

                </th>
                <th><input  id="name" name="nom_mochtarayat_mokhtalifa" placeholder=" نوع المشتريات   " type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">مواد ولوازم </th>
                <th>

                    <input  id="name" name="cout_mawad_lawazim" placeholder=" " type="number" >

                </th>
                <th><input  id="name" name="nom_mawad_lawazim" placeholder="  نوع المواد" type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">الباقي في الصندوق</th>
                <th>

                    <input  id="name" name="ba9i_sondo9" placeholder=" " type="number" >

                </th>

            </tr>

        </table>

            <button type="submit" class="btn btn-success btn-lg">حفظ السجل</button>

        </form>
    </div>

</div>

</body>
</html>
