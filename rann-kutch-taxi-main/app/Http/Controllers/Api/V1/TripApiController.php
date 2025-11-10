<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Traits\Auditable;
use App\Traits\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Validator;

class TripApiController extends Controller
{
    use Validation;
    public $successStatus = 200;

    public function update_trip(Request $request){
        DB::beginTransaction();
        try {
            $userRequest = $request->all();
            $fields['trip_id'] = [
                'required',
                'integer',
                'exists:trips,id,deleted_at,NULL'
            ];

            $fields['slug'] = [
                'required',
                'string',
                'exists:trips,slug,deleted_at,NULL'
            ];

            $fields['sort_description'] = [
                'required',
                'string'
            ];

            $fields['description'] = [
                'required',
                'string'
            ];

            $fields['meta_title'] = [
                'required',
                'string'
            ];

            $fields['meta_description'] = [
                'required',
                'string'
            ];



            $error = Validator::make($request->all(), $fields, [
                'trip_id.required' => trans('label.trip_id_required_error_msg'),
                'trip_id.integer'  => trans('label.trip_id_integer_error_msg'),
                'trip_id.exists'   => trans('label.trip_id_exists_error_msg'),
                // slug
                'slug.required' => trans('label.slug_required_error_msg'),
                'slug.string'   => trans('label.slug_string_error_msg'),
                'slug.exists'   => trans('label.slug_exists_error_msg'),

                // sort_description
                'sort_description.required' => trans('label.sort_description_required_error_msg'),
                'sort_description.string'   => trans('label.sort_description_string_error_msg'),

                // description
                'description.required' => trans('label.description_required_error_msg'),
                'description.string'   => trans('label.description_string_error_msg'),

                // meta_title
                'meta_title.required' => trans('label.meta_title_required_error_msg'),
                'meta_title.string'   => trans('label.meta_title_string_error_msg'),

                // meta_description
                'meta_description.required' => trans('label.meta_description_required_error_msg'),
                'meta_description.string'   => trans('label.meta_description_string_error_msg'),
            ]);

            $validationResponse = $this->check_validation($fields, $error, 'Login');
            if (!$validationResponse->getData()->status) {
                return $validationResponse;
            }

            $updatedData['sort_description'] = $userRequest['sort_description'];
            $updatedData['description'] = $userRequest['description'];
            $updatedData['meta_title'] = $userRequest['meta_title'];
            $updatedData['meta_description'] = $userRequest['meta_description'];
            Trip::where("slug",$userRequest['slug'])->update($updatedData);

            return response()->json(['status' => true, 'message' => "Trip updates successfully"], $this->successStatus);

        }
        catch (Exception $ex) {
            DB::rollBack();
            Auditable::log_audit_data('TripApiController@update_trip Exception', null, config('settings.log_type')[0], $ex->getMessage());
            return response()->json(['status' => false, 'message' => trans('label.something_went_wrong_error_msg')], $this->successStatus);
        }

    }

}
