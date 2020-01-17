<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();
</script>
<script type="text/javascript">
function valida_campos(){
	if(document.getElementById('nome').value == ''){
		alert('Por favor, preencha os campos obrigatórios!');
		document.getElementById('nome').focus();
		return false;
	}
	if(document.getElementById('email').value == ''){
		alert('Por favor, preencha os campos obrigatórios!');
		document.getElementById('email').focus();
		return false;
	}	
		if(document.getElementById('senha').value == '' || document.getElementById('senha').value != document.getElementById('senha2').value){
		alert('As senhas não conferem, por favor, redigite!');
		document.getElementById('senha').focus();
		return false;
	}
}
</script>



<div class="container">
<form class="needs-validation" method="post" novalidate>
    <h1><p class="h5 mb-4">Cadastro</p></h1>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nome Completo</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" required>
      <div class="valid-feedback">
        Ok
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Data de Nascimento</label>
      <input type=date class="form-control" id="datanasc" name="datanasc" placeholder="Insira sua data de nascimento"  required>
      <div class="valid-feedback">
        Ok
      </div>
    </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">RG</label>
      <input type=text class="form-control" id="rg" name="rg" placeholder="Insira seu RG" maxlength="9" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>   
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">CPF</label>
      <input type=text class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF" maxlength="11" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">Endereço</label>
      <input type=text class="form-control" id="endereco" name="endereco" placeholder="Insira seu endereco - com complemento - " required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
      <div class="col-md-4 mb-3">
      <label for="validationCustom02">Numero</label>
      <input type=text class="form-control" id="numero" name="numero" placeholder="Insira seu numero" maxlength="5" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">CEP</label>
      <input type=text class="form-control" id="cep" name="cep" placeholder="Insira seu CEP" maxlength="8" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">Bairro</label>
      <input type=text class="form-control" id="bairro" name="bairro" placeholder="Insira seu bairro" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">Cidade</label>
      <input type=text class="form-control" id="cidade" name="cidade" placeholder="Insira sua cidade" maxlength="15" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">Estado</label>
      <input type=text class="form-control" id="estado" name="estado" placeholder="Insira seu estado" required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
       <div class="col-md-4 mb-3">
      <label for="validationCustom02">Telefone/Celular</label>
      <input type=tel class="form-control" id="tel"  name="tel" placeholder="Insira seu telefone para contato" maxlength="11"  required>
      <div class="valid-feedback">
        Ok
      </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Usuário</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="usuario">@</span>
        </div>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Insira o nome do Usuário"
          aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
         Por favor, escolha um nome de usuário
        </div>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Email</label>
      <input type=email class="form-control" id="email" name="email" placeholder="Insira seu email" required>
      <div class="invalid-feedback">
       Verifique se o email está correto
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Senha</label>
      <input type=password class="form-control" id="senha" name="senha" placeholder="Insira a senha" required>
      <div class="invalid-feedback">
        Preencha esse campo
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Verificação de senha</label>
      <input type=password class="form-control" id="senha2" placeholder="Insira a senha novamente" required>
      <div class="invalid-feedback">
       Preencha esse campo
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
       Concordo com as informações acima.
      </label>
      <div class="invalid-feedback">
       Você deve preencher todos os campos antes de prosseguir
      </div>
    </div>
  </div>
  <button class="btn btn-danger btn-sm" type="submit">Cadastrar</button>
</form>
</div>