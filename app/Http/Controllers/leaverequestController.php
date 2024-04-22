<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\leaverequest;
use Illuminate\Http\Request;

class leaverequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $leaverequest = leaverequest::where('employ_id', 'LIKE', "%$keyword%")
                ->orWhere('leave_type_name', 'LIKE', "%$keyword%")
                ->orWhere('start_date', 'LIKE', "%$keyword%")
                ->orWhere('end_date', 'LIKE', "%$keyword%")
                ->orWhere('total_leave', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $leaverequest = leaverequest::latest()->paginate($perPage);
        }

        return view('leaverequest.index', compact('leaverequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('leaverequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        leaverequest::create($requestData);

        return redirect('leaverequest')->with('flash_message', 'leaverequest added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $leaverequest = leaverequest::findOrFail($id);

        return view('leaverequest.show', compact('leaverequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $leaverequest = leaverequest::findOrFail($id);

        return view('leaverequest.edit', compact('leaverequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $leaverequest = leaverequest::findOrFail($id);
        $leaverequest->update($requestData);

        return redirect('leaverequest')->with('flash_message', 'leaverequest updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        leaverequest::destroy($id);

        return redirect('leaverequest')->with('flash_message', 'leaverequest deleted!');
    }
}
