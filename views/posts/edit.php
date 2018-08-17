<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/header.php'; ?>
            <div class="col-md-10">
                <div class="row">
                  <?php
                      $id = '';
                      if ( isset($_GET['id']) ){
                          $id = $_GET['id'];
                      }
                      $objPost = new Posts;
                      $singlePost = $objPost->show($id);
                      $post = mysqli_fetch_assoc($singlePost);
                  ?>
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Edit post</div>

                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post">
                                    <input class="form-control" value="<?php echo $post['id'] ?>" required name="id" type="hidden">
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" value="<?php echo $post['title'] ?>" required name="title" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" required rows="5" name="content"><?php echo $post['content'] ?></textarea>
                                        </div>
                                    </fieldset>
                                    <div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                <?php
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                        $m_post = new Posts;
                                        echo $m_post->update($_POST);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/views/include/footer.php'; ?>
