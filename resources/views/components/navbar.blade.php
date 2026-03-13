  <nav x-data="{ 
      activeSection: 'home',
      init() {
          this.updateActiveSection();
          window.addEventListener('scroll', () => this.updateActiveSection(), { passive: true });
      },
      updateActiveSection() {
          const sections = ['home', 'blog', 'about', 'contact'];
          const scrollPosition = window.scrollY + 100;

          sections.forEach(section => {
              const el = document.getElementById(section);
              if (el) {
                  const top = el.offsetTop;
                  const height = el.offsetHeight;
                  if (scrollPosition >= top && scrollPosition < top + height) {
                      this.activeSection = section;
                  }
              }
          });
      }
  }" class="bg-primary-950/90 backdrop-blur-md sticky top-0 z-50 shadow-lg border-b border-primary-800/50">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                  <div class="shrink-0">
                      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=blue&shade=500"
                          alt="Ibnu" class="size-8" />
                  </div>
                  <div class="hidden md:block">
                      <div class="ml-10 flex items-baseline space-x-4">
                          <x-nav-link href="/#home" 
                              x-bind:class="activeSection === 'home' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800 hover:text-white'"
                              @click="activeSection = 'home'">Home</x-nav-link>
                          
                          <x-nav-link href="/#blog" 
                              x-bind:class="activeSection === 'blog' || {{ request()->is('posts*') ? 'true' : 'false' }} ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800 hover:text-white'"
                              @click="activeSection = 'blog'">Blog</x-nav-link>
                          
                          <x-nav-link href="/#about" 
                              x-bind:class="activeSection === 'about' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800 hover:text-white'"
                              @click="activeSection = 'about'">About</x-nav-link>
                          
                          <x-nav-link href="/#contact" 
                              x-bind:class="activeSection === 'contact' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800 hover:text-white'"
                              @click="activeSection = 'contact'">Contact</x-nav-link>
                      </div>
                  </div>
              </div>
              <div class="hidden md:block">
                  <div class="ml-4 flex items-center md:ml-6">

                      <!-- Profile dropdown -->
                      <div class="relative ml-3">
                          <button @click="profileMenuOpen = !profileMenuOpen" type="button"
                              class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                              id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="absolute -inset-1.5"></span>
                              <span class="sr-only">Open user menu</span>
                              <img src="{{ asset('img/kelinci.jpg') }}" alt="Profile"
                                  class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
                          </button>

                          <!-- Profile dropdown menu -->
                          <div x-show="profileMenuOpen" @click.away="profileMenuOpen = false"
                              x-transition:enter="transition ease-out duration-100"
                              x-transition:enter-start="transform opacity-0 scale-95"
                              x-transition:enter-end="transform opacity-100 scale-100"
                              x-transition:leave="transition ease-in duration-75"
                              x-transition:leave-start="transform opacity-100 scale-100"
                              x-transition:leave-end="transform opacity-0 scale-95"
                              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg ring-1 ring-black/5 outline-1 -outline-offset-1 outline-white/10"
                              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                              tabindex="-1" style="display: none;">
                              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5"
                                  role="menuitem" tabindex="-1">Your profile</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5"
                                  role="menuitem" tabindex="-1">Settings</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5"
                                  role="menuitem" tabindex="-1">Sign out</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                  <!-- Mobile menu button -->
                  <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                      class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500"
                      aria-controls="mobile-menu" :aria-expanded="mobileMenuOpen.toString()">
                      <span class="absolute -inset-0.5"></span>
                      <span class="sr-only">Open main menu</span>
                      <!-- Icon when menu is closed -->
                      <svg x-show="!mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                      <!-- Icon when menu is open -->
                      <svg x-show="mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6" style="display: none;">
                          <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                  </button>
              </div>
          </div>
      </div>

      <!-- Mobile menu -->
      <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 -translate-y-1" class="md:hidden" id="mobile-menu" style="display: none;">
          <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
              <x-nav-link href="/#home" :mobile="true" 
                  x-bind:class="activeSection === 'home' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800'"
                  @click="mobileMenuOpen = false; activeSection = 'home'">Home</x-nav-link>
              
              <x-nav-link href="/#blog" :mobile="true" 
                  x-bind:class="activeSection === 'blog' || {{ request()->is('posts*') ? 'true' : 'false' }} ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800'"
                  @click="mobileMenuOpen = false; activeSection = 'blog'">Blog</x-nav-link>
              
              <x-nav-link href="/#about" :mobile="true" 
                  x-bind:class="activeSection === 'about' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800'"
                  @click="mobileMenuOpen = false; activeSection = 'about'">About</x-nav-link>
              
              <x-nav-link href="/#contact" :mobile="true" 
                  x-bind:class="activeSection === 'contact' ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800'"
                  @click="mobileMenuOpen = false; activeSection = 'contact'">Contact</x-nav-link>
          </div>
          <div class="border-t border-white/10 pt-4 pb-3">
              <div class="flex items-center px-5">
                  <div class="shrink-0">
                      <img src="{{ asset('img/kelinci.jpg') }}"
                          alt="Profile" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
                  </div>
                  <div class="ml-3 min-w-0 flex-1">
                      <div class="text-base/5 font-medium text-white truncate">Ibnu</div>
                      <div class="text-sm font-medium text-gray-400 truncate">ibnu@example.com</div>
                  </div>
              </div>
              <div class="mt-3 space-y-1 px-2">
                  <a href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your
                      profile</a>
                  <a href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
                  <a href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign
                      out</a>
              </div>
          </div>
      </div>
  </nav>
