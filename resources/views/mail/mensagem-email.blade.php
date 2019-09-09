<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste de Email</title>
</head>
<body>
<div>
    <h1>Email enviado através do site {{env('APP_URL')}}</h1>
    <br>
    <h2>Mensagem: {{$user->message}}</h2>
    <h3>Contato: {{$user->contact}}</h3>

</div>

</body>
</html>