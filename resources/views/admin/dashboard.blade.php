<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Media Partner</title>
</head>
<body class="bg-gray-900">

  <!-- Layout Wrapper -->
  <div class="flex">

    <!-- Sidebar -->
    <div class="h-screen w-16 flex flex-col justify-between border-e bg-white">
      <div>
        <!-- Logo -->
        <div class="flex items-center justify-center py-4">
          <img
            src="{{ asset('images/logo_komunitas/kdai-fix.png') }}"
            alt="Logo"
            class="w-10 h-10 rounded-lg"
          />
        </div>

        <!-- Navigation -->
        <div class="border-t border-gray-100">
          <div class="px-2">
            <!-- General -->
            <div class="py-4">
              <a
                href="#"
                class="group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>
                <span
                  class="invisible absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                >
                  General
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 p-6">
      <h1 class="text-2xl font-bold text-gray-800">Media Partner Dashboard</h1>
      <p class="mt-2 text-gray-600">Selamat datang di halaman Media Partner.</p>

      <!-- Section -->
      <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800">Kelola Media</h2>
        <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Pendaftaran Kdai</h3>
            <p class="mt-1 text-sm text-gray-600">List Pendaftar</p>
            <a
              href="{{ route('admin.registrations') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Kegiatan</h3>
            <p class="mt-1 text-sm text-gray-600">Tambah Kegiatan</p>
            <a
              href="{{ route('tambahkegiatan') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Program</h3>
            <p class="mt-1 text-sm text-gray-600">Tambah Program</p>
            <a
              href="{{ route('admin.tambahberita') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Nama Media Partner</h3>
            <p class="mt-1 text-sm text-gray-600">List Media Partner</p>
            <a
              href="{{ route('admin.mediapartner') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Kegiatan</h3>
            <p class="mt-1 text-sm text-gray-600">Kelola Kegiatan</p>
            <a
              href="{{ route('admin.kelolakegiatan') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>
          <!-- Card -->
          <div class="rounded-lg border bg-white p-4 shadow">
            <h3 class="text-lg font-medium text-gray-800">Program</h3>
            <p class="mt-1 text-sm text-gray-600">Kelola Program</p>
            <a
              href="{{ route('admin.kelolaberita') }}"
              class="mt-4 inline-block rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
            >
              Lihat Detail
            </a>
          </div>



          <!-- Tambah lebih banyak card di sini jika diperlukan -->
        </div>
      </div>
    </div>
  </div>

</body>
</html>
