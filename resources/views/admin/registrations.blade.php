<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin - Daftar Pendaftar</title>
    <style>
        /* Flexbox untuk memastikan footer tetap di bawah */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1; /* Membuat konten utama mengisi ruang yang tersisa */
        }
    </style>
</head>
<body class="bg-blue-900 text-white">
    <main class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 text-center">List Pendaftar</h1>
        <a href="{{ route('admin.dashboard') }}"
        class="inline-block mt-4 mb-3 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
         Back
     </a>
        <table class="min-w-full border border-gray-200 bg-white text-black">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Pendaftar</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($registrations as $index => $registration)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $registration->full_name }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a
                                href="{{ route('admin.registrations.show', $registration->id) }}"
                                class="text-blue-500 underline">Lihat Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="border px-4 py-2 text-center">Tidak ada data pendaftar saat ini.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>

    <!-- Footer Section -->
    <footer class="bg-sky-900 text-center py-4 text-gray-400">
        <p>&copy;KAMPUNG DIGITAL AIR ITAM<br>#PALIDIGITAL #PALICAKAPDIGITAL</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="" class="hover:text-white">
                <i data-feather="instagram"></i>
            </a>
            <a href="" class="hover:text-white">
                <i data-feather="youtube"></i>
            </a>
            <a href="" class="hover:text-white">
                <i data-feather="facebook"></i>
            </a>
            <a href="" class="hover:text-white">
                <i data-feather="mail"></i>
            </a>
            <a href="" class="hover:text-white">
                <i data-feather="phone"></i>
            </a>
        </div>
    </footer>

    <!-- Feather Icons Script -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
