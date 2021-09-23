<?php namespace App\Models;

use CodeIgniter\Model;

class AvatarHairModel extends Model
{
    protected $table      = 'tavatars_hair';
   
    protected $allowedFields = ['fimage_name', 'fbook_slug ', 'fhair_colour', 'fgender'];

}