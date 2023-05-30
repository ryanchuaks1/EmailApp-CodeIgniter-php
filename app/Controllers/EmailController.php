<?php

namespace App\Controllers;

use App\Models\EmailModel;

class EmailController extends BaseController
{
    public function send()
    {
        // Get the form input data
        $senderEmail = $this->request->getPost('sender_email');
        $receiverEmail = $this->request->getPost('receiver_email');
        $message = $this->request->getPost('message');

        $model = new EmailModel();

        // Insert the data into the database
        $model->save([
            'sender_email' => $senderEmail,
            'receiver_email' => $receiverEmail,
            'message' => $message,
        ]);

        // Redirect back to the form
        return redirect()->to('/');
    }

    public function index()
    {
        $model = new EmailModel();
        $data['email'] = $model->findAll();

        return view('email/index', $data);
    }

public function update($id)
{
    $model = new EmailModel();
    $data['email'] = $model->find($id);
    $data['editId'] = $id;

    // Handle the update logic here
    if ($this->request->getMethod() === 'post') {
        $senderEmail = $this->request->getPost('sender_email');
        $receiverEmail = $this->request->getPost('receiver_email');
        $message = $this->request->getPost('message');

        $model->update($id, [
            'sender_email' => $senderEmail,
            'receiver_email' => $receiverEmail,
            'message' => $message,
        ]);

        // Redirect back to the email list
        return redirect()->to('/inbox');
    }
    return view('email_update', $data); // Update the view file reference
}

    

    public function delete($id)
    {
        $model = new EmailModel();
    
        // Handle the delete logic here
        $model->delete($id);
    
        // Redirect back to the email list
        return redirect()->to('/inbox');
    }
    
}