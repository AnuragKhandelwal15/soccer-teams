<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(Request $request)
    {
        $appKey = $request->header('S-TOKEN');
        if(strcmp($appKey, env('SOCCER_TOKEN','SoccerToken')) != 0){
            $response = [
                'status'  => false,
                'data'    => null,
                'message' => "Invalid App Key",
            ];
            response()->json($response, 401)->send();exit;
        }
    }

    /* success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message, $statusCode = 200)
    {
        $response = [
            'status' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, $statusCode);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($message, $statusCode = 200)
    {
        $response = [
            'status'  => false,
            'data'    => null,
            'message' => $message,
        ];

        return response()->json($response, $statusCode);
    }
}
