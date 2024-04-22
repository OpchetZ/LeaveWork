<div class="form-group {{ $errors->has('employ_id') ? 'has-error' : ''}}">
    <label for="employ_id" class="control-label">{{ 'Employ Id' }}</label>
    <input class="form-control" name="employ_id" type="number" id="employ_id" value="{{ isset($leaverequest->employ_id) ? $leaverequest->employ_id : ''}}" >
    {!! $errors->first('employ_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('leave_type_name') ? 'has-error' : ''}}">
    <label for="leave_type_name" class="control-label">{{ 'Leave Type Name' }}</label>
    <select name="leave_type_name" class="form-control" id="leave_type_name" >
    @foreach (json_decode('{"\u0e25\u0e32\u0e1e\u0e31\u0e01\u0e1c\u0e48\u0e2d\u0e19":"\u0e25\u0e32\u0e1e\u0e31\u0e01\u0e1c\u0e48\u0e2d\u0e19","\u0e25\u0e32\u0e01\u0e34\u0e08":"\u0e25\u0e32\u0e01\u0e34\u0e08","\u0e25\u0e32\u0e1b\u0e48\u0e27\u0e22":"\u0e25\u0e32\u0e1b\u0e48\u0e27\u0e22"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($leaverequest->leave_type_name) && $leaverequest->leave_type_name == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('leave_type_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="control-label">{{ 'Start Date' }}</label>
    <input class="form-control" name="start_date" type="date" id="start_date" value="{{ isset($leaverequest->start_date) ? $leaverequest->start_date : ''}}" >
    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="control-label">{{ 'End Date' }}</label>
    <input class="form-control" name="end_date" type="date" id="end_date" value="{{ isset($leaverequest->end_date) ? $leaverequest->end_date : ''}}" >
    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_leave') ? 'has-error' : ''}}">
    <label for="total_leave" class="control-label">{{ 'Total Leave' }}</label>
    <input class="form-control" name="total_leave" type="number" id="total_leave" value="{{ isset($leaverequest->total_leave) ? $leaverequest->total_leave : ''}}" >
    {!! $errors->first('total_leave', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" style="margin-top: 10px">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
