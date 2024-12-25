<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('managers.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager Name</label>
                            <input type="text" name="name" id="name"  class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>

                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager Tel Number</label>
                            <input type="text" name="phone" id="name" maxlength="9" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>

                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager Password</label>
                            <input type="password" name="password" id="name" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
