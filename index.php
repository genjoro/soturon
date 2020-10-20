<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>soturon</title>
    <link rel="stylesheet"  type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body>
    <?php

    $user_ip = $_SERVER['REMOTE_ADDR'];

    //ユーザーが閲覧したページのURL
    $access_url = $_SERVER['REQUEST_URI'];

    //参照元
    $referer = $_SERVER['HTTP_REFERER'];

    //ユーザーエージェント
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    //アクセス時間
    $access_time = date("Y-m-d,H:i:s");
        //アクセス時間「$access_time」から日付と時間を取得
        $array_access_time = explode(",", $access_time);
            //$array_access_time[0]：日付
            //$array_access_time[1]：時間

/*** 取得した情報をファイルに記録する ***/
    //取得した情報を記録するファイルの指定
    $file_name = $array_access_time[0] . ".txt";

    //ファイルに記録する情報の整理（カンマ「,」で区切る）
    $log_contents =  $array_access_time[1] . "," . $user_ip . "," . $access_url . "," . $referer . "," . $user_agent . "\r\n";

    //ファイルハンドラ生成
    $log_file = fopen($file_name, "a");

    //ファイルのロック
    flock($log_file, LOCK_EX);

    //ファイルへの書き込み
    fputs($log_file, $log_contents);

    //ファイルを閉じる
    flock($log_file, LOCK_UN);
    fclose($log_file);

