@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex w-full justify-between">
            <h1 class="text-2xl font-bold my-4 text-gray-800 dark:text-gray-100">Authors</h1>
            <div class="flex items-center">
                <a href="{{ route('authors.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Add Author
                </a>
            </div>
        </div>

        <div class="relative overflow-x-auto rounded-t-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="bg-gray-400 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-400">
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Name</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Email</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Books</th>
                        <th class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $author->name }}</td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $author->email }}</td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">{{ $author->books_count }}
                            </td>
                            <td class="px-4 py-2 border-b border-gray-400 dark:border-gray-600">
                                <a href="{{ route('authors.show', $author->id) }}"
                                    class="text-gray-500 hover:underline">Show</a>
                                |
                                <a href="{{ route('authors.edit', $author->id) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                |
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="inline">
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
            {{ $authors->links() }}
        </div>
    </div>
@endsection
