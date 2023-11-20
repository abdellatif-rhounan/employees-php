<?php
  if (isset($_POST['employee-id-edit'])) {
    $edit_obj = new EmployeeController();
    $employee = $edit_obj->edit($_POST['employee-id-edit']);
  } else {
    Redirect::to('index');
  }
  
  if (isset($_POST['submit'])) {
    $update_obj = new EmployeeController();
    $update_obj->update();
  }
?>

<div class="row">
  <div class="container col-6">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="heading mb-0">Edit Employee :</h1>
      <a href="index">
        <i class="fa-solid fa-house text-primary fs-4"></i>
      </a>
    </div>
  
    <form action="edit" method="POST">
      <div class="row g-3">
        <input 
          type="hidden"
          name="id"
          value="<?php echo $employee['id'] ?>"
        />

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="First Name"
            id="employeeFirstName"
            name="first-name"
            value="<?php echo $employee['first_name'] ?>"
          />
          <label for="employeeFirstName">First Name</label>
        </div>
  
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="Last Name"
            id="employeeLastName"
            name="last-name"
            value="<?php echo $employee['last_name'] ?>"
          />
          <label for="employeeLastName">Last Name</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="CNI"
            id="employeeCNI"
            name="cni"
            value="<?php echo $employee['cni'] ?>"
          />
          <label for="employeeCNI">CNI</label>
        </div>
        
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            placeholder="Email"
            id="employeeEmail"
            name="email"
            value="<?php echo $employee['email'] ?>"
          />
          <label for="employeeEmail">Email</label>
        </div>
        
        <div class="form-floating">
          <input
            type="tel"
            class="form-control"
            placeholder="Phone Number"
            id="employeePhone"
            name="phone"
            value="<?php echo $employee['phone'] ?>"
          />
          <label for="employeePhone">Phone Number</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="Department"
            id="employeeDepartment"
            name="department"
            value="<?php echo $employee['department'] ?>"
          />
          <label for="employeeDepartment">Department</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="Job"
            id="employeeJob"
            name="job"
            value="<?php echo $employee['job'] ?>"
          />
          <label for="employeeJob">Job</label>
        </div>

        <div class="form-floating">
          <input
            type="date"
            class="form-control"
            placeholder="Join Date"
            id="employeeJoinDate"
            name="join-date"
            value="<?php echo $employee['join_date'] ?>"
          />
          <label for="employeeJoinDate">Join Date</label>
        </div>
        
        <div class="form-floating">
          <select
            class="form-select"
            id="employeeStatus"
            name="status"
            aria-label="Status"
            >
              <option value="1" <?php echo $employee['status'] ? 'selected':''; ?>>
                Active
              </option>
              <option value="0" <?php echo !$employee['status'] ? 'selected':''; ?>>
                Stopped
              </option>
          </select>
          <label for="employeeStatus">Status</label>
        </div>
        
        <div class="form-floating">
          <input
            type="number"
            class="form-control"
            placeholder="Salary"
            id="employeeSalary"
            name="salary"
            min="0"
            value="<?php echo $employee['salary'] ?>"
          />
          <label for="employeeSalary">Salary</label>
        </div>

        <div class="d-grid">
          <input class="btn btn-success" type="submit" value="Update" name="submit" />
        </div>
      </div>
    </form>
  </div>
</div>
