<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_settings_add_item extends CI_Migration {
	
	function up() 
	{	
		//$this->migrations->verbose AND print "Inserting hospital_view_leave_days to table settings...";
		
		$data = array(
				'name' 			=> 'hospital_view_leave_days',
				'setting_value' => '0'
				);
		
		$this->db->insert('settings', $data);
		
		//$data = array(
				//'name' 			=> 'cto_certification_position',
				//'setting_value' => ''
				//);
		
		//$this->db->insert('settings', $data);

	}

	function down() 
	{
		//$this->migrations->verbose AND print "deleting hospital_view_leave_days from table settings...";
		
		$this->db->where('name', 'hospital_view_leave_days');
		$this->db->delete('settings');
		
		//$this->db->where('name', 'cto_certification_position');
		//$this->db->delete('settings');
	
	}
}
