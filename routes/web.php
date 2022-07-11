<?php

use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return 'Olá Mundo';
});
*/

// Route::get('/', 'PrincipalController@principal');
// Route::get('/sobre-nos', 'SobreNosController@sobreNos');
// Route::get('/contato', 'ContatoController@contato');
// Route::get('/login', function(){ return 'Login';});

// Route::prefix('/app')->group(function(){
//     Route::get('/clientes', function(){ return 'Clientes';});   
//     Route::get('/fornecedores', function(){ return 'Fornecedores';});
//     Route::get('/produtos', function(){ return 'Produtos';});
// });

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/login', function(){ return 'Login';});

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ 
        // $clientes = [
        //     0 => [
        //             "Nome" => "Fernando",
        //             "Idade" => 29,
        //             "Profissão" => "Analista de Sistemas",
        //             "Sexo" => "Masculino",
        //     ],
        //     1 => [
        //             "Nome" => "Felipe",
        //             "Idade" => 27,
        //             "Profissão" => "Analista de Sistemas",
        //             "Sexo" => "Masculino",
        //     ] 

        // ];        
        
        // echo "<pre>";
        // var_dump($clientes);
        // echo "</pre>";

          // $dados = [
          //   ["Fernando", "29", "Analista de Sistemas", "Masculino"],
          //   ["Felipe", "27", "Analista de Sistemas", "Masculino"],

          // ];

          // $html_table = "<table border=1; width=50%;>
          //       <thead>
          //         <tr>Nome</tr>
          //         <tr>Idade</tr>
          //         <tr>Profissão</tr>
          //         <tr>Sexo</tr>
          //       </thead>

          //       <tbody>
          //           foreach($dados as $item):
          //              <tr>
          //                 <td>$item[0]</td>
          //                 <td>$item[1]</td>
          //                 <td>$item[2]</td>
          //                 <td>$item[3]</td>
          //             </tr>
          //           endforeach; 

          //      </tbody>";

          //      echo $html_table;
        
        $html_table = "<table border= 1; width=50%;> 
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Fernando</td>
              <td>29</td>
              <td>Analista de Sistemas</td>
              <td>Masculino</td>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Felipe</td>
              <td>27</td>
              <td>Analista de Sistemas</td>
              <td>Masculino</td>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Cláudia</td>
              <td>30</td>
              <td>Analista de Requisitos</td>
              <td>Feminino</td>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Maria</td>
              <td>40</td>
              <td>Densenvolvedora Mobile</td>
              <td>Feminino</td>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Mateus</td>
              <td>35</td>
              <td>Cientista de Dados</td>
              <td>Masculino</td>
            </tr>
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
              <th>Sexo</th>
            </tr>
            <tr>
              <td>Carlos</td>
              <td>25</td>
              <td>Engenheiro de Software</td>
              <td>Masculino</td>
            </tr>
          </table>";

          echo $html_table;

        ;});   
    Route::get('/fornecedores', function(){ return 'Fornecedores';});
    Route::get('/produtos', function(){ return 'Produtos';});
});

/* verbo http

get
post
put
patch
delete
options

*/







