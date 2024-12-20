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

    <!--Main Content-->
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-900 p-6 "> <!-- Added margin-top to bring the content closer to navbar -->
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
            <a href="mailto:kampungdigitalairitam@gmail.com" target="_blank" class="flex flex-col items-center">
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
