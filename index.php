<?php include('contactBase.php'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sakupon.info</title>
    <link rel="stylesheet" href="./gulp-file/css/style.css" type="text/css"><!-- cssファイルの宣言 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- jQueryの宣言 -->
    <script type="text/javascript" src="./script.js"></script><!-- jsファイルの読み込み -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><!-- google fontの読み込み -->
    <link href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet"><!-- iconmonstrの読み込み -->
    <link rel="stylesheet" href="./gulp-file/css/small.css" media="screen and (max-width:480px)">
    <link rel="stylesheet" href="./gulp-file/css/midium.css" media="screen and (min-width: 481px) and (max-width:600px)">
    <link rel="stylesheet" href="./gulp-file/css/large.css" media="screen and (min-width: 601px) and (max-width: 960px)">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- メディアクエリの宣言 -->
</head>
<body class="clearfix">
    <!-- サイドバーの記述 -->
    <header class="side-bar">
        <!-- ハンバーガーメニューボタンの記述 -->
        <button id="menu-btn">
            <span></span>
        </button>

        <!-- メニューリストの記述 -->
        <div class="bar-position">
            <h2 class="sideIn"><a href="./index.php">sakupon.info</a></h2>

            <div id="hbg-menu">
                <div id="menu-bg"></div>
                <div class="menu-area">
                    <nav class="contents-list">
                        <ul>
                            <li><a href="#top" id="top-link">Top</a></li>
                            <li><a href="#about" id="ab-link">About</a></li>
                            <li><a href="#works" id="wo-link">Works</a></li>
                            <li><a href="#contact" id="co-link">Contact</a></li>
                        </ul>
                    </nav>

                    <nav class="sns-list">
                        <ul>
                            <li><a href="https://twitter.com/sakupon730" target=”_blank”><img src="./img/tw.png" alt=""></a></li>
                            <li><a href="https://github.com/sakupon730" target=”_blank”><img src="./img/git.png" alt=""></a></li>
                        </ul>            
                    </nav>
                </div>
            </div>
        </div>
    </header>

	
    <!-- メインコンテンツの記述 -->
    <main class="main-container" id="top">
        <!-- main-imgの記述 -->
        <section class="top-container nomal small midi large">
            <div class="top-img">
                <div class="img-mask"></div>
                <div class="center-text">
                    <h1 class="fadeInUp">
                        <span>Welcome<br>to<br></span>
                        <span>sakupon.info</span>
                    </h1>
                </div>
                <div class="down-button-wt fadeInUp-delay">
                    <a href="#ft-section" id="arrow-btn-ft"><i class="im im-angle-down"></i></a>
                </div>
            </div>
        </section>


        <!-- IntroductionとContentsの記述 -->
        <section class="sd-container nomal large" id="ft-section">

            <!-- Introductionの記述 -->
            <section class="intro-area small midi">
                <div id="center">
                    <h2 class="title ft-title"><span>Introduction</span></h2>
                    <p class="intro-txt">
                        <span>当サイトにお立ち寄りいただき、ありがとうございます。</span>
                        <span>このサイトは、将来フロントエンドエンジニアとして活躍するための第一歩として、webを勉強中のわたくしさくぽんが制作したポートフォリオサイトです。</span>
                        <span>インターンや就職活動等を通して少しでも多くの方に見ていただければ幸いです。</span>
                    </p>        
                </div>
                <div class="btnOfSmall"><!-- small.css, midium.cssでのみ表示 -->
                    <a href="#th-section" id="arrow-btn-small"><i class="im im-angle-down"></i></a>
                </div>
            </section>
            
            <!-- Contentsの記述 -->
            <section class="contents-area small midi" id="th-section">
                <h2 class="title sd-title"><span>Contents</span></h2>

                <section class="contents-group">
                    <div class="contents-index">
                        <h3>About</h3>
                        <img src="./img/about.png" alt="">
                        <p>
                            サイト運営者さくぽんについて、簡単な自己紹介とコメントを記載しています。
                        </p>
                    </div>
                    <div class="contents-index">
                        <h3>Works</h3>
                        <img src="./img/works.png" alt="">
                        <p>
                            これまでに趣味で制作した制作物をゆるく更新しています。
                        </p>
                    </div>
                    <div class="contents-index">
                        <h3>Contact</h3>
                        <img src="./img/contact.png" alt="">
                        <p>
                            ご質問やご意見等ございましたらこちらからお問い合わせください。
                        </p>
                    </div>
                </section>
            </section>

            <!-- 黒矢印の記述 -->
            <div class="down-button-bk">
                <a href="#sd-section" id="arrow-btn-sd"><i class="im im-angle-down"></i></a>
            </div>
        </section>


        <section class="contents-item nomal" id="sd-section">

            <!-- aboutの記述 -->
            <section id="about">
                <h3 class="ct-ttl">About</h3>
                <section class="pf-img"></section>

                <!-- Profileの記述 -->
                <section class="profile">
                    <h4 class="ab-subttl">Profile</h4>
                    <ul>
                        <li class="pf-area">
                            <dl class="clearfix">
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>名前</dt>
                                <dd class="pf-list-ctt">山本さくら（YAMAMOTO SAKURA）</dd>
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>ニックネーム</dt>
                                <dd class="pf-list-ctt">さくぽん</dd>
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>生年月日</dt>
                                <dd class="pf-list-ctt">1998年7月30日</dd>
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>好きな食べ物</dt>
                                <dd class="pf-list-ctt">ラーメン, お寿司, お肉</dd>
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>スキル</dt>
                                <dd class="pf-list-ctt">HTML5, CSS3, Sass, JavaScript, jQuery, WordPress, C, Java</dd>
                                <dt class="pf-list"><span><i class="im im-tag"></i></span>できること</dt>
                                <dd class="pf-list-ctt">webサイト制作, WordPressを用いたwebサイト制作, Webデザイン</dd>
                            </dl>
                        </li>
                    </ul>
                </section>

                <!-- Commentの記述 -->
                <section class="comment">
                    <h4 class="ab-subttl">Comment</h4>
                    <p>
                        初めまして。当サイト運営者のさくぽんと申します。独学ではWeb技術、大学では機械学習を主に学んでいます。
                    </p>
                    <p>
                        大学入学後にマークアップの勉強をし始め、当初は既存のサイトをトレースしたり、トレースしたサイトにアドバイスを頂いたりして技術を向上させています。最近は趣味でWebデザインをぼちぼちやっています。
                    </p>
                    <p>
                        Webサイト制作・Webアプリケーション開発・機械学習を取り入れたWebアプリケーションの開発などに興味があります。
                    </p>
                </section>
            </section>


            <!-- Worksの記述 -->
            <section id="works">
                <h3 class="ct-ttl">Works</h3>
                
                <section class="works-container">

                    <!-- works-item-01 -->
                    <div class="works-item">
                        <figure><img src="./img/works-01.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i></span>初めての個人サイト</h4>
                        <p>
                            初めてのポートフォリオサイトを制作しました。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-1" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- works-item-02 -->
                    <div class="works-item">
                        <figure><img src="./img/works-02.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i></span>個人サイトのWebデザイン</h4>
                        <p>
                            ポートフォリオサイトのWebデザインを行いました。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-2" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- works-item-03 -->
                    <div class="works-item">
                        <figure><img src="./img/works-03.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i>サークルサイトのWebデザイン</span></h4>
                        <p>
                            非公式サークルのWebサイトのデザインを行いました。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-3" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- works-item-04 -->
                    <div class="works-item">
                        <figure><img src="./img/NoImage.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i></span>Comming Soon...</h4>
                        <p>
                            心を込めて全力で製作中です。もうしばらくお待ち下さい。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-4" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- works-item-05 -->
                    <div class="works-item">
                        <figure><img src="./img/NoImage.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i></span>Comming Soon...</h4>
                        <p>
                            心を込めて全力で製作中です。もうしばらくお待ち下さい。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-5" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- works-item-06 -->
                    <div class="works-item">
                        <figure><img src="./img/NoImage.png" alt=""></figure>
                        <h4 class="item-ttl"><span><i class="im im-pencil"></i></span>Comming Soon...</h4>
                        <p>
                            心を込めて全力で製作中です。もうしばらくお待ち下さい。
                        </p>
                        <div class="more">
                            <a data-target="modal-area-6" class="click-more">more</a>
                        </div>
                    </div>

                    <!-- モーダルウィンドウ-1 -->
                    <div id="modal-area-1" class="modal-close">
                        <div class="modal-bg"></div><!-- モーダルのオーバーレイ -->
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>初めての個人サイト</h2>
                            <figure><img src="./img/works-01.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    制作し始めてから約3ヶ月、ついにポートフォリオサイトを公開することができました。「Figma」というSketchと似た機能を持つツールでサイトのデザインを行い、私の大好きなエディタ「VScode」さんを使ってコーディングを行いました。
                                </p>
                            </div>
                            <div class="code">
                                <a href="https://github.com/sakupon730/portfolio" target=”_blank” class="view-code">view code</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                    <!-- モーダルウィンドウ-2 -->
                    <div id="modal-area-2" class="modal-close">
                        <div class="modal-bg"></div>
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>個人サイトのWebデザイン</h2>
                            <figure><img src="./img/works-02.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    以前更新したポートフォリオサイトのWebデザインを、「Figma」というSketchと似た機能を持つツールを用いて行いました。完成したサイトとは少々デザインが異なりますが、温かい目で御覧ください。
                                </p>
                            </div>
                            <div class="code">
                                <a href="https://www.figma.com/file/LMk7RXDUN7akQLRd5vLU2ogB/portfolio?node-id=0%3A1" class="view-code">view link</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                    <!-- モーダルウィンドウ-3 -->
                    <div id="modal-area-3" class="modal-close">
                        <div class="modal-bg"></div>
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>サークルサイトのWebデザイン</h2>
                            <figure><img src="./img/works-03.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    2019年6月に設立された、東京工科大学八王子キャンパスの非公式サークル「Forge」のWebサイトのデザインをFigmaで行いました。ページ数が多かったためなかなか一人で手がけることが大変でしたが、デザインはとても好きなので気づいたら終わってました(笑)
                                </p>
                            </div>
                            <div class="code">
                                <a href="https://www.figma.com/file/HZvS51DoIhxpWEtvrAuLH1cJ/Forge-site?node-id=0%3A1" class="view-code">view link</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                    <!-- モーダルウィンドウ-4 -->
                    <div id="modal-area-4" class="modal-close">
                        <div class="modal-bg"></div>
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>Comming Soon...</h2>
                            <figure><img src="./img/NoImage.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    moreボタンを押してしまったんですね...。「こいつ、ポートフォリオサイト作ったのに見せるもんないんかい！」と思った方、申し訳ありません。その通りでございます。製作完了次第、たぶんひっそりと更新致しますのでもうしばらくお待ち下さい。
                                </p>
                            </div>
                            <div class="code">
                                <a href="" class="view-code">view code</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                    <!-- モーダルウィンドウ-5 -->
                    <div id="modal-area-5" class="modal-close">
                        <div class="modal-bg"></div>
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>Comming Soon...</h2>
                            <figure><img src="./img/NoImage.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    moreボタンを押してしまったんですね...。「こいつ、ポートフォリオサイト作ったのに見せるもんないんかい！」と思った方、申し訳ありません。その通りでございます。製作完了次第、たぶんひっそりと更新致しますのでもうしばらくお待ち下さい。
                                </p>
                            </div>
                            <div class="code">
                                <a href="" class="view-code">view code</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                    <!-- モーダルウィンドウ-6 -->
                    <div id="modal-area-6" class="modal-close">
                        <div class="modal-bg"></div>
                        <div class="modal-content" id="close-fixed">
                            <h2><span><i class="im im-pencil"></i></span>Comming Soon...</h2>
                            <figure><img src="./img/NoImage.png" alt=""></figure>
                            <div class="modal-des">
                                <h3 class="modal-des-ttl">Description</h3>
                                <p>
                                    moreボタンを押してしまったんですね...。「こいつ、ポートフォリオサイト作ったのに見せるもんないんかい！」と思った方、申し訳ありません。その通りでございます。製作完了次第、たぶんひっそりと更新致しますのでもうしばらくお待ち下さい。
                                </p>
                            </div>
                            <div class="code">
                                <a href="" class="view-code">view code</a>
                            </div>
                            <div class="close">
                                <button></button>
                            </div>
                        </div>
                    </div>
                    <!-- ここまで -->

                </section>
            </section>

            <!-- Contactの記述 -->
            <section id="contact">
                <h3 class="ct-ttl">Contact</h3>
                <section class="contact">

					<?php include('contactPage.php'); ?>
					<!-- contactConfir.phpを呼び出している -->
					
                </section>
            </section>
        </section>
    </main>

    <footer>
        <div class="home">
            <a href="">sakupon.info</a>
        </div>
    </footer>
</body>
</html>