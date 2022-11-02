<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbrayuan extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['NAMA','NOKP','NAMA_SR1','NAMA_SR2','created_at','updated_at'];

}
