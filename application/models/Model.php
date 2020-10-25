<?php

class Model extends CI_model

{
    public function __construct() {
        parent::__construct();
    }


    public function seznam()
    {
        $query = $this->db->query("SELECT * FROM knihy ORDER BY nazev_knihy asc;");
        return $query->result();
    }

    public function anotace($id)
    {
        $query = $this->db->query('SELECT * FROM knihy WHERE id_knihy = '.$id);
        return $query->result();
    }
    
    public function menu()
    {
        $query = $this->db->query("SELECT * FROM menu ORDER BY id asc;");
        return $query->result();
    }

    public function autori()
    {
        $query = $this->db->query("SELECT autor FROM knihy ORDER BY autor asc;");
        return $query->result();
    }
    
    

    public function knihy()
    {
        $query = $this->db->query('SELECT nazev_knihy FROM knihy ORDER BY nazev_knihy asc;');
        return $query->result();
    }

}

