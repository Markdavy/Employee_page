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
                    <h4 class="record-title">View  Employee Details</h4>
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
                                    <tr  class="td-start_date">
                                        <th class="title"> Start Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['start_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="start_date" 
                                                data-title="Enter Start Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <span title="<?php echo human_datetime($data['start_date']); ?>" class="has-tooltip">
                                                    <?php echo relative_date($data['start_date']); ?>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-monthly_salary">
                                        <th class="title"> Monthly Salary: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['monthly_salary']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                            <span  data-value="<?php echo $data['client']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="client" 
                                                data-title="Enter Client" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
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
                                            <span  data-value="<?php echo $data['position']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="position" 
                                                data-title="Enter Position" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['position']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-employee_status">
                                        <th class="title"> Employee Status: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['employee_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="employee_status" 
                                                data-title="Enter Employee Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['employee_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-start_shift_day">
                                        <th class="title"> Start Shift Day: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['start_shift_day']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                data-url="<?php print_link("employee_details/editfield/" . urlencode($data['id'])); ?>" 
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("employee_details/edit/$rec_id"); ?>">
                                                    <i class="material-icons">edit</i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("employee_details/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                </div>
                            </div>
                        </div>
                    </section>
