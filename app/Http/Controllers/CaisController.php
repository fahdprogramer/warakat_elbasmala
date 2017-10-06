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




public function cais($y,$m,$d,Request $request)
    {

        if($request->isMethod('post')){
			
			
			
			$this->validate($request,['name'=>'required','mablaghe_kouli'=>'required','flixy_mobilis'=>'required','flixy_djezy'=>'required','flixy_oridoo'=>'required','ba9i_sondo9'=>'required'],['name.required'=>'من فضلك ،يجب أن تقوم بملئ حقل إسم المسجل .','mablaghe_kouli.required'=>'من فضلك ،يجب أن تقوم بملئ حقل المبلغ الكلي  .','flixy_mobilis.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي موبيليس .','flixy_djezy.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكسي جيزي .','flixy_oridoo.required'=>'من فضلك ،يجب أن تقوم بملئ حقل فلكمي أوريدو .','ba9i_sondo9.required'=>'من فضلك ،يجب أن تقوم بملئ حقل الباقي في الصندوق .',]); 

            $newcais=new Cais();
            $newcais->name=$request->input('name');
            $newcais->day=$d;
			$newcais->month=$m;
			$newcais->année=$y;
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
	
		$cais = DB::table('cais')->orderBy('id', 'desc')->get();
		 $arr_c=Array('cais'=>$cais);	
         return view('show_cais',$arr_c);
    }
	public function cais_get()
    {
        return view('welcome');
    }
	
	public function show()
    {
		
		$cais = DB::table('cais')->orderBy('id', 'desc')->get();
		 $arr_c=Array('cais'=>$cais);		

        return view('show_cais',$arr_c);
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
