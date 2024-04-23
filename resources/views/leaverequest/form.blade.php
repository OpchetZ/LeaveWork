{{-- <div class="form-group {{ $errors->has('employ_id') ? 'has-error' : ''}}">
    <label for="employ_id" class="control-label">{{ 'Employ Id' }}</label>
    <input class="form-control" style="border-radius: 12px" name="employ_id" type="number" id="employ_id" value="{{ isset($leaverequest->employ_id) ? $leaverequest->employ_id : ''}}" >
    {!! $errors->first('employ_id', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('employ_id') ? 'has-error' : ''}}">
    <label for="post_id" class="control-label">{{ 'ชื่อพนักงาน' }}</label>
    {{-- <input class="form-control" style="border-radius: 12px" name="post_id" type="number" id="post_id" value="{{ isset($employ->post_id) ? $employ->post_id : ''}}" > --}}
    <select class="form-select" name="employ_id" id="employ_id" required>
        <option value="">รายชื่อ</option>
        @foreach($employs as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <script>
        document.querySelector("#employ_id").value = "{{ isset($employ->id) ? $employ->id : ''}}";
    </script>
    {!! $errors->first('post_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('leave_type_name') ? 'has-error' : ''}}">
    <label for="leave_type_name" class="control-label">{{ 'ประเภทการลา' }}</label>
    <select name="leave_type_name" class="form-control" id="leave_type_name" >
    @foreach (json_decode('{"\u0e25\u0e32\u0e1e\u0e31\u0e01\u0e1c\u0e48\u0e2d\u0e19":"\u0e25\u0e32\u0e1e\u0e31\u0e01\u0e1c\u0e48\u0e2d\u0e19","\u0e25\u0e32\u0e01\u0e34\u0e08":"\u0e25\u0e32\u0e01\u0e34\u0e08","\u0e25\u0e32\u0e1b\u0e48\u0e27\u0e22":"\u0e25\u0e32\u0e1b\u0e48\u0e27\u0e22"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($leaverequest->leave_type_name) && $leaverequest->leave_type_name == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('leave_type_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="control-label">{{ 'วันเริ่ม' }}</label>
    <input class="form-control" style="border-radius: 12px" name="start_date" type="date" id="start_date" value="{{ isset($leaverequest->start_date) ? $leaverequest->start_date : ''}}" >
    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="control-label">{{ 'วันสิ้นสุด' }}</label>
    <input class="form-control" style="border-radius: 12px" name="end_date" type="date" id="end_date" value="{{ isset($leaverequest->end_date) ? $leaverequest->end_date : ''}}" >
    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_leave') ? 'has-error' : ''}}">
    <label for="total_leave" class="control-label">{{ 'กี่วัน' }}</label>
    <input class="form-control" style="border-radius: 12px" name="total_leave" type="number" step="0.1" id="total_leave" value="{{ isset($leaverequest->total_leave) ? $leaverequest->total_leave : ''}}" >
    {!! $errors->first('total_leave', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" style="margin-top: 10px">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
