<?php


namespace App\Http\Services;


interface ServiceInterface
{
    public function getAll();
    public function store($request);
    public function findById($id);
    public function update($request,$obj);
    public function destroy($obj);
    public function search($request);
}
