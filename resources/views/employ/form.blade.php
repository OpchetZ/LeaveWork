<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" style="border-radius: 12px" name="name" type="text" id="name" value="{{ isset($employ->name) ? $employ->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" style="border-radius: 12px" name="phone" type="text" id="phone" value="{{ isset($employ->phone) ? $employ->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Acc_vaca_day') ? 'has-error' : ''}}">
    <label for="Acc_vaca_day" class="control-label">{{ 'Acc Vaca Day' }}</label>
    <input class="form-control" style="border-radius: 12px" name="Acc_vaca_day" type="number" id="Acc_vaca_day" value="{{ isset($employ->Acc_vaca_day) ? $employ->Acc_vaca_day : ''}}" >
    {!! $errors->first('Acc_vaca_day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    <label for="status_id" class="control-label">{{ 'Status Id' }}</label>
    <input class="form-control" style="border-radius: 12px" name="status_id" type="number" id="status_id" value="{{ isset($employ->status_id) ? $employ->status_id : ''}}" >
    {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('post_id') ? 'has-error' : ''}}">
    <label for="post_id" class="control-label">{{ 'Post Id' }}</label>
    <input class="form-control" style="border-radius: 12px" name="post_id" type="number" id="post_id" value="{{ isset($employ->post_id) ? $employ->post_id : ''}}" >
    {!! $errors->first('post_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" style="margin-top: 10px">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไข' : 'เพิ่ม' }}">
</div>
