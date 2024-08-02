<?php include('partials/head.view.php') ?>
<?php 
  $email = $_SESSION['email'];
  include('partials/navbar.view.php') 
?>


<div class="flex min-h-screen flex-row bg-gray-100 text-gray-800">
  <?php include('partials/sidebar.view.php') ?>
  <main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
    <div class="flex h-full items-center justify-center bg-white text-center text-xl font-bold shadow-md py-4">
      <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Crear Usuario</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Este formulario sirve para registrar un nuevo usuario en el sistema.</p>
        </div>
        <form action="users/create" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-18">
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
              <label for="first_name" class="block text-sm font-semibold leading-6 text-black">Nombres</label>
              <div class="mt-2.5">
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div>
              <label for="last_name" class="block text-sm font-semibold leading-6 text-black">Apellidos</label>
              <div class="mt-2.5">
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="role" class="block text-sm font-semibold leading-6 text-black">Rol de Usuario</label>
                <div class="mt-2.5">
                  <select id="role" name="role" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    <option value="CAJERO">CAJERO</option>
                    <option value="ASESOR">ASESOR</option>
                    <option value="GERENTE">GERENTE</option>
                  </select>
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm font-semibold leading-6 text-black">Email</label>
              <div class="mt-2.5">
                <div class="flex rounded-md shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:leading-6">
                  <input type="text" name="email" id="email" autocomplete="email" class="block w-3/4 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm  ring-1 ring-inset  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6" placeholder="juan.cruz">
                  <span class="flex select-none items-center pl-3 pr-3 text-gray-500 sm:text-sm">@bankito.com</span>
                </div>
              </div>
              </div>
            <div class="sm:col-span-2">
              <label for="password" class="block text-sm font-semibold leading-6 text-black">Contraseña</label>
              <div class="mt-2.5">
                <input type="password" name="password" id="password" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
              </div>
            </div>  
          </div>
          <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>