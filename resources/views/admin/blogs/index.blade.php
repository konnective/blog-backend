<x-layout>

    <div class="content-container text-center  px-10  mt-2">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Add Task</h2>
            {{-- <p class="mb-4">Edit:</p> --}}
        </header>

        <div class="container p-8 mx-auto mt-12 bg-white">
            <div class="w-full overflow-x-auto">
                <table class="w-full shadow-inner">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 font-bold whitespace-nowrap">ID</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Category</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Title</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($blogs) == 0)
                            <tr>
                                <td>
                                    No data to show
                                </td>
                            </tr>
                        @endif
                        @foreach ($blogs as $item)
                            <tr>
                                <td class="p-4 px-6 text-center whitespace-nowrap">
                                    {{ $item->id }}
                                </td>
                                <td class="p-4 px-6 text-center whitespace-nowrap">
                                    {{ $item->category }}
                                </td>
                                <td class="p-4 px-6 text-center whitespace-nowrap">
                                    {{ $item->title }}
                                </td>
                                <td class="p-4 px-6 text-center whitespace-nowrap">
                                    <a href="{{ route('edit.blog', [$item->id]) }}">
                                        <button class="px-2 py-0 text-red-100 bg-blue-600 rounded">
                                            Edit
                                        </button>
                                    </a>
                                    <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
