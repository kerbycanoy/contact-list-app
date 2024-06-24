<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <h1 class="bg-green-500 text-white p-5 text-center">
        Contact
    </h1>
    <div class="container mx-auto p-5">
        @if(session()->has('success'))
            <div class="bg-green-100 text-green-800 border border-green-200 p-4 rounded mb-5">
                {{session('success')}}
            </div>
        @endif
        <div class="mb-5">
            <a class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700" href="{{route('contact.create')}}">Add a New Contact</a>
        </div>
        <table class="min-w-full bg-white border border-gray-300 mb-5">
            <thead>
                <tr>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Name</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Email</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Contact Number</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Address</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Notes</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Avatar</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Edit</th>
                    <th class="bg-gray-100 border-b border-gray-300 p-4 text-left">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="border-b border-gray-300">
                        <td class="p-4">{{$contact->name}}</td>
                        <td class="p-4">{{$contact->email}}</td>
                        <td class="p-4">{{$contact->number}}</td>
                        <td class="p-4">{{$contact->address}}</td>
                        <td class="p-4">{{$contact->notes}}</td>
                        <td class="p-4">
                            <img src="{{$contact->avatar}}" alt="Avatar" class="w-12 h-12 rounded-full">
                        </td>
                        <td class="p-4">
                            <a class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700" href="{{route('contact.edit', ['contact' => $contact])}}">Edit</a>
                        </td>
                        <td class="p-4">
                            <form method="post" action="{{route('contact.delete', ['contact' => $contact])}}" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <form method="get" action="{{route('dashboard')}}">
                <button type="submit" class="inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Go back to Dashboard</button>
            </form>
        </div>
    </div>
</body>
</html>
