    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manage User Types</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">DQI</li>
                            <i class="bi bi-chevron-right"></i>
                            <li class="breadcrumb-item active"> User Management</li>
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
                            <Form role="form" enctype="multipart/form-data" name="myForm"
                                action="<?php echo base_url( )?>roles/Rolesmanage/add_role" method="post">
                                <div class="form-group col-md-12">
                                    <label for="role">Role Type<span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" id="role" name="role"
                                        placeholder="Enter role name" />
                                </div>
                                <div class="form-group text-right m-b-0">
                                    <button class="btn badge-primary" type="submit">
                                        Submit
                                    </button>
                                    <!-- <button type="reset" class="btn btn-light" style="border: 1px solid">
                                        Reset
                                    </button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">
                                    <b>
                                    </b>
                                </h4>
                                <div id="datatable-buttons_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 p-2">
                                            <div class="dt-buttons btn-group">
                                                <a class="btn btn-secondary buttons-copy buttons-html5"
                                                    aria-controls="datatable-buttons" href="#">
                                                    <span>Copy</span>
                                                </a>
                                                <a class="btn btn-secondary buttons-excel buttons-html5"
                                                    aria-controls="datatable-buttons" href="#">
                                                    <span>Excel</span>
                                                </a>
                                                <a class="btn btn-secondary buttons-pdf buttons-html5"
                                                    aria-controls="datatable-buttons" href="#">
                                                    <span>PDF</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6" style="padding-left: 150px;">
                                            <div id="datatable-buttons_filter" class="dataTables_filter">
                                                Search:
                                                <label>
                                                    <input type="search" class="form-control form-control-sm"
                                                        placeholder="" aria-controls="datatable-buttons">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dataTable no-footer"
                                                cellspacing="0" width="100%" role="grid"
                                                aria-describedby="datatable-buttons_info" style="width: 100%;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="datatable-buttons" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="UserType: activate to sort column descending"
                                                            style="width: 405.2px;">UserType</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="datatable-buttons" rowspan="1" colspan="1"
                                                            aria-label="Action: activate to sort column ascending"
                                                            style="width: 254px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($user_types as $type): ?>
                                                    <tr role="row">
                                                        <td class="sorting_1"><?php echo $type['role']; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('roles/Rolesmanage/edit_role/' . $type['id']); ?>"
                                                                class="fa fa-edit">
                                                            </a>
                                                            &nbsp;&nbsp;&nbsp;
                                                            <a href="<?php echo base_url('roles/Rolesmanage/delete_role/' . $type['id']); ?>"
                                                                class="fa fa-trash">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="datatable-buttons_info" role="status"
                                                aria-live="polite">Showing 1 to 4 of 4 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7" style="padding-left: 270px;">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="datatable-buttons_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="datatable-buttons_previous">
                                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a>
                                                    </li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="datatable-buttons_next">
                                                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="2"
                                                            tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>