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
                          時間(time)
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($result as $array){ ?>
                        <tr>
                          <td>
                            <?php echo $array['id']; ?>
                          </td>
                          <td>
                            <?php echo $array['minute']; ?>
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
        </div>
      </div>