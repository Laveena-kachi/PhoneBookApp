<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
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
    
    public function isClient(User $user)
    {

      /*if($user->hasrole('client'))
      {
        return true;
      }
      */
      if($user->email == 'ashwini@gmail.com')
      {
        return true;
      }
    
    }
}
