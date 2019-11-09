<?php $__env->startSection('content'); ?>

<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

    <div class="input-group mb-3">

            <input class="btn-danger" type="button" value="New" onclick="window.location='<?php echo e(url("newPost")); ?>'">

    </div>


    <div class="category_table">

        <table class="table table-striped table-dark">
            <thead class="thead-light">
            <tr>
                <td colspan="4" style="text-align: center;">Post Category</td>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($post->id); ?></th>
                    <td><?php echo e($post->post_title); ?></td>
                    <td>

                        <form method="post/<?php echo e($post->id); ?>" action="post">
                            <?php echo e(method_field('patch')); ?>

                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="edit_post_title" id="post-title" value="">
                            <input class="btn-sm" value="Edit" type="button" onclick="onClickSaveTitle()"/>
                        </form>

                    </td>

                    <td>

                        <form method="post"  action="post/<?php echo e($post->id); ?>">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <input  class="text-danger btn-sm" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>

</div>

<script>
    function onClickSaveTitle() {
        var person = prompt("Please enter Post Title");

        if (person != null) {
            document.getElementById("post-title").value = person;
        }
    }
</script>

<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Auth\resources\views/post.blade.php ENDPATH**/ ?>