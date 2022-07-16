<div class="form-group mt-3">
    <label for={{ $label }} class="form-label">{{ $label }}</label>
    <select class="form-select" aria-label="Default select example" name="select" required>
        @if($value)
            @foreach($value as $key)
                <option value={{ $key }}>{{ $key }}</option>
            @endforeach
        @endif
    </select>
</div>