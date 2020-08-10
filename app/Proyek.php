<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $fillable = [
    	'nama_proyek',
    	'deskripsi_proyek',
    	'tanggal_dimulai',
    	'tanggal_deadline',
    	'status',
    	'manager_id'
    ];
}
