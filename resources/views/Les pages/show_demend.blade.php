
@extends('layouts.app')

@section('content')
<div class="well" text-center>
<h1 style="font-family:monospace;"><b>استمارة توظيف</b></h1>
	<div class="row">
	<div class="col-sm-6 col-sm-push-3">
<hr class="hr1">
	</div>
	</div>
	<div class="row1 row ">
		<div class="col-sm-4">
<h2>الاسم الكامل :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->nom.' '.$demend->prenom }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>

	<div class="col-sm-4">
<h2>المهنة المطلوبة :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->wadifa }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>
		
		<div class="col-sm-4">
<h2>الأجر المدفوع :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->argent }}<b>دج</b></h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>

	<div class="col-sm-4">
<h2>مكان العمل :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">ولاية : {{ $demend->wilaya }} - بلدية : {{ $demend->baladia }} - دائرة :  {{ $demend->daira }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>
		
		<div class="col-sm-4">
<h2>العنوان الكامل :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->adr }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>

	<div class="col-sm-4">
<h2>فترة العمل :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->fatra }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>
		
		<div class="col-sm-4">
<h2>متطلبات العمل :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->motatalabat }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>

	<div class="col-sm-4">
<h2>عدد العمال المطلوبين :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->nombre_emp }}</h2>
 
		</div>
		
	
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>
		
		<div class="col-sm-4">
<h2>رقم الهاتف :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->num_t }}</h2>
 
		</div>
		
		
	<div class="col-sm-10 col-sm-push-1">
<hr class="hr2">
	</div>
		
		<div class="col-sm-4">
<h2>معلومات إضافية :</h2>
 
		</div>
		<div class="col-sm-8">
<h2 style="color:blue;">{{ $demend->info }} </h2>
 
		</div>

	</div>



</div>








@endsection