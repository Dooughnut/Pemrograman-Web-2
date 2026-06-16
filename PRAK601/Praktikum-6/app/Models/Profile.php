<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $name = 'Afrian Pradipta Rizky';
    protected $NIM = '2410817210028';
    protected $prodi = 'Teknologi Informasi';
    protected $hobi = 'mengoleksi artbook';
    protected $skill = ['Clip Studio Paint', 'Inkscape', 'PHP', 'Laravel', 'Blade'];
    
    public function name()
    {
        return $this->name;
    }
    
    public function NIM()
    {
        return $this->NIM;
    }
    
    public function prodi()
    {
        return $this->prodi;
    }
    
    public function hobi()
    {
        return $this->hobi;
    }
    
    public function skill()
    {
        return $this->skill;
    }
}