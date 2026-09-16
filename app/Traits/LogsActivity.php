<?php

namespace App\Traits;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @mixin Model
 * @method static void created(\Closure $callback)
 * @method static void updated(\Closure $callback)
 * @method static void deleted(\Closure $callback)
 */
trait LogsActivity
{
    /**
     * Boot trait untuk mendaftarkan Model Events secara otomatis.
     */
    protected static function bootLogsActivity(): void
    {
        // Event saat Tambah Data
        static::created(function ($model) {
            /** @var Model|LogsActivity $model */
            static::recordActivity('created', "Menambahkan {$model->getActivityLogName()} baru", $model);
        });

        // Event saat Edit Data
        static::updated(function ($model) {
            /** @var Model|LogsActivity $model */
            static::recordActivity('updated', "Mengubah data {$model->getActivityLogName()}", $model);
        });

        // Event saat Hapus Data
        static::deleted(function ($model) {
            /** @var Model|LogsActivity $model */
            static::recordActivity('deleted', "Menghapus data {$model->getActivityLogName()}", $model);
        });
    }

    /**
     * Eksekusi simpan ke tabel activity_logs
     *
     * @param Model|LogsActivity $model
     */
    protected static function recordActivity(string $action, string $description, $model): void
    {
        ActivityLog::create([
            'user_id'     => Auth::id(),
            'action'      => $action,
            'description' => $description,
            'target_type' => get_class($model),
            'target_id'   => $model->getKey(),
        ]);
    }

    /**
     * Helper nama model untuk deskripsi log (bisa di-override di masing-masing model)
     */
    public function getActivityLogName(): string
    {
        return class_basename($this);
    }
}