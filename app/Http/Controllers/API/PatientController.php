<?php

namespace App\Http\Controllers\API;

use App\Constants\MessageConstants;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create(Request $request) {
        $data = [
            'user_id' => $request->user_id,
            'medium_acquition' => $request->medium_acquition,
        ];

        Patient::create($data);

        return response()->json([
            'status' => 201,
            'message' => 'created'
        ], 201);
    }

    public function update(Request $request, $id) {
        $data = [
            'user_id' => $request->user_id,
            'medium_acquition' => $request->medium_acquition
        ];

        $patient = Patient::where('id', $id)->first();

        if(is_null($patient)) {
            return response()->json([
                'status' => 404,
                'message' => MessageConstants::NOT_FOUND
            ], 404);
        }

        Patient::where('id', $id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'updated'
        ], 200);
    }

    public function delete($id) {
        $patient = Patient::where('id', $id)->first();

        if(is_null($patient)) {
            return response()->json([
                'status' => 404,
                'message' => MessageConstants::NOT_FOUND
            ], 404);
        }

        Patient::where('id', $id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'deleted'
        ], 200);
    }

    public function get() {
        $patients = Patient::get()->all();

        return response()->json([
            'status' => 200,
            'data' => $patients
        ], 200);
    }

    public function getById($id) {
        $patient = Patient::find($id);

        if(is_null($patient)) {
            return response()->json([
                'status' => 404,
                'message' => MessageConstants::NOT_FOUND
            ], 400);
        }

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $patient
        ], 200);
    }
}
