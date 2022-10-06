@extends('layouts.app')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      {!! index_header('general-configurations') !!}
      {!! filter([["name"=>"label","type"=>"text","label"=>"label","value"=>request("label")]],'general-configurations') !!}
    </div>
  </div>  
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-body">
          <div class="row">
            <div  class="FormExtended col-11">          
              <h4> {{ trans('cruds.general-configurations') }}</h4>  
            </div>
          </div>
          <hr>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <!-- <th>{{trans('cruds.id')}}</th> -->
                <th>{{trans('cruds.label')}}</th>
                <th>{{trans('cruds.value')}}</th>
                <th>{{ trans('cruds.action') }}</th>
              </tr>
              </thead>
                <tbody>
                      @foreach ($items as $item)
                          <tr>
                            <!-- <td> {{$item->id??''}}</td> -->
                            <td> {{$item->label??''}}</td>
                            <td>
                              
                                @if($item->config_group=='file')
                                <img src="{{asset($item->value)}}" width="100" height="100">
                                @else
                                  {{$item->value??''}}
                                @endif

                            </td>
                            <td>
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default">{{ trans('cruds.action') }}</button>
                                  <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                      <a class="dropdown-item" href="{{route('general-configurations.edit',$item->id)}}" >{{ trans('cruds.edit') }}</a>
                                </div>
                              </td>
                          </tr>
                    @endforeach
              </tbody>
              <tfoot>
              <tr>
                  <!-- <th>{{trans('cruds.id')}}</th> -->
                  <th>{{trans('cruds.label')}}</th>
                  <th>{{trans('cruds.value')}}</th>
                  <th>{{ trans('cruds.action') }}</th>
                </tr>
              </tfoot>
            </table>
          </div>
            {{-- {!!table($items,['id','label','value'],'general-configurations',['edit'])!!}  --}}
        </div>
      </div>
    </div>
  </div>
</section>
    
  @endsection
