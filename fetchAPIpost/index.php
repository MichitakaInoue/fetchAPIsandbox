<?php
$params = json_decode(file_get_contents('./index.html'), true);
$id = $params["id"];
$title = $params["title"];
if($post){
  print_r('aaa');
}
print_r($id);
