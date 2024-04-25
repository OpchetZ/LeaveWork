<x-boost-pdf title="">
    <div class="container">
        @if ($leaverequest->leave_type_name =='ลาพักผ่อน')
            
        
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
            $vacatotal = $employs->Acc_vaca_day + $employs->vaca_max;
        @endphp
        <div class="container">
            <div class="text-right">
                <span>
                    ข้าพเจ้า........{{ $leaverequest->employ->name }}...........ตำแหน่ง.......{{ $employs->position->Job_position }}...........................</span>
            </div>
            <span>สังกัด...........โรงพยาบาลอ่างทอง...........................กลุ่มงาน......................................................................</span>
            <span>มีวันลาพักผ่อนสะสม..{{ $employs->Acc_vaca_day }}..วันทำการ
                มีสิทธิลาพักผ่อนประจำปีนี้อีก..{{ $employs->vaca_max }}..วันทำการ
                รวมเป็น{{ $vacatotal }}วันทำการ</span>
            <span>ขอลาพักผ่อนตั้งแต่{{ $leaverequest->start_date->thaidate('วันที่ j เดือน M พ.ศ. y') }} ถึงวันที่
                {{ $leaverequest->start_date->thaidate('j เดือน M พ.ศ. y') }}
                มีกำหนด {{ $leaverequest->total_leave }} วัน</span>
            <span>ในระหว่างการลาติดต่อข้าพเจ้าได้ที่.......................................................................................................</span>
            <br>
            <span>..........................................................หมายเลขโทรศัพท์.............{{ $employs->phone }}....................................</span>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ขอแสดงความนับถือ</span><br>
                <span>ลงชื่อ.................................</span><br>
                <span>(.......{{ $leaverequest->employ->name }}........)</span>
            </div>
        </div>
        <div class="row">
            <div>
                <div class="text-left">
                    <span>สถิติการลาในงบปีนี้</span>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">ลามาแล้ว<br>(วันทำการ)</div>
                    <div class="col-xs-4 b">ลาครั้งนี้<br>(วันทำการ)</div>
                    <div class="col-xs-4 b">รวมเป็น<br>(วันทำการ)</div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">20<br></div>
                    <div class="col-xs-4 b">20 <br> </div>
                    <div class="col-xs-4 b">20</div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ความเห็นผู้บังคับบัญชา</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ................................................</span><br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                
                <span>ลงชื่อ.....................................ผู้ตรวจสอบ</span> <br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
            <div class="col-xs-6">
                <span> คำสั่ง ( ) อนุญาต ( ) ไม่อนุญาต</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ................................................</span><br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
        </div>
        <span>หมายเหตุ : ห้ามลบขีดเขียน</span>
        @else
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
            $vacatotal = $employs->Acc_vaca_day + $employs->vaca_max;
        @endphp
        <div class="container">
            <div class="text-right">
                <span>
                    ข้าพเจ้า........{{ $leaverequest->employ->name }}...........ตำแหน่ง.......{{ $employs->position->Job_position }}...........................</span>
            </div>
            <span>สังกัด...........โรงพยาบาลอ่างทอง...........................กลุ่มงาน......................................................................</span>
            <span>มีวันลาพักผ่อนสะสม..{{ $employs->Acc_vaca_day }}..วันทำการ
                มีสิทธิลาพักผ่อนประจำปีนี้อีก..{{ $employs->vaca_max }}..วันทำการ
                รวมเป็น{{ $vacatotal }}วันทำการ</span>
            <span>ขอลาพักผ่อนตั้งแต่{{ $leaverequest->start_date->thaidate('วันที่ j เดือน M พ.ศ. y') }} ถึงวันที่
                {{ $leaverequest->start_date->thaidate('j เดือน M พ.ศ. y') }}
                มีกำหนด {{ $leaverequest->total_leave }} วัน</span>
            <span>ในระหว่างการลาติดต่อข้าพเจ้าได้ที่.......................................................................................................</span>
            <br>
            <span>..........................................................หมายเลขโทรศัพท์.............{{ $employs->phone }}....................................</span>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ขอแสดงความนับถือ</span><br>
                <span>ลงชื่อ.................................</span><br>
                <span>(.......{{ $leaverequest->employ->name }}........)</span>
            </div>
        </div>
        <div class="row">
            <div>
                <div class="text-left">
                    <span>สถิติการลาในปีงบประมาณนี้</span>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">ประเภท<br>การลา </div>
                    <div class="col-xs-4 b">ลามาแล้ว<br>(วันทำการ)</div>
                    <div class="col-xs-4 b">ลาครั้งนี้<br>(วันทำการ)</div>
                    <div class="col-xs-4 b">รวมเป็น<br>(วันทำการ)</div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">ป่วย</div>
                    <div class="col-xs-4 b">20</div>
                    <div class="col-xs-4 b">20 </div>
                    <div class="col-xs-4 b">20</div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">กิจส่วนตัว</div>
                    <div class="col-xs-4 b">20</div>
                    <div class="col-xs-4 b">20 </div>
                    <div class="col-xs-4 b">20</div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">คลอดบุตร</div>
                    <div class="col-xs-4 b">20</div>
                    <div class="col-xs-4 b">20 </div>
                    <div class="col-xs-4 b">20</div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ความเห็นผู้บังคับบัญชา</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ................................................</span><br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                
                <span>ลงชื่อ.....................................ผู้ตรวจสอบ</span> <br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
            <div class="col-xs-6">
                <span> คำสั่ง ( ) อนุญาต ( ) ไม่อนุญาต</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ................................................</span><br>
                <span>ตำแหน่ง...........................................</span> <br>
                <span>วันที่.................................................</span>
            </div>
        </div>
        <span>หมายเหตุ : ห้ามลบขีดเขียน</span>
        @endif
    </div>
    </x-bootstrap-pdf>
