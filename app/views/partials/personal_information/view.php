<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Personal Information</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class="card ">
                        <div class="card-header p-0 pt-2 px-2">
                            <ul class="nav  nav-tabs   ">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#TabPage-1-Page1" role="tab" aria-selected="true">
                                        Tab 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#TabPage-1-Page2" role="tab" aria-selected="true">
                                        Tab 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#TabPage-1-Page3" role="tab" aria-selected="true">
                                        Tab 3
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="TabPage-1-Page1" role="tabpanel">
                                    <?php $this :: display_page_errors(); ?>
                                    <div  class="card animated fadeIn page-content">
                                        <?php
                                        $counter = 0;
                                        if(!empty($data)){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <div id="page-report-body" class="">
                                            <table class="table table-hover table-borderless table-striped">
                                                <!-- Table Body Start -->
                                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                                    <tr  class="td-id">
                                                        <th class="title"> Id: </th>
                                                        <td class="value"> <?php echo $data['id']; ?></td>
                                                    </tr>
                                                    <tr  class="td-first_name">
                                                        <th class="title"> First Name: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-middle_name">
                                                        <th class="title"> Middle Name: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-last_name">
                                                        <th class="title"> Last Name: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-address">
                                                        <th class="title"> Address: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-password">
                                                        <th class="title"> Password: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-birthdate">
                                                        <th class="title"> Birthdate: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-contact_number">
                                                        <th class="title"> Contact Number: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-civil_status">
                                                        <th class="title"> Civil Status: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-email">
                                                        <th class="title"> Email: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['email']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="email" 
                                                                data-title="Enter Email" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="email" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['email']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-work_email">
                                                        <th class="title"> Work Email: </th>
                                                        <td class="value">
                                                            <span  data-value="<?php echo $data['work_email']; ?>" 
                                                                data-pk="<?php echo $data['id'] ?>" 
                                                                data-url="<?php print_link("personal_information/editfield/" . urlencode($data['id'])); ?>" 
                                                                data-name="work_email" 
                                                                data-title="Enter Work Email" 
                                                                data-placement="left" 
                                                                data-toggle="click" 
                                                                data-type="email" 
                                                                data-mode="popover" 
                                                                data-showbuttons="left" 
                                                                class="is-editable" >
                                                                <?php echo $data['work_email']; ?> 
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr  class="td-employee_type">
                                                        <th class="title"> Employee Type: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-start_date">
                                                        <th class="title"> Start Date: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-monthly_salary">
                                                        <th class="title"> Monthly Salary: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-account_bonus">
                                                        <th class="title"> Account Bonus: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-client">
                                                        <th class="title"> Client: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-position">
                                                        <th class="title"> Position: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-employment_status">
                                                        <th class="title"> Employment Status: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-start_shift_day">
                                                        <th class="title"> Start Shift Day: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-end_shift_day">
                                                        <th class="title"> End Shift Day: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-shift_time_in">
                                                        <th class="title"> Shift Time In: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-shift_time_out">
                                                        <th class="title"> Shift Time Out: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-lunch_break_start">
                                                        <th class="title"> Lunch Break Start: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-sss_number">
                                                        <th class="title"> Sss Number: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-sss_contribution">
                                                        <th class="title"> Sss Contribution: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-pagibig_number">
                                                        <th class="title"> Pagibig Number: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-pagibig_contribution">
                                                        <th class="title"> Pagibig Contribution: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-philhealth_number">
                                                        <th class="title"> Philhealth Number: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-philhealth_contribution">
                                                        <th class="title"> Philhealth Contribution: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-tin_number">
                                                        <th class="title"> Tin Number: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                    <tr  class="td-tax_percentage">
                                                        <th class="title"> Tax Percentage: </th>
                                                        <td class="value">
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
                                                    </tr>
                                                </tbody>
                                                <!-- Table Body End -->
                                            </table>
                                        </div>
                                        <div class="p-3 d-flex">
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
                                                                <a class="btn btn-sm btn-info"  href="<?php print_link("personal_information/edit/$rec_id"); ?>">
                                                                    <i class="material-icons">edit</i> Edit
                                                                </a>
                                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("personal_information/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                                    <i class="material-icons">clear</i> Delete
                                                                </a>
                                                            </div>
                                                            <?php
                                                            }
                                                            else{
                                                            ?>
                                                            <!-- Empty Record Message -->
                                                            <div class="text-muted p-3">
                                                                <i class="material-icons">block</i> No Record Found
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane  fade" id="TabPage-1-Page2" role="tabpanel">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="tab-pane  fade" id="TabPage-1-Page3" role="tabpanel">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
