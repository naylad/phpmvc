<?php 

class Jurusan_model{
    private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


public function getAllJurusan()
{
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();

}

public function getJurusanById($id)
{
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
}

public function tambahDataJurusan($data)
{
    $query = "INSERT INTO jurusan
                VALUES
              ('', :jurusan)";
    
    $this->db->query($query);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
}



}
