<?php

require 'init.php';
if(!empty($_SESSION['USER']))
	unset($_SESSION['USER']);
redirect('login');
die();