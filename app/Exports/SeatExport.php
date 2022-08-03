<?php
  
namespace App\Exports;

use App\Models\Seat;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class SeatExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Seat::select("id", "name", "email","phone","job","question","destination")->get();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        
        return ["ID", "Name", "Email","Phone","Job","Destination","Question"];
    }
}