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
                                            <input class="form-control" name="username" placeholder="Username" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" placeholder="Password" type="password">
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
                                        <div class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-6">
                      <div class="content-box-large">
                          <div class="panel-heading">
                              <div class="panel-title">List Users</div>

                              <div class="panel-options">
                                  <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                  <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                              </div>
                          </div>
                          <div class="panel-body">
                              <table class="table table-striped">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Full Name</th>
                                          <th>Permission</th>
                                          <th>Username</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Bill Gates</td>
                                          <td>Administrator</td>
                                          <td>@billgate</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/footer.php'; ?>
