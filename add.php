<?php
include 'inc/dbconnection.php';
session_start();

function sanitize($dbconn, $input_data)
{
  $data = htmlspecialchars(mysqli_real_escape_string($dbconn, $input_data));
  return $data;
}

$fname = $lname = $email = $title = $salary = '';
// Insert Data
if (isset($_POST['submit'])) {
  $method = strtoupper($_SERVER['REQUEST_METHOD']);

  if ($method === 'POST') {
    // Get data 
    $fname = sanitize($conn, $_POST['first_name']);
    $lname = sanitize($conn, $_POST['last_name']);
    $email = sanitize($conn, $_POST['email']);
    $title = sanitize($conn, $_POST['title']);
    $salary = sanitize($conn, $_POST['salary']);
  }

  if (!empty($fname) && !empty($lname) && !empty($email) && !empty($title) && !empty($salary)) {
    //Capitalize all first letter per word
    $fname = ucfirst($fname);
    $lname = ucfirst($lname);
    $title = ucfirst($title);
    // If there is no empty fields
    // SQL Satetment
    $sql = "INSERT INTO employee_table(first_name,last_name,email,job_titile,salary)
                                VAlUES('$fname','$lname','$email','$title','$salary')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      $_SESSION['message'] = '<div class="message message__insert">
                                <p >Data added seuccessfully</p>
                              </div>';
    } else {
      echo "Error:   " . $sql . "<br>" . mysqli_error($conn);
    }

    // close connection to db
    $conn->close();
  } else {
    $_SESSION['required'] = '<div class="message message__required">
                                <p >Data insertion failed.Kindly fill up all fields!</p>
                              </div>';
  }

  // PRG METHOD -> Prevent FORM RESUBMISSION on the same page browser refresh
  // Place varibles to SESSION
  $_SESSION['fname'] = $fname;
  $_SESSION['lname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['title'] = $title;
  $_SESSION['salary'] = $salary;

  header('Location:add.php', true, 303);   //redirect to itself
  exit;
  // Free session variables data
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);
  unset($_SESSION['email']);
  unset($_SESSION['title']);
  unset($_SESSION['salary']);
}
?>

<?php include 'inc/header.php'; ?>
<!-- ADD FORML -->
<section class="form">
  <div class="form__container">
    <div class="form__card">
      <!-- POP UP MESSAGE once server done processing -->
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      }
      if (isset($_SESSION['required'])) {
        echo $_SESSION['required'];
        unset($_SESSION['required']);
      }
      ?>
      <form id="form-add" action="" method="POST" autocomplete="off">
        <div class="form__even-row">
          <label class="form__inputs left">
            <input class="form__input" type="text" name="first_name">
            <span class="form__input-placeholder ">First Name</span>
            <span class="form__input-outline"></span>
          </label>
          <label class="form__inputs rigth">
            <input class="form__input" type="text" name="last_name">
            <span class=" form__input-placeholder">Last Name</span>
            <span class="form__input-outline"></span>
          </label>
        </div>
        <label class="form__inputs">
          <input class="form__input" type="email" name="email">
          <span class="form__input-placeholder">Email</span>
          <span class="form__input-outline"></span>
        </label>
        <label class="form__inputs">
          <input class="form__input" type="text" name="title">
          <span class="form__input-placeholder">Job Title</span>
          <span class="form__input-outline"></span>
        </label>
        <label class="form__inputs">
          <input class="form__input" type="text" name="salary" title="No spaces or  specila characters">
          <span class="form__input-placeholder">Salary e.g 90000</span>
          <span class="form__input-outline"></span>
        </label>
        <div class="form-btn">
          <button class="form-btn__add" type="submit" name="submit">Add Employee</button>
        </div>
      </form>
    </div>
    <button class="form__back"><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></button>
  </div>
</section>

<?php include 'inc/footer.php'; ?>