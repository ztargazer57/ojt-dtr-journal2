<?php

namespace App\Filament\Resources\WeeklyReports\Pages;

use App\Filament\Actions\ExportCertifiedReportsAction;
use App\Filament\Resources\WeeklyReports\WeeklyReportsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWeeklyReports extends ViewRecord
{
    protected static string $resource = WeeklyReportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            ExportCertifiedReportsAction::make('Export'),
        ];
    }
}
