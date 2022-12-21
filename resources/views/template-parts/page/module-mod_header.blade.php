<!-- <div class="w-full h-28 bg-[#202c40] drop-shadow-lg">
    <div class="w-2/5 h-full">
       <h2 class="max-w-auto max-h-full text-white text-center uppercase pt-8">ENCOMPASS</h2> -->
<!-- <a href="#" class=" text-white text-center font-bold no-underline pl-96 mt-10">ENCOMPASS</a>
    </div>
    <div class="w-3/5 h-full float-right">
        <ul class=" max-w-full max-h-full list-none text-center -mt-10">
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"><a href="" class="no-underline">ABOUT US</a></li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"><a href="" class="no-underline">LEADERSHIP</a></li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"><a href="" class="no-underline">CAREERS</a></li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"><a href="" class="no-underline">CONTACT US</a></li>
        </ul>
    </div>
</div> -->
<header class="w-full min-h-[111px] bg-[#202c40] drop-shadow-lg">
    <div class=" container px-4 md:px-0 h-full mx-auto flex justify-between items-center">
        <!-- Logo Here -->
        {{-- <a class=" text-white text-xl font-bold not-italic ml-10 no-underline pb-2 pl-40" href="">ENCOMPASS</a> --}}
        <a href="#"><img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}" 
            class="w-[226px] h-[37px] ml-[85px] my-[36.8px]"></a>
        <ul id="menu"
            class="hidden fixed top-0 right-0 px-10 py-16 bg-[#202c40] z-50 text-center mr-36 -mb-1
                md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">
            <li class="md:hidden fixed top-4 right-6 pt-10>
                    <a href=" javascript:void(0)"
                class="text-right text-white text-4xl " onclick="toggleMenu()">&times;</a>
            </li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"">
                <a class=" text-white opacity-70 hover:opacity-100 duration-300 text-sm no-underline"
                    href="#">ABOUT US</a>
            </li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"">
                <a class=" text-white opacity-70 hover:opacity-100 duration-300 text-sm no-underline"
                    href="#">LEADERSHIP</a>
            </li>
            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"">
                <a class=" text-white opacity-70 hover:opacity-100 duration-300 text-sm no-underline"
                    href="#">CAREERS</a>
            </li>

            <li class="inline-block leading-10 mr-24 font-normal not-italic tracking-normal text-left text-white"">
                <a class=" text-white opacity-70 hover:opacity-100 duration-300 text-sm no-underline"
                    href="#">CONTACT US</a>
            </li>
        </ul>
        <div class="flex items-center md:hidden">
            <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300"
                onclick="toggleMenu()">
                &#9776;
            </button>
        </div>
    </div>
</header>
<script>
    var menu = document.getElementById('menu');

    function toggleMenu() {
        menu.classList.toggle('hidden');
        menu.classList.toggle('w-full');
        menu.classList.toggle('h-screen');
    }
</script>
