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
                <h1 class="page-header"><i class="fa fa-facebook fa-fw"></i>Task Management<span style="float:right;"><button class="btn btn-outline btn-primary" onclick="addFbTask();">Add Facebook Task</button></span></h1>
                <div id="flash-message" style="">
                    <?php echo $this->session->flashdata('msg'); ?>  
                </div>

                <!-- Show table list  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Facebook Task List
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
                                            $year = substr($r["date_time"], 0, 4);
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
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($result as $r) {
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

    function addFbTask() {
        window.location.href = '<?php echo base_url()."home/addFacebookTask"?>';
    }
    
    $(document).ready(function(){
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