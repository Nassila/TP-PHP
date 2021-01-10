<?php

declare(strict_types=1);

namespace App\Interfaces;
use App\Cours;

interface Enseignement
{
    public function noter_eleves(Cours $cours): void;
}
