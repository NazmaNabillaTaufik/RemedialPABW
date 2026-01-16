<?php $__currentLoopData = $lamarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lamaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td style="font-weight: bold;"><?php echo e($lamaran->lowongan->posisi); ?></td>
        <td><?php echo e($lamaran->created_at->format('d M Y')); ?></td>
        <td>
            <a href="<?php echo e(asset('storage/cv/' . $lamaran->cv_file)); ?>" target="_blank" style="color: #e67e22; text-decoration: none; font-size: 0.9rem;">
                📄 Lihat CV
            </a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\SEMESTER3\PABW\jobfinder\resources\views/lamarans/index.blade.php ENDPATH**/ ?>