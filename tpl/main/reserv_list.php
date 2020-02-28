
<!-- bootstrap-datepickerを読み込む -->
<script type="text/javascript" src="/HEW/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="/HEW/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css">
<script type="text/javascript" src="/HEW/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/HEW/bootstrap-datepicker-1.9.0-dist/locales/bootstrap-datepicker.ja.min.js"></script>
<html>
    <body>
<h1>予約画面</h1>

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
 
<!-- bootstrap-datepickerのjavascriptコード -->
<script>
    $('#date_sample').datepicker({
        // langage:'ja'
        format: 'yyyy/mm/dd'
    });
</script>
</body>
</html>