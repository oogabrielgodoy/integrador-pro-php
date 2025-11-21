<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light d-flex align-items-center" style="height: 100vh;">

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="card shadow-sm p-4">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold">Integrador Pro</h4>
                        <p class="text-muted mb-0">Acesso à plataforma</p>
                    </div>

                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="emailInput" placeholder="email@example.com">
                            <label for="emailInput">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="passwordInput" placeholder="••••••••">
                            <label for="passwordInput">Senha</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="remember" id="rememberCheck">
                                <label class="form-check-label" for="rememberCheck">Lembrar-me</label>
                            </div>
                            <a href="#" class="small text-decoration-none">Esqueci a senha</a>
                        </div>

                        <button class="btn btn-primary w-100 py-2 mb-3" type="submit">Entrar</button>

                        <p class="text-center text-muted small mb-0">
                            © 2024 Integrador Pro
                        </p>
                    </form>

                </div>

            </div>
        </div>
    </main>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>