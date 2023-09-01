<?php
session_start();

if(isset($_SESSION['username'])){
    exit();
} else {
    header("Location: ../index.php?error=2");
    exit();
}
?>