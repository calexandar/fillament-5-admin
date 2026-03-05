<?php

namespace App\Enums\Feature;

enum FeatureStatus: string
{
    case Proposed = 'Proposed';
    case Planed = 'Planed';
    case InProgress = 'In Progress';
    case Completed = 'Completed';
    case Delivered = 'Delivered';
    case Canceled = 'Canceled';
}

