<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $name = 'Afrian Pradipta Rizky';
    protected $NIM = '2410817210028';

    public function name()
    {
        return $this->name;
    }
    public function NIM()
    {
        return $this->NIM;
    }
}