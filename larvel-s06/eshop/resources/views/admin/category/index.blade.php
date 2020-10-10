<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('app.categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">{{ __('app.name_en') }}</th>
                        <th class="px-4 py-2">Name AR</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="border px-4 py-2">{{ $category->id }}</td>
                        <td class="border px-4 py-2">
                            <span>{{ $category->translations['name']['en'] }}</span>
                        </td>
                        <td class="border px-4 py-2">
                            <span>{{ $category->translations['name']['ar'] }}</span>
                        </td>
                        <td class="border px-4 py-2">
                            <a href="#" class="btn btn-blue">Show</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="mt-3">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
