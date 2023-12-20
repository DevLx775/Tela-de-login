<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="navegacao">
            <h1 class="title-header"><?php echo"<span style='color:black;'>Olá admin(",$_SESSION['user']," )</span>"?></h1>
            <ul>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </nav>
    </header>
</body>
</html>