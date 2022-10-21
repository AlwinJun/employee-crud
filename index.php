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
      <section class="main-section">
        <h2 class="main-section-header">
          Manage <span>Students</span>
        </h2>
        <div class="btns">
          <button class="btn btn-refresh"><i class="fa-solid fa-arrows-rotate"></i>Refresh</button>
          <button class="btn btn-add"><i class="fa-solid fa-plus"></i></i>Add student</button>
          <button class="btn btn-delete"><i class="fa-solid fa-minus"></i>Delete</button>
          <button class="btn btn-deleted hidden"><i class="fa-solid fa-trash"></i></button>
        </div>
      </section>
    </div>
  </main>
</body>

</html>