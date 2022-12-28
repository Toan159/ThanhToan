<?php 
    // var_dump($data->module['repeater']); die;
?>
<section class="module-example-blade lg:px-55">
    <div class="container">
        <div class="row">
            <div class="col w-full 2xl:w-2/5">
                <div class="border-2 border-solid w-2/5 border-orange-200"></div>
                <div class="pt-15"><?php echo $data->module['heading_5']; ?></div>
            </div>

            <div class="col w-full 2xl:w-3/5">
                <div class="row">
                    <?php $__currentLoopData = $data->module['repeater']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col w-full lg:w-1/2">
                        <?php echo $item->content; ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="slick-slider-demo">
            <div class="border-solid border-2 rounded-3xl bg-brown-300 pt-40 pb-30 font-bold 2xl:pr-[300px] 2xl:pl-90">
                <?php echo $data->module['slick_slider_demo']; ?>

            </div>
            <div class="border-solid border-2 rounded-3xl bg-brown-300 pt-40 pb-30 font-bold 2xl:pr-[300px] 2xl:pl-90">
                <?php echo $data->module['slick_slider_demo_1']; ?>

            </div>
        </div>
    </div>
</section>

