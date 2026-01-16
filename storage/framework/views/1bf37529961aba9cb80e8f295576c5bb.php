

<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<p>Nama: <?php echo e(auth()->user()->name); ?></p>
<p>Email: <?php echo e(auth()->user()->email); ?></p>
<p>Role: <?php echo e(auth()->user()->role); ?></p>

<hr class="my-4">

<a href="<?php echo e(route('lowongan.index')); ?>"
   class="inline-block bg-blue-600 text-white px-4 py-2 rounded">
   Lihat Lowongan
</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\SEMESTER3\PABW\jobfinder\resources\views/dashboard.blade.php ENDPATH**/ ?>