<div class="form-group {{ $errors->has('Job position') ? 'has-error' : ''}}">
    <label for="Job position" class="control-label">{{ 'Job Position' }}</label>
    <input class="form-control" name="Job position" type="text" id="Job position" value="{{ isset($position->Job position) ? $position->Job position : ''}}" >
    {!! $errors->first('Job position', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
