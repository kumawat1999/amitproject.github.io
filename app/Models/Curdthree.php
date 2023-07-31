<?php

namespace App\Models;

use CodeIgniter\Model;

class Curdthree extends Model
{

    public function __construct(){

            $this->db= \config\Database::connect();
    }
    protected $DBGroup          = 'default';
    protected $table            = 'curdthree';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

public function add($query){
    $insert= $this->db->table('curdthree')->insert($query);
    return $insert;
}
public function showdata(){
    $insert= $this->db->query('select * from curdthree')->getResult();
    return $insert;
}

}
