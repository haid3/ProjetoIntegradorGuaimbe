<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Transparencia;
use Excel;

class TransparenciaController extends Controller
{
    
    private $transparenciaModel;
   
 
    public function __construct(Transparencia $transparenciaModel)
    {
        $this->transparenciaModel = $transparenciaModel;
    }

    /**
     * @return mixed
     */
    public function index(Request $request)
    {   
        $transparencias = $this->transparenciaModel->all();
        return view('admin.transparencia.index',compact('transparencias'));
    }

    public function create()
    {

    }

    public function importCsv(Request $request) {
        
        Excel::load($request->excel, function($reader) {
            $results = $reader->all();
            foreach($results as $r){
                $transparencia = new Transparencia();
                $transparencia->id_rec_arrec_detalhe = (string)$r->id_rec_arrec_detalhe;
                $transparencia->ano_exercicio = (string)$r->ano_exercicio;
                $transparencia->ds_municipio = (string)$r->ds_municipio;
                $transparencia->ds_orgao = (string)$r->ds_orgao;
                $transparencia->mes_referencia = (string)$r->mes_referencia;
                $transparencia->mes_ref_extenso =  (string)$r->mes_ref_extenso;
                $transparencia->ds_poder = (string)$r->ds_poder;
                $transparencia->ds_fonte_recurso = (string)$r->ds_fonte_recurso;
                $transparencia->ds_cd_aplicacao_fixo = (string)$r->ds_cd_aplicacao_fixo;
                $transparencia->ds_cd_aplicacao_variavel = (string)$r->ds_cd_aplicacao_variavel;
                $transparencia->ds_categoria = (string)$r->ds_categoria;
                $transparencia->ds_subcategoria = (string)$r->ds_subcategoria;
                $transparencia->ds_rubrica = (string)$r->ds_rubrica;
                $transparencia->ds_alinea = (string)$r->ds_alinea;
                $transparencia->ds_subalinea = (string)$r->ds_subalinea;
                $transparencia->vl_arrecadacao = (string)$r->vl_arrecadacao;
                $transparencia->save();

            }
        }); 
        
    
        $request->session()->flash('class', 'alert alert-success alert-dismissible');
        $request->session()->flash('msg', "Importação concluída!");
        
    
        return redirect()->back();
        
    }

}
