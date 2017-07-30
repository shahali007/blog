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
            <div class="col-sm-4">
                <div class="border">
                    <h3 class="heading">Categories</h3>
                    <ul class="category-list">
                        <li><a href="#">Cras justo odio</a></li>
                        <li><a href="#">Dapibus ac facilisis in</a></li>
                        <li><a href="#">Morbi leo risus</a></li>
                        <li><a href="#">Porta ac consectetur ac</a></li>
                        <li><a href="#">Vestibulum at eros</a></li>
                    </ul>
                </div>
                <div class="border" style="margin-top:30px;">
                    <h3 class="heading">Latest Articles</h3>
                    <div class="latest-list">
                        <?php for($i=0; $i<5; $i++){ ?>
                            <article class="media">
                                <div class="media-left">
                                    <div class="img-box">
                                        <img class="media-object" src="https://www.jagonews24.com/media/imgAll/2017July//gas-3-20170727090918.jpg" alt="Shahali007">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="#">PHP Fundamentals Tutorial (Bangla)</a>
                                    </h4>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "footer.php"; ?>