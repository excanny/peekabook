<?php namespace App\Models;

use CodeIgniter\Model;

class BookTemplateModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tbook_templates';
   
    protected $allowedFields = ['ftitle', 'fbook_slug', 'fdescription', 'fage_group', 'fabout_book', 'fabout_character', 'fhow_book', 'fformat_size', 'fprice', 'fpartner_email', 'fposter_image', 'active'];

}