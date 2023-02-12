<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite('resources/js/app.js')
      <title>add-participant</title>
</head>

<body>
      <div class="m-20 space-y-5">
            <section class="lg:h-48 w-full bg-[#ffab01] relative select-none">
                  <div class="flex flex-row absolute bottom-0 left-10 gap-2">
                        <img src="images/header_logo.svg" alt="headerlogo" width="120" height="120">
                        <p class="uppercase text-[#00575f] font-bold text-2xl ">
                              eap dashboard
                        </p>
                  </div>
            </section>
            <section class="mx-auto w-[35rem] p-20 bg-slate-200/60 rounded relative">
                  <form action="/prizegame" method="POST">
                        @csrf
                        <div class="absolute top-1 left-0 w-full">
                              <h1 class="text-3xl text-center font-bold select-none">
                                    Sorsolás regisztráció
                              </h1>
                        </div>
                        <div class="flex flex-col">
                              <label for="fname">Vezetéknév:</label>
                              <input name="fname" type="text" class="border-gray-400 border" placeholder="" />
                        </div>
                        <div class="flex flex-col">
                              <label for="lname">Keresztnév:</label>
                              <input name="lname" type="text" class="border-gray-400 border" placeholder="" />
                        </div>
                        <div class="flex flex-col">
                              <label for="phone">Telefon:</label>
                              <input name="phone" type="tel" class="border-gray-400 border" placeholder="" />
                        </div>
                        <div class="mt-5 -mb-10 w-full text-end">
                              <button type="submit" class="bg-blue-400 hover:bg-blue-600 rounded p-2 text-white font-semibold">Küldés</button>
                        </div>
                  </form>
            </section>
      </div>
      @include('sweetalert::alert')
</body>

</html>