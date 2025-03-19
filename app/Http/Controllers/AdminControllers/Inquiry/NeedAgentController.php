<?php

namespace App\Http\Controllers\AdminControllers\Inquiry;

use App\Http\Controllers\Controller;
use App\Models\Inquiry\NeedAgentModel;
use Illuminate\Http\Request;

class NeedAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = NeedAgentModel::orderby('id','desc')->get();
        return view('admin.need-agent.index',compact('agents'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = NeedAgentModel::findorfail($id);
        if($del->delete())
        {
            return redirect()->back()->with('success',' Deleted  successfully');
        }
    }
}
