<?php

function fun_facts()
{

    $counts['organizations'] = \DB::table('organizations')->where(['active'=>1])->count();
    $counts['projects'] = \DB::table('projects')->where(['active'=>1])->count();
    $counts['committees'] = \DB::table('committees')->where(['active'=>1])->count();
    return $counts;
}

function getPage($id='')
{
    if( \Cache::has('page_'.$id)) 
    return \Cache::get('page_'.$id);
    else{
        $data =  App\Entities\Admin\Page::where('active',1)->find($id);
        \Cache::put('page_'.$id,$data);
        return \Cache::get('page_'.$id);

    }

}
function permalink($link){
    // $link = strtolower(trim($link));
    // $link = preg_replace('/[^ا-يa-z0-9-]/', '-', $link);
    $string = preg_replace ( "/&([أ-يa-zA-Z0-9-])(uml|acute|grave|circ|tilde|ring),/u", "-", $link );
    $link = preg_replace('//', '', $link);
    $link = preg_replace('/-+/', "-", $link);
    $link = rtrim($link, '-');
    $link = preg_replace('/\s+/', '-', $link);
return   $link ;
}
?>