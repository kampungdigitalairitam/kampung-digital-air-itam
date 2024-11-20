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
