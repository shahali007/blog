<?php include_once "header.php"; ?>
    <div class="main">
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <div class="about">
                        <h3 class="heading">About </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur cupiditate dicta dolor dolorum esse ex nesciunt quas quia quidem, sequi temporibus vel. Accusamus asperiores consequuntur in mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consecexpedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur cupiditate dicta dolor dolorum esse ex nesciunt quas quia quidem, sequi temporibus vel. Accusamus asperiores consequuntur in mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur cupiditate dicta dolor dolorum esse ex nesciunt quas quia quidem, sequi temporibus vel. Accusamus asperiores consequuntur in mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur cupiditate dicta dolor dolorum esse ex nesciunt quas quia quidem, sequi temporibus vel. Accusamus asperiores consequuntur in mollitia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque, cupiditate ea et, ex expedita hic id molestiae mollitia neque, nisi non perferendis provident sit tempore tenetur voluptas voluptatem. Alias autem consectetur cupiditate dicta dolor dolorum esse ex nesciunt quas quia quidem, sequi temporibus vel. Accusamus asperiores consequuntur in mollitia!
                        </p>
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