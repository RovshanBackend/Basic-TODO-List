<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Tasks</h1>
        <a href="/create/task" class="btn btn-primary">Create Task</a>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= htmlspecialchars($task['id']) ?></td>
                        <td><?= htmlspecialchars($task['title']) ?></td>
                        <td><?= htmlspecialchars($task['description']) ?></td>
                        <td>
                            <a href="/edit/task/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/delete/task/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5" class="text-center">No tasks found.</td>
                </tr>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= htmlspecialchars($task['id']) ?></td>
                        <td><?= htmlspecialchars($task['title']) ?></td>
                        <td><?= htmlspecialchars($task['description']) ?></td>
                        <td>
                            <a href="/edit/task/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/delete/task/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5" class="text-center">No tasks found.</td>
                </tr>
        </tbody>

    </table>

</div>