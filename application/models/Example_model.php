<?php

class Example_model extends CI_model{

    function getAllUsers()
    {
      $q = $this->db->get('email_addresses');

      if($q->num_rows() > 0) {
        foreach($q->result() as $row)
        {
          $data[] = $row;
        }
      }
      return $data;
    }

    function getUserById($id)
    {
      $q = $this->db->get_where('email_addresses', array('id' => $id));
      if($q->num_rows() > 0) {
        foreach($q->result() as $row)
        {
          $data[] = $row;
        }
      }
      return $data;
    }

    function getUserByLName($lname)
    {
      $q = $this->db->get_where('email_addresses', array('lname' => $lname));
      if($q->num_rows() > 0) {
        foreach($q->result() as $row)
        {
          $data[] = $row;
        }
      }
      return $data;
    }
}
