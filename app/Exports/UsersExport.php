<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Technical;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class UsersExport implements FromCollection, WithHeadings, WithcolumnWidths, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $report = session('report');
        return $report;
        
    }

    public function headings(): array
    {
        return [
            '#',
            'User Id','Personal Id', 'Customer No.', 'Name', 'Address', 'Contact', 'Business', 'Compound House', 'Project Customers', 
            'Estimated Sensor', 'Email', 'Dig. Address', 'Coordinates', 'Account No', 'SPN', 'Geo-Code', 
            'Structure Id', 'Service Type', 'Meter No.', 'Meter Rating', 'Phase', 'Meter location', 
            'Credit Meter', 'Prepaid Meter', 'Type', 'Meter Reading', 'Balance on Meter', 'Pole Distance', 
            'Size', 'Pole No.', 'Transformer No.', 'Trans Rating', 'Lines Per Pole', 'No of Poles', 
            'Line Condition', 'Damage Length', 'GMT', 'PMT', 'CWA', 'Height', 'Pole Condition', 
            'Meter Phase Inst.', 'Rate to Install', 'Extra Cable Needed', 'Date of Visit', 'Inspected By', 
            'Approved Status', 'Reason for No', 'Date Approved', 'Authorized By'
        ];
    }

    public function columnWidths(): array
    {
        return [
            // 'A' => 20,
            // 'B' => 20,    
            // 'C' => 20,
            // 'D' => 20, 
            'E' => 30,
            'F' => 20,  
            'G' => 30,
            // 'H' => 20,
            // 'I' => 20,
            // 'J' => 20,
            // 'K' => 20,
            // 'L' => 20,
            // 'M' => 20,
            // 'N' => 20,
            // 'O' => 20,
            // 'P' => 20,
            // 'Q' => 20,
            // 'R' => 20,
            // 'S' => 20,
            // 'T' => 20,
            // 'U' => 20,
            // 'V' => 20,
            // 'W' => 20,
            // 'X' => 20,
            // 'Y' => 20,
            // 'Z' => 20,       
        ];
    }

    public function registerEvents() : array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:AZ1')->getFont()->setSize(14);   
                // $event->sheet->getDelegate()->getColDimension('A1')->setColWidth(20);
                // $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(20);
                $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(40);
                $event->sheet->getColumnDimension('A')->setAutoSize(true);
                $event->sheet->getDelegate()->getStyle('A1:AZ1')->getFont()->setBold(true);           
            }
        ];
    }


}

