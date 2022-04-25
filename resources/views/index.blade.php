@extends('layouts.app')

@section('main')
  <div class="firstview">
    <img src="img/firstview.jpg" alt="firstview" class="firstview-eyecatch">
    <div class="firstview-content">
      <h1 class="firstview-h1">Commit to the <span class="color-blue">growth</span><br>for everyone</h1>
      <p class="firstview-p1">全ての人の<span class="color-blue">成長</span>にコミットする</p>
      <p class="firstview-p2">Educational Technology Company<br>estra inc since 2019</p>
    </div>
  </div>
  <div class="news small-container" id="news">
    <p class="common-sub-ttl">News</p>
    <h2 class="common-ttl">新着情報</h2>
    <ul class="news-list">
      <li>
        <a class="news-link">
          <span>2021/01/01</span>
          <span class="news-cat">ニュース</span>
          <span>COACHTECHのサービスが開始されました。</span>
        </a>
      </li>
      <li>
        <a class="news-link">
          <span>2021/01/01</span>
          <span class="news-cat">ニュース</span>
          <span>COACHTECHのサービスが開始されました。</span>
        </a>
      </li>
      <li>
        <a class="news-link">
          <span>2021/01/01</span>
          <span class="news-cat">ニュース</span>
          <span>COACHTECHのサービスが開始されました。</span>
        </a>
      </li>
      <li>
        <a class="news-link">
          <span>2021/01/01</span>
          <span class="news-cat">ニュース</span>
          <span>COACHTECHのサービスが開始されました。</span>
        </a>
      </li>
      <li>
        <a class="news-link">
          <span>2021/01/01</span>
          <span class="news-cat">ニュース</span>
          <span>COACHTECHのサービスが開始されました。</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="about" id="about">
    <div class="content">
      <p class="common-sub-ttl about-ttl">About</p>
      <h2 class="common-ttl about-ttl">Technology × Coaching</h2>
      <div class="about-item flex-item">
        <p class="about-p">
          <span>株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。</span>
          独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。
        </p>
        <img src="img/about.jpg" alt="about画像" class="about-img">
      </div>
    </div>
  </div>
  <div class="service content" id="service">
    <p class="common-sub-ttl">Service</p>
    <h2 class="common-ttl">サービス内容</h2>
    <div class="service-wrap">
      <div class="service-wrap1">
        <img src="img/service__first.svg" alt="" class="service-img img1">
        <h3 class="service-ttl ttl1">教育事業</h3>
        <p class="service-msg">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
      </div>
      <div class="service-wrap2">
        <img src="img/service__first.svg" alt="" class="service-img">
        <div class="service-item">
          <h3 class="service-ttl">教育事業</h3>
          <p class="service-msg">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>
      </div>
      <div class="service-wrap3">
        <img src="img/service__first.svg" alt="" class="service-img">
        <div class="service-item">
          <h3 class="service-ttl">教育事業</h3>
          <p class="service-msg">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="blog" id="blog">
    <div class="content">
      <p class="common-sub-ttl">Blog</p>
      <h2 class="common-ttl">ブログ</h2>
      <div class="flex-item blog-wrap">
        <a href="" class="blog-card">
          <img src="img/blog__first.jpg" alt="ブログ画像" class="blog-img">
          <span class="blog-card-cat">Blog</span>
          <div class="blog-card-item">
            <h3>プログラミング学習の勉強方法を特集。挫折しない秘訣とは？</h3>
            <ul class="flex-item">
              <li class="blog-li">2021/01/01</li>
              <li class="blog-li">#COACHTECH</li>
            </ul>
          </div>
        </a>
        <a href="" class="blog-card">
          <img src="img/blog__first.jpg" alt="ブログ画像" class="blog-img">
          <span class="blog-card-cat">Blog</span>
          <div class="blog-card-item">
            <h3>プログラミング学習の勉強方法を特集。挫折しない秘訣とは？</h3>
            <ul class="flex-item">
              <li class="blog-li">2021/01/01</li>
              <li class="blog-li">#COACHTECH</li>
            </ul>
          </div>
        </a>
        <a href="" class="blog-card">
          <img src="img/blog__first.jpg" alt="ブログ画像" class="blog-img">
          <span class="blog-card-cat">Blog</span>
          <div class="blog-card-item">
            <h3>プログラミング学習の勉強方法を特集。挫折しない秘訣とは？</h3>
            <ul class="flex-item">
              <li class="blog-li">2021/01/01</li>
              <li class="blog-li">#COACHTECH</li>
            </ul>
          </div>
        </a>
      </div>
    </div>
    <a href="" class="blog-btn">一覧ページへ</a>
  </div>
  <div class="small-container" id="company">
    <p class="common-sub-ttl">Company</p>
    <h2 class="common-ttl">会社概要</h2>
    <table class="company-table">
      <tbody>
        <tr>
          <th class="company-th">会社名</th>
          <td class="company-td">株式会社estra</td>
        </tr>
        <tr>
          <th class="company-th">代表者名</th>
          <td class="company-td">福場凛太朗</td>
        </tr>
        <tr>
          <th class="company-th">本社所在地</th>
          <td class="company-td">東京都渋谷区1-1-1</td>
        </tr>
        <tr>
          <th class="company-th">従業員数</th>
          <td class="company-td">100名</td>
        </tr>
        <tr>
          <th class="company-th">電話番号</th>
          <td class="company-td">0210-00-0000</td>
        </tr>
        <tr>
          <th class="company-th">資本金</th>
          <td class="company-td">¥10,000,000</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="recruit" id="recruit">
    <div class="flex-item">
      <a class="recruit-item recruit-item1" href="">
        <h2 class="recruit-item-ttl">採用情報</h2>
      </a>
      <a class="recruit-item recruit-item2" href="">
        <h2 class="recruit-item-ttl">社員インタビュー</h2>
      </a>
    </div>
  </div>
  <div class="contact" id="contact">
    <h2 class="contact-ttl">株式会社estraへのお問い合わせはこちらから</h2>
    <a href="" class="contact-btn">お問い合わせ</a>
  </div>
@endsection