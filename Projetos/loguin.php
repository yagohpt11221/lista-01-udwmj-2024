<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Verificação de formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validação de usuario e senha
        if ($_POST["username"] === "admin" && $_POST["password"] === "password") {
            echo "<p>Login bem-sucedido!</p>";
        } else {
            echo "<p>Nome de usuário ou senha incorretos.</p>";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">Nome de usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>