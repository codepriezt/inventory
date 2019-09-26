@if($errors->has($field))
    <span class="text-14 text-danger">{{ $errors->first($field)}}</span> 
@endif