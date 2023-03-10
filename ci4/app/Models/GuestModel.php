<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'vmtan_myguests';

    protected $allowedFields = ['name', 'email', 'project' , 'message'];
    
    public function getGuest()
    {
        return $this->findAll();
    }  
}
