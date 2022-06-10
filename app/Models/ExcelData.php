<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ExcelData extends Model
{
    use HasFactory;
    protected $table = 'exceldata';
    protected $fillable = [
        'id','cargono','cargotype','cargosize','weight','remarks','wharfageusd',
        'penaltyday','storageusd','electricityusd','listingusd', 'destuffing'
      
        ];
}
