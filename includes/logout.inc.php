<?php

$_SESSION['login'] = false;
session_destroy();

echo "<script>window.location.replace('http://localhost/documents/BlogEval')</script>";
