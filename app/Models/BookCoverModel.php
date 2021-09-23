<?php namespace App\Models;

use CodeIgniter\Model;

class BookCoverModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tbookcovers';
   
    protected $allowedFields = ['fbook_slug', 'fis_front', 'fpage_background_pic', 'fgender', 'fskin_colour', 'fhair_colour'];

}