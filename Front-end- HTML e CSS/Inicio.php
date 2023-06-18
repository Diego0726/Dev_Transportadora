<?php
include(`Conexão.php`);

if(isset($_POST['email']) == 0 ){
    echo"Preencha se e-mail";
} else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua Senha";
} else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $email = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "Select * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['user'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

            header(("Location: Seleção.html"));    
    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }

}
?>
<!DOCTYPE html>
<Html:5>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev_Transportadora</title>
    <link rel="shortcut icon" href="imagens/icone2.png" type="image/x-icon">
    <link rel="stylesheet" href="inicio.CSS">
    <script src="https://kit.fontawesome.com/f6bc5d7c98.js" crossorigin="anonymous"></script>
    
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Inscreva-se</h1>
            <form method="post" action="conexão.php" id="Formulario">
                <div class="input-group">
                    <div class="input-field" id="Namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nome Completo" >
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" required>
                    </div>
                    
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" required>
                    </div>
                </div>
                <p>Esqueceu a senha? <a href="#">Clique aqui!</a></p>
                <div class="btn-field">
                    <button type="button" id="Inscreva-seBtn">Inscreva-se</button>
                    <button type="button" class="disable" id="LoginBtn">Entrar</button>
                </div>
            </form>
        </div>
    </div>
<script>

window.addEventListener("DOMContentLoaded", function() {
    let form = document.getElementById("Formulario");
    let loginButton = document.getElementById("LoginBtn");
    let inscrevaseButton = document.getElementById("Inscreva-seBtn");

    loginButton.addEventListener("click", function(event) {
        event.preventDefault();
        if (form.checkValidity()) {
            window.location.href = "Seleção.HTML";
        }
    });

    inscrevaseButton.addEventListener("click", function(event) {
        event.preventDefault();
        if (form.checkValidity()) {
            window.location.href = "Cadastro.html";
        }
    });
});

    let LoginBtn = document.getElementById("LoginBtn")
    let InscrevaseBtn = document.getElementById("Inscreva-seBtn")
    let Namefield = document.getElementById("Namefield")
    let title = document.getElementById("title")
    
    LoginBtn.onclick = function() {
            Namefield.style.maxHeight = "0";
            title.innerHTML = "Entrar";
            InscrevaseBtn.classList.add("disable");
            InscrevaseBtn.classList.remove("active");
            LoginBtn.classList.remove("disable");
            LoginBtn.classList.add("active");
        };
        
        InscrevaseBtn.onclick = function() {
            Namefield.style.maxHeight = "60px";
            title.innerHTML = "Inscreva-se";
            InscrevaseBtn.classList.remove("disable");
            InscrevaseBtn.classList.add("active");
            LoginBtn.classList.remove("active");
            LoginBtn.classList.add("disable");
        };
</script>
</body>
</Html:5>