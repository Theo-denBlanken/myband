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
                    <form action="admin.php?page=langsettings&data=setLanguage" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="siteTitle">Site Title</label>
                                <input type="text" class="form-control" id="siteTitle" name="siteTitle" value="{$language['site_title']}">
                            </div>
                            <div class="form-group">
                                <label for="siteDescription">Site Description</label>
                                <input type="text" class="form-control" id="siteDescription" name="siteDescription" value="{$language['site_description']}">
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