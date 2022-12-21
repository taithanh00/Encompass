<section>
    <div class="w-full min-h-[690px] bg-[#202c40]" class="main">
        <img src="{!! App::getBanner()['url'] !!}" alt="{!! App::getBanner()['alt'] !!}" class="w-full">
        <div class="w-1/2 h-full">
            <h1
                class="pt-[54px] pr-[100px] pl-[115px] text-[55px] text-white text-left leading-[1.09] 
        font-bold not-italic tracking-[-0.44px]">
                {{ $data->Title }}</h1>
            <p
                class="text-[20px] font-light not-italic leading-[1.4] tracking-[-0.16px] 
        text-left text-white pl-[115px] ">
                {{ $data->Desc }}</p>
            <input type="button" value="ABOUT US"
                class="rounded-[27px] min-w-[242px] min-h-[54px] 
        text-center bg-[#e03116] text-white ml-[115px]">
        </div>
        <div class="w-1/2 h-full">
            <!-- <img src="../../../assets/images/bannerimg.png" alt="bannerimg" width="auto" height="auto"> -->
        </div>
    </div>
</section>
