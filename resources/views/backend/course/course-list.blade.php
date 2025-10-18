@extends('backend.master')

@section('content')
    <div class="container mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">All Courses</h2>
            <button id="openModal"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition">
                Add Course
            </button>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="bg-green-100 text-green-700 dark:bg-green-800 dark:text-green-100 p-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{-- Course Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($courses as $course)
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-lg transition p-5 border border-white">
                    {{-- Thumbnail --}}
                    <div class="h-40 w-full mb-4 overflow-hidden rounded-xl">
                        @if ($course->thumbnail)
                            <img src="{{ asset('backend/images/course/' . $course->thumbnail) }}" alt="{{ $course->title }}"
                                class="h-full w-full object-cover">
                        @else
                            <div class="flex items-center justify-center h-full bg-gray-100 dark:bg-gray-700 text-gray-400">
                                No Image
                            </div>
                        @endif
                    </div>

                    {{-- Course Info --}}
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-1">{{ $course->title }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">By {{ $course->instructor }}</p>
                    <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400 mb-3">BD: {{ $course->price }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2 mb-2">
                        {{ Str::limit($course->description, 80) }}
                    </p>
                    <div class="text-xs text-gray-500 dark:text-gray-400 mb-4">Duration: {{ $course->duration }}</div>

                    {{-- Buttons --}}
                    <div class="flex justify-between mt-2">
                        <a href="javascript:void(0);" onclick='openEditModal(@json($course))'
                            class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-sm font-semibold flex items-center gap-1">
                            Edit
                        </a>


                        <a href="{{ url('/admin/course/delete/' . $course->id) }}"
                            onclick="return confirm('Are you sure you want to delete this course?')"
                            class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Delete
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10 text-gray-500 dark:text-gray-400">
                    No courses found.
                </div>
            @endforelse
        </div>

    </div>

    <!-- Modal Background -->
    <div id="courseModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Card -->
        <div class="bg-white dark:bg-gray-900 rounded-2xl w-full max-w-lg p-8 relative">
            <!-- Close Button -->
            <button id="closeModal"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                ✕
            </button>

            <h2 class="text-2xl font-bold text-indigo-600 mb-6">Add New Course</h2>

            <!-- Form -->
            <form action="{{ url('/admin/course/store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <input type="text" name="title" placeholder="Course Title"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>

                <input type="text" name="instructor" placeholder="Instructor Name"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>

                <input type="text" name="duration" placeholder="Duration"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>

                <input type="number" name="price" placeholder="Price"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>

                <textarea name="description" placeholder="Description"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg"></textarea>

                <input type="file" name="thumbnail"
                    class="w-full border border-white rounded-lg p-2 bg-gray-900 text-white">

                <div class="text-right">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg">
                        Save Course
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- Edit Course Modal -->
    <div id="editCourseModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-900 rounded-2xl w-full max-w-lg p-8 relative">
            <button id="closeEditModal"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">✕</button>
            <h2 class="text-2xl font-bold text-indigo-600 mb-6">Edit Course</h2>
            <form id="editCourseForm" action="{{ route('course.update') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf
                <input type="hidden" name="id" id="editCourseId">
                <input type="text" name="title" id="editTitle" placeholder="Course Title"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>
                <input type="text" name="instructor" id="editInstructor" placeholder="Instructor Name"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>
                <input type="text" name="duration" id="editDuration" placeholder="Duration"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>
                <input type="number" name="price" id="editPrice" placeholder="Price"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg" required>
                <textarea name="description" id="editDescription" placeholder="Description"
                    class="w-full px-4 py-2 bg-gray-900 text-white border border-white rounded-lg"></textarea>
                <input type="file" name="thumbnail"
                    class="w-full border border-white rounded-lg p-2 bg-gray-900 text-white">
                <div class="text-right">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg">Update
                        Course</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal Script -->
    <script>
        const openModal = document.getElementById('openModal');
        const closeModal = document.getElementById('closeModal');
        const modal = document.getElementById('courseModal');

        openModal.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });

        // Open Edit Modal
        const editModal = document.getElementById('editCourseModal');
        const closeEditModal = document.getElementById('closeEditModal');

        function openEditModal(course) {
            document.getElementById('editCourseId').value = course.id;
            document.getElementById('editTitle').value = course.title;
            document.getElementById('editInstructor').value = course.instructor;
            document.getElementById('editDuration').value = course.duration;
            document.getElementById('editPrice').value = course.price;
            document.getElementById('editDescription').value = course.description;

            editModal.classList.remove('hidden');
            editModal.classList.add('flex');
        }

        closeEditModal.addEventListener('click', () => {
            editModal.classList.add('hidden');
            editModal.classList.remove('flex');
        });
    </script>
@endsection
