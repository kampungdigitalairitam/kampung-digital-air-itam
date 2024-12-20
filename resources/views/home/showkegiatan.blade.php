<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Kegiatan</title>
</head>

<body class="bg-gray-900 flex flex-col min-h-screen">

  <!--navbar-->
  <header class="bg-transparent absolute w-full z-50"> <!-- Tingkatkan z-index -->
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


        </div>
    </div>
</header>
<!--navbar end-->

  <!-- Kegiatan Section -->
  <section class="py-16 text-gray-100 mt-10"> <!-- Added mt-24 for spacing -->
    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
      <!-- Bagian Grid Gambar dan Konten -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Kiri: Gambar -->
        <div class="relative z-10">
          @foreach($kegiatan->content_images as $index => $image)
          <div class="relative h-64 sm:h-80 lg:h-full">
            <img
              src="{{ asset('storage/' . $image) }}"
              alt="Konten {{ $index + 1 }}"
              class="absolute inset-0 h-full w-full object-cover hover:scale-105 transition-transform duration-300"
            />
          </div>
          @endforeach
        </div>

        <!-- Kanan: Konten -->
        <div class="relative flex items-center bg-gray-100 p-8 sm:p-16 lg:p-24">
          <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"></span>

          <div>
            <h2 class="text-3xl font-bold sm:text-4xl text-black mb-4">
              {{ $kegiatan->title }}
            </h2>
            <div class="mt-4 space-y-6">
              @foreach($kegiatan->content_images as $index => $image)
              <div class="mt-4 p-4 text-black">
                <p class="text-gray-700">{{ $kegiatan->content_descriptions[$index] ?? 'Deskripsi konten tidak tersedia.' }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kegiatan Section End -->

 <!-- Footer Section -->
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
  <!-- Footer Section End -->



  <!-- Feather Icons Script -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>

</body>

</html>
