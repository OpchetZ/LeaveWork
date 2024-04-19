<div class="form-group {{ $errors->has('status_name') ? 'has-error' : ''}}">
    <label for="status_name" class="control-label">{{ 'สถาณะ' }}</label>
    <input class="form-control" style="border-radius: 12px" name="status_name" type="text" id="status_name" value="{{ isset($status->status_name) ? $status->status_name : ''}}" >
    {!! $errors->first('status_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sick_max') ? 'has-error' : ''}}">
    <label for="sick_max" class="control-label">{{ 'ลาป่วย' }}</label>
    <input class="form-control" style="border-radius: 12px" name="sick_max" type="number" id="sick_max" value="{{ isset($status->sick_max) ? $status->sick_max : ''}}" >
    {!! $errors->first('sick_max', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bus_max') ? 'has-error' : ''}}">
    <label for="bus_max" class="control-label">{{ 'ลากิจ' }}</label>
    <input class="form-control" style="border-radius: 12px" name="bus_max" type="number" id="bus_max" value="{{ isset($status->bus_max) ? $status->bus_max : ''}}" >
    {!! $errors->first('bus_max', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vaca_max') ? 'has-error' : ''}}">
    <label for="vaca_max" class="control-label">{{ 'พักผ่อน' }}</label>
    <input class="form-control" style="border-radius: 12px" name="vaca_max" type="number" id="vaca_max" value="{{ isset($status->vaca_max) ? $status->vaca_max : ''}}" >
    {!! $errors->first('vaca_max', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
