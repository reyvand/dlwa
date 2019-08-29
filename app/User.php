<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "ngiclix_users";
    protected $primaryKey = "users_id";
    
    public function getAuthPassword() {
        return $this->users_password;
    }
}
