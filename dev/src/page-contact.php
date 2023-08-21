<?php get_header(); ?>
    <div class="p-contact">
      <div class="p-contact__inner l-inner">

        <p class="p-contact__txt">弊社に興味を持って下さりありがとうございます。<br>藤原建設工業へのお問い合わせは、以下のフォームかお電話にて承っております。</p>
        <!-- /.p-contact__txt -->
        <div class="p-contact__tel p-tel-block">
          <div class="p-tel-block__top">
            <p class="p-tel-block__tel">tel</p>
            <p class="p-tel-block__txt">お電話でのお問い合わせ</p><!-- /.p-tel-block__txt -->
          </div><!-- /.p-tel-block__top -->

          <div class="p-tel-block__bottom">
            <p class="p-tel-block__txt">受付時間：平日9:00〜17:00</p><!-- /.p-tel-block__txt -->
            <p class="p-tel-block__tel">00-0000-0000</p><!-- /.p-tel-block__tel -->
          </div><!-- /.p-tel-block__bottom -->
        </div><!-- /.p-contact__tel -->

        <div class="p-contact__form p-contact-form">
          <h2 class="p-contact-form__ttl c-sect-ttl-level2">Form<span>お問い合わせフォーム</span></h2>
          <!-- /.p-contact-form__ttl c-sect-ttl-level2 -->

          <p class="p-contact-form__note p-contact__txt">※全て必須項目となっております。<br>※最後まで入力した後、送信ボタンを押してください。</p>

          <div class="p-contact-form__situation p-contact-situation">
            <ul class="p-contact-situation__list">
              <li class="p-contact-situation__item p-contact-situation__item--current">入力</li>
              <!-- /.p-contact-situation__item -->
              <li class="p-contact-situation__item">確認</li><!-- /.p-contact-situation__item -->
              <li class="p-contact-situation__item">完了</li><!-- /.p-contact-situation__item -->
            </ul><!-- /.p-contact-situation_list -->
          </div><!-- /.p-contact-situation -->

          <div class="p-contact-form__body">
            <div class="p-from">
              
              <div class="p-form__item">
                <label for="select" class="p-form__ttl">お問い合わせの種別</label>
                <div class="p-form__body">
                  <div class="p-form__input p-form__input--select">
                    <div class="p-form__select">
                      <select name="select" id="select">
                        <option value="">選択してください</option>
                        <option value="1">選択１</option>
                        <option value="2">選択2</option>
                      </select><!-- /# -->
                    </div><!-- /.p-form__select -->
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="name" class="p-form__ttl">お名前</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="text" name="name" id="name">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="kana" class="p-form__ttl">フリガナ</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="text" name="kana" id="kana">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="email" class="p-form__ttl">メールアドレス</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="email" name="email" id="email">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="tel" class="p-form__ttl">電話番号</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="tel" name="tel" id="tel">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="postcode" class="p-form__ttl">郵便番号</label>
                <div class="p-form__body">
                  <div class="p-form__input p-form__input--half">
                    <input type="text" name="postcode" id="postcode">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="prefectures" class="p-form__ttl">都道府県</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="text" name="prefectures" id="prefectures">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="cities" class="p-form__ttl">市区町村</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="text" name="cities" id="cities">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="address" class="p-form__ttl">番地・建物名</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <input type="text" name="address" id="address">
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <fieldset>
                  <div class="p-form__item__ttl">
                    <legend>弊社を知ったきっかけ</legend>
                  </div><!-- /.p-form__item__ttl -->
                  <div class="p-form__body">
                    <ul class="p-form__radio-list">
                      <li class="p-form__radio-item"><label><input type="radio" name="inspire" value="チラシ"
                            class="p-form__radio"><span>チラシ</span></label></li>
                      <li class="p-form__radio-item"><label><input type="radio" name="inspire" value="SNS"
                            class="p-form__radio"><span>SNS</span></label></li>
                      <li class="p-form__radio-item"><label><input type="radio" name="inspire" value="ネット検索"
                            class="p-form__radio"><span>ネット検索</span></label></li>
                    </ul><!-- /.p-form__radio-list -->
                  </div><!-- /.p-form__body -->
                </fieldset><!-- /.p-form__item -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <label for="message" class="p-form__ttl">お問い合わせ内容</label>
                <div class="p-form__body">
                  <div class="p-form__input">
                    <textarea name="message" id="message" cols="30" rows="10"></textarea><!-- /# -->
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <div class="p-form__body">
                  <div class="p-form__input p-form__input--checkbox">
                    <input type="checkbox">
                    <span><a href="privacy-policy.html" class="c-link">プライバシーポリシー</a>に同意する</span>
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
              <div class="p-form__item">
                <div class="p-form__body">
                  <div class="p-form__input">
                    <a href="" class="c-btn-dark">内容の確認</a><!-- /.c-btn-dark -->
                  </div><!-- /.p-form__input -->
                </div><!-- /.p-form__body -->
              </div><!-- /.p-form__item -->
            </div><!-- /.p-from -->
          </div><!-- /.p-contact-form__body -->

        </div><!-- /.p-contact-form -->
      </div><!-- /.p-contact__inner l-inner -->

    </div><!-- /.p-contact -->

<?php get_footer(); ?>