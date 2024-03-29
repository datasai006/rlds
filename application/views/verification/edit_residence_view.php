    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Residence Verification</h1>
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
                        <h3 class="card-title">Add Residence Verification</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!---------------------------------- small-device -------------------------------------->

                    <div class="card-body">
                        <form class="ajax-form" id="final-form1">
                            <div class="d-md-none section quickForm" id="section1">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="branch_name">Branch Name:</label>
                                    <select name="branch_name" class="form-control" id="branch_name">
                                        <option>--select--</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Main Branch') ? 'selected' : ''; ?>>
                                            Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Town Branch') ? 'selected' : ''; ?>>
                                            Town Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'SKU Branch') ? 'selected' : ''; ?>>
                                            SKU Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'BKS Branch') ? 'selected' : ''; ?>>
                                            BKS Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Kadiri ADB Branch') ? 'selected' : ''; ?>>
                                            Kadiri ADB Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Kadiri Bypass Branch') ? 'selected' : ''; ?>>
                                            Kadiri Bypass Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Tadipatri Main Branch') ? 'selected' : ''; ?>>
                                            Tadipatri Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Tadipatri Bazar Branch') ? 'selected' : ''; ?>>
                                            Tadipatri Bazar Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Gooty Main Branch') ? 'selected' : ''; ?>>
                                            Gooty Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'KIA Branch') ? 'selected' : ''; ?>>
                                            KIA Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Narpala Branch') ? 'selected' : ''; ?>>
                                            Narpala Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Uravakonda Main Branch') ? 'selected' : ''; ?>>
                                            Uravakonda Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Vajrakarur Branch') ? 'selected' : ''; ?>>
                                            Vajrakarur Branch</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section2" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="los_no">Los no:</label>
                                    <input type="text" name="los_no" class="form-control" id="los_no"
                                        placeholder="NA" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section3" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Reference no">Reference no:</label>
                                    <input type="text" name="Reference no" class="form-control" id="Reference no"
                                        placeholder="yyyy-MM-dd" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section4" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Type of Loan">Type of Loan:</label>
                                    <select name="Type of Loan" class="form-control" id="Type of Loan">
                                        <option>Home Loan</option>
                                        <option>Home Top Up Loan</option>
                                        <option>Car Loan</option>
                                        <option>Education Loan</option>
                                        <option>X-Press Credit Loan</option>
                                        <option>SC Corporation Loan</option>
                                        <option>Commercial Loan</option>
                                        <option>Reality Loan</option>
                                        <option>Business Loan</option>
                                        <option>Tidco Home Loan</option>
                                        <option>Mudra Loan</option>
                                        <option>Personal Loan</option>
                                        <option>Minority Loan</option>
                                        <option>SME Loan</option>
                                        <option>Mortgage Loan</option>
                                        <option>C.C Loan</option>
                                        <option>Loan Against Property</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section5" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Receipt_date">Date of the Report:</label>
                                    <input type="text" name="Receipt_date" class="form-control" id="Receipt_date"
                                        placeholder="date" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section6" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Application">Name of the Application(Mr/Mrs/Ms)</label>
                                    <input type="text" name="Application" class="form-control" id="Application"
                                        placeholder="0" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section7" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address:</label>
                                    <input type="text" name="Address" class="form-control" id="Address"
                                        placeholder="kurnool" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section8" style="display: none">
                                <div>
                                    <h5>EVALUATION SHEET</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Receipt">Date Of The Receipt of the File:</label>
                                    <input type="text" name="Receipt" class="form-control" id="Receipt"
                                        placeholder="YYYY-MM-DD" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section9" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Locality">Locality :</label>
                                    <select name="Locality" class="form-control" id="Locality">
                                        <option value="CHAWL AREA">CHAWL AREA</option>
                                        <option value="RESIDENTIAL BUILDING">
                                            RESIDENTIAL BUILDING
                                        </option>
                                        <option value="BIG HOUSING COMPLEX">
                                            BIG HOUSING COMPLEX
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section10" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Accessibility">Accessibility:</label>
                                    <select name="Accessibility" class="form-control" id="Accessibility">
                                        <option></option>
                                        <option>EASY TO LOCATE AND ACCESS</option>
                                        <option>UNTRACEABLE</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section11" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="entrance motorable">Is the entrance motorable:</label>
                                    <select name="entrance motorable" class="form-control" id="entrance motorable">
                                        <option>YES</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section12" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Area Sq-Ft">Area Sq-Ft:</label>
                                    <input type="text" name="Area Sq-Ft:" class="form-control" id="Area Sq-Ft:"
                                        placeholder="1200 sq.ft." />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section13" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Adhar Card No">Adhar Card No</label>
                                    <input type="text" name="Adhar Card No" class="form-control" id="Adhar Card No"
                                        placeholder=" " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section14" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Pan Card No">Pan Card No:</label>
                                    <input type="text" name="Pan Card No" class="form-control" id="Pan Card No:"
                                        placeholder=" " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section15" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Visible Items">Visible Items:</label>
                                    <input type="text" name="Visible Items" class="form-control" id="Visible Items"
                                        placeholder="T.V, Fridge,Sofa." />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section16" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Land Mark">Land Mark:</label>
                                    <input type="text" name="Land Mark" class="form-control" id="Land Mark"
                                        placeholder=" " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section17" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Land Line No">Land Line No:</label>
                                    <input type="text" name="Land Line No" class="form-control" id="Land Line No"
                                        placeholder="NA" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section18" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile No 1">Mobile No 1:</label>
                                    <input type="text" name="Mobile No 1" class="form-control" id="Mobile No 1"
                                        placeholder="7702826006" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section19" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile No 2">Mobile No 2:</label>
                                    <input name="Mobile No 2" class="form-control" id="Mobile No 2" placeholder="NA" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section20" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Within Municipal Limit">Within Municipal Limit</label>
                                    <select name="Within Municipal Limit" class="form-control"
                                        id="Within Municipal Limit">
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section21" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Address Confirmed ">Address Confirmed:</label>
                                    <select name="Address Confirmed" class="form-control" id="Address Confirmed">
                                        <option value="Yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section22" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Relationship">Relationship of the Person:</label>
                                    <select name="Relationship" class="form-control" id="Relationship">
                                        <option value="Applicant">Applicant</option>
                                        <option value="Co-Applicant">Co-Applicant</option>
                                        <option value="Guarantor">Guarantor</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Parents">Parents</option>
                                        <option value="father in law">father in law</option>
                                        <option value="Mother in law">Mother in law</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section23" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Interior Furniture">Interior Furniture</label>
                                    <select name="Interior Furniture" class="form-control" id="Interior Furniture">
                                        <option value="Semi-Furnished">Semi-Furnished</option>
                                        <option value="Fully Furnished">Fully Furnished</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section24" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Type of Roof">Type of Roof</label>
                                    <select name="Type of Roof" class="form-control" id="Type of Roof">
                                        <option value="R.C.C Roof">R.C.C Roof</option>
                                        <option value="Aspestos">Aspestos</option>
                                        <option value="Tiles">Tiles</option>
                                        <option value="Thatched">Thatched</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section25" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Number of floors">Number of floors</label>
                                    <select name="Number of floors" class="form-control" id="Number of floors">
                                        <option value="SINGLE FLOOR">SINGLE FLOOR</option>
                                        <option value="Ground + One Floor">
                                            Ground + One Floor
                                        </option>
                                        <option value="Ground + Two Floors">
                                            Ground + Two Floors
                                        </option>
                                        <option value="Ground + Three Floors">
                                            Ground + Three Floors
                                        </option>
                                        <option value="Ground + Four Floors">
                                            Ground + Four Floors
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section26" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Vechiels found at Residence">Vechiels found at Residence:</label>
                                    <select name="Vechiels found at Residence" class="form-control"
                                        id="Vechiels found at Residence">
                                        <option value="Two Wheeler">Two Wheeler</option>
                                        <option value="Four Wheeler">Four Wheeler</option>
                                        <option value="Three wheeler">Three wheeler</option>
                                        <option value="NA">NA</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section27" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Name plate sighted">Name plate sighted</label>
                                    <select name="Name plate sighted" class="form-control" id="Name plate sighted">
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section28" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Neighbours Verification">Neighbours Verification</label>
                                    <select name="Neighbours Verification" class="form-control"
                                        id="Neighbours Verification">
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section29" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Political Link">Political Link</label>
                                    <input name="Political Link" class="form-control" id="Political Link"
                                        placeholder="NO" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section30" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Type of Residence">Type of Residence</label>
                                    <select name="Type of Residence" class="form-control" id="Type of Residence">
                                        <option value="Independent">Independent</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Row House">Row House</option>
                                        <option value="Quarters">Quarters</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section31" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Neighbours Verification">Neighbours Verification</label>
                                    <select name="Neighbours Verification" class="form-control"
                                        id="Neighbours Verification">
                                        <option value="POSITIVE">POSITIVE</option>
                                        <option value="NEGATIVE">NEGATIVE</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section32" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Field Executive Comments">Field Executive Comments:</label>
                                    <input type="text" name="Field Executive Comments" class="form-control"
                                        id="Field Executive Comments" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section33" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Verifier's Name">Verifier's Name:</label>
                                    <select name="Verifier's Name" class="form-control" id="Verifier's Name:">
                                        <option value="A.Md.Imran- 7780661680">
                                            A.Md.Imran- 7780661680
                                        </option>
                                        <option value="venkat-7702826006">
                                            venkat-7702826006
                                        </option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section34" style="display: none">
                                <div>
                                    <h5>OBSERVATIONS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Authoried Signatury">Authoried Signatury:</label>
                                    <input type="text" name="Authoried Signatury" class="form-control"
                                        id="Authoried Signatury" placeholder="L Raghuveer Reddy" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section35" style="display: none">
                                <div>
                                    <h5>PERSONAL DETAILS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Residence Details">Residence Details:</label>
                                    <input type="text" name="Residence Details" class="form-control"
                                        id="Residence Details" placeholder=" " />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section36" style="display: none">
                                <div>
                                    <h5>PERSONAL DETAILS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Ownership Residence">Ownership Residence:</label>
                                    <select name="Ownership Residence" class="form-control" id="Ownership Residence:">
                                        <option value="Own">Own</option>
                                        <option value="Rented">Rented</option>
                                        <option value="Quaters">Quaters</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section37" style="display: none">
                                <div>
                                    <h5>PERSONAL DETAILS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Number of years stay">Number of years stay :</label>
                                    <select name="Number of years stay " class="form-control"
                                        id="Number of years stay ">
                                        <option value="6 Months">6 Months</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Years">2 Years</option>
                                        <option value="3 Years">3 Years</option>
                                        <option value="4 Years">4 Years</option>
                                        <option value="5 Years">5 Years</option>
                                        <option value="6 Years">6 Years</option>
                                        <option value="7 Years">7 Years</option>
                                        <option value="8 Years">8 Years</option>
                                        <option value="9 Years">9 Years</option>
                                        <option value="10 Years">10 Years</option>
                                        <option value="11 Years">11 Years</option>
                                        <option value="12 Years">12 Years</option>
                                        <option value="13 Years">13 Years</option>
                                        <option value="14 Years">14 Years</option>
                                        <option value="15 Years">15 Years</option>
                                        <option value="16 Years">16 Years</option>
                                        <option value="17 Years">17 Years</option>
                                        <option value="18 Years">18 Years</option>
                                        <option value="19 Years">19 Years</option>
                                        <option value="20 Years">20 Years</option>
                                        <option value="21 Years">21 Years</option>
                                        <option value="22 Years">22 Years</option>
                                        <option value="23 Years">23 Years</option>
                                        <option value="24 Years">24 Years</option>
                                        <option value="25 Years">25 Years</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section38" style="display: none">
                                <div>
                                    <h5>PERSONAL DETAILS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Total Family Members">Total Family Members:</label>
                                    <select name="Total Family Members" class="form-control" id="Total Family Members">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section39" style="display: none">
                                <div>
                                    <h5>PERSONAL DETAILS</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Entry into residence permitted">Entry into residence permitted:</label>
                                    <input type="text" name="Entry into residence permitted" class="form-control"
                                        id="Entry into residence permitted" placeholder="YES" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section40" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label for="Neighbors Verification">Neighbors Verification:</label>
                                    <select name="Neighbors Verification" class="form-control"
                                        id="Neighbors Verification">
                                        <option value="POSITIVE">POSITIVE</option>
                                        <option value="NEGATIVE">NEGATIVE</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section41" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label for="COMMENTS">COMMENTS:</label>
                                    <input type="text" name="COMMENTS" class="form-control" id="COMMENTS"
                                        placeholder="" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section42" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>POSITIVE</label>
                                    <input type="file" class="form-control" name="positive" style="width: 100%" />
                                    <input type="file" class="form-control" name="positive" style="width: 100%" />
                                    <input type="file" class="form-control" name="positive" style="width: 100%" />
                                    <input type="file" class="form-control" name="positive" style="width: 100%" />
                                    <input type="file" class="form-control" name="positive" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section43" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>Signature</label>
                                    <input type="file" class="form-control" name="signature" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section44" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>stamp</label>
                                    <input type="file" class="form-control" name="stamp" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section45" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>System Case ID</label>
                                    <input type="text" class="form-control" name="system-case-id"
                                        placeholder="279/29-09-2023" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section46" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>Applicant Name</label>
                                    <input type="text" class="form-control" name="applicant-name"
                                        placeholder="AIDNI ENGINEERS" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-primary mt-3 nextBtnu">Next</button>
                            </div>
                            <div class="d-md-none section" id="section47" style="display: none">
                                <div>
                                    <h5>NEIGHBOURHOOD CHECK</h5>
                                </div>
                                <div class="form-group">
                                    <label>Ref.Number</label>
                                    <input type="text" class="form-control" name="ref-number"
                                        placeholder="97/29-09-2023" style="width: 100%" />
                                </div>
                                <button class="btn btn-primary mt-3 backBtn">Back</button>
                                <button class="btn btn-success mt-3 submitBtn1i">Update</button>
                            </div>
                        </form>

                        <!------------------------------------- large-device ---------------------------------->
                        <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                            action="<?php echo base_url( 'verification/Residence/update_residence/'.$residence_data->id)?>"
                            method="post">
                            <div class="d-md-block" style="display: none">
                                <h5>EVALUATION SHEET</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="branch_name">Branch Name</label>
                                    <select name="branch_name" class="form-control" id="branch_name">
                                        <option>--select--</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Main Branch') ? 'selected' : ''; ?>>
                                            Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Town Branch') ? 'selected' : ''; ?>>
                                            Town Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'SKU Branch') ? 'selected' : ''; ?>>
                                            SKU Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'BKS Branch') ? 'selected' : ''; ?>>
                                            BKS Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Kadiri ADB Branch') ? 'selected' : ''; ?>>
                                            Kadiri ADB Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Kadiri Bypass Branch') ? 'selected' : ''; ?>>
                                            Kadiri Bypass Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Tadipatri Main Branch') ? 'selected' : ''; ?>>
                                            Tadipatri Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Tadipatri Bazar Branch') ? 'selected' : ''; ?>>
                                            Tadipatri Bazar Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Gooty Main Branch') ? 'selected' : ''; ?>>
                                            Gooty Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'KIA Branch') ? 'selected' : ''; ?>>
                                            KIA Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Narpala Branch') ? 'selected' : ''; ?>>
                                            Narpala Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Uravakonda Main Branch') ? 'selected' : ''; ?>>
                                            Uravakonda Main Branch</option>
                                        <option
                                            <?php echo ($residence_data->branch_name === 'Vajrakarur Branch') ? 'selected' : ''; ?>>
                                            Vajrakarur Branch</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="los_no">Los no</label>
                                    <input type="text" name="los_no" class="form-control" id="los_no"
                                        value="<?php echo $residence_data->los_no; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="reference_no">Reference no</label>
                                    <input type="text" name="reference_no" class="form-control" id="reference_no"
                                        value="<?php echo $residence_data->reference_no; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="typeofloan">Type of Loan</label>
                                    <select name="typeofloan" class="form-control" id="typeofloan">
                                        <option>--select--</option>
                                        <option value="home_loan"
                                            <?php echo ($residence_data->typeofloan == 'home_loan') ? 'selected' : ''; ?>>
                                            Home Loan</option>
                                        <option value="home_top_up_loan"
                                            <?php echo ($residence_data->typeofloan == 'home_top_up_loan') ? 'selected' : ''; ?>>
                                            Home Top Up Loan</option>
                                        <option value="car_loan"
                                            <?php echo ($residence_data->typeofloan == 'car_loan') ? 'selected' : ''; ?>>
                                            Car Loan</option>
                                        <option value="education_loan"
                                            <?php echo ($residence_data->typeofloan == 'education_loan') ? 'selected' : ''; ?>>
                                            Education Loan</option>
                                        <option value="x-press_credit_loan"
                                            <?php echo ($residence_data->typeofloan == 'x-press_credit_loan') ? 'selected' : ''; ?>>
                                            X-Press Credit Loan</option>
                                        <option value="sc_corporation_loan"
                                            <?php echo ($residence_data->typeofloan == 'sc_corporation_loan') ? 'selected' : ''; ?>>
                                            SC Corporation Loan</option>
                                        <option value="commercial_loan"
                                            <?php echo ($residence_data->typeofloan == 'commercial_loan') ? 'selected' : ''; ?>>
                                            Commercial Loan</option>
                                        <option value="reality_loan"
                                            <?php echo ($residence_data->typeofloan == 'reality_loan') ? 'selected' : ''; ?>>
                                            Reality Loan</option>
                                        <option value="business_loan"
                                            <?php echo ($residence_data->typeofloan == 'business_loan') ? 'selected' : ''; ?>>
                                            Business Loan</option>
                                        <option value="tidco_home_loan"
                                            <?php echo ($residence_data->typeofloan == 'tidco_home_loan') ? 'selected' : ''; ?>>
                                            Tidco Home Loan</option>
                                        <option value="mudra_loan"
                                            <?php echo ($residence_data->typeofloan == 'mudra_loan') ? 'selected' : ''; ?>>
                                            Mudra Loan</option>
                                        <option value="personal_loan"
                                            <?php echo ($residence_data->typeofloan == 'personal_loan') ? 'selected' : ''; ?>>
                                            Personal Loan</option>
                                        <option value="minority_loan"
                                            <?php echo ($residence_data->typeofloan == 'minority_loan') ? 'selected' : ''; ?>>
                                            Minority Loan</option>
                                        <option value="sme_loan"
                                            <?php echo ($residence_data->typeofloan == 'sme_loan') ? 'selected' : ''; ?>>
                                            SME Loan</option>
                                        <option value="mortgage_loan"
                                            <?php echo ($residence_data->typeofloan == 'mortgage_loan') ? 'selected' : ''; ?>>
                                            Mortgage Loan</option>
                                        <option value="cc_loan"
                                            <?php echo ($residence_data->typeofloan == 'cc_loan') ? 'selected' : ''; ?>>
                                            C.C Loan</option>
                                        <option value="loan_aganist_property"
                                            <?php echo ($residence_data->typeofloan == 'loan_aganist_property') ? 'selected' : ''; ?>>
                                            Loan Against Property
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Receipt_date">Date of the Report</label>
                                    <input type="date" name="Receipt_date" class="form-control" id="Receipt_date"
                                        value="<?php echo $residence_data->Receipt_date; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="applicant_name">Name of the Application(Mr/Mrs/Ms)</label>
                                    <input type=" text" name="applicant_name" class="form-control" id="applicant_name"
                                        value="<?php echo $residence_data->applicant_name; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Address">Address</label>
                                    <input type="text" name="Address" class="form-control" id="Address"
                                        value="<?php echo $residence_data->Address; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Receipt">Date Of The Receipt of the File</label>
                                    <input type="date" name="Receipt" class="form-control" id="Receipt"
                                        value="<?php echo $residence_data->Receipt; ?>" />
                                </div>
                            </div>
                            <div class="d-md-block" style="display: none">
                                <h5>OBSERVATIONS</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Locality">Locality </label>
                                    <select name="Locality" class="form-control" id="Locality">
                                        <option>--select--</option>
                                        <?php foreach ($localities as $locality): ?>
                                        <option value="<?php echo $locality; ?>"
                                            <?php echo ($residence_data->Locality === $locality) ? 'selected' : ''; ?>>
                                            <?php echo $locality; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Accessibility">Accessibility</label>
                                    <select name="Accessibility" class="form-control" id="Accessibility">
                                        <option>--select--</option>
                                        <?php foreach ($accessibilities as $accessibility): ?>
                                        <option value="<?php echo $accessibility; ?>"
                                            <?php echo ($residence_data->Accessibility === $accessibility) ? 'selected' : ''; ?>>
                                            <?php echo $accessibility; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="entrance_motorable">Is the entrance motorable</label>
                                    <select name="entrance_motorable" class="form-control" id="entrance_motorable">
                                        <option value="">--select--</option>
                                        <option value="YES"
                                            <?php echo ($residence_data->entrance_motorable == 'YES') ? 'selected' : ''; ?>>
                                            YES
                                        </option>
                                        <option value="NO"
                                            <?php echo ($residence_data->entrance_motorable == 'NO') ? 'selected' : ''; ?>>
                                            NO
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Area_Sq_Ft">Area Sq-Ft</label>
                                    <input type="text" name="Area_Sq_Ft" class="form-control" id="Area_Sq_Ft"
                                        value="<?php echo $residence_data->Area_Sq_Ft; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="aadhar_card">Adhar Card No</label>
                                    <input type="text" name="aadhar_card" class="form-control" id="aadhar_card"
                                        value="<?php echo $residence_data->aadhar_card; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="pan_card">Pan Card No</label>
                                    <input type="text" name="pan_card" class="form-control" id="pan_card"
                                        value="<?php echo $residence_data->pan_card; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Visible_Items">Visible Items</label>
                                    <input type="text" name="Visible_Items" class="form-control" id="Visible_Items"
                                        value="<?php echo $residence_data->Visible_Items; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Land_Mark">Land Mark</label>
                                    <input type="text" name="Land_Mark" class="form-control" id="Land_Mark"
                                        value="<?php echo $residence_data->Land_Mark; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Land_Line_No">Land Line No</label>
                                    <input type="text" name="Land_Line_No" class="form-control" id="Land_Line_No"
                                        value="<?php echo $residence_data->Land_Line_No; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="mobile_no">Mobile No 1</label>
                                    <input type="text" name="mobile_no" class="form-control" id="mobile_no"
                                        value="<?php echo $residence_data->mobile_no; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="mobile_no2">Mobile No 2</label>
                                    <input name="mobile_no2" class="form-control" id="mobile_no2"
                                        value="<?php echo $residence_data->mobile_no2; ?>" />
                                </div>
                                <div class="form-group col-md-4  col-md-4 d-md-block d-none">
                                    <label for="Within_Municipal_Limit">Within Municipal Limit</label>
                                    <select name="Within_Municipal_Limit" class="form-control"
                                        id="Within_Municipal_Limit">
                                        <option value="">--select--</option>
                                        <option value="YES"
                                            <?php echo ($residence_data->Within_Municipal_Limit == 'YES') ? 'selected' : ''; ?>>
                                            YES
                                        </option>
                                        <option value="NO"
                                            <?php echo ($residence_data->Within_Municipal_Limit == 'NO') ? 'selected' : ''; ?>>
                                            NO
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4  col-md-4 d-md-block d-none">
                                    <label for="Address_Confirmed">Address Confirmed</label>
                                    <select name="Address_Confirmed" class="form-control" id="Address_Confirmed">
                                        <option value="">--select--</option>
                                        <option value="YES"
                                            <?php echo ($residence_data->Address_Confirmed == 'YES') ? 'selected' : ''; ?>>
                                            YES
                                        </option>
                                        <option value="NO"
                                            <?php echo ($residence_data->Address_Confirmed == 'NO') ? 'selected' : ''; ?>>
                                            NO
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Relationship">Relationship of the Person</label>
                                    <select name="Relationship" class="form-control" id="Relationship">
                                        <option>--select--</option>
                                        <?php foreach ($relationship_options as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->Relationship === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Interior_Furniture">Interior Furniture</label>
                                    <select name="Interior_Furniture" class="form-control" id="Interior_Furniture">
                                        <option>--select--</option>
                                        <?php foreach ($interior_furniture_options as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->Interior_Furniture === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="typeofroof">Type of Roof</label>
                                    <select name="typeofroof" class="form-control" id="typeofroof">
                                        <option>--select--</option>
                                        <?php foreach ($roof_types as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->typeofroof === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Numberoffloors">Number of floors</label>
                                    <select name="Numberoffloors" class="form-control" id="Numberoffloors">
                                        <option>--select--</option>
                                        <?php foreach ($Numberoffloor as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->Numberoffloors === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="VechielsfoundatResidence">Vechiels found at Residence</label>
                                    <select name="VechielsfoundatResidence" class="form-control"
                                        id="VechielsfoundatResidence">
                                        <option>--select--</option>
                                        <?php foreach ($VechielsfoundatResidence as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->VechielsfoundatResidence === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="Nameplatesighted">Name plate sighted</label>
                                    <select name="Nameplatesighted" class="form-control" id="Nameplatesighted">
                                        <option value="">--select--</option>
                                        <option value="Yes"
                                            <?php echo ($residence_data->Nameplatesighted == 'YES') ? 'selected' : ''; ?>>
                                            YES
                                        </option>
                                        <option value="No"
                                            <?php echo ($residence_data->Nameplatesighted == 'NO') ? 'selected' : ''; ?>>
                                            NO
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="NeighboursVerification">Neighbours Verification</label>
                                    <select name="NeighboursVerification" class="form-control"
                                        id="NeighboursVerification">
                                        <option value="">--select--</option>
                                        <option value="Yes"
                                            <?php echo ($residence_data->NeighboursVerification == 'YES') ? 'selected' : ''; ?>>
                                            YES
                                        </option>
                                        <option value="No"
                                            <?php echo ($residence_data->NeighboursVerification == 'NO') ? 'selected' : ''; ?>>
                                            NO
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="PoliticalLink">Political Link</label>
                                    <input name="PoliticalLink" class="form-control" id="PoliticalLink"
                                        value="<?php echo $residence_data->PoliticalLink; ?>" />
                                </div>
                                <div class="form-group col-md-4 d-md-block d-none">
                                    <label for="TypeofResidence">Type of Residence</label>
                                    <select name="TypeofResidence" class="form-control" id="TypeofResidence">
                                        <option>--select--</option>
                                        <?php foreach ($TypeofResidenc as $option): ?>
                                        <option value="<?php echo $option; ?>"
                                            <?php echo ($residence_data->TypeofResidence === $option) ? 'selected' : ''; ?>>
                                            <?php echo $option; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="NeighboursVerification1">Neighbours Verification</label>
                                        <select name="NeighboursVerification1" class="form-control"
                                            id="NeighboursVerification1">
                                            <option>--select--</option>
                                            <?php foreach ($NeighboursVerification as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($residence_data->NeighboursVerification1 === $option) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="FieldExecutiveComments">Field Executive Comments</label>
                                        <input type="text" name="FieldExecutiveComments" class="form-control"
                                            id="FieldExecutiveComments"
                                            value="<?php echo $residence_data->FieldExecutiveComments; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="Verifier_Name">Verifier's Name</label>
                                        <select name="Verifier_Name" class="form-control" id="Verifier_Name">
                                            <option>select</option>
                                            <?php foreach ($verifier_options as $value => $label): ?>
                                            <option value="<?php echo $value; ?>"
                                                <?php echo ($residence_data->Verifier_Name === $value) ? 'selected' : ''; ?>>
                                                <?php echo $label; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="AuthoriedSignatury">Authoried Signatury</label>
                                        <input type="text" name="AuthoriedSignatury" class="form-control"
                                            id="AuthoriedSignatury"
                                            value="<?php echo $residence_data->AuthoriedSignatury; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block" style="display: none">
                                <h5>PERSONAL DETAILS</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="ResidenceDetails">Residence Details</label>
                                        <input type="text" name="ResidenceDetails" class="form-control"
                                            id="ResidenceDetails"
                                            value="<?php echo $residence_data->ResidenceDetails; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="OwnershipResidence">Ownership Residence</label>
                                        <select name="OwnershipResidence" class="form-control" id="OwnershipResidence">
                                            <option>--select--</option>
                                            <?php foreach ($OwnershipResidenc as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($residence_data->OwnershipResidence === $option) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="Numberofyearsstay">Number of years stay </label>
                                        <select name="Numberofyearsstay" class="form-control" id="Numberofyearsstay">
                                            <option>--select--</option>
                                            <?php foreach ($number_of_years_options as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($residence_data->Numberofyearsstay === $option) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="TotalFamilyMembers">Total Family Members</label>
                                        <select name="TotalFamilyMembers" class="form-control" id="TotalFamilyMembers">
                                            <option>--select--</option>
                                            <?php foreach ($total_family_members_options as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($residence_data->TotalFamilyMembers == $option) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for=" residence_permitted">Entry into residence permitted</label>
                                        <input type="text" name="residence_permitted" class="form-control"
                                            id="residence_permitted"
                                            value="<?php echo $residence_data->residence_permitted; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-block" style="display: none">
                                <h5>NEIGHBOURHOOD CHECK</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="NeighborsVerification2">Neighbors Verification</label>
                                        <select name="NeighborsVerification2" class="form-control"
                                            id="NeighborsVerification2">
                                            <option>--select--</option>
                                            <?php foreach ($neighbors_verification_options as $option): ?>
                                            <option value="<?php echo $option; ?>"
                                                <?php echo ($residence_data->NeighborsVerification2 == $option) ? 'selected' : ''; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label for="comments">COMMENTS</label>
                                        <input type="text" name="comments" class="form-control" id="comments"
                                            value="<?php echo $residence_data->comments; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>POSITIVE</label>
                                        <input type="file" name="positive_images[]" class="form-control"
                                            style="width: 100%" multiple />
                                        <input type="hidden" name="current_positive"
                                            value="<?php echo $current_positive; ?>">
                                        <span>Current Signature:- <?php echo $current_positive; ?></span>

                                    </div>
                                </div>

                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Signature</label>
                                        <input type="file" class="form-control" name="signature" id="signature"
                                            style="width: 100% ">
                                        <input type="hidden" name="current_signature"
                                            value="<?php echo $current_signature; ?>">
                                        <span>Current Signature:- <?php echo $current_signature; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Stamp</label>
                                        <input type="file" class="form-control" name="stamp" id="stamp"
                                            style="width: 100% ">
                                        <input type="hidden" name="current_stamp" value="<?php echo $current_stamp; ?>">
                                        <span>Current Stamp:- <?php echo $current_stamp; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>System Case ID</label>
                                        <input type="text" class="form-control" name="system_case_id"
                                            value="<?php echo $residence_data->system_case_id; ?>"
                                            style="width: 100%" />
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Applicant Name</label>
                                        <input type="text" class="form-control" name="applicant_name1"
                                            value="<?php echo $residence_data->applicant_name1; ?>"
                                            style="width: 100%" />
                                    </div>
                                </div>
                                <div class="col-md-4 d-md-block d-none">
                                    <div class="form-group">
                                        <label>Ref.Number</label>
                                        <input type="text" class="form-control" name="ref_number"
                                            value="<?php echo $residence_data->ref_number; ?>" style="width: 100%" />
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-success">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer') ?>