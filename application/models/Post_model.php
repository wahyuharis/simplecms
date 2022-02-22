<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model
{

    private $result;
    private $result_array;
    private $count;

    function __construct()
    {
        parent::__construct();
    }

    function get_result()
    {
        return $this->result;
    }

    function get_result_array()
    {
        return $this->result_array;
    }

    function get_count()
    {
        return $this->count;
    }

    function get_list($limit=5, $page=1,$search='',$tags='')
    {
        $start = page_to_start($page, $limit);

        //GET RESULT============================================================================
        if(!empty(trim($search))){
            $this->db->like('title',$search);
        }
        if(!empty(trim($tags))){
            $this->db->where('tags.tags_name',$tags);
        }
        $this->db->limit($limit, $start);
        $this->db->join('post_tags_rel','post_tags_rel.id_post=post.id_post','left');
        $this->db->join('tags','tags.id_tags=post_tags_rel.id_tags','left');
        $db = $this->db->get('post');
        $this->result=$db->result();
        $this->result_array=$db->result_array();
        //GET RESULT============================================================================


        //COUNTING RESULT============================================================================
        if(!empty(trim($search))){
            $this->db->like('title',$search);
        }
        if(!empty(trim($tags))){
            $this->db->like('tags.tags_name',$tags);
        }
        $this->db->join('post_tags_rel','post_tags_rel.id_post=post.id_post','left');
        $this->db->join('tags','tags.id_tags=post_tags_rel.id_tags','left');
        $db2 = $this->db->get('post');
        $this->count=$db2->num_rows();
        //COUNTING RESULT============================================================================

        return $this;
    }
}
