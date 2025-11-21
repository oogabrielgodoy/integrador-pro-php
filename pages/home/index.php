<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador Pro - Dashboard</title>
    <?php require_once("../interface/components/Header/index.php"); ?>
</head>

<body class="bg-light">

    <main class="container my-4">

        <!-- Título da Home -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Dashboard</h3>
            <button class="btn btn-primary btn-sm">Adicionar Cliente</button>
        </div>

        <!-- Cards de Status -->
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <p class="text-muted mb-1">Clientes Conectados</p>
                        <h4 class="fw-bold">1</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <p class="text-muted mb-1">Tokens Ativos</p>
                        <h4 class="fw-bold">1</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <p class="text-muted mb-1">Atualizações Recentes</p>
                        <h4 class="fw-bold">2</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela Principal -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="fw-bold border-bottom pb-2 mb-3">Clientes conectados</h6>

                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th style="width:50px;">Avatar</th>
                            <th>Nickname</th>
                            <th>Access Token</th>
                            <th style="width:150px;">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <div class="rounded bg-primary" style="width:32px; height:32px;"></div>
                            </td>
                            <td class="fw-semibold">OGSHOP</td>
                            <td class="small text-muted">
                                APP_USR-5362438190549562-112107-ab83bfe6a5c81233bd959f33712aa826-2117321293
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">Atualizar</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Perfil</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </main>

    <?php require_once("../interface/components/Footer/index.php"); ?>
</body>

</html>