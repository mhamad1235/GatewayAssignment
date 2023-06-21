<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='devices';
    public $fillable=['serial_number','Mac_address','status','branch_id','cartoon_number'];

    public function scopeSearch($query,$searchTerm){
    return $query->where('serial_number', 'LIKE', '%' . $searchTerm . '%')
                 ->orWhere('Mac_address', 'LIKE', '%' . $searchTerm . '%')
                 ->get();
    }
}
