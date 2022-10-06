<div class="form-group m-1">
    <label  class="">{{ trans('cruds.tags') }}</label>    
    <ul class="tags">
        @if(isset($item->tags))
            @if(is_array($item->tags))
                @foreach ($item->tags as $data)
                    <li class="addedTag">{{ $data }}<span class="tagRemove" onclick="$(this).parent().remove();">x</span>
                        <input type="hidden" value="{{ $data }}" name="tags[]">
                    </li>
                @endforeach
            @endif
        @endif
        <li class="tagAdd2 taglist2">    
            <input type="text" id="tags-field">
        </li>
    </ul>
    @error('tags')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<script> $(document).ready(function() {$('#addTagBtn').click(function() {$('#tags option:selected').each(function() {$(this).appendTo($('#selectedtags'));});});    $('#removeTagBtn').click(function() {$('#selectedtags option:selected').each(function(el) {$(this).appendTo($('#tags'));});});    $('.tagRemove').click(function(event) {event.preventDefault();$(this).parent().remove();});    $('ul.tags').click(function() {$('#tags-field').focus();});    $('#tags-field').keypress(function(event) {if (event.which == '32') {    if ($(this).val() != '') {$('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd2');$(this).val('');}}});});</script>
<script> $(document).ready(function() {$('#addTagBtn').click(function() {$('#address option:selected').each(function() {$(this).appendTo($('#selectedaddress'));});});    $('#removeTagBtn').click(function() {$('#selectedaddress option:selected').each(function(el) {$(this).appendTo($('#address'));});});    $('.tagRemove').click(function(event) {event.preventDefault();$(this).parent().remove();});    $('ul.address').click(function() {$('#address-field').focus();});    $('#address-field').keypress(function(event) {if (event.which == '32') {    if ($(this).val() != '') {$('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="address[]"></li>').insertBefore('.address .tagAdd');$(this).val('');}}});});</script>
