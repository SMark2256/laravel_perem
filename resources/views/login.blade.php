<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login Page</title>

      @vite('resources/js/app.js')
</head>

<body class="lg:mt-10 lg:m-32 antialiased bg-cover bg-no-repeat bg-[url('images/page_1.jpeg')] relative select-none">
      <section class="lg:h-40 w-full bg-[#ffab01] relative">
            <div class="flex flex-row absolute bottom-0 left-10 gap-2">
                  <img src="images/header_logo.svg" alt="headerlogo" width="120" height="120">
                  <p class="uppercase text-[#00575f] font-bold text-2xl ">
                        eap dashboard
                  </p>
            </div>
      </section>
      <section class="lg:w-[35rem] lg:h-[25rem] absolute right-0 top-32 flex flex-col gap-6">
            <form action="/add-participant" class="bg-white/80 pt-24 pb-24 p-24">
                  <div class="mb-4">
                        <input type="text" class="form-control block w-full px-4 py-2 font-normal bg-white border border-solid border-gray-600" id="username"
                              placeholder="Username" />
                  </div>

                  <!-- Password input -->
                  <div class="mb-24">
                        <input type="password" class="form-control block w-full px-4 py-2 font-normal bg-white border border-solid border-gray-600" id="password"
                              placeholder="Password" />
                  </div>

                  <div class="text-center">
                        <button type="submit"
                              class="justify-center mx-auto bg-[#00575f] text-white font-calibril text-sm leading-snug uppercase rounded-full w-40 h-12">
                              Login
                        </button>
                  </div>
            </form>
            <div class="flex flex-row gap-2">
                  <div>
                        <img src="images/green_logo.svg" alt="greenlogo" width="60" height="60">
                  </div>
                  <div>
                        <p class="text-white uppercase select-none h-full pt-3 text-sm">
                              we have brought eap and the program communication to you with an environment friendly approach.
                        </p>
                  </div>
            </div>
      </section>
</body>

</html>