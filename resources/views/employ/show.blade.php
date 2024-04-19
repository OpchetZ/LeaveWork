<x-app-layout title="พนักงาน">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">employ {{ $employ->id }}</div> --}}
                    <div class="card-body">

                        <a href="{{ url('/employ') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/employ/' . $employ->id . '/edit') }}" title="Edit employ"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('employ' . '/' . $employ->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete employ" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employ->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $employ->name }} </td></tr><tr><th> Phone </th><td> {{ $employ->phone }} </td></tr><tr><th> Acc Vaca Day </th><td> {{ $employ->Acc_vaca_day }} </td></tr><tr><th> Status Id </th><td> {{ $employ->status_id }} </td></tr><tr><th> Post Id </th><td> {{ $employ->post_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>