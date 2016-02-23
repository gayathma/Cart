<div class="row">
    <div class="col-sm-12">
        <div>
            <header class="panel-heading" style="padding:0;margin:0;">
                <div class="col-md-4" style="padding:0;margin:0;"><a
                    href="<?php echo site_url(); ?>/login/load_login"><i
                    class="fa fa-arrow-left"></i>Workspace</a></div>

                    <div class="col-md-4" style="text-align: CENTER;margin-bottom: 40px !important;">

                    </div>
                    <div class="col-md-4 rl" style="padding:0;margin:0;"><i
                        class="fa fa-user"></i>User Accounts
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 bk">
            <div class="panel">
                <div class="panel-body large">
                    <div class="adv-table">
                        <table class="display table table-bordered table-striped" id="user_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>User Type</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($results as $result) {
                                    ?>
                                    <tr id="usr_<?php echo $result->UserID; ?>">
                                        <td><?php echo ++$i; ?></td>
                                        <td><?php echo $result->FirstName.' '.$result->LastName; ?></td>
                                        <td>
                                            <?php if ($result->UserID == '1') { ?>
                                            <span class="label label-primary">Admin</span>
                                            <?php
                                        }
                                        ?>

                                    </td>
                                    <td><?php echo $result->Email; ?></td>
                                    <td><?php echo $result->Address; ?></td>
                                    <td><?php echo $result->City; ?></td>

                                    <td align="center">
                                        <?php if ($result->UserID != $this->session->userdata('USER_ID')) { ?>
                                        <a class="bt"
                                        onclick="delete_user(<?php echo $result->UserID; ?>)"><i
                                        class="fa fa-trash-o " title="" title="Remove"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $(document).ready(function () {

        $('#user_table').dataTable();

    });


    //delete user
    function delete_user(id) {

        swal({
            title: "Are you sure?",
            text: "You want to delete this User?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1abc9c",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function () {

            $.ajax({
                type: "POST",
                url: site_url + '/users/delete_users',
                data: "id=" + id,
                success: function (msg) {
                    if (msg == 1) {
                        $('#usr_' + id).hide();
                        swal("Deleted!", "Your user has been deleted.", "success");
                    }
                    else if (msg == 2) {
                        swal("Error!", "Cannot be deleted as it is already assigned.", "error");
                    }
                }
            });
        });
    }
    </script>
