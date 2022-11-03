<?php
include 'dbconnection.php';
session_start();

function sanitize($dbconn, $input_data)
{
  $data = htmlspecialchars(mysqli_real_escape_string($dbconn, $input_data));
  return $data;
}

$fname = $lname = $email = $title = $salary = '';
//Insert Data
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
    //If there is no empty fields
    //SQL Satetment
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

    //close connection to db
    mysqli_close($conn);
  } else {
    $_SESSION['message'] = '<div class="message message__required">
                                <p >Data insertion failed.Kindly fill up all fields!</p>
                              </div>';
  }

  //PRG METHOD -> Prevent FORM RESUBMISSION on browser refresh
  //Place varibles to SESSION
  $_SESSION['fname'] = $fname;
  $_SESSION['lname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['title'] = $title;
  $_SESSION['salary'] = $salary;

  header('Location:../index.php', true, 303);   //redirect to index.php
  exit;

  //Free session variables data
  unset($_SESSION['fname']);
  unset($_SESSION['lname']);
  unset($_SESSION['email']);
  unset($_SESSION['title']);
  unset($_SESSION['salary']);
}
