<?php 

include_once('source/database/connector.php');
include_once('source/model/model.php');
include_once('source/model/manager.php');
include_once('source/model/tag/tag.php');
include_once('source/model/tag/tagManager.php');


$tm = new TagManager();
print_r($tm->getById(1));
?>