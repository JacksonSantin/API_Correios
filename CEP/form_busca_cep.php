<?php require_once './Includes/header.php'; ?>

    <div class="container content-page">
      <h1 class="center red-text text-lighten-2 title-page">BUSCAR CEP</h1>

        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input type="text" name="cep" id="cep" class="validate" placeholder="Informe o CEP" size="10" maxlength="9" required>
                <label for="cep">CEP</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="rua" id="rua" class="validate" placeholder="Informe a rua" size="60" required>
                <label for="rua">RUA</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input type="text" name="bairro" id="bairro" class="validate" placeholder="Informe o bairro" size="40" required>
                <label for="bairro">BAIRRO</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="cidade" id="cidade" class="validate" placeholder="Informe a cidade" size="40" required>
                <label for="cidade">CIDADE</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input type="text" name="uf" id="uf" class="validate" placeholder="Informe o estado" size="2" required>
                <label for="uf">ESTADO</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="ibge" id="ibge" class="validate" placeholder="Código IBGE" size="8" disabled>
                <label for="ibge">IBGE</label>
              </div>
            </div>
          </div>  
        </div>
      </div>


    <?php require_once './Includes/footer.php'; ?>