<?php

// ignora as anotações, é só pra eu não me perder e também pra tentar te explicar quando tu ver o código meu bem



// aqui é pra importar a classe Route do Laravel pra definir as rotas que vamos precisar
use Illuminate\Support\Facades\Route;

// aqui também faz importação, mas é da classe Request pra pegar os dados que o usuário manda no POST
use Illuminate\Http\Request;

// rota GET pra exibir o formulário de cadastro, ou seja, o que é visível
Route::get('/cadastro', function () {
    return view('cadastro');  // mostra a página de cadastro (no caso o formulário)
});

// rota POST pra processar o que o usuário envia no cadastro
Route::post('/cadastro', function (Request $request) {
    // essa parte aqui é onde pega os dados do formulário (nome, email, senha)
    $nome = $request->input('nome');
    $email = $request->input('email');
    $senha = $request->input('senha');
    
    // aqui vai retornar um script que vai exibir o alerta com os dados e redirecionar assim que clicar em ok, então volta pro início
    return "<script>
    alert('Usuário cadastrado com sucesso!\\n\\nNome: $nome\\nEmail: $email');
    window.location.href='/cadastro';  // aqui é onde redireciona de volta pra página de cadastro :)
</script>";
});