<?php
/* 
Template: GLOBETHM
Author: John Amber
Website: http://www.globethm.com/
Version: 2.x
*/

class ModelSliderFullScreenBackgroundSlider extends Model {		
	public function getSlider($id) {
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."full_screen_background_slider WHERE id='".$id."'");
		if( count($query) ) {
			foreach($query->rows as $row) {
				$output = array(
					'id' => $row['id'],
					'settings' => unserialize($row['settings']),
					'content' => unserialize($row['content'])
				);
				return $output;
			}
		}
		return false;
	}

}
?>