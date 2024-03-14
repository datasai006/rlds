    <?php $this->load->view('includes/header') ?>

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Assign Audits</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Audits</a></li>
                            <li class="breadcrumb-item active">New</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Assign <small>Audits</small></h3>
                            </div>
                            <?php if (isset($message) && !empty($message)): ?>
                            <div class="alert alert-<?php echo $message_type; ?>" role="alert">
                                <?php echo $message; ?>
                            </div>
                            <?php endif; ?>

                            <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                action="<?php echo site_url('audits/update_audit/'.$audit->id); ?>" method="post">
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="Assign_to">Assign to</label>
                                        <select name="Assign_to" class="form-control" id="Assign_to" required>
                                            <option value="">Select Employee</option>
                                            <?php foreach ($employees as $employee): ?>
                                            <option value="<?php echo $employee['last_name']; ?>">
                                                <?php echo $employee['last_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Verification_Type">Verification Type</label>
                                        <select name="Verification_Type" class="form-control" id="Verification_Type"
                                            required>
                                            <option value="">Select Type</option>
                                            <?php foreach ($types as $type): ?>
                                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="Contact_person">Contact Person</label>
                                        <input type="text" class="form-control" id="Contact_person"
                                            name="Contact_person" value="<?php echo $audit->Contact_person; ?>" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Contact_number">Contact Number</label>
                                        <input type="text" class="form-control" id="Contact_number"
                                            name="Contact_number" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address_line_1">Address line 1</label>
                                        <input type="text" class="form-control" id="address_line_1"
                                            name="address_line_1" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address_line_2">address line 2</label>
                                        <input type="text" class="form-control" id="address_line_2"
                                            name="address_line_2" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city">city</label>
                                        <input type="text" class="form-control" id="city" name="city" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pincode">pincode</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">state</label>
                                        <input type="text" class="form-control" id="state" name="state" />
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