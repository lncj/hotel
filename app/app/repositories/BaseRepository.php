<?php

namespace App\Repositories;
use App\repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface {
    
    protected $model;

    public function __construct(){
        $this->setModel();
        // dd($this->model->all());
    }

    abstract public function getModel();

    public function setModel() {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll() {
        return $this->model->all();
    }

    public function find($id) {

    }

    public function create($attributes = []) {
        return $this->model->create($attributes);
    }

    public function update($id, $attributes = []) {

    }

    public function delete($id) {

    }

}