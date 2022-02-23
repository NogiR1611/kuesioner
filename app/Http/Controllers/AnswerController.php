<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ParticipantAnswer;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_mhs' => 'integer|required',
            'id_pertanyaan' => 'integer|required',
            'nim' => 'integer|required',
            'jawaban' => 'integer|required',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        else{
            $participantAnswer = new ParticipantAnswer();
            
            $participantAnswer->id_mhs = $request->id_mhs;
            $participantAnswer->id_pertanyaan = $request->id_pertanyaan;
            $participantAnswer->nim = $request->nim;
            $participantAnswer->jawaban = $request->jawaban;
            $participantAnswer->save();

            $response['code'] = 200;
            $response['message'] = 'Success, answer has been inserted';
            $response['data'] = $participantAnswer;
            
            return response()->json($response, 200);
        }
    }
}
