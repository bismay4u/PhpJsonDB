<?php
$jsondb=new SimpleJSONDB(dirname(__FILE__)."/data/");

$jsondb->load("test");
//$jsondb->add("test",array("W"=>"m","U"=>"Hypo"));
//$jsondb->delete("test",4);
//$jsondb->update("test",4,array("Q"=>"W","R"=>false));
print_r($jsondb->fetchByIndex("test"));
?>
