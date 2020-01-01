;

<?php $__env->startSection('content'); ?>;
<?php (
header("Content-Disposition:attachment;filename='dataCsv.csv'");
echo "Your download will start shortly."); ?>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>