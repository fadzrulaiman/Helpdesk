<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Department\DepartmentResource;
use App\Http\Resources\UserRole\UserRoleResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var User $user */
        $user = $this;
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'staffno' => $user->staffno,
            'icno' => $user->icno,
            'department' => new DepartmentResource($user->userDepartment),
            'department_id' => $user->department_id,
            'phone' => $user->phone,
            'avatar' => $user->getAvatar(),
            'gravatar' => $user->getGravatar(),
            'role' => new UserRoleResource($user->userRole),
            'role_id' => $user->role_id,
            'status' => (bool) $user->status,
            'created_at' => $user->created_at->toISOString(),
            'updated_at' => $user->updated_at->toISOString()
        ];
    }
}
