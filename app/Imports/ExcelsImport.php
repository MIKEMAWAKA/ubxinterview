<?php

namespace App\Imports;

use App\Models\ExcelData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelsImport implements ToModel , WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExcelData([
        
            "cargono" => $row[0],
            "cargotype" => $row[1],
            "cargosize" => $row[2],
            "weight" => $row[3],
            "remarks" => $row[4],
             // User Type User
            "wharfageusd" => $row[5],
            "penaltyday" =>$row[6],
            "storageusd" => 20 * $row[6],
            "electricityusd" => $row[8],
            "destuffing" => $row[9],
            "listingusd" => $row[10], // User Type User
         
            //
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    // return new ExcelData([
        
    //     "cargono" => $row['no'],
    //     "cargotype" => $row['type'],
    //     "cargosize" => $row['size'],
    //     "weight" => $row['weight'],
    //     "remarks" => $row['remarks'],
    //      // User Type User
    //     "wharfageusd" => $row['wharfage'],
    //     "penaltyday" =>$row['penalty'],
    //     "storageusd" => 20 * $row['penalty'],
    //     "electricityusd" => $row['electricity'],
    //     "destuffing" => $row['destuffing'],
    //     "listingusd" => $row['lifting'], // User Type User
     
    //     //
    // ]);



}
