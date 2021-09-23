<?php namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tmessages_shopper';
   
    protected $allowedFields = ['fsubject', 'fsubject_slug', 'ffrom', 'fto', 'fmessage', 'fsubject_id', 'fshopper_email', 'fshopper_name'];

}
