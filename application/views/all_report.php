<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
    .sidebar ul li a.active {
        background: transparent;
    }
    #report {
        background-color: #eee;
    }
    label {
        font-size:18px;
    }
    input[type="checkbox"] {
        width: 15px;
        height: 15px;
        accent-color: lightblue;
    }
    .check-label {
        color:green;
        font-weight:400;
        margin-left: 14%;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"> 
                <h1 class="page-header"><i class="fa fa-file fa-fw"></i>Reports<span style="float:right;"></span></h1>
                <div id="flash-message" style="">
                    <?php echo $this->session->flashdata('msg'); ?>  
                </div>

                <!-- Show Mobile reports  -->
                <div class="panel panel-default mobiles">
                    <div class="panel-heading">Mobiles Reports</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-mobile">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl No.</th>
                                        <th class="text-center">Registered Date</th>
                                        <th class="text-center">Mobile Id</th>
                                        <th class="text-center">Company & Model</th>
                                        <th class="text-center">Android Version</th>
                                        <th class="text-center">IMEI Number</th>
                                        <th class="text-center">Facebook</th>
                                        <th class="text-center">Instagram</th>
                                        <th class="text-center">Twitter</th>
                                        <th class="text-center">YouTube</th>
                                        <th class="text-center">TikTok</th>
                                        <th class="text-center">WhatsApp</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    <tr class="filter-row">
                                        <th class="text-center"></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Registered Date..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Mobile Id..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Company & Model..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Android Version..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter IMEI Number..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Facebook..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Instagram..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Twitter..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter YouTube..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter TikTok..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter WhatsApp..."></th>
                                        <th class="text-center"><input type="text" class="mobile-filter-input" placeholder="Filter Status..."></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($fbAllMobiles as $r) {
                                        $status = ($r["status"] == 1) ? 'Active' : 'Inactive';
                                        $createdAt = date('d/m/Y H:i:s', strtotime($r['date_time']));
                                        echo "<tr>";
										echo "";
										echo "<td>" . ++$i . "</td>";
										echo "<td class='date_time'>" . $createdAt . "</td>";
										echo "<td class='id'>Mob" . $r["id"] ."</td>";
										echo "<td class='company_model'>" . $r["company_model"] . "</td>";
										echo "<td class='android_version'>" . $r["android_version"] . "</td>";
										echo "<td class='imei_number'>" . $r["imei_number"] . "</td>";
                                        echo "<td class='facebook'>0</td>";
                                        echo "<td class='instagram'>0</td>";
                                        echo "<td class='twitter'>0</td>";
                                        echo "<td class='youtube'>0</td>";
                                        echo "<td class='tiktok'>0</td>";
                                        echo "<td class='whatsapp'>0</td>";
                                        echo "<td class='status'>" . $status . "</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Show facebook account table reports  -->
                <div class="panel panel-default facebook_accounts">
                    <div class="panel-heading">Facebook Account Reports</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-account">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl No.</th>
                                    <th class="text-center">Registered Date</th>
                                    <th class="text-center">Account Code</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Profile Link</th>
                                    <th class="text-center">Account ID</th>
                                    <th class="text-center">Password</th>
                                    <th class="text-center">Mobile No.</th>
                                    <th class="text-center">Email ID</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Religion</th>
                                    <th class="text-center">Cast</th>
                                    <th class="text-center">DOB</th>
                                    <th class="text-center">Age</th>
                                    <th class="text-center">Location</th>
                                    <th class="text-center">City</th>
                                    <th class="text-center">State</th>
                                    <th class="text-center">Friends</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                <tr class="filter-row">
                                    <th class="text-center"></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Registered Date..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Account Code..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Name..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Profile Link..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Account ID..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Password..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Mobile No..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Email ID..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Gender..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Religion..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Cast..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter DOB..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Age..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Location..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter City..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter State..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Friends..."></th>
                                    <th class="text-center"><input type="text" class="account-filter-input" placeholder="Filter Status..."></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($fbAllAccounts as $r) {
                                    $status = ($r["status"] == 1) ? 'Active' : 'Inactive';
                                    $createdAt = date('d/m/Y H:i:s', strtotime($r['date_time']));
                                    echo "<tr>";
                                    echo "";
                                    echo "<td>" . ++$i . "</td>";
                                    echo "<td class='date_time'>" . $createdAt . "</td>";
                                    echo "<td class='id'>FB00" . $r["id"] ."</td>";
                                    echo "<td class='name'>" . $r["name"] . "</td>";
                                    echo "<td class='profile_link'>" . $r["profile_link"] . "</td>";
                                    echo "<td class='account_id'>" . $r["account_id"] . "</td>";
                                    echo "<td class='password'>" . $r["password"] . "</td>";
                                    echo "<td class='mobile'>" . $r["mobile"] . "</td>";
                                    echo "<td class='email'>" . $r["email"] . "</td>";
                                    echo "<td class='gender'>" . $r["gender"] . "</td>";
                                    echo "<td class='religion'>" . $r["religion"] . "</td>";
                                    echo "<td class='cast'>" . $r["cast"] . "</td>";
                                    echo "<td class='dob'>" . $r["dob"] . "</td>";
                                    echo "<td class='age'>" . $r["age"] . "</td>";
                                    echo "<td class='location'>" . $r["location"] . "</td>";
                                    echo "<td class='city'>" . $r["city"] . "</td>";
                                    echo "<td class='state'>" . $r["state"] . "</td>";
                                    echo "<td class='friends'>" . $r["friends"] . "</td>";
                                    echo "<td class='status'>" . $status . "</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <!-- Show facebook group table reports  -->
                <div class="panel panel-default facebook_groups">
                    <div class="panel-heading">Facebook Group Reports</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-group">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl No.</th>
                                    <th class="text-center">Registered Date</th>
                                    <th class="text-center">Facebook Id</th>
                                    <th class="text-center">Profile Name</th>
                                    <th class="text-center">Group Code</th>
                                    <th class="text-center">Group Name</th>
                                    <th class="text-center">Group Link</th>
                                    <th class="text-center">Group Category</th>
                                    <th class="text-center">Group Location</th>
                                    <th class="text-center">Group Members</th>
                                    <th class="text-center">Group Permissions</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                <tr class="filter-row">
                                    <th class="text-center"></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Registered Date..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Facebook Id..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Profile Name..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Code..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Name..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Link..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Category..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Location..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Members..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Group Permissions..."></th>
                                    <th class="text-center"><input type="text" class="group-filter-input" placeholder="Filter Status..."></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($fbAllGroups as $key => $r) {
                                    $status = ($r["status"] == 1) ? 'Active' : 'Inactive';
                                    $createdAt = date('d/m/Y H:i:s', strtotime($r['date_time']));
                                    echo "<tr>";
                                    echo "";
                                    echo "<td>" . ++$i . "</td>";
									echo "<td class='date_time'>" . $createdAt . "</td>";
                                    echo "<td class='fb_id'>FB00" . $r["fb_id"] . "</td>";
                                    echo "<td class='profile_name'>" . $r["profile_name"] . "</td>";
                                    echo "<td class='account_id'>FBG00" . $r["id"] ."</td>";
                                    echo "<td class='group_name'>" . $r["group_name"] . "</td>";
                                    echo "<td class='group_link'>" . $r["group_link"] . "</td>";
                                    echo "<td class='group_category'>" . $r["group_category"] . "</td>";
                                    echo "<td class='group_location'>" . $r["group_location"] . "</td>";
                                    echo "<td class='group_members'>" . $r["group_members"] . "</td>";
                                    echo "<td class='group_permissions'>" . $r["group_permissions"] . "</td>";
                                    echo "<td class='status'>" . $status . "</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>

                <!-- Show facebook page table reports  -->
                <div class="panel panel-default facebook_pages">
                    <div class="panel-heading">Facebook Page Reports</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-page">
                            <thead>
                                <tr>
                                    <th class="text-center">Sl No.</th>
                                    <th class="text-center">Registered Date</th>
                                    <th class="text-center">Facebook Id</th>
                                    <th class="text-center">Profile Name</th>
                                    <th class="text-center">Page Code</th>
                                    <th class="text-center">Page Name</th>
                                    <th class="text-center">Page Link</th>
                                    <th class="text-center">Page Category</th>
                                    <th class="text-center">Page Location</th>
                                    <th class="text-center">Page Followers</th>
                                    <th class="text-center">Page Permissions</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                <tr class="filter-row">
                                    <th class="text-center"></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Registered Date..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Facebook Id..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Profile Name..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Code..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Name..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Link..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Category..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Location..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Followers..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Page Permissions..."></th>
                                    <th class="text-center"><input type="text" class="page-filter-input" placeholder="Filter Status..."></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($fbAllPages as $r) {
                                    $status = ($r["status"] == 1) ? 'Active' : 'Inactive';
                                    $createdAt = date('d/m/Y H:i:s', strtotime($r['date_time']));
                                    echo "<tr>";
                                    echo "";
                                    echo "<td>" . ++$i . "</td>";
									echo "<td class='date_time'>" . $createdAt . "</td>";
                                    echo "<td class='fb_id'>FB00" . $r["fb_id"] . "</td>";
                                    echo "<td class='profile_name'>" . $r["profile_name"] . "</td>";
                                    echo "<td class='account_id'>FBP00" . $r["id"] ."</td>";
                                    echo "<td class='page_name'>" . $r["page_name"] . "</td>";
                                    echo "<td class='page_link'>" . $r["page_link"] . "</td>";
                                    echo "<td class='page_category'>" . $r["page_category"] . "</td>";
                                    echo "<td class='page_location'>" . $r["page_location"] . "</td>";
                                    echo "<td class='page_followers'>" . $r["page_followers"] . "</td>";
                                    echo "<td class='page_permissions'>" . $r["page_permissions"] . "</td>";
                                    echo "<td class='status'>" . $status . "</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                <!-- Show facebook task table reports  -->
                <div class="panel panel-default facebook_task">
                    <div class="panel-heading">Facebook Task Reports</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-task">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl No.</th>
                                        <th class="text-center">Created At</th>
                                        <th class="text-center">Task</th>
                                        <th class="text-center">Content</th>
                                        <th class="text-center">DM Message</th>
                                        <th class="text-center">File Image / Video</th>
                                        <th class="text-center">Wall</th>
                                        <th class="text-center">Story</th>
                                        <th class="text-center">Link</th>
                                        <th class="text-center">Views - Timing Range</th>
                                        <th class="text-center">Like Quantity</th>
                                        <th class="text-center">Share Quantity</th>
                                        <th class="text-center">Comment Quantity</th>
                                        <th class="text-center">Message Sending Quantity</th>
                                        <th class="text-center">Facebook Accounts</th>
                                        <th class="text-center">Facebook Groups</th>
                                        <th class="text-center">Facebook Pages</th>
                                        <th class="text-center">Publish / Schedule</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Work Completion</th>
                                    </tr>
                                    <tr class="filter-row">
                                        <th class="text-center"></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Created At..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Task..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Content..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter DM Message..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter File Image / Video..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Wall..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Story..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Link..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Views - Timing Range..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Like Quantity..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Share Quantity..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Comment Quantity..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Message Quantity..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Facebook Accounts..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Facebook Groups..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Facebook Pages..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Publish / Schedule..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Status..."></th>
                                        <th class="text-center"><input type="text" class="task-filter-input" placeholder="Filter Work Completion..."></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($fbAllTasks as $r) {
                                        $createdAt = date('d/m/Y H:i:s', strtotime($r['date_time']));
                                        echo "<tr>";
										echo "";
										echo "<td>" . ++$i . "</td>";
										echo "<td class='date_time'>" . $createdAt . "</td>";
										echo "<td class='task'>" . $r["task"] ."</td>";
										echo "<td class='content'>" . $r["content"] . "</td>";
										echo "<td class='content'>" . $r["message"] . "</td>";
										echo "<td class='file'><a href='" . base_url('assets/postingFiles/' . $r["file"]) . "' target='_blank' style='color:#428bca;'>" . $r["file"] . "</a></td>";
										echo "<td class='wall'>" . $r["wall"] . "</td>";
										echo "<td class='story'>" . $r["story"] . "</td>";
										echo "<td class='link'><a href='" . $r["link"] . "' target='_blank' style='color:#428bca;'>" . $r["link"] . "</a></td>";
										echo "<td class='view_timing'>" . $r["view_timing"] . "</td>";
										echo "<td class='like_qty'>" . $r["like_qty"] . "</td>";
										echo "<td class='share_qty'>" . $r["share_qty"] . "</td>";
										echo "<td class='comment_qty'>" . $r["comment_qty"] . "</td>";
										echo "<td class='message_qty'>" . $r["message_qty"] . "</td>";
										echo "<td class='accounts'>" . $r["accounts"] . "</td>";
										echo "<td class='groups'>" . $r["groups"] . "</td>";
										echo "<td class='pages'>" . $r["pages"] . "</td>";
										echo "<td class='task_schedule'>" . $r["task_schedule"] . "</td>";
										echo "<td class='status'>Pending</td>";
										echo "<td class='task_schedule'>20%</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    // Data table attributes for accounts
    $('#dataTables-mobile').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 12
        }],
        "ordering": false,
        buttons: true,
        "pageLength": 10,
        "text":['center'],
        "scrollX": true,
        "searching": false
    });

    // Data table attributes for accounts
    $('#dataTables-account').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 12
        }],
        "ordering": false,
        buttons: true,
        "pageLength": 10,
        "text":['center'],
        "scrollX": true,
        "searching": false
    });

    // Data table attributes for groups
    $('#dataTables-group').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 9
        }],
        "ordering": false,
        buttons: true,
        "pageLength": 10,
        "text":['center'],
        "scrollX": true,
        "searching": false
    });

    // Data table attributes for pages
    $('#dataTables-page').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 5
        }],
        "ordering": false,
        buttons: true,
        "pageLength": 10,
        "text":['center'],
        "scrollX": true,
        "searching": false
    });

        // Data table attributes for pages
        $('#dataTables-task').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 5
        }],
        "ordering": false,
        buttons: true,
        "pageLength": 10,
        "text":['center'],
        "scrollX": true,
        "searching": false
    });

    $(document).ready(function() {
        // Apply filter on mobile report
        $(".mobile-filter-input").on("keyup", function() {
            var filters = [];
            $(".mobile-filter-input").each(function() {
                filters.push($(this).val().toLowerCase());
            });
            $("#dataTables-mobile tbody tr").each(function() {
                var isVisible = true;
                $(this).children("td").each(function(index) {
                    if (index > 0) {
                        var filterValue = filters[index - 1];                        
                        if (filterValue && $(this).text().toLowerCase().indexOf(filterValue) === -1) {
                            isVisible = false;
                        }
                    }
                });
                $(this).toggle(isVisible);
            });
        });

        // Apply filter on facebook accounts
        $(".account-filter-input").on("keyup", function() {
            var filters = [];
            $(".account-filter-input").each(function() {
                filters.push($(this).val().toLowerCase());
            });
            $("#dataTables-account tbody tr").each(function() {
                var isVisible = true;
                $(this).children("td").each(function(index) {
                    if (index > 0) {
                        var filterValue = filters[index - 1];                        
                        if (filterValue && $(this).text().toLowerCase().indexOf(filterValue) === -1) {
                            isVisible = false;
                        }
                    }
                });
                $(this).toggle(isVisible);
            });
        });

        // Apply filter on facebook groups
        $(".group-filter-input").on("keyup", function() {
            var filters = [];
            $(".group-filter-input").each(function() {
                filters.push($(this).val().toLowerCase());
            });
            $("#dataTables-group tbody tr").each(function() {
                var isVisible = true;
                $(this).children("td").each(function(index) {
                    if (index > 0) {
                        var filterValue = filters[index - 1];                        
                        if (filterValue && $(this).text().toLowerCase().indexOf(filterValue) === -1) {
                            isVisible = false;
                        }
                    }
                });
                $(this).toggle(isVisible);
            });
        });

        // Apply filter on facebook pages
        $(".page-filter-input").on("keyup", function() {
            var filters = [];
            $(".page-filter-input").each(function() {
                filters.push($(this).val().toLowerCase());
            });
            $("#dataTables-page tbody tr").each(function() {
                var isVisible = true;
                $(this).children("td").each(function(index) {
                    if (index > 0) {
                        var filterValue = filters[index - 1];                        
                        if (filterValue && $(this).text().toLowerCase().indexOf(filterValue) === -1) {
                            isVisible = false;
                        }
                    }
                });
                $(this).toggle(isVisible);
            });
        });

        // Apply filter on facebook pages
        $(".task-filter-input").on("keyup", function() {
            var filters = [];
            $(".task-filter-input").each(function() {
                filters.push($(this).val().toLowerCase());
            });
            $("#dataTables-task tbody tr").each(function() {
                var isVisible = true;
                $(this).children("td").each(function(index) {
                    if (index > 0) {
                        var filterValue = filters[index - 1];                        
                        if (filterValue && $(this).text().toLowerCase().indexOf(filterValue) === -1) {
                            isVisible = false;
                        }
                    }
                });
                $(this).toggle(isVisible);
            });
        });
    });
</script>