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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
main {
            flex: 1; /* Membuat konten utama mengisi ruang yang tersisa */
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






        <!-- Main Content -->

        <div class="flex justify-center  min-h-screen">
            <div class="w-full px-6">


                <div class="overflow-x-auto rounded-lg text-xs">
                    <h1 class="text-2xl font-bold text-gray-900 mt-5 text-center">Media Partner</h1>
                    <a href="{{ route('admin.dashboard') }}"
                    class="inline-block mt-4 px-4 py-2 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
                     Back
                 </a>

                    <table class="min-w-full table-auto divide-y-2 divide-gray-200 bg-white">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">NO</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">NAMA</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">JABATAN</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">ASAL KOMUNITAS</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">CONTACT</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">EMAIL</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">TUJUAN</th>
                                <th class="whitespace-nowrap px-2 py-1 font-medium text-gray-900">AKSI</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($mediapartner as $no=>$data)
                            <tr>
                                <td class="whitespace-nowrap px-2 py-1 text-gray-700">{{ $no+1 }}</td>
                                <td class="break-words max-w-xs px-2 py-1 font-medium text-gray-900">{{ $data->name }}</td>
                                <td class="break-words max-w-xs px-2 py-1 text-gray-700">{{ $data->jabatan }}</td>
                                <td class="break-words max-w-xs px-2 py-1 text-gray-700">{{ $data->asalkomunitas }}</td>
                                <td class="break-words max-w-xs px-2 py-1 text-gray-700">{{ $data->telepon }}</td>
                                <td class="break-words max-w-xs px-2 py-1 text-gray-700">{{ $data->email }}</td>
                                <td class="break-words max-w-xs px-2 py-1 text-gray-700">{{ $data->tujuan }}</td>
                                <td class="whitespace-nowrap px-2 py-1 text-center">
                                    <form action="{{ route('admin.delete', $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    <!--content media partner-->




  <!-- Main Content End -->

<!-- Footer Section -->


<!-- Feather Icons Script -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</body>
</html>
