<x-boost-pdf title="">
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div>{{ $employs->status->status_name }}</div>
            </div>
            <br>
            <div class="col-xs-6 text-right">
                <div>เขียนที่ โรงพยาบาลอ่างทอง</div>
                <div>{{ $leaverequest->created_at->thaidate('วันที่ j เดือน F พ.ศ. y') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div>
                    <span> เรื่อง </span>
                    <span> ขอ{{ $leaverequest->leave_type_name }} </span>
                </div>
                <div>
                    <span> เรียน </span>
                    <span> ผู้อำนวยการโรงพยาบาลอ่างทอง </span>
                </div>
            </div>
        </div>
        @php
            $vacatotal = ($employs->Acc_vaca_day + $employs->vaca_max)   
        @endphp
        <div class="container">
            <div class="text-right">
            <span> ข้าพเจ้า........{{ $leaverequest->employ->name }}...........ตำแหน่ง.......{{ $employs->position->Job_position }}...........................</span>
            </div>
            <span>สังกัด...........โรงพยาบาลอ่างทอง...........................กลุ่มงาน......................................................................</span>
            <span>มีวันลาพักผ่อนสะสม..{{ $employs->Acc_vaca_day }}..วันทำการ มีสิทธิลาพักผ่อนประจำปีนี้อีก..{{ $employs->vaca_max }}..วันทำการ รวมเป็น{{ $vacatotal }}วันทำการ</span>
            <span>ขอลาพักผ่อนตั้งแต่{{ $leaverequest->start_date->thaidate('วันที่ j เดือน M พ.ศ. y') }} ถึงวันที่ {{ $leaverequest->start_date->thaidate('j เดือน M พ.ศ. y') }} 
                มีกำหนด {{ $leaverequest->total_leave }} วัน</span>
            <span>ในระหว่างการลาติดต่อข้าพเจ้าได้ที่.......................................................................................................</span> <br>
            <span>..........................................................หมายเลขโทรศัพท์.............{{ $employs->phone }}....................................</span>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span>    ขอแสดงความนับถือ</span><br>
                <span>ลงชื่อ.................................</span><br>
                <span>(...........................................)</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="text-center">
                <span>สถิติการลาในงบปีนี้</span>
                </div>
                <table class="table">
                        <tr>
                            <th scope="col"><p style="font-family: Arial, sans-serif">ลามาแล้ว<br>(วันทำการ)</p></th>
                            <th>ลาครั้งนี้<br>(วันทำการ)</th>
                            <th>รวมเป็น<br>(วันทำการ)</th>
                        </tr>
                </table>
                <span>กินไก่</span>
            </div>
        </div>

        </x-bootstrap-pdf>
