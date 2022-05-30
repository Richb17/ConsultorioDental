<?php
   
namespace App\Exports;
   
use App\Models\Tratamiento;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
   
class tratamientosExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function headings(): array
    {
        return ["id", "procedimiento", 'costoSugerido'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tratamiento::select('id', 'procedimiento', 'costoSugerido')->get();
    }
}