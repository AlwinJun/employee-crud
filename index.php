<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UWP</title>
  <!-- FONT ICONS -->
  <script src="https://kit.fontawesome.com/25c871887e.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="dist/style.css">

  </style>
</head>

<body>
  <header class="header">
    <div class="header-left">
      <i class="fa-solid fa-user-graduate header-logo"></i>
      <h1>UWP</h1>
    </div>
    <div class="header-right">
      <button class="header-notif"><i class="fa-solid fa-bell header-notify" data-number="3+"></i></button>
      <p class="header-user">Admin Alwin</p>
      <button class="header-icon"><i class="fa-regular fa-user"></i></button>
    </div>
  </header>
  <main>
    <div class="container">
      <section class="section-cta">
        <h2 class="section-cta-title">
          Manage <span>Employees</span>
        </h2>
        <div class="btns">
          <button class="btn btn-refresh"><i class="fa-solid fa-arrows-rotate"></i>Refresh</button>
          <button class="btn btn-add"><i class="fa-solid fa-plus"></i></i>Add Employee</button>
          <button class="btn btn-delete"><i class="fa-solid fa-minus"></i>Delete All</button>
          <!-- <button class="btn btn-deleted hidden"><i class="fa-solid fa-trash"></i></button> -->
        </div>
      </section>
      <section class="section-table">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Job Title</th>
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
              <td>Male</td>
              <td>@emfasffsfasfail</td>
              <td>Web Developer</td>
              <td>24</td>
              <td>25</td>
              <td>Edit | Delete</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Alwin</td>
              <td>Jun</td>
              <td>Male</td>
              <td>@email</td>
              <td>Web Developer</td>
              <td>24</td>
              <td>25</td>
              <td>Edit | Delete</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Alwin</td>
              <td>Jun</td>
              <td>Male</td>
              <td>@email</td>
              <td>Web Developer</td>
              <td>24</td>
              <td>25</td>
              <td>Edit | Delete</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </main>
</body>

</html>