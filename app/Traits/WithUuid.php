<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Str;

trait WithUuid
{
    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($model): void {
            if (empty($model->getKey())) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing(): bool
    {
        return false;
    }

    public function getKeyType(): string
    {
        return 'string';
    }
}
