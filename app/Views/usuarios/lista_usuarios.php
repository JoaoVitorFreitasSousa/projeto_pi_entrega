


<!--Page Header -->
        <h2 class="mb-4">Listagem de Usuários</h2>

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                    <a href="/usuarios/inserir" class="btn btn-success">ADICIONAR</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr> <!-- La no SQL que o ronan passou tem mais campos, mas so fiz esses -->
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>CELULAR</th>
                            <th>NÍVEL</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $u): ?>
                        <tr>
                            <td><?=$u['id_usuario']?></td>
                            <td><?=$u['nome']?></td>
                            <td><?=$u['email']?></td>
                            <td><?=$u['celular']?></td>
                            <td><?=$u['nivel_acesso']?></td>

                           
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
           