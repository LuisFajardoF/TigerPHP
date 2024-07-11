
<div class="min-h-full">
  <nav class="bg-slate-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="../../src/img/tiger-256x256.png" alt="Your Company">
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-slate-100 p-1 text-slate-900  focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-100">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{ dropdown: false}">
              <div>
                <button 
                  x-on:click="dropdown = !dropdown"
                  type="button" class="relative flex max-w-xs items-center rounded-full bg-slate-100 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-100" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div 
                x-show="dropdown"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-slate-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-slate-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi Perfil</a>
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

