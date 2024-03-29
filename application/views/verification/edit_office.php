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
                                <a href="#">Home / Employee </a>
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
                    <!-- small devices code start here -->
                    <form class="ajax-form" id="final_form2">
                        <div class="d-md-none section quickForm">
                            <div class="form-group ">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" name="branch_name" class="form-control" id="branch_name"
                                    value="<?php echo $office_data->branch_name; ?>" placeholder="kurnool Branch"
                                    required />
                            </div>
                        </div>
                    </form>
                    <!-- small devices code end here -->
                    <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                        action="<?php echo base_url( 'verification/Office/update_office/'.$office_data->id )?>"
                        method="post" novalidate="novalidate">
                        <div class="card-body row">
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="branch_name">Branch Name</label>
                                <input type="text" name="branch_name" class="form-control" id="branch_name"
                                    value="<?php echo $office_data->branch_name; ?>" placeholder="kurnool Branch"
                                    required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="los_no">Los no</label>
                                <input type="text" name="los_no" class="form-control" id="los_no" placeholder="2489376"
                                    value="<?php echo $office_data->los_no; ?>" required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Reference_no">Reference no</label>
                                <input type="text" name="Reference_no" class="form-control" id="Reference_no"
                                    value="<?php echo $office_data->Reference_no; ?>" placeholder="00-01-1900" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Typeofloan">Type of Loan</label>
                                <input type="text" name="Typeofloan" class="form-control" id="Typeofloan"
                                    value="<?php echo $office_data->Typeofloan; ?>" placeholder="0" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Mobile_no">Mobile no</label>
                                <input type="text" name="Mobile_no" class="form-control" id="Mobile_no"
                                    value="<?php echo $office_data->Mobile_no; ?>" placeholder="787896739" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Applicantname">Name of the Application(Mr/Mrs/Ms)</label>
                                <input type="text" name="Applicantname" class="form-control" id="Applicantname"
                                    value="<?php echo $office_data->Applicantname; ?>" placeholder="0" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Office-Address">Office Address</label>
                                <input type="text" name="Office-Address" class="form-control" id="Office-Address"
                                    value="<?php echo $office_data->Office_Address; ?>" placeholder="kurnool" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Receipt_date">Date Of The Receipt of the File</label>
                                <input type="date" name="Receipt_date" class="form-control" id="Receipt_date"
                                    value="<?php echo $office_data->Receipt_date; ?>" required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="DateoftheReport">Date of the Report</label>
                                <input type="date" name="DateoftheReport" class="form-control" id="DateoftheReport"
                                    value="<?php echo $office_data->DateoftheReport; ?>" placeholder="00-01-1900" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="ExactCompany">Exact Company Name</label>
                                <input type="text" name="ExactCompany" class="form-control" id="ExactCompany"
                                    value="<?php echo $office_data->ExactCompany; ?>" placeholder="KraftBees" />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Designation">Designation</label>
                                <input type="text" name="Designation" class="form-control" id="Designation"
                                    value="<?php echo $office_data->Designation; ?>" placeholder="" required />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="EmployeeId">Employee ID</label>
                                <input type="text" name="EmployeeId" class="form-control" id="EmployeeId"
                                    value="<?php echo $office_data->EmployeeId; ?>" placeholder="NA" required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Personcontacted">Person contacted</label>
                                <select name="Personcontacted" class="form-control" id="Personcontacted">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->Personcontacted == 'Yes') ? 'selected' : ''; ?>>YES
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->Personcontacted == 'No') ? 'selected' : ''; ?>>NO
                                    </option>
                                </select>
                            </div>


                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="WorkingSince">Working Since</label>
                                <select name="WorkingSince" class="form-control" id="WorkingSince" required>
                                    <option>------select no of years------</option>
                                    <option value="1"
                                        <?php echo ($office_data->WorkingSince == '1') ? 'selected' : ''; ?>>1</option>
                                    <option value="2"
                                        <?php echo ($office_data->WorkingSince == '2') ? 'selected' : ''; ?>>2</option>
                                    <option value="3"
                                        <?php echo ($office_data->WorkingSince == '3') ? 'selected' : ''; ?>>3</option>
                                    <option value="4"
                                        <?php echo ($office_data->WorkingSince == '4') ? 'selected' : ''; ?>>4</option>
                                    <option value="5"
                                        <?php echo ($office_data->WorkingSince == '5') ? 'selected' : ''; ?>>5</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="NetSalary">Net Salary</label>
                                <input type="text" name="NetSalary" class="form-control" id="NetSalary"
                                    value="<?php echo $office_data->NetSalary; ?>" placeholder="NA" required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="PersonMet">Person Met</label>
                                <input type="text" name="PersonMet" class="form-control" id="PersonMet"
                                    value="<?php echo $office_data->PersonMet; ?>" placeholder="0" required />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Designationoftheperson">Designation of the person</label>
                                <input type="text" name="Designationoftheperson" class="form-control"
                                    value="<?php echo $office_data->Designationoftheperson; ?>"
                                    id="Designationoftheperson" placeholder="0" />
                            </div>

                            <div class="form-group col-md-4d-md-block d-none ">
                                <label for="NatureofBusiness">Nature of Business</label>
                                <input type="text" name="NatureofBusiness" class="form-control"
                                    value="<?php echo $office_data->NatureofBusiness; ?>" id="NatureofBusiness"
                                    placeholder="Business Type " required />
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="LandMark">Land Mark</label>
                                <input type="text" name="LandMark" class="form-control"
                                    value="<?php echo $office_data->LandMark; ?>" id="LandMark"
                                    placeholder="Near My location " />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Numberofemployeesseen">Number of employees seen</label>
                                <select name="Numberofemployeesseen" class="form-control" id="Numberofemployeesseen"
                                    required>
                                    <option value="Many"
                                        <?php echo ($office_data->Numberofemployeesseen == 'Many') ? 'selected' : ''; ?>>
                                        Many</option>
                                    <option value="Few"
                                        <?php echo ($office_data->Numberofemployeesseen == 'Few') ? 'selected' : ''; ?>>
                                        Few</option>
                                </select>
                            </div>


                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="PersonmetatOffice">Person met at Office confirm that applicant worked at
                                    given address</label>
                                <select name="PersonmetatOffice" class="form-control" id="PersonmetatOffice">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->PersonmetatOffice == 'Yes') ? 'selected' : ''; ?>>YES
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->PersonmetatOffice == 'No') ? 'selected' : ''; ?>>NO
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Indicate">Indicate if residence cum office</label>
                                <select name="Indicate" class="form-control" id="Indicate">
                                    <option value="">--select--</option>
                                    <option value="No"
                                        <?php echo ($office_data->Indicate == 'No') ? 'selected' : ''; ?>>NO</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->Indicate == 'Yes') ? 'selected' : ''; ?>>YES</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="LocatingOffice">Locating Office</label>
                                <select name="LocatingOffice" class="form-control" id="LocatingOffice">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->LocatingOffice == 'Yes') ? 'selected' : ''; ?>>YES
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->LocatingOffice == 'No') ? 'selected' : ''; ?>>NO
                                    </option>
                                </select>
                            </div>


                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Boardsighted">Name Board sighted</label>
                                <select name="Boardsighted" class="form-control" id="Boardsighted">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->Boardsighted == 'Yes') ? 'selected' : ''; ?>>YES
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->Boardsighted == 'No') ? 'selected' : ''; ?>>NO
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="BusinessActivity">Business Activity seen</label>
                                <select name="BusinessActivity" class="form-control" id="BusinessActivity">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->BusinessActivity == 'Yes') ? 'selected' : ''; ?>>YES
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->BusinessActivity == 'No') ? 'selected' : ''; ?>>NO
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Equipmentsighted">Equipment sighted</label>
                                <select name="Equipmentsighted" class="form-control" id="Equipmentsighted">
                                    <option value="">--select--</option>
                                    <option value="Yes"
                                        <?php echo ($office_data->Equipmentsighted == 'Yes') ? 'selected' : ''; ?>>Yes
                                    </option>
                                    <option value="No"
                                        <?php echo ($office_data->Equipmentsighted == 'No') ? 'selected' : ''; ?>>No
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Visitingcard">Visiting card obtained as proff of visit</label>
                                <input type="text" name="Visitingcard" value="<?php echo $office_data->Visitingcard; ?>"
                                    class="form-control" id="Visitingcard" placeholder="No" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="Office-is-in">Office is in</label>
                                <select name="Office-is-in" class="form-control" id="Office-is-in">
                                    <option value="">-------select-------</option>
                                    <option value="Ground floor"
                                        <?php echo ($office_data->Office_is_in == 'Ground floor') ? 'selected' : ''; ?>>
                                        Ground Floor</option>
                                    <option value="1st floor"
                                        <?php echo ($office_data->Office_is_in == '1st floor') ? 'selected' : ''; ?>>1st
                                        Floor</option>
                                    <option value="2nd Floor"
                                        <?php echo ($office_data->Office_is_in == '2nd Floor') ? 'selected' : ''; ?>>2nd
                                        Floor</option>
                                    <option value="3rd Floor"
                                        <?php echo ($office_data->Office_is_in == '3rd Floor') ? 'selected' : ''; ?>>3rd
                                        Floor</option>
                                    <option value="5th Floor"
                                        <?php echo ($office_data->Office_is_in == '5th Floor') ? 'selected' : ''; ?>>5th
                                        Floor</option>
                                    <option value="6th Floor"
                                        <?php echo ($office_data->Office_is_in == '6th Floor') ? 'selected' : ''; ?>>6th
                                        Floor</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="FieldExecutiveComments">Field Executive Comments</label>
                                <input type="textarea" name="FieldExecutiveComments" class="form-control"
                                    id="FieldExecutiveComments"
                                    value="<?php echo $office_data->FieldExecutiveComments; ?>" placeholder="" />
                            </div>
                            <div class="form-group col-md-4 d-md-block d-none">
                                <label for="fieldexecutive">FIELD EXECUTIVE NAME</label>
                                <select name="fieldexecutive" class="form-control" id="fieldexecutive">
                                    <option value="">--select--</option>
                                    <option value="USHA KALYANI YADLAPALLI-9640826097"
                                        <?php echo ($office_data->fieldexecutive == 'USHA KALYANI YADLAPALLI-9640826097') ? 'selected' : ''; ?>>
                                        USHA KALYANI YADLAPALLI-9640826097</option>
                                    <option value="MANJULA VENKATESH- 7893342498"
                                        <?php echo ($office_data->fieldexecutive == 'MANJULA VENKATESH- 7893342498') ? 'selected' : ''; ?>>
                                        MANJULA VENKATESH- 7893342498</option>
                                    <option value="G DURGA RAO- 7893342498"
                                        <?php echo ($office_data->fieldexecutive == 'G DURGA RAO- 7893342498') ? 'selected' : ''; ?>>
                                        G DURGA RAO- 7893342498</option>
                                    <option value="BOTHUKU PAVAN KUMAR-9908633087"
                                        <?php echo ($office_data->fieldexecutive == 'BOTHUKU PAVAN KUMAR-9908633087') ? 'selected' : ''; ?>>
                                        BOTHUKU PAVAN KUMAR-9908633087</option>
                                    <option value="JAKKULA SUNIL KUMAR- 9032000345/8712000345"
                                        <?php echo ($office_data->fieldexecutive == 'JAKKULA SUNIL KUMAR- 9032000345/8712000345') ? 'selected' : ''; ?>>
                                        JAKKULA SUNIL KUMAR- 9032000345/8712000345</option>
                                    <option value="SYED MAHABOOB BASHA-6303810153"
                                        <?php echo ($office_data->fieldexecutive == 'SYED MAHABOOB BASHA-6303810153') ? 'selected' : ''; ?>>
                                        SYED MAHABOOB BASHA-6303810153</option>
                                    <option value="K CHANDRA MOHAN-9985902199"
                                        <?php echo ($office_data->fieldexecutive == 'K CHANDRA MOHAN-9985902199') ? 'selected' : ''; ?>>
                                        K CHANDRA MOHAN-9985902199</option>
                                </select>
                            </div>

                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="file" class="form-control" name="signature" id="signature"
                                        style="width: 100% ">
                                    <input type="hidden" name="current_signature"
                                        value="<?php echo $current_signature; ?>">
                                    <span>Current Signature: <?php echo $current_signature; ?></span>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label>Stamp</label>
                                    <input type="file" class="form-control" name="stamp" id="stamp"
                                        style="width: 100% ">
                                    <input type="hidden" name="current_stamp" value="<?php echo $current_stamp; ?>">
                                    <span>Current Stamp: <?php echo $current_stamp; ?></span>
                                </div>
                            </div>

                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label>System Case ID</label>
                                    <input type="text" class="form-control" name="system-case-id"
                                        placeholder="279/29-09-2023" value="<?php echo $office_data->system_case_id; ?>"
                                        style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label>Applicant Name</label>
                                    <input type="text" class="form-control" name="applicant_name"
                                        placeholder="AIDNI ENGINEERS"
                                        value="<?php echo $office_data->applicant_name; ?>" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4 d-md-block d-none">
                                <div class="form-group">
                                    <label>Ref.Number</label>
                                    <input type="text" class="form-control" name="ref_number"
                                        placeholder="97/29-09-2023" value="<?php echo $office_data->ref_number; ?>"
                                        style="width: 100% ">
                                    </input>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>