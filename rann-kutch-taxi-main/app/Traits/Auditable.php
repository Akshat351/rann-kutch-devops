<?php

namespace App\Traits;

use App\Models\AuditLog;
use Illuminate\Database\Eloquent\Model;

trait Auditable
{
    public static function bootAuditable()
    {
        static::created(function (Model $model) {
            self::audit('audit:created', $model);
        });

        static::updated(function (Model $model) {
            self::audit('audit:updated', $model, $model->getChanges());
        });

        static::deleted(function (Model $model) {
            self::audit('audit:deleted', $model);
        });
    }

    protected static function audit($description, $model, $changes = [])
    {
        AuditLog::create([
            'description'  => $description,
            'subject_id'   => $model->id ?? null,
            'subject_type' => sprintf('%s#%s', get_class($model), $model->id) ?? null,
            'user_id'      => auth()->id() ?? null,
            'properties'   => $changes ?: $model,
            'host'         => request()->ip() ?? null,
        ]);
    }

    public static function log_audit_data($description, $model = null){
        $dataInsert['description'] = $description;
        $dataInsert['user_id'] = auth()->id() ?? null;
        $dataInsert['host'] = request()->ip() ?? null;
        $dataInsert['server_request'] = json_encode($_SERVER);

        if(!empty($model)){
            $dataInsert['subject_id'] = $model->id ?? null;
            $dataInsert['subject_type'] = get_class($model) ?? null;
            $dataInsert['properties'] = $model ?? null;
        }
        AuditLog::create($dataInsert);
    }
}
