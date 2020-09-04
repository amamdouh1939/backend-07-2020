<?php

require_once('../../config/dbConnect.php');
require_once('../../models/Instructor.php');

$id = $_GET['id'];

Instructor::delete($id);

header('Location: ../../index.php?p=instructors');