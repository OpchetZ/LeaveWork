<x-app-layout title="ประวัติการลา">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ทะเบียนวันลา') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">Leaverequest</div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <a href="{{ url('/dashboard') }}" class="btn btn-warning btn-sm"
                                    title="Add New leaverequest">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> หน้าแรก
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select" name="agen" id="agen" required>
                                    <option value="">หน่วยงาน</option>
                                    @foreach($agen as $item)
                                    <option value="{{ $item->id }}">{{ $item->agency_name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                    document.querySelector("#agen").value = "{{ request('agen') ? request('agen') : '' }}";
                                </script>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select" name="employ_id" id="employ_id" required>
                                    <option value="">รายชื่อ</option>
                                    @foreach($employs as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <script>
                                    document.querySelector("#employ").value = "{{ request('employ') ? request('employ') : '' }}";
                                </script>
                            </div>
                        </div>
                    </div>

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อพนักงาน</th>
                                    <th>ประเภทการลา</th>
                                    <th>วันเริ่ม</th>
                                    <th>วันสิ้นสุด</th>
                                    <th>วัน</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($leaverequest as $leaverequest)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $leaverequest->employ->name }}</td>
                                        <td>{{ $leaverequest->leavetype->leave_type_name }}</td>
                                        <td>{{ $leaverequest->start_date->thaidate('วันที่ j M พ.ศ. y') }}</td>
                                        <td>{{ $leaverequest->end_date->thaidate('วันที่ j M พ.ศ. y') }}</td>
                                        <td>{{ $leaverequest->total_leave }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/leaverequest/' . $item->id) }}"
                                                title="View leaverequest"><button class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye" aria-hidden="true"></i> ดู</button></a>
                                            {{-- <a href="{{ url('/leaverequest/' . $item->id . '/edit') }}"
                                                    title="Edit leaverequest"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        แก้ไข</button></a>
                                                <a href="{{ url('/leaverequest/' . $item->id . '/pdf') }}"
                                                    title="PDF">
                                                    <button class="btn btn-success btn-sm">
                                                        <i class="fa fa-file" aria-hidden="true"> พิมพ์ใบลา</i> 
                                                    </button>
                                                </a> --}}


                                            <form method="POST" action="{{ url('/leaverequest' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete leaverequest"
                                                    onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i>
                                                    ลบ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="pagination-wrapper"> {!! $leaverequest->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
