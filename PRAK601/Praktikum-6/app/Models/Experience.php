<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
   protected $experiencescards = [
      [
         'color'       => 'primary', 
         'icon'        => 'bi-briefcase-fill',
         'duration'    => 'Semester 2',
         'title'       => 'Solo Trip ke Kotabaru',
         'company'     => '_',
         'description' => 'Saat libur semester 2, saya melakukan perjalanan solo ke Kotabaru.'
      ],
      [
         'color'       => 'info',
         'icon'        => 'bi-house-fill',
         'duration'    => 'Semester 4',
         'title'       => 'Nyari Kontrakan Bareng Teman',
         'company'     => '_',
         'description' => 'Saat libur semester 4, saya mencari kontrakan bersama teman-teman.'
      ],
      [
         'color'       => 'warning',
         'icon'        => 'bi-palette-fill',
         'duration'    => 'Semester 3',
         'title'       => 'Mancing Bareng Teman',
         'company'     => '_',
         'description' => 'Saat libur semester 3, saya pergi mancing bersama teman-teman.'
      ],
      [
         'color'       => 'secondary',
         'icon'        => 'bi-emoji-sunglasses-fill',
         'duration'    => '_',
         'title'       => 'Brainrot',
         'company'     => '_',
         'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, sed efficitur nisi.'
      ]
   ];

   public function getExperiences()
   {
      return $this->experiencescards;
   }
}