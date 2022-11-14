<?php
  session_start();
?>

<nav
  class="navbar fixed-top navbar-expand-lg navbar-dark"
  style="background-color: rgba(255, 255, 255, 0.9)"
>
  <div class="container-fluid">
    <a
      class="navbar-brand"
      href="index_mem.php"
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
      <span
        class="fa-solid fa-user"
        style="font-size: 30px; color: rgb(22, 236, 165)"
      ></span>
    </button>

    <div
      class="navbar-collapse navbar-default custom-menu1"
      id="navbarTogglerDemo01"
    >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index_mem.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search_mem.php">ค้นหา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post_mem.php">โพสต์หารูมเมท</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact_mem.php">เกี่ยวกับเรา</a>
        </li>
      </ul>

      <form class="d-flex-1">
        <span class="accout"
          ><img src="<?php echo $_SESSION['avatar'] == '' ? '../img/People_1.png' : '../img/avatar/' . $_SESSION['avatar']; ?>" class="imgrm1" alt="" /> :
          <?php echo $_SESSION['name']; ?></span
        >
        <a class="btn7" type="submit" href="profile_mem.php" style="margin: 3px"
          ><i class="fa-solid fa-address-card"></i> Profile</a
        >
        <a
          class="btn7"
          type="submit"
          href="../api/logout.php"
          style="margin: 3px"
          ><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a
        >
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
              <img src="../img/People_1.png" class="imgrm2" alt="" />

              <div class="navbars2">
                <center><span class="accout2"><?php echo $_SESSION['name']; ?></span></center>
                <a
                  class="btn7"
                  type="submit"
                  href="profile_mem.php"
                  style="margin: 3px"
                >
                  <i class="fa-solid fa-address-card"></i> Profile</a
                >
                <a class="btn7" type="submit" href="#" style="margin: 3px"
                  ><i class="fa-solid fa-arrow-right-from-bracket"></i>
                  Logout</a
                >
              </div>
            </form>
          </center>

          <ul class="nabs" style="margin-top: 130px">
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="index_mem.php"
                ><i class="fa-solid fa-house"></i> หน้าหลัก</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="search_mem.php"
                ><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="post_mem.php"
                ><i class="fa-solid fa-file-circle-plus"></i> โพสต์หารูมเมท</a
              >
            </li>
            <hr class="bg-white" />
            <li class="nav-item">
              <a class="nav-link text-white" href="contact_mem.php"
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
