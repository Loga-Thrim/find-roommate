<?php
    session_start();

    if($_SESSION) {
        if($_SESSION['name'] && $_SESSION['email']) {
            echo "<script>window.location.href = './member/index_mem.php'</script>";
        }
    }
?>