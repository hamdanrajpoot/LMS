<x-admin-layout>

    <x-toast />

    <div class="bg-white p-8 rounded-lg shadow-2xl w-full xl:w-[85%] mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Admin</h2>
        <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">THOMAS SHELBY</h2>

        <!-- Centered Image -->
        <div class="flex justify-center mb-6">
            <img width="150px" 
                 class="rounded-lg shadow-lg"
                 src="http://vignette1.wikia.nocookie.net/peaky-blinders/images/f/f5/Peaky_Tommy_Shelby.jpg/revision/latest?cb=20141013005757" 
                 alt="Thomas Shelby">
        </div>

        <div class="flex justify-center mb-6">
            <a href="{{ url('/admin/add-user') }}" 
               class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                ➕ Add User
            </a>
        </div>

        {{-- Your other dashboard content goes here --}}
        <p class="text-center text-gray-600">Welcome to the admin dashboard!</p>
    </div>

</x-admin-layout>