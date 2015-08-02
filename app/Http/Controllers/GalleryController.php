<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Flickr;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\FlickrRepositoryInterface;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{

    private $flickrRepository;


    /**
     * @param FlickrRepositoryInterface $flickrRepository
     */
    public function __construct(FlickrRepositoryInterface $flickrRepository)
    {
        $this->flickrRepository = $flickrRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * @param SearchRequest $request
     * @param int $id
     * @return mixed
     */
    public function search(SearchRequest $request, $id = 1)
    {
        $photoSearch = $request->all();
        $query = $photoSearch['photoSearch'];

        $data = $this->flickrRepository->search($query, $id);

        return Redirect::route('search.page', [$query, $id])->with($data);
    }

    /**
     * @param $query
     * @param $id
     * @return \Illuminate\View\View
     */
    public function page($query, $id)
    {
        $data = $this->flickrRepository->search($query, $id);

        return view('search.search', compact('data', 'query'));
    }

}
