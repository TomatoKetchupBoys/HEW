        <!-- 予約があるときと無いときで場合分け -->
        <!-- 予約がある場合 -->
        <div id="cardArea">
            <article>
                <section class="front">
                    <h2>直近の予約</h2>
                    <hr>
                    <ul>
                        <li>＄駐車場名</li>
                        <li>＄住所</li>
                        <li>＄利用開始時間<br>
                        <span>…</span><br>
                        ＄利用終了時間</li>
                        <li>次の予約時間まで<br>
                        あと<span>＄利用開始までの時間　＋　分</span><br>
                    です</li>
                    </ul>
                </section>
                <section class="back">
                    <table>
                        <tr>
                            <th>現在の利用料金</th>
                            <td>＄現在の利用料金</td>
                        </tr>
                        <tr>
                            <th>値上がりまでの時間</th>
                            <td>あと＄分（＋＄円）</td>
                        </tr>
                        <tr>
                            <td><button tyoe="button" name="displayQr">支払い</button></td>
                        </tr>
                    </table>
                    <div>QR画像表示</div>
                </section>
            </article>
            <article>
                <section>
                    <h2>直近の予約</h2>
                    <hr>
                    <ul>
                        <li>＄駐車場名</li>
                        <li>＄住所</li>
                        <li>＄利用開始時間<br>
                        <span>…</span><br>
                        ＄利用終了時間</li>
                        <li>次の予約時間まで<br>
                        あと<span>＄利用開始までの時間　＋　分</span><br>
                    です</li>
                    </ul>
                </section>
                <section class="back">
                    <div>QR画像表示</div>
                </section>
            </article>
        </div>
        <!-- 予約がない場合 -->