<?php
class PHP_Mail_Form {

    public $to = 'admin@fadhel.app';
    public $from_name;
    public $from_email;
    public $subject ;
    public $message ;

    // Methods
    function send() {
        $headers  = "From: $this->from_email\r\n";
        $headers .= "Reply-To: $this->email\r\n";
        mail($this->to,$this->subject,$this->message,$headers);
        return json_encode(['result'=>'success','msg'=>'OK']);
    }
  }
  