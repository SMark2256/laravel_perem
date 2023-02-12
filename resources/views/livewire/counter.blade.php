<section class="bg-[#6610f1] h-[400px] text-center align-middle justify-center pt-14">
      <div class="flex flex-row gap-4 w-full justify-center text-white font-calibril">
            <div>
                  <button wire:click="increment" class="uppercase bg-[#59c6c6] rounded-full w-40 h-10">
                        sorsolás start
                  </button>
            </div>
            <div>
                  <button wire:click="stop" class="uppercase bg-[#59c6c6] rounded-full w-40 h-10">
                        sorsolás stop
                  </button>
            </div>
      </div>
      <span class="text-white font-lores text-[12rem] text-center justify-center tracking-[4rem] select-none w-screen">

            {{ $max }}
      </span>
</section>