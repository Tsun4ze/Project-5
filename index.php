<?php
require 'controllers/Frontend.php';
$frontend = new Frontend();

return $frontend->index();