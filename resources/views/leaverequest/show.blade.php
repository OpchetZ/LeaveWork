<x-app-layout title="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">leaverequest {{ $leaverequest->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/leaverequest') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/leaverequest/' . $leaverequest->id . '/edit') }}" title="Edit leaverequest"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('leaverequest' . '/' . $leaverequest->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete leaverequest" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $leaverequest->id }}</td>
                                    </tr>
                                    <tr><th> Employ Id </th><td> {{ $leaverequest->employ_id }} </td></tr><tr><th> Leave Type Name </th><td> {{ $leaverequest->leave_type_name }} </td></tr><tr><th> Start Date </th><td> {{ $leaverequest->start_date }} </td></tr><tr><th> End Date </th><td> {{ $leaverequest->end_date }} </td></tr><tr><th> Total Leave </th><td> {{ $leaverequest->total_leave }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>