<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="/student/update/<?= $student['id'] ?>" method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" value="<?= $student['course'] ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
