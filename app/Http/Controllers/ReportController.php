<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Report::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_date'        =>  '',
            'student_id'          =>  'required',
            'student_name'        =>  'required',
            'student_progress'    =>  'required',
            'student_comment'     =>  '',
        ]);


        $report = new Report;

        $report->date = $request->date;
        $report->student_id = $request->student_id;
        $report->student_name = $request->student_name;
        $report->student_progress = $request->student_progress;
        $report->comment = $request->comment;
        $report->status = $request->status;


        $report->save();

        return redirect()->route('reports.index')->with('success', 'Report Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'student_date'        =>  '',
            'student_id'          =>  'required',
            'student_name'        =>  'required',
            'student_progress'    =>  'required',
            'student_comment'     =>  '',
            'status'     =>  '',
        ]);

        $report = Report::find($request->hidden_id);

        $report->date = $request->date;

        $report->student_id = $request->student_id;

        $report->student_name = $request->student_name;

        $report->student_progress = $request->student_progress;

        $report->comment = $request->comment;

        

        $report->save();

        return redirect()->route('reports.index')->with('success', 'Report Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
       $report->delete();
       
       return redirect()->route('reports.index')->with('success', 'Report Data deleted succesfully');
    }

    public function indexSub()
    {
        return view('/progressSub');
    }

    public function indexProgress()
    {

        return view('/progressReport');

    }

    public function lecturerShow()
    {
        $lecturer = Report::all();
        return view('lecturerShow',[
            'report'=>$lecturer,
        ]);

    }

    public function lecturerView(Report $report)
    {

        return view('lecturerView',[
            'report'=>$report,
        ]);

    }

    public function lecturerApprove(Request $request, Report $report)
    {

        $report = Report::find($request->reportID);

       if($report)
       {
        $report->status = '1';
        $report->comment_lecturer=$request->lecturerComment;
        $report->save();

        return back();

       }
       else
       {
        return back();
       }

    }


}
