<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="cadastro.css" />
    <title>Cadastro</title>
  </head>

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <?php include 'logo.php'; ?>
  <br><br><br>

    <h1>Cadastro</h1>
    <div class="conteiner">

      
      <form
        name="form_cadastro"
        method="POST"
        action="cadastro.php"
        id="form_cadastro"
        onsubmit="return btnSendOnClick();"
        enctype="multipart/form-data"
      >
        Nome: <input type="text" name="txtName" id="txtName" placeholder="Insira seu nome" /><br />
        CPF <input type="text" name="txtCPF" id="txtCPF" placeholder="Insira seu CPF (Apenas números)" /><br />
        Data de nascimento <input type="text" name="txtNasc" id="txtNasc" placeholder="(AAAA-MM-DD)"><br />
        Sexo:
        <div style="display: flex; gap: 10px;">
          <label>
            <input type="radio" name="optGender" value="feminino" id="feminino"/> Feminino
          </label>
          <label>
            <input type="radio" name="optGender" value="masculino" id="masculino" /> Masculino
          </label>
        </div><br />
        E-mail <input type="text" name="txtEmail" id="txtEmail" placeholder="Insira o seu e-mail"/><br />
        País <input type="text" name="end_pais" id="end_pais" placeholder="Insira o país que você mora"/><br />
        <label for="estado">Estado</label>
        <select id="end_estado" name="end_estado" required>
          <option value="0" disabled selected>Selecione o estado:</option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AM">AM</option>
          <option value="AP">AP</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="DF">DF</option>
          <option value="ES">ES</option>
          <option value="GO">GO</option>
          <option value="MA">MA</option>
          <option value="MG">MG</option>
          <option value="MS">MS</option>
          <option value="MT">MT</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="PR">PR</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="RS">RS</option>
          <option value="SC">SC</option>
          <option value="SE">SE</option>
          <option value="SP">SP</option>
          <option value="TO">TO</option></select
        ><br />
        Cidade <input type="text" name="end_cidade" id="end_cidade" placeholder="Insira a cidade que você mora" /><br />
        Telefone <input type="text" name="txtTel" id="txtTel" placeholder="Insira o seu telefone (Apenas números)" /><br />
        Animal Favorito <input type="text" name="txtAF" id="txtAF" /><br />
        Nome de usuário <input type="text" name="txtNU" id="txtNU" placeholder="Insira o nome que será exibido para os outros usuários" /><br />
        Senha <input type="text" name="txtSenha" id="txtSenha" placeholder="Insira sua senha" /><br />
        Confirmar sua senha <input type="text" placeholder="Confirme sua senha">
        
        <input type="submit" value="Enviar" />
        <input type="reset" value="Limpar" />
      </form>
    </div>
    <footer>
      <br>
      <p>OMC 2024 - Todos os direitos reservados</p>
      
    </footer>
  </body>

  <script>

    const txtName = document.getElementById("txtName");
    const txtCPF = document.getElementById("txtCPF");
    const dataNasc = document.getElementById("txtNasc");
    const cboGender = document.getElementById("optGender");
    const txtEmail = document.getElementById("txtEmail");
    const end_pais = document.getElementById("end_pais");
    const end_estado = document.getElementById("end_estado");
    const end_cidade = document.getElementById("end_cidade");
    const txtTel = document.getElementById("txtTel");
    const AnimalFav = document.getElementById("txtAF");
    const NomeUser = document.getElementById("txtNU");
    const txtSenha = document.getElementById("txtSenha");

    function btnSendOnClick() {
      if (txtName.value === "") {
        alert("Preenchimento obrigatório: Nome");
        txtName.focus();
        return false;
      }
      if (txtCPF.value === "") {
        alert("Preenchimento obrigatório: CPF");
        txtCPF.focus();
        return false;
      }
      if (dataNasc.value === "") {
        alert("Preenchimento obrigatório: Data de nascimento");
        dataNasc.focus();
        return false;
      }
      if (!document.querySelector('input[name="optGender"]:checked')) {
        alert("Preenchimento obrigatório: Sexo");
        return false;
      }
      if (txtEmail.value === "") {
        alert("Preenchimento obrigatório: E-mail");
        txtEmail.focus();
        return false;
      }
      if (end_pais.value === "") {
        alert("Preenchimento obrigatório: País");
        end_pais.focus();
        return false;
      }
      if (end_estado.value === "0") {
        alert("Preenchimento obrigatório: Estado");
        end_estado.focus();
        return false;
      }
      if (end_cidade.value === "") {
        alert("Preenchimento obrigatório: Cidade");
        end_cidade.focus();
        return false;
      }
      if (txtTel.value === "") {
        alert("Preenchimento obrigatório: Telefone");
        txtTel.focus();
        return false;
      }
      if (NomeUser.value === "") {
        alert("Preenchimento obrigatório: Nome de usuário");
        NomeUser.focus();
        return false;
      }
      if (txtSenha.value === "") {
        alert("Preenchimento obrigatório: Senha");
        txtSenha.focus();
        return false;
      }
      if (!isCPF(txtCPF)) {
        alert("O CPF está incorreto, por favor insira um CPF válido.");
        txtCPF.focus();
        return false;
      }
      if (!isEmail(txtEmail)) {
        alert("O e-mail está incorreto, por favor insira um e-mail válido.");
        txtEmail.focus();
        return false;
      }
      if (!isdata(txtNasc)) {
        alert("A data de nascimento está incorreta, por favor insira uma data de nascimento válida.");
        txtNasc.focus();
        return false;
      }
      return true;
    }
    function isCPF(txtcpf) {
        const cpf = txtcpf.value;
        const re = /^\d{11}$/;
        return re.test(cpf)
      
    }

    function isEmail(txtemail) {
        const email =  txtemail.value;
      const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      return re.test(email);
    }
    function isdata(txtNasc){
      const data  =  dataNasc.value;
      const re = /^(19|20)\d{2}[-/.](0[1-9]|1[0-2])[-/.](0[1-9]|[12]\d|3[01])$/;
      return re.test(data);
    }
  </script>
</html>
