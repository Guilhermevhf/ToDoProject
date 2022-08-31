<div class="inputArea">
    <label for="title">
       {{$label}}
    </label>
    <input 
    type="{{empty($type) ? 'text' : $type}}"
    id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder ?? ''}}" 
    {{$required? 'required': ''}}
    required/>
</div>