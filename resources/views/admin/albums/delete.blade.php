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
          <h4>   {{ $item->name}}</h4>
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
          <div class="row">

            <div class="col-3">
            
                <form action="{{route('album.assignPhoto')}}" method="post">
                    @csrf
                     <br>
                    <select name="album_id" class="form-control">
                        @foreach($albums as $album)
                            <option value="{{$album->id}}">{{$album->name}}</option>
                        @endforeach
                    </select>
                <br>
                <input type="hidden" name="deleted_album" value="{{$item->id}}">
    
                <button type="submit" class="btn btn-block btn-primary ">Assign And Delete </button>
            </div>
            <div class="col-3">
            
                <form action="{{route('album.deleteWithPhoto')}}" method="post">
                    @csrf
                     <br>
                    
                <input type="hidden" name="deleted_album" value="{{$item->id}}">
                <button type="submit" class="btn btn-block btn-danger "> Delete Photo And Album </button>
            </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        {!! th_view( $item->id,'id') !!}
                            {!! th_view( $item->name,'name') !!}
                        <tr><th>{{ trans('cruds.created_at') }}</th><td>{{$item->created_at}}</td></tr>
                      </thead>
                    </table>


                  </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
