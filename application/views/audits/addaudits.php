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

                            <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                action="<?php echo base_url( )?>Audits/insert" method="post">
                                <div class="card-body row">
                                    <div class="form-group col-md-4">
                                        <label for="employee_name">Assign to</label>
                                        <select name="employee_name" class="form-control" id="employee_name" required>
                                            <option value="">Select Employee</option>
                                            <?php foreach ($employees as $employee): ?>
                                            <option value="<?php echo $employee['last_name']; ?>">
                                                <?php echo $employee['last_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="type">type</label>
                                        <select name="type" class="form-control" id="type" required>
                                            <option value="">Select Type</option>
                                            <?php foreach ($types as $type): ?>
                                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="address">Contact Infomation</label>
                                        <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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