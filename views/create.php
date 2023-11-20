<?php
  if (isset($_POST['submit'])) {
    $create_obj = new EmployeeController();
    $create_obj->store();
  }
?>

<div class="row">
  <div class="container col-6">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="heading mb-0">Add New Employee :</h1>
      <a href="index" class="btn btn-primary">
        <i class="fa-solid fa-home"></i>
      </a>
    </div>
  
    <form action="create" method="POST">
      <div class="row g-3">
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            placeholder="First Name"
            id="employeeFirstName"
            name="first-name"
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
              <option value="1" selected>Active</option>
              <option value="0">Stopped</option>
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
          />
          <label for="employeeSalary">Salary</label>
        </div>

        <div class="d-grid">
          <input class="btn btn-success" type="submit" value="Validate" name="submit" />
        </div>
      </div>
    </form>
  </div>
</div>
