<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Services\MediaService;
use App\Http\Controllers\Controller;
use App\Entities\Admin\GeneralConfiguration;
use App\Http\Requests\GeneralConfigurationRequest;

class GeneralConfigurationsController extends Controller {

    protected $repository;
    protected $view;
    private $service;
    
    public function __construct(GeneralConfiguration $repository)
    {
        $this->repository = $repository;
        $this->view = 'general_configurations';
        $this->service=new MediaService();
    }

    public function index(Request $request)
    {
        $items = $this->repository->orderBy('created_at', 'asc')->where(function($query) use ($request){  $query->where('label', 'LIKE', '%'.$request->label.'%');})->paginate(1000);
        return view('admin.general_configurations.index', compact('items'),['controllers'=>'general_configurations']);
    }

    public function store(GeneralConfigurationRequest $request){
        $generalConfiguration = $this->repository->create($request->only('value'));
        return redirect()->route('general-configurations.index')->with('message',  'GeneralConfiguration Created.');
    }


    public function update(GeneralConfigurationRequest $request, $id)
    {

        $generalConfiguration = $this->repository->findOrFail($id);

        if($request->hasFile('value')){
            $generalConfiguration->value=$this->service->fileUpload('config',$request->value);
            $generalConfiguration->save();
        }
        else
            $generalConfiguration = $this->repository->where('id',$id)->update(['value'=>$request->value] );
            return redirect()->route('general-configurations.index')->with('message',  'GeneralConfiguration updated.');
    }


    public function destroy($id)
    {
        return redirect()->back()->with('message', 'Can\'t deleted.');
    }


}
