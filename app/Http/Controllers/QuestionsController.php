<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Questions;
 
class QuestionsController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function sample()
    {
        $questions = new Questions();
        $data = $questions->get();

        $response['code'] = 200;
        $response['message'] = 'Success';
        $response['data'] = $data;

        return view('index')->with('pertanyaan', $data);
    }

    public function all(){
        $questions = new Questions();
        $data = $questions->get();

        $response['code'] = 200;
        $response['message'] = 'Success';
        $response['data'] = $data;

        return response()->json($response, 200);
        //return view('index')->with('pertanyaan', $data);
    }

    public function detail($id)
    {
        $questions = Questions::find($id);

        if($questions === null){
            $response['code'] = 400;
            $response['message'] = "id_pertanyaan not found";
            $response['data'] = $questions;

            return response()->json($response, 400);
        }
        else{
            $response['code'] = 200;
            $response['message'] = "Success";
            $response['data'] = $questions;

            return response()->json($response, 200);
        }
    }
}