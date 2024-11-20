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
