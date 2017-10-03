@extends('layouts.app')

@section('content')



<div class="title">
    ورّاقة البسملة
    
</div>
<div class="container text-center">
    <div class="row text-center">

        <form action="cais/{{date('y')}}/{{date('m')}}/{{date('d')}}" method="post" >
            {{ csrf_field() }}


        <label for="email" class="col-sm-2 control-label">التاريخ :</label>
        <div class="col-sm-2 form-group">
            {{date("Y/m/d")}}
        </div>
        <label for="email" class="col-sm-2 col-sm-offset-2 control-label">اسم المسجل :<span style="color:red;">*</span></label>
        <div class="col-sm-4 form-group">
            <input class="form-control styleinput" id="name" name="name" placeholder="فراجي عبد الناصر -بن زايد محمد " type="text" >
        </div>

        <table class="table-striped table-hover" style="text-align:center;margin: 20px;" border='3' width="100%" >
            <tr>

                <th >المبلغ الكلي</th>
                <th>

                    <input class="styleinput" id="name" name="mablaghe_kouli" placeholder=" " type="number" min="0" ><span style="color:red;">*</span>

                </th>

            </tr>
        </table>


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

                    <input class="form-group styleinput"  id="name" name="flixy_mobilis" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th>
                    <input class="form-group styleinput"  id="name" name="mochtarayat_mobilis" placeholder=" " type="number" >

                </th>
            </tr>
            <tr>

                <th >جازي</th>
                <th>

                    <input class="styleinput"  id="name" name="flixy_djezy" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th><input class="form-group styleinput"  id="name" name="mochtarayat_djezy" placeholder=" " type="number" ></th>
            </tr>
            <tr>

                <th >اوريدو</th>
                <th>

                    <input class="styleinput"  id="name" name="flixy_oridoo" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>
                <th><input class="form-group styleinput"  id="name" name="mochtarayat_oridoo" placeholder=" " type="number" ></th>
            </tr>
            <tr>
                <th>عدد البطاقات المباعة</th>
                <th>موبيليس</th>
                <th>
                      <input class="styleinput"  id="name" name="nombre_carte_mobilis_500" placeholder="كارت 500" type="number" ><br>
                        <input class="styleinput"  id="name" name="nombre_carte_mobilis_200" placeholder="كارت 200" type="number" ><br>
                        <input class="styleinput"  id="name" name="nombre_carte_mobilis_100" placeholder="كارت 100" type="number" >


                </th>
                <th><input class="form-group styleinput"  id="name" name="mochtarayat_carte_mobilis" placeholder=" " type="number" ></th>
            </tr>


            <tr>

                <th colspan="2">سلفية </th>
                <th>

                    <input class="styleinput"  id="name" name="cout_emprent" placeholder="مقدار السلفية" type="number" >

                </th>
                <th><input class="styleinput"  id="name" name="nom_emprent" placeholder="اسم المستلف " type="text" ></th>
            </tr>




            <tr>

                <th colspan="2">مشتريات مختلفة </th>
                <th>

                    <input class="styleinput"  id="name" name="cout_mochtarayat_mokhtalifa" placeholder=" " type="number" >

                </th>
                <th><input class="styleinput"  id="name" name="nom_mochtarayat_mokhtalifa" placeholder=" نوع المشتريات   " type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">مواد ولوازم </th>
                <th>

                    <input class="styleinput"  id="name" name="cout_mawad_lawazim" placeholder=" " type="number" >

                </th>
                <th><input class="styleinput"  id="name" name="nom_mawad_lawazim" placeholder="  نوع المواد" type="text" ></th>
            </tr>
            <tr>

                <th colspan="2">الباقي في الصندوق</th>
                <th>

                    <input class="styleinput"  id="name" name="ba9i_sondo9" placeholder=" " type="number" ><span style="color:red;">*</span>

                </th>

            </tr>

        </table>

            <button type="submit" class="btn btn-success btn-lg">حفظ السجل</button>

        </form>
    </div>

</div>


@endsection