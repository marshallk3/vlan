<?php
/*
* Code is unfinished
* Please do not download this, while in beta form.
* Feel free to contribute
*/

// Source Interface Config
$source_interface = $_POST['source_interface'];
$source_vlan = $_POST['source_vlan'];
$source_tag_num = $_POST['source_tag_num'];
$source_tag = $_POST['source_tag'];

// Destination Interface Config
$dest_interface = $_POST['dest_interface'];
$dest_vlan = $_POST['dest_vlan'];
$dest_tag_num = $_POST['dest_tag_num'];
$dest_tag = $_POST['dest_tag'];


if(isset($_POST['submit']) && !empty($_POST['submit'])) {
  // if (!logged_in()) 
  echo 'works';
}

?>
