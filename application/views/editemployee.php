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
                            <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
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
                                action="<?php echo base_url('Employee/Employe/update_employee/' . $employee->id); ?>"
                                method="post">
                                <!-- <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="employee_type">Employee Type</label>
                                        <select type="text" name="employee_type" class="form-control" id="employee_type"
                                            required>
                                            <option value="">--select--</option>
                                            <option value="Permanent"
                                                <?php echo ($employee->employee_type == 'Permanent') ? 'selected' : ''; ?>>
                                                Permanent</option>
                                            <option value="Contract"
                                                <?php echo ($employee->employee_type == 'Contract') ? 'selected' : ''; ?>>
                                                Contract</option>
                                            <option value="Labour"
                                                <?php echo ($employee->employee_type == 'Labour') ? 'selected' : ''; ?>>
                                                Labour</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="designation">Designation</label>
                                        <select name="designation" class="form-control" id="designation" required="">
                                            <option value="">--select Designation--</option>
                                            <?php foreach ($designations as $designation): ?>
                                            <option value="<?php echo $designation->name; ?>"
                                                <?php echo ($employee->designation == $designation->name) ? 'selected' : ''; ?>>
                                                <?php echo $designation->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="department">Department</label>
                                        <select name="department" class="form-control" id="department" required="">
                                            <option value="">Select Department</option>
                                            <?php foreach ($departments as $department): ?>
                                            <option value="<?php echo $department->id; ?>"
                                                <?php echo ($employee->department == $department->id) ? 'selected' : ''; ?>>
                                                <?php echo $department->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="employee_code">Employee Code</label>
                                        <input type="text" name="employee_code"
                                            value="<?php echo $employee->employee_code; ?>" class="form-control"
                                            id="employee_code" placeholder="KA 34 N XXXX" required>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label>Date Of Joining</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" value="<?php echo $employee->doj; ?>" name="doj" id="doj"
                                                class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="qualification">Qualification</label>
                                        <input type="text" name="qualification"
                                            value="<?php echo $employee->qualification; ?>" class="form-control"
                                            id="qualification" placeholder="BE/BCA/MCA" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="experience">Experience In Years</label>
                                        <input type="text" name="experience"
                                            value="<?php echo $employee->experience; ?>" class="form-control"
                                            id="experience" placeholder="1.2" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="esi">ESI No</label>
                                        <input type="text" name="esi" value="<?php echo $employee->esi; ?>"
                                            class="form-control" id="esi" placeholder="XXXX-XXXX-XXXX-4581269" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="pf">PF No</label>
                                        <input type="text" name="pf" class="form-control" id="pf"
                                            placeholder="XXXX-XXXX-XXXX-12354" value="<?php echo $employee->pf; ?>"
                                            required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="insurance">Insurance No</label>
                                        <input type="text" name="insurance" value="<?php echo $employee->insurance; ?>"
                                            class="form-control" id="insurance" placeholder="XXXX -XXXX-123456"
                                            required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="skill_type">Skill Type</label>
                                        <select name="skill_type" class="form-control" id="skill_type" required="">
                                            <option value="">Select Skill Type</option>
                                            <?php foreach ($skill_types as $skill_type): ?>
                                            <option value="<?php echo $skill_type->name; ?>"
                                                <?php echo ($employee->skill_type == $skill_type->name) ? 'selected' : ''; ?>>
                                                <?php echo $skill_type->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="category">Category</label>
                                        <select name="category" class="form-control" id="category" required>
                                            <option value="">Select Category</option>
                                            <?php foreach ($categories as $category): ?>
                                            <option value="<?php echo $category->name; ?>"
                                                <?php echo ($employee->category == $category->name) ? 'selected' : ''; ?>>
                                                <?php echo $category->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>


                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Personal Information</h5>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="employee_name">Employee Name</label>
                                        <input type="text" value="<?php echo $employee->employee_name; ?>"
                                            name="employee_name" class="form-control" id="employee_name"
                                            placeholder="XXXXX" required>
                                    </div>



                                    <div class="form-group col-md-4">
                                        <label>Date Of Birth</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="date" value="<?php echo $employee->dob; ?>" name="dob" id="dob"
                                                class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="religion">Religion</label>
                                        <select name="religion" class="form-control" id="religion" required="">
                                            <option value="">--select Religion--</option>
                                            <?php foreach ($religions as $religion): ?>
                                            <option value="<?php echo $religion->name; ?>"
                                                <?php echo ($employee->religion == $religion->name) ? 'selected' : ''; ?>>
                                                <?php echo $religion->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="nationality">Nationality</label>
                                        <select name="nationality" class="form-control" id="nationality" required>
                                            <option value="">Select Nationality</option>
                                            <?php foreach ($nationalities as $nationality): ?>
                                            <option value="<?php echo $nationality->name; ?>"
                                                <?php echo ($employee->nationality == $nationality->name) ? 'selected' : ''; ?>>
                                                <?php echo $nationality->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="caste">Caste</label>
                                        <select name="caste" class="form-control" id="caste" required="">
                                            <option value="">Select Caste</option>
                                            <?php foreach ($castes as $caste): ?>
                                            <option value="<?php echo $caste->name; ?>"
                                                <?php echo ($employee->caste == $caste->name) ? 'selected' : ''; ?>>
                                                <?php echo $caste->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="martial_status">Martial Status</label>
                                        <input type="text" name="martial_status"
                                            value="<?php echo $employee->martial_status; ?>" class="form-control"
                                            id="martial_status" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="resident_status">Resident Status</label>
                                        <input type="text" name="resident_status"
                                            value="<?php echo $employee->resident_status; ?>" class="form-control"
                                            id="resident_status" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="physically_handicaped">Physically Handicaped / Ex-servicemen</label>
                                        <input type="text" name="physically_handicaped"
                                            value="<?php echo $employee->physically_handicaped; ?>" class="form-control"
                                            id="physically_handicaped" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" value="<?php echo $employee->mobile; ?>"
                                            class="form-control" id="mobile" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="<?php echo $employee->email; ?>"
                                            class="form-control" id="email" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="employee_pic">Photo</label>
                                        <input type="file" name="employee_pic" class="form-control" id="employee_pic"
                                            accept="image/*">
                                        <?php if ($employee->employee_pic): ?>
                                        <img src="<?php echo base_url('/assets/uploads/' . $employee->employee_pic); ?>"
                                            alt="Employee Photo" width="100">
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="aadhar">Aadhar</label>
                                        <input type="text" name="aadhar" value="<?php echo $employee->aadhar; ?>"
                                            class="form-control" id="aadhar" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="driving_licence">Driving Licence</label>
                                        <input type="text" name="driving_licence"
                                            value="<?php echo $employee->driving_licence; ?>" class="form-control"
                                            id="driving_licence" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="bloog_group">Blood Group</label>
                                        <input type="text" name="bloog_group"
                                            value="<?php echo $employee->bloog_group; ?>" class="form-control"
                                            id="bloog_group" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <input type="text" name="gender" value="<?php echo $employee->gender; ?>"
                                            class="form-control" id="gender" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="father_name">Father Name</label>
                                        <input type="text" name="father_name"
                                            value="<?php echo $employee->father_name; ?>" class="form-control"
                                            id="father_name" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mother_name">Mother Name</label>
                                        <input type="text" name="mother_name"
                                            value="<?php echo $employee->mother_name; ?>" class="form-control"
                                            id="mother_name" placeholder="XXXX" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Permanent Address</h5>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_country">Country</label>
                                        <select name="p_country" class="form-control" id="p_country"
                                            onchange="getStates(this.value,'state')" required>
                                            <option value="">-- Select Country --</option>
                                            <?php foreach ($countries as $country): ?>
                                            <option value="<?php echo $country->name; ?>"
                                                <?php echo ($employee->p_country == $country->name) ? 'selected' : ''; ?>>
                                                <?php echo $country->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_state">State</label>
                                        <select name="p_state" class="form-control" id="p_state" required>
                                            <option value=""></option>
                                            <?php foreach ($residence_states as $state): ?>
                                            <option value="<?php echo $state->id; ?>"
                                                <?php echo ($employee->p_state == $state->id) ? 'selected' : ''; ?>>
                                                <?php echo $state->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="p_place">City/Place</label>
                                        <input type="text" name="p_place" value="<?php echo $employee->p_place; ?>"
                                            class="form-control" id="p_placep_place" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="p_pincode">Pincode</label>
                                        <input type="text" name="p_pincode" value="<?php echo $employee->p_pincode; ?>"
                                            class="form-control" id="p_pincode" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="permanent_address">Permanent Address</label>
                                        <input type="text" name="permanent_address"
                                            value="<?php echo $employee->permanent_address; ?>" class="form-control"
                                            id="permanent_address" placeholder="" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Residence Address</h5>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_country">Country</label>
                                        <select name="residence_country" class="form-control" id="residence_country"
                                            onchange="getStates(this.value,'state')" required>
                                            <option value="">-- Select Country --</option>
                                            <?php foreach ($countries as $country): ?>
                                            <option value="<?php echo $country->name ; ?>"
                                                <?php echo ($employee->residence_country == $country->name) ? 'selected' : ''; ?>>
                                                <?php echo $country->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_state">State</label>
                                        <select name="residence_state" class="form-control" id="residence_state"
                                            required>
                                            <option value=""></option>
                                            <?php foreach ($residence_states as $state): ?>
                                            <option value="<?php echo $state->id; ?>"
                                                <?php echo ($employee->residence_state == $state->id) ? 'selected' : ''; ?>>
                                                <?php echo $state->name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="residence_place">City/Place</label>
                                        <input type="text" name="residence_place"
                                            value="<?php echo $employee->residence_place; ?>" class="form-control"
                                            id="residence_place" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="residence_pincode">Pincode</label>
                                        <input type="text" name="residence_pincode"
                                            value="<?php echo $employee->residence_pincode; ?>" class="form-control"
                                            id="residence_pincode" placeholder="XXXX" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="residence_address">Residence Address</label>
                                        <input type="text" name="residence_address"
                                            value="<?php echo $employee->residence_address; ?>" class="form-control"
                                            id="residence_address" placeholder="" required>
                                    </div>
                                    <div class=" col-md-12">
                                        <h5 class="mt-2 mb-2">Emergency Contact</h5>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="emergency_name">Contact Name</label>
                                        <input type="text" name="emergency_name"
                                            value="<?php echo $employee->emergency_name; ?>" class="form-control"
                                            id="emergency_name" required>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="emergency_no">Contact Number</label>
                                        <input type="text" name="emergency_no"
                                            value="<?php echo $employee->emergency_no; ?>" class="form-control"
                                            id="emergency_no" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact_address">Contact Address</label>
                                        <input type="text" name="contact_address"
                                            value="<?php echo $employee->contact_address; ?>" class="form-control"
                                            id="contact_address" placeholder="" required>
                                    </div>
                                </div> -->
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name"
                                            value="<?php echo $employee->first_name; ?>" class="form-control"
                                            id="first_name" placeholder="rach" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" value="<?php echo $employee->last_name; ?>"
                                            class="form-control" id="last_name" placeholder="rach" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" value="<?php echo $employee->email; ?>"
                                            class="form-control" id="email" placeholder="demo@gmail.com" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">Password</label>
                                        <input type="password" name="password"
                                            value="<?php echo $employee->password; ?>" class="form-control"
                                            id="password" placeholder="XXXXXX" required readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gendar">Gender</label>
                                        <select name="gendar" class="form-control" id="gendar" required>
                                            <option value="">-- Select Gender --</option>
                                            <option value="male"
                                                <?php echo ($employee->gendar == 'male') ? 'selected' : ''; ?>>Male
                                            </option>
                                            <option value="female"
                                                <?php echo ($employee->gendar == 'female') ? 'selected' : ''; ?>>Female
                                            </option>
                                            <option value="other"
                                                <?php echo ($employee->gendar == 'other') ? 'selected' : ''; ?>>Other
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="country">Country</label>
                                        <select required class="form-control" id="country" name="country">
                                            <option value="">-- Select Code type --</option>
                                            <?php foreach ($code_values as $type): ?>
                                            <option value="<?php echo $type['id']; ?>"
                                                <?php echo ($employee->country == $type['id']) ? 'selected' : ''; ?>>
                                                <?php echo $type['code_value_desc']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <select name="state" class="form-control" id="state" required>
                                            <option value="">-- Select State --</option>
                                            <?php foreach ($code_values as $state): ?>
                                            <option value="<?php echo $state['id']; ?>"
                                                <?php echo ($employee->state == $state['id']) ? 'selected' : ''; ?>>
                                                <?php echo $state['code_value_desc']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mobile_no">Mobile Number</label>
                                        <input type="text" name="mobile_no" value="<?php echo $employee->mobile_no; ?>"
                                            class="form-control" id="mobile_no" placeholder="91XXXXXXXX" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label id="doj">Date Of Joining</label>
                                        <div class="input-group">
                                            <input type="date" name="doj" value="<?php echo $employee->doj; ?>"
                                                class="form-control" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="qualification">Qualification</label>
                                        <input type="text" name="qualification"
                                            value="<?php echo $employee->qualification; ?>" class="form-control"
                                            id="qualification" placeholder="BE/BCA/MCA" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role_id">Role</label>
                                        <select name="role_id" id="role_id" class="form-control">
                                            <option value="">-- Select Role --</option>
                                            <?php foreach ($roles as $role): ?>
                                            <option value="<?php echo $role['id']; ?>"
                                                <?php echo ($employee->role_id == $role['id']) ? 'selected' : ''; ?>>
                                                <?php echo $role['role']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-md-6">

                    </div>

                </div>
            </div>
        </section>

    </div>
    <?php $this->load->view('includes/footer') ?>