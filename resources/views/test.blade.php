<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program</title>
</head>
<body>
    <h1>Daftar Program Kegiatan</h1>
    <div>
        @foreach ($programs as $program)
        <div style="border: 1px solid #ddd; margin-bottom: 10px; padding: 10px;">
            <img src="{{ asset('storage/' . $program->thumbnail) }}" alt="Thumbnail" style="width: 150px; height: auto;">
            <h2>{{ $program->title }}</h2>
            <p>{{ $program->description }}</p>
            <a href="{{ route('home.showprogram' , $program->id) }}">Lihat Detail</a>
        </div>
        @endforeach
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Program</title>
</head>
<body>
    <h1>Detail Program: {{ $program->title }}</h1>
    <p><strong>Deskripsi:</strong> {{ $program->description }}</p>
    <img src="{{ asset('storage/' . $program->thumbnail) }}" alt="Thumbnail" style="width: 300px; height: auto;">

    <h2>Isi Konten</h2>
    <div>
        @foreach ($contents as $content)
        <div style="border: 1px solid #ddd; margin-bottom: 10px; padding: 10px;">
            <img src="{{ asset('storage/' . $content->photo) }}" alt="Foto Kegiatan" style="width: 200px; height: auto;">
            <p>{{ $content->description }}</p>
        </div>
        @endforeach
    </div>

    <a href="">Kembali ke Daftar Program</a>
</body>
</html>


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

    <form action="/admin/tambahprogram" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Bagian Program -->
        <h3>Data Program</h3>
        <label>Judul:</label>
        <input type="text" name="title" required>

        <label>Thumbnail:</label>
        <input type="file" name="thumbnail" accept="image/*" required>

        <label>Deskripsi Program:</label>
        <textarea name="description" required></textarea>

        <hr>

        <!-- Bagian Konten Program -->
        <h3>Isi Konten Program</h3>
        <div id="content-rows">
            <div class="content-row">
                <label>Foto:</label>
                <input type="file" name="photos[]" accept="image/*" required>

                <label>Deskripsi Foto:</label>
                <textarea name="descriptions[]" required></textarea>
            </div>
        </div>
        <button type="button" id="add-row">Tambah Baris</button>
        <button type="submit">Upload Program dan Konten</button>
    </form>


 <!-- Footer Section -->


<!-- Feather Icons Script -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>




      <!--Main Content end-->
</body>
</html>

