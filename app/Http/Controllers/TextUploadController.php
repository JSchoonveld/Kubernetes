<?php

namespace App\Http\Controllers;


use SVG\SVG;
use SVG\Nodes\Shapes\SVGRect;
use Illuminate\Http\Request;

class TextUploadController extends Controller
{
 public function create()
    {
    }

    public function getTextData(Request $request)
    {
        dd($request->all());
    }
    public function makeSvg(request $request)
    {
        $image = new SVG(100, 100);
        $doc = $image->getDocument();

// blue 40x40 square at (0, 0)
        $square = new SVGRect(0, 0, 40, 40);
        $square->setStyle('fill', $request['text-color']);
        $doc->addChild($square);

        header('Content-Type: image/svg+xml');
        echo $image;
    }
}
