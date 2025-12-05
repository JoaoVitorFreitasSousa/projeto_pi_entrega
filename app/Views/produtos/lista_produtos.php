
            <h3>Listagem de Produtos</h3>
            <a href="/produtos/inserir" class="btn btn-success">ADICIONAR</a>
        </div>

        <div class="card p-3 shadow-sm">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TÍTULO</th>
                        <th>AUTOR</th>
                        <th>PREÇO</th>
                        <th>DESCRIÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produtos as $p): ?>
                    <tr>
                            <td><?=$p['id_produto']?></td>
                            <td><?=$p['titulo']?></td>
                            <td><?=$p['autor']?></td>
                            <td><?=$p['preco']?></td>
                            <td><?=$p['descricao']?></td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
      