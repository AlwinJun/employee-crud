<?php
include 'inc/dbconnection.php';
include 'inc/header.php';
?>
<div class="container">
  <section class="section-cta">
    <h2 class="section-cta__title">
      Manage <span>Employees</span>
    </h2>
    <!-- ADD, REFREESH, DELETE ALL Button -->
    <div class="btns">
      <a href="add.php">
        <button class="btn btn-add" type="submit" title="Add new employee">
          <i class="fa-solid fa-plus"></i>Add Employee
        </button>
      </a>
      <button class="btn btn-delete" type="submit" title="Delete all table records"><i class="fa-solid fa-minus"></i>Delete All</button>
      <!-- <button class="btn btn-deleted hidden"><i class="fa-solid fa-trash"></i></button> -->
    </div>
  </section>

  <!-- TABLE -->
  <section class="section-table">
    <table>
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
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Job Title</th>
          <th>Salary</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- GET DATA -->
        <?php
        // SGL GET DATA statement
        $sql = 'SELECT * FROM employee_table';
        $result = mysqli_query($conn, $sql);
        // Fetch all data in db
        $rows =  mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <!-- DISPLAY DATA -->
        <?php foreach ($rows as $row) : ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['job_titile']; ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td class="section-table__action">
              <a href="update.php?id=<?php echo $row['id']; ?>">
                <button type="button" class="section-table__edit" name="edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
              </a>
              <span class="section-table__btn-gap"></span>
              <button class="section-table__delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
            </td>
          </tr>
        <?php endforeach;
        $conn->close(); ?>
      </tbody>
    </table>
  </section>
</div>
<?php include 'inc/footer.php'; ?>