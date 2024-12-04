<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Admin - TambahKegiatan</title>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-blue-900 min-h-screen flex flex-col">
    <!-- Container -->
    <div class="container mx-auto mt-10 p-4 bg-white shadow-lg rounded-lg">
        <!-- Header -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            {{ isset($kegiatan) ? 'Edit Kegiatan' : 'Tambah Kegiatan' }}
        </h2>
        <a href="{{ route('admin.dashboard') }}"
        class="inline-block px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
         Back
     </a>

        <!-- Alert -->
        <div id="alert" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
            <span class="block sm:inline">Data akan dipublikasikan.</span>
        </div>
        <!-- Form -->
        <form action="{{ isset($kegiatan) ? route('admin.kelolakegiatan.update', $kegiatan) : route('admin.tambahkegiatan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($kegiatan))
                @method('PUT')
            @endif
            <!-- Thumbnail -->
            <div class="mb-4">
                <label for="tumbnail_image" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                <input type="file" id="tumbnail_image" name="tumbnail_image" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md p-2">
                @if(isset($kegiatan) && $kegiatan->tumbnail_image)
                    <img src="{{ asset('storage/' . $kegiatan->tumbnail_image) }}" alt="Thumbnail" class="mt-2 max-h-40 rounded-md shadow">
                @endif
            </div>
            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" id="title" name="title" value="{{ $kegiatan->title ?? '' }}" class="block w-full text-sm border-gray-300 rounded-md p-2" required>
            </div>
            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Keterangan</label>
                <textarea id="description" name="description" rows="3" class="block w-full text-sm border-gray-300 rounded-md p-2" required>{{ $kegiatan->description ?? '' }}</textarea>
            </div>
            <!-- Content Section -->
            <h4 class="text-lg font-bold text-gray-800 mb-2">Isi Konten</h4>
            <div id="content-section">
                @if(isset($kegiatan) && $kegiatan->content_images)
                    @foreach($kegiatan->content_images as $index => $image)
                        <div class="content-item mb-4">
                            <input type="file" name="content_images[]" accept="image/*" class="block w-full text-sm border-gray-300 rounded-md p-2 mb-2">
                            <textarea name="content_descriptions[]" rows="2" placeholder="Deskripsi" class="block w-full text-sm border-gray-300 rounded-md p-2 mb-2">{{ $kegiatan->content_descriptions[$index] ?? '' }}</textarea>
                            <img src="{{ asset('storage/' . $image) }}" class="mt-2 max-h-24 rounded-md shadow">
                        </div>
                    @endforeach
                @else
                    <div class="content-item mb-4">
                        <input type="file" name="content_images[]" accept="image/*" class="block w-full text-sm border-gray-300 rounded-md p-2 mb-2">
                        <textarea name="content_descriptions[]" rows="2" placeholder="Deskripsi" class="block w-full text-sm border-gray-300 rounded-md p-2"></textarea>
                    </div>
                @endif
            </div>

            <!-- Submit -->
            <button type="button" id="update-button" class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700">
                {{ isset($kegiatan) ? 'Update' : 'Simpan' }}
            </button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-sky-900 text-center py-4 text-gray-400 mt-auto">
        <p>&copy;KAMPUNG DIGITAL AIR ITAM<br>#PALIDIGITAL #PALICAKAPDIGITAL</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="hover:text-white"><i data-feather="instagram"></i></a>
            <a href="#" class="hover:text-white"><i data-feather="youtube"></i></a>
            <a href="#" class="hover:text-white"><i data-feather="facebook"></i></a>
            <a href="#" class="hover:text-white"><i data-feather="mail"></i></a>
            <a href="#" class="hover:text-white"><i data-feather="phone"></i></a>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();

        const form = document.querySelector('form');
        form.addEventListener('submit', function () {
            const alertBox = document.getElementById('alert');
            alertBox.classList.remove('hidden');
        });
    </script>

<script>
    // Handle Update Confirmation
    document.getElementById('update-button').addEventListener('click', function (event) {
        Swal.fire({
            title: 'Konfirmasi Kegiatan',
            text: "Apakah Anda yakin ingin mengirim data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form jika user mengonfirmasi
                document.querySelector('form').submit();
            }
        });
    });
</script>
</body>
</html>
