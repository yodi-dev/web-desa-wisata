<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPaket extends Model
{
    protected $table            = 'paket';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

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

    public function getData()
    {
        $paket = $this->db->table('paket')->get()->getResult();
        return $paket;
    }

    public function pilihPaket($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }


    public function edit_paket($id, $data)
    {
        $query = $this->db->table($this->table)->where('id', $id)->update($data);
        return $query;
    }

    public function data_destinasi($id)
    {
        $builder = $this->db->table('detail_paket');
        $builder->select('detail_paket.id, destinasi.nama_wisata');
        $builder->join('destinasi', 'destinasi.id = detail_paket.id_destinasi');
        $builder->join('paket', 'paket.id = detail_paket.id_paket');
        $builder->where('id_paket', $id);
        $query = $builder->get()->getResult();
        return $query;
    }

    public function all_destinasi()
    {
        $builder = $this->db->table('destinasi');
        $builder->select('id, nama_wisata');
        $query = $builder->get()->getResult();
        return $query;
    }
}
