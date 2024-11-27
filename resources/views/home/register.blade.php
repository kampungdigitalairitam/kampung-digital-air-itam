
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Media Partner</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body class="bg-gray-900">

<!-- Navbar -->
<header class="bg-transparent absolute w-full z-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="Logo" class="h-8">
      </div>
      <nav class="hidden md:flex space-x-6">
        <a class="text-white hover:text-gray-300" href="/">Home</a>
        <a class="text-white hover:text-gray-300" href="{{ route('home.kegiatan') }}">Kegiatan</a>
        <a class="text-white hover:text-gray-300" href="{{ route('home.program') }}">Program</a>
        <a class="text-white hover:text-gray-300" href="#">Tentang Kami</a>
        <a class="text-white hover:text-gray-300" href="/pendaftaranpartner">Gabung Media Partner</a>
        <a class="text-white hover:text-gray-300" href="#">Contact</a>
      </nav>
      <div class="block md:hidden">
        <button class="p-2 rounded bg-gray-100 text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<section class="bg-gradient-to-r from-gray-800 via-gray-900 to-black text-white py-32">
  <div class="container mx-auto">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-4xl font-bold mb-6">Gabung Dengan Komunitas Kami!!!</h2>
      <p class="text-lg text-gray-300 mb-8">Silakan isi form di bawah ini untuk bergabung.</p>
      <form action="{{ route('register.store') }}" method="POST" class="p-8 bg-gray-800 rounded-lg shadow-lg space-y-6">
        @csrf
        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-white mb-1">Email</label>
          <input type="email" name="email" id="email" required
                 class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Kebijakan Privasi -->
        <div>
            <label for="privacy_policy" class="block text-sm font-medium text-white">Kampung Digital Air Itam PALI <br>danya Kebijakan Privasi ini adalah sebuah komitmen penting dari komunitas ini untuk menghargai dan melindungi setiap data atau informasi pribadi Anggota.
                Dengan mengisi formulir registrasi keanggotaan Kampung Digital Air Itam PALI, Anggota menyatakan bahwa setiap data Anggota merupakan data yang benar dan sah, serta Anggota Resmi memberikan persetujuan kepada Kampung Digital Air Itam-PALI untuk memperoleh, mengumpulkan, menyimpan, mengelola dan mempergunakan data tersebut untuk keperluan komunikasi, penyediaan informasi, dan layanan terkait kegiatan komunitas Kampung Digital Air Itam-PALI.
                Apabila Anggota berkeberatan, maka Kami menyarankan untuk tidak melanjutkan pengisian formulir registrasi ini.
                Terima kasih. Salam Serepat Serasan<br><span class="font-bold">Setuju Kebijakan Privasi</span></label>
            <select name="privacy_policy" id="privacy_policy" required
                class="w-full px-4 py-2 mt-5 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <!-- Nama Lengkap -->
        <div>
          <label for="full_name" class="block text-sm font-medium text-white mb-1">Nama Lengkap</label>
          <input type="text" name="full_name" id="full_name" required
                 class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Asal Kecamatan/Alamat -->
        <div>
            <label for="district_origin" class="block text-sm font-medium text-white">Asal Kecamatan/Alamat</label>
            <input type="text" name="district_origin" id="district_origin" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Domisili Saat Ini -->
        <div>
            <label for="current_residence" class="block text-sm font-medium text-white">Domisili Saat Ini</label>
            <input type="text" name="current_residence" id="current_residence" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Alamat Lengkap -->
        <div>
            <label for="full_address" class="block text-sm font-medium text-white">Alamat Lengkap</label>
            <textarea name="full_address" id="full_address" rows="3" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        </div>

        <!-- Apakah Sudah Bekerja -->
        <div>
            <label for="employment_status" class="block text-sm font-medium text-white">Apakah Sudah Bekerja?</label>
            <select name="employment_status" id="employment_status" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="yes">Ya</option>
                <option value="no_studying">Tidak, tapi saya sedang kuliah</option>
                <option value="no_job_seeking">Tidak, saya sedang mencari pekerjaan</option>
            </select>
        </div>

        <!-- Nama Kampus/Sekolah Terakhir -->
        <div>
            <label for="last_school" class="block text-sm font-medium text-white">Nama Kampus/Sekolah Terakhir</label>
            <input type="text" name="last_school" id="last_school"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Jurusan Sekolah/Kuliah -->
        <div>
            <label for="major" class="block text-sm font-medium text-white">Jurusan Sekolah/Kuliah</label>
            <input type="text" name="major" id="major"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Kelas/Semester -->
        <div>
            <label for="class_or_semester" class="block text-sm font-medium text-white">Kelas/Semester</label>
            <input type="text" name="class_or_semester" id="class_or_semester"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Kontak WhatsApp -->
        <div>
            <label for="whatsapp_contact" class="block text-sm font-medium text-white">Kontak WhatsApp</label>
            <input type="text" name="whatsapp_contact" id="whatsapp_contact" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Kontak Telegram -->
        <div>
            <label for="telegram_contact" class="block text-sm font-medium text-white">Kontak Telegram</label>
            <input type="text" name="telegram_contact" id="telegram_contact"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Instagram -->
        <div>
            <label for="instagram" class="block text-sm font-medium text-white">Instagram</label>
            <input type="text" name="instagram" id="instagram"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Motivasi -->
        <div>
            <label for="motivation" class="block text-sm font-medium text-white">Motivasi</label>
            <textarea name="motivation" id="motivation" rows="4" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        </div>

        <!-- Mengetahui Komunitas dari -->
        <div>
            <label for="referral_source" class="block text-sm font-medium text-white">Mengetahui Komunitas dari</label>
            <select name="referral_source" id="referral_source" required
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="social_media">Media Sosial</option>
                <option value="friend">Teman</option>
                <option value="event">Event</option>
                <option value="ads">Iklan</option>
                <option value="website">Website</option>
                <option value="other">Lainnya</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="w-full py-2 bg-blue-600 hover:bg-blue-700 rounded-md text-white font-semibold transition">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-6">
  <div class="container mx-auto text-center text-gray-400">
    <p>&copy; 2024 Kampung Digital Air Itam PALI<br>#PALIDIGITAL #PALICAKAPDIGITAL</p>
    <div class="flex justify-center space-x-4 mt-4">
      <a href="#" class="hover:text-white"><i data-feather="instagram"></i></a>
      <a href="#" class="hover:text-white"><i data-feather="youtube"></i></a>
      <a href="#" class="hover:text-white"><i data-feather="facebook"></i></a>
      <a href="#" class="hover:text-white"><i data-feather="mail"></i></a>
      <a href="#" class="hover:text-white"><i data-feather="phone"></i></a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>feather.replace();</script>
</body>
</html>
