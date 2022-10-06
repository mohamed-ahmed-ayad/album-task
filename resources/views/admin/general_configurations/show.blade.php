@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>{{trans('cruds.view')}}  {{ trans('cruds.general-configurations') }}</h4>
          <br>
        </div>
    <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('cruds.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('general-configurations.index') }}">{{ trans('cruds.general-configurations') }}</a></li>
            <li class="breadcrumb-item active">{{ trans('cruds.view') }}</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <style>
    tr:nth-child(even) {
  background-color: WhiteSmoke;
}
  </style>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                    <thead>
                      @foreach (['id','config_group', 'field', 'value', 'label','created_at'] as $data )
                          {!! th_view( $item[$data],$data) !!}
                      @endforeach


                  </thead>
                    </table>

            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
