<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ-นามสกุล' }}</label>
    <input class="form-control" style="border-radius: 12px" name="name" type="text" id="name" value="{{ isset($employ->name) ? $employ->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'โทรศัพท์' }}</label>
    <input class="form-control" style="border-radius: 12px" name="phone" type="text" id="phone" value="{{ isset($employ->phone) ? $employ->phone : ''}}" >
    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Acc_vaca_day') ? 'has-error' : ''}}">
    <label for="Acc_vaca_day" class="control-label">{{ 'วันลาสะสม' }}</label>
    <input class="form-control" style="border-radius: 12px" name="Acc_vaca_day" type="number" id="Acc_vaca_day" value="{{ isset($employ->Acc_vaca_day) ? $employ->Acc_vaca_day : ''}}" >
    {!! $errors->first('Acc_vaca_day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('post_id') ? 'has-error' : ''}}">
    <label for="post_id" class="control-label">{{ 'ตำแหน่ง' }}</label>
    {{-- <input class="form-control" style="border-radius: 12px" name="post_id" type="number" id="post_id" value="{{ isset($employ->post_id) ? $employ->post_id : ''}}" > --}}
    <select class="form-select" name="post_id" id="post_id" required>
        <option value="">เลือกตำแหน่ง</option>
        @foreach($positions as $item)
        <option value="{{ $item->id }}">{{ $item->Job_position }}</option>
        @endforeach
    </select>
    <script>
        document.querySelector("#post_id").value = "{{ isset($employ->post_id) ? $employ->post_id : ''}}";
    </script>
    {!! $errors->first('post_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status_id') ? 'has-error' : ''}}">
    <label for="status_id" class="control-label">{{ 'สถาณะ' }}</label>
    {{-- <input class="form-control" style="border-radius: 12px" name="status_id" type="number" id="status_id" value="{{ isset($employ->status_id) ? $employ->status_id : ''}}" > --}}
    <select class="form-select" name="status_id" id="status_id" required>
        <option value="">เลือกสถาณะ</option>
        @foreach($statuses as $item)
        <option value="{{ $item->id }}">{{ $item->status_name }}</option>
        @endforeach
    </select>
    <script>
        document.querySelector("#status_id").value = "{{ isset($employ->status_id) ? $employ->status_id : ''}}";
    </script>
    {!! $errors->first('status_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group" style="margin-top: 10px">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไข' : 'เพิ่ม' }}">
</div>
