<?php

namespace App\Controllers;

class Email extends BaseController
{
    public function send()
    {
        // Get the form input data
        $senderEmail = $this->request->getPost('sender_email');
        $receiverEmail = $this->request->getPost('receiver_email');
        $message = $this->request->getPost('message');

        // Insert the data into the database
        $db = db_connect();
        $builder = $db->table('emails');
        $builder->insert([
            'sender_email' => $senderEmail,
            'receiver_email' => $receiverEmail,
            'message' => $message,
        ]);

        // Redirect back to the form
        return redirect()->to('/');
    }
}
