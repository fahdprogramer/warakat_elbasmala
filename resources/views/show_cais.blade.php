@extends('layouts.app')

@section('content')


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
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>

@php
if (($cais[0]->month)==1){$m='جانفي';};
if (($cais[0]->month)==2){$m='فيفري';};
if (($cais[0]->month)==3){$m='مارس';};
if (($cais[0]->month)==4){$m='أفريل';};
if (($cais[0]->month)==5){$m='ماي';};
if (($cais[0]->month)==6){$m='جوان';};
if (($cais[0]->month)==7){$m='جويلية';};
if (($cais[0]->month)==8){$m='أوت';};
if (($cais[0]->month)==9){$m='سبتمبر';};
if (($cais[0]->month)==10){$m='أكتوبر';};
if (($cais[0]->month)==11){$m='نوفمبر';};
if (($cais[0]->month)==12){$m='ديسمبر';};
@endphp
<ul class="pager">
	@if($test_last!=0)
  <li ><a href="/last_month/{{$cais[0]->month}}/{{$cais[0]->année}}">الشهر السابق</a></li>
     @endif
	@if($test_next!=0)
  <li ><a href="/next_month/{{$cais[0]->month}}/{{$cais[0]->année }}">الشهر الموالي </a></li>
	@endif
</ul>
<!-- Container (Services Section) -->
<div class="container-fluid text-center">

  <h4> {{$m.' '.$cais[0]->année}} </h4>
  <br>
  <div class="row">
	  @foreach ($cais as $mycais)
	  <a href="/show_cais/{{ $mycais->id }}" >
    <div class="col-sm-4" style="padding-bottom: 20px;">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>{{ $mycais->day.'/'.$mycais->month.'/'.$mycais->année }}</h4>
      <p>معاينة</p>
		  </div></a>
    @endforeach
  </div>
  <br><br>
						


  
</div>
@endsection