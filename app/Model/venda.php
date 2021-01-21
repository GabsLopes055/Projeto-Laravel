<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    public $timestamps = false;

    public function teste() {
        return 'Passou aqui !';
    }
}
