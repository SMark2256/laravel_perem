<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @vite('resources/js/app.js')
      <title>Prizegame</title>
</head>

<body>
      <div class="bg-[url('images/page_2.jpeg')] bg-cover bg-no-repeat w-full h-[1080px] p-1">
            <section class="m-32 mb-0 mt-10 h-40 bg-[#ffab01] relative select-none">
                  <div class="flex flex-row absolute bottom-0 left-10 gap-2">
                        <img src="images/header_logo.svg" alt="headerlogo" width="120" height="120">
                        <span class="uppercase text-[#00575f] font-bold text-2xl ">
                              eap dashboard
                        </span>
                  </div>
                  <div class="flex flex-row absolute right-10 top-[30%]">
                        <a href="/add-participant">
                              <button class="text-[#00575f] hover:text-[#003d42] rounded-full font-calibrib pl-10 pr-10 p-2">
                                    Résztvevő hozzáadása
                              </button>
                        </a>
                        <a href="/login">
                              <button class="bg-[#00575f] hover:bg-[#003d42] rounded-full uppercase text-white w-40 h-10 font-calibril">
                                    Kilépés
                              </button>
                        </a>
                  </div>
            </section>
            <section class="bg-[#59c6c6]/60 h-32 p-12 ml-32 mr-32 text-center align-middle justify-center">
                  <span class="uppercase text-xl font-bold text-black align-middle select-none">
                        A nyereményjátékban résztvevö játékosok száma: {{ count($members) }}
                  </span>
            </section>
            <section class="bg-[#6610f1]/60 h-60 ml-32 mr-32 align-middle pl-44 pr-44 p-14">
                  <span class="text-white text-2xl text-clip overflow-hidden font-calibril justify-center text-center align-middle select-none">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.
                  </span>
            </section>
      </div>
      <livewire:counter :max="count($members)" />
      <section class="h-[500px] bg-[#6610f1]/30 justify-between flex flex-col">
            <livewire:winners />
      </section>
      @livewireScripts
</body>

</html>