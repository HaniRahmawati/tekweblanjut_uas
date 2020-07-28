<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = 'tbukutamu';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['nama_depan','nama_belakang','username','email','password'];
}