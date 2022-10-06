<style>.photos {  background: none repeat scroll 0 0 #fff;  border: 1px solid #ccc;display: table;  padding: 0.5em;  width: 100%;}.photos li.tagAdd , .photos li.addedTag {  float: left;  margin-left: 0.25em;  margin-right: 0.25em;}.photos li.addedTag {  background: none repeat scroll 0 0 #1ABC9C;border-radius: 5px;  color: #fff;padding: .5em;}.photos input,li.addedTag {  border: 1px solid transparent;  border-radius: 5px;  box-shadow: none;  display: block;  padding: 0.5em;}.photos input:hover { border: 1px solid #000; }</style>
<div class="card-body  col-12">
    <div class="col-sm-10">
        <button type="button" onclick="addphotos()" class="btn btn-primary">{{trans('cruds.add')}} {{trans('cruds.photo')}}</button>
        <br><br>
        <div id="after"></div>
    </div>

    @error('photos')<div class="text-danger">{{ $message }}</div> @enderror
    @if($errors->has('photos.*'))
            <ul>
                @php($count=0)                    
                @foreach($errors->get('photos.*') as $data)
                <div class="row" id="{{$count}}"><div class="col-3">
                    <input type="file" class="form-control" name="photos[]" required placeholder="photos">    
                    @foreach($data as $error)<li style="color:red">{{ $error }}</li>@endforeach
                </div>
                <div class="col-3"><input type="text" class="form-control" required value="{{old('photo_name')[$count]??''}}" name="photo_name[]" placeholder="English Title"> 
                    @isset($errors->get('photo_name.*')["photo_name.$count"]) @foreach($errors->get('photo_name.*')["photo_name.$count"] as $error)<li style="color:red">{{ $error }}</li>@endforeach @endisset
                </div>
   
                <div class="col-1"> <button type="button" style="color:white;background-color: red" onclick="removephotos({{$count}})">X</button> 
                 </div>
                </div><br>
                @php($count++)
                @endforeach
            </ul>
    @endif  
</div>   
<div class="form-group row col-12">
    @isset($item)
    @foreach ($item->photos as  $photo)

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" width="160" height="160" src="{{$photo->path}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$photo->photo_name}}</h5><br><br>
            <a href="{{route('photos.delete',$photo->id)}}" class="btn btn-primary">Remove</a>
        </div>
        </div>
    @endforeach
    @endisset
</div>


<script> $(document).ready(function() {$('#addTagBtn').click(function() {$('#photos option:selected').each(function() {$(this).appendTo($('#selectedphotos'));});});    $('#removeTagBtn').click(function() {$('#selectedphotos option:selected').each(function(el) {$(this).appendTo($('#photos'));});});    $('.tagRemove').click(function(event) {event.preventDefault();$(this).parent().remove();});    $('ul.photos').click(function() {$('#photos-field').focus();});    $('#photos-field').keypress(function(event) {if (event.which == '32') {    if ($(this).val() != '') {$('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="photos[]"></li>').insertBefore('.photos .tagAdd');$(this).val('');}}});});</script>

<script>
    var count=1000;
    function addphotos()
    {
                var s = `<div class="row" id="${count}"><div class="col-3">
                    <input type="file" class="form-control" name="photos[]" required placeholder="photos">    </div>
                    <div class="col-3"><input type="text" class="form-control" required name="photo_name[]" placeholder="photo name">    </div>
                    <div class="col-1"> <button type="button" style="color:white;background-color: red" onclick="removephotos(${count++})">X</button>  </div> </div><br>`;
                var htmlObject = document.createElement('div');
                htmlObject.innerHTML = s;
                var div = document.getElementById("after");
                div.parentNode.insertBefore(htmlObject, div);
    }
</script>
<script>
    function removephotos(id)
    {
        document.getElementById(id).outerHTML = "";
    }
</script>
