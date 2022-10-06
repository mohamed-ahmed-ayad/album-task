<style>.videos {  background: none repeat scroll 0 0 #fff;  border: 1px solid #ccc;display: table;  padding: 0.5em;  width: 100%;}.videos li.tagAdd , .videos li.addedTag {  float: left;  margin-left: 0.25em;  margin-right: 0.25em;}.videos li.addedTag {  background: none repeat scroll 0 0 #1ABC9C;border-radius: 5px;  color: #fff;padding: .5em;}.videos input,li.addedTag {  border: 1px solid transparent;  border-radius: 5px;  box-shadow: none;  display: block;  padding: 0.5em;}.videos input:hover { border: 1px solid #000; }</style>
<div class="form-group  col-12">
    <div class="col-sm-10">

        <button type="button" onclick="addvideos()" class="btn btn-primary">{{trans('cruds.add')}} {{trans('cruds.video')}}</button>
        <div id="after"></div>
    </div>


    @error('videos')<div class="text-danger">{{ $message }}</div> @enderror
    @if($errors->has('videos.*'))
            <ul>
                @php($count=0)                    
                @foreach($errors->get('videos.*') as $data)
                <div class="row" id="{{$count}}"><div class="col-3">
                    <input type="url" class="form-control" name="videos[]" required placeholder="Video Link">    
                    @foreach($data as $error)<li style="color:red">{{ $error }}</li>@endforeach
                </div>
                <div class="col-3"><input type="text" class="form-control" required value="{{old('title_video_en')[$count]??''}}" name="title_video_en[]" placeholder="English Title"> 
                    @isset($errors->get('title_video_en.*')["title_video_en.$count"]) @foreach($errors->get('title_video_en.*')["title_video_en.$count"] as $error)<li style="color:red">{{ $error }}</li>@endforeach @endisset
                </div>
                <div class="col-3">
                    <input type="text" class="form-control"required  value="{{old('title_video_ar')[$count]??''}}"name="title_video_ar[]" placeholder="Arabic Title">  
                    @isset($errors->get('title_video_ar.*')["title_video_ar.$count"]) @foreach($errors->get('title_video_ar.*')["title_video_ar.$count"] as $error)<li style="color:red">{{ $error }}</li>@endforeach @endisset
                </div>
                <div class="col-1"> <button type="button" style="color:white;background-color: red" onclick="removevideos({{$count}})">X</button> 
                 </div>
                </div><br>
                @php($count++)
                @endforeach
            </ul>
    @endif  




</div>
<br><br><br>
<div class="form-group row col-12">
    @isset($item)
    <table class="table col-6">
        <thead class="thead">
            <tr>
            <th>  Link </th>
            <th>English Title</th>
            <th>Arabic Title</th>
            <th> Action</th>
          </tr> 
        </thead>
        <tbody>
         @foreach ($item->videos as  $video)
        <tr>
          <td> <a  target="blank" href="{{$video->path}}">{{$video->path}}</a></td>
          <td>{{$video->title_en}}</td>
          <td>{{$video->title_ar}}</td>
          <td> <a href="{{route('videos.delete',$video->id)}}" class="btn btn-primary">Remove</a></td>
        </tr>
    @endforeach
</tbody>
</table>
    @endisset
</div>


<script> $(document).ready(function() {$('#addTagBtn').click(function() {$('#phone option:selected').each(function() {$(this).appendTo($('#selectedphone'));});});    $('#removeTagBtn').click(function() {$('#selectedphone option:selected').each(function(el) {$(this).appendTo($('#phone'));});});    $('.tagRemove').click(function(event) {event.preventDefault();$(this).parent().remove();});    $('ul.phone').click(function() {$('#phone-field').focus();});    $('#phone-field').keypress(function(event) {if (event.which == '32') {    if ($(this).val() != '') {$('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="phone[]"></li>').insertBefore('.phone .tagAdd2');$(this).val('');}}});});</script>
<script> $(document).ready(function() {$('#addTagBtn').click(function() {$('#videos option:selected').each(function() {$(this).appendTo($('#selectedvideos'));});});    $('#removeTagBtn').click(function() {$('#selectedvideos option:selected').each(function(el) {$(this).appendTo($('#videos'));});});    $('.tagRemove').click(function(event) {event.preventDefault();$(this).parent().remove();});    $('ul.videos').click(function() {$('#videos-field').focus();});    $('#videos-field').keypress(function(event) {if (event.which == '32') {    if ($(this).val() != '') {$('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="videos[]"></li>').insertBefore('.videos .tagAdd');$(this).val('');}}});});</script>

<script>
    var count=1000;
    function addvideos()
    {
                var s = `<div class="row" id="${count}"><div class="col-3">
                    <input type="url" class="form-control" name="videos[]" required placeholder="Video Link">    </div>
                    <div class="col-3"><input type="text" class="form-control" required name="title_video_en[]" placeholder="English Title">    </div>
                    <div class="col-3"><input type="text" class="form-control"required name="title_video_ar[]" placeholder="Arabic Title">    </div>
                    <div class="col-2"> <button type="button" style="color:white;background-color: red" onclick="removevideos(${count++})">X</button>  </div> </div><br>`;
                var htmlObject = document.createElement('div');
                htmlObject.innerHTML = s;
                var div = document.getElementById("after");
                div.parentNode.insertBefore(htmlObject, div);
    }
</script>
<script>
    function removevideos(id)
    {
        document.getElementById(id).outerHTML = "";
    }
</script>
