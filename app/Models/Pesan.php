<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $guarded = ['id_pesan'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id_customer');
    }
}
