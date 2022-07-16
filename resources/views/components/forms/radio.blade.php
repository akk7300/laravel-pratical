<div class="form-group mt-3">
    <label for={{ $label }} class="form-label">{{ $label }} : </label>
    @foreach($value as $key)
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="radio" value="{{$key}}">
            {{$key}}
        </label>
    </div>
    @endforeach
</div>
