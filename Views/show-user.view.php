<?php include('partials/head.view.php') ?>
<?php 
  $email = $_SESSION['email'];
  include('partials/navbar.view.php') 
?>

<main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
    <div class="flex h-full items-center justify-center bg-white text-center text-xl font-bold shadow-md py-4">
        <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Perfil de Usuario</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Este formulario sirve para ver la información de un usuario en el sistema.</p>
            </div>
            <div class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="username" class="block text-sm font-semibold leading-6 text-black">Nombre de usuario</label>
                        <div class="mt-2.5">
                            <input type="text" name="username" id="username" disabled value="<?= $user->username ?>" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="first_name" class="block text-sm font-semibold leading-6 text-black">Nombres</label>
                        <div class="mt-2.5">
                            <input type="text" name="first_name" id="first_name" disabled value="<?= $user->first_name ?>" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-semibold leading-6 text-black">Apellidos</label>
                        <div class="mt-2.5">
                            <input type="text" name="last_name" id="last_name" disabled autocomplete="family-name" value="<?= $user->last_name ?>" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="role" class="block text-sm font-semibold leading-6 text-black">Rol de Usuario</label>
                        <div class="mt-2.5">
                            <select id="role" name="role" disabled class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                                <option value="ADMIN" <?= !strcmp($user->role, 'ADMIN') == 0?:'selected' ?>>ADMIN</option>
                                <option value="CAJERO" <?= !strcmp($user->role, 'CAJERO') == 0?: 'selected' ?>>CAJERO</option>
                                <option value="ASESOR" <?= !strcmp($user->role, 'ASESOR') == 0?: 'selected' ?>>ASESOR</option>
                                <option value="GERENTE" <?= !strcmp($user->role, 'GERENTE') == 0?: 'selected' ?>>GERENTE</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-black">Email</label>
                        <div class="mt-2.5">
                        <div class="mt-2.5">
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" value="<?= $user->email ?>" disabled class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="button" onclick="location.href='/index'" 
                    class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Volver
                </button>
            </div>
        </div>
    </div>
</main>

<?php include('partials/footer.view.php') ?>