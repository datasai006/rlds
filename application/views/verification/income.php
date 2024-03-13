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
                        <form class="ajax-form" id="final-form">
                            <input type="hidden" name="id" value="1" />

                            <div class="d-md-none section " id="section1">
                                <div class="form-group">
                                    <label for="application_name">Application Name</label>
                                    <input type="text" class="form-control" id="application_name"
                                        name="application_name" placeholder="Application Name" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section2" style="display: none">
                                <div class="form-group">
                                    <label>Los no:</label>
                                    <input type="number" class="form-control" name="los_no" placeholder="21356978" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section3" style="display: none">
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" name="branch_name" placeholder="21356978" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section4" style="display: none">
                                <div class="form-group">
                                    <label>Type of income</label>
                                    <input type="text" class="form-control" name="income_type"
                                        placeholder="Business Income" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section5" style="display: none">
                                <div class="form-group">
                                    <label>Yearly income</label>
                                    <input type="text" class="form-control" name="yearly_income" placeholder="6,63,100"
                                        style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section6" style="display: none">
                                <div class="form-group">
                                    <label>Assessment Year</label>
                                    <input type="text" class="form-control" name="assessment_year"
                                        placeholder="2023-2024  " style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section7" style="display: none">
                                <div class="form-group">
                                    <label>Type of Verifing the income proof</label>
                                    <input type="text" class="form-control" name="verifying_income_proof"
                                        placeholder="Income tax office" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section8" style="display: none">
                                <div class="form-group">
                                    <label>PAN No</label>
                                    <input type="text" class="form-control" name="pan_no" placeholder="ABWFA1145M"
                                        style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section9" style="display: none">
                                <div class="form-group">
                                    <label>Proof Submited</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select class="form-control select2" name="proof_submitted" style="width: 100%">
                                        <option selected="">--select--</option>
                                        <option name="Yes">YES</option>
                                        <option name="no">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section10" style="display: none">
                                <div class="form-group">
                                    <label>e- Filing Acknowledement Number</label>
                                    <input type="text" class="form-control" name="acknowledgement_number"
                                        placeholder="214633751290823 " style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section11" style="display: none">
                                <div class="form-group">
                                    <label>Date of Submission</label>
                                    <input type="date" class="form-control" name="Submission_date"
                                        placeholder="214633751290823" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section12" style="display: none">
                                <div class="form-group">
                                    <label>Gross income in Rupees</label>
                                    <input type="text" class="form-control" name="gross_income" placeholder="6,63,100"
                                        style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section13" style="display: none">
                                <div class="form-group">
                                    <label>Verified Auditor Name</label>
                                    <input type="text" class="form-control" name="auditor_name"
                                        placeholder="RLDS PVT LTD" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section14" style="display: none">
                                <div class="form-group">
                                    <label>Verified in Income Tax Office</label>
                                    <input type="text" class="form-control" name="office_address" placeholder="KURNOOL"
                                        style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>

                            <div class="d-md-none section" id="section15" style="display: none">
                                <div class="form-group">
                                    <label>status type</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select class="form-control select2" name="status_type" style="width: 100%">
                                        <option selected>--select--</option>
                                        <option name="companies and firms">
                                            companies and firms
                                        </option>
                                        <option name="Form-16">Form-16</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">
                                    Back
                                </button>
                                <button class="btn btn-primary mt-3 nextBtn">
                                    Next
                                </button>
                            </div>

                            <div class="d-md-none section" id="section16" style="display: none">
                                <div class="form-group">
                                    <label>ITR</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select class="form-control select2" name="itr" style="width: 100%">
                                        <option selected>--select--</option>
                                        <option name="ITR-2">ITR-2</option>
                                        <option name="ITR-2A">ITR-2A</option>
                                        <option name="ITR-3">ITR-3</option>
                                        <option name="ITR-4">ITR-4</option>
                                        <option name="ITR-4S">ITR-4S</option>
                                        <option name="ITR-5">ITR-5</option>
                                        <option name="ITR-6">ITR-6</option>
                                        <option name="ITR-7">ITR-7</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section17" style="display: none">
                                <div class="form-group">
                                    <label>FIELD EXECUTIVE NAME</label>
                                    <input type="text" class="form-control" name="executive_name"
                                        placeholder="SHAIK APSER BASHA-9441934111" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section18" style="display: none">
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="file" class="form-control" name="signature" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section19" style="display: none">
                                <div class="form-group">
                                    <label>stamp</label>
                                    <input type="file" class="form-control" name="stamp" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section20" style="display: none">
                                <div class="form-group">
                                    <label>System Case ID</label>
                                    <input type="text" class="form-control" name="system_case_id"
                                        placeholder="279/29-09-2023" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section21" style="display: none">
                                <div class="form-group">
                                    <label>Applicant Name</label>
                                    <input type="text" class="form-control" name="applicant_name"
                                        placeholder="AIDNI ENGINEERS" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn">Next</button>
                            </div>
                            <div class="d-md-none section" id="section22" style="display: none">
                                <div class="form-group">
                                    <label>Ref.Number</label>
                                    <input type="text" class="form-control" name="ref_number"
                                        placeholder="97/29-09-2023" style="width: 100%" />
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-success mt-3 submitBtn">submit</button>
                            </div>

                            <!-- <button type="button" class="btn btn-primary mt-3 d-md-none submitBtn">Submit</button> -->
                        </form>
                        <!-----------------------------------small devices code end  here---------------------------------------------------->
                        <Form role="form" enctype="multipart/form-data" name="myForm"
                            action="<?php echo base_url( )?>verification/Income/add_income" method="post">
                            <div class="row">


                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="application_name">Application Name</label>
                                        <input type="text" class="form-control" id="application_name"
                                            name="application_name" placeholder="Application Name" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Los no:</label>
                                        <input type="text" class="form-control" name="los-no" placeholder="21356978"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Branch Name</label>
                                        <input type="text" class="form-control" name="branch-name"
                                            placeholder="hyderbad branch" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Type of income</label>
                                        <input type="text" class="form-control" name="income-type"
                                            placeholder="Business Income" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Yearly income</label>
                                        <input type="text" class="form-control" name="yearly-income"
                                            placeholder="6,63,100" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Assessment Year</label>
                                        <input type="text" class="form-control" name="Assessment_Year"
                                            placeholder="2023-2024" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Type of Verifing the income proof</label>
                                        <input type="text" class="form-control" name="verifing-income-proof"
                                            placeholder="Income tax office" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>PAN No</label>
                                        <input type="text" class="form-control" name="pan_no" placeholder="ABWFA1145M"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Proof Submited</label>
                                        <select class="form-control select2" name="proof-submitted" style="width: 100%">
                                            <option selected="">--select--</option>
                                            <option name="Yes">YES</option>
                                            <option name="no">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>e- Filing Acknowledement Number</label>
                                        <input type="text" class="form-control" name="acknowledement-number"
                                            placeholder="214633751290823" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Date of Submission</label>
                                        <input type="date" class="form-control" name="Submission-date"
                                            placeholder="214633751290823" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Gross income in Rupees</label>
                                        <input type="text" class="form-control" name="gross-income"
                                            placeholder="6,63,100" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Verified Auditor Name</label>
                                        <input type="text" class="form-control" name="auditor-name"
                                            placeholder="RLDS PVT LTD" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Verified in Income Tax Office</label>
                                        <input type="text" class="form-control" name="office_address"
                                            placeholder="KURNOOL" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="row w-25">
                                    <div class="col-md-6  d-md-block d-none">
                                        <!-- First Dropdown -->
                                        <div class="form-group">
                                            <label>status type</label>
                                            <select class="form-control select2" name="status-type" style="width: 100%">
                                                <option selected>--select--</option>
                                                <option name="companies and firms">companies and firms</option>
                                                <option name="Form-16">Form-16</option>
                                            </select>
                                        </div>

                                        <!-- Second Dropdown -->

                                    </div>
                                    <div class="col-md-6  d-md-block d-none">
                                        <div class="form-group">
                                            <label>ITR</label>
                                            <select class="form-control select2" name="itr" style="width: 100%">
                                                <option selected>--select--</option>
                                                <option name="ITR-2">ITR-2</option>
                                                <option name="ITR-2A">ITR-2A</option>
                                                <option name="ITR-3">ITR-3</option>
                                                <option name="ITR-4">ITR-4</option>
                                                <option name="ITR-4S">ITR-4S</option>
                                                <option name="ITR-5">ITR-5</option>
                                                <option name="ITR-6">ITR-6</option>
                                                <option name="ITR-7">ITR-7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>FIELD EXECUTIVE NAME</label>
                                        <input type="text" class="form-control" name="executive-name"
                                            placeholder="SHAIK APSER BASHA-9441934111" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Signature</label>
                                        <input type="file" class="form-control" name="signature" id="signature"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>stamp</label>
                                        <input type="file" class="form-control" name="stamp" id="stamp"
                                            style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>System Case ID</label>
                                        <input type="text" class="form-control" name="system-case-id"
                                            placeholder="279/29-09-2023" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Applicant Name</label>
                                        <input type="text" class="form-control" name="applicant-name"
                                            placeholder="AIDNI ENGINEERS" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-4  d-md-block d-none">
                                    <div class="form-group">
                                        <label>Ref.Number</label>
                                        <input type="text" class="form-control" name="ref-number"
                                            placeholder="97/29-09-2023" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="card-footer  d-md-block d-none">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
                        </Form>
                    </div>
                    <!-- /.row -->
                </div>
            </div>




            <?php $this->load->view('includes/footer') ?>