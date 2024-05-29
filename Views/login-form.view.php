
<?php require('partials/head.view.php') ?>

<h1>Iniciar Sesion</h1>

<form action="/login" method="post">
    <div>
        <input style="margin-top: 10px;" type="text" name="email" placeholder="Usuario">
    </div>
    <div>
        <input style="margin-top: 10px;" type="password" name="password" placeholder="Contraseña">
    </div>
    <div>
        <button style="margin-top: 10px;" type="submit">Entrar</button>
    </div>
</form>

<?php require('partials/footer.view.php') ?>