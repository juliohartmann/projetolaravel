<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

No Laravel, as rotas são responsáveis por definir como as URLs da sua aplicação respondem 
às requisições HTTP. As rotas ligam uma URL a um determinado controlador, 
método ou função, que por sua vez retorna uma resposta (por exemplo, uma página HTML, JSON, etc.).
|
*/

/*
// Route::get()
O método Route::get() define uma rota que responde a requisições HTTP do tipo GET. 
Uma requisição GET é o tipo de requisição usada quando um usuário tenta acessar uma URL 
diretamente no navegador.
*/

Route::get('/', function () { //O método Route::get() define uma rota que responde a requisições HTTP do tipo GET.
    return view('welcome');   // Uma requisição GET é o tipo de requisição usada quando um usuário tenta acessar uma URL 
                            //diretamente no navegador.
});

Route::get('/login', /* Esta rota responde a uma requisição GET para a URL /login.
 Normalmente, uma requisição GET é usada quando o usuário acessa uma página em seu navegador. */
 
[LoginController::class, 'showLoginForm'])->name('login'); /* Aqui, o Laravel está mapeando essa 
URL para o LoginController e, especificamente, para o método showLoginForm. Este método é responsável 
por exibir o formulário de login. */
/* name('login') Este comando dá um nome à rota, que pode ser referenciado em outras partes da aplicação. 
Em vez de usar a URL diretamente, você pode usar route('login') para gerar a URL /login. */

Route::post('/login', [LoginController::class, 'login'])->name('login.post'); /* A requisição POST é usada quando 
o formulário de login é enviado pelo usuário. [LoginController::class, 'login']: Quando o formulário de login é 
enviado, essa rota chama o método login do LoginController.*/
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); /* Esta rota responde a uma 
requisição POST para a URL /logout.
Quando o usuário clica em "Logout" (geralmente em um botão ou link), o navegador faz uma 
requisição POST para esta URL. 
O uso de POST para logout é recomendado, pois ele adiciona uma camada de segurança 
(evitando que o logout seja acidentalmente disparado com uma simples visita ao link).
[LoginController::class, 'logout']: Essa rota chama o método logout do LoginController.
O método logout faz o logout do usuário, destruindo a sessão e removendo qualquer informação de autenticação.

*/

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});
