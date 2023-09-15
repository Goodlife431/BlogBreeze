<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-700 p-4 h-screen flex justify-center items-center">
    <div class="bg-gray-500 text-black rounded-lg shadow-lg p-8 max-w-md w-full">
        <h1 class="text-3xl font-semibold text-center mb-6">Create an Account</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input id="name" type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input id="email" type="email" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="password" required>
            </div>

            <div>
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <input id="password-confirm" type="password" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-200">
                    Register
                </button>
            </div>

            <div class="text-center text-gray-600 text-sm">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </div>
        </form>
    </div>
</body>
</html
