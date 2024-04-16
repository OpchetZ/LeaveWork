<div class="form-group {{ $errors->has('Job_position') ? 'has-error' : ''}}">
    <label for="Job_position" class="control-label">{{ 'ตำแหน่ง' }}</label>
    <input class="form-control" style="border-radius: 12px" name="Job_position" type="text" id="Job_position" value="{{ isset($position->Job_position) ? $position->Job_position : ''}}" >
    {!! $errors->first('Job_position', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" style="margin-top: 10px">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'สร้าง' }}">
</div>
