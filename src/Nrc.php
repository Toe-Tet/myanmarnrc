<?php

namespace Toetet\MyanmarNrc;

use Illuminate\Http\Request;

class Nrc {

    public function input()
    {
        return view('vendor.myanmarnrc.input');
    }

    public function data(Request $request)
    {
    	return $request->state_region.'/'.$request->township.'('.$request->citizen.')'.$request->number;
    }

    public function stateRegion(Request $request)
    {
    	return $request->state_region;    
    }

    public function getStateRegion($nrc)
    {
        $arr = explode('/', $nrc);
        return $arr[0];
    }

    public function citizen(Request $request)
    {
    	return $request->citizen;    
    }

    public function getCitizen($nrc)
    {
        return $this->getStringBetween($nrc, '(', ')');
    }

    public function township(Request $request)
    {
    	return $request->township;    
    }

    public function getTownship($nrc)
    {
        return $this->getStringBetween($nrc, '/', '(');
    }

    public function number(Request $request)
    {
    	return $request->number;    
    }

    public function getNumber($nrc)
    {
        $arr = explode(')', $nrc);
        return $arr[1];
    }

    protected function getStringBetween($content, $start, $end){
        $r = explode($start, $content);
        if (isset($r[1])){
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }
}