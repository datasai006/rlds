<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Employee</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit Employee</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data" id="editForm" name="editForm"
                            action="<?php echo base_url()?>Menu/update/<?php echo $menu['id']; ?>" method="post">
                            <div class="card-body row">
                                <div class="form-group col-md-4">
                                    <label for="menu_level">Menu Level</label>
                                    <input type="text" name="menu_level" class="form-control" id="menu_level"
                                        placeholder="1" value="<?php echo $menu['menu_level']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="menu_id">Menu Id</label>
                                    <input type="text" name="menu_id" class="form-control" id="menu_id"
                                        placeholder="rach" value="<?php echo $menu['menu_id']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="menu name" value="<?php echo $menu['name']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="menu_icon">Menu Icon</label>
                                    <input type="varchar" name="menu_icon" class="form-control" id="menu_icon"
                                        placeholder="fa fa icons" value="<?php echo $menu['menu_icon']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="menu_link">Menu Link</label>
                                    <input type="link" name="menu_link" class="form-control" id="menu_link"
                                        placeholder="/Dashboard" value="<?php echo $menu['menu_link']; ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="parent_id">Parent Id </label>
                                    <input type="text" name="parent_id" class="form-control" id="parent_id"
                                        placeholder="X" value="<?php echo $menu['parent_id']; ?>" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <input type="hidden" name="id" value="<?php echo $menu['id']; ?>">
                            <!-- Include a hidden input field for the menu ID -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php $this->load->view('includes/footer') ?>