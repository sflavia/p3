<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoremIpsumController extends Controller {


    public function getParagraphs(Request $request) {
$numParagraphs = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParagraphs);
        return view('LoremIpsum\LoremIpsum')->with('$paragraphs');
    }

    public function postParagraphs(Request $request){
        $numParagraphs = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParagraphs);
        echo implode('<p>', $paragraphs);
        return view('LoremIpsum\LoremIpsum')->with('$paragraphs');
    }
}
?>
