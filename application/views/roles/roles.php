    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Roles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">DQI</li>
                            <i class="bi bi-chevron-right"></i>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row p-3">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('roles/Roles/submit_permissions'); ?>">
                                <div class="form-group col-md-12">
                                    <label for="role_for">Role For<span class="text-danger">*</span></label>
                                    <select id="role_for" name="role_for" required class="form-control">
                                        <option>--Select--</option>
                                        <?php foreach ($roles as $user): ?>
                                        <option value="<?php echo $user['role']; ?>"><?php echo $user['role']; ?>
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

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group col-md-8">
                                <span><input type="checkbox" class="checkbox" name="audit_status" /> Audit
                                    Status</span>
                            </div>
                            <div class="form-group col-md-8">
                                <span><input type="checkbox" class="checkbox" name="user_management" /> User
                                    Management
                                </span>
                            </div>
                            <div class="form-group col-md-8">
                                <span><input type="checkbox" class="checkbox" name="dealer_management" /> Dealer
                                    Management
                                </span>
                            </div>
                            <div class="form-group col-md-8">
                                <span><input type="checkbox" class="checkbox" name="settings" /> Settings
                                </span>
                            </div>
                            <div class="form-group col-md-8">
                                <span><input type="checkbox" class="checkbox" name="qn_mgmt" /> Qn . Mgmt.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>