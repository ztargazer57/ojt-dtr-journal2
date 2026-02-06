<?php

namespace App\Filament\Resources\DailyTimeRecords\Pages;


use App\Filament\Resources\DailyTimeRecords\DailyTimeRecordsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDailyTimeRecords extends ListRecords
{
    protected static string $resource = DailyTimeRecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
           
        ];
    }
    
}
