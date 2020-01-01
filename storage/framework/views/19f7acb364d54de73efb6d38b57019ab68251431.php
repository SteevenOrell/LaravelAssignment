
<body>
<div class="flex-center position-ref full-height">
<?php if(Route::has('login')): ?>
                <div class="top-right links">
<?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
<?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

<?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
<?php endif; ?>
                    <?php endif; ?>
                    </div>
<?php endif; ?>

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
                                <th>Created Time</th>
                                <th> Updating Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($record) >0): ?>
                            <?php $__currentLoopData = $record; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td><?php echo e($value->id); ?></td>
                                <td><?php echo e($value->{'Geography (Footnotes in parentheses�see bottom of spreadsheet)'}); ?></td>
                                <td><?php echo e($value->{'2008'}); ?></td>
                                <td><?php echo e($value->{'2009'}); ?></td>
                                <td><?php echo e($value->{'2010'}); ?></td>
                                <td><?php echo e($value->{'2011'}); ?></td>
                                <td><?php echo e($value->{'2012'}); ?></td>
                                <td><?php echo e($value->created_at); ?></td>
                                <td> <?php echo e($value->updated_at); ?></td>
                            </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            <div class="content">
                <div class="title m-b-md">
Laravel
                </div>

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
    </body>
</html>