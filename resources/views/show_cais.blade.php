<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>وراقة البسملة</title>

    <!-- Fonts -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}">




    </script>

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
</head>
<body>


<!-- Container (Services Section) -->
<div class="container-fluid text-center">
  <h2>وراقة البسملة  </h2>
  <h4>شهر : </h4>
  <br>
  <div class="row">
	  @foreach ($cais as $mycais)
	  <a href="/show_cais/{{ $mycais->id }}" >
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>{{ $mycais->day.'/'.$mycais->month.'/'.$mycais->année }}</h4>
      <p>معاينة</p>
		  </div></a>
    @endforeach
  </div>
  <br><br>
  
</div>

</body>
</html>