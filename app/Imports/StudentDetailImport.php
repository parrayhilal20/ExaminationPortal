<?php

namespace App\Imports;

use App\StudentDetail\StudentDetail;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentDetailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      
        return new StudentDetail([
            'registration_number' => $row[0],
            'roll_number' => $row[1],
            'class' => $row[2],
            'stream' => $row[3],
            'subject' => $row[4],
            'std_code' => $row[5]
        ]);
    }
}
