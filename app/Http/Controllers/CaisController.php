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

        if($request->isMethod('post')){
			
			
			
			$this->validate($request,['name'=>'required','mablaghe_kouli'=>'required','flixy_mobilis'=>'required','flixy_djezy'=>'required','flixy_oridoo'=>'required','ba9i_sondo9'=>'required'],['name.required'=>'من فضلك ،يجب أن تقوم بملئ حقل إسم المسجل .','mablaghe_kouli.required'=>'من فضلك ،يجب أن تقوم بملئ حقل المبلغ الكلي  .','flixy_mobilis.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي موبيليس .','flixy_djezy.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي جيزي .','flixy_oridoo.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكمي أوريدو .','ba9i_sondo9.required'=>'من فضلك ،يجب أن تقوم بملئ حقل الباقي في الصندوق .',]); 

            $newcais=new Cais();
            $newcais->name=$request->input('name');
            $newcais->day=date('d');
			$newcais->month=date('m');
			$newcais->année=date('Y');
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

        }
	$count= DB::table('cais')->count();
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
	
	public function chois()
		{
			return view('chois');
		}
	
	
	
	public function show_cais($id)
    {
		$cais=Cais::find($id);
		 $arr=Array('cais'=>$cais);
		$i=$id-1;
		$cais_d=Cais::find($i);
		 $arr_d=Array('cais_d'=>$cais_d);
		return view('sijil',$arr,$arr_d);
    }
}
