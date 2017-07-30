<?php
class helperClass{

    # custom date format
    public function formatDate($date){
        return date("M j, Y, g:i a", strtotime($date));
    }
}
?>