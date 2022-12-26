<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="mt-[-25px]">
    <div class="w-full h-auto flex bg-[#fff]
    sm:w-full sm:h-full sm:grid sm:grid-cols-1 sm:gap-0
    md:w-full md:h-auto md:flex md:bg-[#fff]
    lg:w-full lg:h-auto lg:flex lg:bg-[#fff]
    xl:w-full xl:h-auto xl:flex xl:bg-[#fff]
    2xl:w-full 2xl:h-auto 2xl:flex 2xl:bg-[#fff]">
        <img src="{!! App::getFooterBanner()['url'] !!}" alt="{!! App::getFooterBanner()['alt'] !!}" 
        class="w-auto h-auto
        sm:w-[767px] sm:h-[400.5px]
        md:w-auto md:h-auto
        lg:w-[1024px] lg:h-[352px]
        xl:w-auto xl:h-auto
        2xl:w-auto 2xl:h-auto">
        <div class="w-1/5 h-auto absolute z-10
        sm:w-full sm:h-auto sm:absolute sm:z-10
        md:w-1/5 md:h-auto md:absolute md:z-10
        lg:w-1/5 lg:h-auto lg:absolute lg:z-10
        xl:w-1/5 xl:h-auto xl:absolute xl:z-10
        2xl:w-2/5 2xl:h-full 2xl:absolute 2xl:z-10">
            {{-- <p class="text-[#fff] text-[28px] pt-[185px] pl-[149px]">ENCOMPASS</p> --}}
            <a href="#"><img src="{!! App::getFooterLogo()['url'] !!}" alt="{!! App::getFooterLogo()['alt'] !!}"
                    class="min-w-[200px] min-h-[30px] mt-[200px] ml-[150px]
            {{-- sm:min-w-[200px] sm:min-h-[30px] sm:mt-0 sm:ml-[10px] --}}
            sm:ml-[275px] sm:mt-[200px]
            md:mt-[200px] md:ml-[150px]
            lg:mt-[200px] lg:ml-[101px]
            xl:mt-[200px] xl:ml-[150px]
            2xl:mt-[230px] 2xl:ml-[380.5px]
            "></a>
            <nav>
                <ul class="pl-[150px] flex float-none mt-[20px] ml-0
            sm:pl-[305px]
            {{-- md --}}
            lg:pl-0 lg:ml-[101px]
            xl:pl-[150px] xl:ml-0
            2xl:ml-[220.5px]
            {{-- xl:pl-[] --}}
            ">
                    <li class="inline-block"> <i class='fa fa-youtube-play w-10 ml-6 sm:w-10 ' style='color: red'></i> </li>
                    <li class="inline-block"> <i class='fa fa-instagram w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-twitter w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-facebook-square w-10 ml-6' style='color: red'></i></li>
                    <li class="inline-block"> <i class='fa fa-linkedin-square w-10 ml-6' style='color: red'></i></li>
                </ul>
            </nav>
        </div>
        <div class="w-4/5 h-auto absolute  z-10
        sm:w-full sm:h-auto sm:absolute sm:z-10
        md:w-4/5 md:h-auto md:absolute  md:z-10
        lg:w-4/5 lg:h-auto lg:absolute  lg:z-10
        xl:w-4/5 xl:h-auto xl:absolute  xl:z-10
        2xl:w-3/5 2xl:h-full 2xl:absolute 2xl:z-10">
            <nav class="mt-[235px] ml-[409px]
        sm:ml-[70px] sm:mt-[295px]
        {{-- md: --}}
        lg:mt-[257px] lg:ml-[374px] lg:mr-[10px]
        {{-- xl: --}}
        xl:mt-[235px] xl:ml-[409px]
        2xl:ml-[650px] 2xl:mt-[291px]
        ">
                <ul class="flex">
                    <li class="list-none list-outside flex"> <label class="min-w-[150px] h-[25px] text-[#fff] 
                        inline-block ml-[20px]">
                        ORCHESTRA SITE
                        </label></li>
                    <li class="list-none list-outside flex"> <label class="min-w-[200px] h-[25px] text-[#fff] 
                        inline-block ml-[20px]"> 
                        ENCOMPASS WEBSITE
                        </label></li>
                    <li class="list-none list-outside flex"> <label class="min-w-[200px] h-[25px] text-[#fff] 
                        inline-block ml-[20px]">
                            HANDOFF WEBSITE</label></li>
                    <li class="list-none list-outside mt-[-10px] sm:mt-[-10px] md:mt-[-10px] lg:mt-[-115px] xl:mt-[-10px]"> <input
                            class="w-[250px] h-[55px] bg-[#202c40] rounded-[25px]
                    text-[#fff] border-2 border-[#fff] 
                    sm:w-[203px] sm:h-[50px] sm:mt-[50px] sm:ml-[-442px]
                    {{-- md: --}}
                    lg:w-[203px] lg:h-[50px]  lg:ml-[-250px] 
                    {{-- xl: --}}
                    xl:w-[250px] xl:h-[55px] xl:mt-0 xl:ml-0
                    "type="button" value="CONTACT"> </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
