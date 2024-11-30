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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
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
    <!-- sidebar -->



    </div>


        <!-- Main Content -->

        <form action="{{ route('tambahkegiatan', ['program_id']) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-8 rounded shadow-md max-w-3xl mx-auto">
            <h1 class="text-xl font-semibold mb-6 text-center">Tambah Kegiatan</h1>
            @csrf
            <!-- Bagian Program -->
            <h3 class="text-lg font-bold text-gray-700">Data Program</h3>
            <div class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-600">Judul:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-500 focus:outline-none" required>
                </div>

                <div>
                    <label for="thumbnail" class="block text-sm font-medium text-gray-600">Thumbnail:</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-500 focus:outline-none" accept="image/*" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-600">Deskripsi Program:</label>
                    <textarea name="description" id="description" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-500 focus:outline-none" required>{{ old('description') }}</textarea>
                </div>
            </div>

            <hr class="border-gray-200">

            <!-- Bagian Konten Program -->
            <h3 class="text-lg font-bold text-gray-700">Isi Konten Program</h3>
            <div id="content-rows" class="space-y-4">
                <div class="content-row space-y-4">
                    <div>
                        <label for="photos[]" class="block text-sm font-medium text-gray-600">Foto:</label>
                        <input type="file" name="photos[]" id="photos[]" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-500 focus:outline-none" accept="image/*" required>
                    </div>

                    <div>
                        <label for="descriptions[]" class="block text-sm font-medium text-gray-600">Deskripsi Foto:</label>
                        <textarea name="descriptions[]" id="descriptions[]" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-500 focus:outline-none" required>{{ old('descriptions[]') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                Upload Program dan Konten

            </button>
            <a href="{{ route('admin.dashboard') }}"
    class="inline-block mt-4 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
     Back
 </a>
        </form>



      </div>

    <!--content media partner-->




  <!-- Main Content End -->

<!-- Footer Section -->
<footer class="bg-sky-900 text-center py-4 text-gray-400 mt-5">
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
