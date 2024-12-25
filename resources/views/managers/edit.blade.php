<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('managers.update', $manager) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager Name</label>
                            <input type="text" name="name" id="name" value="{{ $manager->name }}" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager phone</label>
                            <input type="text" name="phone" id="phone" value="{{ $manager->phone }}" maxlength="9" class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Manager password</label>
                            <input type="password" name="password" id="password"  class="w-full mt-1 border rounded px-3 py-2 dark:bg-gray-700 dark:text-gray-300" required>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
