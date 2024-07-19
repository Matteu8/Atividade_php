<?php
    if(isset ($_GET["bt_nome"])){
        $nome = $_GET["bt_nome"];
        $email = $_GET["bt_email"];
        $msg = $_GET["bt_msg"];
    }


?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Contato</span>
            </div>
        </nav>
    </div>

    <div class="container">
        <hr>
        <form action="" method="get">
            <i class='bx bx-user' style='color:#ffffff'></i>
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="bt_nome">
            <i class='bx bx-envelope bx-tada' style='color:#ffffff'></i>
            <label for="">Email:</label>
            <input class="form-control" type="text" name="bt_email">
            <i class='bx bx-message-dots' style='color:#ffffff'></i>
            <label for="">Mensagem:</label>
            <input class="form-control" type="text" name="bt_msg">
            <hr>
            <img src="" alt="">
            <input type="reset" class="btn btn-outline-danger" value="Cancelar">
            <input type="submit" class="btn btn-outline-success" value="Enviar">
        </form>

        <?php
        
        if(isset ($nome)){
            
            echo "<hr>";
            echo "<p>";
            echo "<i class='bx bx-user' style='color:#ffffff'></i> ";
            echo "Nome: " . $nome;
            echo "</p>";
            echo "<hr>";
            echo "<p>";
            echo "<i class='bx bx-envelope bx-tada' style='color:#ffffff'></i> ";
            echo "Email: " . $email;
            echo "</p>";
            echo "<hr>";
            echo "<p>";
            echo "<i class='bx bx-message-dots' style='color:#ffffff'></i> ";
            echo "Mensagem: " . $msg;
            echo "</p>";
            echo "<hr>";
        }

        ?>

    </div>
</body>

</html>