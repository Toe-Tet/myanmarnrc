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

    public function citizen(Request $request)
    {
    	return $request->citizen;    
    }

    public function township(Request $request)
    {
    	return $request->township;    
    }

    public function number(Request $request)
    {
    	return $request->number;    
    }
}