<h1 class="nombre-pagina">recuperar password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>


<?php if($error) return; ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password", id="password" name="password" placeholder="Tu nuevo password" >
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password" >
</form>

<div class="acciones">
    <a href="/">Iniciar Sesion</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>