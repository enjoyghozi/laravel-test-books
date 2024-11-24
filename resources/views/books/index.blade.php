@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex w-full justify-between">
            <h1 class="text-2xl font-bold my-4 text-gray-800 dark:text-gray-100">Books</h1>
            <div class="flex items-center">
                <a href="{{ route('books.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Add Book
                </a>
            </div>
        </div>

        <div class="relative overflow-x-auto rounded-t-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="bg-gray-400 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-400">
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Serial Number</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Title</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Published At</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Author</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $book->serial_number }}</td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $book->title }}</td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $book->published_at }}
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $book->author->name }}
                            </td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">
                                <a href="{{ route('books.show', $book->id) }}"
                                    class="text-gray-500 hover:underline">Show</a>
                                |
                                <a href="{{ route('books.edit', $book->id) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                |
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
@endsection
