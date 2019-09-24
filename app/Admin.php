<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = "admin";
    protected $table = "ngiclix_admin";
    protected $primaryKey = "admin_id";
    
    public function getAuthPassword() {
        return $this->admin_password;
    }
}
