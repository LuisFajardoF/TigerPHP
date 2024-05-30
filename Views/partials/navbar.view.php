<nav>
    <?php if (Auth::check()): ?>
        <a href="/index">Inicio</a>
    <?php endif ?>
    <a href="contact">Contacto</a>
    <a href="about">Nosotros</a>
    <a href="services">Servicios</a>
    <?php if (Auth::check()): ?>
        <span><?php $_SESSION['name'] ?></span>
        <form style="display: inline;" action="/logout" method="post">
            <button style="background-color:transparent; border:0px; font-size: 16px;">Salir</button>
        </form>
    <?php endif ?>
</nav>