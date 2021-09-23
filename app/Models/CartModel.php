<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tcarts';
   
    protected $allowedFields = ['fbook_slug', 'fbook_title', 'fgender', 'fskin_colour', 'fhair_colour', 'fquantity' , 'fposter_image', 'fprice', 'fchild_first_name', 'fshopper_first_name', 'fshopper_last_name', 'fcustomer_cookie', 'fcustomer_email'];

}