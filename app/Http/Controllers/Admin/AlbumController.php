<?php

namespace App\Http\Controllers\Admin;
use App\Services\MediaService;
use App\Http\Requests\AlbumRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\AlbumPhotos;
class AlbumController extends Controller {

    protected $repository;
    private $service;
    
    public function __construct(Album $repository)
    {
        $this->repository = $repository;
        $this->service=new MediaService();
    }


    public function index(Request $request)
    {
        $items = $this->repository->where(function($query) use ($request){  $query->where('name', 'LIKE', '%'.$request->name.'%');})->paginate($this->paginate);
        return  view('admin.albums.index',compact('items'),['controllers'=>'albums']);
    }

   
    public function create()
    {
        return  view('admin.albums.create');

    }
    public function destroy($id)
    {
        $item = $this->repository->with('photos')->findOrFail($id);
        if(count($item->photos)>0) 
        {
            $albums = $this->repository->all();
            return  view('admin.albums.delete',compact('item','albums'));
        }
        $item->delete();
        return redirect()->route('albums.index')->with('message', 'Album destroy.');

    }

    
    public function assignPhoto(Request $request)
    {
        AlbumPhotos::where('album_id',$request->deleted_album)->delete();
        Album::destroy($request->deleted_album);
        return redirect()->route('albums.index')->with('message', 'Album destroy.');
    }

    public function deleteWithPhoto(Request $request)
    {
        AlbumPhotos::where('album_id',$request->deleted_album)->update(['album_id'=>$request->album_id]);
        Album::destroy($request->deleted_album);
        return redirect()->route('albums.index')->with('message', 'Album destroy.');
    }

    
    
    public function store(AlbumRequest $request)
    {
        $album = $this->repository->create($request->only('name'));
        $this->UploadPhotos($request,$album->id);
        return redirect()->route('albums.index')->with('message', 'Album created.');
    }


   
    public function show($id)
    {
        $item = $this->repository->with('photos')->findOrFail($id);
        return  view('admin.albums.show',compact('item'));
    }

     
    public function edit($id)
    {
        $item = $this->repository->with('photos')->findOrFail($id);
        return  view('admin.albums.create',compact('item'));
    }

    
    public function update(AlbumRequest $request,Album $album)
    {
         $album->update($request->only('name'));
        $this->UploadPhotos($request,$album->id);
        return redirect()->route('albums.index')->with('message', 'Album updated.');    
    }

     
}
