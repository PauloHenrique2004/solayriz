<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Mailer\Email;



class ContactsController extends AppController
{
    public function contato(){
        $this->viewBuilder()->setLayout('site');

        if ($this->request->is('post')){
            $formData = $this->request->getData();

            $email = new Email('default');
            $email->setFrom(['contato2@solayriz.com.br' => 'Contato Solayriz'])
                ->setTo('contato@solayriz.com.br')
                ->setSubject('Contato Solayriz')
                ->send(' Nome: ' . $formData['name']
                    . "\n". ' Email: ' . $formData['email']
                    . "\n". ' Telefone: ' . $formData['tel']
                    . "\n". ' Mensagem: ' . $formData['message']);
        }

//        header('Location: /'); exit();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['contato']);
    }



}
