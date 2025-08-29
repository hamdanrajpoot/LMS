<style>
    .unstyled {
        list-style: none;
        padding: 0;
    }
    .flex {
        display: flex;
    }
    .flex-col {
        flex-direction: column;
    }
    .gap-4 {
        gap: 1rem;
    }
    .p-5 {
        padding: 1.25rem;
    }
    .p-3 {
        padding: 0.75rem;
    }
    .rounded-md {
        border-radius: 0.375rem;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .bg-purple-600 {
        background-color: #9333ea;
    }
    .text-white {
        color: #ffffff;
    }
    .font-semibold {
        font-weight: 600;
    }
    .relative {
        position: relative;
    }
    .absolute {
        position: absolute;
    }
    .top-2 {
        top: 0.5rem;
    }
    .right-2 {
        right: 0.5rem;
    }
    .bg-red-500 {
        background-color: #ef4444;
    }
    .text-xs {
        font-size: 0.75rem;
    }
    .w-4 {
        width: 1rem;
    }
    .h-4 {
        height: 1rem;
    }
    .items-center {
        align-items: center;
    }
    .justify-center {
        justify-content: center;
    }
</style>
<ul class="unstyled flex flex-col p-2 gap-3">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-600 items-center font-semibold text-white">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="Dashboard">
        Dashboard
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold relative">
        <img src="https://assignmate.free.nf/images/icons/courses.png" width="30px" alt="Courses">
        Courses
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold relative">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="Assignments">
        Assignments
        <span class="absolute top-2 right-2 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">1</span>
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/marks.png" width="30px" alt="Marks">
        Marks
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/attendance.png" width="30px" alt="Attendance">
        Attendance
    </li>
    <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/settings.png" width="30px" alt="Settings">
        Settings
    </li>
      <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://tse2.mm.bing.net/th/id/OIP.zkm7N-J9InzfWsAXrTvJIAHaHa?pid=Api&P=0&h=220" width="30px" alt="">
        Logout
    </li>
</ul>

