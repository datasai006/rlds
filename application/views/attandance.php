<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home / Employee</a>
                        </li>
                        <li class="breadcrumb-item active">Attendance</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-header row">
                <div class="col-md-6">
                    <h3 class="card-title">Attendance For 2023-11-02</h3>
                </div>
                <div class="col-md-3">
                    <input type="date" value="2023-11-02" name="date" id="date" class="form-control" />
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="p-3">
                <!-- <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S.NO</th>
                            <th scope="col">Employee Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Attendance</th>
                            <th scope="col">OT Hours</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>SME1919</td>
                            <td>RAVI RANJAN RAVI</td>
                            <td>RAJENDRA</td>
                            <td>Fitter</td>
                            <td>7766999662</td>
                            <td>
                                <select id="attendance279" onchange="setAttendance(279,this.value,'');">
                                    <option value=""></option>
                                    <option value="P">P</option>
                                    <option value="A">A</option>
                                    <option value="LOP">LOP</option>
                                    <option value="HL">HL</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" value="" min="0" max="24" id="attendanceHours279"
                                    onchange="setAttendance(279,'',this.value)" />
                            </td>
                            <td style="color: blue"><i class="bi bi-eye"></i></td>
                        </tr>
                    </tbody>
                </table> -->
                <form method="post" action="<?php echo base_url('Attendance/updateAttendance'); ?>">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Employee Code</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Designation</th>
                                <th>Mobile No</th>
                                <th>Attendance</th>
                                <th>OT Hours</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $employee): ?>
                            <tr>
                                <td><?php echo $employee->id; ?></td>
                                <td><?php echo $employee->employee_code; ?></td>
                                <td><?php echo $employee->employee_name; ?></td>
                                <td><?php echo $employee->father_name; ?></td>
                                <td><?php echo $employee->designation; ?></td>
                                <td><?php echo $employee->mobile; ?></td>
                                <td>
                                    <!-- Always show the dropdown with options -->
                                    <select name="attendance">
                                        <option value="<?php echo $employee->attendance; ?>" selected>
                                            <?php echo $employee->attendance; ?>
                                        </option>
                                        <option value="P">P</option>
                                        <option value="A">A</option>
                                        <option value="LOP">LOP</option>
                                        <option value="HL">HL</option>
                                    </select>
                                    <input type="hidden" name="id" value="<?php echo $employee->id; ?>" />
                                </td>
                                <td>
                                    <!-- OT Hours input field -->
                                    <input type="number" name="ot_hours" value="<?php echo $employee->ot_hours; ?>"
                                        min="0" max="24" />
                                </td>
                                <td style="color: blue">
                                    <button type="submit"><i class="bi bi-check border-0"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </table>


                </form>
            </div>
            <div class="row p-3">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 929 entries
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                    class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0"
                                    class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0"
                                    class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0"
                                    class="page-link">3</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0"
                                    class="page-link">4</a>
                            </li>
                            <li class="paginate_button page-item">
                                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0"
                                    class="page-link">5</a>
                            </li>
                            <li class="paginate_button page-item next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="8" tabindex="0"
                                    class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('includes/footer') ?>