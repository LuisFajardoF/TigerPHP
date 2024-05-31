<nav class="bg-white border border-gray-200 dark:border-gray-700 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 shadow">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/index" class="flex items-center">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
        Tareas
      </span>
    </a>

    <div class="flex items-center">
      <button
        id="menu-toggle"
        type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
      >
      </button>
    </div>

    <div
      class="flex w-full md:block md:w-auto items-center"
      id="mobile-menu"
    >
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <?php if (Auth::check()): ?>
            <li>
                <a
                    href="/index"
                    class="nav-item"
                    aria-current="page"
                >
                    Inicio
            </a>
            </li>
        <?php endif ?>
        <li>
          <a
            href="contact"
            class="nav-item"
          >
            Contacto
          </a>
        </li>
        <li>
          <a
            href="about"
            class="nav-item"
          >
            Nosotros
          </a>
        </li>
        <li>
          <a
            href="services"
            class="nav-item"
          >
            Servicios
          </a>
        </li>
        <li>
            <?php if (Auth::check()): ?>
                <span><?php $_SESSION['name'] ?></span>
                <form action="/logout" method="post">
                    <button class="btn-action" >Salir</button>
                </form>
            <?php endif ?>
        </li>
      </ul>
    </div>

  </div>
</nav>

<script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  menuToggle.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
  });
</script>
