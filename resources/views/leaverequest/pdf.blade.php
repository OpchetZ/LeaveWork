<x-boost-pdf title="">
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div>{{ $employs->status->status_name }}</div>
            </div>
            <div class="text-right">
                <div>เขียนที่ โรงพยาบาลอ่างทอง</div>
                <div>{{ $leaverequest->created_at->thaidate('วันที่ j เดือน F พ.ศ. y') }}</div>
            </div>
        </div>

        <hr />
        <div class="row">
            <div class="col-xs-6">
                <div>
                    <span> รหัสลูกค้า : </span>
                    <span> {{ $leaverequest->id }} </span>
                </div>
                <div>
                    <span> ชื่อลูกค้า : </span>
                    <span> {{ $leaverequest->employ->name }} </span>
                </div>
                <div>
                    <span> ที่อยู่ : </span>
                    <span> {{ $leaverequest->leave_type_name }} </span>
                </div>
            </div>
            <div class="col-xs-6">
                <div>
                    
                    <span> {{ $leaverequest->start_date->thaidate('วันที่ j เดือน F พ.ศ. y') }} </span>
                    
                </div>
                <div>
                    <span>พนักงานขาย : </span>
                    <span> {{ $leaverequest->total_leave }} </span>
                </div>
            </div>
        </div>
</x-bootstrap-pdf>