{{-- <div class="container"><h3>Module: Banner BE</h3></div>
<div class="content">
    {!! $data->module['content']!!}
</div>
<img src="{{ $data->module['image']->url}}" alt="anh1">
    // var_dump($data); --}}
<script src="https://cdn.tailwindcss.com"></script>
<section>
    <div class="flex w-full min-h-[690px] bg-white min-[320px]:text-center 
        sm:flex sm:flex-wrap class="main">
        {{-- <img src="{!! App::getBanner()['url'] !!}" alt="{!! App::getBanner()['alt'] !!}" class="w-full min-h-[690px]"> --}}
        <img src="{{ $data->module['bannerimage']->url }}" alt="" class="w-full min-h-[690px]">
        <div
            class="w-2/5 h-full absolute z-10 
                sm:w-full sm:h-1/2 
                md:w-1/2 md:h-full 
                lg:w-1/2 lg:h-full 
                xl:w-1/2 xl:h-full
                2xl:w-1/2 2xl:h-auto
                ">
            <h1
                class="pt-[54px] pl-[115px] text-[55px] text-white text-left leading-[1.09] 
            font-bold not-italic tracking-[-0.44px]
                sm:text-center sm:ml-[-58px] sm:mr-[65px] 
                md:text-left md:ml-[-30px]
                lg:text-left lg:pl-[115px] lg:pt-[54px] 
                xl:text-left xl:pt-[54px] xl:pl-[210px] xl:ml-0
                2xl:text-left 2xl:pt-[131px] 2xl:pl-0 2xl:ml-[340px] 2xl:mr-0 
            ">
                {!! $data->module['content'] !!}
            </h1>
            <p class="text-[20px] font-light not-italic leading-[1.4] tracking-[-0.16px] 
            text-left text-white pl-[115px] sm:text-center ml-0
                sm:pr-[122px] sm:ml-0
                md:text-left md:pr-0 md:ml-0 
                lg:text-left lg:pr-0 lg:pl-0 lg:ml-[87px] 
                xl:text-left xl:pr-0 xl:pl-[210px] xl:ml-0
                2xl:text-left 2xl:ml-[130px]">
                {!! $data->module['content2'] !!}
            </p>
            <input type="button" value="ABOUT US"
                class="rounded-[27px] min-w-[242px] min-h-[54px] 
            text-center bg-[#e03116] text-white ml-[115px] 
            sm:ml-[250px] 
            md:ml-[115px] 
            lg:ml-[87px] 
            xl:ml-[210px]
            2xl:ml-[330px]
            ">
        </div>
        <div
            class="w-3/5 h-auto absolute z-10 
                sm:w-full sm:h-1/2 sm:mt-[350px] 
                md:w-1/2 md:h-full md:float-right 
                lg:w-1/2 lg:h-full lg:float-right
                xl:w-1/2 xl:h-full xl:float-right
                2xl:w-1/2 2xl:h-full 2xl:float-right
                ">
            <img src="{{ $data->module['image']->url }}" alt="anh1"
                class="
            w-full h-auto ml-[755px] 
                    sm:w-full sm:h-auto sm:ml-[72px] 
                    md:w-full md:h-auto md:ml-[755px] 
                    lg:w-full lg:min-h-[472px] lg:ml-[553px] lg:mt-[-318px]
                    xl:w-full xl:h-auto xl:ml-[855px] xl:mt-[-330px]
                    2xl:w-[1300px] 2xl:h-[800px] 2xl:ml-[1040px] 2xl:mt-[-341px]
            ">
            {{-- <img src="{!! App::getImageBanner()['url'] !!}" alt="{!! App::getImageBanner()['alt'] !!}"
                class="w-full h-auto ml-[755px] 
                    sm:w-full sm:h-auto sm:ml-[72px] 
                    md:w-full md:h-auto md:ml-[755px] 
                    lg:w-full lg:min-h-[472px] lg:ml-[553px] lg:mt-[-318px]
                    xl:w-full xl:h-auto xl:ml-[855px] xl:mt-[-330px]
                    2xl:w-[1300px] 2xl:h-[800px] 2xl:ml-[1040px] 2xl:mt-[-341px]
                    "> --}}
        </div>
    </div>
</section>
<style>
    h1 {
        color: white;
    }
</style>
