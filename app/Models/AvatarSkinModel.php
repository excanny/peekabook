<?php namespace App\Models;

use CodeIgniter\Model;

class AvatarSkinModel extends Model
{
    protected $table      = 'tavatars_skin';
   
    protected $allowedFields = ['fimage_name', 'fbook_slug ', 'fskin_colour', 'fgender'];

}