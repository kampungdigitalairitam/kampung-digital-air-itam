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
