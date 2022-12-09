<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-admin-section overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.products.index') }}" class="px-4 py-2 bg-dark-gray text-white rounded-md">Produktai</a>
                </div>
                <div class="flex flex-col p-2 bg-admin-section">
                    <form method="POST" action="{{ route('admin.products.store') }}">
                        @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-white">Produktas</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" placeholder="Įveskite produktą" class="block w-full appearance-none bg-gray-800 rounded-md py-2 px-3 text-base text-white leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <br>
                    <div class="sm:col-span-6">
                        <label for="category" class="block text-sm font-medium text-white">Kategorija</label>
                        <div class="mt-1">
                            <select name="category_id" class="block w-full appearance-none bg-gray-800 rounded-md py-2 px-3 text-base text-white leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="text-red-400 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="sm:col-span-6">
                        <textarea id="content" name="content" /></textarea>
                        @error('content') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
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
</x-admin-layout>
