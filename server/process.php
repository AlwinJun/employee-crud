<?php
include 'dbconnection.php';

$fname = $lname = $email = $title = $salary = '';
$fnameErr = $lnameErr = $emailErr = $titleErr = $salaryErr = '';
$required = '';
//Insert Data
if (isset($_POST['submit'])) {

  session_start();

  $method = strtoupper($_SERVER['REQUEST_METHOD']);

  if ($method === 'POST') {
    // Get data 
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $salary = $_POST['salary'];


    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($title) && !empty($salary)) {
      //Check for max char for all inputs 
      //Sanitize first name
      if (strlen($fname) > 50) {
        echo $fnameErr = 'Must consist of 1-50 characters only';
      } else {
        filter_var($fname, FILTER_SANITIZE_SPECIAL_CHARS);
      }

      //Sanitize first name
      if (strlen($lname) > 50) {
        echo $lnameErr = 'Must consist of 1-50 characters only';
      } else {
        filter_var($lname, FILTER_SANITIZE_SPECIAL_CHARS);
      }

      //If email is valid sanitize it
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo $emailErr = 'Invalid email address';
      } else {
        filter_var($email, FILTER_SANITIZE_EMAIL);
      }

      if (strlen($title) > 50) {
        echo $titleErr = 'Must consist of 1-50 characters only';
      } else {
        filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);
      }

      $salary = (float)$salary;
      if (filter_var($salary, FILTER_VALIDATE_FLOAT) == false) {
        echo  $salaryErr = 'numbers only';
      } else {
        if (strlen($salary) > 12) {
          echo $salaryErr = 'Must consist of 1-12 numbers only';
        } else {

          $salary = filter_var($salary, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }
      }

      //IF there is no error submit data to DB
      if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($titleErr) && empty($salaryErr)) {
        //SQL Satetment
        $sql = "INSERT INTO employee_table(first_name,last_name,email,job_titile,salary)
                VAlUES('$fname','$lname','$email','$title','$salary')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
          //PRG METHOD -> Prevent FORM RESUBMISSION on browser refresh
          //Place varibles to SESSION
          $_SESSION['fname'] = $fname;
          $_SESSION['lname'] = $lname;
          $_SESSION['email'] = $email;
          $_SESSION['title'] = $title;
          $_SESSION['salary'] = $salary;

          //redirect to index.php
          header('Location:../index.php', true, 303);
          exit;
          session_unset();
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
      }
    } else {
      echo $required = 'This is a required field';
    }
  }
}
