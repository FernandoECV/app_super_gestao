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

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/login', function(){ return 'Login';});

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';});   
    Route::get('/fornecedores', function(){ return 'Fornecedores';});
    Route::get('/produtos', function(){ return 'Produtos';});
});

// Route::get('/', 'PrincipalController@principal');
// Route::get('/sobre-nos', 'SobreNosController@sobreNos');
// Route::get('/contato', 'ContatoController@contato');
// Route::get('/login', function(){ return 'Login';});

// Route::prefix('/app')->group(function(){
//     Route::get('/clientes', function(){ 
//         $clientes = [
//             0 => [
//                     "Nome" => "Fernando",
//                     "Idade" => 29,
//                     "Profissão" => "Analista de Sistemas",
//                     "Sexo" => "Masculino",
//             ],
//             1 => [
//                     "Nome" => "Felipe",
//                     "Idade" => 27,
//                     "Profissão" => "Analista de Sistemas",
//                     "Sexo" => "Masculino",
//             ],
//             2 => [
//               "Nome" => "Nathalia",
//               "Idade" => 26,
//               "Profissão" => "Arquiteta FullStack de Software",
//               "Sexo" => "Feminino",
//           ]
//         ];        
        
//         // echo "<pre>";
//         // var_dump($clientes);
//         // echo "</pre>";

//           $html_table = "<table border=1; width=50%;>
//                 <thead>
//                   <tr>
//                     <th>Nome</th>
//                     <th>Idade</th>
//                     <th>Profissão</th>
//                     <th>Sexo</th>
//                   </tr>                  
//                 </thead><tbody>";

//                 foreach($clientes as $cliente):
//                   //print_r($cliente) ;
//                   echo "<br>";
//                   $html_table .=  "<tr><td> {$cliente['Nome']} </td>";
//                   $html_table .=  "<td> {$cliente['Idade']} </td>";
//                   $html_table .=  "<td> {$cliente['Profissão']} </td>";
//                   $html_table .=  "<td> {$cliente['Sexo']} </td></tr>";
//                 endforeach;

//                 $html_table .= "</tbody>";

//                echo $html_table;             

//         ;});   
//     Route::get('/fornecedores', function(){ return 'Fornecedores';});
//     Route::get('/produtos', function(){ return 'Produtos';});
// });

/* verbo http

get
post
put
patch
delete
options

*/







