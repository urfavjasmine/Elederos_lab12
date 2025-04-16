<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <form method="POST" action="/register" class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Register</h2>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input name="name" id="name" placeholder="Name" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input name="email" type="email" id="email" placeholder="Email" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input name="password" type="password" id="password" placeholder="Password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input name="password_confirmation" type="password" id="password_confirmation" placeholder="Confirm Password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition duration-200">
            Register
        </button>
    </form>
</div>
