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



    <div class="container mt-4">
        <h2>{{ isset($kegiatan) ? 'Edit Kegiatan' : 'Tambah Kegiatan' }}</h2>
        <form action="{{ isset($kegiatan) ? route('admin.kelolakegiatan.update', $kegiatan) : route('admin.tambahkegiatan') }}" method="POST" enctype="multipart/form-data">

            @csrf
            @if(isset($kegiatan))
                @method('PUT')
            @endif

            <!-- Form Thumbnail -->
            <div class="mb-3">
                <label for="tumbnail_image" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="tumbnail_image" name="tumbnail_image">
                @if(isset($kegiatan) && $kegiatan->tumbnail_image)
                    <img src="{{ asset('storage/' . $kegiatan->tumbnail_image) }}" alt="Thumbnail" class="img-thumbnail mt-2" style="max-height: 150px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $kegiatan->title ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Keterangan</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $kegiatan->description ?? '' }}</textarea>
            </div>

            <!-- Form Isi Konten -->
            <h4>Isi Konten</h4>
            <div id="content-section">
                @if(isset($kegiatan) && $kegiatan->content_images)
                    @foreach($kegiatan->content_images as $index => $image)
                        <div class="content-item mb-3">
                            <input type="file" class="form-control mb-2" name="content_images[]" accept="image/*">
                            <textarea class="form-control mb-2" name="content_descriptions[]" rows="2" placeholder="Deskripsi">{{ $kegiatan->content_descriptions[$index] ?? '' }}</textarea>
                            <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail" style="max-height: 100px;">
                        </div>
                    @endforeach
                @else
                    <div class="content-item mb-3">
                        <input type="file" class="form-control mb-2" name="content_images[]" accept="image/*">
                        <textarea class="form-control mb-2" name="content_descriptions[]" rows="2" placeholder="Deskripsi"></textarea>
                    </div>
                @endif
            </div>
            <button type="button" id="add-content" class="btn btn-secondary mb-3">Tambah Konten</button>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">{{ isset($kegiatan) ? 'Update' : 'Simpan' }}</button>
        </form>
    </div>

    <script>
        document.getElementById('add-content').addEventListener('click', function () {
            const section = document.getElementById('content-section');
            const item = document.createElement('div');
            item.classList.add('content-item', 'mb-3');
            item.innerHTML = `
                <input type="file" class="form-control mb-2" name="content_images[]" accept="image/*">
                <textarea class="form-control mb-2" name="content_descriptions[]" rows="2" placeholder="Deskripsi"></textarea>
            `;
            section.appendChild(item);
        });
    </script>

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
