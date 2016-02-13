// ==========================================
// jquery.number_counter.js v0.1
//
// Naoya Suzuki
// http://blog.begoingto.jp/
// Licensed under the MIT License
// ==========================================
(function($) {
    $.fn.counter = function(options) {
        // default setting
        var settings = $.extend({
            dom_cnt: '.counter',
            dom_result: '#result',
            dom_clear: '#clear',
            time: '800',
            default_num: '0'
        }, options);

        var timer;
        var after;
        var before;

        var time_cnt = 0;
        var max_time_cnt = settings.time / 10;
        var deley = 10;

        $(settings.dom_result).html(settings.default_num);

        // カウントさせる数値クリックで開始
        $(settings.dom_cnt).on('click', this, function() {
            // 変化後の数字
            after = Math.floor($(this).attr('value'));

            // 変化前の数字
            before = Math.floor($(settings.dom_result).html());

            // timer作動中でない、かつ数値に変化があれば実行
            if (!timer && after != before) {
                render();
            }
        });

        // clearボタン
        $(settings.dom_clear).on('click', this, function() {
            $(settings.dom_result).html(settings.default_num);
            time_cnt = 0;
            clearTimeout(timer);
            timer = null;
        });

        /**
         * スレッド処理
         * @return
         */
        var render = function() {
            time_cnt++;
            if (time_cnt <= max_time_cnt) {
                // 残りの時間で表示する値を取得
                var res = Math.floor((after - before) * time_cnt / max_time_cnt) + before;

                $(settings.dom_result).html(res);

                timer = setTimeout(function() { render() }, deley);
            } else {
                clearTimeout(timer);
                timer = null;
                time_cnt = 0;
            }
        };
    };
})(jQuery);
