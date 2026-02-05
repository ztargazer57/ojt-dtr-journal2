<?php

namespace App\Filament\Resources\WeeklyReports\Pages;

use App\Filament\Actions\ExportCertifiedReportsAction;
use App\Filament\Resources\WeeklyReports\WeeklyReportsResource;
use Filament\Resources\Pages\ListRecords;

class ListWeeklyReports extends ListRecords
{
    protected static string $resource = WeeklyReportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // ExportAction::make()
            //     ->exporter(WeeklyReportsExporter::class)
            //     ->maxRows(500)
            //     ->columnMapping(false)
            //     ->requiresConfirmation()
            //     ->modalHeading('Export Weekly Reports')
            //     ->modalDescription('Keep in mind this will only export [certified] reports'),
                
        ];
    }
}
