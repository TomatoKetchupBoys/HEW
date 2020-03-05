<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">基準時間テーブル</h4>
                  <p class="card-category">table name : refarence_time</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          id
                        </th>
                        <th>
                          時間(minute)
                        </th>
                        <th>
                          レコード操作
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <form action="" method="post">
                            <td>
                              <div class="form-group">
                                <label class="bmd-label-floating">id</label>
                                <input type="text" class="form-control" name="id">
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <label class="bmd-label-floating">時間</label>
                                <input type="text" class="form-control" name="minute">
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="form-group">
                              <button type="submit" name="create">追加</button>
                              </div>
                            </td>
                            <!-- <input type="hidden" name="token" value="<?php echo h(generate_token()) ?>">
                            <button type="submit" class="btn btn-primary pull-right">ログイン</button>
                            <div class="clearfix"></div> -->
                          </form>
                        </tr>
                        <?php foreach($result as $array){ ?>
                        <tr>
                          <form action="" method="post">
                            <td>
                              <div class="form-group">
                                <input type="text" class="form-control" name="id" value="<?php echo $array['id']; ?>">
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <input type="text" class="form-control" name="minute" value="<?php echo $array['minute']; ?>">
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                              <button type="submit" name="update">変更</button>
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                              <button type="submit" name="delete">削除</button>
                              </div>
                            </td>
                          </form>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>