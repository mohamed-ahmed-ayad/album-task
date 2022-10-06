
@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Album</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active"> Album </li>
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
                    <div class="card card-info  ">
                        <div class="card-header">
                            <h3 class="card-title"> @isset($item->id) Edit @else Add  @endisset Album</h3>
                        </div>
                        @isset($item->id)
                        <form method="post"class="form-horizontal"  action="{{ route('albums.update',$item->id) }}" enctype="multipart/form-data">
                            @method('put')
                        @else
                            <form method="post"class="form-horizontal"  action="{{ route('albums.store') }}" enctype="multipart/form-data">
                        @endisset
                        @csrf
                            <div class="card-body">

                                {!! input(['name'=>'name','type'=>'text','class'=>'','label'=>'name','value'=>$item->name??old('name'),'class_input'=>''],$errors->toArray()['name']??'')!!}

                            </div>

                            @include('includes.photos')

                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('js')
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
    // Summernote
    $('.summernote').summernote()
     CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
    })
</script>

@endsection
@endsection
