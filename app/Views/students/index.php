<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2>Student List</h2>
    <a href="/student/create" class="btn btn-primary mb-3">Add Student</a>
    
    <form action="/student/search" method="get" class="mb-3">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search students...">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

    <table class="table table-bordered">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Course</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php foreach($students as $s): ?>
            <tr>
                <td><?= $s['name'] ?></td>
                <td><?= $s['email'] ?></td>
                <td><?= $s['course'] ?></td>
                <td>
                    <a href="/student/edit/<?= $s['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/student/delete/<?= $s['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links() ?>
</div>
