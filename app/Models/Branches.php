<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='branches';
    public $fillable=['name','profilelogo','dateOfCreate','remind_device','sold_device','warehouse_id'];


public function scopeRelatedbranch($query,$warehouse_id){
    return $query->where('warehouse_id',$warehouse_id)->get();
}

}
