<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-section-home overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <form action="{{ route('home.search') }}" method="GET">
                            <div class="mt-1">
                                <select name="category_id" class="appearance-none text-white bg-gray-800 rounded-md text-base leading-normal transition duration-150 ease-in-out">
                                    <option selected>Kategorijos</option>
                                    @foreach ($structuredCategories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                                <input type="text" class="bg-gray-800 appearance-none text-white rounded-md text-base leading-normal transition duration-150 ease-in-out" name="query" placeholder="Paieška" value="{{ request()->input('query') }}">
                            </div>
                            <br>
                        </form>
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            @foreach ($products as $product)
                                <div class="productslist">
                                    <h5>{{ $product->name }}</h5>
                                </div>
                                <div class="panel">
                                    <p>{!! $product->content !!}</p>
                                </div>
                            @endforeach
                            <br>
                            <div class="pagination-block px-2">
                                {{ $products->appends(request()->input())->links('layouts.paginationlinks') }}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

