<?

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse{
    public function successResponse($data, $code = Response::HTTP_OK){
        return response()->json(['data' => $data], $code);
    }

    public function successAdded(){
        return "New user has been successfully added.";
    }

    public function successUpdated(){
        return "A record has been successfully updated.";
    }

    public function successDeleted(){
        return "A record has been successfully deleted.";
    }

    public function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}