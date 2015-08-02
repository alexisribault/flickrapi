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
        $flickr = new Flickr('e0ba7d61f2630a0eb0657338cd4ccf16');
        return $flickr->search($query, $id);
    }

}
