    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Articles</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th></th>
                                </tr>
                                {foreach from=$events item=event}
                                    <tr>
                                        <td>{$event['id']}</td>
                                        <td>{$event['title']}</td>
                                        <td>{$event['start']}</td>
                                        <td>{$event['end']}</td>
                                        <td><button class="btn-block btn-primary">Edit</button><button class="btn-block btn-danger">Delete</button></td>
                                    </tr>
                                {/foreach}
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->