@extends('layouts.app')

@section('content')
<body id="page_principale">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div width="1024" height="720" class="item active">
      <img class="hidden-xs" src="{{ asset('images/01.jpg') }}" >
      <img class="visible-xs-block" src="{{ asset('images/01.jpg') }}" style="height: 394px;" >
      <div class="carousel-caption">
        <div class="hidden-xs">
        <h3> هل تبحث عن عمل !</h3>
        <p>يمكنك الحصول على عمل بقيامك بإنشاء سيرة ذاتية خاصة بك وملئها بجميع المهن والاعمال اللتي يمكنك القيام بها لايجاد اشخاص يحتاجون الى عامل بمواصفاتك وتكسب الكثير من الاموال</p>
        </div>
        <div class="visible-xs-block">
        <h3 style="font-size: 15px"> هل تبحث عن عمل !</h3>
        <p style="font-size: 12px">يمكنك الحصول على عمل بقيامك بإنشاء سيرة ذاتية خاصة بك وملئها بجميع المهن والاعمال اللتي يمكنك القيام بها لايجاد اشخاص يحتاجون الى عامل بمواصفاتك وتكسب الكثير من الاموال</p>
        </div>
          @if (Auth::guest())
          <div class="visible-lg-block">
            <a href="{{ route('register') }}">  <button type="button"  class="btn_f btn-primary" >قم بالتسجيل</button>	</a>
            <a href="{{ route('login') }}"><button type="button"  class="btn_f btn-success" >تسجيل الدخول</button></a>
          </div>
        @endif
      </div>
    </div>

    <div class="item">
      <img src="images/02.jpg" class="hidden-xs"  >
      <img src="images/02.jpg" class="visible-xs-block" style="height: 394px;"  >
      <div class="carousel-caption">
        <div class="hidden-xs">
          <h3>هل تبحث عن عمال !</h3>
          <p>تستطيع وبكل سهولة اايجادهم حسب احتياجاتك وعلى حسب سيريهم الذاتية ومستواياتهم واختيار العمال المناسبين لانجاز متطلباتك بكل ارياحيه</p>
        </div>
        <div class="visible-xs-block">
        <h3 style="font-size: 14px" >هل تبحث عن عمال !</h3>
        <p style="font-size: 11px" >تستطيع وبكل سهولة اايجادهم حسب احتياجاتك وعلى حسب سيريهم الذاتية ومستواياتهم واختيار العمال المناسبين لانجاز متطلباتك بكل ارياحيه</p>
        </div>
		  @if (Auth::guest())
            <div class="visible-lg-block">
		  <a href="{{ route('register') }}">  <button type="button"  class="btn_f btn-primary" >قم بالتسجيل</button>	</a>
		  <a href="{{ route('login') }}"><button type="button"  class="btn_f btn-success" >تسجيل الدخول</button></a>
            </div>
		  @endif
      </div>
		 
    </div>

    <div class="item">
      <img src="images/03.jpg" class="hidden-xs" >
      <img src="images/03.jpg" class="visible-xs-block" style="height: 394px;" >
      <div class="carousel-caption">
        <div class="hidden-xs">
        <h3>هل تريد العمل مع اشخاص ناجحين</h3>
        <p>إذا كنت ترغب في ذلك فيمكنك البحث عن شركاء مهنهم تتوافق مع سيرتك الذاتية للعمل الجيد والربح الوفير وتوسعت نشاطاتكم الى ابعد ما يمكن</p>
        </div>
        <div class="visible-xs-block">
        <h3 style="font-size: 15px">هل تريد العمل مع اشخاص ناجحين</h3>
        <p style="font-size: 12px">إذا كنت ترغب في ذلك فيمكنك البحث عن شركاء مهنهم تتوافق مع سيرتك الذاتية للعمل الجيد والربح الوفير وتوسعت نشاطاتكم الى ابعد ما يمكن</p>
        </div>
          @if (Auth::guest())
          <div class="visible-lg-block">
            <a href="{{ route('register') }}">  <button type="button"  class="btn_f btn-primary" >قم بالتسجيل</button>	</a>
            <a href="{{ route('login') }}"><button type="button"  class="btn_f btn-success" >تسجيل الدخول</button></a>
          </div>
        @endif
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body> 
	  

	  @endsection
	  




