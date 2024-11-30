
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Admin - MediaPartner</title>
    <style>
         body {
            body
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 0;



        }
        main {
            flex: 1; /* Membuat konten utama mengisi ruang yang tersisa */
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
<body class="bg-blue-900">
  <!-- Main Content -->



        <!-- Form with Tailwind CSS classes -->
        <form id="newsForm" action="{{ route('admin.simpanberita') }}" method="POST" enctype="multipart/form-data" class="max-w-3xl mx-auto p-20 border rounded-lg shadow-lg bg-white my-5">
            <h1 class="text-3xl font-semibold mb-6 text-center">Tambah Program</h1>
    @csrf
    <div class="mb-6">
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
        <input type="text" name="judul" id="judul" placeholder="Masukkan Judul Berita" required class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-6">
        <label for="konten" class="block text-sm font-medium text-gray-700">Konten</label>
        <textarea name="konten" id="konten" placeholder="Masukkan Konten Berita" required class="mt-2 p-8 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <div class="mb-6">
        <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
        <input type="file" name="foto" accept="image/*" class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Upload</button>
    <a href="{{ route('admin.dashboard') }}"
    class="inline-block mt-4 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
     Back
 </a>
</form>

<!-- Alert box (hidden by default) -->
<div id="alert" class="hidden fixed top-16 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg text-lg">
    Data Berita Berhasil Di-upload!
</div>

        <!-- Alert box (hidden by default) -->
        <div id="alert" class="hidden fixed top-16 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg text-lg">
            Data Berita Berhasil Di-upload!
        </div>



        <!-- Main Content End -->


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




  <!-- JavaScript to show alert after form submission -->
  <script>
    const form = document.getElementById('newsForm');
    const alertBox = document.getElementById('alert');

    form.addEventListener('submit', function (e) {
        e.preventDefault();  // Prevent form submission to show alert

        // Show the alert box
        alertBox.classList.remove('hidden');
        alertBox.classList.add('block');

        // Hide the alert box after 3 seconds
        setTimeout(function () {
            alertBox.classList.remove('block');
            alertBox.classList.add('hidden');
        }, 3000);

        // Submit the form after showing the alert
        setTimeout(function () {
            form.submit();
        }, 3000);  // Submit the form after alert is hidden
    });
</script>
</body>
</html>
