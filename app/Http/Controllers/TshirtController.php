<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirts;

class TshirtController extends Controller
{
    public function index(){
        $data = Tshirts::get();
        // return $data;

        return view('tshirt-list', compact('data'));
    }

    public function addTshirt(){
        return view('add-tshirt');
    }

    public function saveTshirt(Request $request){
        // validating the form
        $request->validate([
            'batch' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        // dd($request->all());

        $batchno = $request->batch;
        $qty = $request->quantity;
        $status = $request->status;
        $remarks = $request->remarks;

        $tsi = new Tshirts();
        $tsi->batchno = $batchno;
        $tsi->qty = $qty;
        $tsi->status = $status;
        $tsi->remarks = $remarks;

        $tsi->save();

        return redirect('/tshirt-list')->with('success', 'Tshirt Added Successfully');
    }

    public function editTshirt($id){
        $data = Tshirts::where('id', '=', $id)->first();

        // return $data;

        return view('edit-tshirt', compact('data'));
    }

    public function updateTshirt(Request $request){
        // validating the form
        $request->validate([
            'batch' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        $id = $request->id;
        $batchno = $request->batch;
        $qty = $request->quantity;
        $status = $request->status;
        $remarks = $request->remarks;

        Tshirts::where('id', '=', $id)->update([
            'batchno' => $batchno,
            'qty' => $qty,
            'status' => $status,
            'remarks' => $remarks
        ]);

        return redirect('/tshirt-list')->with('success', 'Tshirt Updated Successfully');
    }

    public function deleteTshirt($id){
        Tshirts::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Tshirt deleted successfully');
    }
}
