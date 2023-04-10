<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>
<div class="login">
	<h1>Calculador imposto</h1>
    <form action="controller/calcula.php" method="post" >
    	<input type="text" name="nome" placeholder="Nome" required="required" />
        <input type="text" name="cpf" placeholder="CPF" required="required" />
        <input type="text" name="renda" placeholder="Renda mensal" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Calcular imposto</button>

    
    </form>
</div>
</body>
</html>