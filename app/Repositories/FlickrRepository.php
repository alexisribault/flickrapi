<?php namespace App\Repositories;


use App;
use App\Models\Flickr;
use Storage;

class FlickrRepository implements FlickrRepositoryInterface
{

    /**
     * @param $query
     * @param $id
     * @return mixed|null
     */
    public function search($query, $id)
    {
        $flickr = new Flickr;
        return $flickr->search($query, $id);
    }

}
