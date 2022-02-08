<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu Contraseña</p>
<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="E-mail">
    </div>
    <input 
        type="submit" 
        value="Enviar Codigo de Recuperacion" 
        class="boton"
    >
</form>

<div class="acciones">
    <a href="/">Iniciar Sesion</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>
