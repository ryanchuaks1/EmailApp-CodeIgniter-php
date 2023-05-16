<?php

namespace App\Controllers;

class EmailController extends BaseController
{
    public function send()
    {
        // Get the form input data
        $senderEmail = $this->request->getPost('sender_email');
        $receiverEmail = $this->request->getPost('receiver_email');
        $message = $this->request->getPost('message');

        $model = model(EmailModel::class);

        // Insert the data into the database
        $model->save([
            'sender_email' => $senderEmail,
            'receiver_email' => $receiverEmail,
            'message' => $message,
        ]);

        // Redirect back to the form
        return redirect()->to('/');
    }

    public function index() {

    }
}
