<html>
<head>
    <title>Resgate de Conteúdo</title>
</head>
<body>
    <h1>Recebendo os Dados</h1>
    <?php
        if(isset($_POST['nome'])){
            echo $_POST['nome']."</br>";
            echo var_dump($_POST);
        }
    ?>
    
</body>
</html>