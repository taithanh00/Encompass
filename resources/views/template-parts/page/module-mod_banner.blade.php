<section>
    <div class="flex w-full min-h-[690px] bg-[#fff] min-[320px]:text-center class="main">
        <img src="{!! App::getBanner()['url'] !!}" alt="{!! App::getBanner()['alt'] !!}" class="w-full min-h-[690px]">
        <div class="w-2/5 h-full absolute z-10 ">
            <h1
                class="pt-[54px] pl-[115px] text-[55px] text-white text-left leading-[1.09] 
        font-bold not-italic tracking-[-0.44px]">
                Unlock the Power of Connection</h1>
            <p
                class="text-[20px] font-light not-italic leading-[1.4] tracking-[-0.16px] 
        text-left text-white pl-[115px] ">
                Connect & Grow Your Business with the Power of the Encompass Platform</p>
            <input type="button" value="ABOUT US"
                class="rounded-[27px] min-w-[242px] min-h-[54px] 
        text-center bg-[#e03116] text-white ml-[115px] ">
        </div>
        <div class="w-3/5 h-full absolute z-10">
            <!-- <img src="../../../assets/images/bannerimg.png" alt="bannerimg" width="auto" height="auto"> -->
            <!-- <p>aaaaaaaa</p> -->
            <img src="{!! App::getImageBanner()['url'] !!}" alt="{!! App::getImageBanner()['alt'] !!}" class="w-full h-auto ml-[755px]">
        </div>
    </div>
</section>
<link rel="stylesheet" href="../../../assets/styles/modules/global/_mod-banner.scss">
