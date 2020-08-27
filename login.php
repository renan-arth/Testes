<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Renan Arthur Rodrigues Albino">
    <link rel="icon" href="../../../../favicon.ico">
    

    <title>Login</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/signing.css">
    <link href="floating-labels.css" rel="stylesheet">    
    <style type="text/css">
      .loginTopo{
        font-size: 40px;
        color: white;
      }
      .link{
        font-size: 15px;
        color: white;
        text-decoration-line: underline;
        
      }
      .btn-modal{
        border-radius: 5px;
        color: white;
        background-color: transparent;
        border-color: transparent;
        text-decoration-line: underline;
      }
    </style>

    <style type="text/css">
      
      .btn-third {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-third:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-third:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-third.disabled, .btn-third:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-third:not(:disabled):not(.disabled):active, .btn-third:not(:disabled):not(.disabled).active,
.show > .btn-third.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-third:not(:disabled):not(.disabled):active:focus, .btn-third:not(:disabled):not(.disabled).active:focus,
.show > .btn-third.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

    </style>
  </head>

  <body background="img/fundo.png">


    <form class="form-signin" name="loginform" action="userautentication.php" method="post" style="padding-right: 30%; padding-left: 30%; padding-top: 10%;">
      <div class="text-center mb-4">
        <h1 class="loginTopo">Login</h1>
      </div>

      <div class="form-label-group">
        <label for="inputEmail" style="color: white;">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de email" required autofocus  name="email"><td><br></td>
      </div>

      <div class="form-label-group">
        <label for="inputPassword" style="color: white;">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha"><td><br></td>
      </div>
      <div>
        <td> <!-- Botão para acionar modal --><button type="text" class="btn-modal" data-toggle="modal" data-target="#ExemploModalCentralizado" style="text-decoration: none;">Cadastre-se</button></td>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-signin" name="cadastroform" action="cadastrando.php" method="post">
      <div class="form-label-group">
        <label for="inputNome">Nome completo</label>        
        <input type="text" id="inputNome" class="form-control" placeholder="Digite seu nome completo" required autofocus  name="nome"><td><br></td>

      </div>

       <div class="form-label-group">
        <label for="inputTelefone">Telefone</label>        
        <input type="text" id="inputTelefone" class="form-control" placeholder="Digite o numero de telefone" required autofocus  name="telefone"><td><br></td>

      </div>

       <div class="form-label-group">
        <label for="inputCidade">Cidade</label>        
        <input type="text" id="inputCidade" class="form-control" placeholder="Digite sua cidade" required autofocus  name="cidade"><td><br></td>

      </div>

       <div class="form-label-group">
        <label for="inputEstado">Estado</label>        
        <input type="text" id="inputEstado" class="form-control" placeholder="Digite seu estado" required autofocus  name="estado"><td><br></td>

      </div>

       <div class="form-label-group">
        <label for="inputEndereco">Endereço</label>        
        <input type="text" id="inputEndereco" class="form-control" placeholder="Digite seu endereço" required autofocus  name="endereco"><td><br></td>

      </div>

       <div class="form-label-group">
        <label for="inputemail">Email</label>        
        <input type="email" id="inputemail" class="form-control" placeholder="Digite seu email" required autofocus  name="email"><td><br></td>

      </div>

      <div class="form-label-group">
        <label for="inputpassword">Senha</label>        
        <input type="password" id="inputpassword" class="form-control" placeholder="Digite sua senha" required autofocus name="senha">

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button class="btn btn-third" type="submit">Cadastrar</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
