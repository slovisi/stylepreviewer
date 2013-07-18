<?php
  
  $dir = 'patterns/' . ((isset($_GET['type'])) ? $_GET['type'] : 'base');
  $all_files = scandir($dir);
  $files = array_diff($all_files, array('..', '.'));

  $patterns = array();

  function getName($string) {
    list($dashed_name, $suffix) = explode('.', $string);
    $final_name = str_replace('-', ' ', $dashed_name);
    return $final_name;    
  }

  foreach ($files as $file) {
    $patterns[] = array('name' => getName($file),
                         'url' => $dir . '/' . $file);
  }

  echo json_encode($patterns);