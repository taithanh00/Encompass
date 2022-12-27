<section>
    <div
        class="w-full h-auto flex bg-[#fff] float none pr-[200px]
    sm:grid sm:grid-cols-1 sm:gap-0
    md:flex
    lg:flex
    xl:flex
    2xl:flex">
        <div
            class="w-1/3 float-left pt-[200px] 
        {{-- sm:pl-[100px] sm:pr-[100px] --}}
        sm:ml-[264px]
        md:
        lg:pl-[127px] lg:ml-0 lg:pt-[100px]
        xl:ml-0
        2xl:ml-[250.5px]
        ">
            {{-- <img src="{!! App::getService1()['url'] !!}" alt="{!! App::getService1()['alt'] !!}" 
                class="w-auto h-auto pl-[149px] pb-[19.2px]
                sm:pl-0"> --}}
            <img src="{{ $data->module['icon1']->url }}" alt=""
                class="
            w-auto h-auto pl-[149px] pb-[19.2px]
                sm:pl-0
            ">
            <h6
                class="text-[40px] font-bold not-italic leading-[0.88] tracking-[-0.38px] text-left pl-[149px]
            sm:pl-0">
                {!! $data->module['content1'] !!}
            </h6>
            <p
                class=" text-[30px] pl-[149px] font-light not-italic leading-[1.33] tracking-[-0.29px] text-left flex
            sm:min-w-[335.8px] sm:min-h-auto sm:pl-0">
                {!! $data->module['content1p'] !!}
            </p>
        </div>
        <div
            class="w-[600px] h-[2px] bg-[#e03116] ml-[148.5px] border-10 rotate-90 mt-[360px]
        sm:w-[268.8px] sm:h-[2px] sm:rotate-0 sm:mt-0 sm:ml-[264px] 
        md:rotate-90 
        lg:w-[600px] lg:h-[2px] lg:rotate-90 lg:mt-[236px] lg:ml-0 
        xl:w-[600px] xl:h-[2px] xl:rotate-90 xl:mt-[240px]
        2xl:w-[600px] 2xl:h-[2px] 2xl:rotate-90 2xl:mt-[250px]">
        </div>
        <div
            class="w-1/3 float-none pt-[200px]
        sm:ml-[264px] pt-[64.6px]
        md:ml-0
        lg:pl-0 lg:ml-[180px] lg:pt-[100px]
        xl:ml-0 
        ">
            {{-- <img src="{!! App::getService2()['url'] !!}" alt="{!! App::getService2()['alt'] !!}" 
                class="w-auto h-auto pb-[19.2px]"> --}}
            <img src="{{ $data->module['icon2']->url }}" alt="" class="w-auto h-auto pb-[19.2px]">
            <h6 class="text-[40px] font-bold not-italic leading-[0.88] tracking-[-0.38px] text-left ">
                {!! $data->module['content2'] !!}</h6>
            <p class="text-[30px] font-light not-italic leading-[1.33] tracking-[-0.29px] text-left">
                {!! $data->module['content2p'] !!}
            </p>
        </div>
        <div
            class="w-[600px] h-[2px] bg-[#e03116] ml-[148.5px] border-10 rotate-90 mt-[360px]
        sm:w-[268.8px] sm:h-[2px] sm:rotate-0 sm:mt-0 sm:ml-[264px] 
        md:rotate-90 
        lg:rotate-90 
        xl:w-[600px] xl:h-[2px] xl:rotate-90 xl:mt-[240px] xl:ml-0">
        </div>
        <div
            class="w-1/3 float-right pt-[200px]
        sm:ml-[264px] sm:pt-[64.6px]
        md:ml-0
        lg:ml-[-144px] lg:pr-[-100px] 
        xl:ml-0
        2xl:mr-0">
            {{-- <img src="{!! App::getService3()['url'] !!}" alt="{!! App::getService3()['alt'] !!}" 
            class="w-auto h-auto pb-[19.2px]"> --}}
            <img src="{{ $data->module['icon3']->url }}" alt="" class="w-auto h-auto pb-[19.2px]">
            <h6 class="text-[40px] font-bold not-italic leading-[0.88] tracking-[-0.38px] text-left ">
                {!! $data->module['content3'] !!}</h6>
            <p class=" text-[30px] font-light not-italic leading-[1.33] tracking-[-0.29px] text-left">
                {!! $data->module['content3p'] !!}</p>
        </div>
    </div>
</section>
