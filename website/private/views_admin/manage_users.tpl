<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registered Users</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

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
                                <th class="manageusersid">ID</th>
                                <th class="manageusersprofilepicture">Picture</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th></th>
                                {*<th></th>*}
                            </tr>
                            {foreach from=$users item=user}
                                <tr>
                                    <td>{$user['userId']}</td>
                                    <td><img src="{$user['userProfilePicture']}" class="manageusersprofilepicture"></td>
                                    <td>{$user['userName']}</td>
                                    <td>{$user['userEmail']}</td>
                                    <td>
                                        <button class="btn-block btn-primary">Edit</button>
                                    </td>
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