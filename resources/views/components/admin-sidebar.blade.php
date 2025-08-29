<ul class="unstyled flex flex-col p-5 gap-4 bg-gray-500 min-h-screen text-white">
  <!-- Dashboard -->
  <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-600 items-center font-semibold">
    <img src="https://img.icons8.com/ios-filled/30/ffffff/dashboard.png" width="30" alt="Dashboard Icon">
    Dashboard
  </li>

  <!-- Courses -->
  <li class="assignment-dropdown rounded-md relative cursor-pointer font-semibold hover:bg-purple-700">
    <!-- label row -->
    <div class="flex gap-2 p-3 items-center">
      <img src="https://img.icons8.com/ios-filled/30/ffffff/books.png" width="30" alt="Courses Icon">
      Courses
    </div>
    <!-- submenu (now flows under the label, no absolute positioning) -->
    <ul class="assignment-dropdown-menu hidden mt-2 bg-gray-800 text-white w-max rounded-md shadow-lg border border-gray-700">
      <a href="/admin/add-courses" >
        <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
          <img src="https://img.icons8.com/ios-filled/30/ffffff/add-book.png" width="30" alt="Add Course Icon">
          Add Course
        </li>
      </a>
      <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://img.icons8.com/ios-filled/30/ffffff/view-file.png" width="30" alt="View Course Icon">
        View Course
      </li>
    </ul>
  </li>

  <!-- User -->
  <li class="assignment-dropdown rounded-md relative cursor-pointer font-semibold hover:bg-purple-700">
    <div class="flex gap-2 p-3 items-center">
      <img src="https://img.icons8.com/ios-filled/30/ffffff/user.png" width="30" alt="User Icon">
      User
    </div>
    <ul class="assignment-dropdown-menu hidden mt-2 bg-gray-800 text-white w-max rounded-md shadow-lg border border-gray-700">
      <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://img.icons8.com/ios-filled/30/ffffff/add-user-male.png" width="30" alt="Add User Icon">
        Add Users
      </li>
      <li class="flex hover:bg-purple-600 mt-2 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://cdn-icons-png.flaticon.com/512/8847/8847137.png" width="30" alt="View Users Icon">
        View Users
      </li>
    </ul>
  </li>

  <!-- Batches -->
  <li class="assignment-dropdown rounded-md relative cursor-pointer font-semibold hover:bg-purple-700">
    <div class="flex gap-2 p-3 items-center">
      <img src="https://img.icons8.com/ios-filled/30/ffffff/classroom.png" width="30" alt="Batches Icon">
      Batches
    </div>
    <ul class="assignment-dropdown-menu hidden mt-2 bg-gray-800 text-white w-max rounded-md shadow-lg border border-gray-700">
      <a href="/admin/add-batches">
        <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
          <img src="https://img.icons8.com/ios-filled/30/ffffff/add-property.png" width="30" alt="Add Batch Icon">
          Add Batch
        </li>
      </a>
      <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://img.icons8.com/ios-filled/30/ffffff/view-file.png" width="30" alt="View Batch Icon">
        View Batch
      </li>
      <li class="flex hover:bg-purple-600 gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://vectorified.com/images/assign-icon-11.png" width="30" alt="Assign Batch Icon">
        Assign Batch
      </li>
    </ul>
  </li>

  <!-- Logout -->
  <form action="/logout" method="POST">
    @csrf
    <button class="w-full text-left">
      <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold hover:bg-red-600">
        <img src="https://img.icons8.com/ios-filled/30/ffffff/logout-rounded.png" width="30" alt="Logout Icon">
        Logout
      </li>
    </button>
  </form>
</ul>

<!-- jQuery Dropdown Script -->
<script>
$(document).ready(function () {
  $('.assignment-dropdown').on('click', function (e) {
    e.stopPropagation();
    const $menu = $(this).children('.assignment-dropdown-menu');
    $menu.toggleClass('hidden');
    $('.assignment-dropdown').not(this).children('.assignment-dropdown-menu').addClass('hidden');
  });

  $(document).on('click', function () {
    $('.assignment-dropdown-menu').addClass('hidden');
  });

  $('.assignment-dropdown-menu').on('click', function (e) {
    e.stopPropagation();
  });
});
</script>