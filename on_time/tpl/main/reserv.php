<br><br><br><br><br><br><br><br>
<!-- bootstrap-datepickerを読み込む -->
<link rel="stylesheet" type="text/css" href="/HEW/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css">
<script type="text/javascript" src="/HEW/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/HEW/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/HEW/bootstrap-datepicker-1.9.0-dist/locales/bootstrap-datepicker.ja.min.js"></script>

    <!-- bootstrap-datepickerのjavascriptコード -->
<script>
    $('#date_sample').datepicker({
        language:'ja'
    });
</script>

<div id="reserv">

    <h1>予約画面</h1>
    <div class="prefectures">

        <h3>・駐車場の住所</h3>

    <form id="search_result">
        <select name="prefectures">
        <option value="都道府県">都道府県</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
        </select>

        <input type="text" placeholder="市区町村">

    </div>

    <div class="time">
        <h3>予約日時・時間</h3>

        <div class="container">
            <div class="row mt-4">
                <div class="col-2">
                    <label>日付：</label>
                </div>
                <div class="col-5">
                    <!-- ここにカレンダー表示用のテキストボックスを追加 -->
                    <input type="text" class="form-control" id="date_sample">

                </div>
            </div>
        </div>

        <p><select name="start_time">
        <option value="">時間を指定</option>
        <option value="1:">1時</option>
        <option value="2:">2時</option>
        <option value="3:">3時</option>
        <option value="4:">4時</option>
        <option value="5:">5時</option>
        <option value="6:">6時</option>
        <option value="7:">7時</option>
        <option value="8:">8時</option>
        <option value="9:">9時</option>
        <option value="10:">10時</option>
        <option value="11:">11時</option>
        <option value="12:">12時</option>
        <option value="13:">13時</option>
        <option value="14:">14時</option>
        <option value="15:">15時</option>
        <option value="16:">16時</option>
        <option value="17:">17時</option>
        <option value="18:">18時</option>
        <option value="19:">19時</option>
        <option value="20:">20時</option>
        <option value="21:">21時</option>
        <option value="22:">22時</option>
        <option value="23:">23時</option>
        <option value="24:">24時</option>
        </select>

        <select name="start_time">
        <option value="">分を指定</option>
        <option value="0">0分</option>
        <option value="5">5分</option>
        <option value="10">10分</option>
        <option value="15">15分</option>
        <option value="20">20分</option>
        <option value="25">25分</option>
        <option value="30">30分</option>
        <option value="35">35分</option>
        <option value="40">40分</option>
        <option value="45">45分</option>
        <option value="50">50分</option>
        <option value="55">55分</option>
        </select>

        〜

        <select name="end_time">
        <option value="">時間を指定</option>
        <option value="1:">1時</option>
        <option value="2:">2時</option>
        <option value="3:">3時</option>
        <option value="4:">4時</option>
        <option value="5:">5時</option>
        <option value="6:">6時</option>
        <option value="7:">7時</option>
        <option value="8:">8時</option>
        <option value="9:">9時</option>
        <option value="10:">10時</option>
        <option value="11:">11時</option>
        <option value="12:">12時</option>
        <option value="13:">13時</option>
        <option value="14:">14時</option>
        <option value="15:">15時</option>
        <option value="16:">16時</option>
        <option value="17:">17時</option>
        <option value="18:">18時</option>
        <option value="19:">19時</option>
        <option value="20:">20時</option>
        <option value="21:">21時</option>
        <option value="22:">22時</option>
        <option value="23:">23時</option>
        <option value="24:">24時</option>
        </select>

        <select name="end_time">
        <option value="">分を指定</option>
        <option value="0">0分</option>
        <option value="5">5分</option>
        <option value="10">10分</option>
        <option value="15">15分</option>
        <option value="20">20分</option>
        <option value="25">25分</option>
        <option value="30">30分</option>
        <option value="35">35分</option>
        <option value="40">40分</option>
        <option value="45">45分</option>
        <option value="50">50分</option>
        <option value="55">55分</option>
        </select></p>

        <button class="search">検索</button>

    </form>
    </div>
</div>