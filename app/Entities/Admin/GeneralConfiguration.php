<?php

namespace App\Entities\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneralConfiguration extends Model   {
use SoftDeletes;
protected $table='general_configurations';

  protected $fillable = [ 'config_group', 'field', 'value', 'label' ];

  public function getValueAttribute($value){
    return $this->config_group=='file'?asset('images/config/'.$value):$value;
}

}
