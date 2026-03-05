<?php

namespace App\Enums\Feature;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum FeatureStatus: string implements HasLabel, HasColor, HasIcon

{
    case Proposed = 'Proposed';
    case Planed = 'Planed';
    case InProgress = 'In Progress';
    case Completed = 'Completed';
    case Delivered = 'Delivered';
    case Canceled = 'Canceled';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Proposed => 'gray',
            self::Planed => 'info',
            self::InProgress => 'primary',
            self::Completed => 'green',
            self::Delivered => 'success',
            self::Canceled => 'danger',
        };
    }

    public function getIcon(): string|null
    {
        return match ($this) {
            self::Proposed => 'heroicon-o-academic-cap',
            self::Planed => 'heroicon-o-calendar',
            self::InProgress => 'heroicon-o-arrow-path',
            self::Completed => 'heroicon-o-check',
            self::Delivered => 'heroicon-o-rocket-launch',
            self::Canceled => 'heroicon-o-x-mark',
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Proposed => 'Proposed',
            self::Planed => 'Planned',
            self::InProgress => 'In Progress',
            self::Completed => 'Completed',
            self::Delivered => 'Delivered',
            self::Canceled => 'Canceled',
        };
    }
}


