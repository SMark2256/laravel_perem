<div class="mb-auto flex flex-row gap-10 mx-auto pt-20">
      @foreach ($winnerslist as $winner)
      <div class="bg-white h-72 w-72 drop-shadow-lg rounded">
            {{ $winner }}
      </div>
      @endforeach
      <div class="w-full mx-auto text-center h-14">
            <button class="uppercase font-calibril w-80 p-2 border rounded-full border-gray-700">
                  Nyertesek adatainak letöltése
            </button>
      </div>
</div>