<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_created_at'];

    protected $useTimestamps = false;
    //  protected $createdField  = 'created_at';
    //  protected $updatedField  = 'updated_at';
    //  protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
