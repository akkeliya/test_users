<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUsers extends Model {

    use HasFactory;

    protected $table = 'test_users';

    protected $guarded = ['id'];

    public $timestamps = false;
}
