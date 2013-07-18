<?php
  
  $dir = 'patterns/' . ((isset($_GET['type'])) ? $_GET['type'] : 'base');
  $all_files = scandir($dir);
  $files = array_diff($all_files, array('..', '.'));

  print_r($files);