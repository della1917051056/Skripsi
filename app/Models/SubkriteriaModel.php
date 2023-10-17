<?php

namespace App\Models;

use CodeIgniter\Model;

class SubkriteriaModel extends Model
{
    protected $table = 'subkriteria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'id_kriteria','kode_subkriteria', 'subkriteria', 'created_at'];

    public function get_subkriteria(){
        $query = $this->db->table('subkriteria')->select("*, subkriteria.id as id")
        ->join('kriteria', 'subkriteria.id_kriteria = kriteria.id')
        ->orderBy('id_kriteria', 'ASC')->get();  
       return $query;
    }

    public function insert_subkriteria($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_subkriteria($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    } 

    public function delete_subkriteria($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}