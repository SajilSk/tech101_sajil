<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function add(User $user)
	{
		if($user->role== "admin"){
			return true;
		}
	}

	public function list(User $user)
	{
		if($user->role== "admin"){
			return true;
		}
	}

	public function store(User $user)
	{
		if($user->role== "admin"){
			return true;
		}
	}

	public function edit(User $user)
	{
		if($user->role== "admin"){
			return true;
		}
	}

	public function update(User $user)
	{
		if($user->role== "admin"){
			return true;
		}
	}

	public function delete(User $user)
	{
		if($user->role == "admin"){
			return true;
		}
	}

	public function exportExcel(User $user)
	{
		if($user->role == "admin"){
			return true;
		}
	}
	public function exportPdf(User $user)
	{
		if($user->role == "admin"){
			return true;
		}
	}
	public function studentPdf(User $user)
	{
		if($user->role == "admin"){
			return true;
		}
	}

    
}
