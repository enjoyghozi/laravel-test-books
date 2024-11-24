<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 font-sans">
    <div class="min-h-screen flex flex-col">
        <header class="relative bg-white dark:bg-gray-950">
            <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="border-b border-gray-200 dark:border-gray-700">
                    <div class="flex h-16 items-center">

                        <!-- Logo -->
                        <div class="ml-4 flex lg:ml-0">
                            <a href="#">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                        </div>

                        <div class="block ml-8 self-stretch">
                            <div class="flex h-full space-x-8">
                                <a href="{{ route('authors.index') }}"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-500  dark:hover:text-gray-800 dark:text-gray-200">Authors</a>
                                <a href="{{ route('books.index') }}"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-500 dark:hover:text-gray-800 dark:text-gray-200">Books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="flex-grow container mx-auto px-4 py-6">
            @yield('content')
        </main>

        <footer class="bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-200 py-4 mt-auto border-t-2 dark:border-gray-600">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; 2024 Laravel Test Books. All rights reserved.</p>
            </div>
        </footer>

    </div>
</body>
</html>
