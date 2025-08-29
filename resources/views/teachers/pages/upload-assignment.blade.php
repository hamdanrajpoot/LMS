<x-teacher-layout>
    <div class=" rounded-md p-5 xl:w-[85%] mx-auto">
        <div class="flex gap-2">
            <i class="bi bi-calendar-date"></i>
            <h4 class="text-md font-semibold">
                Upload An Assignment
            </h4>
        </div>
        <div class="w-full mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
            <form action="/teacher/upload-assignment" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="topic">Topic</label>
                    <input name="topic"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        type="text" id="topic" placeholder="Enter name of the topic..."
                        value="{{ old('topic') }}">
                    @error('topic')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="maxMarks">Max Marks</label>
                    <input name='marks'
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        type="text" id="maxMarks" placeholder="e.g. 15" value="{{ old('marks') }}">
                    @error('marks')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="description">Description</label>
                    <textarea name='desc'
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 h-24 resize-none"
                        id="description" placeholder="Enter description of the topic..." value="{{ old('desc') }}"></textarea>
                    @error('desc')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="batch">Batch no.</label>
                    <select name="batch"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        id="batch" value="{{ old('batch') }}">
                        <option>Select Batch</option>
                        <option value='1'>Batch 1</option>
                        <option value='2'>Batch 2</option>
                        <option value='3'>Batch 3</option>
                    </select>
                    @error('batch')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="deadline">Deadline</label>
                    <input name='deadline'
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        type="datetime-local" id="deadline" placeholder="mm/dd/yyyy" value="{{ old('deadline') }}">
                    @error('deadline')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="type">Type</label>
                    <select name="type"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                        id="type" value="{{ old('type') }}">
                        <option>Select type</option>
                        <option value="Assignment">Assignment</option>
                        <option value="Test">Test</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="uploadFile">Upload File</label>
                    <div class="flex items-center w-full">
                        <label for="uploadFile"
                            class="w-1/4 px-3 py-2 bg-gray-200 text-gray-700 rounded-l-lg cursor-pointer hover:bg-gray-300">Choose
                            File</label>
                        <input name="file"
                            class="w-3/4 px-3 py-2 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                            type="file" id="uploadFile" placeholder="No file chosen" readonly
                            value="{{ old('file') }}">
                    </div>
                    @error('file')
                        <p class="text-red-500 text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <button type="submit"
                        class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition duration-300">Add
                        Task</button>
                </div>
            </form>
        </div>
    </div>
</x-teacher-layout>