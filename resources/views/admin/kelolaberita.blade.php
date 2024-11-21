
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
            font-family: Arial, sans-serif;

            padding: 0;

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
<body class="bg-slate-300">
    <!-- sidebar -->



    </div>
      <div class="flex">
        <!-- Sidebar -->
        <div class="flex h-screen w-16 flex-col justify-between border-e bg-white fixed">
            <div>
                <div class="inline-flex size-16 items-center justify-center">
                  <div class="inline-flex items-center justify-center">
                      <img
                        src="{{ asset('images/logo_komunitas/kdai-fix.png') }}"
                        alt="Logo"
                        class="w-10 h-10 rounded-lg"
                      />
                    </div>

                </div>

                <div class="border-t border-gray-100">
                  <div class="px-2">
                    <div class="py-4">
                      <a
                        href="{{ route('admin.dashboard') }}"
                        class="t group relative flex justify-center rounded text-gray-500 hover:bg-gray-50 hover:text-gray-700px-2 py-1.5"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5 opacity-75"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                        </svg>

                        <span
                          class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                        >
                          General
                        </span>
                      </a>
                    </div>

                    <ul class="space-y-1 border-t border-gray-100 pt-4">
                      <li>
                        <a
                          href="{{ route('admin.mediapartner') }}"
                          class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                          </svg>

                          <span
                            class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                          >
                            Media Partner
                          </span>
                        </a>
                      </li>

                      <li>
                        <a
                          href="{{ route('tambahkegiatan') }}"
                          class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                            />
                          </svg>

                          <span
                            class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                          >
                            Tambah kegiatan
                          </span>
                        </a>
                      </li>

                      <div class="py-4">
                          <a
                            href="{{ route('admin.kelolakegiatan') }}"
                            class="t group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="size-5 opacity-75"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                              />
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                              />
                            </svg>

                            <span
                              class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                            >
                              Kelola kegiatan
                            </span>
                          </a>
                        </div>

                        <div class="py-4">
                            <a
                              href="{{ route('admin.kelolaberita') }}"
                              class="t group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-5 opacity-75"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                />
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                              </svg>

                              <span
                                class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                              >
                                Kelola Program
                              </span>
                            </a>
                          </div>
                      <li>
                        <a
                          href="#"
                          class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                            />
                          </svg>

                          <span
                            class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                          >
                            Invoices
                          </span>
                        </a>
                      </li>

                      <li>
                        <a
                          href="#"
                          class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                          </svg>

                          <span
                            class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                          >
                            Account
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>



              <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 bg-white p-2">
                <form action="{{ route('admin.logout') }}" method="post">
                  @csrf
                  <button
                    type="submit"
                    class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5 opacity-75"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                      />
                    </svg>

                    <span
                      class="invisible absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white group-hover:visible"
                    >
                      Logout
                    </span>
                  </button>
                </form>
              </div>
        </div>

        <!-- Main Content -->

        <div class="flex-1 ml-16 p-4 min-h-screen bg-gray-100">
            <div class="w-full px-6">
                <!-- Main Content -->
                <div class="mb-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Kelola Berita</h1>
                    <a href="{{ route('admin.tambahberita') }}"
                       class="inline-block mt-4 px-4 py-2 bg-blue-500 text-white font-medium text-sm rounded hover:bg-blue-600">
                        Tambah Berita
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




    <!--content media partner-->




  <!-- Main Content End -->

  <script>
    const navbarToggle = document.querySelector('button');
    const navMenu = document.querySelector('nav');

    navbarToggle.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>
  <!-- JavaScript for Modal Logic -->
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
