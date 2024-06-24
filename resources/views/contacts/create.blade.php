<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <h1 class="bg-green-500 text-white p-5 text-center">
        Create a Contact
    </h1>
    <div class="container mx-auto p-5">
        @if($errors->any())
            <div class="bg-red-100 text-red-800 border border-red-200 p-4 rounded mb-5">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group mb-4">
                <label for="name" class="block mb-2 font-bold">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="w-full p-2 border rounded">
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block mb-2 font-bold">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" class="w-full p-2 border rounded">
            </div>
            <div class="form-group mb-4">
                <label for="number" class="block mb-2 font-bold">Contact Number</label>
                <input type="text" id="number" name="number" placeholder="Contact Number" class="w-full p-2 border rounded">
            </div>
            <div class="form-group mb-4">
                <label for="address" class="block mb-2 font-bold">Address</label>
                <input type="text" id="address" name="address" placeholder="Address" class="w-full p-2 border rounded">
            </div>
            <div class="form-group mb-4">
                <label for="notes" class="block mb-2 font-bold">Notes</label>
                <input type="text" id="notes" name="notes" placeholder="Notes" class="w-full p-2 border rounded">
            </div>
            <div class="form-group mb-4">
                <label for="avatar" class="block mb-2 font-bold">Avatar</label>
                <input type="file" id="avatar" name="avatar" accept="image/*" class="w-full p-2 border rounded">
            </div>
            <div class="form-group">
                <input type="submit" value="Save a New Contact" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700 cursor-pointer">
            </div>
        </form>
        <div class="form-container">
            <a href="{{ route('contact.index') }}" class="mt-2 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Go Back</a>
        </div>
    </div>
</body>
</html>
