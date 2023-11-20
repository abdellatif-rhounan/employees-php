<?php
  if (isset($_POST['employee-id'])) {
    $delete_obj = new EmployeeController();
    $delete_obj->destroy($_POST['employee-id']);
  }
