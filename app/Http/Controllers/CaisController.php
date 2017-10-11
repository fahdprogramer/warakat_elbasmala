<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Illuminate\Http\Request;
use App\Cais;
use Auth;
class CaisController extends Controller
{
    //




public function cais(Request $request)
    {
$count= DB::table('cais')->count();
        if($request->isMethod('post')){
			
			
			
			$this->validate($request,['name'=>'required','mablaghe_kouli'=>'required','flixy_mobilis'=>'required','flixy_djezy'=>'required','flixy_oridoo'=>'required','ba9i_sondo9'=>'required'],['name.required'=>'من فضلك ،يجب أن تقوم بملئ حقل إسم المسجل .','mablaghe_kouli.required'=>'من فضلك ،يجب أن تقوم بملئ حقل المبلغ الكلي  .','flixy_mobilis.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي موبيليس .','flixy_djezy.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي جيزي .','flixy_oridoo.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي أوريدو .','ba9i_sondo9.required'=>'من فضلك ،يجب أن تقوم بملئ حقل الباقي في الصندوق .',]); 

            $newcais=new Cais();
            $newcais->name=$request->input('name');
			if ($count==0){
			$newcais->day=date("d", strtotime( '-1 days' ) );
			$newcais->month=date('m', strtotime( '-1 days' ) );
			$newcais->année=date('Y', strtotime( '-1 days' ) );
		}else{
            $newcais->day=date('d');
			$newcais->month=date('m');
			$newcais->année=date('Y');
			}
            $newcais->mablaghe_kouli=$request->input('mablaghe_kouli');
            $newcais->flixy_mobilis=$request->input('flixy_mobilis');
            $newcais->flixy_djezy=$request->input('flixy_djezy');
            $newcais->flixy_oridoo=$request->input('flixy_oridoo');
            $newcais->mochtarayat_mobilis=$request->input('mochtarayat_mobilis');
            $newcais->mochtarayat_djezy=$request->input('mochtarayat_djezy');
            $newcais->mochtarayat_oridoo=$request->input('mochtarayat_oridoo');
            $newcais->nombre_carte_mobilis_500=$request->input('nombre_carte_mobilis_500');
            $newcais->nombre_carte_mobilis_200=$request->input('nombre_carte_mobilis_200');
            $newcais->nombre_carte_mobilis_100=$request->input('nombre_carte_mobilis_100');
            $newcais->mochtarayat_carte_mobilis=$request->input('mochtarayat_carte_mobilis');
            $newcais->nom_emprent=$request->input('nom_emprent');
            $newcais->cout_emprent=$request->input('cout_emprent');
            $newcais->ba9i_sondo9=$request->input('ba9i_sondo9');
            $newcais->cout_mochtarayat_mokhtalifa=$request->input('cout_mochtarayat_mokhtalifa');
            $newcais->nom_mochtarayat_mokhtalifa=$request->input('nom_mochtarayat_mokhtalifa');
            $newcais->nom_mawad_lawazim=$request->input('nom_mawad_lawazim');
            $newcais->cout_mawad_lawazim=$request->input('cout_mawad_lawazim');
            $newcais->id_user=Auth::user()->id;         
            $newcais->save();
			$count=1;

        }
	
		if ($count==0){
			return view('first_day');
		}else{
		$first_row=DB::table('cais')->first();
		$last_row=DB::table('cais')->orderBy('id', 'desc')->first();
		$last_month=$last_row->month;
		$last_année=$last_row->année;
		$cais = DB::table('cais')->where([
    ['month', '=', $last_month],
    ['année', '=', $last_année],
])->get();
		 $arr_c=Array('cais'=>$cais);
	$test_last=1;
	if(($last_month==$first_row->month)&&($last_année==$first_row->année)) { $test_last=0; };
         return view('show_cais',$arr_c,['test_next'=>'0','test_last'=>$test_last]);
			};
    }
    
		public function welcome()
		{
			$count= DB::table('cais')->count();
		if ($count==0){
			return view('cais_vide');
		}else{
			return view('welcome');
		};
		}
	
		public function edit_sijil($y,$m,$d)
			{
				return view('chois',['y'=>$y,'m'=>$m,'d'=>$d]);
		}
	
