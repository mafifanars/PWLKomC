<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    public function allData()
    {
        return [
        [
            'nip' => '20020501',
            'nama' => 'Mandati',
            'matkul' => 'Teknik Bangunan'
        ],
        [
            'nip' => '20020502',
            'nama'=> 'Mandata',
            'matkul' => 'Teknik Jalanan'
        ],
        [
            'nip' => '20020503',
            'nama' => 'Mandato',
            'matkul' => 'Teknik Lukisan'
        ]
      ];
   }
}
