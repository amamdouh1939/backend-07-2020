<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Quantity</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">
                            <span>{{ $product->name }}</span>
                        </td>
                        <td class="border px-4 py-2">
                            <span>{{ $product->price }}</span>
                        </td>
                        <td class="border px-4 py-2">
                            <span>{{ $product->quantity }}</span>
                        </td>
                        <td class="border px-4 py-2">
                            <a href="#" class="btn btn-blue">Show</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="mt-3">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
