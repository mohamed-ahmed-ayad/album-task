<?php

namespace App\Http\Controllers;
use App\models\AlbumPhotos;
use App\Services\MediaService;
use Illuminate\Http\Request;
use App\Http\Requests\CheckPhotoRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $paginate=20;
    
  

    public function UploadPhotos($request,$id,$name='')
    {
        $service=new MediaService();
        if($request->photos){
            foreach($request->photos as $key=>$data)
            {
                $path=$service->fileUpload('albums',$data,$key+1);
                AlbumPhotos::create(['path'=>$path,'name'=>$request->photo_name[$key],'album_id'=>$id]);
            }

        }

    }
    
    public function deletePhoto($id)
    {
        $photo = AlbumPhotos::findOrFail($id);
        $path =$photo->getAttributes()['path']? public_path().'\\images\albums\\'.$photo->getAttributes()['path']:null;
        $service=new MediaService();
        $service->delete_image($path);
        AlbumPhotos::destroy($id); 
        return redirect()->back()->with('message', 'item deleted.');
    }

}


