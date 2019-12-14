<?php 


function get_total($field, $table_name)
{
	$ci = get_instance();
	$query = "SELECT sum($field) as $field FROM $table_name";
	$result = $ci->db->query($query);
	return $result->row()->$field;

}