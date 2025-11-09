
        <h3>Cadastro de Produtos</h3>
        <div class="card p-4 mt-3 shadow-sm">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Título:</label>
                        <input type="text" class="form-control" placeholder="Digite o título do livro">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Autor:</label>
                        <input type="text" class="form-control" placeholder="Digite o nome do autor">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Preço:</label>
                        <input type="number" step="0.01" class="form-control" placeholder="0.00">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Categoria:</label>
                        <select class="form-select">
                            <option>-- ESCOLHA --</option>
                            <option>Romance</option>
                            <option>Ficção</option>
                            <option>Terror</option>
                            <option>Didático</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">ISBN:</label>
                        <input type="text" class="form-control" placeholder="Digite o ISBN">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição:</label>
                    <textarea class="form-control" rows="3" placeholder="Digite a descrição do livro"></textarea>
                </div>

                <a href="?route=listar-produtos" class="btn btn-link">Voltar</a>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
       