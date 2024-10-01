<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Personal Information</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php $modal_id = "modal-" . random_str(); ?>
                    <button data-toggle="modal" data-target="#<?php  echo $modal_id ?>"  class="btn btn btn-primary my-1">
                        <i class="material-icons">add</i>                                   
                        Add New Personal Information 
                    </button>
                    <div data-backdrop="true" id="<?php  echo $modal_id ?>" class="modal fade"  role="dialog" aria-labelledby="<?php  echo $modal_id ?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0 reset-grids">
                                    <div class=" ">
                                        <?php  
                                        $this->render_page("personal_information/add"); 
                                        ?>
                                    </div>
                                </div>
                                <div style="top: 5px; right:5px; z-index: 999;" class="position-absolute">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('personal_information'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="material-icons">search</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('personal_information'); ?>">
                                            <i class="material-icons">arrow_back</i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('personal_information'); ?>">
                                            <i class="material-icons">arrow_back</i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="personal_information-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-first_name"> First Name</th>
                                                <th  class="td-middle_name"> Middle Name</th>
                                                <th  class="td-last_name"> Last Name</th>
                                                <th  class="td-address"> Address</th>
                                                <th  class="td-password"> Password</th>
                                                <th  class="td-birthdate"> Birthdate</th>
                                                <th  class="td-contact_number"> Contact Number</th>
                                                <th  class="td-civil_status"> Civil Status</th>
                                                <th  class="td-email"> Email</th>
                                                <th  class="td-work_email"> Work Email</th>
                                                <th  class="td-employee_type"> Employee Type</th>
                                                <th  class="td-start_date"> Start Date</th>
                                                <th  class="td-monthly_salary"> Monthly Salary</th>
                                                <th  class="td-account_bonus"> Account Bonus</th>
                                                <th  class="td-client"> Client</th>
                                                <th  class="td-position"> Position</th>
                                                <th  class="td-employment_status"> Employment Status</th>
                                                <th  class="td-start_shift_day"> Start Shift Day</th>
                                                <th  class="td-end_shift_day"> End Shift Day</th>
                                                <th  class="td-shift_time_in"> Shift Time In</th>
                                                <th  class="td-shift_time_out"> Shift Time Out</th>
                                                <th  class="td-lunch_break_start"> Lunch Break Start</th>
                                                <th  class="td-sss_number"> Sss Number</th>
                                                <th  class="td-sss_contribution"> Sss Contribution</th>
                                                <th  class="td-pagibig_number"> Pagibig Number</th>
                                                <th  class="td-pagibig_contribution"> Pagibig Contribution</th>
                                                <th  class="td-philhealth_number"> Philhealth Number</th>
                                                <th  class="td-philhealth_contribution"> Philhealth Contribution</th>
                                                <th  class="td-tin_number"> Tin Number</th>
                                                <th  class="td-tax_percentage"> Tax Percentage</th>
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <th class=" td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </th>
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    <td class="td-id"><a href="<?php print_link("personal_information/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                    <td class="td-first_name">
                                                        <span  data-value="<?php echo $data['first_name']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="first_name" 
                                                            data-title="Enter First Name" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['first_name']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-middle_name">
                                                        <span  data-value="<?php echo $data['middle_name']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="middle_name" 
                                                            data-title="Enter Middle Name" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['middle_name']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-last_name">
                                                        <span  data-value="<?php echo $data['last_name']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="last_name" 
                                                            data-title="Enter Last Name" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['last_name']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-address">
                                                        <span  data-value="<?php echo $data['address']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="address" 
                                                            data-title="Enter Address" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['address']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-password">
                                                        <span  data-value="<?php echo $data['password']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="password" 
                                                            data-title="Enter Password" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="password" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['password']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-birthdate">
                                                        <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                            data-value="<?php echo $data['birthdate']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="birthdate" 
                                                            data-title="Enter Birthdate" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="flatdatetimepicker" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['birthdate']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-contact_number">
                                                        <span  data-value="<?php echo $data['contact_number']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="contact_number" 
                                                            data-title="Enter Contact Number" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['contact_number']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-civil_status">
                                                        <span  data-source='<?php echo json_encode_quote(Menu :: $civil_status); ?>' 
                                                            data-value="<?php echo $data['civil_status']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="civil_status" 
                                                            data-title="Select a value ..." 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="select" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['civil_status']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-email"><a href="<?php print_link("mailto:$data[email]") ?>"><?php echo $data['email']; ?></a></td>
                                                    <td class="td-work_email"><a href="<?php print_link("mailto:$data[work_email]") ?>"><?php echo $data['work_email']; ?></a></td>
                                                    <td class="td-employee_type">
                                                        <span  data-source='<?php echo json_encode_quote(Menu :: $employee_type); ?>' 
                                                            data-value="<?php echo $data['employee_type']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="employee_type" 
                                                            data-title="Select a value ..." 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="select" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['employee_type']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-start_date">
                                                        <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                            data-value="<?php echo $data['start_date']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="start_date" 
                                                            data-title="Enter Start Date" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="flatdatetimepicker" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['start_date']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-monthly_salary">
                                                        <span  data-value="<?php echo $data['monthly_salary']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="monthly_salary" 
                                                            data-title="Enter Monthly Salary" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['monthly_salary']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-account_bonus">
                                                        <span  data-value="<?php echo $data['account_bonus']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="account_bonus" 
                                                            data-title="Enter Account Bonus" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['account_bonus']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-client">
                                                        <span  data-source='<?php echo json_encode_quote(Menu :: $client); ?>' 
                                                            data-value="<?php echo $data['client']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="client" 
                                                            data-title="Select a value ..." 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="select" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['client']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-position">
                                                        <span  data-source='<?php echo json_encode_quote(Menu :: $position); ?>' 
                                                            data-value="<?php echo $data['position']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="position" 
                                                            data-title="Select a value ..." 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="select" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['position']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-employment_status">
                                                        <span  data-value="<?php echo $data['employment_status']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="employment_status" 
                                                            data-title="Enter Employment Status" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['employment_status']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-start_shift_day">
                                                        <span  data-value="<?php echo $data['start_shift_day']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="start_shift_day" 
                                                            data-title="Enter Start Shift Day" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['start_shift_day']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-end_shift_day">
                                                        <span  data-value="<?php echo $data['end_shift_day']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="end_shift_day" 
                                                            data-title="Enter End Shift Day" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['end_shift_day']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-shift_time_in">
                                                        <span  data-value="<?php echo $data['shift_time_in']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="shift_time_in" 
                                                            data-title="Enter Shift Time In" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="time" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['shift_time_in']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-shift_time_out">
                                                        <span  data-value="<?php echo $data['shift_time_out']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="shift_time_out" 
                                                            data-title="Enter Shift Time Out" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="time" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['shift_time_out']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-lunch_break_start">
                                                        <span  data-value="<?php echo $data['lunch_break_start']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="lunch_break_start" 
                                                            data-title="Enter Lunch Break Start" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['lunch_break_start']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-sss_number">
                                                        <span  data-value="<?php echo $data['sss_number']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="sss_number" 
                                                            data-title="Enter SSS Number" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['sss_number']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-sss_contribution">
                                                        <span  data-value="<?php echo $data['sss_contribution']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="sss_contribution" 
                                                            data-title="Enter SSS Contribution" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['sss_contribution']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-pagibig_number">
                                                        <span  data-value="<?php echo $data['pagibig_number']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="pagibig_number" 
                                                            data-title="Enter Pag-ibig Number" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['pagibig_number']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-pagibig_contribution">
                                                        <span  data-value="<?php echo $data['pagibig_contribution']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="pagibig_contribution" 
                                                            data-title="Enter Pag-ibig Contribution" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['pagibig_contribution']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-philhealth_number">
                                                        <span  data-value="<?php echo $data['philhealth_number']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="philhealth_number" 
                                                            data-title="Enter Philhealth Number" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['philhealth_number']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-philhealth_contribution">
                                                        <span  data-value="<?php echo $data['philhealth_contribution']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="philhealth_contribution" 
                                                            data-title="Enter Philhealth Contribution" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['philhealth_contribution']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-tin_number">
                                                        <span  data-value="<?php echo $data['tin_number']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="tin_number" 
                                                            data-title="Enter TIN Number" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="number" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['tin_number']; ?> 
                                                        </span>
                                                    </td>
                                                    <td class="td-tax_percentage">
                                                        <span  data-value="<?php echo $data['tax_percentage']; ?>" 
                                                            data-pk="<?php echo $data['id'] ?>" 
                                                            data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                            data-name="tax_percentage" 
                                                            data-title="Enter Tax Percentage" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" >
                                                            <?php echo $data['tax_percentage']; ?> 
                                                        </span>
                                                    </td>
                                                    <th class="td-btn">
                                                        <a class="btn btn-sm btn-success has-tooltip page-modal" title="View Record" href="<?php print_link("personal_information/view/$rec_id"); ?>">
                                                            <i class="material-icons">visibility</i> View
                                                        </a>
                                                        <a class="btn btn-sm btn-info has-tooltip page-modal" title="Edit This Record" href="<?php print_link("personal_information/edit/$rec_id"); ?>">
                                                            <i class="material-icons">edit</i> Edit
                                                        </a>
                                                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("personal_information/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                            <i class="material-icons">clear</i>
                                                            Delete
                                                        </a>
                                                    </th>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                <!--endrecord-->
                                            </tbody>
                                            <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                        <?php 
                                        if(empty($records)){
                                        ?>
                                        <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                            <i class="material-icons">block</i> No record found
                                        </h4>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    if( $show_footer && !empty($records)){
                                    ?>
                                    <div class=" border-top mt-2">
                                        <div class="row justify-content-center">    
                                            <div class="col-md-auto justify-content-center">    
                                                <div class="p-3 d-flex justify-content-between">    
                                                    <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("personal_information/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                        <i class="material-icons">clear</i> Delete Selected
                                                    </button>
                                                    <div class="dropup export-btn-holder mx-1">
                                                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">save</i> Export
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                                            <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                                                <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                                                </a>
                                                                <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                                                <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                                                    <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                                                    </a>
                                                                    <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                                                    <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                                        <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                                        </a>
                                                                        <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                                        <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                                            <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                                            </a>
                                                                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                                            <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">   
                                                                    <?php
                                                                    if($show_pagination == true){
                                                                    $pager = new Pagination($total_records, $record_count);
                                                                    $pager->route = $this->route;
                                                                    $pager->show_page_count = true;
                                                                    $pager->show_record_count = true;
                                                                    $pager->show_page_limit =true;
                                                                    $pager->limit_count = $this->limit_count;
                                                                    $pager->show_page_number_list = true;
                                                                    $pager->pager_link_range=5;
                                                                    $pager->render();
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
