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



<!-- Container (Services Section) -->
<div class="container-fluid text-center">
  <h2>وراقة البسملة  </h2>
  <h4> </h4>
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
						

	<ul class="pager">
  <li ><a href="/last_month/{{$mycais->month}}/{{$mycais->année}}">الشهر السابق</a></li>
		
  <li ><a href="/next_month/{{$mycais->month}}/{{$mycais->année }}">الشهر الموالي </a></li>
</ul>
  
</div>
@endsection