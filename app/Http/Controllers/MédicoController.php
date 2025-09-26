<?php

namespace App\Http\Controllers;

use App\Models\Médico;
use Illuminate\Http\Request;

class MédicoController extends Controller
{
    public function index(){
        $médicos = Médico::all();
        return response()->json($médicos, 200);
    }

    public function store(Request $request){
        $médico = Médico::create([
            'nome_completo'=>$request->nome_completo,
            'especialidade'=>$request->especialidade,
            'data_nascimento'=>$request->data_nascimento,
            'registro_profissional'=>$request->registro_profissional,
            'cpf'=>$request->cpf,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'horario'=>$request->horario
        ]);
        return response()->json($médico);
    }

    public function show($id)
    {
        $médico = Médico::find($id);

        if (!$médico) {
        return response()->json(['mensagem' => 'Médico não encontrado'], 404);
        }

        return response()->json($médico);
    }

    public function update(Request $request, $id){
        $médicos = Médico::find($id);
         if (!$médicos) {
            return response()->json('Médico não encontrado');
         }
            if (isset($request->nome_completo)){
             $médicos -> nome_completo = $request->nome_completo;
            };
        
            if (isset($request->data_nascimento)){
             $médicos -> data_nascimento = $request->data_nascimento;
            };
        
            if (isset($request->especialidade)){
             $médicos -> especialidade = $request->especialidade;
            };
        
            if (isset($request->registro_profissional)){
             $médicos -> registro_profissional = $request-> registro_profissional;
            };
        
            if (isset($request->cpf)){
             $médicos -> cpf = $request->cpf;
            };
        
            if (isset($request->email)){
             $médicos -> email = $request->email;
            };

            if (isset($request->telefone)){
             $médicos -> telefone = $request->telefone;
            };

            if (isset($request->horario)){
             $médicos -> horario = $request-> horario;
            };

            
        $médicos->update();
        return response()->json($médicos);
    }

    public function delete($id){
        $médicos = Médico::find($id);
        if (!$médicos) {
            return response()->json('Médico não encontrado');
        }
    }
    }
