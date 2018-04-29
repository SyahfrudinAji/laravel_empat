<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mahasiswa extends Model
{
	use SoftDeletes;

	protected $table = 'mahasiswa';

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'tanggal_lahir', 'alamat', 'agama_id', 'jenis_kelamin'];

    protected $dates = ['deleted_at'];

}
