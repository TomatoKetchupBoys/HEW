      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ログイン画面</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">管理者ID</label>
                          <input type="text" class="form-control" name="id">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">パスワード</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="token" value="<?php echo h(generate_token()) ?>">
                    <button type="submit" class="btn btn-primary pull-right">ログイン</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>