
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <!-- sidebar -->



    </div>

        <!-- Main Content -->

        <div class="flex-1  p-4 min-h-screen ">
            <div class="w-full px-6">
                <!-- Main Content -->
                <div class="mb-6">

                    <h1 class="text-2xl font-semibold ">Kelola Berita</h1>
                    <a href="{{ route('admin.tambahberita') }}"
                       class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white font-medium text-sm rounded hover:bg-blue-600">
                        Tambah Berita
                    </a>
                    <a href="{{ route('admin.dashboard') }}"
                       class="inline-block mt-4 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
                        Back
                    </a>
                </div>

                <!-- Berita Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow rounded-lg">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Foto</th>
                                <th class="py-3 px-6 text-left">Judul</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm">
                            @if($beritas->isEmpty())
                                <tr>
                                    <td colspan="3" class="text-center py-4">
                                        <p class="text-gray-500 italic">Tidak ada berita yang tersedia.</p>
                                    </td>
                                </tr>
                            @else
                                @foreach ($beritas as $berita)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6">
                                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" class="w-24 h-16 object-cover rounded-md">
                                        </td>
                                        <td class="py-3 px-6">
                                            <span class="font-medium">{{ $berita->judul }}</span>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('admin.editberita', $berita->id) }}"
                                                   class="px-3 py-1 bg-green-500 text-white text-sm rounded hover:bg-green-600">
                                                    Edit
                                                </a>
                                                <!-- Delete Button -->
                                                <form action="{{ route('admin.hapusberita', $berita->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="deleteButton px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal for Delete Confirmation -->
        <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center" style="display: none;">
            <div class="bg-white p-6 rounded-lg w-96">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Apakah Anda yakin ingin menghapus berita ini?</h2>
                <div class="flex justify-end space-x-4">
                    <button id="cancelButton" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                        Batal
                    </button>
                    <button id="confirmButton" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        Hapus
                    </button>
                </div>
            </div>
        </div>


        <!-- Main Content End -->

            <!-- Footer Section -->
            <footer class="bg-sky-900 text-center text-gray-400">
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







  <!-- JavaScript for Modal Logic -->

<script>
    // Get modal and buttons
    const deleteModal = document.getElementById('deleteModal');
    const cancelButton = document.getElementById('cancelButton');
    const confirmButton = document.getElementById('confirmButton');
    let formToSubmit = null;

    // Open the modal when delete button is clicked
    const deleteButtons = document.querySelectorAll('.deleteButton');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();  // Prevent the form from submitting immediately
            formToSubmit = button.closest('form');  // Get the closest form to submit
            deleteModal.style.display = 'flex';  // Show the modal
        });
    });

    // Cancel button closes the modal
    cancelButton.addEventListener('click', function() {
        deleteModal.style.display = 'none';  // Hide the modal
        formToSubmit = null;  // Reset the form
    });

    // Confirm button submits the form
    confirmButton.addEventListener('click', function() {
        if (formToSubmit) {
            formToSubmit.submit();  // Submit the form to delete the item
        }
        deleteModal.style.display = 'none';  // Hide the modal
    });
</script>

</body>
</html>
