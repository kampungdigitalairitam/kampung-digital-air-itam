<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Detail Pendaftar</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    /* Flexbox untuk memastikan footer tetap di bawah */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1; /* Membuat konten utama mengisi ruang yang tersisa */
    }
</style>
</head>
<body class="bg-blue-900 text-white">

<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-5 text-center">Detail Pendaftar</h1>
    <a href="{{ route('admin.dashboard') }}"
    class="inline-block mt-4 px-4 py-2 mb-3 bg-amber-500 text-white font-medium text-sm rounded hover:bg-green-600">
     Back
 </a>

    <div class="bg-white rounded-lg shadow-lg p-6 text-black">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 border">No</th>
                    <th class="px-6 py-3 border">Pertanyaan</th>
                    <th class="px-6 py-3 border">Jawaban</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">1</td>
                    <td class="px-6 py-4 border">Email</td>
                    <td class="px-6 py-4 border">{{ $registration->email }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">2</td>
                    <td class="px-6 py-4 border">Kebijakan Privasi</td>
                    <td class="px-6 py-4 border">{{ $registration->privacy_policy ? 'Ya' : 'Tidak' }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">3</td>
                    <td class="px-6 py-4 border">Nama Lengkap</td>
                    <td class="px-6 py-4 border">{{ $registration->full_name }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">4</td>
                    <td class="px-6 py-4 border">Asal Kecamatan/Alamat</td>
                    <td class="px-6 py-4 border">{{ $registration->district_origin }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">5</td>
                    <td class="px-6 py-4 border">Domisili Saat Ini</td>
                    <td class="px-6 py-4 border">{{ $registration->current_residence }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">6</td>
                    <td class="px-6 py-4 border">Alamat Lengkap</td>
                    <td class="px-6 py-4 border">{{ $registration->full_address }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">7</td>
                    <td class="px-6 py-4 border">Apakah Sudah Bekerja</td>
                    <td class="px-6 py-4 border">{{ $registration->employment_status }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">8</td>
                    <td class="px-6 py-4 border">Nama Kampus/Sekolah Terakhir</td>
                    <td class="px-6 py-4 border">{{ $registration->last_school }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">9</td>
                    <td class="px-6 py-4 border">Jurusan Sekolah/Kuliah</td>
                    <td class="px-6 py-4 border">{{ $registration->major }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">10</td>
                    <td class="px-6 py-4 border">Kelas/Semester</td>
                    <td class="px-6 py-4 border">{{ $registration->class_or_semester }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">11</td>
                    <td class="px-6 py-4 border">Kontak WhatsApp</td>
                    <td class="px-6 py-4 border">
                        <a
                            href="https://wa.me/{{ preg_replace('/^0/', '62', $registration->whatsapp_contact) }}"
                            target="_blank"
                            class="flex items-center space-x-2 text-green-500 hover:underline">
                            <span>{{ $registration->whatsapp_contact }}</span>
                        </a>
                    </td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">12</td>
                    <td class="px-6 py-4 border">Kontak Telegram</td>
                    <td class="px-6 py-4 border">{{ $registration->telegram_contact }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">13</td>
                    <td class="px-6 py-4 border">Instagram</td>
                    <td class="px-6 py-4 border">{{ $registration->instagram }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">14</td>
                    <td class="px-6 py-4 border">Motivasi</td>
                    <td class="px-6 py-4 border">{{ $registration->motivation }}</td>
                </tr>
                <tr class="bg-gray-50 even:bg-gray-100">
                    <td class="px-6 py-4 border text-center">15</td>
                    <td class="px-6 py-4 border">Mengetahui dari</td>
                    <td class="px-6 py-4 border">{{ $registration->referral_source }}</td>
                </tr>
                <!-- Tabel untuk Ikon WhatsApp dan Tombol Hapus -->
                <tr class="bg-transparent">
                    <td colspan="3" class="text-right">
                        <!-- Ikon WhatsApp -->
                        <a href="https://wa.me/{{ preg_replace('/^0/', '62', $registration->whatsapp_contact) }}" target="_blank" class="text-green-500 hover:text-green-600">
                            <i class="fab fa-whatsapp text-3xl"></i>
                        </a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.registrations.delete', $registration->id) }}" method="POST" class="inline-block ml-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4  text-sm rounded shadow hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>
