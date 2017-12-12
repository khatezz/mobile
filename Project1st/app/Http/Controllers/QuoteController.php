<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    //

    public function postquote(Request $request)
    {
    	$quote = new Quote();
    	$quote->content = $request->input('content');
    	$quote->save();

    	return response()->json(['quote' => $quote], 201);
    }

   	public function getquotes(){
   		$quotes = Quote::all();
   		$response = [
   			'quotes' => $quotes
   		];

   		return response()->json($response, 200);

   	}

   	public function putquote(Request $request, $id){

   		$quote = Quote::where('id' , $id)->first();
   		if(!$quote){
   			return response()->json(['message' => 'Document not Found'], 404);
   		}

   		$quote->content = $request->input('content');
   		$quote->save();

   		return response()->json(['quote' => $quote], 200);

   	}

   	public function deletequote($id){

   		$quote =Quote::find($id);
   		$quote->delete();
   		return response()->json(['message' => 'delete'], 200);
   	}
}
