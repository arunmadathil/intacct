<?php

?>

<form method="POST" action="/student/update/<?=$student->id?>">
  <h3>Contact</h3>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" value = "<?= old($student->first_name);?>" placeholder="Enter first name.">
    <?php
    if (!empty($errors['first_name']))
      foreach ($errors['first_name'] as $message) {
        echo "<label style='color:red'> $message </label> </br>";
      }
    ?>
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Last Names</label>
    <input type="text" class="form-control" name="last_name" value = "<?= old($student->last_name);?>" placeholder="Last name">
    <?php
    if (!empty($errors['last_name']))
      foreach ($errors['last_name'] as $message) {
        echo "<label style='color:red'> $message </label> </br>";
      }
    ?>
  </div>

  <div class="form-group mb-2">
    <label for="exampleInputPassword1">DOB </label>
    <input type="date" class="form-control" name="dob" value = "<?=old($student->dob);?>" placeholder="Enter date of birth!">
    <?php
    if (!empty($errors['dob']))
      foreach ($errors['dob'] as $message) {
        echo "<label style='color:red'> $message </label> </br>";
      }
    ?>
  </div>
  <br>

  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Contact No </label>
    <input type="text" class="form-control" name="contact_no" value="<?= old($student->contact_no);?>" placeholder="Enter contact number!">
  
    <?php
    if (!empty($errors['contact_no']))
      foreach ($errors['contact_no'] as $message) {
        echo "<label style='color:red'> $message </label> </br>";
      }
    ?>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>