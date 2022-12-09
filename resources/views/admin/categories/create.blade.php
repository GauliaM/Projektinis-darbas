<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-admin-section overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.categories.index') }}" class="bg-dark-gray px-4 py-2 text-slate-100 rounded-md text-white text-bold">Kategorijos</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                      <form method="POST" action="{{ route('admin.categories.store') }}">
                          @csrf
                        <div class="sm:col-span-6">
                          <label for="name" class="block text-sm font-medium text-white"> Kategorijos pavadinimas </label>
                          <div class="mt-1">
                            <input type="text" id="name" name="name" placeholder="Įveskite kategoriją"
                              class="block w-full appearance-none text-white bg-gray-800 border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                          </div>
                          @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <br>
                        <div class="sm:col-span-6 pt-5">
                          <button type="submit" class="px-4 py-2 text-white bg-green-500 hover:bg-green-700 rounded-md">Sukurti</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
