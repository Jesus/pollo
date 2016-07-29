<?php

namespace pollo\Http\Requests;

use pollo\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdateCommentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();

        $id = $this->get('id');

        $comment = $user->comments()->find($id);

        if($comment)
        {
            return true;
        }


        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:comments,id',
            'calification' => 'required',
            'description' => 'required',
        ];
    }
}