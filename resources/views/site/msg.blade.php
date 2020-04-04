<!DOCTYPE html>
<html>
<head>
    <title>Mensagem enviada pelo site</title>
    <meta charset="utf-8">
    <style>
        body{
            width:510px;
            margin:0;
            padding:0 20px;
            font-family:"Raleway", sans-serif;
            font-size:12px;
        }
        h1{
            font-size:20px;
        }
        h2{
            font-size:16px;
        }
    </style>
</head>
<body>
<h1>
    Nova mensagem enviada pelo site
</h1>
<hr>
<p>
    <strong>Nome:</strong> {{ $nome }}<br>
    <strong>E-mail:</strong> {{ $email }}<br>
    <strong>Assunto:</strong> {{ $assunto }}<br>
    <strong>Mensagem:</strong><br> <?php echo nl2br($mensagem); ?>
</p> 
<hr>
</body>
</html>  