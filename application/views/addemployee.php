    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar', $menu_items); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active">New</li>
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
                                <h3 class="card-title">Add New <small>Employee</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                action="<?php echo base_url( )?>Employee/Employe/add_employee" method="post">
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name"
                                            placeholder="rach" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name"
                                            placeholder="rach" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                            placeholder="demo@gmail.com" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="XXXXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gendar">Gendar</label>
                                        <select type="text" name="gendar" class="form-control" id="gendar" required>
                                            <option value="">--select--</option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>
                                            <option value="other">other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="country">Country</label>
                                        <select required class="form-control" id="country" name="country">
                                            <option value="">-- Select Code type --</option>
                                            <?php foreach ($code_values as $type): ?>
                                            <option value="<?php echo $type['id']; ?>">
                                                <?php echo $type['code_value_desc']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="state">state</label>
                                        <select name="state" class="form-control" id="state" required>
                                            <option value="">-- Select State --</option>
                                            <?php foreach ($code_values as $state): ?>
                                            <option value="<?php echo $state['id']; ?>">
                                                <?php echo $state['code_value_desc']; ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="mobile_no">Mobile Number</label>
                                        <input type="text" name="mobile_no" class="form-control" id="mobile_no"
                                            placeholder="91XXXXXXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label id="doj">Date Of Joining</label>
                                        <div class="input-group">
                                            <input type="date" name="doj" class="form-control" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="qualification">Qualification</label>
                                        <input type="text" name="qualification" class="form-control" id="qualification"
                                            placeholder="BE/BCA/MCA" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role_id">Role</label>
                                        <select name="role_id" id="role_id" class="form-control">
                                            <option value="">Select Role</option>
                                            <?php foreach ($roles as $role): ?>
                                            <option value="<?php echo $role['id']; ?>"><?php echo $role['role']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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