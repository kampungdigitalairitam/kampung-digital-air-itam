
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

<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Daftar Pendaftar</h1>

    @forelse ($registrations as $registration)
        <div class="mb-10">
            <h2 class="text-lg font-semibold mb-2">Pendaftar: {{ $registration->name }}</h2>
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">Pertanyaan</th>
                        <th class="border px-4 py-2">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Email</td>
                        <td class="border px-4 py-2">{{ $registration->email }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">Kebijakan Privasi</td>
                        <td class="border px-4 py-2">{{ $registration->privacy_policy ? 'Ya' : 'Tidak' }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">Nama Lengkap</td>
                        <td class="border px-4 py-2">{{ $registration->full_name }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">Asal Kecamatan/Alamat</td>
                        <td class="border px-4 py-2">{{ $registration->district_origin }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">5</td>
                        <td class="border px-4 py-2">Domisili Saat Ini</td>
                        <td class="border px-4 py-2">{{ $registration->current_residence }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">6</td>
                        <td class="border px-4 py-2">Alamat Lengkap</td>
                        <td class="border px-4 py-2">{{ $registration->full_address }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">7</td>
                        <td class="border px-4 py-2">Apakah Sudah Bekerja</td>
                        <td class="border px-4 py-2">{{ $registration->employment_status }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">8</td>
                        <td class="border px-4 py-2">Nama Kampus/Sekolah Terakhir</td>
                        <td class="border px-4 py-2">{{ $registration->last_school }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">9</td>
                        <td class="border px-4 py-2">Jurusan Sekolah/Kuliah</td>
                        <td class="border px-4 py-2">{{ $registration->major }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">10</td>
                        <td class="border px-4 py-2">Kelas/Semester</td>
                        <td class="border px-4 py-2">{{ $registration->class_or_semester }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">11</td>
                        <td class="border px-4 py-2">Kontak WhatsApp</td>
                        <td class="border px-4 py-2">
                            <a
                                href="https://wa.me/{{ preg_replace('/^0/', '62', $registration->whatsapp_contact) }}"
                                target="_blank"
                                class="text-blue-500 underline">
                                {{ $registration->whatsapp_contact }}
                            </a>
                        </td>


                    </tr>
                    <tr>
                        <td class="border px-4 py-2">12</td>
                        <td class="border px-4 py-2">Kontak Telegram</td>
                        <td class="border px-4 py-2">{{ $registration->telegram_contact }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">13</td>
                        <td class="border px-4 py-2">Instagram</td>
                        <td class="border px-4 py-2">{{ $registration->instagram }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">14</td>
                        <td class="border px-4 py-2">Motivasi</td>
                        <td class="border px-4 py-2">{{ $registration->motivation }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">15</td>
                        <td class="border px-4 py-2">Mengetahui dari</td>
                        <td class="border px-4 py-2">{{ $registration->referral_source }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">
                            <form action="{{ route('admin.registrations.delete', $registration->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @empty
        <p>Tidak ada data pendaftar saat ini.</p>
    @endforelse
</div>






  <!-- Main Content End -->

  <script>
    const navbarToggle = document.querySelector('button');
    const navMenu = document.querySelector('nav');

    navbarToggle.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
