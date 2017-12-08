<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	use SoftDeletes;

    protected $fillable = ["descricao"];

    protected $dates = ["delete_at"];

}
