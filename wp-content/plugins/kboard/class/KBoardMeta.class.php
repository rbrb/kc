<?php
/**
 * KBoard 워드프레스 게시판 메타
 * @link www.cosmosfarm.com
 * @copyright Copyright 2013 Cosmosfarm. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl.html
 */
class KBoardMeta {
	
	private $board_id;
	private $meta;
	
	public function __construct($board_id=''){
		$this->meta = new stdClass();
		$this->board_id = 0;
		if($board_id) $this->setBoardID($board_id);
	}
	
	public function __get($name){
		$name = esc_sql($name);
		if(isset($this->meta->{$name}) && $this->meta->{$name}){
			return stripslashes($this->meta->{$name});
		}
		return '';
	}
	
	public function __set($name, $value){
		global $wpdb;
		if($this->board_id){
			$name = esc_sql($name);
			$value = esc_sql($value);
			if($value){
				$wpdb->query("INSERT INTO `{$wpdb->prefix}kboard_board_meta` (`board_id`, `key`, `value`) VALUE ('$this->board_id', '$name', '$value') ON DUPLICATE KEY UPDATE `value`='$value'");
			}
			else{
				$wpdb->query("DELETE FROM `{$wpdb->prefix}kboard_board_meta` WHERE `board_id`='$this->board_id' AND `key`='$name'");
			}
			$this->meta->{$name} = $value;
		}
	}
	
	/**
	 * 게시판 아이디를 입력받는다.
	 * @param int $board_id
	 */
	public function setBoardID($board_id){
		global $wpdb;
		$this->meta = new stdClass();
		$this->board_id = intval($board_id);
		$results = $wpdb->get_results("SELECT * FROM `{$wpdb->prefix}kboard_board_meta` WHERE `board_id`='$this->board_id'");
		foreach($results as $row){
			$this->meta->{$row->key} = $row->value;
		}
	}
}
?>