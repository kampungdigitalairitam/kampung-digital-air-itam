<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <!--navbar-->
    <header class="bg-transparent absolute w-full z-10">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="md:flex md:items-center md:gap-12">
                    <img src="{{ asset('images/kdai-fix.png.') }}" alt="" class="h-8" viewBox="0 0 28 24" fill="none">
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Home </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Kegiatan </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Program </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Tentang Kami </a>
                            </li>
                            <li>
                                <a class="text-white transition hover:text-gray-300" href="#"> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow hover:bg-teal-500 focus:outline-none focus:ring active:bg-teal-700" href="#">
                            Login
                        </a>
                    </div>

                    <div class="block md:hidden">
                        <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

      <!--navbar end-->

      <!--Main Content-->
      <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section class="bg-gray-900 text-white">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
      <div class="mx-auto max-w-3xl text-center">
        <h1
          class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"
        >
          Understand User Flow.

          <span class="sm:block"> Increase Conversion. </span>
        </h1>

        <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
          numquam ea!
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
            href="#"
          >
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Tentang Kami Section -->
  <section class="py-16 px-4 bg-gray-900">
    <div class="container mx-auto flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">
        <div class="md:w-1/2">
            <img src="{{asset('images/gedung psda.jpeg')}}" alt="Tentang Kami" class="rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Tentang Kampung Digital Air Itam</h2>
            <p class="text-sm md:text-lg text-black font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, nisi deleniti facilis voluptates sequi praesentium quibusdam sit perferendis itaque quia corporis quo molestiae. Quae tempore suscipit at corrupti, animi veritatis!</p>
        </div>
    </div>
</section>

      <!--Main Content end-->
</body>
</html>
