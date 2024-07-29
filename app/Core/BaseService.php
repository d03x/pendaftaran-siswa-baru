<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Model;
/**
 * Summary of BaseService
 */
class BaseService {
    public Model $model;
    public function setModel(Model $model){
        $this->model = $model;
        return $this;
    }
    public function getModel(){
        return $this->model;
    }
    public function __call($method, $arguments){
        return $this->model->{$method}(...$arguments);
    }
}
