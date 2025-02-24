<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>okabe fumiaki</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <link href="style.css" media="screen, projection" rel="stylesheet">
    <link href="reset.css" media="screen, projection" rel="stylesheet">
</head>
<body>
<header>
<div class="header">
    <h1>ここには会社名が入ります</h1>
    <div class="heaer_right_box">
        <div class="nav_btn heaer_right">
            <a href="#" class="head_btn01">ボタン01</a>
            <a href="#" class="head_btn02">ボタン02</a>
        </div>
        <div class="nav_btn_sp heaer_right_sp">
            <a href="#" class="head_btn01">01</a>
            <a href="#" class="head_btn02">02</a>
        </div>
    </div>
</div>
<nav class="g-navi">
    <div class="heaer_bottom">
        <a href="#">メニュー01</a>
        <a href="#">メニュー02</a>
        <a href="#">メニュー03</a>
    </div>
</nav>
</header>
<div class="mv">
    <h1><img src="mv.png" alt=""></h1>
</div>
<main>
<section class="con_01">
    <div class="wrapper">
        <h1>お問い合わせ</h1>
        <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>
            後ほど担当者よりご連絡させていただきます。</p>
    </div>
</section>
<section class="con_02">
    <div class="wrapper">
        <div class="contact">
            <form method="POST" action="task8-1.php">
                <table>
                    <tr>
                        <th>お名前<span>必須</span></th>
                        <td>
                            <input class="contact-6" type="text" name="name" placeholder="山田太郎" required>
                        </td>
                    </tr>
                    <tr>
                        <th>フリガナ<span>必須</span></th>
                        <td>
                            <input class="contact-6" type="text" name="kana" placeholder="ヤマダタロウ" required>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス<span>必須</span></th>
                        <td>
                            <input class="contact-6" type="email" name="email" placeholder="info@fast-creademy.jp" required>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号<span>必須</span></th>
                        <td>
                            <input class="contact-6" type="tel" name="tel" placeholder="03-1234-5678" required>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ項目<span>必須</span></th>
                        <td>
                            <select class="contact-3" name="inquiry" required>
                                <option value="" selected>選択してください</option>
                                <option value="選択1">選択1</option>
                                <option value="選択2">選択2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容<span>必須</span></th>
                        <td><textarea class="contact-7" name="message" placeholder="こちらにお問い合わせ内容をご記入ください" cols="50" rows="10" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>個人情報保護方針<span>必須</span></th>
                        <td>
                            <input type="checkbox" name="privacy" required> <a class="agree" href="null">個人情報保護方針</a> に同意します。
                        </td>
                    </tr>
                </table>
                <div class="more_btn_01 btn_center">
                    <button type="submit">確認</button>
                </div>
            </form>
        </div>
    </div>
</section>
</main>
<footer>
<section id="foot_01">
    <div class="wrapper">
        <div class="foot_01_box">
            <div class="btn_box">
                <p>こちらからご購入ください</p>
                <a href="#" class="foot_btn_01">ネットショップ</a>
            </div>
            <div class="btn_box">
                <p>お気軽にお問い合わせください</p>
                <a href="#" class="foot_btn_02">お問い合わせ</a>
            </div>
        </div>
    </div>
</section>
</footer>
<section id="foot_02">
    <div class="wrapper">
        <div class="foot_logo">
           <p> ここには会社名が入ります</p>
        </div
           <p>住所が入ります</p>
           <p>03-1234-5678</p>
           <p>営業時間：9:00～18:00</p>
    </div>
</section>
<section id="foot_03">
        <div class="foot_03_list">
            <div class="foot_03_link">
                <a href="#">リンク01</a>
            </div>
            <div class="foot_03_link">
                <a href="#">リンク02</a>
            </div>
            <div class="foot_03_link">
                <a href="#">リンク03</a>
            </div>
            <div class="foot_03_link">
                <a href="#">リンク04</a>
            </div>
            <div class="foot_03_link">
                <a href="#">リンク05</a>
            </div>
            <div class="foot_03_link">
                <a href="#">リンク06</a>
                <a href="#">リンク07</a>
            </div>
        </div>
</section>
<section id="copyright">
    <div class="wrapper">
        <p>ここには会社名が入ります©Copyright.</p>
    </div>
</section>
</body>
</html>