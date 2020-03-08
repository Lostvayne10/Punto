<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = ['barcode',
                            'name',
                            'description',
                            'price',
                            'qty_stock'];
  
}
