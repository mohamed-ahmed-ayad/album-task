<div class="form-group m-1">
    <label>English Tags <div style="color:#b1b1b1;font-size: 14px;display: inline" >(comma separated tags) </div>
    </label>
    <input class="form-control" name="tags" type="text" 
    value="{{$item->tags??old('tags')}}" placeholder="tag1,tag2,tag3">
    @error('tags')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group m-1">
    <label>Arabic Tags  <div style="color:#b1b1b1;font-size: 14px;display: inline" > (comma separated tags)  </div>
    </label>
    <input class="form-control" name="tags_ar" type="text" 
    value="{{$item->tags_ar??old('tags_ar')}}" placeholder="tag1,tag2,tag3">
    @error('tags_ar')<div class="text-danger">{{ $message }}</div> @enderror
</div>

