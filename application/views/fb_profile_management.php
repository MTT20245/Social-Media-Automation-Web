<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
    .sidebar ul li a.active {
        background: transparent;
    }
    #facebook_management {
        background-color: #eee;
    }
    .year-filter-container {
        text-align: right;
        margin-bottom: 10px;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"> 
                <h1 class="page-header"><i class="fa fa-facebook fa-fw"></i>Profile Management<span style="float:right;"><button class="btn btn-outline btn-primary add_new">Add Facebook Profile</button></span></h1>
                <div id="flash-message" style="">
                    <?php echo $this->session->flashdata('msg'); ?>  
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"></h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger alert-dismissable error1" style="display:none;"></div>

                                <?php $data = array('role' => 'form');
                                echo form_open_multipart("home/add_update_facebook_page", $data); ?>

                                <div class="form-group">
                                    <label>Select Profile Id<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <select name="account_id" id="account_id" class="form-control account_id" required>
                                        <option Selected value="">Select Account Id</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Profile Name<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <select name="account_name" id="account_name" class="form-control account_name" required>
                                        <option Selected value="">Select Account Name</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Gender<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <select name="gender" id="gender" class="form-control gender" required>
                                        <option Selected value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
									<label>Enter Religion<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" id="religion" name="religion" class="form-control religion" placeholder="Enter Religion" required>
								</div>

                                <div class="form-group">
									<label>Enter Location<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" name="location" id="location" class="form-control location" placeholder="Enter Location" required>
								</div>

                                <div class="form-group">
									<label>Enter State<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" name="state" id="state" class="form-control state" placeholder="Enter State" required>
								</div>

                                <div class="form-group">
									<label>Enter B'day Wish<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" id="birthday_wish" name="birthday_wish" class="form-control birthday_wish" placeholder="Enter B'day Wish" required>
								</div>
                                
                                <div class="form-group">
                                    <label>Enter Notification<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <input type="text" name="notification" id="notification" class="form-control notification" placeholder="Enter Notification" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Reel link<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <input type="text" name="reel_link" id="reel_link" class="form-control reel_link" placeholder="Enter Reel Link" required>
                                </div>


                                <div class="form-group">
									<label>Enter Video Link<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" name="video_link" id="video_link" class="form-control video_link" placeholder="Enter Video Link" required>
								</div>

                                <div class="form-group">
									<label>Enter Event<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" name="event" id="event" class="form-control event" placeholder="Enter Event" required>
								</div>

                                <div class="form-group">
									<label>Enter Home Time Limit<span style="color:#FF0000;"><sup>*</sup></span></label>
									<input type="text" name="home_time_limit" id="home_time_limit" class="form-control home_time_limit" placeholder="Enter Page Location" required>
								</div>

                                <div class="form-group">
                                    <label>Select Status<span style="color:#FF0000;"><sup>*</sup></span></label>
                                    <select name="status" id="status" class="form-control status">
                                        <option Selected value="">Select Status</option>
                                        <option value="1">Running</option>
                                        <option value="0">Pending</option>
                                        <option value="0">Completed</option>
                                    </select>
                                </div>

                                <input type="hidden" name="sav-typ" class="sav-typ" value="">
                                <input type="hidden" name="id" class="id">
                            </div>

                            <div class="modal-footer">
                                <input type="submit" name="submit" class="btn btn-primary sav-chng" />
                            </div>
                            <?php echo form_close();  ?>
                        </div>
                    </div>
                </div>
                <!-- model end -->

                <!-- Show table list  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Facebook Profile List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <!-- Year wise table data filtering -->
                            <div class="year-filter-container">
                                <label for="yearFilter">Filter by Year:</label>
                                <select id="yearFilter">
                                    <option value="">All</option>
                                    <?php 
                                        $years = []; 
                                        foreach ($result as $r) {
                                            $year = substr($r["last_date"], 0, 4);
                                            $years[] = $year;
                                        }
                                        $uniqueYears = array_unique($years);
                                        foreach($uniqueYears as $year) {
                                            echo '<option value="'.$year.'">'.$year.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <table class="table table-striped table-bordered table-hover dt-responsive text-center" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl No.</th>
                                        <th class="text-center">Last Updated Date</th>
                                        <th class="text-center">Account Id</th>
                                        <th class="text-center">Account Name</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Religion</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">State</th>
                                        <th class="text-center">B'day Wish</th>
                                        <th class="text-center">Notification</th>
                                        <th class="text-center">Reel Link</th>
                                        <th class="text-center">Video Link</th>
                                        <th class="text-center">Event</th>
                                        <th class="text-center">Home Time Limit</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($result as $r) {
                                        $lastDate = date('d/m/Y H:i:s', strtotime($r['last_date']));
                                        echo "<tr>";
										echo "";
										echo "<td>" . ++$i . "</td>";
										echo "<td class='last_date'>" . $lastDate . "</td>";
										echo "<td class='account_id'>" . $r["account_id"] . "</td>";
										echo "<td class='account_name'>" . $r["account_name"] ."</td>";
										echo "<td class='gender'>" . $r["gender"] . "</td>";
										echo "<td class='religion'>" . $r["religion"] . "</td>";
										echo "<td class='location'>" . $r["location"] . "</td>";
										echo "<td class='state'>" . $r["state"] . "</td>";
										echo "<td class='birthday_wish'>" . $r["birthday_wish"] . "</td>";
										echo "<td class='notification'>" . $r["notification"] . "</td>";
										echo "<td class='reel_link'>" . $r["reel_link"] . "</td>";
										echo "<td class='video_link'>" . $r["video_link"] . "</td>";
										echo "<td class='event'>" . $r["event"] . "</td>";
										echo "<td class='home_time_limit'>" . $r["home_time_limit"] . "</td>";
                                        echo "<td class='status'>" . $r["status"] . "</td>";
										echo "<td><a class=\"fa fa-pencil fa-fw editcap\" id='{$r['id']}' href='#'></a>&nbsp;&nbsp;&nbsp;<a class=\"fa fa-trash-o fa-fw delcap\" href='#' id='{$r['id']}'></a></td></tr>";
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

</div>

<script>
    // Data table attributes
    $('#dataTables-example').dataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf'],
        columnDefs: [{
            width: 'auto',
            targets: 12
        }],
        "ordering": true,
        buttons: true,
        "pageLength": 15,
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "text":['center'],
        "scrollX": true
    });

    // Delete the facebook profile
    $(".delcap").on('click', function() {
        var uid = $(this).attr('id');
        $.confirm({
            text: "Are you sure you want to delete this facebook page?",
            confirm: function(button) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "home/delete_facebook_page/"; ?>" + uid,
                    success: function(data) {
                        if (data == '1') {
                            document.location.href = '<?php echo base_url() . "home/fb_page_management"; ?>';
                        } else {
                            document.location.href = '<?php echo base_url() . "home/fb_page_management"; ?>';
                        }
                    }
                });
            },
            cancel: function(button) {
                return false;
            }
        });
    });

    // Edit the facebook profile details
    $('a.editcap').on('click', function() {
        $('#status').closest('.form-group').show();
		var myModal = $('#myModal');
		// Now get the values from the table
		var id = $(this).attr('id');
		var profile_id = $(this).closest('tr').find('td.profile_id').html();
		var profile_name = $(this).closest('tr').find('td.profile_name').html();
		var account_id = $(this).closest('tr').find('td.account_id').html();
		var page_name = $(this).closest('tr').find('td.page_name').html();
		var page_link = $(this).closest('tr').find('td.page_link').html();
		var page_category = $(this).closest('tr').find('td.page_category').html();
		var page_location = $(this).closest('tr').find('td.page_location').html();
		var page_followers = $(this).closest('tr').find('td.page_followers').html();
		var page_permissions = $(this).closest('tr').find('td.page_permissions').html();
		var status = $(this).closest('tr').find('td.status').html();
        var statusValue = (status === "Active") ? "1" : "0";
        // Set them in the modal
		$('.profile_id', myModal).val(profile_id);
		$('.profile_name', myModal).val(profile_name);
		$('.account_id', myModal).val(account_id);
		$('.page_name', myModal).val(page_name);
		$('.page_link', myModal).val(page_link);
		$('.page_category', myModal).val(page_category);
		$('.page_location', myModal).val(page_location);
		$('.page_followers', myModal).val(page_followers);
		$('.page_permissions', myModal).val(page_permissions);
		$('.status', myModal).val(statusValue);
		$('.sav-typ', myModal).val('edit');
		$('.id', myModal).val(id);
		$(".error1", myModal).css("display", "none");
		$("#myModalLabel").text("Edit Facebook Page Details");

		// Show the modal
		myModal.modal({
			show: true
		});

		return false;
	});

    // Add new facebook profile
    $('button.add_new').on('click', function() {
        $('#status').closest('.form-group').hide();
        var myModal1 = $('#myModal');
        $('.profile_id', myModal).val('');
		$('.profile_name', myModal).val('');
		$('.account_id', myModal).val('');
		$('.page_name', myModal).val('');
		$('.page_link', myModal).val('');
		$('.page_category', myModal).val('');
		$('.page_location', myModal).val('');
		$('.page_followers', myModal).val('');
		$('.page_permissions', myModal).val('');
		$('.status', myModal).val('');
        $('.id', myModal1).val('0');
        $('.sav-typ', myModal1).val('new');
        $(".error1", myModal1).css("display", "none");
        myModal1.modal({
            show: true
        });
        $("#myModalLabel").text("Add Facebook Page Details");
        return false;
    });

    $(document).ready(function(){
        // Show facebook account id
        $('#profile_id').select2({
            placeholder: "Select Profile Id",
            allowClear: true,
            width: '100%',
            dropdownParent: $('#profile_id').parent(),
            ajax: {
                url: '<?php echo base_url(); ?>home/fetch_all_facebook_account_details',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                id: item.account_id,
                                text: item.account_id 
                            };
                        })
                    };
                },
                cache: true
            }
        });

        // Show facebook profile name
        $('#profile_name').select2({
            placeholder: "Select Profile Name",
            allowClear: true,
            width: '100%',
            dropdownParent: $('#profile_id').parent(),
            ajax: {
                url: '<?php echo base_url(); ?>home/fetch_all_facebook_account_details',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: params.term
                    };
                },
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                id: item.name, 
                                text: item.name
                            };
                        })
                    };
                },
                cache: true
            }
        });

        $('.account-select').select2({
            placeholder: "Select Profile Name",
            allowClear: true
        });

        // Outside the modal not clickable 
        $('#myModal').modal({
        backdrop: 'static',
        keyboard: false,
        show: false
        });

        // Year wise filtering
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var selectedYear = $('#yearFilter').val(); 
                var dateTime = data[1];
                if (!dateTime) return false;
                
                var year = dateTime.substring(6, 10);
                // Compare the extracted year with the selected year
                if (selectedYear === "" || year === selectedYear) {
                    return true;
                }
                return false;
            }
        );
        var table = $('#dataTables-example').DataTable();
        // Event listener to the year filter dropdown
        $('#yearFilter').on('change', function() {
            table.draw();
        });
    });
</script>

</body>
</html>