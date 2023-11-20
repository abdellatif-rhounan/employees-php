<?php
  if (isset($_POST['submit-register'])) {
    $register_obj = new UserController();
    $register_obj->register();
  }
?>

<div class="row">
  <div class="container col-6">
    <?php include 'views/include/alerts.php'; ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="heading mb-0">Create Account :</h1>

      <a href="index" class="btn btn-primary">
        <i class="fa-solid fa-home"></i>
      </a>
    </div>
    
    <form method="POST">
      <div class="row g-3">
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="First Name"
            id="first-name"
            name="first-name"
          />
          <label for="first-name">First Name</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="Last Name"
            id="last-name"
            name="last-name"
          />
          <label for="last-name">Last Name</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="@username"
            id="username"
            name="username"
          />
          <label for="username">@username</label>
        </div>

        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            placeholder="Password"
            id="password"
            name="password"
          />
          <label for="password">Password</label>
        </div>

        <div class="d-grid">
          <input type="submit" value="Create Account" class="btn btn-success" name="submit-register" />
        </div>
      </div>
    </form>

    <div>
      <a href="login" class="btn btn-link mt-3">Login</a>
    </div>
  </div>
</div>
