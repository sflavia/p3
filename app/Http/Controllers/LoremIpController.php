<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoremIpController extends Controller {
//get postParagraphs
    public function getParagraphs(Request $request) {
$numParagraphs = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParagraphs);
        return view('loremText')->with('paragraphs', $paragraphs);
    }
    public function postParagraphs(Request $request){

      $this->validate($request, [
       'paragraphs' => 'required|numeric|min:1|max:88|',
   ]);
        $numParagraphs = $request->input('paragraphs');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numParagraphs);

        return view('loremText')->with('paragraphs', $paragraphs);
    }
}
?>
