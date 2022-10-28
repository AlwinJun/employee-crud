<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alwin Company</title>
  <!-- FONT ICONS -->
  <script src="https://kit.fontawesome.com/25c871887e.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="dist/style.css">

  </style>
</head>

<body>
  <header class="header">
    <div class="header-left">
      <h1>ALcom</h1>
    </div>
    <div class="header-right">
      <button class="header-notif" aria-label="Notification"><i class="fa-solid fa-bell header-notify" data-number="3+"></i></button>
      <p class="header-user">Admin Alwin</p>
      <button class="header-icon" aria-label="Profile button"><i class="fa-regular fa-user"></i></button>
    </div>
  </header>
  <main>
    <div class="container">
      <section class="section-cta">
        <h2 class="section-cta-title">
          Manage <span>Employees</span>
        </h2>
        <!-- ADD, REFREESH, DELETE ALL Button -->
        <div class="btns">
          <button class="btn btn-refresh" type="submit" title="Refresh table"><i class="fa-solid fa-arrows-rotate"></i>Refresh Table</button>
          <button class="btn btn-add" type="submit" title="Add new employee"><i class="fa-solid fa-plus"></i></i>Add Employee</button>
          <button class="btn btn-delete" type="submit" title="Delete all table records"><i class="fa-solid fa-minus"></i>Delete All</button>
          <!-- <button class="btn btn-deleted hidden"><i class="fa-solid fa-trash"></i></button> -->
        </div>
      </section>
      <!-- TABLE -->
      <section class="section-table">
        <table>
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
            <tr>
              <td>1</td>
              <td>Alwin</td>
              <td>Jun</td>
              <td>@emfasffsfasfail</td>
              <td>Web Developer</td>
              <td>120000</td>
              <td>24</td>
              <td>25</td>
              <td class="action">
                <button class="action-edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="action-gap"></span>
                <button class="action-delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Alwin</td>
              <td>Jun</td>
              <td>@email</td>
              <td>Web Developer</td>
              <td>Salary</td>
              <td>24</td>
              <td>25</td>
              <td class="action">
                <button class="action-edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="action-gap"></span>
                <button class="action-delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Alwin</td>
              <td>Jun</td>
              <td>@email</td>
              <td>Web Developer</td>
              <td>50000</td>
              <td>24</td>
              <td>25</td>
              <td class="action">
                <button class="action-edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="action-gap"></span>
                <button class="action-delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <section class="modal hidden">
      <div class="modal-container">
        <div class="modal-card">
          <button class="modal-close">&times;</button>
          <form action="" method="POST" autocomplete="off">
            <div class="even-row">
              <label class="inputs">
                <input class="modal-input" type="text" name="" value="" required>
                <span class="inputs-placeholder">First Name</span>
                <span class="inputs-outline"></span>
              </label>
              <label class="inputs">
                <input class="modal-input" type="text" name="" value="" required>
                <span class="inputs-placeholder">Last Name</span>
                <span class="inputs-outline"></span>
              </label>
            </div>
            <label class="inputs">
              <input class="modal-input" type="email" name="" value="" required>
              <span class="inputs-placeholder">Email</span>
              <span class="inputs-outline"></span>
            </label>
            <label class="inputs">
              <input class="modal-input" type="text" name="" value="" required>
              <span class="inputs-placeholder">Job Title</span>
              <span class="inputs-outline"></span>
            </label>
            <label class="inputs">
              <input class="modal-input" type="text" name="" value="" required>
              <span class="inputs-placeholder">Salary</span>
              <span class="inputs-outline"></span>
            </label>
            <div class="modal-btn">
              <button class="modal-add" type="submit">Add Employee</button>
              <button class="modal-add-more hidden" type="submit">Add More</button>
              <button class="modal-update hidden" type="submit">Update Record</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <script src="src/js/main.js"></script>
</body>

</html>