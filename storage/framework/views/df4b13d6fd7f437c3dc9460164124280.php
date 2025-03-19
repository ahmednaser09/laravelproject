<h1 style="text-align: center; font-family: Arial, sans-serif; margin-bottom: 20px;">Edit Place</h1>

<form action="<?php echo e(route('users.update', $users->id)); ?>" method="post" style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <input type="text" name="name" placeholder="Name" value="<?php echo e($users->name); ?>" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    <input type="text" name="email" placeholder="Email" value="<?php echo e($users->email); ?>" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
    
    
    <select name="role" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">
        <option value="admin" <?php echo e($users->role == 'admin' ? 'selected' : ''); ?>>Admin</option>
        <option value="user" <?php echo e($users->role == 'user' ? 'selected' : ''); ?>>User</option>
    </select>

    <input type="submit" value="Update" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
</form>
<?php /**PATH C:\Users\user\Desktop\laravelproject\resources\views/dashboard/layout/users/edit.blade.php ENDPATH**/ ?>