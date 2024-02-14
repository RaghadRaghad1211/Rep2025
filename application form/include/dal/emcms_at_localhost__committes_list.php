<?php
$dalTablecommittes_list = array();
$dalTablecommittes_list["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecommittes_list["committee_name"] = array("type"=>200,"varname"=>"committee_name", "name" => "committee_name", "autoInc" => "0");
$dalTablecommittes_list["id_office"] = array("type"=>200,"varname"=>"id_office", "name" => "id_office", "autoInc" => "0");
$dalTablecommittes_list["id"]["key"]=true;

$dal_info["emcms_at_localhost__committes_list"] = &$dalTablecommittes_list;
?>