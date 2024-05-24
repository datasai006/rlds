        <?php $this->load->view('includes/header') ?>
        <?php $this->load->view('includes/sidebar') ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Roles Assignment</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">DQI</li>
                                <i class="bi bi-chevron-right"></i>
                                <li class="breadcrumb-item active">Roles Assignment</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!----------------------------- small device ------------->
            <section class="d-md-none">
                <div class="row p-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('roles/rolesass/submit_data'); ?>">
                                    <div class="form-group col-md-12">
                                        <label for="entity_id ">User Id<span class="text-danger">*</span></label>
                                        <select id="entity_id " name="entity_id " required class="form-control">
                                            <option>--Select--</option>
                                            <?php foreach ($users as $employee) { ?>
                                            <option value="<?php echo $employee['id']; ?>">
                                                <?php echo $employee['employee_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="role_id ">Roles Id<span class="text-danger">*</span></label>
                                        <select id="role_id " name="role_id " required class="form-control">
                                            <option>--Select--</option>
                                            <?php foreach ($roles as $role): ?>
                                            <option value="<?php echo $role['id']; ?>"><?php echo $role['role']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>



                                    <div class="form-group text-right m-b-0">
                                        <button class="btn badge-primary" type="submit">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-light" style="border: 1px solid">
                                            Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <?php foreach ($tables as $table): ?>
                                <div class="form-group col-md-12">
                                    <h5 class="" style="margin-left: -15px"><?php echo $table; ?>:</h5>
                                    <div class="row">
                                        <h6 style="margin-left: 10px">View</h6>
                                        <h6 style="margin-left: 15px">Edit</h6>
                                        <h6 style="margin-left: 15px">Delete</h6>
                                        <h6 style="margin-left: 15px">Approve</h6>
                                    </div>
                                    <span>
                                        <input type="checkbox" class="checkbox" style="margin-left: 10px" />
                                        <input type="checkbox" class="checkbox" style="margin-left: 35px" />
                                        <input type="checkbox" class="checkbox" style="margin-left: 45px" />
                                        <input type="checkbox" class="checkbox" style="margin-left: 50px" />
                                    </span>
                                </div>
                                <?php endforeach; ?>
                                <div class="form-group text-left m-b-0">
                                    <button class="btn badge-success" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!----------------------------- large device -------------->
            <section class=" d-md-block d-none">
                <div class="row p-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('roles/Rolesass/submit_data'); ?>">
                                    <div class="form-group col-md-12">
                                        <label for="user_id ">User Id<span class="text-danger">*</span></label>
                                        <select id="user_id" name="user_id" required class="form-control">
                                            <option>--Select--</option>
                                            <?php foreach ($users as $user): ?>
                                            <option value="<?php echo $user['id']; ?>">
                                                <?php echo $user['username']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="role_id ">Roles Id<span class="text-danger">*</span></label>
                                        <select id="role_id" name="role_id" required class="form-control">
                                            <option>--Select--</option>
                                            <?php foreach ($roles as $role): ?>
                                            <option value="<?php echo $role['id']; ?>"><?php echo $role['role']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group col-md-12 border">
                                        <label for="menu_id">Select Menu(s):</label><br>
                                        <?php foreach ($menuscheck as $menu): ?>
                                        <div class="form-check">
                                            <input name="menu_id[]" class="form-check-input menu-checkbox"
                                                type="checkbox" value="<?php echo $menu['id']; ?>"
                                                id="menu_<?php echo $menu['id']; ?>">
                                            <label class="form-check-label" for="menu_<?php echo $menu['id']; ?>">
                                                <?php echo $menu['name']; ?>
                                            </label>
                                        </div>
                                        <?php endforeach; ?>
                                    </div> -->

                                    <input type="hidden" name="menu_id" id="menu_id" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <h5 class="" style="margin-left: 150px">Add</h5>
                                        <h5 class="" style="margin-left: 110px">View</h5>
                                        <h5 class="" style="margin-left: 90px">Edit</h5>
                                        <h5 class="" style="margin-left: 90px">Delete</h5>
                                        <h5 class="" style="margin-left: 110px">Approve</h5>
                                        <!-- Added Approve heading -->
                                    </div>
                                    <?php foreach ($tables as $table): ?>
                                    <div class="row mt-4">
                                        <h6 style="width: 120px"><?php echo $table['name']; ?></h6>
                                        <!-- Checkboxes for Add, View, Edit, Delete, and Approve -->
                                        <span>
                                            <input type="checkbox" name="can_add_<?php echo $table['id']; ?>"
                                                class="checkbox" style="margin-left: 50px" />
                                        </span>
                                        <span>
                                            <input type="checkbox" name="can_view_<?php echo $table['id']; ?>"
                                                class="checkbox" style="margin-left: 130px" />
                                        </span>
                                        <span>
                                            <input type="checkbox" name="can_edit_<?php echo $table['id']; ?>"
                                                class="checkbox" style="margin-left: 130px" />
                                        </span>
                                        <span>
                                            <input type="checkbox" name="can_delete_<?php echo $table['id']; ?>"
                                                class="checkbox" style="margin-left: 130px" />
                                        </span>
                                        <span>
                                            <input type="checkbox" name="can_approve_<?php echo $table['id']; ?>"
                                                class="checkbox" style="margin-left: 130px" />
                                        </span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="form-group text-left m-b-0">
                                    <button class="btn badge-success" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    </form>
            </section>
        </div>
        <?php $this->load->view('includes/footer') ?>