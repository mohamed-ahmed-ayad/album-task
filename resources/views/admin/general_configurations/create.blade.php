
@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>{{ trans('cruds.general-configurations') }}</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('cruds.home') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('cruds.general-configurations') }}</li>
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
                            <h3 class="card-title"> @isset($item->id){{ trans('cruds.edit')}} @else {{trans('cruds.add') }} @endisset {{trans('cruds.general-configurations')}}</h3>
                        </div>
                        @isset($item->id)
                        <form method="post"class="form-horizontal"  action="{{ route('general-configurations.update',$item->id) }}" enctype="multipart/form-data">
                            @method('put')
                        @else
                            <form method="post"class="form-horizontal"  action="{{ route('general-configurations.store') }}" enctype="multipart/form-data">
                        @endisset
                                @csrf
                            <div class="card-body">
                                @if($item->config_group=='file')
                                {!! input(['name'=>'value','type'=>'file','class'=>'','label'=>'value','value'=>'','class_input'=>''],$errors->toArray()['value']??'')!!}
                                @isset($item->value)<img src="{{asset($item->value)}}"  sizes="150" width="150" height="150">@endisset
                                @else
                                    {!! input(['name'=>'value','type'=>'text','label'=>'value','value'=>$item['value']??old('value')],$errors->toArray()['value']??'')!!}                            
                                @endif
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{trans('cruds.submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
