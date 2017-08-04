<?php
include_once "header.php";
$error = $keyword = $message = "";
if (!empty($_GET['yoyo_search'])) {
    $keyword = $_GET['yoyo_search'];
    $searchQuery = $blogInfo->allpostWithCat($keyword);

    //echo "<pre>";
    //var_dump($searchQuery);
    //die();
}
if (empty($_GET['yoyo_search'])) {
    echo "<script>alert('A তে আবাল, B তে বেক্কল, C তে ছেচ্ছর ! আপনি যদি এর কোনোটা হতে না চান তাহলে সার্চে কোনো কিছু লিখে সার্চ করুন !')</script>";
    $message = "ধন্যবাদ।  আবার আসবেন ";
    $blogInfo->abalerSonkharUpdate();
    $abalerSonkhaNirnoy = $blogInfo->abalerSonkharNirnoy();
}

?>

    <div class="main">
        <h3 class="search_heading">
            <span>Search Result :
            <?php
                if (isset($searchQuery)) {
                    echo count($searchQuery);
                } else {
                    echo '</span><strong>';
                    echo $abalerSonkhaNirnoy->abaler_sonkha.' জন';
                    echo '</strong>';
                }
            ?>
            </span>
            <strong>
                <?php
                    echo $keyword;
                ?>
            </strong>
        </h3>
        <div class="row">
            <div class="col-sm-8" style="padding-right:0;">
                <div class="border">
                    <?php
                    if (isset($searchQuery)) {
                        if (count($searchQuery) < 1) {
                            echo "Not found any data by this keyword!";
                        }
                        ?>
                        <div class="article-list">
                            <?php foreach ($searchQuery as $searchQueries) { ?>
                                <article class="media">
                                    <div class="media-left">
                                        <div class="img-box">
                                            <img class="media-object"
                                                 src="<?php echo $sUrl; ?>images/<?php echo $searchQueries['post_image']; ?>"
                                                 alt="Shahali007">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $searchQueries['post_name']; ?></h4>
                                        <p><?php echo $helperClass->textShortener($searchQueries['post_brief'], 100); ?></p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="<?php echo $sUrl; ?>details.php?pid=<?php echo $searchQueries['id']; ?>"
                                                   class="btn btn-sm btn-info"><i class="fa fa-forward"></i> Read
                                                    More</a>
                                            </div>
                                            <div class="col-sm-8 text-right">
                                                <small class="text-muted time">&nbsp;
                                                    <a href="<?php echo $sUrl; ?>category.php?catpage=<?php echo $searchQueries['cat_slug']; ?>">
                                                        <?php echo $searchQueries['cat_name']; ?>
                                                    </a>,
                                                    <i class="fa fa-calendar"></i> <?php echo $helperClass->formatDate($searchQueries['created_at']); ?>
                                                    ,
                                                    <em><?php echo $searchQueries['author']; ?></em>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    <?php } else {
                        echo "<h1>$message</h1>";
                    }
                    ?>
                </div>
            </div>
            <?php include_once "sidebar.php" ?>
        </div>
    </div>
<?php include_once "footer.php"; ?>