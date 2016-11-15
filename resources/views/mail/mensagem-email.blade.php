<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste de Email</title>
</head>
<body>
<div>
    <h1>Email enviado através do site www.lucianoxerox.com.br</h1>
    <br>
    <h2>Mensagem: {{$user->message}}</h2>
    <h3>Contato: {{$user->contact}}</h3>
    <h4>Arquivos:</h4>
    @foreach($user->file as $file)
        <p><a href="{{$file->path}}"><strong>{{$file->file_name}}</strong></a></p>
    @endforeach
</div>

</body>
</html>