<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Media Partner</title>
  <link rel="icon" href="{{ asset('images/logo_komunitas/kdai-fix.png') }}" type="image/x-icon">
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body class="bg-gray-900">

    <!--navbar-->
    <header class="bg-transparent absolute w-full z-50"> <!-- Tingkatkan z-index -->
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                </div>

                <div class="md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center justify-center space-x-3 text-xs sm:text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/">Home</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.kegiatan') }}">Kegiatan</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.program') }}">Program</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="/pendaftaranpartner">Gabung Media Partner</a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="{{ route('home.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </header>

      <!--navbar end-->

      <!--Main Content-->
                <section class="bg-digital-pattern text-white "> <!-- Menambahkan padding-top -->
                    <!-- Pola Animasi Meteor -->
                    <div class="absolute inset-0 pointer-events-none">
                        <!-- Banyak meteor -->
                        @for ($i = 0; $i < 50; $i++)
                            <div class="meteor" style="top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 2000) / 1000 }}s;"></div>
                        @endfor
                    </div>

                    <!-- Konten Utama -->
                    <!-- Form Pendaftaran -->
                    <div class="relative z-10 mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center mb-20">
                        <div class="mx-auto max-w-3xl text-center">
                            <h2 class="text-4xl font-extrabold text-white mb-6">Gabung Media Partner</h2>
                            <p class="text-lg text-gray-300 mb-8">Silakan isi form di bawah ini untuk bergabung.</p>

                            <form id="mediapartnerForm" action="{{ route('admin.submit') }}" method="post" class="space-y-6">
                                @csrf
                                <!-- Nama Lengkap -->
                                <div>
                                    <label for="name" class="block text-left text-sm font-medium text-white">Nama</label>
                                    <input type="text" id="name" name="name" required class=" text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Jabatan -->
                                <div>
                                    <label for="jabatan" class="block text-left text-sm font-medium text-white">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" required class="text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Asal Komunitas -->
                                <div>
                                    <label for="asalKomunitas" class="block text-left text-sm font-medium text-white">Asal Komunitas/Instansi/Media</label>
                                    <input type="text" id="asalKomunitas" name="asalKomunitas" required class="text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Nomor Telepon -->
                                <div>
                                    <label for="phone" class="block text-left text-sm font-medium text-white">No Hp</label>
                                    <input type="text" id="phone" name="phone" required class="text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-left text-sm font-medium text-white">Email</label>
                                    <input type="email" id="email" name="email" required class="text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Tujuan Pendaftaran -->
                                <div>
                                    <label for="tujuan" class="block text-left text-sm font-medium text-white">Tujuan Pendaftaran</label>
                                    <input type="text" id="tujuan" name="tujuan" required class="text-black mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>

                                <!-- Tombol Kirim -->
                                <div>
                                    <button type="submit" class="w-full py-3 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        Gabung Sekarang
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </section>




 <!-- Footer Section -->
 <footer class="bg-sky-900 text-center py-4 text-gray-400">
    <p>&copy;KAMPUNG DIGITAL AIR ITAM<br>#PALIDIGITAL #PALICAKAPDIGITAL</p>
    <div class="flex justify-center space-x-4 mt-4">
        <a href="https://www.instagram.com/kampungdigitalairitam?igsh=MTdhY3ZlMHJjNHZsYw==" class="hover:text-white">
            <i data-feather="instagram"></i>
        </a>
        <a href="https://youtube.com/@kampungdigitalairitam?si=wLeWlOOCPbk_KArU" class="hover:text-white">
            <i data-feather="youtube"></i>
        </a>
        <a href="https://facebook.com/groups/538723418458003/" class="hover:text-white">
            <i data-feather="facebook"></i>
        </a>

        <a href="https://wa.me/+62 821-8445-8290" class="hover:text-white">
            <i data-feather="phone"></i>
        </a>
    </div>
</footer>

<!-- Feather Icons Script -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    document.getElementById('mediapartnerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form langsung submit

        const form = this;

        // Lakukan submit data ke server
        fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => {
            if (response.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data Anda telah berhasil dikirim.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    form.submit(); // Submit form setelah alert
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Terjadi kesalahan koneksi. Silakan coba lagi.',
                confirmButtonText: 'OK'
            });
        });
    });
</script>


</body>
</html>
