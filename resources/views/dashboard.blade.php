<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100 text-gray-800">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg mb-5 p-6 text-center">
                    <div class="text-gray-900">
                        <p>{{ __("You're logged in!") }}</p>
                        <a href="{{ route('contact.index') }}" class="inline-block mt-5 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                            View Contact List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
