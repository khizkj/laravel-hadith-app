<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Hadtihcontroller extends Controller
{
   public function gethadith()
    {
        $apikey = '$2y$10$DErjvDETSIJ70WegaVcguSfCVSqDmV7tARUuKeapQM8avqyTtTPO';
        $hadtihdata = Http::get("https://hadithapi.com/api/books?apiKey=$apikey")->json();

        return view("hadithdata", [
            "collection" => $hadtihdata['books']
        ]);
    }

    public function gethadithchapter($bookslug)
    {
        $apikey = '$2y$10$DErjvDETSIJ70WegaVcguSfCVSqDmV7tARUuKeapQM8avqyTtTPO';
        $chapterdata = Http::get("https://hadithapi.com/api/$bookslug/chapters?apiKey=$apikey")->json();

        return view('hadithChapters', [
            'collection' => $chapterdata['chapters'],
            'bookslug' => $bookslug
        ]);
    }

    public function readHadiths($bookslug, $chapterNum)
    {
        $apikey = '$2y$10$DErjvDETSIJ70WegaVcguSfCVSqDmV7tARUuKeapQM8avqyTtTPO';

        $response = Http::get("https://hadithapi.com/api/hadiths", [
            'apiKey' => $apikey,
            'book' => $bookslug,
            'chapter' => $chapterNum,
            'paginate' => 1000000
        ]);

        $data = $response->json();

        if (!$response->ok() || !isset($data['hadiths'])) {
            abort(404, 'Hadiths not found.');
        }

        return view('readhadith', [
            'collection' => $data['hadiths']['data'],
            'bookslug' => $bookslug,
            'chapter' => $chapterNum
        ]);
    }

}
