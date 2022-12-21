<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="mt-[-25px]">
    <div class="w-full h-auto flex bg-[#fff]">
        <img src="{!! App::getFooterBanner()['url'] !!}" alt="{!! App::getFooterBanner()['alt'] !!}" class="w-auto h-auto">
        <div class="w-1/5 h-auto absolute z-10">
            {{-- <p class="text-[#fff] text-[28px] pt-[185px] pl-[149px]">ENCOMPASS</p> --}}
            <a href="#"><img src="{!! App::getFooterLogo()['url'] !!}" alt="{!! App::getFooterLogo()['alt'] !!}"
                    class="w-[200px] h-[30px] mt-[200px] ml-[150px]"></a>
            <nav>
                <ul class="pl-[150px] flex float-none mt-[20px]">
                    <li class="inline-block"> <i class='fa fa-youtube-play w-10 ml-6' style='color: red'></i> </li>
                    <li class="inline-block"> <i class='fa fa-instagram w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-twitter w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-facebook-square w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-linkedin-square w-10 ml-6' style='color: red'></i></li>
                </ul>
            </nav>
        </div>
        <div class="w-4/5 h-auto absolute z-10">
            <nav class="mt-[235px] ml-[409px]">
                <ul class="flex">
                    <li class="list-none list-outside flex"> <label class="w-[150px] text-[#fff] inline-block ml-[20px]">
                        ORCHESTRA SITE
                        </label></li>
                    <li class="list-none list-outside flex"> <label class="w-[200px] text-[#fff] inline-block ml-[20px]"> 
                        ENCOMPASS WEBSITE
                        </label></li>
                    <li class="list-none list-outside flex"> <label class="w-[200px] text-[#fff] inline-block ml-[20px]">
                            HANDOFF WEBSITE</label></li>
                    <li class="list-none list-outside mt-[-10px]"> <input
                            class="w-[250px] h-[55px] bg-[#202c40] rounded-[20px]
                    text-[#fff] border-2 border-[#fff]"
                            type="button" value="CONTACT"> </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
