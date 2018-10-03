<?php

$work = new Work($_POST);

$work ->create();

echo json_dencode($work);
