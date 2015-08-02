<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface FlickrRepositoryInterface
{
    public function search($query, $id);
}



