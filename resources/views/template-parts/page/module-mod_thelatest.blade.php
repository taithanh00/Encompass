<section class="w-full h-full bg-[#fff] pt-[190.7px]">
    <div class="w-full h-full bg-[#fff] pt-[250px] pb-[184.1px]">
        <span
            class="text-[18px] font-bold not-italic leading-[1.33] tracking-[-0.14px] text-left text-[#e03116] ml-[148.5px]">
            THE LATEST
        </span>
        <div class="w-1/2 h-auto bg-[#fff]">
            <div id="thelatest-main"
                class=" max-w-[664px] max-h-[510px] rounded-[37px] bg-[var(--white)] ml-[149px] mr-[28px]">
                <img src="{!! App::getTheLatest()['url'] !!}" alt="{!! App::getTheLatest()['alt'] !!}" class="w-auto h-auto">
                <h6
                    class="text-[28px] font-bold not-italic leading-[1.21] tracking-[-0.22px] text-left text-[var(--dark-two)]
            pl-[40px] mt-[30px] mr-[58px]">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                </h6>
                <p
                    class="text-[18px] font-light not-italic leading-[1.33] tracking-[-0.14px] text-left text-[var(--brownish-grey)]
            pl-[40px] ">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
                </p>
                <label
                    class=" pl-[40px] text-[16px] font-bold not-italic leading-[1.75] tracking-[-0.13px] text-left text-[#e03116]">
                    READ MORE</label>
            </div>
        </div>
        <div class="w-1/2 h-auto bg-[#fff] float-right">
            <div id="thelatest-right1" class="max-w-[452px] max-h-[239px] rounded-[37px] mt-[-500px] ml-[28px]">
                <h6
                    class="text-[24px] font-semibold not-italic leading-[1.17] tracking-[-0.19px] text-left text-[var(--dark-two)]
                pl-[40px] pr-[44px] pt-[33px]">
                    Lorem ipsum dolor sit amet, consetetur</h6>
                <p
                    class="text-[18px] font-light not-italic leading-[1.33] tracking-[-0.14px] text-left text-[var(--brownish-grey)]
                pl-[40px] pr-[39px] pt-[5px] pb-[87px]">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                <!-- <label class="pl-[40px] text-[16px] font-bold not-italic leading-[1.75] tracking-[-0.13px] text-left text-[#e03116]">
                    READ MORE</label> -->
            </div>
            <div id="thelatest-right2" class="max-w-[452px] max-h-[239px] rounded-[37px] mt-[28px] ml-[28px]">
                <h6
                    class="text-[24px] font-semibold not-italic leading-[1.17] tracking-[-0.19px] text-left text-[var(--dark-two)]
                pl-[40px] pr-[44px] pt-[33px]">
                    Lorem ipsum dolor sit amet, consetetur</h6>
                <p
                    class="text-[18px] font-light not-italic leading-[1.33] tracking-[-0.14px] text-left text-[var(--brownish-grey)]
                pl-[40px] pr-[39px] pt-[5px] pb-[87px]">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                <!-- <label class="pl-[40px] text-[16px] font-bold not-italic leading-[1.75] tracking-[-0.13px] text-left text-[#e03116]">
                    READ MORE</label> -->
            </div>
        </div>

    </div>
</section>
<style>
    #thelatest-main {
        box-shadow: 0 3px 80px 0 rgba(182, 207, 208, 0.5);
    }

    #thelatest-right1 {
        box-shadow: 0 3px 80px 0 rgba(182, 207, 208, 0.5);
    }

    #thelatest-right2 {
        box-shadow: 0 3px 80px 0 rgba(182, 207, 208, 0.5);
    }
</style>
