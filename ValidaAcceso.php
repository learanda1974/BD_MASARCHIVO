<?php

if (!isset($_SESSION["Usuario"])){
    header("location:".URLBASE);
    exit;
}
