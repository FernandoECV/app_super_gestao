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

<<<<<<< HEAD
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
=======
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

Route::get('/clientes', 'ClienteController@listagemClientes');
// Route::redirect('/rota2', '/rota1');

// Route::get('/', 'PrincipalController@principal');
// Route::get('/sobre-nos', 'SobreNosController@sobreNos');
// Route::get('/contato', 'ContatoController@contato');
// Route::get('/login', function(){ return 'Login';});

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ 
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
>>>>>>> b848488c414279fc385b9789a62b5402c5b2fa2b
        
        // echo "<pre>";
        // var_dump($clientes);
        // echo "</pre>";

<<<<<<< HEAD
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
        
//         $html_table = "<table border= 1; width=50%;> 
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Fernando</td>
//               <td>29</td>
//               <td>Analista de Sistemas</td>
//               <td>Masculino</td>
//             </tr>
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Felipe</td>
//               <td>27</td>
//               <td>Analista de Sistemas</td>
//               <td>Masculino</td>
//             </tr>
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Cláudia</td>
//               <td>30</td>
//               <td>Analista de Requisitos</td>
//               <td>Feminino</td>
//             </tr>
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Maria</td>
//               <td>40</td>
//               <td>Densenvolvedora Mobile</td>
//               <td>Feminino</td>
//             </tr>
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Mateus</td>
//               <td>35</td>
//               <td>Cientista de Dados</td>
//               <td>Masculino</td>
//             </tr>
//             <tr>
//               <th>Nome</th>
//               <th>Idade</th>
//               <th>Profissão</th>
//               <th>Sexo</th>
//             </tr>
//             <tr>
//               <td>Carlos</td>
//               <td>25</td>
//               <td>Engenheiro de Software</td>
//               <td>Masculino</td>
//             </tr>
//           </table>";

//           echo $html_table;

//         ;});   
//     Route::get('/fornecedores', function(){ return 'Fornecedores';});
//     Route::get('/produtos', function(){ return 'Produtos';});
// });
=======
          $html_table = "<table border=1; width=50%;>
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>
                    <th>Sexo</th>
                  </tr>                  
                </thead><tbody>";

                foreach($clientes as $cliente):
                  //print_r($cliente) ;
                  echo "<br>";
                  $html_table .=  "<tr><td> {$cliente['Nome']} </td>";
                  $html_table .=  "<td> {$cliente['Idade']} </td>";
                  $html_table .=  "<td> {$cliente['Profissão']} </td>";
                  $html_table .=  "<td> {$cliente['Sexo']} </td></tr>";
                endforeach;

                $html_table .= "</tbody>";

               echo $html_table;             

        ;});   
    Route::get('/fornecedores', function(){ return 'Fornecedores';});
    Route::get('/produtos', function(){ return 'Produtos';});
});
>>>>>>> b848488c414279fc385b9789a62b5402c5b2fa2b

/* verbo http

get
post
put
patch
delete
options

*/







