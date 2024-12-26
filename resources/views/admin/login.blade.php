<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Login Admin</title>
  <style>
    .meteor {
      position: absolute;
      width: 3px;
      height: 60px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0));
      opacity: 0.7;
      animation: meteor-fall 1.5s infinite linear;
    }

    @keyframes meteor-fall {
      0% {
        transform: translateY(-200px);
        opacity: 1;
      }
      100% {
        transform: translateY(800px);
        opacity: 0;
      }
    }
  </style>
</head>
<body class="bg-gray-900">

  <!-- Navbar -->
  <header class="bg-transparent absolute w-full z-50"> <!-- Tingkatkan z-index -->
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="md:flex md:items-center md:gap-12">
                <a href="{{ route('admin.login') }}">

                    <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                </a>
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
  <!-- Navbar End -->

  <!-- Main Content -->
  <section class="relative bg-digital-pattern text-white h-screen flex flex-col justify-center items-center overflow-hidden">
    <!-- Pola Animasi Meteor -->
    <div class="absolute inset-0 pointer-events-none">
      @for ($i = 0; $i < 50; $i++)
        <div class="meteor" style="top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 2000) / 1000 }}s;"></div>
      @endfor
    </div>

    <!-- Konten Utama -->
    <div class="relative z-10 text-center px-6">
      <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>


      <form  action="{{route('admin.authenticate') }}" method="post" class="mx-auto mt-8 max-w-md space-y-4">
        @csrf
        @if($errors->any())
            <div class="text-red-500 mb-4">
                {{ $errors->first() }}
            </div>
        @endif
        <div>
          <input type="email" for="email" name="email" class="w-full rounded-lg border-gray-700 bg-gray-800 p-4 text-sm text-white placeholder-gray-400" placeholder="Enter email" />
        </div>
        <div>
          <input type="password" for="password" name="password" id="password" class="w-full rounded-lg border-gray-700 bg-gray-800 p-4 text-sm text-white placeholder-gray-400" placeholder="Enter password" />
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" class="rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
            Sign in
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- Main Content End -->

</body>
</html>
