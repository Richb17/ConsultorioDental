<?php
    
namespace App\Imports;
    
use App\Models\Tratamiento;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
     
class tratamientosImport implements ToModel, WithHeadingRow, WithCustomCsvSettings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tratamiento([
            'id'     => $row['id'],
            'procedimiento'     => $row['procedimiento'],
            'costoSugerido'    => $row['costoSugerido'], 
        ]);
    }
}
