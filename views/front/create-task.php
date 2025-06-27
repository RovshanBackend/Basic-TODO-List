<div class="container my-5">

<h1>Add new task</h1>

<?php if (isset($error)) : ?>
<div class="alert alert-danger mt-3" role="alert">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<?php if (isset($success)) : ?>
<div class="alert alert-success mt-3" role="alert">
    <?php echo $success; ?>
</div>
<?php endif; ?>

<form action="" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter task title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter task description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Create Task</button>
    <a href="/tasks" class="btn btn-warning mt-2">Geri</a>
</form>

</div>