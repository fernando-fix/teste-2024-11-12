<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('auth.store') }}" method="post">
        @csrf
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Informe seu e-mail" autocomplete="off">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Informe sua senha" id="password">
        </div>

        <button>Entrar</button>
    </form>

</body>

</html>
