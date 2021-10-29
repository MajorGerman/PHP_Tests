<?php

class Posts_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function getPosts($slug = FALSE){

        if ($slug === FALSE){
            $query = $this->db->get('posts');

            return $query->result_array();
        }
        $query = $this->db->get_where('posts', array('slug' =>$slug));
        return $query->row_array();
    }
    public function setNews($slug, $title, $text){
        $data = array(
            'slug' =>$slug,
            'title' => $title,
            'text' => $text
        );
    return $this->db->insert('posts', $data);
    }
    public function updateNews($id, $slug, $title, $text){
        $data = array(
            'id' => $id,
            'slug' =>$slug,
            'title' => $title,
            'text' => $text
        );
    return $this->db->update('posts', $data, array('id' => $id));
    }

    public function deleteMovies($slug){
        return $this->db->delete('news', array('slug' =>$slug));
    }
}