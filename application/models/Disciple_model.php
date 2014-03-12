<?php
class Disciple_model extends CI_Model {
 
    function __construct() {       
        parent::__construct();
    }
 
    function get_words( $semester ){
    	$query = sprintf("select semester, chapter, content from disciple_class where semester=%d", $semester);
        return $this->db->query( $query )->result();
    }
 
    function get_detail( $semester, $idx ){
    	$query = sprintf("select word1_addr, word1_detail, word2_addr, word2_detail, book 
    					from disciple_detail
    					where semester=%d and chapter=%d", $semester, $idx);
        return $this->db->query($query)->row();
    }
}
