<?php

require_once('../../config/dbConnect.php');
require_once('../../models/Student.php');

$id = $_GET['id'];

Student::delete($id);

header('Location: ../../index.php?p=students');