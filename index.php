<?php
session_start();
include ('auth.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y Acceso de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .clickable-span {
            color: blue;
            font-weight: bold;
            text-decoration: underline;
            cursor: pointer; /* Cambia el cursor a una mano */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Registro y Acceso de Usuario</h1>
        <div class="div" id="regis">
            <h2>Registro de Usuario</h2>
            <form method="post" action="#">
                <input type="email" name="correo" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="text" name="dni" placeholder="DNI" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="tel" name="telefono" placeholder="Teléfono" required>
                <input type="submit" name="register" value="Registrar">
            </form>
            <span class="clickable-span" onclick="showForm1()">Ya estas registrado?</span>
        </div>
        <div class="div" id="formLog">
            <h2>Iniciar Sesión</h2>
                <form method="post" action="#">
                    <input type="text" name="login_username" placeholder="Usuario" required>
                    <input type="password" name="login_password" placeholder="Contraseña" required>
                    <input type="submit" name="login" value="Iniciar Sesión">
                </form>
            <span class="clickable-span" onclick="showForm()">Regístrate aquí</span>
        </div>
            
    </div>
    <script>
    // Función para mostrar el formulario de registro
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("regis").style.display = "none"; 
    });
        function showForm() {
            var form = document.getElementById("regis");
            if (form.style.display === "none" || form.style.display === "") {
            form.style.display = "block"; // Muestra el formulario
        } else {
            form.style.display = "none"; // Oculta el formulario
        }
        }
        function showForm1() {
            var form = document.getElementById("formLog");
            if (form.style.display === "none" || form.style.display === "") {
            form.style.display = "block"; // Muestra el formulario
        } else {
            form.style.display = "none"; // Oculta el formulario
        }
        }
    </script>
</body>
</html>
