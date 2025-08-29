<x-admin-layout>
    <x-toast />
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full rounded-md p-5 xl:w-[85%] mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Add New Course</h2>
        <form action="/admin/add-course" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('course_name')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

           <div>
                <label for="description" class="block text-sm font-medium text-gray-700"> Description</label>
                <textarea id="description" name="description" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                @error('description')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="duration" class="block text-sm font-medium text-gray-700">Duration (months)</label>
                <input type="number" id="duration" name="duration"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('duration')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                <select id="level" name="level"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select a level</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                
                </select>
                @error('level')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

          
            
  

            <div class="md:col-span-2">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Course
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>