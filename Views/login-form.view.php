<?php include('partials/head.view.php') ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-30 w-auto" src="./../src/img/tiger-128x128.png" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Bienvenido Liceista!</h2>
    <h4 class="mt-3 text-center font-bold leading-9 tracking-tight text-gray-900">Bienvenido Liceista..!</h4>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/login" method="POST">
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electronico</label>
        <div class="flex rounded-md shadow-sm  ring-1 ring-inset  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:leading-6">
          <input type="text" name="email" id="email" autocomplete="email" class="block w-3/4 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm  ring-1 ring-inset  placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" placeholder="juan.cruz">
          <span class="flex select-none items-center pl-3 pr-3 text-gray-500 sm:text-sm">@bankito.com</span>
        </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Olvidó su contraseña?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" placeholder="Enter your password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-md font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar Sesion</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Registrarse</a>
    </p>
  </div>
</div>

<?php include 'partials/footer.view.php' ?>
