<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Posts</title>
</head>
<body>

<h1 style="margin: 50px 50px">Cập nhật thông tin vấn đề</h1>

<form action="<?php echo e(route('issues.update', $issue->id)); ?>" method="POST" style="margin: 50px 50px">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <div class="mb-3">
        <label for="computer_id" class="form-label">Máy tính</label>
        <select name="computer_id" class="form-control" required>
            <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($computer->id); ?>" <?php echo e($computer->id == $issue->computer_id ? 'selected' : ''); ?>><?php echo e($computer->computer_name); ?> <?php echo e($computer->model); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>
        <div class="mb-3">
            <label for="reported_by" class="form-label">Người báo cáo sự cố</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by" value="<?php echo e($issue->reported_by); ?>" required>
        </div>
        <div class="mb-3">
            <label for="reported_date" class="form-label">Thời gian báo cáo</label>
            <input type="datetime" class="form-control" id="reported_date" name="reported_date" value="<?php echo e($issue->reported_date); ?>" required>
        </div>
        <div class="mb-3">
            <label for="urgency" class="form-label">Mức độ sự cố</label>
            <select class="form-control" id="urgency" name="urgency" required>
                <option value="Low" <?php echo e($issue->urgency == 'Low' ? 'selected' : ''); ?>>Low</option>
                <option value="Medium" <?php echo e($issue->urgency == 'Medium' ? 'selected' : ''); ?>>Medium</option>
                <option value="High" <?php echo e($issue->urgency == 'High' ? 'selected' : ''); ?>>High</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái hiện tại</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Open" <?php echo e($issue->status == 'Open' ? 'selected' : ''); ?>>Open</option>
                <option value="In Progress" <?php echo e($issue->status == 'In Progress' ? 'selected' : ''); ?>>In Progress</option>
                <option value="Resolved" <?php echo e($issue->status == 'Resolved' ? 'selected' : ''); ?>>Resolved</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body><?php /**PATH D:\Xampp\htdocs\BTTH4\resources\views/issues/edit.blade.php ENDPATH**/ ?>