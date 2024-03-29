<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Makanan</h1>

    <ul class="flex gap-5">
        <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src=<?php echo e($makanan->gambar); ?>

            width="150" />

            <li><?php echo e($makanan->nama); ?> - Rp. <?php echo e(number_format($makanan->harga)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </ul>
    
</body>
</html><?php /**PATH D:\Documents A\Kuliah\Tugas_2\Tugas_end\example-app - AMRD\resources\views/welcome.blade.php ENDPATH**/ ?>