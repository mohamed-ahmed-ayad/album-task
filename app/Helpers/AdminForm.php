<?php


function table($items,$data,$controller="",$action=[])
{
    $out='';
    $out.='<table id="example1" class="table table-bordered table-striped"><thead><tr>';

    

    foreach ($data  as $d)
    {
        $out.='<th>'.trans('cruds.'.$d).'</th>';
    }
    if(in_array('active',$action))
        $out.='<th>'.trans('cruds.suspend').'</th>';
    // KG
    if(in_array('show_versions',$action)){
        $out.='<th>Organizations Changes</th>';
    }
    
    $out.='<th>'.trans('cruds.action').'</th>';
    $out.='</tr>
    </thead>
    <tbody>';
    
    foreach ($items as $item)
    {
        $out.='<tr>';
        foreach ($data  as $d)
        {
            if($d=='id')
            $out.='<td ><a  href="'.route("$controller.show",$item->id).'" >'.$item->id.'</a></td>';

            elseif(in_array($d,['title_en','title_ar','desc_en','desc_ar']))
                $out.='<td style="max-width: 200px;overflow: hidden;word-wrap: break-word;text-overflow: ellipsis"> '.$item[$d].'</td>';
            else 
            $out.='<td> '.$item[$d].'</td>';
        
        }
        
        if(in_array('active',$action))
        {
        $out.='<td class="center">';

            $out.='<a class="dropdown-item" href="'.route("$controller.suspend",$item->id).'" >';
            $out.=$item->active==1?'
            <svg style="color:blue" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16"><path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/></svg>'
            :'<svg style="color:red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>';
            $out.= '</a>' ;
            $out.='</td>';
        }
        // KG
        if(in_array('show_versions',$action) ){
            if(!empty($item->have_versions)){
                $out.='<td><a href="/admin/'.$controller.'/versions/'.$item->id.'">Show Changes</a></td>';
            }elseif(!empty($item->organization_new)){
                $out.='<td>New Item, <a href="/admin/'.$controller.'/'.$item->id.'">Review</a></td>';
            }else{
                $out.='<td>No new changes</td>';
            }
        }

        $out.=' <td>
            <div class="btn-group">  
                <button type="button" class="btn btn-default">action</button>
                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown"> </button>
                <div class="dropdown-menu" role="menu">
                ';
                if(in_array('view',$action))
                $out.='<a class="dropdown-item" href="'.route("$controller.show",$item->id).'" >'.trans('cruds.view').'</a>';

                if(in_array('accept',$action)){
                    $out.='<a class="dropdown-item" href="'.route("$controller.accept",$item->id).'" >Accept</a>';
                }

                if(in_array('edit',$action))
                $out.='<a class="dropdown-item" href="'.route("$controller.edit",$item->id).'" >'.trans('cruds.edit').'</a>';
            
 
                    if(in_array('delete',$action))
                    {
                        // $out.= '<button class="deleteRecord" style="margin-left:6px;background: none; color: inherit; border: none; font: inherit; cursor: pointer; outline: inherit;" type="button" data-id="'. $item->id.'" >Delete</button>';
                        $out.= '<form method="POST" action="'.route("$controller.destroy", $item->id).'"accept-charset="UTF-8" style="display:inline">
                            '.method_field('DELETE')
                            .csrf_field().
                            '<button type="submit"  style="margin-left:6px;background: none; color: inherit; border: none; font: inherit; cursor: pointer; outline: inherit;" onclick="return confirm(&quot;Confirm delete?&quot;)">'.trans('cruds.delete').'</button>
                        </form>';
                    
                    }

                    $out.='
                </div>
            </div>
        </td>';
        
        
        
        
        $out.='</tr>';
    }

    $out.='</tbody>';
    
    $out.='</table>';
        

    return $out;


}

function input($data,$error='') 
{
    $out = '<div class="form-group m-1" ';
    $out .= $data["class"]??'';
    $out .= '">';
    if(isset($data["label"])){
       $out.='<label>';
       $out .= trans('cruds.'.$data["label"]);
       $out.='</label>';
    }
    if($data["type"]=='date')
    {
        $out.='<div class="input-group date" id="datepicker">
        <input autocomplete="off" type="text"name="'.$data["name"].'" value="'.$data["value"].'" class="form-control">
        <span class="input-group-append">
            <span class="input-group-text bg-white d-block">
                <i class="fa fa-calendar"></i>
            </span>
        </span>
    </div>';
    }
    else
    {
        $out .= '<input class="form-control';$out .= $data["class_input"]??'';$out .= '" name="'.$data["name"].'" type="' .$data["type"] . '" value="'.$data["value"].'">' ;
    }
    
    if(gettype($error)=='array')
    {
        $out.='<div class="text-danger">';
        foreach($error as $er)
        $out .=$er;
        $out.='</div>';
    }
 $out.='</div>';
  return $out;
}
function textarea($data,$error='') 
{
    $out = '
    <div class="form-group '
    .$data["class"].
    '"><label>  '
    .trans('cruds.'.$data["label"]).
    ' </label>
    <textarea class="form-control '
    .$data["class_input"].
    '" name="'
    .$data["name"].
    '" type="'
    .$data["type"].'">'.$data["value"].'</textarea>';
    if(gettype($error)=='array')
    {
        $out.='<div class="text-danger">';
        foreach($error as $er)
        $out .=$er;
        $out.='</div>';
    }
     $out.='</div>';
    return  $out;
}



