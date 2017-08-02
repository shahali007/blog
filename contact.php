<?php include_once "header.php"; ?>
    <div class="main">
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="about">
                        <h3 class="heading">Stay connect with us</h3>
                        <form action="" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3" for="first_name">Your First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first_name" id="first_name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="last_name">Your Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last_name" id="last_name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="email_address">Your Email Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email_address" id="email_address" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3" for="message">Your Message</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button type="submit" class="btn btn-info">Send</button>
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