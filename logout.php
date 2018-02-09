<?php

session_start();
unstet($_SESSION['user_id']);
header('Location: index.php');
