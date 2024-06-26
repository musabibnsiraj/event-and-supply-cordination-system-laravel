<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventServiceSupplierQuote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'document',
        'budget_range_start',
        'budget_range_end',
        'quantity',
        'event_service_id',
        'supplier_id',
        'awarded',
        'event_id',
        'note'
    ];

    public function awarded()
    {
        return EventServiceSupplierQuote::where('event_service_id', $this->event_service_id)
            ->where('awarded', 1)
            ->count();
    }

    public function eventService()
    {
        return $this->belongsTo(EventService::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
