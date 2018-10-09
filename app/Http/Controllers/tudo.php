<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vagas;


class tudo extends Controller
{
    //

    function index() {
        return view('index');
    }

    function descrever_vaga() {
        $vagas = vagas::all();
        return view('descrever_vaga');
    }

    function ofertas() {
        $vagas = vagas::all();
        return view('ofertas')->with('vagas', $vagas);
    }

    function vaga($vagaId) {
        $vaga = vagas::where('id', $vagaId)->first()->toArray();
        $vaga['temp'] = false;
        if(empty($vaga['nota']) || $vaga['nota'] == 0){
            $salarioMedio = 2000;
            $vaga['nota'] = 8;
            if($vaga['remuneracao'] > $salarioMedio) {

                $pontosAMenos = floor(($vaga['remuneracao'] - $salarioMedio) / 1000);
            }else{
                $pontosAMenos = 0;
            }
            $vaga['nota'] = intval($vaga['nota'] - $pontosAMenos);
        }

        if(intval($vaga['nota']) < 0) {
            $vaga['nota'] = 0;
        }



        return view('vaga')->with('vaga', $vaga);
    }

    function vagaTemp(Request $request) {



        $vaga = [];
        $vaga['titulo'] = $request->input('titulo');
        $vaga['tipo'] = $request->input('tipo');
        $vaga['remuneracao'] = $request->input('remuneracao');
        $vaga['endereco'] = $request->input('endereco');
        $vaga['local'] = $request->input('local');
        $vaga['descricao'] = $request->input('descricao');
        $vaga['nota'] = $request->input('nota');
        $vaga['empresa'] = $request->input('empresa');
        $vaga['contato'] = $request->input('contato');
        $vaga['temp'] = true;

        if(empty($vaga['nota']) || $vaga['nota'] == 0){
            $salarioMedio = 2000;
            $vaga['nota'] = 8;
            if($vaga['remuneracao'] > $salarioMedio) {

                $pontosAMenos = floor(($vaga['remuneracao'] - $salarioMedio) / 1000);
            }else{
                $pontosAMenos = 0;
            }
            $vaga['nota'] = intval($vaga['nota'] - $pontosAMenos);
        }

        if(intval($vaga['nota']) < 0) {
            $vaga['nota'] = 0;
        }



        return view('vaga')->with('vaga', $vaga);
    }

    function vagaTempGET(Request $request) {


        if(empty($request->all('tipo')) || 
        empty($request->input('salario'))) {
            return view('descrever_vaga');
        }


        $vaga = [];
        $vaga['titulo'] = $request['tipo'];
        $vaga['tipo'] = $request['tipo'];
        $vaga['remuneracao'] = $request['salario'];
        $vaga['endereco'] = 'Nao encontrado';
        $vaga['local'] = 'Nao encontrado';
        $vaga['descricao'] = $request['descricao'];
        $vaga['nota'] = 7;
        $vaga['empresa'] = 'Nao encontrado';
        $vaga['contato'] = 'Nao encontrado';
        $vaga['temp'] = true;

        if(empty($vaga['nota']) || $vaga['nota'] == 0){
            $salarioMedio = 2000;
            $vaga['nota'] = 8;
            if($vaga['remuneracao'] > $salarioMedio) {

                $pontosAMenos = floor(($vaga['remuneracao'] - $salarioMedio) / 1000);
            }else{
                $pontosAMenos = 0;
            }
            $vaga['nota'] = intval($vaga['nota'] - $pontosAMenos);
        }

        if(intval($vaga['nota']) < 0) {
            $vaga['nota'] = 0;
        }



        return view('vaga')->with('vaga', $vaga);
    }


    function vaga1() {
        return view('vaga1');
    }

    function insereVaga(Request $request) {

         
        //if(empty($request->input('tipo')) || 
        //empty($request->input('tipo')) || 
        //empty($request->input('tipo'))) {
        //    return view('descrever_vaga');
        //}

        $vaga = [];
        $vaga['titulo'] = $request->input('titulo');
        $vaga['tipo'] = $request->input('tipo');
        $vaga['remuneracao'] = $request->input('remuneracao');
        $vaga['endereco'] = $request->input('endereco');
        $vaga['local'] = $request->input('local');
        $vaga['descricao'] = $request->input('descricao');
        $vaga['nota'] = $request->input('nota');
        $vaga['empresa'] = $request->input('empresa');
        $vaga['contato'] = $request->input('contato');
        vagas::create($vaga);
        return view('descrever_vaga')->with(['resultado' => 1]);
    }
}
