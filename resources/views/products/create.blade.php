<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-white">Product Name</label>
                            <input type="text" name="name" id="name" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-white">Description</label>
                            <input type="text" name="description" id="description" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-white">photo</label>
                            <input type="file" name="image" id="description" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

{{--                        <div class="mb-4">--}}
{{--                            <label for="category_id" class="block text-white">Category</label>--}}
{{--                            <select name="category_id" id="category_id" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>--}}
{{--                                <option value="">Select Category</option>--}}
{{--                                @foreach($managers as $category)--}}
{{--                                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Product</button>
                            <a href="{{ route('products.index') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
