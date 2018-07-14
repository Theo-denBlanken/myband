<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{$pagename}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="admin.php?page=posts&data=setArticle" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="articleTitle">Aricle Title</label>
                                <input type="hidden" name="articleId" value="{$article['articleId']}">
                                <input type="text" class="form-control" id="articleTitle" name="articleTitle"
                                       value="{$article['title']}">
                            </div>
                            <div class="form-group">
                                <label for="articleAuthor">Aricle Author</label>
                                <input type="text" class="form-control" id="articleAuthor" name="articleAuthor"
                                       value="{$article['author']}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="articlePublishdate">Aricle Publishdate</label>
                                <input type="text" class="form-control" id="articlePublishdate" name="articlePublishdate"
                                       value="{$article['date']}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="articleContent">Article Content</label>
                                <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here" id="articleContent" name="articleContent"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{$article['content']}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


{*<div class="form-group">*}
{*<label for="exampleInputFile">File input</label>*}
{*<div class="input-group">*}
{*<div class="custom-file">*}
{*<input type="file" class="custom-file-input" id="exampleInputFile">*}
{*<label class="custom-file-label" for="exampleInputFile">Choose file</label>*}
{*</div>*}
{*<div class="input-group-append">*}
{*<span class="input-group-text" id="">Upload</span>*}
{*</div>*}
{*</div>*}
{*</div>*}