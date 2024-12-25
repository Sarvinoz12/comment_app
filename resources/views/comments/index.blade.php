<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Comments Table --}}
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <table class="w-full border-collapse border border-white dark:border-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-900">
                            <tr>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">ID</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Comment</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Product</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Status</th>
                                <th class="border border-gray-300 dark:border-gray-700 px-4 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($comments as $comment)
                                <tr>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $loop->index+1 }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">{{ $comment->comment }}</td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                                        {{ $comment->product->name ?? 'Unknown Product' }}
                                    </td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                                        {{ ucfirst($comment->status) }}
                                    </td>
                                    <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                                        {{-- Answer Button --}}
                                        <button onclick="openModal({{ $comment->id }})"
                                                class="bg-green-400 text-white px-4 py-2 rounded">answer
                                        </button>

                                        {{-- Delete Button --}}
                                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this comment?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 text-white px-4 py-2 rounded mt-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"
                                        class="text-center border border-gray-300 dark:border-gray-700 px-4 py-2">No
                                        comments available.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Answer Modal --}}
    <div id="answerModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg w-1/2">
            <h3 class="text-lg font-semibold mb-4">Answer Comment</h3>
            <form id="answerForm" method="POST">

                @csrf
                @method('PUT')
                <input type="hidden" name="comment_id" id="commentId">
                <textarea name="answer" id="answerText" rows="4" class="w-full border rounded p-2"
                          placeholder="Type your answer here..." required></textarea>
                <div class="flex justify-end mt-4">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit Answer</button>
                </div>
            </form>

        </div>
    </div>

    {{-- JavaScript for Modal --}}
    <script>
        function openModal(commentId) {
            const modal = document.getElementById('answerModal');
            const form = document.getElementById('answerForm');

            // Dynamically set form action
            form.action = `/comments/${commentId}`;
            document.getElementById('commentId').value = commentId; // Set hidden input value

            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('answerModal').classList.add('hidden');
        }

    </script>
</x-app-layout>
