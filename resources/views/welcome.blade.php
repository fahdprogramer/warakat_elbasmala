@extends('layouts.app')

@section('content')




<div class="container text-center" style="padding:25px;">
    <div class="row text-center">

        <form action="cais" method="post" >
            {{ csrf_field() }}


        <label for="email" class="col-sm-2 control-label">التاريخ :</label>
        <div class="col-sm-2 form-group">
            {{date("Y/m/d")}}
        </div>
        <label for="email" class="col-sm-2 col-sm-offset-2 control-label">اسم المسجل :<span style="color:red;">*</span></label>
        <div class="col-sm-4 form-group">
            <input class="form-control styleinput" id="name" name="name" value="{{ old('name') }}" placeholder="فراجي عبد الناصر -بن زايد محمد " type="text" >
        </div>

        <table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>

                <th >المبلغ الكلي</th>
                <th>

                    <input class="styleinput" id="name" name="mablaghe_kouli" value="{{ old('mablaghe_kouli') }}" placeholder=" " type="number" min="0" ><span style="color:red;">*</span>

                </th>

            </tr>
        </table>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='2' width="100%" >

            <tr>
                <th colspan="2">البيان</th>
                <th >المبلغ</th>
                <th>المشتريات</th>
            </tr>
            <tr>
                <th rowspan="3">فلكسي</th>
                <th >موبيليس</th>
                <th >

                    <input class="form-group styleinput"  id="name" name="flixy_mobilis" value="{{ old('flixy_mobilis') }}" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th>
                    <input value="{{ old('mochtarayat_mobilis') }}" class="form-group styleinput"  id="name" name="mochtarayat_mobilis" placeholder=" " type="number" >

                </th>
            </tr>
            <tr>

                <th >جازي</th>
                <th>

                    <input value="{{ old('flixy_djezy') }}" class="styleinput"  id="name" name="flixy_djezy" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th><input value="{{ old('mochtarayat_djezy') }}" class="form-group styleinput"  id="name" name="mochtarayat_djezy" placeholder=" " type="number" ></th>
            </tr>
            <tr>

                <th >اوريدو</th>
                <th>

                    <input value="{{ old('flixy_oridoo') }}" class="styleinput"  id="name" name="flixy_oridoo" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th><input value="{{ old('mochtarayat_oridoo') }}" class="form-group styleinput"  id="name" name="mochtarayat_oridoo" placeholder=" " type="number" ></th>
            </tr>
            <tr>
                <th>عدد البطاقات المباعة</th>
                <th>موبيليس</th>
                <th>
                      <input value="{{ old('nombre_carte_mobilis_500') }}" class="styleinput"  id="name" name="nombre_carte_mobilis_500" placeholder="كارت 500" type="number" ><br>
                        <input value="{{ old('nombre_carte_mobilis_200') }}" class="styleinput"  id="name" name="nombre_carte_mobilis_200" placeholder="كارت 200" type="number" ><br>
                        <input value="{{ old('nombre_carte_mobilis_100') }}" class="styleinput"  id="name" name="nombre_carte_mobilis_100" placeholder="كارت 100" type="number" >


                </th>
                <th><input value="{{ old('mochtarayat_carte_mobilis') }}" class="form-group styleinput"  id="name" name="mochtarayat_carte_mobilis" placeholder=" " type="number" ></th>
            </tr>


            <tr>

                <th colspan="2">سلفية </th>
                <th>

                    <input value="{{ old('cout_emprent') }}" class="styleinput"  id="name" name="cout_emprent" placeholder="مقدار السلفية" type="number" >
                </th>
				
                <th><input value="{{ old('nom_emprent') }}" class="styleinput"  id="name" name="nom_emprent" placeholder="اسم المستلف " type="text" ></th>
            </tr>




            <tr>

                <th colspan="2">مشتريات مختلفة </th>
                <th>

                    <input value="{{ old('cout_mochtarayat_mokhtalifa') }}" class="styleinput"  id="name" name="cout_mochtarayat_mokhtalifa" placeholder=" " type="number" >

                </th>
                <th><input value="{{ old('nom_mochtarayat_mokhtalifa') }}" class="styleinput"  id="name" name="nom_mochtarayat_mokhtalifa" placeholder=" نوع المشتريات   " type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">مواد ولوازم </th>
                <th>

                    <input value="{{ old('cout_mawad_lawazim') }}" class="styleinput"  id="name" name="cout_mawad_lawazim" placeholder=" " type="number" >

                </th>
                <th><input value="{{ old('nom_mawad_lawazim') }}" class="styleinput"  id="name" name="nom_mawad_lawazim" placeholder="  نوع المواد" type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">الباقي في الصندوق</th>
                <th>

                    <input value="{{ old('ba9i_sondo9') }}" class="styleinput"  id="name" name="ba9i_sondo9" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>

            </tr>

        </table>

            <button type="submit" class="btn btn-success btn-lg">حفظ السجل</button>

        </form>
    </div>

</div>


@endsection