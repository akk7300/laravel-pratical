<div class="form-group mt-3">
  <div class="form-check">
    <input type="hidden" value="0" name="checkbox">
    <input class="form-check-input"  name="checkbox" type="checkbox" value="1" {{ old('checkbox') ? 'checked="checked"' : '' }}>
    <label class="form-check-label" for="flexCheckDefault">
      {{ $label }}
    </label>
  </div>
</div>