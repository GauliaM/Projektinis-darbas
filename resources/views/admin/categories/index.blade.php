<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-admin-section overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-white font-medium uppercase tracking-wider">Pavadinimas</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <div class="flex justify-end p-2">
                                            <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md text-white"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-home divide-y divide-gray-200 text-white">
                            @foreach ($categories as $category)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        {{ $category->name }}
                                    </div>
                                </td>
                                <td>
                                    <div class="flex justify-end">
                                        <div class="flex space-x-2">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md"><i class="fa fa-edit"></i></a>
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST" action="{{ route('admin.categories.destroy', $category->id) }}" onsubmit="return confirm('Patvirtinti');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>  
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                        <br>
                        <div class="pagination-block">
                            {{ $categories->appends(request()->input())->links('layouts.paginationlinks') }}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
