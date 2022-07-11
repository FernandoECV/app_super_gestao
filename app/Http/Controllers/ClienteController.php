<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function listagemClientes(){

        $clientes = [
            0 => [
                    "Nome" => "Fernando",
                    "Idade" => 29,
                    "Profissão" => "Analista de Sistemas",
                    "Sexo" => "Masculino",
            ],
            1 => [
                    "Nome" => "Felipe",
                    "Idade" => 27,
                    "Profissão" => "Analista de Sistemas",
                    "Sexo" => "Masculino",
            ],
            2 => [
              "Nome" => "Nathalia",
              "Idade" => 26,
              "Profissão" => "Arquiteta FullStack de Software",
              "Sexo" => "Feminino",
          ]
        ];
        
        return view('cliente.index', ["clientes" => $clientes]);

    }

}
