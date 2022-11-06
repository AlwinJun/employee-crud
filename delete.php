<?php
include 'inc/dbconnection.php';


function sanitize($dbconn, $input_data)
{
  $data = htmlspecialchars(mysqli_real_escape_string($dbconn, $input_data));
  return $data;
}

if (isset($_POST['delete'])) {
  session_start();
  $method = strtoupper($_SERVER['REQUEST_METHOD']);

  if ($method === 'POST') {
    // Get data 
    $delete_id = sanitize($conn, $_POST['delete_id']);

    $sql = "DELETE FROM employee_table WHERE id={$delete_id}";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      session_start();
      $_SESSION['message'] = '<div class="message message__delete">
                                <p >Data deleted seuccessfully</p>
                              </div>';
      header('Location:index.php');
    } else {
      echo "Error:   " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
