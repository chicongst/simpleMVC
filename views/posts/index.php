<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/header.php'; ?>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Add post</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" required name="title" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" required rows="5" name="content"></textarea>
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
          				                  <th>Title</th>
          				                  <th>Content</th>
          				                </tr>
          				              </thead>
          				              <tbody>
                                  <?php
                                      $objPost  = new Posts;
                                      $getPosts = $objPost->all();
                                      while( $posts = mysqli_fetch_assoc($getPosts) ){
                                  ?>
          				                <tr>
                                      <td><?php echo $posts['id'] ?></td>
                                      <td><?php echo $posts['title'] ?></td>
                                      <td><?php echo $posts['content'] ?></td>
          				                </tr>
                                  <?php } ?>
          				              </tbody>
          				            </table>
          		  				</div>
          		  			</div>
            				</div>
                  <?php
                      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          require_once $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/Posts.php';
                          $user = new Posts;
                          echo $user->create($_POST);
                      }
                  ?>
                </div>
            </div>
        </div>
    </div>
<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/footer.php'; ?>
