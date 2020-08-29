<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quesiton\AddQuestion;
use App\question_response;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usertype = Auth::user()->user_type;
        $userid = Auth::user()->id;

        $userapproved = DB::table('employee_details')
                        ->where("users_id", $userid)
                        ->first();
        
        if($usertype == "FACULTY")
        {
            if($userapproved == null)
            {
                return view("employeedetails");
            }
            else
            {
                if($userapproved->status == "APPROVED")
                {
                    $employeedetail1 = DB::table('employee_details')
                                       ->join('paper_progress', 'employee_details.id', '=', 'paper_progress.emp_id')
                                       ->where('paper_progress.progress', "NO PROGRESS")->get();
                    $employeedetail2 = DB::table('employee_details')
                                       ->join('paper_progress', 'employee_details.id', '=', 'paper_progress.emp_id')
                                       ->where('paper_progress.progress', "NO PROGRESS")->get();
                    $employeedetail3 = DB::table('employee_details')
                                       ->join('paper_progress', 'employee_details.id', '=', 'paper_progress.emp_id')
                                       ->where('paper_progress.progress', "NO PROGRESS")->get();
                                       
                    return view("selectexam",['employeedetail1' => $employeedetail1, 'employeedetail2' => $employeedetail2, 'employeedetail3' => $employeedetail3]);
                }
                elseif($userapproved->status == "NOT APPROVED")
                {
                    $message = "Your details are pending for approval from admin side!";
                    return view("adminmessage", ["message" => $message]);
                }
            }
        }
        elseif($usertype == "STUDENT")
        {
            $studentcode = 'OES-'.rand();
            return view('studentdetails', [ 'studentcode' => $studentcode ] );
        }
        else
        {
            return view('home');
        }
    }

     /**
     * Stote the Quesiton and the Options.
     *
     */
    public function addquestion(Request $request)
    {
        $employeedetail =   DB::table('employee_details')
                            ->where('users_id',Auth::user()->id)
                            ->where('class_allocated',$request->class)
                            ->where('stream_allocated',$request->stream)
                            ->where('subject_allocated',$request->subject)
                            ->first();
        
        $addquestions = new AddQuestion;
        $addquestions->emp_id = $employeedetail->id;
        $addquestions->question = $request->addquestion;
        $addquestions->question = $request->addquestion;
        $addquestions->option1  = $request->option1;
        $addquestions->option2  = $request->option2;
        $addquestions->option3  = $request->option3;
        $addquestions->option4  = $request->option4;
        $addquestions->save();

        $id = DB::table('add_questions')->get();
        $lastquestionid = $id;

        foreach($id as $lastid){
            $lastquestionid = $lastid->id;
        }

        $questionresponse = new question_response;
        $questionresponse->actual_response =  $request->actual_response;
        $questionresponse->question_number  =  $lastquestionid;
        $questionresponse->save();

        $successmessage = "Data saved. Proceed to Add Next Question";
        return view('/addquestionpaper',['successmessage' => $successmessage, 'classdetail' => $employeedetail]);
    }
}