function filter($data,$controller,$selectOption=[])
{
    return  view('includes.filter',compact('data','controller','selectOption'));
}
function index_header($controller)
{
    $out = 
    '        <div class="col-sm-6">          
    <h1>'. trans("cruds.$controller") .'</h1>
    <br>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item">
    <a href="'. route('home') .'">'. trans('cruds.home') .'</a>
    </li>
    <li class="breadcrumb-item active">'. trans("cruds.$controller") .'</li>
    </ol>
    </div>
    '
    ;
    return  $out ;
}

function text_editor($data)
{
    $out = '
    <div class="form-group m-1 ';
    if(isset($data["class"]))
    $out.=$data["class"];
    $out.=' ">';
    if(isset($data["label"]))
    {
        $out.='<label>';
        $out .= trans('cruds.'.$data["label"]);
        $out.='</label>';
    }
    $out.='<textarea  class="summernote editor " name="'.$data['name'].'" id="codeMirrorDemo">'.$data['value'].'</textarea>';
      
    if(gettype($data['errors'])=='array')
    {
        $out.='<div class="text-danger">';
        foreach($data['errors'] as $er)
        $out .=$er;
        $out.='</div>';
    }$out.= '</div>';
    
    return  $out ;

}

function th_view( $value,$label){

  return   "<tr><th>".trans("cruds.$label")." </th><td>$value</td></tr>";
}

function activeArr($arr){

    $out=[];
    foreach($arr as $data){
        $out[]="$data.index";
        $out[]="$data.show";
        $out[]="$data.create";
        $out[]="$data.edit";
    }

  return  $out;
}




function select($data) 
{
    $out =  '<div class="form-group m-1 ';
    $out .= $data['class']??'';
    $out .= '"><label>';
    $out .= $data['label']??'';

    $out.='</label>
    <select name="';$out.=$data['name']??'';$out.='" class="form-control">';
    $out.='<option value="">Select '.$data['label'].'</option>';
    foreach($data['items'] as $item)
    {
        if($item['id']==$data['value'])
        $out.='<option value="'.$item['id'].'"selected>'.$item[$data['view_data']].'</option>';
        else
        $out.='<option value="'.$item['id'].'">'.$item[$data['view_data']].'</option>';
    }    
    $out.='</select>';
    if(gettype($data['errors'])=='array')
    {
        $out.='<div class="text-danger">';
        foreach($data['errors'] as $er)
        $out .=$er;
        $out.='</div>';
    }
    $out.='</div>';
  return $out;
}

function getConfig($key,$lang=''){
    if(!empty($lang)){
        $key .= $lang;
    }
    $data = App\Entities\Admin\GeneralConfiguration::where(['field'=>$key])->first();
    if($data )
    return $data->value;
}

function getSnippet($name){
    if( \Cache::has($name)) 
        return \Cache::get($name)->desc;
    else
    {
        $data = App\Entities\Admin\Snippet::where(['name'=>$name])->first();
        if($data )
        {
            \Cache::put($name,$data);
            return $data->desc;
        }
    }
}


function tags($item){

    return view('includes.tags',compact('item'));
}






 
function arabicDate($time)
{
    if(app()->getLocale()=='en')
    return $time ;$months = ["Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر"];
    $days = ["Sat" => "السبت", "Sun" => "الأحد", "Mon" => "الإثنين", "Tue" => "الثلاثاء", "Wed" => "الأربعاء", "Thu" => "الخميس", "Fri" => "الجمعة"];
    $am_pm = ['AM' => 'صباحاً', 'PM' => 'مساءً'];
    $time = strtotime($time);
    $day = $days[date('D', $time)];
    $month = $months[date('M', $time)];
    $am_pm = $am_pm[date('A', $time)];
    $date = $day . ' ' . date('d', $time) . ' - ' . $month . ' - ' . date('Y', $time) ;
    $numbers_ar = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
    $numbers_en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

 
    return str_replace($numbers_en, $numbers_ar, $date);
}
    ?>