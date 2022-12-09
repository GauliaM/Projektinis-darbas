<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-admin-section overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.questions.index') }}"
                        class="px-4 py-2 bg-dark-gray hover:bg-gray-800 text-slate-100 rounded-md">Produktai
                    </a>
                </div>
                <div class="flex flex-col p-2 bg-admin-section">
                    <form method="POST" action="{{ route('admin.questions.update', $question) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-white">Produktas</label>
                            <div class="mt-1">
                                <input type="text" name="name" placeholder="Įveskite produktą"
                                    class="block w-full appearance-none text-white bg-gray-800 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                    value="{{ $question->name }}" />
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="sm:col-span-6">
                            <label for="category" class="block text-sm font-medium text-white">Kategorija</label>
                            <div class="mt-1">
                                <select name="category_id" class="block w-full appearance-none text-white bg-gray-800 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach ($categories as $category)    
                                    @if ($category['id'] === $question->category_id)
                                        <option selected="selected" value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @else
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="sm:col-span-6">
                            <label for="tags" class="block text-sm font-medium text-white">Aprašymas</label>
                            <textarea id="content" 
                                name="content" />{!! $question->content !!}
                            </textarea>
                        </div>
                        <br>
                        <div class="sm:col-span-6 pt-5">
                            <button type="submit"
                                class="px-4 py-2 text-white bg-green-500 hover:bg-green-700 rounded-md">Atnaujinti
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
