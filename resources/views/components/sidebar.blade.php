
<ul class="unstyled flex flex-col p-5 gap-4">
    <li class="flex gap-2 p-3 rounded-md cursor-pointer bg-purple-600 items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/dashboard.png" width="30px" alt="">
        Dashboard
    </li>
     <li class="flex gap-2 p-3 assignment-dropdown rounded-md relative cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/assignments.png" width="30px" alt="">
        Assignmate
        <ul class="unstyled assignment-dropdown-menu shadow-xl hidden py-2 px-1 absolute bg-white top-12 w-max rounded-md border border-gray-200">
            <li class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer  items-center font-semibold assignment-list">
        <img src="https://tse3.mm.bing.net/th/id/OIP.vwd0qhrWSwfXggZ7ZK0AmQHaHa?pid=Api&P=0&h=220" width="30px" alt="">
        View Assignments
    </li> 
    <li class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer   items-center font-semibold assignment-list">
        <img src="https://tse2.mm.bing.net/th/id/OIP.--sTMf7u-XRZRMVL_pu3UwHaHa?pid=Api&P=0&h=220" width="30px" alt="">
        Upload Assignments
    </li>
    <li class="flex hover:bg-gray-200 gap-2 p-3 rounded-md cursor-pointer  items-center font-semibold assignment-list">
        <img src="https://cdn-icons-png.flaticon.com/512/5847/5847220.png" width="30px" alt="">
        All Assignments
    </li>
        </ul>
    </li>
     <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://assignmate.free.nf/images/icons/attendance.png" width="30px" alt="">
        Attendance
    </li>
     <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
          <img src="https://assignmate.free.nf/images/icons/settings.png" width="30px" alt="">
        Settings
    </li>
    <form action="/logout" method="POST">
        @csrf
        <button>
 <li class="flex gap-2 p-3 rounded-md cursor-pointer items-center font-semibold">
        <img src="https://tse2.mm.bing.net/th/id/OIP.zkm7N-J9InzfWsAXrTvJIAHaHa?pid=Api&P=0&h=220" width="30px" alt="">
        Logout
    </li>
</button>
    </form>
     
</ul>
<script>
$('.assignment-dropdown').on('click',function(){
    $('.assignment-dropdown-menu').toggle('hidden')

})

</script>