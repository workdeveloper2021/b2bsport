<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Sales_notes;
use App\Warehouses;

class Open_stocks extends Model
{
    public function warehouse()
    {
        return $this->belongsTo(Warehouses::class, 'warehouse_id');
    }

    public function salesNote()
    {
        return $this->belongsTo(Sales_notes::class, 'sales_note_id');
    }
}
