<x-layout>
  <x-navbar/>
      <div class="grid grid-cols-12 gap-5 p-5 ">
        <div class="xl:col-span-2 lg:col-span-3 hidden lg:block">
            {{-- sidebar-section --}}
            <x-sidebar/>
        </div>
        <div class="xl:col-span-10 lg:col-span-9 h-[80vh] overflow-y-scroll col-span-12">
          {{ $slot }}
        </div>
    </div>
</x-layout>