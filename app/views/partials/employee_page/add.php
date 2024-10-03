<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Add New Employee Page</h4>
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
                <div class="col-md-7 comp-grid">
                    <div class="card ">
                        <div class="card-header p-0 pt-2 px-2">
                            <ul class="nav  nav-tabs   ">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#TabPage-1-Page1" role="tab" aria-selected="true">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#TabPage-1-Page2" role="tab" aria-selected="true">
                                        Employment Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#TabPage-1-Page3" role="tab" aria-selected="true">
                                        Benefit Details
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="TabPage-1-Page1" role="tabpanel">
                                    <?php $this :: display_page_errors(); ?>
                                    <div  class="bg-light p-3 animated fadeIn page-content">
                                        <form id="employee_page-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("employee_page/add?csrf_token=$csrf_token") ?>" method="post">
                                            <div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="first_name">First Name <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-first_name"  value="<?php  echo $this->set_field_value('first_name',""); ?>" type="text" placeholder="Enter First Name"  required="" name="first_name"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="middle_name">Middle Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-middle_name"  value="<?php  echo $this->set_field_value('middle_name',""); ?>" type="text" placeholder="Enter Middle Name"  required="" name="middle_name"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="last_name">Last Name <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-last_name"  value="<?php  echo $this->set_field_value('last_name',""); ?>" type="text" placeholder="Enter Last Name"  required="" name="last_name"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="address">Address <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-address"  value="<?php  echo $this->set_field_value('address',""); ?>" type="text" placeholder="Enter Address"  required="" name="address"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="input-group">
                                                                                <input id="ctrl-password"  value="<?php  echo $this->set_field_value('password',""); ?>" type="password" placeholder="Enter Password"  required="" name="password"  class="form-control  password password-strength" />
                                                                                    <div class="input-group-append cursor-pointer btn-toggle-password">
                                                                                        <span class="input-group-text"><i class="material-icons">visibility</i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="password-strength-msg">
                                                                                    <small class="font-weight-bold">Should contain</small>
                                                                                    <small class="length chip">6 Characters minimum</small>
                                                                                    <small class="caps chip">Capital Letter</small>
                                                                                    <small class="number chip">Number</small>
                                                                                    <small class="special chip">Symbol</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="input-group">
                                                                                    <input id="ctrl-password-confirm" data-match="#ctrl-password"  class="form-control password-confirm " type="password" name="confirm_password" required placeholder="Confirm Password" />
                                                                                    <div class="input-group-append cursor-pointer btn-toggle-password">
                                                                                        <span class="input-group-text"><i class="material-icons">visibility</i></span>
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                        Password does not match
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="birthdate">Birthdate <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="input-group">
                                                                                    <input id="ctrl-birthdate" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('birthdate',""); ?>" type="date"  name="birthdate" placeholder="Enter Birthdate"  data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y " data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="contact_number">Contact Number <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-contact_number"  value="<?php  echo $this->set_field_value('contact_number',""); ?>" type="number" placeholder="Enter Contact Number" step="1"  required="" name="contact_number"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="civil_status">Civil Status <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <select required=""  id="ctrl-civil_status" name="civil_status"  placeholder="Select Value ..."    class="form-control" >
                                                                                                <option value="">Select</option>
                                                                                                <?php
                                                                                                $civil_status_options = Menu :: $civil_status;
                                                                                                if(!empty($civil_status_options)){
                                                                                                foreach($civil_status_options as $option){
                                                                                                $value = $option['value'];
                                                                                                $label = $option['label'];
                                                                                                $selected = $this->set_field_selected('civil_status', $value, "");
                                                                                                ?>
                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                    <?php echo $label ?>
                                                                                                </option>                                   
                                                                                                <?php
                                                                                                }
                                                                                                }
                                                                                                ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',""); ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="work_email">Work Email <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-work_email"  value="<?php  echo $this->set_field_value('work_email',""); ?>" type="email" placeholder="Enter Work Email"  required="" name="work_email"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="employee_type">Employee Type <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <select required=""  id="ctrl-employee_type" name="employee_type"  placeholder="Select a value ..."    class="form-control" >
                                                                                                        <option value="">Select</option>
                                                                                                        <?php
                                                                                                        $employee_type_options = Menu :: $employee_type;
                                                                                                        if(!empty($employee_type_options)){
                                                                                                        foreach($employee_type_options as $option){
                                                                                                        $value = $option['value'];
                                                                                                        $label = $option['label'];
                                                                                                        $selected = $this->set_field_selected('employee_type', $value, "");
                                                                                                        ?>
                                                                                                        <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                            <?php echo $label ?>
                                                                                                        </option>                                   
                                                                                                        <?php
                                                                                                        }
                                                                                                        }
                                                                                                        ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group form-submit-btn-holder text-center mt-3">
                                                                                    <div class="form-ajax-status"></div>
                                                                                    <button class="btn btn-primary" type="submit">
                                                                                        Submit
                                                                                        <i class="material-icons">send</i>
                                                                                    </button>
                                                                                </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane  fade" id="TabPage-1-Page2" role="tabpanel">
                                                                        <div class="">
                                                                            <div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="input-group">
                                                                                                <input id="ctrl-start_date" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('start_date',""); ?>" type="date"  name="start_date" placeholder="Enter Start Date"  data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="monthly_salary">Monthly Salary <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <input id="ctrl-monthly_salary"  value="<?php  echo $this->set_field_value('monthly_salary',""); ?>" type="number" placeholder="Enter Monthly Salary"  required="" name="monthly_salary"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="account_bonus">Account Bonus <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input id="ctrl-account_bonus"  value="<?php  echo $this->set_field_value('account_bonus',""); ?>" type="number" placeholder="Enter Account Bonus"  required="" name="account_bonus"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="client">Client <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <select required=""  id="ctrl-client" name="client"  placeholder="Select a value ..."    class="form-control" >
                                                                                                                <option value="">Select</option>
                                                                                                                <?php
                                                                                                                $client_options = Menu :: $client;
                                                                                                                if(!empty($client_options)){
                                                                                                                foreach($client_options as $option){
                                                                                                                $value = $option['value'];
                                                                                                                $label = $option['label'];
                                                                                                                $selected = $this->set_field_selected('client', $value, "");
                                                                                                                ?>
                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                    <?php echo $label ?>
                                                                                                                </option>                                   
                                                                                                                <?php
                                                                                                                }
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="position">Position <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <select required=""  id="ctrl-position" name="position"  placeholder="Select a value ..."    class="form-control" >
                                                                                                                <option value="">Select</option>
                                                                                                                <?php
                                                                                                                $position_options = Menu :: $position;
                                                                                                                if(!empty($position_options)){
                                                                                                                foreach($position_options as $option){
                                                                                                                $value = $option['value'];
                                                                                                                $label = $option['label'];
                                                                                                                $selected = $this->set_field_selected('position', $value, "");
                                                                                                                ?>
                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                    <?php echo $label ?>
                                                                                                                </option>                                   
                                                                                                                <?php
                                                                                                                }
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="employment_status">Employment Status <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <select required=""  id="ctrl-employment_status" name="employment_status"  placeholder="Select a value ..."    class="form-control" >
                                                                                                                <option value="">Select</option>
                                                                                                                <?php
                                                                                                                $employment_status_options = Menu :: $employment_status;
                                                                                                                if(!empty($employment_status_options)){
                                                                                                                foreach($employment_status_options as $option){
                                                                                                                $value = $option['value'];
                                                                                                                $label = $option['label'];
                                                                                                                $selected = $this->set_field_selected('employment_status', $value, "");
                                                                                                                ?>
                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                    <?php echo $label ?>
                                                                                                                </option>                                   
                                                                                                                <?php
                                                                                                                }
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="start_shift_day">Start Shift Day <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <select required=""  id="ctrl-start_shift_day" name="start_shift_day"  placeholder="Select a value ..."    class="form-control" >
                                                                                                                <option value="">Select</option>
                                                                                                                <?php
                                                                                                                $start_shift_day_options = Menu :: $start_shift_day;
                                                                                                                if(!empty($start_shift_day_options)){
                                                                                                                foreach($start_shift_day_options as $option){
                                                                                                                $value = $option['value'];
                                                                                                                $label = $option['label'];
                                                                                                                $selected = $this->set_field_selected('start_shift_day', $value, "");
                                                                                                                ?>
                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                    <?php echo $label ?>
                                                                                                                </option>                                   
                                                                                                                <?php
                                                                                                                }
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="end_shift_day">End Shift Day <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <select required=""  id="ctrl-end_shift_day" name="end_shift_day"  placeholder="Select a value ..."    class="form-control" >
                                                                                                                <option value="">Select</option>
                                                                                                                <?php
                                                                                                                $end_shift_day_options = Menu :: $end_shift_day;
                                                                                                                if(!empty($end_shift_day_options)){
                                                                                                                foreach($end_shift_day_options as $option){
                                                                                                                $value = $option['value'];
                                                                                                                $label = $option['label'];
                                                                                                                $selected = $this->set_field_selected('end_shift_day', $value, "");
                                                                                                                ?>
                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                    <?php echo $label ?>
                                                                                                                </option>                                   
                                                                                                                <?php
                                                                                                                }
                                                                                                                }
                                                                                                                ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="shift_time_in">Shift Time In <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="input-group">
                                                                                                            
                                                                                                            <input id="ctrl-shift_time_in" required="" value="<?php  echo $this->set_field_value('shift_time_in',""); ?>" type="time" name="shift_time_in" placeholder="Enter Shift Time In" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                                                        
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="shift_time_out">Shift Time Out <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="input-group">
                                                                                                                <input id="ctrl-shift_time_out"  required="" value="<?php  echo $this->set_field_value('shift_time_out',""); ?>" type="time" name="shift_time_out" placeholder="Enter Shift Time Out" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="lunch_break_start">Lunch Break Start <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                <input id="ctrl-lunch_break_start"  required="" value="<?php  echo $this->set_field_value('lunch_break_start',""); ?>" type="time" name="lunch_break_start"  data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                                                                    
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="lunch_break_start">Lunch Break End <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                    <input id="ctrl-lunch_break_end"  required="" value="<?php  echo $this->set_field_value('lunch_break_end',""); ?>" type="time" name="lunch_break_end"  data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                                                                       
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group form-submit-btn-holder text-center mt-3">
                                                                                                            <div class="form-ajax-status"></div>
                                                                                                            <button class="btn btn-primary" type="submit">
                                                                                                                Submit
                                                                                                                <i class="material-icons">send</i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="tab-pane  fade" id="TabPage-1-Page3" role="tabpanel">
                                                                                                <div class="">
                                                                                                    <div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="sss_number">SSS Number <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input id="ctrl-sss_number"  value="<?php  echo $this->set_field_value('sss_number',""); ?>" type="number" placeholder="Enter Sss Number"  required="" name="sss_number"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="sss_contribution">SSS Contribution <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <input id="ctrl-sss_contribution"  value="<?php  echo $this->set_field_value('sss_contribution',""); ?>" type="text" placeholder="Enter Sss Contribution"  required="" name="sss_contribution"  class="form-control " />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="pagibig_number">Pag-ibig Number <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <input id="ctrl-pagibig_number"  value="<?php  echo $this->set_field_value('pagibig_number',""); ?>" type="number" placeholder="Enter Pagibig Number"  required="" name="pagibig_number"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="pagibig_contribution">Pag-ibig Contribution <span class="text-danger">*</span></label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <input id="ctrl-pagibig_contribution"  value="<?php  echo $this->set_field_value('pagibig_contribution',""); ?>" type="text" placeholder="Enter Pagibig Contribution"  required="" name="pagibig_contribution"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="philhealth_number">Philhealth Number <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <input id="ctrl-philhealth_number"  value="<?php  echo $this->set_field_value('philhealth_number',""); ?>" type="number" placeholder="Enter Philhealth Number"  required="" name="philhealth_number"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="philhealth_contribution">Philhealth Contribution <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <input id="ctrl-philhealth_contribution"  value="<?php  echo $this->set_field_value('philhealth_contribution',""); ?>" type="text" placeholder="Enter Philhealth Contribution"  required="" name="philhealth_contribution"  class="form-control " />
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="tin_number">TIN Number <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <input id="ctrl-tin_number"  value="<?php  echo $this->set_field_value('tin_number',""); ?>" type="number" placeholder="Enter Tin Number"  required="" name="tin_number"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="tax_percentage">Tax Percentage <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <input id="ctrl-tax_percentage"  value="<?php  echo $this->set_field_value('tax_percentage',""); ?>" type="text" placeholder="Enter Tax Percentage"  required="" name="tax_percentage"  class="form-control " />
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group form-submit-btn-holder text-center mt-3">
                                                                                                                                        <div class="form-ajax-status"></div>
                                                                                                                                        <button class="btn btn-primary" type="submit">
                                                                                                                                            Submit
                                                                                                                                            <i class="material-icons">send</i>
                                                                                                                                        </button>
                                                                                                                                    </div>
                                                                                                                                </form></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6 comp-grid">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
