<?php 

class Kelas_model{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


public function getAllKelas()
{
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();

}

public function getKelasById($id)
{
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
}

public function tambahDataKelas($data)
{
    $query = "INSERT INTO kelas
                VALUES
              ('', :kelas)";
    
    $this->db->query($query);
    $this->db->bind('kelas', $data['kelas']);

    $this->db->execute();

    return $this->db->rowCount();
}



}
