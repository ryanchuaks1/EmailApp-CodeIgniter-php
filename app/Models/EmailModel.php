<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model {
    protected $table = 'email';
    protected $allowedFields = ['sender_email', 'receiver_email', 'message'];
}
