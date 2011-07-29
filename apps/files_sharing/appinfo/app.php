<?php

require_once('apps/files_sharing/lib_share.php');

OC_UTIL::addScript("files_sharing", "share");

OC_APP::addNavigationEntry( array( "id" => "files_sharing_list",
  "order" => 10, 
  "href" => OC_HELPER::linkTo( "files_sharing", "list.php" ),
  "name" => "Share", 
  "icon" => OC_HELPER::imagePath( "core", "actions/share.png" )));

?>