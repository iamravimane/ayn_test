<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_user($id)
    {
        return $this->db->get_where('user',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all user count
     */
    function get_all_user_count()
    {
        $this->db->from('user');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all user
     */
    function get_all_user($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        return $this->db->delete('user',array('id'=>$id));
    }
}
