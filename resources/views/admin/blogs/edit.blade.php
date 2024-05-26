<x-layout>

    <div class="content-container text-center  px-10  mt-2">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Blogs</h2>
            {{-- <p class="mb-4">Edit:</p> --}}
        </header>

        <div class="container p-8 mx-auto mt-12 bg-white">


            <form method="POST" class="w-4/5 mx-auto" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="item_id"
                    value="{{ $item->id }}" hidden />
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        value="{{ $item->title }}" />
                </div>
                <div class="mb-6">
                    <label class="inline-block text-lg mb-2">Description</label>
                    <textarea id="description" class="border border-gray-200 rounded p-2 w-full" name="description">{{ $item->description }}</textarea>
                </div>
                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Update
                    </button>

                    <a href="" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-layout>
