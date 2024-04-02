    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add and view Code type </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">
                                <a href="<?= base_url('Dashboard') ?>">Home </a>
                            </li>
                            <i class="bi bi-chevron-right"></i>
                            <li class="breadcrumb-item active">
                                Add and view Code type
                            </li>
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
                            <form action="<?= base_url('Code_types/create') ?>" method="post">
                                <div class="form-group col-md-12">
                                    <label for="code_type_cd">Code type<span class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control" id="code_type_cd"
                                        name="code_type_cd" placeholder="Enter role name" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="code_type_desc">Code type description<span
                                            class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control" id="code_type_desc"
                                        name="code_type_desc" placeholder="Enter role name" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="code_type_desc_val">Code type description value<span
                                            class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control" id="code_type_desc_val"
                                        name="code_type_desc_val" placeholder="Enter role name" />
                                </div>
                                <!-- <div class="form-group col-md-12">
                                    <label for="parent_code_type_id">Parent_code_type_id<span
                                            class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control" id="parent_code_type_id"
                                        name="parent_code_type_id" placeholder="Enter role name" />
                                </div> -->
                                <div class=" col-5 form-group text-right m-b-0 float-center">
                                    <button class="btn badge-primary w-100" type="submit">
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
                                    <b> </b>
                                </h4>
                                <div class="d-flex">
                                    <div class="col-sm-12 col-md-6 p-3">
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button">
                                                <span>Copy</span>
                                            </button>
                                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button">
                                                <span>CSV</span>
                                            </button>
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button">
                                                <span>Excel</span>
                                            </button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                aria-controls="example1" type="button">
                                                <span>PDF</span>
                                            </button>
                                            <button class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="example1" type="button">
                                                <span>Print</span>
                                            </button>
                                        </div>
                                    </div>
                                    <label class="pl-5">search :
                                        <div class="form-inline">
                                            <input class="form-control form-control-sm" type="search" placeholder
                                                aria-contral="example1" />
                                        </div>
                                    </label>
                                </div>
                                <div class="overflow"></div>
                                <div class="p-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">SI.NO</th>
                                                <th scope="col">Code type </th>
                                                <th scope="col">Code type description</th>
                                                <th scope="col">Code type description value</th>
                                                <th scope="col">Parent code type id</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($code_types as $row) { ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['code_type_cd']; ?></td>
                                                <td><?php echo $row['code_type_desc']; ?></td>
                                                <td><?php echo $row['code_type_desc_val']; ?></td>
                                                <td><?php echo $row['parent_code_type_id']; ?></td>
                                                <td style="color: blue">
                                                    <a href="<?php echo base_url('Code_types/edit/' . $row['id']); ?>"><i
                                                            class="bi bi-pencil-square"></i></a> |
                                                    <a
                                                        href="<?php echo base_url('Code_types/delete/' . $row['id']); ?>"><i
                                                            class="bi bi-trash3"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row p-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status"
                                            aria-live="polite">
                                            Showing 1 to 10 of 929 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous">
                                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example1_next">
                                                    <a href="#" aria-controls="example1" data-dt-idx="8" tabindex="0"
                                                        class="page-link">Next</a>
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
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>