?>
  <div id="wrapper">
    <ul id="point">
      <li id="KeyAll">全一覧</li>
      <!--<li id="KeyOne">片手でサイン</li>-->
      <!--<li id="KeyTow">両手でサイン</li>-->
      <li id="KeyMawasu">手を回す</li>
      <li id="KeyAsi">足を使う</li>
      <li id="KeyZengokatate">片手を前後</li>
      <li id="KeySayuukatate">片手を左右</li>
      <li id="KeyJougekatate">片手を上下</li>
      <li id="KeyZengoryoute">両手を前後</li>
      <li id="KeySayuuryoute">両手を左右</li>
      <li id="Keyjougeryoute">両手を上下</li>


    </ul>
    <div id="hansoku">
      <img class="one all sayuukatate" src="nokkuon3.gif">
      <!--<div class="one all">ノックオンまたはインテンショナルノックオン</div> ntt、九州　公式-->
      <img class="one all sayuukatate" src="anpureaburu.gif">
      <!--<div class="one all">アンプレアブル（ラック、タックル）</div> 公式-->
      <img class="one all mawasu" src="sukuramuhoi-ru.gif">
      <!--<div class="one all">スクラムホイール</div> ntt　公式-->
      <img class="one all zengokatate" src="nottosutore-to.gif">
      <!--<div class="one all">ノットストレート（ラインアウト）</div> 九州　ntt 公式-->
      <img class="tow all zengoryoute" src="pairuappu.png">
      <!--<div class="one all">パイルアップ（インゴール）</div> 公式-->
      <img class="one all asi" src="futtoappu.gif">
      <!--<div class="one all">フットアップ</div> 公式-->
      <img class="one all mawasu" src="nottoro-ruawei.gif">
      <!--<div class="one all">ノットロールアウェイ</div> ntt、九州　公式-->
      <img class="one all jougekatate sayuukatate" src="o-ba-zatoppu.gif">
      <!--<div class="one all">オーバーザットップ</div> ntt、九州　公式-->
      <img class="one all jougekatate sayuukatate" src="daivuin.gif">
      <!--<div class="one all">ダイブイン</div> 九州　公式-->
      <img class="one all sayuukatate" src="ofusaide.gif">
      <!--<div class="one all">オフサイド</div> ntt、九州　公式-->
      <img class="one all sayuukatate zengokatate" src="obuzage-to.gif">
      <!--<div class="one all">オブザゲート</div> 九州-->
      <img class="one all mawasu" src="rakkuofusaido.gif">
      <!--<div class="one all">オフサイド（ラック、モール）</div> ntt、九州　公式-->
      <img class="one all zengokatate" src="hando.gif">
      <!--<div class="one all">ハンド</div>< ntt　公式-->
      <img class="one all zengokatate" src="haitakkuru.gif">
      <!--<div class="one all">ハイタックル</div><! ntt、九州　公式-->
      <img class="one all jougekatate" src="sukuramukorapusingu.gif">
      <!--<div class="one all">コラプシング（スクラム）</div> ntt-->
      <img class="one all KeyZengokatate" src="frontohikitaosi.gif">
      <!--<div class="one all">フロントローの引き倒し</div> 公式-->
      <img class="one all sayuukatate" src="ba-zinngu.gif">
      <!--<div class="one all">バージング</div>公式-->
      <img class="one all sayuukatate" src="rainautoyorikakari.gif">
      <!--<div class="one all">ラインアウトでの寄りかかり</div> 公式-->
      <img class="tow all zengoryoute" src="rainautotaosi.gif">
      <!--<div class="one all">ラインアウトで相手を押す（バージング？）</div> 公式-->
      <img class="one all asi" src="sutanpingu.gif">
      <!--<div class="one all">スタンピング</div> 公式-->
      <img class="tow all jougeryoute sayuuryoute" src="suro-fulowa-do.gif">
      <!--<div class="tow all">スローフォワード</div> ntt、九州　公式-->
      <img class="tow all sayuuryoute" src="mo-ruanpureaburu.gif">
      <!--<div class="tow all">モールアンプレアブル</div>公式-->
      <img class="tow all sayuuryoute jougeryoute" src="sukuramunottosutore-to.gif">
      <!--<div class="tow all">ノットストレート（スクラム）</div>公式-->
      <img class="tow all sayuuryoute" src="obusutorakusyon.gif">
      <!--<div class="tow all">オブストラクション</div> ntt、九州-->
      <img class="tow all jougeryoute" src="nottoriri-su.gif">
      <!--<div class="tow all">ノットリリースザボール</div> ntt、九州　公式-->
      <img class="tow all zengoryoute" src="no-baindo.gif">
      <!--<div class="tow all">ノーバインド</div> 九州　公式-->
      <img class="tow all jougeryoute sayuuryoute" src="rakkukorapusinngu.gif">
      <!--<div class="tow all">コラプシング（ラック、モール）</div>公式-->
      <img class="tow all sayuuryoute" src="not1m.gif">
      <!--<div class="tow all">ノット１ｍ</div>< ntt、九州　公式-->
      <img class="tow all sayuuryoute" src="not5m.gif">
      <!--<div class="tow all">ノット５ｍまたはノット10ｍ</div> ntt-->
      <img class="tow all sayuuryoute" src="akusidentaru.gif">
      <!--<div class="tow all">アクシンデンタルオフサイド</div> ntt-->
      <img class="tow all zengoryoute" src="not10m.gif">
      <!--<div class="tow all">ノット10ｍバック</div> ntt、九州　公式-->
      <img class="tow all jougeryoute" src="reitocha-zi.gif">
      <!--<div class="tow all">レイトチャージ</div> ntt-->
      <img class="tow all jougeryoute sayuuryoute" src="supiatakkuru.gif">
      <!--<div class="tow all">スピアタックル（危険なタックル）</div> 九州-->
      <img class="tow all sayuukatate" src="pantingu.gif">
      <!--<div class="tow all">パンチング</div> 九州　公式-->
      <img class="tow all jougeryoute" src="rifutelingu.gif">
      <!--<div class="tow all">リフティング</div> 公式-->
      <img class="tow all jougeryoute sayuuryoute" src="takkuruho-rudelinngu.gif">
      <!--<div class="tow all">タックルホールディング</div> 公式-->


    </div>

  </div>
  </body>
</html>
