<?php
include 'dbconnection.php';

$fname = $lname = $email = $title = $salary = '';
$fnameErr = $lnameErr = $emailErr = $titleErr = $salaryErr = '';
$error = '';
//Insert Data
if (isset($_POST['submit'])) {

  $method = strtoupper($_SERVER['REQUEST_METHOD']);

  if ($method === 'POST') {
    // Get form and data
    $fname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $title = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $salary = filter_input(INPUT_POST, 'salary', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($title) && !empty($salary)) {
      //Check for max char
      if (strlen($fname) > 50) {
        $fnameErr = 'Must consist of 1-50 characters only';
      }

      if (strlen($lname) > 50) {
        $lnameErr = 'Must consist of 1-50 characters only';
      }

      if (strlen($title) > 50) {
        $titleErr = 'Must consist of 1-50 characters only';
      }

      if (strlen($salary) > 12) {
        $salaryErr = 'Must consist of 1-12 numbers only';
      }
      //Validate email adress
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $emailErr = 'Invalid email address';
      }

      //IF there is no error submit data to DB
      if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($titleErr) && empty($salaryErr)) {
        // SQL Satetment
        $sql = "INSERT INTO employee_table(first_name,last_name,email,job_titile,salary)
                VAlUES('$fname','$lname','$email','$title','$salary')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
      }
    } else {
      $error = 'This is a required field';
    }
  }
}
