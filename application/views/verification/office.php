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
                    <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                        action="<?php echo base_url( )?>verification/Office/add_office" method="post"
                        novalidate="novalidate">
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="branch-name">Branch Name</label>
                                <input type="text" name="branch-name" class="form-control" id="branch-name"
                                    placeholder="kurnool Branch" required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="los-no">Los no</label>
                                <input type="text" name="los-no" class="form-control" id="los-no" placeholder="2489376"
                                    required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Reference_no">Reference no</label>
                                <input type="text" name="Reference_no" class="form-control" id="Reference_no"
                                    placeholder="00-01-1900" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Typeofloan">Type of Loan</label>
                                <input type="text" name="Typeofloan" class="form-control" id="Typeofloan"
                                    placeholder="0" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Mobile_no">Mobile no</label>
                                <input type="text" name="Mobile_no" class="form-control" id="Mobile_no"
                                    placeholder="787896739" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Applicantname">Name of the Application(Mr/Mrs/Ms)</label>
                                <input type="text" name="Applicantname" class="form-control" id="Applicantname"
                                    placeholder="0" required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Office-Address">Office Address</label>
                                <input type="text" name="Office-Address" class="form-control" id="Office-Address"
                                    placeholder="kurnool" required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Receipt_date">Date Of The Receipt of the File</label>
                                <input type="date" name="Receipt_date" class="form-control" id="Receipt_date"
                                    placeholder="00-01-1900" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="DateoftheReport">Date of the Report</label>
                                <input type="date" name="DateoftheReport" class="form-control" id="DateoftheReport"
                                    placeholder="00-01-1900" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="ExactCompany">Exact Company Name</label>
                                <input type="text" name="ExactCompany" class="form-control" id="ExactCompany"
                                    placeholder="KraftBees" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Designation">Designation</label>
                                <input type="text" name="Designation" class="form-control" id="Designation"
                                    placeholder="" required />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="EmployeeId">Employee ID</label>
                                <input type="text" name="EmployeeId" class="form-control" id="EmployeeId"
                                    placeholder="NA" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Personcontacted">Person contacted</label>
                                <select name="Personcontacted" class="form-control" id="Personcontacted" required="">
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="WorkingSince">Working Since</label>
                                <select name="WorkingSince" class="form-control" id="WorkingSince" required>
                                    <option>------select no of years------</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="NetSalary">Net Salary</label>
                                <input type="text" name="NetSalary" class="form-control" id="NetSalary" placeholder="NA"
                                    required />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="PersonMet">Person Met</label>
                                <input type="text" name="PersonMet" class="form-control" id="PersonMet" placeholder="0"
                                    required />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Designationoftheperson">Designation of the person</label>
                                <input type="text" name="Designationoftheperson" class="form-control"
                                    id="Designationoftheperson" placeholder="0" required="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="NatureofBusiness">Nature of Business</label>
                                <input type="text" name="NatureofBusiness" class="form-control" id="NatureofBusiness"
                                    placeholder="Business Type " required />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="LandMark">Land Mark</label>
                                <input type="text" name="LandMark" class="form-control" id="LandMark"
                                    placeholder="Near My location " required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Numberofemployeesseen">Number of employees seen</label>
                                <select name="Numberofemployeesseen" class="form-control" id="Numberofemployeesseen"
                                    required>
                                    <option value="Many">Many</option>
                                    <option value="Few">Few</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="PersonmetatOffice">Person met at Office confirm that applicant
                                    worked at given address</label>
                                <select name="PersonmetatOffice" class="form-control" id="PersonmetatOffice"
                                    required="">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Indicate">Indicate if residence cum office</label>
                                <select name="Indicate" class="form-control" id="Indicate" required="">
                                    <option>--select--</option>
                                    <option value="No">NO</option>
                                    <option value="Yes">YES</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="LocatingOffice">Locating Office</label>
                                <select name="LocatingOffice" class="form-control" id="LocatingOffice" required="">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Boardsighted">Name Board sighted</label>
                                <select name="Boardsighted" class="form-control" id="Boardsighted" required="">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="BusinessActivity">Business Activity seen</label>
                                <select name="BusinessActivity" class="form-control" id="BusinessActivity" required="">
                                    <option>--select--</option>
                                    <option value="Yes">YES</option>
                                    <option value="No">NO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Equipmentsighted">Equipment sighted</label>
                                <select name="Equipmentsighted" class="form-control" id="Equipmentsighted" required="">
                                    <option>--select--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Visitingcard">Visiting card obtained as proff of visit</label>
                                <input type="text" name="Visitingcard" class="form-control" id="Visitingcard"
                                    placeholder="No" required />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Office-is-in">Office is in</label>
                                <select name="Office-is-in" class="form-control" id="Office-is-in" required="">
                                    <option value="">-------select-------</option>
                                    <option value="Ground floor">Ground Floor</option>
                                    <option value="1st floor">1st Floor</option>
                                    <option value="2nd Floor">2nd Floor</option>
                                    <option value="3rd Floor">3rd Floor</option>
                                    <option value="5th Floor">5th Floor</option>
                                    <option value="6th Floor">6th Floor</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="FieldExecutiveComments">Field Executive Comments</label>
                                <input type="textarea" name="FieldExecutiveComments" class="form-control"
                                    id="FieldExecutiveComments" placeholder="" required="" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fieldexecutive">FIELD EXECUTIVE NAME</label>
                                <select name="fieldexecutive" class="form-control" id="fieldexecutive" required="">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="file" class="form-control" name="signature" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>stamp</label>
                                    <input type="file" class="form-control" name="stamp" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>System Case ID</label>
                                    <input type="text" class="form-control" name="system-case-id"
                                        placeholder="279/29-09-2023" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Applicant Name</label>
                                    <input type="text" class="form-control" name="applicant-name"
                                        placeholder="AIDNI ENGINEERS" style="width: 100% ">
                                    </input>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ref.Number</label>
                                    <input type="text" class="form-control" name="ref-number"
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