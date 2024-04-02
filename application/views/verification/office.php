    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Office Verification</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('Dashboard') ?>">Home / Employee </a>
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
                        <h3 class="card-title">New Office Verification</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- small device code start here -->
                    <form class="ajax-form" id="final_form2">
                        <input type="hidden" name="id" value="1" />
                        <div class="card-body ">
                            <div class="d-md-none section" id="section1">
                                <div class="form-group">
                                    <label for="branch_name">Branch Name</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="branch_name" class="form-control" id="branch_name"
                                        placeholder="kurnool Branch" />
                                </div>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section2">
                                <div class="form-group ">
                                    <label for="los_no">Los no</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="los_no" class="form-control" id="los_no"
                                        placeholder="2489376" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section3">
                                <div class="form-group ">
                                    <label for="Reference_no">Reference no</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Reference_no" class="form-control" id="Reference_no"
                                        placeholder="00-01-1900" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>

                            <div class="d-md-none section" id="section4">
                                <div class="form-group ">
                                    <label for="Typeofloan">Type of Loan</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Typeofloan" class="form-control" id="Typeofloan"
                                        placeholder="0" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section6">
                                <div class="form-group ">
                                    <label for="Mobile_no">Mobile no</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Mobile_no" class="form-control" id="Mobile_no"
                                        placeholder="787896739" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>

                            <div class="d-md-none section" id="section7">
                                <div class="form-group ">
                                    <label for="Applicantname">Name of the Application(Mr/Mrs/Ms)</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Applicantname" class="form-control" id="Applicantname"
                                        placeholder="0" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section8">
                                <div class="form-group ">
                                    <label for="Office_Address">Office Address</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Office_Address" class="form-control" id="Office_Address"
                                        placeholder="kurnool" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section9">
                                <div class="form-group ">
                                    <label for="Receipt_date">Date Of The Receipt of the File</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="date" name="Receipt_date" class="form-control" id="Receipt_date"
                                        placeholder="00-01-1900" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section10">
                                <div class="form-group ">
                                    <label for="DateoftheReport">Date of the Report</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="date" name="DateoftheReport" class="form-control" id="DateoftheReport"
                                        placeholder="00-01-1900" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section11">
                                <div class="form-group ">
                                    <label for="ExactCompany">Exact Company Name</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="ExactCompany" class="form-control" id="ExactCompany"
                                        placeholder="KraftBees" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section12">
                                <div class="form-group ">
                                    <label for="Designation">Designation</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Designation" class="form-control" id="Designation"
                                        placeholder="" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section13">
                                <div class="form-group ">
                                    <label for="EmployeeId">Employee ID</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="EmployeeId" class="form-control" id="EmployeeId"
                                        placeholder="NA" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section13">
                                <div class="form-group ">
                                    <label for="Personcontacted">Person contacted</label>
                                    <select name="Personcontacted" class="form-control" id="Personcontacted">
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section14">
                                <div class="form-group ">
                                    <label for="WorkingSince">Working Since</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="WorkingSince" class="form-control" id="WorkingSince">
                                        <option>------select no of years------</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section15">
                                <div class="form-group ">
                                    <label for="NetSalary">Net Salary</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="NetSalary" class="form-control" id="NetSalary"
                                        placeholder="NA" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>

                            <div class="d-md-none section" id="section16">
                                <div class="form-group ">
                                    <label for="PersonMet">Person Met</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="PersonMet" class="form-control" id="PersonMet"
                                        placeholder="0" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section17">
                                <div class="form-group ">
                                    <label for="Designationoftheperson">Designation of the person</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Designationoftheperson" class="form-control"
                                        id="Designationoftheperson" placeholder="0" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section18">
                                <div class="form-group ">
                                    <label for="NatureofBusiness">Nature of Business</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="NatureofBusiness" class="form-control"
                                        id="NatureofBusiness" placeholder="Business Type " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section19">
                                <div class="form-group ">
                                    <label for="LandMark">Land Mark</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="LandMark" class="form-control" id="LandMark"
                                        placeholder="Near My location " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section20">
                                <div class="form-group ">
                                    <label for="Numberofemployeesseen">Number of employees seen</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="Numberofemployeesseen" class="form-control"
                                        id="Numberofemployeesseen">
                                        <option value="Many">Many</option>
                                        <option value="Few">Few</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section21">
                                <div class="form-group ">
                                    <label for="PersonmetatOffice">Person met at Office confirm that applicant
                                        worked at given address</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="PersonmetatOffice" class="form-control" id="PersonmetatOffice">
                                        <option>--select--</option>
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section22">
                                <div class="form-group ">
                                    <label for="Indicate">Indicate if residence cum office</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="Indicate" class="form-control" id="Indicate">
                                        <option>--select--</option>
                                        <option value="No">NO</option>
                                        <option value="Yes">YES</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section23">
                                <div class="form-group ">
                                    <label for="LocatingOffice">Locating Office</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="LocatingOffice" class="form-control" id="LocatingOffice">
                                        <option>--select--</option>
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section24">
                                <div class="form-group ">
                                    <label for="Boardsighted">Name Board sighted</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="Boardsighted" class="form-control" id="Boardsighted">
                                        <option>--select--</option>
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section25">
                                <div class="form-group ">
                                    <label for="BusinessActivity">Business Activity seen</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="BusinessActivity" class="form-control" id="BusinessActivity">
                                        <option>--select--</option>
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section26">
                                <div class="form-group ">
                                    <label for="Equipmentsighted">Equipment sighted</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="Equipmentsighted" class="form-control" id="Equipmentsighted">
                                        <option>--select--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section27">
                                <div class="form-group">
                                    <label for="Visitingcard">Visiting card obtained as proff of visit</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" name="Visitingcard" class="form-control" id="Visitingcard"
                                        placeholder="No" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section28">
                                <div class="form-group ">
                                    <label for="Office_is_in">Office is in</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="Office_is_in" class="form-control" id="Office_is_in">
                                        <option value="">-------select-------</option>
                                        <option value="Ground floor">Ground Floor</option>
                                        <option value="1st floor">1st Floor</option>
                                        <option value="2nd Floor">2nd Floor</option>
                                        <option value="3rd Floor">3rd Floor</option>
                                        <option value="5th Floor">5th Floor</option>
                                        <option value="6th Floor">6th Floor</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section29">
                                <div class="form-group ">
                                    <label for="FieldExecutiveComments">Field Executive Comments</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="textarea" name="FieldExecutiveComments" class="form-control"
                                        id="FieldExecutiveComments" placeholder="" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section30">
                                <div class="form-group ">
                                    <label for="fieldexecutive">FIELD EXECUTIVE NAME</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <select name="fieldexecutive" class="form-control" id="fieldexecutive">
                                        <option>--select--</option>
                                        <option value="USHA KALYANI YADLAPALLI-9640826097">USHA KALYANI
                                            YADLAPALLI-9640826097</option>
                                        <option value="MANJULA VENKATESH- 7893342498">MANJULA VENKATESH- 7893342498
                                        </option>
                                        <option value="G DURGA RAO- 7893342498">G DURGA RAO- 7893342498</option>
                                        <option value="BOTHUKU PAVAN KUMAR-9908633087">BOTHUKU PAVAN
                                            KUMAR-9908633087
                                        </option>
                                        <option value="JAKKULA SUNIL KUMAR- 9032000345/8712000345">JAKKULA SUNIL
                                            KUMAR-
                                            9032000345/8712000345</option>
                                        <option value="SYED MAHABOOB BASHA-6303810153">SYED MAHABOOB
                                            BASHA-6303810153
                                        </option>
                                        <option value="K CHANDRA MOHAN-9985902199">K CHANDRA MOHAN-9985902199
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section31">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="signature">Signature</label>
                                        <input type="hidden" id="current-section" name="current-section" value="1">
                                        <input type="file" class="form-control" name="signature" style="width: 100% ">
                                        </input>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section32">
                                <div class="form-group">
                                    <label id="stamp">stamp</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="file" class="form-control" name="stamp" style="width: 100% ">
                                    </input>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section33">

                                <div class="form-group">
                                    <label id="system_case_id">System Case ID</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" class="form-control" name="system_case_id"
                                        placeholder="279/29-09-2023" style="width: 100% ">
                                    </input>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>

                            </div>
                            <div class="d-md-none section" id="section34">

                                <div class="form-group">
                                    <label id="applicant_name">Applicant Name</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" class="form-control" name="applicant_name"
                                        placeholder="AIDNI ENGINEERS" style="width: 100% ">
                                    </input>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn2">Back</button>
                                <button class="btn btn-primary mt-3 nextBtn2">Next</button>
                            </div>
                            <div class="d-md-none section" id="section35">

                                <div class="form-group">
                                    <label id="ref_number">Ref.Number</label>
                                    <input type="hidden" id="current-section" name="current-section" value="1">
                                    <input type="text" class="form-control" name="ref_number"
                                        placeholder="97/29-09-2023" style="width: 100% ">
                                    </input>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary submitBtn2">Submit</button>
                                </div>

                            </div>
                            <!-- /.card-body -->
                    </form>
                    <!-- small device code end here -->
                    <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                        action="<?php echo base_url( )?>verification/Office/add_office" method="post"
                        novalidate="novalidate">
                        <div class="card-body row">
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" name="branch_name" class="form-control" id="branch_name"
                                    placeholder="kurnool Branch" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="los_no">Los no</label>
                                <input type="text" name="los_no" class="form-control" id="los_no"
                                    placeholder="2489376" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Reference_no">Reference no</label>
                                <input type="text" name="Reference_no" class="form-control" id="Reference_no"
                                    placeholder="00-01-1900" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Typeofloan">Type of Loan</label>
                                <input type="text" name="Typeofloan" class="form-control" id="Typeofloan"
                                    placeholder="0" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Mobile_no">Mobile no</label>
                                <input type="text" name="Mobile_no" class="form-control" id="Mobile_no"
                                    placeholder="787896739" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Applicantname">Name of the Application(Mr/Mrs/Ms)</label>
                                <input type="text" name="Applicantname" class="form-control" id="Applicantname"
                                    placeholder="0" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Office_Address">Office Address</label>
                                <input type="text" name="Office_Address" class="form-control" id="Office_Address"
                                    placeholder="kurnool" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Receipt_date">Date Of The Receipt of the File</label>
                                <input type="date" name="Receipt_date" class="form-control" id="Receipt_date"
                                    placeholder="00-01-1900" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="DateoftheReport">Date of the Report</label>
                                <input type="date" name="DateoftheReport" class="form-control" id="DateoftheReport"
                                    placeholder="00-01-1900" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="ExactCompany">Exact Company Name</label>
                                <input type="text" name="ExactCompany" class="form-control" id="ExactCompany"
                                    placeholder="KraftBees" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Designation">Designation</label>
                                <input type="text" name="Designation" class="form-control" id="Designation"
                                    placeholder="" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="EmployeeId">Employee ID</label>
                                <input type="text" name="EmployeeId" class="form-control" id="EmployeeId"
                                    placeholder="NA" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Personcontacted">Person contacted</label>
                                <select name="Personcontacted" class="form-control" id="Personcontacted">
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="WorkingSince">Working Since</label>
                                <select name="WorkingSince" class="form-control" id="WorkingSince">
                                    <option>------select no of years------</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="NetSalary">Net Salary</label>
                                <input type="text" name="NetSalary" class="form-control" id="NetSalary"
                                    placeholder="NA" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="PersonMet">Person Met</label>
                                <input type="text" name="PersonMet" class="form-control" id="PersonMet"
                                    placeholder="0" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Designationoftheperson">Designation of the person</label>
                                <input type="text" name="Designationoftheperson" class="form-control"
                                    id="Designationoftheperson" placeholder="0" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="NatureofBusiness">Nature of Business</label>
                                <input type="text" name="NatureofBusiness" class="form-control" id="NatureofBusiness"
                                    placeholder="Business Type " />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="LandMark">Land Mark</label>
                                <input type="text" name="LandMark" class="form-control" id="LandMark"
                                    placeholder="Near My location " />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Numberofemployeesseen">Number of employees seen</label>
                                <select name="Numberofemployeesseen" class="form-control" id="Numberofemployeesseen">
                                    <option value="Many">Many</option>
                                    <option value="Few">Few</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="PersonmetatOffice">Person met at Office confirm that applicant
                                    worked at given address</label>
                                <select name="PersonmetatOffice" class="form-control" id="PersonmetatOffice">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Indicate">Indicate if residence cum office</label>
                                <select name="Indicate" class="form-control" id="Indicate">
                                    <option>--select--</option>
                                    <option value="No">NO</option>
                                    <option value="Yes">YES</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="LocatingOffice">Locating Office</label>
                                <select name="LocatingOffice" class="form-control" id="LocatingOffice">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Boardsighted">Name Board sighted</label>
                                <select name="Boardsighted" class="form-control" id="Boardsighted">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="BusinessActivity">Business Activity seen</label>
                                <select name="BusinessActivity" class="form-control" id="BusinessActivity">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Equipmentsighted">Equipment sighted</label>
                                <select name="Equipmentsighted" class="form-control" id="Equipmentsighted">
                                    <option>--select--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Visitingcard">Visiting card obtained as proff of visit</label>
                                <input type="text" name="Visitingcard" class="form-control" id="Visitingcard"
                                    placeholder="No" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Office_is_in">Office is in</label>
                                <select name="Office_is_in" class="form-control" id="Office_is_in">
                                    <option value="">-------select-------</option>
                                    <option value="Ground floor">Ground Floor</option>
                                    <option value="1st floor">1st Floor</option>
                                    <option value="2nd Floor">2nd Floor</option>
                                    <option value="3rd Floor">3rd Floor</option>
                                    <option value="5th Floor">5th Floor</option>
                                    <option value="6th Floor">6th Floor</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="FieldExecutiveComments">Field Executive Comments</label>
                                <input type="textarea" name="FieldExecutiveComments" class="form-control"
                                    id="FieldExecutiveComments" placeholder="" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="fieldexecutive">FIELD EXECUTIVE NAME</label>
                                <select name="fieldexecutive" class="form-control" id="fieldexecutive">
                                    <option>--select--</option>
                                    <option value="USHA KALYANI YADLAPALLI-9640826097">USHA KALYANI
                                        YADLAPALLI-9640826097</option>
                                    <option value="MANJULA VENKATESH- 7893342498">MANJULA VENKATESH- 7893342498
                                    </option>
                                    <option value="G DURGA RAO- 7893342498">G DURGA RAO- 7893342498</option>
                                    <option value="BOTHUKU PAVAN KUMAR-9908633087">BOTHUKU PAVAN KUMAR-9908633087
                                    </option>
                                    <option value="JAKKULA SUNIL KUMAR- 9032000345/8712000345">JAKKULA SUNIL KUMAR-
                                        9032000345/8712000345</option>
                                    <option value="SYED MAHABOOB BASHA-6303810153">SYED MAHABOOB BASHA-6303810153
                                    </option>
                                    <option value="K CHANDRA MOHAN-9985902199">K CHANDRA MOHAN-9985902199</option>
                                </select>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label id="signature">Signature</label>
                                    <input type="file" class="form-control" name="signature" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label id="stamp">stamp</label>
                                    <input type="file" class="form-control" name="stamp" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label id="system_case_id">System Case ID</label>
                                    <input type="text" class="form-control" name="system_case_id"
                                        placeholder="279/29-09-2023" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label id="applicant_name">Applicant Name</label>
                                    <input type="text" class="form-control" name="applicant_name"
                                        placeholder="AIDNI ENGINEERS" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label id="ref_number">Ref.Number</label>
                                    <input type="text" class="form-control" name="ref_number"
                                        placeholder="97/29-09-2023" style="width: 100% ">
                                    </input>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>