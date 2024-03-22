    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Income Tax Verification</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home / Income Tax Verification </a>
                            </li>
                            <li class="breadcrumb-item">New</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add Income Tax Verification</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-----------------------------------small devices code start here---------------------------------------------------->
                        <div class="d-md-none section quickForm" id="section1">
                            <form>
                                <div class="form-group">
                                    <label>Application Name</label>
                                    <input type="text" class="form-control"
                                        value="<?php echo $income_data->application_name; ?>" name="application-name"
                                        placeholder="Application Name">
                                </div>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </form>
                        </div>
                        <div class="d-md-none section" id="section2" style="display: none;">
                            <form action="">
                                <div class="form-group">
                                    <label>Los no:</label>
                                    <input type="number" class="form-control" name="los-no" placeholder="21356978">
                                </div>

                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </form>
                        </div>
                        <div class="d-md-none section" id="section3" style="display: none;">

                            <div class="form-group">
                                <label>Branch Name</label>
                                <input type="text" class="form-control" name="branch-name"
                                    placeholder="Hyderbad branch">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section4" style="display: none;">

                            <div class="form-group">
                                <label>Type of income</label>
                                <input type="text" class="form-control" name="income-type"
                                    placeholder="Business Income">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section5" style="display: none;">

                            <div class="form-group">
                                <label>Yearly income</label>
                                <input type="text" class="form-control" name="yearly-income" placeholder="6,63,100">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section6" style="display: none;">

                            <div class="form-group">
                                <label>Assessment Year</label>
                                <input type="text" class="form-control" name="Assessment-Year" placeholder="2023-2024">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section7" style="display: none;">

                            <div class="form-group">
                                <label>Type of Verifing the income proof</label>
                                <input type="text" class="form-control" name="verifing-income-proof"
                                    placeholder="Income tax office">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section8" style="display: none;">
                            <div class="form-group">
                                <label>PAN No</label>
                                <input type="text" class="form-control" name="pan-no" placeholder="ABCD123456C">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section9" style="display: none;">
                            <div class="form-group">
                                <label>Proof Submited</label>
                                <select class="form-control select2 w-100" name="proof-submitted" style="width: 100%">
                                    <option selected="">-------select-------</option>
                                    <option name="Yes">YES</option>
                                    <option name="no">NO</option>
                                </select>
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>
                        <div class="d-md-none section" id="section10" style="display: none;">
                            <div class="form-group">
                                <label>e- Filing Acknowledement Number</label>
                                <input type="text" class="form-control" name="acknowledement-number"
                                    placeholder="214633751290823">
                            </div>
                            <button class="btn btn-primary mt-3 backBtn">Back</button>
                            <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                        </div>

                        <!-----------------------------------small devices code end  here---------------------------------------------------->
                        <Form role="form" enctype="multipart/form-data" name="myForm"
                            action="<?php echo base_url('verification/Income/update_income/'.$income_data->id )?>"
                            method="post">
                            <div class="row">


                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Application Name</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->application_name; ?>"
                                            name="application-name" placeholder="Application Name" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Los no:</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->los_no; ?>" name="los-no"
                                            placeholder="21356978" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Branch Name</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->branch_name; ?>" name="branch-name"
                                            placeholder="hyderbad branch" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Type of income</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->income_type; ?>" name="income-type"
                                            placeholder="Business Income" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Yearly income</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->yearly_income; ?>" name="yearly-income"
                                            placeholder="6,63,100" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Assessment Year</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->assessment_year; ?>" name="Assessment_Year"
                                            placeholder="2023-2024" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Type of Verifing the income proof</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->verifying_income_proof; ?>"
                                            name="verifing-income-proof" placeholder="Income tax office"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>PAN No</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->pan_no; ?>" name="pan-no"
                                            placeholder="ABWFA1145M" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Proof Submited</label>
                                        <select class="form-control select2" name="proof-submitted" style="width: 100%">
                                            <?php foreach ($proof_options as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($option == $income_data->proof_submitted) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>e- Filing Acknowledement Number</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->acknowledgement_number; ?>"
                                            name="acknowledement-number" placeholder="214633751290823"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Date of Submission</label>
                                        <input type="date" class="form-control"
                                            value="<?php echo $income_data->Submission_date; ?>" name="Submission-date"
                                            placeholder="214633751290823" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Gross income in Rupees</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->gross_income; ?>" name="gross-income"
                                            placeholder="6,63,100" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Verified Auditor Name</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->auditor_name; ?>" name="auditor-name"
                                            placeholder="RLDS PVT LTD" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Verified in Income Tax Office</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->office_address; ?>" name="office_address"
                                            placeholder="KURNOOL" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>

                                <div class="row w-25">
                                    <div class="col-md-6 d-md-block d-none">
                                        <div class="form-group">
                                            <label>Status Type</label>
                                            <select class="form-control select2" name="status-type" style="width: 100%">
                                                <option selected>--select--</option>
                                                <?php foreach ($status_types as $value => $label): ?>
                                                <option value="<?php echo $value; ?>"
                                                    <?php echo ($value == $income_data->status_type) ? 'selected' : ''; ?>>
                                                    <?php echo $label; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-md-block d-none">
                                        <div class="form-group">
                                            <label>ITR</label>
                                            <select class="form-control select2" name="itr" style="width: 100%">
                                                <option selected>--select--</option>
                                                <?php foreach ($itr_types as $value => $label): ?>
                                                <option value="<?php echo $value; ?>"
                                                    <?php echo ($value == $income_data->itr) ? 'selected' : ''; ?>>
                                                    <?php echo $label; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>FIELD EXECUTIVE NAME</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->executive_name; ?>" name="executive-name"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Signature</label>
                                        <input type="file" class="form-control" name="signature" id="signature"
                                            style="width: 100% ">
                                        <input type="hidden" name="current_signature">
                                        <!-- value="<?php echo $current_signature; ?>" -->
                                        <!-- <span>Current Signature: <?php echo $current_signature; ?></span> -->
                                    </div>
                                </div>
                                <div class=" col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Stamp</label>
                                        <input type="file" class="form-control" name="stamp" id="stamp"
                                            style="width: 100% ">
                                        <input type="hidden" name="current_stamp">
                                        <!-- value="<?php echo $current_stamp; ?>" -->
                                        <!-- <span>Current Stamp: <?php echo $current_stamp; ?></span> -->
                                    </div>
                                </div>

                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>System Case ID</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->system_case_id; ?>" name="system-case-id"
                                            placeholder="279/29-09-2023" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Applicant Name</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->applicant_name; ?>" name="applicant-name"
                                            placeholder="AIDNI ENGINEERS" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Ref.Number</label>
                                        <input type="text" class="form-control"
                                            value="<?php echo $income_data->ref_number; ?>" name="ref-number"
                                            placeholder="97/29-09-2023" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary  d-md-block d-none">Update</button>
                                </div>
                            </div>
                        </Form>

                        <!-- /.row -->
                    </div>
                </div>




                <?php $this->load->view('includes/footer') ?>