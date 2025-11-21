<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("../interface/components/Header/index.php"); ?>
</head>

<body>


    <main class="container py-4">

        <!-- Header do Perfil -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <img src="https://via.placeholder.com/80" class="rounded-circle" alt="Avatar">
                </div>
                <div>
                    <h4 class="mb-0">Nome do Usuário</h4>
                    <small class="text-muted">@username</small>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-primary btn-sm">Editar Perfil</button>
                </div>
            </div>
        </div>

        <!-- Grid principal -->
        <div class="row g-4">

            <!-- Informações básicas -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold">Informações Gerais</div>
                    <div class="card-body">
                        <p><strong>Nome Completo:</strong> Usuário Exemplo</p>
                        <p><strong>Email:</strong> usuario@example.com</p>
                        <p><strong>Telefone:</strong> (11) 99999-0000</p>
                        <p><strong>Data de Cadastro:</strong> 12/01/2024</p>
                    </div>
                </div>
            </div>

            <!-- Status / Tokens / Integrações -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold">Integrações e Status</div>
                    <div class="card-body">
                        <p><strong>Status:</strong> <span class="badge bg-success">Ativo</span></p>
                        <p><strong>Access Token:</strong> válido até 30/12/2024</p>
                        <button class="btn btn-outline-primary btn-sm">Atualizar Access Token</button>
                    </div>
                </div>
            </div>

            <!-- Endereço -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold">Endereço</div>
                    <div class="card-body">
                        <p><strong>Rua:</strong> Endereço Exemplo</p>
                        <p><strong>Cidade:</strong> São Paulo</p>
                        <p><strong>Estado:</strong> SP</p>
                        <p><strong>CEP:</strong> 00000-000</p>
                    </div>
                </div>
            </div>

            <!-- Últimas atividades -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header fw-bold">Últimas Atividades</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Atualizou token – 2 horas atrás</li>
                        <li class="list-group-item">Conectou nova conta – Ontem</li>
                        <li class="list-group-item">Alterou informações – 15/11</li>
                    </ul>
                </div>
            </div>

        </div>
    </main>



</body>
<?php require_once("../interface/components/Footer/index.php"); ?>

</html>