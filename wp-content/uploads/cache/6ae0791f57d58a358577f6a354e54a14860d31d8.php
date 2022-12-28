<section class="module-two-column pt-100">
    <div class="container">
        <div>
            <div class="text-center">   
                <?php echo $data->module['heading_2']; ?>

            </div>
    
            <div class="row">
                <?php $__currentLoopData = $data->module['content_two']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content_two col w-full text-center lg:w-1/3">
                    <div class="flex items-center justify-center lg:h-36 lg:pt-0 lg:items-center lg:justify-center"><img src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>"></div>
                    
                    <div class="pt-9"><?php echo $item->content_2; ?></div>
                    <div class="text-orange-200 font-bold pt-5 pb-20">
                        <a  href="<?php echo e($item->link->url); ?>" target="<?php echo e($item->link->target); ?>"><?php echo e($item->link->title); ?> 
                            <span class="icomoon icon-chevron-right"></a>
                    </div>
                </div>     
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
</section>