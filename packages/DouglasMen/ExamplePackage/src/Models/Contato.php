<?php

namespace DouglasMen\ExamplePackage\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

    protected $fillable = ['name', 'email', 'message'];
}
