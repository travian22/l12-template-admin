<!-- Sidebar -->
<aside class="bg-white border-r border-gray-200 flex-shrink-0 fixed top-0 left-0 lg:sticky lg:top-0 z-30 overflow-y-auto h-screen lg:h-auto transition-all duration-200"
   x-cloak
   :class="{
       '-translate-x-full w-0': !$store.sidebar.open && window.innerWidth < 1024,
       'translate-x-0 w-64': $store.sidebar.open && window.innerWidth < 1024,
       'w-64': $store.sidebar.open && window.innerWidth >= 1024,
       'w-16': !$store.sidebar.open && window.innerWidth >= 1024
   }">

   <!-- Logo -->
   <div class="flex items-center h-16 px-6 border-b border-gray-200">
      <a href="{{ route('dashboard') }}" class="flex items-center">
         <div class="w-8 h-8 rounded-lg flex items-center justify-center overflow-hidden bg-white">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="object-contain w-full h-full" />
         </div>
      </a>
   </div>

   <!-- Navigation Menu -->
   <nav class="mt-6 pb-6" :class="$store.sidebar.open ? 'px-3' : 'px-2'">
      <div class="space-y-1">
         <!-- Dashboard -->
         <a href="{{ route('dashboard') }}" 
            class="sidebar-nav-item group flex items-center text-sm font-medium rounded-md transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'active bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
            :class="$store.sidebar.open ? 'px-3 py-2' : 'px-2 py-2 justify-center'">
            <i class="fas fa-tachometer-alt text-base" :class="$store.sidebar.open ? 'mr-3' : ''"></i>
            <span x-show="$store.sidebar.open" x-transition>Dashboard</span>
         </a>
      </div>

      <!-- REGION SECTION -->
      <div class="mt-6 pt-6 border-t border-gray-200">
         <div class="space-y-1">
            <!-- Region Heading -->
            <div class="px-3 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider"
               x-show="$store.sidebar.open" 
               x-transition>Region</div>

            <!-- Daerah Aliran Sungai -->
            <a href="{{ route('dashboard') }}" 
               class="sidebar-nav-item group flex items-center text-sm font-medium rounded-md transition-colors duration-200 {{ request()->routeIs('admin.region.river-basins.*') ? 'active bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
               :class="$store.sidebar.open ? 'px-3 py-2' : 'px-2 py-2 justify-center'">
               <i class="fas fa-water text-base" :class="$store.sidebar.open ? 'mr-3' : ''"></i>
               <span x-show="$store.sidebar.open" x-transition>Daerah Aliran Sungai</span>
            </a>

            <!-- Kabupaten -->
            <a href="{{ route('dashboard') }}" 
               class="sidebar-nav-item group flex items-center text-sm font-medium rounded-md transition-colors duration-200 {{ request()->routeIs('admin.region.kabupaten') ? 'active bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
               :class="$store.sidebar.open ? 'px-3 py-2' : 'px-2 py-2 justify-center'">
               <i class="fas fa-city text-base" :class="$store.sidebar.open ? 'mr-3' : ''"></i>
               <span x-show="$store.sidebar.open" x-transition>Kabupaten</span>
            </a>

            <!-- Kecamatan -->
            <a href="{{ route('dashboard') }}" 
               class="sidebar-nav-item group flex items-center text-sm font-medium rounded-md transition-colors duration-200 {{ request()->routeIs('admin.region.kecamatan') ? 'active bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}"
               :class="$store.sidebar.open ? 'px-3 py-2' : 'px-2 py-2 justify-center'">
               <i class="fas fa-layer-group text-base" :class="$store.sidebar.open ? 'mr-3' : ''"></i>
               <span x-show="$store.sidebar.open" x-transition>Kecamatan</span>
            </a>
         </div>
      </div>
   </nav>
</aside>