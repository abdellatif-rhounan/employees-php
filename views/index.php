<?php

  $index_obj = new EmployeeController();
  
  if (isset($_POST['search-submit'])) {
    $employees = $index_obj->find($_POST['search']);
  } else {
    $employees = $index_obj->index();
  }

  $active_span = '<span class="badge bg-success">Active</span>';
  $stopped_span = '<span class="badge bg-danger">Stopped</span>';
?>

<div class="container">
  <?php include 'views/include/alerts.php'; ?>

  
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fs-2">Employees List :</h1>

    <a href="logout" title="logout" class="text-decoration-none fs-5">
      <i class="fas fa-user"></i>
      @<?php echo $_SESSION['username'] ?>
    </a>
  </div>

  <div class="row-c">
    <form method="POST">
      <div class="input-group">
        <input
          type="text"
          class="form-control"
          placeholder="Search..."
          name="search"
          id="search"
          aria-label="Search button"
          aria-describedby="search-submit"
        />
        <button
          class="btn btn-info"
          type="submit"
          id="search-submit"
          name="search-submit"
        >
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </form>

    <div>
      <a class="btn btn-primary" href="index">
        <i class="fa-solid fa-home"></i>
      </a>
      <a class="btn btn-success" href="create">
        <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add New
      </a>
    </div>
  </div>

  <!-- Table -->
  <table class="table table-hover table-striped">
    <thead class="table-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">Department</th>
        <th scope="col">Job</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($employees as $e): ?>
        <tr>
          <th scope="row"><?php echo $e['id']; ?></th>
          <td><?php echo "{$e['first_name']} {$e['last_name']}"; ?></td>
          <td><?php echo $e['department']; ?></td>
          <td><?php echo $e['job']; ?></td>
          <td>
            <?php echo $e['status'] ? $active_span : $stopped_span; ?>
          </td>
          <td class="actions">
            <button type="button" class="btn btn-info btn-sm">
              <i class="fa-solid fa-eye"></i>
            </button>
            <form action="edit" method="POST">
              <input type="hidden" name="employee-id-edit" value="<?php echo $e['id']; ?>" />
              <button type="submit" class="btn btn-warning btn-sm">
                <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </form>
            <form action="delete" method="POST">
              <input type="hidden" name="employee-id" value="<?php echo $e['id']; ?>" />
              <button type="submit" class="btn btn-danger btn-sm">
                <i class="fa-solid fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
