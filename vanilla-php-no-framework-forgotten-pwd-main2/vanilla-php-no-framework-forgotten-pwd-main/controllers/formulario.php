<?php

if (isset($_GET['error'])) {
    $error = $_GET['error'];
    echo "<p style='color: red;'>$error</p>";
  }

  ?>