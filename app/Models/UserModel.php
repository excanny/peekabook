<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tcustomers';
   
    protected $allowedFields = ['ffirst_name', 'flast_name', 'femail', 'fpass_word', 'ftoken'];

}