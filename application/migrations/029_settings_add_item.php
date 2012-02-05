<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_settings_add_item extends CI_Migration {
	
	function up() 
	{	
		//$this->migrations->verbose AND print "Inserting to table settings...";
		
		$data = array(
				'name' 			=> 'print_office_head_in_dtr',
				'setting_value' => '0'
				);
		
		$this->db->insert('settings', $data);
		
	}

	function down() 
	{
		//$this->migrations->verbose AND print "deleting from table settings...";
		
		$this->db->where('name', 'print_office_head_in_dtr');
		$this->db->delete('settings');
	}
}
