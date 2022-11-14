<nav
  class="navbar sticky-top navbar-expand-lg navbar-dark"
  style="background-color: transparent"
>
  <div class="container-fluid">
    <a
      class="navbar-brand"
      href="index.php"
      style="font-size: 25px; color: rgb(221, 147, 36)"
      >RmFinder</a
    >
    <button
      class="btn btn-dark"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasRight"
      aria-controls="offcanvasRight"
    >
      <span class="fa-solid fa-user" style="font-size: 30px"></span>
    </button>

    <div
      class="navbar-collapse navbar-default custom-menu1"
      id="navbarTogglerDemo01"
    >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="myFunction()" href="#">ค้นหา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="myFunction()" href="#">โพสต์หารูมเมท</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">เกี่ยวกับเรา</a>
        </li>
      </ul>

      <form class="d-flex-1">
        <a class="btn3" type="submit" href="login.php">ล็อกอิน</a>
      </form>

      <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel"
      >
        <div
          class="offcanvas-header"
          style="background-color: rgba(255, 255, 255, 0)"
        >
          <h5 id="offcanvasRightLabel"></h5>
          <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <center>
            <form class="d-flexs">
              <a class="btn5" type="submit" href="login.php" style="margin: 3px"
                >ล็อกอิน</a
              >
              <a
                class="btn5"
                type="submit"
                href="register.php"
                style="margin: 3px"
                >สมัครสมาชิก</a
              >
            </form>
          </center>

          <ul class="mt-4">
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php"
                ><i class="fa-solid fa-house"></i> หน้าหลัก</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" onclick="myFunction()" href="#"
                ><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" onclick="myFunction()" href="#"
                ><i class="fa-solid fa-file-circle-plus"></i> โพสต์หารูมเมท</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.php"
                ><i class="fa-solid fa-id-card-clip"></i> เกี่ยวกับเรา</a
              >
            </li>
            <hr class="bg-white" />
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
