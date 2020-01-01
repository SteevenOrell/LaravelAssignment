<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">

    <?php if(Route::has('login')): ?>
        <div class="top-right links">


            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>

                <?php else: ?> <a href="<?php echo e(route('login')); ?>">Login</a>
                     <a href="<?php echo e(route('register')); ?>">Register</a>
              <?php endif; ?>

        </div>
<?php endif; ?>

        <form method="post" action="<?php echo e(url('/searchHome')); ?>"> 

            <input type="text" placeholder="Search Id" name="id">
            <input type="submit" value="Search">
            <?php echo csrf_field(); ?>
        </form>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Non severity crime <b>Table</b></h2>
                    </div>

                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>                                        
                <tr>

                    <th>ID</th>
                    <th>Geography  (Footnotes in parentheses–see bottom of spreadsheet)</th>
                    <th>2008</th>
                    <th>2009</th>
                    <th>2010</th>
                    <th>2011</th>
                    <th>2012</th>


                </tr>
                </thead>

                <tbody>


                    <?php $__currentLoopData = $dataValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($rec->id); ?></td>
                            <td><?php echo e($rec->Geography); ?></td>
                            <td><?php echo e($rec->record_2008); ?></td>
                            <td><?php echo e($rec->record_2009); ?></td>
                            <td><?php echo e($rec->record_2010); ?></td>
                            <td><?php echo e($rec->record_2011); ?></td>
                            <td><?php echo e($rec->record_2012); ?></td>


                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>



        </div>
    </div>

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php echo e($dataValues->links()); ?>            

            </ul>
        </nav>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>