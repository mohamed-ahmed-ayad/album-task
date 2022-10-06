@extends('layouts.app')
@section('content')
<style>
  tr:nth-child(even) {
background-color: WhiteSmoke;
}
</style>

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>{{trans('cruds.view')}}  Albums</h4>
          <br>
        </div>
    <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('cruds.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('albums.index') }}">Albums</a></li>
            <li class="breadcrumb-item active">{{ trans('cruds.view') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        {!! th_view( $item->id,'id') !!}
                            {!! th_view( $item->name,'name') !!}
                        <tr><th>{{ trans('cruds.created_at') }}</th><td>{{$item->created_at}}</td></tr>
                      </thead>
                    </table>

                    <div class="form-group row col-12">
                      @isset($item)
                      @foreach ($item->photos as $photo)
        
                      <div class="card" style="width: 18rem; margin-left: 40px">
                          <img class="card-img-top" width="160" height="160" src="{{$photo->path}}" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">{{$photo->name}}</h5><br><br>
                            <a href="{{route('photos.delete',$photo->id)}}" class="btn btn-primary">Remove</a>
                          </div>
                        </div>
                      @endforeach
                      @endisset
                  </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
