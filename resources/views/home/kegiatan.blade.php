<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Kegiatan</title>
</head>
<body class="bg-gray-900 flex flex-col min-h-screen">

    <!--navbar-->
    <header class="bg-transparent absolute w-full z-50">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                </div>

                <div class="md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center justify-center space-x-3 text-xs sm:text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/">Home</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.kegiatan') }}">Kegiatan</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.program') }}">Program</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/pendaftaranpartner">Gabung Media Partner</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.contact') }}">Contact</a>
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
        <div class="text-center mb-16 mt-20">
            <h2 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                KEGIATAN KAMPUNG DIGITAL AIR ITAM
            </h2>
        </div>
        <!-- Main Content -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-10 px-6">
            @foreach($kegiatans as $kegiatan)
            <article class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img
                    alt="Thumbnail"
                    src="{{ asset('storage/' . $kegiatan->tumbnail_image) }}"
                    class="h-56 w-full object-cover transition-transform duration-300 hover:scale-105"
                />
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300">
                        {{ $kegiatan->title }}
                    </h3>
                    <p class="mt-3 text-sm text-gray-600 line-clamp-3">
                        {{ Str::limit(strip_tags($kegiatan->description), 100, '...') }}
                    </p>
                    <a href="{{ route('home.showkegiatan', $kegiatan) }}" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800 transition-colors duration-300">
                        Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 4.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 10H3a1 1 0 110-2h12.586l-3.293-3.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>


    <footer class="bg-sky-900 text-center py-4 text-gray-400">
        <p>&copy;KAMPUNG DIGITAL AIR ITAM<br>#PALIDIGITAL #PALICAKAPDIGITAL</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="https://www.instagram.com/kampungdigitalairitam?igsh=MTdhY3ZlMHJjNHZsYw==" class="hover:text-white">
                <i data-feather="instagram"></i>
            </a>
            <a href="https://youtube.com/@kampungdigitalairitam?si=wLeWlOOCPbk_KArU" class="hover:text-white">
                <i data-feather="youtube"></i>
            </a>
            <a href="https://facebook.com/groups/538723418458003/" class="hover:text-white">
                <i data-feather="facebook"></i>
            </a>

            <a href="https://wa.me/+62 821-8445-8290" class="hover:text-white">
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
