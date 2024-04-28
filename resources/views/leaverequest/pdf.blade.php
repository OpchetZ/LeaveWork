<x-boost-pdf title="">
    <body style="font-size:<?php echo ($leaverequest->leavetype->leave_type_name == 'ลาพักผ่อน')? "15px" : "14px"; ?>;">
    <div class="container" style="margin-left: 75px;">
        @if ($leaverequest->leavetype->leave_type_name =='ลาพักผ่อน')
            
        
        <div class="row">
            <div class="col-xs-5">
                <div>{{ $employs->status->status_name }}</div>
            </div>
            <br>
            <div class="col-xs-6 text-right">
                <div>เขียนที่ โรงพยาบาลอ่างทอง</div>
                <div>{{ $leaverequest->start_date->thaidate('วันที่ j เดือน F พ.ศ. y') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div>
                    <span> เรื่อง </span>
                    <span> ขอ{{ $leaverequest->leavetype->leave_type_name }} </span>
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
            <span>สังกัด...........โรงพยาบาลอ่างทอง...........................กลุ่มงาน.............{{ $employs->agency->agency_name }}....................</span>
            <span>มีวันลาพักผ่อนสะสม {{ $employs->Acc_vaca_day }} วันทำการมีสิทธิลาพักผ่อนประจำปีนี้อีก {{ $employs->vaca_max }} วันทำการรวมเป็น {{ $vacatotal }} วัน<br></span>
            <span>ขอลาพักผ่อนตั้งแต่{{ $leaverequest->start_date->thaidate('วันที่ j เดือน M พ.ศ. y') }}ถึงวันที่{{ $leaverequest->end_date->thaidate('j เดือน Mพ.ศ. y') }} <br> </span>
            <span>มีกำหนด{{ $leaverequest->total_leave }}วันในระหว่างการลาติดต่อข้าพเจ้าได้ที่..............................................................................</span>
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
                    <div class="col-xs-6 text-center"><span>
                        (นายยุทนา เกษมสุข)<br>เจ้าพนักงานธุรการปฎิบัติงาน</span></div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br> </div>
                    <div class="col-xs-4 b"><br></div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ความเห็นผู้บังคับบัญชา</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ.........(นางพลับพลึง จำพรด)..............</span><br>
                <span>ตำแหน่ง...หัวหน้ากลุ่มงานบริหารทั่วไป...</span> <br>
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
                <span>ลงชื่อ......(นางวราภรณ์ วังเมธากุล)..........</span><br>
                <span>ตำแหน่ง...รองผู้อำนวยการฝ่ายบริหาร...</span> <br>
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
                <div>{{ $leaverequest->start_date->thaidate('วันที่ j เดือน F พ.ศ. y') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div>
                    <span> เรื่อง </span>
                    <span> ขอ{{ $leaverequest->leavetype->leave_type_name }} </span>
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
            <span>สังกัด...........โรงพยาบาลอ่างทอง...........................กลุ่มงาน.....................{{ $employs->agency->agency_name }}......................</span>
            <div style="text-align: center;">ขอ {{ $leaverequest->leavetype->leave_type_name }} เนื่องจาก...................................</div>
            <span>ตั้งแต่{{ $leaverequest->start_date->thaidate('วันที่ j เดือน M พ.ศ y') }} ถึงวันที่ 
                .{{ $leaverequest->end_date->thaidate('j เดือน M พ.ศ y') }}
                มีกำหนด..{{ $leaverequest->total_leave }}..วัน</span> <br>
            <span>ข้าพเจ้าได้ {{ $leaverequest->leavetype->leave_type_name }} ครั้งสุดท้ายตั้งแต่วันที่......................ถึงวันที่.....................รวม
            ...................วัน</span> 
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
                    <div class="col-xs-3 b">ประเภท<br>การลา </div>
                    <div class="col-xs-3 b">ลามาแล้ว<br>(วันทำการ)</div>
                    <div class="col-xs-3 b">ลาครั้งนี้<br>(วันทำการ)</div>
                    <div class="col-xs-3 b">รวมเป็น<br>(วันทำการ)</div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">ป่วย</div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-6 text-center"><span>
                        (นายยุทนา เกษมสุข)</span></div>
                </div>
                <div class="row">
                    <div class="col-xs-4 b">กิจส่วนตัว</div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-6 text-center"><span>
                        เจ้าพนักงานธุรการปฎิบัติงาน</span></div>
                    
                </div>
                <div class="row">
                    <div class="col-xs-4 b">คลอดบุตร</div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                    <div class="col-xs-4 b"><br></div>
                </div>
                
            </div>
            


        </div>
        <div class="row">
            <div class="col-xs-6"></div>
            <div class="col-xs-6">
                <span> ความเห็นผู้บังคับบัญชา</span><br>
                <span>.........................................................</span> <br>
                <span>ลงชื่อ.........(นางพลับพลึง จำพรด)..............</span><br>
                <span>ตำแหน่ง.......หัวหน้ากลุ่มงานบริหารทั่วไป...</span> <br>
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
                <span>ลงชื่อ.........(นางวราภรณ์ วังเมธากุล)..........</span><br>
                <span>ตำแหน่ง.......รองผู้อำนวยการฝ่ายบริหาร...</span> <br>
                <span>วันที่.................................................</span>
            </div>
        </div>
        <span>หมายเหตุ : ห้ามลบขีดเขียน</span>
        @endif
    </div>
    </body>
    </x-bootstrap-pdf>
