<?php namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tpages';
   
    protected $allowedFields = ['fbook_slug', 'fpage_no', 'fpage_background_pic', 'fgender', 'fskin_colour', 'fhair_colour'];

}