<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Media Partner</title>
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
  <header class="bg-transparent absolute w-full z-50">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="md:flex md:items-center md:gap-12">
          <img src="{{ asset('images/logo_komunitas/kdai-fix.png') }}" alt="" class="h-8">
        </div>
        <div class="hidden md:block">
          <nav aria-label="Global">
            <ul class="flex items-center gap-6 text-sm">
              <li><a class="text-white transition hover:text-gray-300" href="/">Home</a></li>
              <li><a class="text-white transition hover:text-gray-300" href="#">Kegiatan</a></li>
              <li><a class="text-white transition hover:text-gray-300" href="#">Program</a></li>
              <li><a class="text-white transition hover:text-gray-300" href="#">Tentang Kami</a></li>
              <li><a class="text-white transition hover:text-gray-300" href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="block md:hidden">
          <button class="rounded bg-gray-100 p-2 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
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
