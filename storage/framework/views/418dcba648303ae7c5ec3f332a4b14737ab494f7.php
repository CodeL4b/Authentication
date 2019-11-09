<?php $__env->startSection('content'); ?>

<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

    <div class="content">
         <div class="title m-b-cd">
            Category
        </div>     
    </div>

    <div class="input-group mb-3">
        <form action="category" method="category">
            <?php echo csrf_field(); ?>
            <input class="form-control form-control-lg" type="text" placeholder="Create New Category" name="category">
        </form>
    </div>


    <div class="category_table">

        <table class="table">
            <thead class="table table-striped table-dark">
            <tr>
               <td colspan="4" style="text-align: center;">Product Category</td>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($categories->id); ?></th>
                    <td><?php echo e($categories->category); ?></td>
                    <td>

                        <form method="category" action="/category">
                            <?php echo csrf_field(); ?>
                            <input class="btn-sm" type="button" value="Edit"  name="edit" onclick="(function(){prompt('Edit Post');})()"/>
                        </form>

                    </td>

                    <td>
                        <input  class="text-danger btn-sm" type="button" value="Delete" />
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>

    <?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Auth\resources\views/category.blade.php ENDPATH**/ ?>