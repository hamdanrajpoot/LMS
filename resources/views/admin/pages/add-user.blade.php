<x-admin-layout>
    
<x-toast />
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full rounded-md p-5 xl:w-[85%] mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Add New User</h2>
        <form action="/admin/add-user" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('name')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select a role</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
                @error('role')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select a role</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="number" class="block text-sm font-medium text-gray-700">number</label>
                <input type="number" id="number" name="number"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('number')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('image')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- hiddent fields for teacher and student --}}


            {{-- course assigned --}}

            <div class="">
                <label for="course_assigned" class="block text-sm font-medium text-gray-700">Course Assigned</label>
                <select id="course_assigned" name="course_assigned"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select a role</option>
                   @foreach ($courses as $item)
                       <option value="{{$item->id}}">
                        {{$item->name }}
                       </option>
                   @endforeach
                </select>
            </div>



            <div class="md:col-span-2">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add User
                </button>
            </div>
        </form>
    </div>

{{-- 
    <script>
        $('#role').on('change', function() {
            let role = $(this).val()
            if (role == 'teacher') {
                $('.courses').show()
            } else {
                $('.courses').hide()
            }
        })
    </script> --}}

</x-admin-layout>