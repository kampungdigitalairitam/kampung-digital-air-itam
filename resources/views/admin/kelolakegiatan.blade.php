<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Admin - KelolaKegiatan</title>
</head>
<body class="bg-gray-100 font-sans">
  <!-- Container -->
  <div class="max-w-7xl mx-auto py-6 px-4">
    <!-- Header -->
    <header class="mb-6">
      <h1 class="text-3xl font-bold text-gray-800">Kelola Kegiatan</h1>
      <a href="{{ route('tambahkegiatan') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded shadow mt-3 inline-block">
        Tambah Kegiatan
      </a>
      <a href="{{ route('admin.dashboard') }}"
      class="inline-block mt-4 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
       Back
   </a>
    </header>

    <!-- Table -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <table class="min-w-full border-collapse border border-gray-200">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="py-3 px-6 text-left">No</th>
            <th class="py-3 px-6 text-left">Thumbnail</th>
            <th class="py-3 px-6 text-left">Judul</th>
            <th class="py-3 px-6 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($kegiatans as $index => $kegiatan)
            <tr class="border-b border-gray-200 hover:bg-gray-50">
              <td class="py-4 px-6">{{ $index + 1 }}</td>
              <td class="py-4 px-6">
                <img src="{{ asset('storage/' . $kegiatan->tumbnail_image) }}" class="h-12 rounded" alt="Thumbnail">
              </td>
              <td class="py-4 px-6">{{ $kegiatan->title }}</td>
              <td class="py-4 px-6 text-center">
                <a href="{{ route('admin.kelolakegiatan.edit', $kegiatan) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-3 py-1 rounded">
                  Edit
                </a>
                <button
                  onclick="confirmDelete('{{ $kegiatan->id }}')"
                  class="bg-red-500 hover:bg-red-600 text-white font-medium px-3 py-1 rounded">
                  Hapus
                </button>
                <form id="deleteForm-{{ $kegiatan->id }}" action="{{ route('admin.kelolakegiatan.delete', $kegiatan) }}" method="POST" class="hidden">
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- SweetAlert2 Script -->
  <script>
    function confirmDelete(id) {
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data ini akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          // Submit the delete form
          document.getElementById(`deleteForm-${id}`).submit();
        }
      });
    }
  </script>
</body>
</html>
