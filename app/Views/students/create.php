<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <h2>Add Student</h2>
    <form action="/student/store" method="post">
        <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" required>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required>
</div>
<div class="mb-3">
    <label for="course" class="form-label">Course</label>
    <input type="text" name="course" class="form-control" id="course" required>
</div>
<button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
