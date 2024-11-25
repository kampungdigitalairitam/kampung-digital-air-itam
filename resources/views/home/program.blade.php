
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Program</title>
</head>
<body class="bg-gray-900 flex flex-col min-h-screen">

    <!--navbar-->
    <header class="bg-transparent absolute w-full z-50">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/"> Home </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.kegiatan') }}"> Kegiatan </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.program') }}"> Program </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Tentang Kami </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/pendaftaranpartner"> Gabung Media Partner </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">

                </div>
            </div>
        </div>
    </header>
    <!--navbar end-->

    <div class="flex-grow">
        <!-- Main Content -->
        <div class="mt-20 px-4">
            <!-- Judul Section -->
        <div class="text-center mb-16">
            <h2 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">PROGRAM KAMPUNG DIGITAL AIR ITAM</h2>
        </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($beritas as $berita)
                <article class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto"
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $berita->judul }}
                        </h2>
                        <p class="text-gray-600 text-sm mt-2">
                            {{ $berita->konten }}
                        </p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>


 <!-- Footer Section -->
 <footer class="bg-sky-900 text-center py-4 text-gray-400 mt-10">
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
