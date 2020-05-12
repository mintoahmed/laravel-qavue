<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AcceptAnswerController extends Controller
{
    public function __invoke(Answer $answer)
    {
//        dd('accept the answer');
        $this->authorize('accept', $answer);

        $answer->question->acceptBestAnswer($answer);

        return back();
    }
}
