<?php

class helperClass{

    # custom date format
    public function formatDate($date){
        return date("j M Y, g:i a", strtotime($date));
    }

    # text shortener
    public function textShortener($data, $limit = 200){
        $data = $data. " ";
        $data = substr($data, 0, $limit);
        $data = $data."...";
        return $data;
    }

    # data validation check
    public function validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
?>