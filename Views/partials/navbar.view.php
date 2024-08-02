
<div class="min-h-full">
  <nav class="bg-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="../../src/img/tiger-256x256.png" alt="Your Company">
          </div>
          <div class="px-4 flex items-center">
            <span class="font-mono text-2xl font-bold"> Tiger <span class="text-indigo-600">PHP</span> </span>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <div class="mr-15 flex items-center text-sm text-gray-500">
                <?= $email ?>
              </div>
            </div>

            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{ dropdown: false}">
              <div>
                <button 
                  x-on:click="dropdown = !dropdown"
                  type="button" class="relative flex max-w-xs items-center rounded-full bg-slate-100 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-100" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <h1 class="bx bx-user h-8 w-8 py-1 rounded-full"></h1>
                </button>
              </div>
              <div 
                x-show="dropdown"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-slate-100", Not Active: "" -->
                <a href="/show-user" class="block px-4 py-2 text-sm text-slate-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-slate-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Configuración</a>
                <form action="/logout" method="post">
                  <input type="submit" class="block px-4 py-2 text-sm text-slate-900" role="menuitem" tabindex="-1" value="Cerrar Sesión">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>

