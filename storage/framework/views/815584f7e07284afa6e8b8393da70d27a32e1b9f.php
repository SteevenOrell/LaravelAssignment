<?php $__env->startSection('content'); ?>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">   
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    You are logged in!

         <form method="post" action="/searchView">

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
                                        <div class="col-sm-6">
                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Record</span></a>

                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                                        </th>
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
                                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="<?php echo e($rec->id); ?>">
								<label for="checkbox1"></label>
							</span>
                                        </td>
                                        <td><?php echo e($rec->id); ?></td>
                            <td><?php echo e($rec->Geography); ?></td>
                                        <td><?php echo e($rec->record_2008); ?></td>
                                        <td><?php echo e($rec->record_2009); ?></td>
                                        <td><?php echo e($rec->record_2010); ?></td>
                                        <td><?php echo e($rec->record_2011); ?></td>
                                        <td><?php echo e($rec->record_2012); ?></td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="/create">     
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Geography</label>
                                                <input type="text" name="geo" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>2008 record </label>
                                                <input type="text" name="rec08" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2009 record</label>
                                                <input type="text" name="rec09" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2010 record</label>
                                                <input type="text" name="rec10" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>2011 record</label>
                                                <input type="text" name="rec11" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2012 record</label>
                                                <input type="text" name="rec12" class="form-control" required>

                                            </div>

                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-success" value="Add">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="/update">    
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <label>Row Number</label>
                                            <input type="text" name="id" class="form-control" required>
                                        </div>

                                        <div class="modal-body">
                                            <label>Geography</label>
                                            <input type="text" name="geo" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>2008 record </label>
                                            <input type="text" name="rec08" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2009 record</label>
                                            <input type="text" name="rec09" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2010 record</label>
                                            <input type="text" name="rec10" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>2011 record</label>
                                            <input type="text" name="rec11" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2012 record</label>
                                            <input type="text" name="rec12" class="form-control" required>

                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal HTML -->

                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form method="post" action="/delete"> 
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                             <input type="text" name="id" placeholder="Please enter row id" required>
                                            <p>Are you sure you want to delete this row?</p>
                                            <p class="text-warning"><small>This action will be executed when delete id pressed.</small></p>
                                        </div>
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
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

<form method="post" action="/download">            
    <input type="submit" value="Download CSV">
    <?php echo csrf_field(); ?>
</form>
                            <form method="post" action="/import" enctype="multipart/form-data"> 
                                <input type="file" name="fil">
                                <input type="submit" value="Upload">
                                <?php echo csrf_field(); ?>
                            </form>

                        </div>
                </div>
                </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>