<?php
include 'inc/dbconnection.php';
//Get ID from the url
$id = $_GET['id'];
$sql = "SELECT * FROM employee_table WHERE id={$id}";
$result = mysqli_query($conn, $sql);
$rows =  mysqli_fetch_assoc($result);

function sanitize($dbconn, $input_data)
{
  $data = htmlspecialchars(mysqli_real_escape_string($dbconn, $input_data));
  return $data;
}

if (isset($_POST['submit'])) {
  $method = strtoupper($_SERVER['REQUEST_METHOD']);

  if ($method === 'POST') {
    // Get data 
    $update_id = sanitize($conn, $_POST['update_id']);
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
    $sql = "UPDATE employee_table SET
                    first_name='$fname',
                    last_name='$lname',
                    email = '$email',
                    job_titile = '$title',
                    salary = '$salary'
                                WHERE id = {$update_id} ";


    $result = mysqli_query($conn, $sql);

    if ($result) {
      $_SESSION['message'] = '<div class="message message__insert">
                                <p >Data updated seuccessfully</p>
                              </div>';
      header('Location:index.php');
    } else {
      echo "Error:   " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
  } else {
    $_SESSION['required'] = '<div class="message message__required">
                                <p >Data insertion failed.Kindly fill up all fields!</p>
                              </div>';
    header('Location:index.php');
  }
}

?>

<?php include 'inc/header.php'; ?>
<!-- UPDATE FORM -->
<section class="form">
  <div class="form__container">
    <div class="form__card">
      <?php
      ?>
      <form id="form-update" action="" method="POST" autocomplete="off">
        <div class="form__even-row">
          <label class="form__inputs left">
            <input class="form__input" type="text" name="first_name" value="<?php echo $rows['first_name']; ?>">
            <span class="form__input-placeholder update">First Name</span>
            <span class="form__input-outline update"></span>
          </label>
          <label class="form__inputs rigth">
            <input class="form__input" type="text" name="last_name" value="<?php echo $rows['last_name']; ?>">
            <span class=" form__input-placeholder update">Last Name</span>
            <span class="form__input-outline update"></span>
          </label>
        </div>
        <label class="form__inputs">
          <input class="form__input" type="email" name="email" value="<?php echo $rows['email']; ?>">
          <span class="form__input-placeholder update">Email</span>
          <span class="form__input-outline update"></span>
        </label>
        <label class="form__inputs">
          <input class="form__input" type="text" name="title" value="<?php echo $rows['job_titile']; ?>">
          <span class="form__input-placeholder update">Job Title</span>
          <span class="form__input-outline update"></span>
        </label>
        <label class="form__inputs">
          <input class="form__input" type="text" name="salary" title="No spaces or  specila characters" value="<?php echo $rows['salary']; ?>">
          <span class="form__input-placeholder update">Salary e.g 90000</span>
          <span class="form__input-outline update"></span>
        </label>
        <div class="form-btn">
          <input type="hidden" name="update_id" value="<?php echo $rows['id'] ?>">
          <button class="form-btn__update" type="submit" name="submit">Update Employee</button>
        </div>
      </form>
    </div>
    <button class="form__back"><a href="index.php"><i class="fa-solid fa-arrow-left"></i> </a></button>
  </div>
</section>

<?php include 'inc/footer.php'; ?>