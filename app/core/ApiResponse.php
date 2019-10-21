<?php
/** @noinspection MethodShouldBeFinalInspection */

namespace App\core;
use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public function __construct()
    {
        return $this;
    }

    private $message = "";
    private $success = true;
    private $data = [];

    public function success(){
        $this->success = true;
        return $this;
    }

    public function fail(){
        $this->success = false;
        return $this;
    }

    /**
     * @param $message
     * @return ApiResponse
     */
    public function message($message){
        $this->message = $message;
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */

    public function data($index,$data){
        $this->data[$index] = $data;
        return $this;
    }

    /**
     * @return JsonResponse
     */

    public function build()  :  JsonResponse {

        return response()->json([
            'message' => $this->message,
            'success' => $this->success,
            'body' => $this->data
        ]);

    }
}
