<div class="mb-3">
    <label for="{{$id}}" class="form-label"><strong>{{$label}}{{$required ? "*" : ""}}</strong></label>
    <input type="{{$type}}" class="form-control bg-dark text-danger border-0" value="{{isset($value) ? $value : null}}" id="exampleInputEmail1" name="{{$name}}" @if(isset($minlength)) minlength={{$minlength}} @endif @if(isset($maxlength)) maxlength={{$maxlength}} @endif/>
    @isset($info)
    <div class="form-text">{{$info}}</div>
    @endisset
    @error($name)
    <div class="form-text text-warning">{{$message}}</div>
    @enderror
</div>
