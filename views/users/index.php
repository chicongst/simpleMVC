<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/header.php'; ?>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Add user</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" required name="username" placeholder="Username" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" required name="password" placeholder="Password" type="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Full name</label>
                                            <input class="form-control" name="fullname" placeholder="Full Name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Permission</label>
                                            <select class="form-control" name="role">
                                              <option value="1">Full Control</option>
                                              <option value="0">Read Only</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
              					<div class="content-box-large">
            		  				<div class="panel-heading">
            							<div class="panel-title">Posts</div>

            							<div class="panel-options">
            								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            							</div>
            						</div>
            		  				<div class="panel-body">
            		  					<table class="table">
            				              <thead>
            				                <tr>
            				                  <th>#</th>
            				                  <th>Username</th>
            				                  <th>Fullname</th>
            				                </tr>
            				              </thead>
            				              <tbody>
                                    <?php
                                        $objUser  = new Users;
                                        $getUsers = $objUser->all();
                                        while( $users = mysqli_fetch_assoc($getUsers) ){
                                    ?>
            				                <tr>
                                        <td><?php echo $users['id'] ?></td>
                                        <td><?php echo $users['username'] ?></td>
                                        <td><?php echo $users['fullname'] ?></td>
                                        <!--
                                        <td>
                                            <a href="/views/users/edit.php?id=<?php echo $users['id'] ?>"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="/views/users/delete.php?id=<?php echo $users['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                        -->
            				                </tr>
                                    <?php } ?>
            				              </tbody>
            				            </table>
            		  				</div>
            		  			</div>
              				</div>
                  </div>
                  <?php
                      if (isset($_SESSION['message'])) {
                          echo "<p style='red'>" . $_SESSION['message'] . " </p>";
                          unset($_SESSION['message']);
                      }
                      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/Users.php';
                          $user = new Users;
                          echo $user->create($_POST);
                      }
                  ?>
            </div>
        </div>
    </div>
<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/footer.php'; ?>
