<div class="content">
        <div class="container-fluid">
          <!-- モーダル -->
          <?php if($modalParam){ ?>
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <!-- 追加するか確認 -->
                <?php if($modalParam == 'create'){ ?>
                  <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">登録確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ID：<?php echo $id; ?>、時間：<?php echo $_POST['minute']; ?>で登録してよろしいですか？
                  </div>
                  <div class="modal-footer">
                    <form action="" method="post">
                      <button type="submit" class="btn btn-primary" name="confirmCreate" value="yes">はい</button>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <input type="hidden" name="minute" value="<?php echo $_POST['minute']; ?>">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                  </div>
                <?php } ?>
                <!-- 変更するか確認 -->
                <?php if($modalParam == 'update'){ ?>
                  <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">変更確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ID：<?php echo $id; ?>、時間：<?php echo $_POST['minute']; ?>に変更してよろしいですか？
                  </div>
                  <div class="modal-footer">
                    <form action="" method="post">
                      <button type="submit" class="btn btn-primary" name="confirmUpdate" value="yes">はい</button>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <input type="hidden" name="currentId" value="<?php echo $currentId; ?>">
                      <input type="hidden" name="minute" value="<?php echo $_POST['minute']; ?>">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                  </div>
                <?php } ?>
                <!-- IDを一つずつずらすか確認 -->
                <?php if($modalParam == 'same id'){ ?>
                  <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">＜注意＞同じ値のIDが既に存在します。</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    この値以降のIDを一つずつ後ろにずらして登録しますか？
                  </div>
                  <div class="modal-footer">
                    <form action="" method="post">
                      <button type="submit" class="btn btn-primary" name="confirmShift" value="yes">はい</button>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <input type="hidden" name="minute" value="<?php echo $_POST['minute']; ?>">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                  </div>
                <?php } ?>
                <!-- 削除するか確認 -->
                <?php if($modalParam == 'delete'){ ?>
                  <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">削除確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ID：<?php echo $id; ?>、時間：<?php echo $_POST['minute']; ?>のレコードを削除してよろしいですか？
                  </div>
                  <div class="modal-footer">
                    <form action="" method="post">
                      <button type="submit" class="btn btn-primary" name="confirmDelete" value="yes">はい</button>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">いいえ</button>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
          <?php } ?>

          <!-- テーブル -->
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
                              <button type="submit" name="create" class="btn btn-primary" data-toggle="modal" data-target="#createModal" value="yes">追加</button>
                              </div>
                            </td>
                          </form>
                        </tr>
                        <?php foreach($result as $array){ ?>
                        <tr>
                          <form action="" method="post">
                            <td>
                              <div class="form-group">
                                <input type="text" class="form-control" name="id" value="<?php echo $array['id']; ?>">
                                <input type="hidden" name="currentId" value="<?php echo $array['id']; ?>">
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <input type="text" class="form-control" name="minute" value="<?php echo $array['minute']; ?>">
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                              <button type="submit" name="update" value="yes">変更</button>
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                              <button type="submit" name="delete" value="yes">削除</button>
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