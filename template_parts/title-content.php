<!--
    //コンテンツタイトルのテンプレートです
-->

            <?php if(is_archive()): ?>
            <div class="p-content-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">R</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave">c</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">p</span>
                    <span class="js-wave">e</span>
                </h3>
                <p>レシピ一覧</p>
            </div>
            <?php elseif(is_tag()): ?>
            <div class="p-content-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">R</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave">c</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">p</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave u-ml__16">L</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">s</span>
                    <span class="js-wave">t</span>
                </h3>
                <p><?php single_term_title( '', true ); ?></p>
            </div>
            <?php elseif(is_category()): ?>
            <div class="p-content-ttl c-sec-ttl">
                <h3>
                    <span class="js-wave">R</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave">c</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">p</span>
                    <span class="js-wave">e</span>
                    <span class="js-wave u-ml__16">L</span>
                    <span class="js-wave">i</span>
                    <span class="js-wave">s</span>
                    <span class="js-wave">t</span>
                </h3>
                <p><?php single_term_title( '', true ); ?></p>
            </div>
            <?php endif; ?>