			public function nouveau_sijil($y,$m,$d,Request $request)
			{
                            if($request->isMethod('post')){
                                		
            $this->validate($request,['name'=>'required','mablaghe_kouli'=>'required','flixy_mobilis'=>'required','flixy_djezy'=>'required','flixy_oridoo'=>'required','ba9i_sondo9'=>'required'],['name.required'=>'من فضلك ،يجب أن تقوم بملئ حقل إسم المسجل .','mablaghe_kouli.required'=>'من فضلك ،يجب أن تقوم بملئ حقل المبلغ الكلي  .','flixy_mobilis.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي موبيليس .','flixy_djezy.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي جيزي .','flixy_oridoo.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي أوريدو .','ba9i_sondo9.required'=>'من فضلك ،يجب أن تقوم بملئ حقل الباقي في الصندوق .',]); 
            DB::table('cais')->where([
                ['day', '=', $d],
                ['month', '=', $m],
                ['année', '=', $y],
])->update([
        'name'=>$request->input('name'),
		'mablaghe_kouli'=>$request->input('mablaghe_kouli'),
		'flixy_mobilis'=>$request->input('flixy_mobilis'),
		'flixy_djezy'=>$request->input('flixy_djezy'),
		'flixy_oridoo'=>$request->input('flixy_oridoo'),
		'mochtarayat_mobilis'=>$request->input('mochtarayat_mobilis'),
		'mochtarayat_djezy'=>$request->input('mochtarayat_djezy'),
		'mochtarayat_oridoo'=>$request->input('mochtarayat_oridoo'),
		'nombre_carte_mobilis_500'=>$request->input('nombre_carte_mobilis_500'),
		'nombre_carte_mobilis_200'=>$request->input('nombre_carte_mobilis_200'),
		'nombre_carte_mobilis_100'=>$request->input('nombre_carte_mobilis_100'),
		'mochtarayat_carte_mobilis'=>$request->input('mochtarayat_carte_mobilis'),
		'nom_emprent'=>$request->input('nom_emprent'),
		'cout_emprent'=>$request->input('cout_emprent'),
		'ba9i_sondo9'=>$request->input('ba9i_sondo9'),
		'cout_mochtarayat_mokhtalifa'=>$request->input('cout_mochtarayat_mokhtalifa'),
		'nom_mochtarayat_mokhtalifa'=>$request->input('nom_mochtarayat_mokhtalifa'),
		'nom_mawad_lawazim'=>$request->input('nom_mawad_lawazim'),
		'cout_mawad_lawazim'=>$request->input('cout_mawad_lawazim'),
		'id_user'=>(Auth::user()->id)
        ]);
		$first_row=DB::table('cais')->first();
		$last_row=DB::table('cais')->orderBy('id', 'desc')->first();
		$last_month=$last_row->month;
		$last_année=$last_row->année;
		$cais = DB::table('cais')->where([
    ['month', '=', $last_month],
    ['année', '=', $last_année],
])->get();
		 $arr_c=Array('cais'=>$cais);
	$test_last=1;
	if(($last_month==$first_row->month)&&($last_année==$first_row->année)) { $test_last=0; };
         return view('show_cais',$arr_c,['test_next'=>'0','test_last'=>$test_last]);
	
                            }else{
                                return view('edit_sijil',['y'=>$y,'m'=>$m,'d'=>$d]);
                            }
				
		}
	
	
	
	
	public function show_cais($id)
    {
		if (Auth::user()->role!=1){
			return redirect('/');
		};
		if ($id==1){
		$first_row=DB::table('cais')->first();
			return view('sijil_first_day',['cais'=>$first_row]);
		}else{
		$cais=Cais::find($id);
		 $arr=Array('cais'=>$cais);
		$get_id=DB::table('cais')->whereBetween('id', [1, $id])->whereNotIn('name', ['0'])->orderBy('id', 'desc')->get();
		$i=$get_id[1]->id;
		$cais_d=Cais::find($i);
		 $arr_d=Array('cais_d'=>$cais_d);
		return view('sijil',$arr,$arr_d);
    	}
	}
}
