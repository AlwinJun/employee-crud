<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alwin Company</title>
  <!-- FONT ICONS -->
  <script src="https://kit.fontawesome.com/25c871887e.js" crossorigin="anonymous"></script>

  <!--  Option 1 -->
  <!-- NOTE:if the site won't update the styles put the style dir in url eg <localhost/form/css/style.css> OR use ctrl + f5 -->
  <link rel="stylesheet" href="dist/style.css">

  <!-- Use this in case option1 won't load properly-->
  <!-- <link rel="stylesheet" href="css/style.css?version=1"> -->

  </style>
</head>

<body>
  <header class="header">
    <div class="header__left">
      <h1>ALcom</h1>
    </div>
    <div class="header__right">
      <button class="header__notif" aria-label="Notification"><i class="fa-solid fa-bell header__notify" data-number="3+"></i></button>
      <p class="header__user">Admin Alwin</p>
      <button class="header__icon" aria-label="Profile button"><i class="fa-regular fa-user"></i></button>
    </div>
  </header>
  <main>
    <div class="container">
      <section class="section-cta">
        <h2 class="section-cta__title">
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
              <td class="section-table__action">
                <button class="section-table__edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="section-table__btn-gap"></span>
                <button class="section-table__delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
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
              <td class="section-table__action">
                <button class="section-table__edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="section-table__btn-gap"></span>
                <button class="section-table__delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
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
              <td class="section-table__action">
                <button class="section-table__edit" title="Edit record"><i class="fa-regular fa-pen-to-square"></i></button>
                <span class="section-table__btn-gap"></span>
                <button class="section-table__delete" title="Delete record"><i class="fa-solid fa-trash-can"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <section class="modal hidden">
      <div class="modal__container">
        <div class="modal__card">
          <button class="modal__close">&times;</button>
          <form action="server/process.php" method="POST" autocomplete="off" class="modal__form">
            <div class="even-row">
              <label class="modal__inputs">
                <input class="modal__input" type="text" name="first_name">
                <span class="modal__input-placeholder">First Name</span>
                <span class="modal__input-outline"></span>
              </label>
              <label class="modal__inputs">
                <input class="modal__input" type="text" name="last_name">
                <span class="modal__input-placeholder">Last Name</span>
                <span class="modal__input-outline"></span>
              </label>
            </div>
            <label class="modal__inputs">
              <input class="modal__input" type="email" name="email">
              <span class="modal__input-placeholder">Email</span>
              <span class="modal__input-outline"></span>
            </label>
            <label class="modal__inputs">
              <input class="modal__input" type="text" name="title">
              <span class="modal__input-placeholder">Job Title</span>
              <span class="modal__input-outline"></span>
            </label>
            <label class="modal__inputs">
              <input class="modal__input" type="text" name="salary" title="No spaces or  specila characters">
              <span class="modal__input-placeholder">Salary e.g 90000</span>
              <span class="modal__input-outline"></span>
            </label>
            <div class="modal-btn">
              <button class="modal-btn__add" type="submit" name="submit">Add Employee</button>
              <button class="modal-btn__update hidden" type="submit">Update Record</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <script src="src/js/main.js"></script>
</body>

</html>