<?php include_once "header.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Insert New Post</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                        <li><a class="#"><i class="fa fa-close"></i></a>
                        </li>
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="post" id="demo-form" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="form-group">
                                            <label for="post_name">Post Name * </label> <span id="chars_box" class="pull-right"><span id="chars">10</span> characters remaining</span>
                                            <input type="text" id="post_name" autofocus maxlength="10" class="form-control" name="post_name" required="required"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="post_brief">Post Brief</label>
                                            <textarea id="post_brief" class="form-control" name="post_brief" rows="4"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="post_details">Post Details</label>
                                            <textarea id="post_details" class="form-control" name="post_details" rows="12"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="form-group">
                                            <label for="author_name">Author/Writer Name </label>
                                            <input type="text" id="author_name" class="form-control" name="author_name"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Category *</label>
                                            <select id="category" name="cat_id" class="form-control">
                                                <option>-- None --</option>
                                                <option value=""> International </option>
                                                <option value=""> Technology </option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="sub_cat_id">Sub Category</label>
                                            <select id="sub_cat_id" name="sub_cat_id" class="form-control">
                                                <option>-- None --</option>
                                                <option value=""> Cricket </option>
                                                <option value=""> Football </option>
                                            </select>
                                        </div>

                                        <!--<div class="form-group">
                                            <label for="writer">Writer</label>
                                            <input type="text" id="writer" class="form-control" name="writer" required="required"/>
                                        </div>-->

                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control" name="image"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="video_type">Video</label>
                                            <select id="video_type" name="video_type" class="form-control">
                                                <option value="none">-- None --</option>
                                                <option value=""> Youtube </option>
                                                <option value=""> Facebook </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="video_embed_code">Embed Code</label>
                                            <input type="text" id="video_embed_code" disabled class="form-control" name="video_embed_code" placeholder="Place here embed code."/>
                                        </div>

                                        <div class="control-group">
                                            <label for="tags_1">Input Tags </label>
                                            <input id="tags_1" type="text" class="tags form-control" value="" />
                                            <small class="text-muted">use comma(,) after a tag.</small>
                                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                        </div>
                                        <hr>

                                        <div class="form-group">
                                            <label>Status :</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" checked name="iCheck"> Active
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck"> Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save-news" class="btn btn-success btn-block btn-lg">Insert</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include_once "footer.php"; ?>
<script src="<?php echo $sUrl;?>plugins/tinymce/js/tinymce/tinymce.min.js?apiKey=pr3vh6lf7zh3pmnvwpyzf2sdl591p7rfwyfnyjwce95xsck3"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#post_details',  // change this value according to your HTML
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ]
    });
</script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#video_embed_code').attr('disabled','disabled');
        $('#video_type').on('change',function(){
            var optionValue = $(this).val();
            if(optionValue === "none"){
                $('#video_embed_code').attr('disabled','disabled');
            }else{
                $('#video_embed_code').removeAttr('disabled');
            }
        });
    });
</script>
<script>
    wordCount(10, "#post_name", "#chars", "#chars_box", "btn btn-xs bg-red");
    function wordCount(maxLength, inputId, blockId, counterBlock, Class){
        var maxLength = maxLength;
        $(inputId).keyup(function() {
            var length = $(this).val().length;
            var length = maxLength-length;
            $(blockId).text(length);
            if(length === 0){$(counterBlock).addClass(Class);}
            else{$(counterBlock).removeClass(Class);}
        });
        return true;
    }
</script>