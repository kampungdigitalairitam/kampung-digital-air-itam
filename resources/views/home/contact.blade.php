<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Beranda</title>
</head>
<body class="bg-gray-900">

    <!--navbar-->
    <header class="bg-transparent absolute w-full z-50"> <!-- Tingkatkan z-index -->
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <a href="{{ route('admin.login') }}">
                        <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                    </a>

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
                                <a class="text-white transition hover:text-gray-300" href="/pendaftaranpartner"> Gabung Media Partner </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">

                    </div>
                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

      <!--navbar end-->

      <!--Main Content-->
      <div class="flex flex-col items-center justify-center min-h-screen bg-gray-900 p-6">
        <h1 class="text-3xl font-extrabold text-white mb-6">Contact Us</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
            <!-- WhatsApp -->
            <a href="https://wa.me/your-number" target="_blank" class="flex flex-col items-center">
                <div class="bg-green-500 p-4 rounded-full shadow-lg">
                    <img src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png" alt="WhatsApp">
                </div>
                <p class="text-white mt-2">WhatsApp</p>
            </a>
            <!-- Instagram -->
            <a href="https://instagram.com/your-profile" target="_blank" class="flex flex-col items-center">
                <div class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-4 rounded-full shadow-lg">
                    <img src="https://img.icons8.com/ios-filled/50/FFFFFF/instagram-new.png" alt="Instagram">
                </div>
                <p class="text-white mt-2">Instagram</p>
            </a>
            <!-- Facebook -->
            <a href="https://facebook.com/your-profile" target="_blank" class="flex flex-col items-center">
                <div class="bg-blue-600 p-4 rounded-full shadow-lg">
                    <img src="https://img.icons8.com/ios-filled/50/FFFFFF/facebook-new.png" alt="Facebook">
                </div>
                <p class="text-white mt-2">Facebook</p>
            </a>
            <!-- Email -->
            <a href="mailto:your-email@example.com" target="_blank" class="flex flex-col items-center">
                <div class="bg-gray-700 p-4 rounded-full shadow-lg">
                    <img src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png" alt="Email">
                </div>
                <p class="text-white mt-2">Email</p>
            </a>
            <!-- YouTube -->
            <a href="https://youtube.com/your-channel" target="_blank" class="flex flex-col items-center">
                <div class="bg-red-600 p-4 rounded-full shadow-lg">
                    <img src="https://img.icons8.com/ios-filled/50/FFFFFF/youtube-play.png" alt="YouTube">
                </div>
                <p class="text-white mt-2">YouTube</p>
            </a>
        </div>
    </div>



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




      <!--Main Content end-->
</body>
</html>
