
    <h3 class="mb-4">Cadastro de Usuários</h3>

    <form class="border rounded p-4 bg-light">
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nome:</label>
          <input type="text" class="form-control" placeholder="Digite o nome completo">
        </div>
        <div class="col-md-6">
          <label class="form-label">E-mail:</label>
          <input type="email" class="form-control" placeholder="Digite o e-mail">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Celular:</label>
          <input type="text" class="form-control" placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="col-md-4">
          <label class="form-label">Data de Nascimento:</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">CPF:</label>
          <input type="text" class="form-control" placeholder="Digite o CPF">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Endereço:</label>
          <input type="text" class="form-control" placeholder="Rua, avenida, etc.">
        </div>
        <div class="col-md-2">
          <label class="form-label">Número:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Complemento:</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Cidade:</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Estado:</label>
          <select class="form-select">
            <option selected>-- Escolha --</option>
            <option>AC</option><option>AL</option><option>AP</option><option>AM</option><option>BA</option>
            <option>CE</option><option>DF</option><option>ES</option><option>GO</option><option>MA</option>
            <option>MT</option><option>MS</option><option>MG</option><option>PA</option><option>PB</option>
            <option>PR</option><option>PE</option><option>PI</option><option>RJ</option><option>RN</option>
            <option>RS</option><option>RO</option><option>RR</option><option>SC</option><option>SP</option>
            <option>SE</option><option>TO</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Gênero:</label>
          <select class="form-select">
            <option selected>-- Escolha --</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Senha:</label>
          <input type="password" class="form-control" placeholder="Digite a senha">
        </div>
        <div class="col-md-6">
          <label class="form-label">Confirmar Senha:</label>
          <input type="password" class="form-control" placeholder="Confirme a senha">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Tipo de Usuário:</label>
          <select class="form-select">
            <option selected>-- Escolha --</option>
            <option>Administrador</option>
            <option>Funcionário</option>
            <option>Cliente</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <a href="dashboard.html" class="btn btn-link">Voltar</a>
        <div>
          <button type="reset" class="btn btn-secondary">Limpar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </form>
 