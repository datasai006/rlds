    <?php $this->load->view('includes/header') ?>
    <?php $this->load->view('includes/sidebar') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Add New <small>Employee</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                action="<?php echo base_url( )?>Employee/Employe/add_employee" method="post">
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="employee_type">Employee Type</label>
                                        <select type="text" name="employee_type" class="form-control" id="employee_type"
                                            required>
                                            <option value="">--select--</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Labour">Labour</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="designation">Designation</label>
                                        <select type="text" name="designation" class="form-control" id="designation"
                                            required="">
                                            <option value="">--select Designation--</option>
                                            <option value="1">Fitter</option>

                                            <option value="2">Supervisor</option>

                                            <option value="3">Welder</option>

                                            <option value="4">Gas Cutter</option>

                                            <option value="5">Helper</option>

                                            <option value="6">Site Incharge</option>

                                            <option value="7">Fabricator</option>

                                            <option value="8">Cook</option>

                                            <option value="9">Accountent</option>

                                            <option value="10">Store Keeper</option>

                                            <option value="11">Rigger</option>

                                            <option value="12">KHALASI</option>

                                            <option value="13">GRINDER</option>

                                            <option value="14">Crane Operator</option>

                                            <option value="15">N.Seenu gang</option>

                                            <option value="16">Driver</option>

                                            <option value="17">Mechanic</option>

                                            <option value="18">Trailer helper</option>

                                            <option value="19">S/SUPERVISOR</option>

                                            <option value="20">PAINTER</option>

                                            <option value="21">CRANE HELPER</option>

                                            <option value="22">ENGINEERS</option>

                                            <option value="23">Computer Operator </option>

                                            <option value="24">Foreman</option>

                                            <option value="25">C N C Operator</option>

                                            <option value="26">Electrition</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="department">Department</label>
                                        <select name="department" class="form-control" id="department" required="">
                                            <option value="">Select Department</option>

                                            <option value="1">HR</option>

                                            <option value="2">Accounts</option>

                                            <option value="3">Pillet Plant - 3</option>

                                            <option value="4">Pillet Plant - 1</option>

                                            <option value="5">Pillet Plant - 2</option>

                                            <option value="6">ALAM GANG</option>

                                            <option value="7">NOOR GANG</option>

                                            <option value="8">BALRAJU GANG</option>

                                            <option value="9">DHRMA RAJ GANG</option>

                                            <option value="10">AKBAR KHAN GANG</option>

                                            <option value="11">Srinu Gang</option>

                                            <option value="12">Sharma Pandit</option>

                                            <option value="13">Khan gang</option>

                                            <option value="14">Ranjive vicky</option>

                                            <option value="15">MASTAN GANG</option>

                                            <option value="16">VASU GANG</option>

                                            <option value="17">Structural</option>

                                            <option value="18">Sukhdev Gouda Gang</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="employee_code">Employee Code</label>
                                        <input type="text" name="employee_code" class="form-control" id="employee_code"
                                            placeholder="KA 34 N XXXX" required>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label>Date Of Joining</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" name="doj" id="doj" class="form-control" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="qualification">Qualification</label>
                                        <input type="text" name="qualification" class="form-control" id="qualification"
                                            placeholder="BE/BCA/MCA" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="experience">Experience In Years</label>
                                        <input type="text" name="experience" class="form-control" id="experience"
                                            placeholder="1.2" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="esi">ESI No</label>
                                        <input type="text" name="esi" class="form-control" id="esi"
                                            placeholder="XXXX-XXXX-XXXX-4581269" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="pf">PF No</label>
                                        <input type="text" name="pf" class="form-control" id="pf"
                                            placeholder="XXXX-XXXX-XXXX-12354" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="insurance">Insurance No</label>
                                        <input type="text" name="insurance" class="form-control" id="insurance"
                                            placeholder="XXXX -XXXX-123456" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="skill_type">Skill Type</label>
                                        <select name="skill_type" class="form-control" id="skill_type" required>
                                            <option value="">Select Skill Type</option>
                                            <option value="Un-Skilled">Un-Skilled</option>
                                            <option value="Semi-Skilled">Semi-Skilled</option>
                                            <option value="Skilled">Skilled</option>
                                            <option value="Highly-Skilled">Highly-Skilled</option>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="category">Category</label>
                                        <select name="category" class="form-control" id="category" required>
                                            <option value="">Select Category</option>
                                            <option value="MBC">MBC</option>
                                            <option value="SSC">SSC</option>
                                            <option value="JBC">JBC</option>
                                            <option value="JBI">JBI</option>
                                            <option value="JBN">JBN</option>
                                            <option value="TMC">TMC</option>
                                            <option value="OGC">OGC</option>
                                            <option value="PROJECTS">PROJECTS</option>
                                            <option value="OTHERS">OTHERS</option>
                                            <option value="Supp .Staff">Supp .Staff</option>
                                        </select>
                                    </div>


                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Personal Information</h5>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="employee_name">Employee Name</label>
                                        <input type="text" name="employee_name" class="form-control" id="employee_name"
                                            placeholder="XXXXX" required>
                                    </div>



                                    <div class="form-group col-md-4">
                                        <label>Date Of Birth</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" name="dob" id="dob" class="form-control" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="religion">Religion</label>
                                        <select name="religion" class="form-control" id="religion" required>
                                            <option value=""></option>
                                            <option value="Hindhu">Hindhu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Chrsitian">Chrsitian</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="nationality">Nationality</label>
                                        <select name="nationality" class="form-control" id="nationality" required>
                                            <option value="">Select Nationality</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="caste">Caste</label>
                                        <select name="caste" class="form-control" id="caste" required>
                                            <option value="">Select Caste</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="OBC">OBC</option>
                                            <option value="General">General</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="martial_status">Martial Status</label>
                                        <select name="martial_status" class="form-control" id="martial_status" required>
                                            <option value="">Select Marital Status</option>
                                            <option value="Married">Married</option>
                                            <option value="UnMarried">UnMarried</option>
                                            <option value="Dicorce">Dicorce</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="resident_status">Resident Status</label>
                                        <select name="resident_status" class="form-control" id="resident_status"
                                            required>
                                            <option value="">Select Resident Status</option>
                                            <option value="Kannadiga">Kannadiga</option>
                                            <option value="Non-Kannadiga">Non-Kannadiga</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="physically_handicaped">Physically Handicaped / Ex-servicemen</label>
                                        <select name="physically_handicaped" class="form-control"
                                            id="physically_handicaped" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="employee_pic">Photo</label>
                                        <input type="file" name="employee_pic" class="form-control" id="employee_pic"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="aadhar">Aadhar</label>
                                        <input type="text" name="aadhar" class="form-control" id="aadhar"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="driving_licence">Driving Licence</label>
                                        <input type="text" name="driving_licence" class="form-control"
                                            id="driving_licence" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="bloog_group">Blood Group</label>
                                        <input type="text" name="bloog_group" class="form-control" id="bloog_group"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="country">Gender</label>
                                        <select name="gender" class="form-control" id="gender" required>
                                            <option value=""></option>
                                            <option value="Male">Male</option>
                                            <option value="FeMale">FeMale</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="father_name">Father Name</label>
                                        <input type="text" name="father_name" class="form-control" id="father_name"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mother_name">Mother Name</label>
                                        <input type="text" name="mother_name" class="form-control" id="mother_name"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Permanent Address</h5>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_country">Country</label>
                                        <select name="p_country" class="form-control" id="p_country"
                                            onchange="getStates(this.value,'state')" required>
                                            <option value="Indian">Indian</option>
                                            <option value="USA">USA</option>
                                            <option value="UK">UK</option>
                                            <option value="LONDON">LONDON</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_state">State</label>
                                        <select name="p_state" class="form-control" id="p_state" required>
                                            <option value=""></option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_place">City/Place</label>
                                        <input type="text" name="p_place" class="form-control" id="p_placep_place"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="p_pincode">Pincode</label>
                                        <input type="text" name="p_pincode" class="form-control" id="p_pincode"
                                            placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address">Permanent Address</label>
                                        <input type="text" name="permanent_address" class="form-control"
                                            id="permanent_address" placeholder="" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Residence Address</h5>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_country">Country</label>
                                        <select name="residence_country" class="form-control" id="residence_country"
                                            required>
                                            <option value="Indian">Indian</option>
                                            <option value="UK">UK</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_state">State</label>
                                        <select name="residence_state" class="form-control" id="residence_state"
                                            required>
                                            <option value=""></option>
                                            <option value="1">Karnataka</option>
                                            <option value="2">Andhra Pradesh</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_place">City/Place</label>
                                        <input type="text" name="residence_place" class="form-control"
                                            id="residence_place" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="residence_pincode">Pincode</label>
                                        <input type="text" name="residence_pincode" class="form-control"
                                            id="residence_pincode" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="residence_address">Residence Address</label>
                                        <input type="text" name="residence_address" class="form-control"
                                            id="residence_address" placeholder="" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Emergency Contact</h5>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="emergency_name">Contact Name</label>
                                        <input type="text" name="emergency_name" class="form-control"
                                            id="emergency_name" required>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="emergency_no">Contact Number</label>
                                        <input type="text" name="emergency_no" class="form-control" id="emergency_no"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact_address">Contact Address</label>
                                        <input type="text" name="contact_address" class="form-control"
                                            id="contact_address" placeholder="" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <?php $this->load->view('includes/footer') ?>