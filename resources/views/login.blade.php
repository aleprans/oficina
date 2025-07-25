<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}" />
  
  <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/geral.css') }}">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <title>PRATICAGEM SS - Login</title>
</head>
<body>
  <!-- TOAST -->

  @include('components/toast')
  @include('components/loading')

  <form id="form_login" action="{{ route('login.auth') }}" method="POST">
    @csrf
    <div class="main-login">
      <div class="right-login">    
        <div class="card-login">
          <h1>Login</h1>
          <div class="msg" id="msg"><p id="msgtext"></p></div>
          <div class="textfield">
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user" autocomplete="off"/>
          </div>
          <div class="textfield">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password"/>
          </div>
          <button type="button" class="btn-login" onclick="logar()">Logar</button>
        </div>
      </div>
    </div>
  </form>
  <script src="{{ URL('js/geral.js') }}"></script>
  <script src="{{ URL('js/login.js') }}"></script>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  @if (Session::get('msg'))
    <script>toastCreate('ERRO', 'Usuário e/ou senha inválidos!', 'danger')</script>
  @endif
  @if (Session::get('msg1'))
    <script>toastCreate('ERRO', 'Usuário não encontrado ou já ativado!', 'danger')</script>
  @endif
  @if (Session::get('msg2'))
    <script>toastCreate('USUÁRIO', 'Usuário ativado com sucesso!', 'success')</script>
  @endif

</body>
</html>