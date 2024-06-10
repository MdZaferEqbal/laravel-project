<div class="mb-3">
    <label for="{{$id}}" class="form-label"><strong>{{$label}}{{$required ? "*" : ""}}</strong></label>
    <input type="{{$type}}" class="form-control bg-dark text-danger border-0" value="{{isset($value) ? $value : null}}" id="{{$id}}" name="{{$name}}" @if(isset($minlength)) minlength={{$minlength}} @endif @if(isset($maxlength)) maxlength={{$maxlength}} @endif/>
    @error($name)
    <div class="form-text text-warning">{{$message}}</div>
    @elseif($info)
    <div class="form-text {{isset($customClass) ? "text-" . $customClass : ""}}">{!!$info!!}</div>
    @enderror
</div>
