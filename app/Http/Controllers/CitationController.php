<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitationController extends Controller
{
    public function show()
    {
       // $citation = 'bla bla bla';
        $citation[] = 'Если ты не знаешь, чего хочешь, ты в итоге останешься с тем, чего точно не хочешь. ';
        $citation[] = 'Чтобы дойти до цели, надо идти. ';
        $citation[] = ' Это своего рода забава, делать невозможное. ';
        $citation[] = ' Если люди не смеются над вашими целями, значит ваши цели слишком мелкие. ';
        $citation[] = 'Пробуйте и терпите неудачу, но не прерывайте ваших стараний.';
        srand ((double) microtime() * 1000000);
        $random_number = rand(0,count($citation)-1);
        $citation = $citation[$random_number];
        return view('inspire', compact('citation'));
    }
}
