<?php

namespace App\Filament\Resources\TestimotionalResource\Pages;

use App\Filament\Resources\TestimotionalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimotional extends EditRecord
{
    protected static string $resource = TestimotionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
