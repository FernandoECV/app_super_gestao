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
       
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');   
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});

Route::get('/rota1', function() {
    echo "Rota 1";
})->name('site.rota1');

Route::get('/rota2', function() {
  return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function() {
    echo'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui<a/> para ir para a página inicial';
});

Route::get('/clientes', 'ClienteController@listagemClientes');

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
//             ],
//             3 => [
//               "Nome" => "Juliano",
//               "Idade" => 30,
//               "Profissão" => "Analista de requisitos",
//               "Sexo" => "Masculino",
//             ]          

//         ];   
    
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







