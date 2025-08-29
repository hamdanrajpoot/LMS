
<x-admin-layout>
    <x-toast />
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full rounded-md p-5 xl:w-[85%] mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Add New Batch</h2>
        <form action="/admin/add-batches" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label for="batch_name" class="block text-sm font-medium text-gray-700">Batch No.</label>
                <input type="number" id="name" name="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('name')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div>
                <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                <select id="course" name="course"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select a course</option>
                    @if (isset($courses) && count($courses) > 0)
                        @foreach ($courses as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    @else
                        <option value="web_development">Web Development</option>
                        <option value="designing">Designing</option>
                        <option value="" disabled>No courses available</option>
                    @endif
                </select>
                @error('course')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" id="start_date" name="start_date"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('start_date')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="date" id="end_date" name="end_date"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('end_date')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div>
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                <input type="number" id="capacity" name="capacity"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('capacity')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select id="status" name="status"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Select status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                    <p class="text-red-500 font-semibold text-sm">
                        {{ $message }}
                    </p>
                @endif
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Batch
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>