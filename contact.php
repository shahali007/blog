<?php
    include_once "header.php";
    if ($_SERVER['REQUEST_METHOD'] && isset($_POST['msg_submit'])){
       $msgSend = $blogInfo->msgSent($_POST);

        foreach($msgSend as $key => $error){
            $sss = $error;
        }
        if($key == 'err_first_name'){echo $sss;}

        //echo $sss[0];
        //print_r($sss);
        die();
    }
    $Send = Session::get("MsgSubmit");



?>
    <div class="main">
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="about">
                        <h3 class="heading">Stay connect with us</h3>
                        <?php if($Send != NULL){
                            echo $Send;
                        } Session::set("MsgSubmit", NULL) ?>
                        <hr>
                        <?php if(isset($msgSend)){?>
                            <div class="text-center">
                                <?php
                                foreach($msgSend as $error){?>
                                    <div class="alert alert-danger alert-dismissable" style="background: red;color: #fff;border: 1px solid red;padding: 5px 30px 5px 5px ;margin-bottom: 5px;">
                                        <button type="button" class="close" style="color:#000;" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $error."<br/>";?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <hr>
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3" for="first_name">Your First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name" id="first_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="last_name">Your Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name" id="last_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="email_address">Your Email Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email_address" id="email_address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="message">Your Message</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button type="submit" name="msg_submit" class="btn btn-info">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once "sidebar.php"?>
        </div>
    </div>
<?php include_once "footer.php"; ?>