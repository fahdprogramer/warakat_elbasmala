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
<ul class="pager"><div class="row">
	<div class="col-sm-4 text-danger" >
	@if($test_last!=0)
  <li ><a href="/last_month/{{$cais[0]->month}}/{{$cais[0]->année}}"><span class="glyphicon glyphicon glyphicon-arrow-right" aria-hidden="true"></span>    الشهر السابق</a></li>
     @endif
	</div>
	<div class="col-sm-4 text-success" >
	<h1> {{$m.' '.$cais[0]->année}} </h1>
	</div>
	<div class="col-sm-4 text-danger" >
	@if($test_next!=0)
  <li ><a href="/next_month/{{$cais[0]->month}}/{{$cais[0]->année }}">الشهر التالي <span class="glyphicon glyphicon glyphicon-arrow-left" aria-hidden="true"></span> </a></li>
	@endif
	</div></div>
</ul>
<!-- Container (Services Section) -->
<div class="container-fluid text-center">

  
  <br>
  <div class="row">
	  @foreach ($cais as $mycais)
	  @if($mycais->name=='0')
	  <a href="/show_cais/{{ $mycais->id }}"  >
    <div class="col-sm-4 text-danger" style="padding-bottom: 70px;">
      <span class="glyphicon glyphicon-leaf logo-small" style="font-size:50px;"></span>
      <h2>{{ $mycais->année.'/'.$mycais->month.'/'.$mycais->day }}</h2>
   
		  </div></a>
	  @else
	  <a href="/show_cais/{{ $mycais->id }}"  >
    <div class="col-sm-4 text-success" style="padding-bottom: 70px;">
      <span class="glyphicon glyphicon-leaf logo-small" style="font-size:60px;"></span>
      <h2>{{ $mycais->année.'/'.$mycais->month.'/'.$mycais->day }}</h2>
     
		  </div></a>
	  @endif
    @endforeach
  </div>
  <br><br>
						


  
</div>
@endsection