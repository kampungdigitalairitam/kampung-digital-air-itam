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

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/"> Home </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Kegiatan </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Program </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Tentang Kami </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/pendaftaran"> Gabung Media Partner </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow hover:bg-teal-500 focus:outline-none focus:ring active:bg-teal-700" href="{{ route('admin.login') }}">
                            Login
                        </a>
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
      <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->
<section class="bg-digital-pattern text-white">
    <!-- Pola Animasi Meteor -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Banyak meteor -->
        @for ($i = 0; $i < 50; $i++)
            <div class="meteor" style="top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 2000) / 1000 }}s;"></div>
        @endfor
    </div>

    <!-- Konten Utama -->
    <div class="relative z-10 mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1
    class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl animate-gradient"
>
    WELCOME TO

    <span class="sm:block"> KAMPUNG DIGITAL AIR ITAM</span>
</h1>


            <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                numquam ea!
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="https://docs.google.com/forms/d/e/1FAIpQLSfsNq_Ql50nPjCscyv6mL6Sr9ApHfP7xKXvhR86ab6fQ2uZtg/viewform">
                    Gabung Sekarang!
                </a>
            </div>
        </div>
    </div>
</section>



  <!-- Tentang Kami Section -->
  <section class="py-16 px-4 bg-gray-900">
    <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
        <div class="md:w-1/2">
            <img src="{{ asset('images/fotobersama.jpg') }}" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 text-amber-300">Tentang <span class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text font-extrabold text-transparent">Kampung Digital Air Itam</span></h2>
            <p class="text-sm md:text-lg text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, nisi deleniti facilis voluptates sequi praesentium quibusdam sit perferendis itaque quia corporis quo molestiae. Quae tempore suscipit at corrupti, animi veritatis!</p>
        </div>
    </div>
</section>

<!--Visi Dan Misi-->

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-900 p-6 my-auto">
    <div class="text-center">
        <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">VISI & MISI</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <!-- Bagian Visi -->
            <div class="bg-blue-950 shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-amber-500 mb-4">Visi</h2>
                <p class="text-amber-600">
                    Mengembangkan Dan Memberdayakan Seluruh Talenta Digital Kabupaten PALI untuk Mengakselerasi Percepatan Transformasi Digital Menuju "Air Itam Ready For Sillicon PALI".
                </p>
            </div>
            <!-- Bagian Misi -->
            <div class="bg-blue-950 shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-amber-500 mb-4">Misi</h2>
                <ul class="list-disc pl-5 text-amber-600">
                    <li>Mengembangkan soft skill & hard skill talenta digital kabupaten PALI.</li>
                    <li>Menjadi pusat pembelajaran Teknologi dan Edukasi untuk seluruh kalangan.</li>
                    <li>Bergandengan tangan dengan seluruh komunitas Kabupaten PALI untuk berkembang bersama dibidang Pendidikan, Kebudayaan, Pariwisata dan Ekonomi Kreatif.</li>
                    <li>Menciptakan Ekosistem digital dengan Sumber Daya yang unggul, kreatif, inovatif dan kolaboratif.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="bg-gray-900 py-12">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Judul Section -->
        <div class="text-center mb-16">
            <h2 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">Ekosistem Support</h2>
        </div>

        <!-- Baris Pertama: 6 Logo -->
        <div class="grid grid-cols-6 gap-6 items-center max-w-6xl mx-auto">
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/JPRINT.png') }}" alt="Logo Komunitas 1" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
            <img src="{{ asset('images/logo_komunitas/reseipali.png')}}" alt="Logo Komunitas 2" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/pance_kreative-removebg-preview.png') }}" alt="Logo Komunitas 3" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/kasimo.png') }}" alt="Logo Komunitas 4" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/kampung inggris tempirai.png') }}" alt="Logo Komunitas 5" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/palimengajar.png') }}" alt="Logo Komunitas 6" class="h-50 w-auto object-contain">
            </div>
        </div>

        <!-- Baris Kedua: 5 Logo -->
        <div class="grid grid-cols-5 gap-6 items-center justify-center mt-8 max-w-5xl mx-auto">
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/Al_Fatih_Coding_1-removebg-preview (1).png') }}" alt="Logo Komunitas 7" class="h-50 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/logo hitspali.png') }}" alt="Logo Komunitas 8" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src=" {{ asset('images/logo_komunitas/PRAGIDPALI.png') }}" alt="Logo Komunitas 9" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/logo_komunitas/logo_pali_update.jpg') }}" alt="Logo Komunitas 10" class="h-20 w-auto object-contain">
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/kdai-fix.png') }}" alt="Logo Komunitas 11" class="h-20 w-auto object-contain">
            </div>
        </div>
    </div>
</section>


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
