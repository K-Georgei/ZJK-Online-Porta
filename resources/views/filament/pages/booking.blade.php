<x-filament-panels::page>

    <div class="text-center text-2xl">
        <h2>Szoba kiválasztása</h2>
    </div>


    <div id="roomsDiv" class="flex flex-wrap gap-4">
        {{-- szobák --}}
    </div>



    <!-- Modal overlay -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 dark:bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal tartalma -->
        <div class="bg-white dark:bg-black rounded-lg p-6 shadow-lg">
            <!-- Modal fejléce -->
            <h3 class="text-lg font-bold mb-4 text-amber-600 dark:text-amber-500">
                Szoba foglalása
            </h3>
            <!-- Modal leírása -->
            <p id="modalRoomInfo" class="text-gray-700 mb-4 dark:text-gray-300">
                Szoba információk itt jelennek meg.
            </p>
            <!-- Gombok -->
            <div class="flex justify-end gap-2">
                <button id="cancelButton" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                    Mégsem
                </button>
                <button id="confirmButton" class="bg-amber-500 hover:text-white px-4 py-2 rounded hover:bg-amber-700 dark:bg-amber-600 dark:hover:bg-amber-700">
                    Foglalás
                </button>
            </div>
        </div>
    </div>



    <input id="user_id" type="hidden" name="user_id" value="{{auth()->id()}}">

    @vite(['resources/js/room.js','resources/css/app.css'])

</x-filament-panels::page>
