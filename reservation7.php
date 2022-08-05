<?php
# an example abstraction

class Reservation 
{   
    private $host = 'Host Class';
    private $guest = 'Guest Class';

    public function cancel() {
        # all thing that involves a deleting of a reservation
        $this->sendCancellationNotification();
        $this->refund();
    }

    private function sendCancellationNotification() {
        echo 'Send notification to '. $this->host. '<br>';
    }
    private function refund() {
        echo 'Refunding '. $this->guest. '<br>';
    }
}
?>