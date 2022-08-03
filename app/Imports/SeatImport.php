<?php
  
namespace App\Imports;

use App\Models\Seat;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
  
class SeatImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Seat([
            'id'     => $row['id'],
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'phone'     => $row['phone'],
            'job'     => $row['job'],
            'destination' => $row['destination'], 
            'question'    => $row['question'], 
        ]);
    }

}