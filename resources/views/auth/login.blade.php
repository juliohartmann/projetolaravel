<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de login da Branch pagina-de-login</title>
    <h1>Teste de Push</h1>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script>
        // Função para exibir um alerta antes de enviar o formulário
        function showConfirmation(event) {
            // Previne o envio imediato do formulário
            event.preventDefault;

            // Exibe a mensagem de confirmação
            var confirmation = confirm("Você tem certeza que deseja enviar o formulário?");
            
            // Se o usuário confirmar, o formulário é enviado
            if (confirmation) {
                event.target.submit; // Envia o formulário
            }
        }

        // Adiciona o listener para o evento submit
        window.onload = function {
            var form = document.getElementById('login-form');
            form.addEventListener('submit', showConfirmation);
        };
    </script>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="login-form" method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    </div>
        <script>
            var pote = "bombom";
            alert(pote);

            // DECLARAÇÃO DE VARIAVEIS
            var a, b, c;
            var nome, sobrenome, nomeCompleto;
            var a = 2;
            var b = 3;
            var c= a + b;
             // ATRIBUIÇÃO DOS VALORES

            /* Os operadores em javascript sao usados para atribuir valores, comparar valores, executar operações 
            aritméticas e muito mais.
            São os sinais que usamos: + - * / = ++ -- += -= && || etc...

            São separados em 6 categorias:

            1) Operadores Aritméticos (Matemáticos)
            2) Operadores de Atribuição 
            3) Operadores de Sequência 
            4) Operadores de Comparação 
            5) Operadores Condicional (Ternário)
            6) Operadores Lógicos 

            */
            var 

            alert(c);


        </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>


