<?php

namespace App\Http\Controllers;

use App\Models\textos;
use Illuminate\Http\Request;

class textosController extends Controller
{
    private $textosM;

    public function __construct(
        textos $textosModel
    )
    {
        $this->textosM = $textosModel;
    }

    public function index(){
        $textos = $this->textosM->all()->sortByDesc('id');

        return view('front', compact('textos'));
    }

    public function salvar(Request $request){
        $input = $request->all();

        $texto = $this->textosM->fill($input);

        //dd($texto);

        $texto->save();

        if ($texto->save()) {
            return redirect()->route('/')->with('Sucesso', 'Conteúdo criado com sucesso!');
        } else {
            return redirect()->route('textos.atualizar')->with('Erro', 'Deu ruim, tenta outra vez.');
        }
    }
}
