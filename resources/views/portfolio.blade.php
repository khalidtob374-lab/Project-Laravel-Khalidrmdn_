<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>
<body class="h-full">

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/" class="rounded-md px-3 py-3 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
              <a href="/about" class="rounded-md px-3 py-3 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
              <a href="/portfolio" aria-current="page" class="rounded-md bg-gray-900 px-3 py-3 text-sm font-medium text-white">Portfolio</a>
              <a href="/gallery" class="rounded-md px-3 py-3 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Moments</a>
              <a href="/services" class="rounded-md px-3 py-3 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Services</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
              </button>

              <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
        <a href="/portfolio" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Portfolio</a>
        <a href="/gallery" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Moments</a>
        <a href="/services" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Services</a>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>

  <header class="relative bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Portfolio</h1>
    </div>
  </header>

  <main>
    <!-- Konten Portfolio -->
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        
        <!-- Judul Besar -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-indigo-950">Portfolio Saya</h2>
            <p class="text-gray-500 mt-2 text-lg">Kumpulan project yang telah saya kerjakan sebagai web developer</p>
        </div>

        <!-- Grid Portfolio Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" alt="Project 1" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-indigo-950 text-white text-xs px-3 py-1 rounded-full">Selesai</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Sistem Manajemen Data</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Aplikasi CRUD untuk data mahasiswa dengan fitur login, registrasi, dan export data menggunakan Laravel 11.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Laravel 11</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Tailwind CSS</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">MySQL</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=600&auto=format&fit=crop" alt="Project 2" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-yellow-500 text-white text-xs px-3 py-1 rounded-full">Progress</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Company Profile</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Landing page profesional untuk perusahaan dengan desain modern, responsive, dan SEO friendly.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">HTML5</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">CSS3</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop" alt="Project 3" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-indigo-950 text-white text-xs px-3 py-1 rounded-full">Selesai</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Sistem Pemesanan Tiket</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Aplikasi pemesanan tiket bioskop sederhana dengan fitur login, registrasi, dan pembayaran dummy.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Bootstrap 5</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">AJAX</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?q=80&w=600&auto=format&fit=crop" alt="Project 4" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-indigo-950 text-white text-xs px-3 py-1 rounded-full">Selesai</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Kalkulator Sederhana</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Aplikasi kalkulator berbasis web dengan fitur penjumlahan, pengurangan, perkalian, dan pembagian.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">HTML</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">CSS</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=600&auto=format&fit=crop" alt="Project 5" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-yellow-500 text-white text-xs px-3 py-1 rounded-full">Progress</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Dashboard Admin</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Dashboard admin dengan chart data, manajemen user, dan sistem notifikasi realtime.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Chart.js</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Tailwind</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600&auto=format&fit=crop" alt="Project 6" class="w-full h-52 object-cover">
                    <div class="absolute top-3 right-3 bg-indigo-950 text-white text-xs px-3 py-1 rounded-full">Selesai</div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-800 text-xl mb-2">Personal Website</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-3">Website portofolio pribadi untuk menampilkan project, pengalaman, dan kontak dengan desain modern.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Tailwind</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full">Responsive</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="#" class="text-indigo-950 font-semibold text-sm hover:underline">Lihat Detail →</a>
                        <a href="#" class="text-gray-500 font-semibold text-sm hover:text-indigo-950">Demo</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tombol Lihat Semua -->
        <div class="flex justify-center mt-12">
            <a href="#" class="rounded-md bg-indigo-950 px-8 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-200">
                Lihat Semua Project
            </a>
        </div>

    </div>
  </main>
</div>

</body>
</html>