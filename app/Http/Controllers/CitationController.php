<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitationController extends Controller
{
    protected $citation = [
        'Если ты не знаешь, чего хочешь, ты в итоге останешься с тем, чего точно не хочешь. ',
        'Чтобы дойти до цели, надо идти. ',
        'Это своего рода забава, делать невозможное. ',
        'Если люди не смеются над вашими целями, значит ваши цели слишком мелкие. ',
        'Пробуйте и терпите неудачу, но не прерывайте ваших стараний.',
        'Запомните - этот день возврату и обмену не подлежит. '
    ];

    public function show()
    {
        $citation = $this->citation;
        $random_number = rand(0, count($citation) - 1);
        $citation = $citation[$random_number];
        return view('inspire', compact('citation'));
    }
}
