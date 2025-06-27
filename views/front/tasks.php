<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tasks</h1>
        <a href="/create/task" class="btn btn-primary">Create Task</a>

    </div>

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

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= htmlspecialchars($task['id']) ?></td>
                        <td><?= htmlspecialchars($Carbon::parse($task['created_at'])-> translatedFormat('d F Y')) ?></td>
                        <td><?= htmlspecialchars($task['title']) ?></td>
                        <td><?= htmlspecialchars($task['description']) ?></td>
                        <td>
                            <a href="/update/task/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                            <a href="/delete/task/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>

    </table>

</div>