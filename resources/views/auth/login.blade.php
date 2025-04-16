<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <form method="POST" action="/login" class="bg-white p-10 rounded-2xl shadow-xl w-full max-w-lg">
        @csrf
        <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Login</h2>

        <div class="mb-6">
            <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
            <input name="email" type="email" id="email" placeholder="Enter your email" required
                class="w-full h-14 px-6 py-4 text-lg border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <div class="mb-8">
            <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password</label>
            <input name="password" type="password" id="password" placeholder="Enter your password" required
                class="w-full h-14 px-6 py-4 text-lg border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <br>
        <button type="submit"
            class="w-full bg-blue-600 text-white py-3 text-lg rounded-xl hover:bg-blue-700 transition duration-200">
            Login
        </button>
    </form>
</div>
