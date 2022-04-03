<?php

if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ua'])) {
  session_start();

  $_SESSION['lang'] = filter_var($_GET['lang'], FILTER_SANITIZE_STRING);
}

header("Location: /");

?>