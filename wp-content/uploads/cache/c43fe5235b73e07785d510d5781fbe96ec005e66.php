<section class="module-six-column bg-gray-300 px-50 pb-50 pt-49">
    <div class="container">
       
        <div class="xl:hidden"><?php echo $data->module['content_six']; ?></div>
        <div class="row">
            <div class="col lg:w-1/2">
                <div class="hidden xl:block"><?php echo $data->module['content_six']; ?></div>
                <?php echo $data->module['text']; ?>

            </div>
            <div class="col lg:w-1/2">
                <div class="row ">
                    <?php $__currentLoopData = $data->module['image']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col lg:w-1/2">
                            <img src="<?php echo e($item->image_content->url); ?>" alt="<?php echo e($item->image_content->alt); ?>">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        
    </div>
</section>
