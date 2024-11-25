
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Admin - MediaPartner</title>
    <style>
         body {
            font-family: Arial, sans-serif;

            padding: 0;

        }

        .flex-1 {
  padding: 16px; /* Menambahkan jarak di area konten utama */
}

@media (max-width: 768px) {
  .flex {
    flex-direction: column;
  }
  .h-screen {
    height: auto;
  }
  .w-16 {
    width: 100%;
  }
}


    </style>
</head>
<body class="bg-slate-300">
    <!-- sidebar -->
    <form action="{{ route('register.store') }}" method="POST" class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow space-y-6">
        @csrf
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Kebijakan Privasi -->
        <div>
            <label for="privacy_policy" class="block text-sm font-medium text-gray-700">Setuju Kebijakan Privasi</label>
            <select name="privacy_policy" id="privacy_policy" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <!-- Nama Lengkap -->
        <div>
            <label for="full_name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" name="full_name" id="full_name" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Asal Kecamatan/Alamat -->
        <div>
            <label for="district_origin" class="block text-sm font-medium text-gray-700">Asal Kecamatan/Alamat</label>
            <input type="text" name="district_origin" id="district_origin" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Domisili Saat Ini -->
        <div>
            <label for="current_residence" class="block text-sm font-medium text-gray-700">Domisili Saat Ini</label>
            <input type="text" name="current_residence" id="current_residence" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Alamat Lengkap -->
        <div>
            <label for="full_address" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
            <textarea name="full_address" id="full_address" rows="3" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Apakah Sudah Bekerja -->
        <div>
            <label for="employment_status" class="block text-sm font-medium text-gray-700">Apakah Sudah Bekerja?</label>
            <select name="employment_status" id="employment_status" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="yes">Ya</option>
                <option value="no_studying">Tidak, tapi saya sedang kuliah</option>
                <option value="no_job_seeking">Tidak, saya sedang mencari pekerjaan</option>
            </select>
        </div>

        <!-- Nama Kampus/Sekolah Terakhir -->
        <div>
            <label for="last_school" class="block text-sm font-medium text-gray-700">Nama Kampus/Sekolah Terakhir</label>
            <input type="text" name="last_school" id="last_school"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Jurusan Sekolah/Kuliah -->
        <div>
            <label for="major" class="block text-sm font-medium text-gray-700">Jurusan Sekolah/Kuliah</label>
            <input type="text" name="major" id="major"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Kelas/Semester -->
        <div>
            <label for="class_or_semester" class="block text-sm font-medium text-gray-700">Kelas/Semester</label>
            <input type="text" name="class_or_semester" id="class_or_semester"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Kontak WhatsApp -->
        <div>
            <label for="whatsapp_contact" class="block text-sm font-medium text-gray-700">Kontak WhatsApp</label>
            <input type="text" name="whatsapp_contact" id="whatsapp_contact" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Kontak Telegram -->
        <div>
            <label for="telegram_contact" class="block text-sm font-medium text-gray-700">Kontak Telegram</label>
            <input type="text" name="telegram_contact" id="telegram_contact"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Instagram -->
        <div>
            <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
            <input type="text" name="instagram" id="instagram"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Motivasi -->
        <div>
            <label for="motivation" class="block text-sm font-medium text-gray-700">Motivasi</label>
            <textarea name="motivation" id="motivation" rows="4" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Mengetahui Komunitas dari -->
        <div>
            <label for="referral_source" class="block text-sm font-medium text-gray-700">Mengetahui Komunitas dari</label>
            <select name="referral_source" id="referral_source" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="social_media">Media Sosial</option>
                <option value="friend">Teman</option>
                <option value="event">Event</option>
                <option value="ads">Iklan</option>
                <option value="website">Website</option>
                <option value="other">Lainnya</option>
            </select>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Kirim</button>
    </form>







  <!-- Main Content End -->

  <script>
    const navbarToggle = document.querySelector('button');
    const navMenu = document.querySelector('nav');

    navbarToggle.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
