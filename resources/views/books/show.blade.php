@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold my-4 text-gray-800 dark:text-gray-100">Edit Author</h1>

        <form action="" method="POST" class="bg-transparent p-6 rounded">
            <div class="mb-4">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
            </div>

            <div class="mb-4">
                <label for="serial_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial
                    Number</label>
                <input type="text" name="serial_number" id="serial_number"
                    value="{{ old('serial_number', $book->serial_number) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
            </div>

            <div class="mb-4">
                <label for="published_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Published
                    At</label>
                <input type="date" name="published_at" id="published_at"
                    value="{{ old('published_at', $book->published_at) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
            </div>

            <div class="mb-4">
                <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                <input type="text" name="autors" id="autors"
                    value="{{ old('autors', $book->author->name) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('books.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancel</a>
            </div>
        </form>
    </div>
@endsection
