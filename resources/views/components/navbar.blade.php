<div class="flex shadow-lg sticky top-0 bg-white z-[500] justify-between p-5 items-center ">
    <div class="flex gap-2 items-center">
    <a href="/dashboard">
        <img src="https://www.wedoanydesign.com/wp-content/uploads/2022/05/web-design.png" width="50px" alt="">
        </a>
            <h3 class="text-xl font-semibold">LMS</h3>
            
</div>
<h2 class="text-xl">Dashboard</h2>
<div class="flex gap-2 items-center">
        {{-- <i class="bi bi-person h-[40px] w-[40px] border border-purple-500 rounded-full flex justify-center items-center shadow-lg"></i> --}}


@if(auth()->user()->image)
<img src="{{ asset('/storage/'. auth()->user()->image)}}" class="h-[40px] w-[40px] border border-purple-500 rounded-full flex justify-center items-center shadow-lg" alt="">

@else
<i class="bi bi-person h-[40px] w-[40px] border border-purple-500 rounded-full flex justify-center items-center shadow-lg"></i>

@endif

    <h6 class="text-purple-500 capitalize font-semibold">
        {{ auth()->user()->name }}
    </h6>
</div>
</div>