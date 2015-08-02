<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Flickr;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function search(SearchRequest $request, $id = 1)
    {
        $photoSearch = $request->all();
        $query = $photoSearch['photoSearch'];
        $flickr = new Flickr('e0ba7d61f2630a0eb0657338cd4ccf16');
        $data = $flickr->search($query, $id);

        return Redirect::route('search.page', [$query, $id])->with($data);
    }

    public function page($query, $id)
    {
        //$data = $request->all();
        $flickr = new Flickr('e0ba7d61f2630a0eb0657338cd4ccf16');
        $data = $flickr->search($query, $id);

        return view('search', compact('data', 'page', 'query'));
    }

    public function fullSizeImage()
    {

        return view('search', compact('data', 'page', 'query'));
    }

}
