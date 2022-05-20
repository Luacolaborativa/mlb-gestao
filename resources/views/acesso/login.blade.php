<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão - MLB</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MLB</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/icons/font-awesome/css/font-awesome.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    {{-- Folhas de estilo --}}
    <link href="{{ asset('css/acesso.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center login-inicio">
            <form action="">
                <h2>Login</h2>
                <div class="form-group">
                    Email
                    <input type="text" name="login" required class="form-control" id="email" placeholder="email@email.com">
                </div>
                <div class="form-group">
                    Senha
                    <input type="text" name="login" required class="form-control" id="email" placeholder="******">
                </div>
                <div class="d-flex justify-content-between align-items-center flex-column">
                    <div class="button-group">
                        <button type="submit" class="btn btn-danger">Entrar</button>
                    </div>
                    <a href="">Esqueci minha senha</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>