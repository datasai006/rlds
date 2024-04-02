    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>view Residence Verification</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('Dashboard') ?>">Home / HRMS / Residence Verification</a>
                            </li>
                            <li class="breadcrumb-item active">View</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section>
            <div class="card">
                <h5 class="p-3">Residence Verification</h5>
                <hr />
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
                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1"
                                type="button">
                                <span>Print</span>
                            </button>
                            <div class="btn-group">
                                <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
                                    tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span>Column visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <label class="pl-5">search :
                        <div class="form-inline ">
                            <input class="form-control form-control-sm" type="search" placeholder
                                aria-contral="example1" />
                        </div>
                    </label>
                </div>
            </div>
            <div class="overflow"></div>
            <div class="p-3">
                <div class="p-3">
                    <?php if (empty($residence_data)): ?>
                    <div class="alert ">
                        <h3> No Residence data available.</h3>
                    </div>
                    <?php else: ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SI.NO</th>
                                <th scope="col">Branch Name</th>
                                <th scope="col">Los no</th>
                                <th scope="col">Reference no</th>
                                <th scope="col">Type of Loan</th>
                                <th scope="col">Mobile no</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($residence_data as $row): ?>
                            <tr>
                                <td><?= $row->id  ?></td>
                                <td><?= $row->branch_name ?></td>
                                <td><?= $row->los_no ?></td>
                                <td><?= $row->reference_no ?></td>
                                <td><?= $row->typeofloan ?></td>
                                <td><?= $row->mobile_no ?></td>
                                <td style="color: blue">
                                    <a
                                        href="<?php echo base_url('verification/Residence/edit_residence/' . $row->id); ?>"><i
                                            class=" bi bi-pencil-square"></i></a> |
                                    <a
                                        href="<?php echo base_url('verification/Residence/delete_residence/' . $row->id); ?>">
                                        <i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="row p-3">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10
                            of
                            929 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous">
                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                                        class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                                        class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item ">
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
            <?php $this->load->view('includes/footer') ?>