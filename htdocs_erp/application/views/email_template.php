<style type="text/css">
    @font-face {
        font-family: 'FontAwesome';
        src: url(//cdn.hikeup.com/fonts/fontawesome-webfont.eot?v=4.7.0);
        src: url(//cdn.hikeup.com/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'), url(//cdn.hikeup.com/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(//cdn.hikeup.com/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(//cdn.hikeup.com/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url(//cdn.hikeup.com/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
        font-weight: normal;
        font-style: normal
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .fa-lg {
        font-size: 1.33333333em;
        line-height: .75em;
        vertical-align: -15%
    }

    .fa-2x {
        font-size: 2em
    }

    .fa-3x {
        font-size: 3em
    }

    .fa-4x {
        font-size: 4em
    }

    .fa-5x {
        font-size: 5em
    }

    .fa-fw {
        width: 1.28571429em;
        text-align: center
    }

    .fa-ul {
        padding-left: 0;
        margin-left: 2.14285714em;
        list-style-type: none
    }

    .fa-ul > li {
        position: relative
    }

    .fa-li {
        position: absolute;
        left: -2.14285714em;
        width: 2.14285714em;
        top: .14285714em;
        text-align: center
    }

    .fa-li.fa-lg {
        left: -1.85714286em
    }

    .fa-border {
        padding: .2em .25em .15em;
        border: solid .08em #eee;
        border-radius: .1em
    }

    .fa-pull-left {
        float: left
    }

    .fa-pull-right {
        float: right
    }

    .fa.fa-pull-left {
        margin-right: .3em
    }

    .fa.fa-pull-right {
        margin-left: .3em
    }

    .pull-right {
        float: right
    }

    .pull-left {
        float: left
    }

    .fa.pull-left {
        margin-right: .3em
    }

    .fa.pull-right {
        margin-left: .3em
    }

    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear
    }

    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8)
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
        -ms-transform: scale(-1, 1);
        transform: scale(-1, 1)
    }

    .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
        -ms-transform: scale(1, -1);
        transform: scale(1, -1)
    }

    :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-flip-horizontal, :root .fa-flip-vertical {
        filter: none
    }

    .fa-stack {
        position: relative;
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle
    }

    .fa-stack-1x, .fa-stack-2x {
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center
    }

    .fa-stack-1x {
        line-height: inherit
    }

    .fa-stack-2x {
        font-size: 2em
    }

    .fa-inverse {
        color: #fff
    }

    .fa-glass:before {
        content: ""
    }

    .fa-music:before {
        content: ""
    }

    .fa-search:before {
        content: ""
    }

    .fa-envelope-o:before {
        content: ""
    }

    .fa-heart:before {
        content: ""
    }

    .fa-star:before {
        content: ""
    }

    .fa-star-o:before {
        content: ""
    }

    .fa-user:before {
        content: ""
    }

    .fa-film:before {
        content: ""
    }

    .fa-th-large:before {
        content: ""
    }

    .fa-th:before {
        content: ""
    }

    .fa-th-list:before {
        content: ""
    }

    .fa-check:before {
        content: ""
    }

    .fa-remove:before, .fa-close:before, .fa-times:before {
        content: ""
    }

    .fa-search-plus:before {
        content: ""
    }

    .fa-search-minus:before {
        content: ""
    }

    .fa-power-off:before {
        content: ""
    }

    .fa-signal:before {
        content: ""
    }

    .fa-gear:before, .fa-cog:before {
        content: ""
    }

    .fa-trash-o:before {
        content: ""
    }

    .fa-home:before {
        content: ""
    }

    .fa-file-o:before {
        content: ""
    }

    .fa-clock-o:before {
        content: ""
    }

    .fa-road:before {
        content: ""
    }

    .fa-download:before {
        content: ""
    }

    .fa-arrow-circle-o-down:before {
        content: ""
    }

    .fa-arrow-circle-o-up:before {
        content: ""
    }

    .fa-inbox:before {
        content: ""
    }

    .fa-play-circle-o:before {
        content: ""
    }

    .fa-rotate-right:before, .fa-repeat:before {
        content: ""
    }

    .fa-refresh:before {
        content: ""
    }

    .fa-list-alt:before {
        content: ""
    }

    .fa-lock:before {
        content: ""
    }

    .fa-flag:before {
        content: ""
    }

    .fa-headphones:before {
        content: ""
    }

    .fa-volume-off:before {
        content: ""
    }

    .fa-volume-down:before {
        content: ""
    }

    .fa-volume-up:before {
        content: ""
    }

    .fa-qrcode:before {
        content: ""
    }

    .fa-barcode:before {
        content: ""
    }

    .fa-tag:before {
        content: ""
    }

    .fa-tags:before {
        content: ""
    }

    .fa-book:before {
        content: ""
    }

    .fa-bookmark:before {
        content: ""
    }

    .fa-print:before {
        content: ""
    }

    .fa-camera:before {
        content: ""
    }

    .fa-font:before {
        content: ""
    }

    .fa-bold:before {
        content: ""
    }

    .fa-italic:before {
        content: ""
    }

    .fa-text-height:before {
        content: ""
    }

    .fa-text-width:before {
        content: ""
    }

    .fa-align-left:before {
        content: ""
    }

    .fa-align-center:before {
        content: ""
    }

    .fa-align-right:before {
        content: ""
    }

    .fa-align-justify:before {
        content: ""
    }

    .fa-list:before {
        content: ""
    }

    .fa-dedent:before, .fa-outdent:before {
        content: ""
    }

    .fa-indent:before {
        content: ""
    }

    .fa-video-camera:before {
        content: ""
    }

    .fa-photo:before, .fa-image:before, .fa-picture-o:before {
        content: ""
    }

    .fa-pencil:before {
        content: ""
    }

    .fa-map-marker:before {
        content: ""
    }

    .fa-adjust:before {
        content: ""
    }

    .fa-tint:before {
        content: ""
    }

    .fa-edit:before, .fa-pencil-square-o:before {
        content: ""
    }

    .fa-share-square-o:before {
        content: ""
    }

    .fa-check-square-o:before {
        content: ""
    }

    .fa-arrows:before {
        content: ""
    }

    .fa-step-backward:before {
        content: ""
    }

    .fa-fast-backward:before {
        content: ""
    }

    .fa-backward:before {
        content: ""
    }

    .fa-play:before {
        content: ""
    }

    .fa-pause:before {
        content: ""
    }

    .fa-stop:before {
        content: ""
    }

    .fa-forward:before {
        content: ""
    }

    .fa-fast-forward:before {
        content: ""
    }

    .fa-step-forward:before {
        content: ""
    }

    .fa-eject:before {
        content: ""
    }

    .fa-chevron-left:before {
        content: ""
    }

    .fa-chevron-right:before {
        content: ""
    }

    .fa-plus-circle:before {
        content: ""
    }

    .fa-minus-circle:before {
        content: ""
    }

    .fa-times-circle:before {
        content: ""
    }

    .fa-check-circle:before {
        content: ""
    }

    .fa-question-circle:before {
        content: ""
    }

    .fa-info-circle:before {
        content: ""
    }

    .fa-crosshairs:before {
        content: ""
    }

    .fa-times-circle-o:before {
        content: ""
    }

    .fa-check-circle-o:before {
        content: ""
    }

    .fa-ban:before {
        content: ""
    }

    .fa-arrow-left:before {
        content: ""
    }

    .fa-arrow-right:before {
        content: ""
    }

    .fa-arrow-up:before {
        content: ""
    }

    .fa-arrow-down:before {
        content: ""
    }

    .fa-mail-forward:before, .fa-share:before {
        content: ""
    }

    .fa-expand:before {
        content: ""
    }

    .fa-compress:before {
        content: ""
    }

    .fa-plus:before {
        content: ""
    }

    .fa-minus:before {
        content: ""
    }

    .fa-asterisk:before {
        content: ""
    }

    .fa-exclamation-circle:before {
        content: ""
    }

    .fa-gift:before {
        content: ""
    }

    .fa-leaf:before {
        content: ""
    }

    .fa-fire:before {
        content: ""
    }

    .fa-eye:before {
        content: ""
    }

    .fa-eye-slash:before {
        content: ""
    }

    .fa-warning:before, .fa-exclamation-triangle:before {
        content: ""
    }

    .fa-plane:before {
        content: ""
    }

    .fa-calendar:before {
        content: ""
    }

    .fa-random:before {
        content: ""
    }

    .fa-comment:before {
        content: ""
    }

    .fa-magnet:before {
        content: ""
    }

    .fa-chevron-up:before {
        content: ""
    }

    .fa-chevron-down:before {
        content: ""
    }

    .fa-retweet:before {
        content: ""
    }

    .fa-shopping-cart:before {
        content: ""
    }

    .fa-folder:before {
        content: ""
    }

    .fa-folder-open:before {
        content: ""
    }

    .fa-arrows-v:before {
        content: ""
    }

    .fa-arrows-h:before {
        content: ""
    }

    .fa-bar-chart-o:before, .fa-bar-chart:before {
        content: ""
    }

    .fa-twitter-square:before {
        content: ""
    }

    .fa-facebook-square:before {
        content: ""
    }

    .fa-camera-retro:before {
        content: ""
    }

    .fa-key:before {
        content: ""
    }

    .fa-gears:before, .fa-cogs:before {
        content: ""
    }

    .fa-comments:before {
        content: ""
    }

    .fa-thumbs-o-up:before {
        content: ""
    }

    .fa-thumbs-o-down:before {
        content: ""
    }

    .fa-star-half:before {
        content: ""
    }

    .fa-heart-o:before {
        content: ""
    }

    .fa-sign-out:before {
        content: ""
    }

    .fa-linkedin-square:before {
        content: ""
    }

    .fa-thumb-tack:before {
        content: ""
    }

    .fa-external-link:before {
        content: ""
    }

    .fa-sign-in:before {
        content: ""
    }

    .fa-trophy:before {
        content: ""
    }

    .fa-github-square:before {
        content: ""
    }

    .fa-upload:before {
        content: ""
    }

    .fa-lemon-o:before {
        content: ""
    }

    .fa-phone:before {
        content: ""
    }

    .fa-square-o:before {
        content: ""
    }

    .fa-bookmark-o:before {
        content: ""
    }

    .fa-phone-square:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook-f:before, .fa-facebook:before {
        content: ""
    }

    .fa-github:before {
        content: ""
    }

    .fa-unlock:before {
        content: ""
    }

    .fa-credit-card:before {
        content: ""
    }

    .fa-feed:before, .fa-rss:before {
        content: ""
    }

    .fa-hdd-o:before {
        content: ""
    }

    .fa-bullhorn:before {
        content: ""
    }

    .fa-bell:before {
        content: ""
    }

    .fa-certificate:before {
        content: ""
    }

    .fa-hand-o-right:before {
        content: ""
    }

    .fa-hand-o-left:before {
        content: ""
    }

    .fa-hand-o-up:before {
        content: ""
    }

    .fa-hand-o-down:before {
        content: ""
    }

    .fa-arrow-circle-left:before {
        content: ""
    }

    .fa-arrow-circle-right:before {
        content: ""
    }

    .fa-arrow-circle-up:before {
        content: ""
    }

    .fa-arrow-circle-down:before {
        content: ""
    }

    .fa-globe:before {
        content: ""
    }

    .fa-wrench:before {
        content: ""
    }

    .fa-tasks:before {
        content: ""
    }

    .fa-filter:before {
        content: ""
    }

    .fa-briefcase:before {
        content: ""
    }

    .fa-arrows-alt:before {
        content: ""
    }

    .fa-group:before, .fa-users:before {
        content: ""
    }

    .fa-chain:before, .fa-link:before {
        content: ""
    }

    .fa-cloud:before {
        content: ""
    }

    .fa-flask:before {
        content: ""
    }

    .fa-cut:before, .fa-scissors:before {
        content: ""
    }

    .fa-copy:before, .fa-files-o:before {
        content: ""
    }

    .fa-paperclip:before {
        content: ""
    }

    .fa-save:before, .fa-floppy-o:before {
        content: ""
    }

    .fa-square:before {
        content: ""
    }

    .fa-navicon:before, .fa-reorder:before, .fa-bars:before {
        content: ""
    }

    .fa-list-ul:before {
        content: ""
    }

    .fa-list-ol:before {
        content: ""
    }

    .fa-strikethrough:before {
        content: ""
    }

    .fa-underline:before {
        content: ""
    }

    .fa-table:before {
        content: ""
    }

    .fa-magic:before {
        content: ""
    }

    .fa-truck:before {
        content: ""
    }

    .fa-pinterest:before {
        content: ""
    }

    .fa-pinterest-square:before {
        content: ""
    }

    .fa-google-plus-square:before {
        content: ""
    }

    .fa-google-plus:before {
        content: ""
    }

    .fa-money:before {
        content: ""
    }

    .fa-caret-down:before {
        content: ""
    }

    .fa-caret-up:before {
        content: ""
    }

    .fa-caret-left:before {
        content: ""
    }

    .fa-caret-right:before {
        content: ""
    }

    .fa-columns:before {
        content: ""
    }

    .fa-unsorted:before, .fa-sort:before {
        content: ""
    }

    .fa-sort-down:before, .fa-sort-desc:before {
        content: ""
    }

    .fa-sort-up:before, .fa-sort-asc:before {
        content: ""
    }

    .fa-envelope:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-rotate-left:before, .fa-undo:before {
        content: ""
    }

    .fa-legal:before, .fa-gavel:before {
        content: ""
    }

    .fa-dashboard:before, .fa-tachometer:before {
        content: ""
    }

    .fa-comment-o:before {
        content: ""
    }

    .fa-comments-o:before {
        content: ""
    }

    .fa-flash:before, .fa-bolt:before {
        content: ""
    }

    .fa-sitemap:before {
        content: ""
    }

    .fa-umbrella:before {
        content: ""
    }

    .fa-paste:before, .fa-clipboard:before {
        content: ""
    }

    .fa-lightbulb-o:before {
        content: ""
    }

    .fa-exchange:before {
        content: ""
    }

    .fa-cloud-download:before {
        content: ""
    }

    .fa-cloud-upload:before {
        content: ""
    }

    .fa-user-md:before {
        content: ""
    }

    .fa-stethoscope:before {
        content: ""
    }

    .fa-suitcase:before {
        content: ""
    }

    .fa-bell-o:before {
        content: ""
    }

    .fa-coffee:before {
        content: ""
    }

    .fa-cutlery:before {
        content: ""
    }

    .fa-file-text-o:before {
        content: ""
    }

    .fa-building-o:before {
        content: ""
    }

    .fa-hospital-o:before {
        content: ""
    }

    .fa-ambulance:before {
        content: ""
    }

    .fa-medkit:before {
        content: ""
    }

    .fa-fighter-jet:before {
        content: ""
    }

    .fa-beer:before {
        content: ""
    }

    .fa-h-square:before {
        content: ""
    }

    .fa-plus-square:before {
        content: ""
    }

    .fa-angle-double-left:before {
        content: ""
    }

    .fa-angle-double-right:before {
        content: ""
    }

    .fa-angle-double-up:before {
        content: ""
    }

    .fa-angle-double-down:before {
        content: ""
    }

    .fa-angle-left:before {
        content: ""
    }

    .fa-angle-right:before {
        content: ""
    }

    .fa-angle-up:before {
        content: ""
    }

    .fa-angle-down:before {
        content: ""
    }

    .fa-desktop:before {
        content: ""
    }

    .fa-laptop:before {
        content: ""
    }

    .fa-tablet:before {
        content: ""
    }

    .fa-mobile-phone:before, .fa-mobile:before {
        content: ""
    }

    .fa-circle-o:before {
        content: ""
    }

    .fa-quote-left:before {
        content: ""
    }

    .fa-quote-right:before {
        content: ""
    }

    .fa-spinner:before {
        content: ""
    }

    .fa-circle:before {
        content: ""
    }

    .fa-mail-reply:before, .fa-reply:before {
        content: ""
    }

    .fa-github-alt:before {
        content: ""
    }

    .fa-folder-o:before {
        content: ""
    }

    .fa-folder-open-o:before {
        content: ""
    }

    .fa-smile-o:before {
        content: ""
    }

    .fa-frown-o:before {
        content: ""
    }

    .fa-meh-o:before {
        content: ""
    }

    .fa-gamepad:before {
        content: ""
    }

    .fa-keyboard-o:before {
        content: ""
    }

    .fa-flag-o:before {
        content: ""
    }

    .fa-flag-checkered:before {
        content: ""
    }

    .fa-terminal:before {
        content: ""
    }

    .fa-code:before {
        content: ""
    }

    .fa-mail-reply-all:before, .fa-reply-all:before {
        content: ""
    }

    .fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
        content: ""
    }

    .fa-location-arrow:before {
        content: ""
    }

    .fa-crop:before {
        content: ""
    }

    .fa-code-fork:before {
        content: ""
    }

    .fa-unlink:before, .fa-chain-broken:before {
        content: ""
    }

    .fa-question:before {
        content: ""
    }

    .fa-info:before {
        content: ""
    }

    .fa-exclamation:before {
        content: ""
    }

    .fa-superscript:before {
        content: ""
    }

    .fa-subscript:before {
        content: ""
    }

    .fa-eraser:before {
        content: ""
    }

    .fa-puzzle-piece:before {
        content: ""
    }

    .fa-microphone:before {
        content: ""
    }

    .fa-microphone-slash:before {
        content: ""
    }

    .fa-shield:before {
        content: ""
    }

    .fa-calendar-o:before {
        content: ""
    }

    .fa-fire-extinguisher:before {
        content: ""
    }

    .fa-rocket:before {
        content: ""
    }

    .fa-maxcdn:before {
        content: ""
    }

    .fa-chevron-circle-left:before {
        content: ""
    }

    .fa-chevron-circle-right:before {
        content: ""
    }

    .fa-chevron-circle-up:before {
        content: ""
    }

    .fa-chevron-circle-down:before {
        content: ""
    }

    .fa-html5:before {
        content: ""
    }

    .fa-css3:before {
        content: ""
    }

    .fa-anchor:before {
        content: ""
    }

    .fa-unlock-alt:before {
        content: ""
    }

    .fa-bullseye:before {
        content: ""
    }

    .fa-ellipsis-h:before {
        content: ""
    }

    .fa-ellipsis-v:before {
        content: ""
    }

    .fa-rss-square:before {
        content: ""
    }

    .fa-play-circle:before {
        content: ""
    }

    .fa-ticket:before {
        content: ""
    }

    .fa-minus-square:before {
        content: ""
    }

    .fa-minus-square-o:before {
        content: ""
    }

    .fa-level-up:before {
        content: ""
    }

    .fa-level-down:before {
        content: ""
    }

    .fa-check-square:before {
        content: ""
    }

    .fa-pencil-square:before {
        content: ""
    }

    .fa-external-link-square:before {
        content: ""
    }

    .fa-share-square:before {
        content: ""
    }

    .fa-compass:before {
        content: ""
    }

    .fa-toggle-down:before, .fa-caret-square-o-down:before {
        content: ""
    }

    .fa-toggle-up:before, .fa-caret-square-o-up:before {
        content: ""
    }

    .fa-toggle-right:before, .fa-caret-square-o-right:before {
        content: ""
    }

    .fa-euro:before, .fa-eur:before {
        content: ""
    }

    .fa-gbp:before {
        content: ""
    }

    .fa-dollar:before, .fa-usd:before {
        content: ""
    }

    .fa-rupee:before, .fa-inr:before {
        content: ""
    }

    .fa-cny:before, .fa-rmb:before, .fa-yen:before, .fa-jpy:before {
        content: ""
    }

    .fa-ruble:before, .fa-rouble:before, .fa-rub:before {
        content: ""
    }

    .fa-won:before, .fa-krw:before {
        content: ""
    }

    .fa-bitcoin:before, .fa-btc:before {
        content: ""
    }

    .fa-file:before {
        content: ""
    }

    .fa-file-text:before {
        content: ""
    }

    .fa-sort-alpha-asc:before {
        content: ""
    }

    .fa-sort-alpha-desc:before {
        content: ""
    }

    .fa-sort-amount-asc:before {
        content: ""
    }

    .fa-sort-amount-desc:before {
        content: ""
    }

    .fa-sort-numeric-asc:before {
        content: ""
    }

    .fa-sort-numeric-desc:before {
        content: ""
    }

    .fa-thumbs-up:before {
        content: ""
    }

    .fa-thumbs-down:before {
        content: ""
    }

    .fa-youtube-square:before {
        content: ""
    }

    .fa-youtube:before {
        content: ""
    }

    .fa-xing:before {
        content: ""
    }

    .fa-xing-square:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-dropbox:before {
        content: ""
    }

    .fa-stack-overflow:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    .fa-flickr:before {
        content: ""
    }

    .fa-adn:before {
        content: ""
    }

    .fa-bitbucket:before {
        content: ""
    }

    .fa-bitbucket-square:before {
        content: ""
    }

    .fa-tumblr:before {
        content: ""
    }

    .fa-tumblr-square:before {
        content: ""
    }

    .fa-long-arrow-down:before {
        content: ""
    }

    .fa-long-arrow-up:before {
        content: ""
    }

    .fa-long-arrow-left:before {
        content: ""
    }

    .fa-long-arrow-right:before {
        content: ""
    }

    .fa-apple:before {
        content: ""
    }

    .fa-windows:before {
        content: ""
    }

    .fa-android:before {
        content: ""
    }

    .fa-linux:before {
        content: ""
    }

    .fa-dribbble:before {
        content: ""
    }

    .fa-skype:before {
        content: ""
    }

    .fa-foursquare:before {
        content: ""
    }

    .fa-trello:before {
        content: ""
    }

    .fa-female:before {
        content: ""
    }

    .fa-male:before {
        content: ""
    }

    .fa-gittip:before, .fa-gratipay:before {
        content: ""
    }

    .fa-sun-o:before {
        content: ""
    }

    .fa-moon-o:before {
        content: ""
    }

    .fa-archive:before {
        content: ""
    }

    .fa-bug:before {
        content: ""
    }

    .fa-vk:before {
        content: ""
    }

    .fa-weibo:before {
        content: ""
    }

    .fa-renren:before {
        content: ""
    }

    .fa-pagelines:before {
        content: ""
    }

    .fa-stack-exchange:before {
        content: ""
    }

    .fa-arrow-circle-o-right:before {
        content: ""
    }

    .fa-arrow-circle-o-left:before {
        content: ""
    }

    .fa-toggle-left:before, .fa-caret-square-o-left:before {
        content: ""
    }

    .fa-dot-circle-o:before {
        content: ""
    }

    .fa-wheelchair:before {
        content: ""
    }

    .fa-vimeo-square:before {
        content: ""
    }

    .fa-turkish-lira:before, .fa-try:before {
        content: ""
    }

    .fa-plus-square-o:before {
        content: ""
    }

    .fa-space-shuttle:before {
        content: ""
    }

    .fa-slack:before {
        content: ""
    }

    .fa-envelope-square:before {
        content: ""
    }

    .fa-wordpress:before {
        content: ""
    }

    .fa-openid:before {
        content: ""
    }

    .fa-institution:before, .fa-bank:before, .fa-university:before {
        content: ""
    }

    .fa-mortar-board:before, .fa-graduation-cap:before {
        content: ""
    }

    .fa-yahoo:before {
        content: ""
    }

    .fa-google:before {
        content: ""
    }

    .fa-reddit:before {
        content: ""
    }

    .fa-reddit-square:before {
        content: ""
    }

    .fa-stumbleupon-circle:before {
        content: ""
    }

    .fa-stumbleupon:before {
        content: ""
    }

    .fa-delicious:before {
        content: ""
    }

    .fa-digg:before {
        content: ""
    }

    .fa-pied-piper-pp:before {
        content: ""
    }

    .fa-pied-piper-alt:before {
        content: ""
    }

    .fa-drupal:before {
        content: ""
    }

    .fa-joomla:before {
        content: ""
    }

    .fa-language:before {
        content: ""
    }

    .fa-fax:before {
        content: ""
    }

    .fa-building:before {
        content: ""
    }

    .fa-child:before {
        content: ""
    }

    .fa-paw:before {
        content: ""
    }

    .fa-spoon:before {
        content: ""
    }

    .fa-cube:before {
        content: ""
    }

    .fa-cubes:before {
        content: ""
    }

    .fa-behance:before {
        content: ""
    }

    .fa-behance-square:before {
        content: ""
    }

    .fa-steam:before {
        content: ""
    }

    .fa-steam-square:before {
        content: ""
    }

    .fa-recycle:before {
        content: ""
    }

    .fa-automobile:before, .fa-car:before {
        content: ""
    }

    .fa-cab:before, .fa-taxi:before {
        content: ""
    }

    .fa-tree:before {
        content: ""
    }

    .fa-spotify:before {
        content: ""
    }

    .fa-deviantart:before {
        content: ""
    }

    .fa-soundcloud:before {
        content: ""
    }

    .fa-database:before {
        content: ""
    }

    .fa-file-pdf-o:before {
        content: ""
    }

    .fa-file-word-o:before {
        content: ""
    }

    .fa-file-excel-o:before {
        content: ""
    }

    .fa-file-powerpoint-o:before {
        content: ""
    }

    .fa-file-photo-o:before, .fa-file-picture-o:before, .fa-file-image-o:before {
        content: ""
    }

    .fa-file-zip-o:before, .fa-file-archive-o:before {
        content: ""
    }

    .fa-file-sound-o:before, .fa-file-audio-o:before {
        content: ""
    }

    .fa-file-movie-o:before, .fa-file-video-o:before {
        content: ""
    }

    .fa-file-code-o:before {
        content: ""
    }

    .fa-vine:before {
        content: ""
    }

    .fa-codepen:before {
        content: ""
    }

    .fa-jsfiddle:before {
        content: ""
    }

    .fa-life-bouy:before, .fa-life-buoy:before, .fa-life-saver:before, .fa-support:before, .fa-life-ring:before {
        content: ""
    }

    .fa-circle-o-notch:before {
        content: ""
    }

    .fa-ra:before, .fa-resistance:before, .fa-rebel:before {
        content: ""
    }

    .fa-ge:before, .fa-empire:before {
        content: ""
    }

    .fa-git-square:before {
        content: ""
    }

    .fa-git:before {
        content: ""
    }

    .fa-y-combinator-square:before, .fa-yc-square:before, .fa-hacker-news:before {
        content: ""
    }

    .fa-tencent-weibo:before {
        content: ""
    }

    .fa-qq:before {
        content: ""
    }

    .fa-wechat:before, .fa-weixin:before {
        content: ""
    }

    .fa-send:before, .fa-paper-plane:before {
        content: ""
    }

    .fa-send-o:before, .fa-paper-plane-o:before {
        content: ""
    }

    .fa-history:before {
        content: ""
    }

    .fa-circle-thin:before {
        content: ""
    }

    .fa-header:before {
        content: ""
    }

    .fa-paragraph:before {
        content: ""
    }

    .fa-sliders:before {
        content: ""
    }

    .fa-share-alt:before {
        content: ""
    }

    .fa-share-alt-square:before {
        content: ""
    }

    .fa-bomb:before {
        content: ""
    }

    .fa-soccer-ball-o:before, .fa-futbol-o:before {
        content: ""
    }

    .fa-tty:before {
        content: ""
    }

    .fa-binoculars:before {
        content: ""
    }

    .fa-plug:before {
        content: ""
    }

    .fa-slideshare:before {
        content: ""
    }

    .fa-twitch:before {
        content: ""
    }

    .fa-yelp:before {
        content: ""
    }

    .fa-newspaper-o:before {
        content: ""
    }

    .fa-wifi:before {
        content: ""
    }

    .fa-calculator:before {
        content: ""
    }

    .fa-paypal:before {
        content: ""
    }

    .fa-google-wallet:before {
        content: ""
    }

    .fa-cc-visa:before {
        content: ""
    }

    .fa-cc-mastercard:before {
        content: ""
    }

    .fa-cc-discover:before {
        content: ""
    }

    .fa-cc-amex:before {
        content: ""
    }

    .fa-cc-paypal:before {
        content: ""
    }

    .fa-cc-stripe:before {
        content: ""
    }

    .fa-bell-slash:before {
        content: ""
    }

    .fa-bell-slash-o:before {
        content: ""
    }

    .fa-trash:before {
        content: ""
    }

    .fa-copyright:before {
        content: ""
    }

    .fa-at:before {
        content: ""
    }

    .fa-eyedropper:before {
        content: ""
    }

    .fa-paint-brush:before {
        content: ""
    }

    .fa-birthday-cake:before {
        content: ""
    }

    .fa-area-chart:before {
        content: ""
    }

    .fa-pie-chart:before {
        content: ""
    }

    .fa-line-chart:before {
        content: ""
    }

    .fa-lastfm:before {
        content: ""
    }

    .fa-lastfm-square:before {
        content: ""
    }

    .fa-toggle-off:before {
        content: ""
    }

    .fa-toggle-on:before {
        content: ""
    }

    .fa-bicycle:before {
        content: ""
    }

    .fa-bus:before {
        content: ""
    }

    .fa-ioxhost:before {
        content: ""
    }

    .fa-angellist:before {
        content: ""
    }

    .fa-cc:before {
        content: ""
    }

    .fa-shekel:before, .fa-sheqel:before, .fa-ils:before {
        content: ""
    }

    .fa-meanpath:before {
        content: ""
    }

    .fa-buysellads:before {
        content: ""
    }

    .fa-connectdevelop:before {
        content: ""
    }

    .fa-dashcube:before {
        content: ""
    }

    .fa-forumbee:before {
        content: ""
    }

    .fa-leanpub:before {
        content: ""
    }

    .fa-sellsy:before {
        content: ""
    }

    .fa-shirtsinbulk:before {
        content: ""
    }

    .fa-simplybuilt:before {
        content: ""
    }

    .fa-skyatlas:before {
        content: ""
    }

    .fa-cart-plus:before {
        content: ""
    }

    .fa-cart-arrow-down:before {
        content: ""
    }

    .fa-diamond:before {
        content: ""
    }

    .fa-ship:before {
        content: ""
    }

    .fa-user-secret:before {
        content: ""
    }

    .fa-motorcycle:before {
        content: ""
    }

    .fa-street-view:before {
        content: ""
    }

    .fa-heartbeat:before {
        content: ""
    }

    .fa-venus:before {
        content: ""
    }

    .fa-mars:before {
        content: ""
    }

    .fa-mercury:before {
        content: ""
    }

    .fa-intersex:before, .fa-transgender:before {
        content: ""
    }

    .fa-transgender-alt:before {
        content: ""
    }

    .fa-venus-double:before {
        content: ""
    }

    .fa-mars-double:before {
        content: ""
    }

    .fa-venus-mars:before {
        content: ""
    }

    .fa-mars-stroke:before {
        content: ""
    }

    .fa-mars-stroke-v:before {
        content: ""
    }

    .fa-mars-stroke-h:before {
        content: ""
    }

    .fa-neuter:before {
        content: ""
    }

    .fa-genderless:before {
        content: ""
    }

    .fa-facebook-official:before {
        content: ""
    }

    .fa-pinterest-p:before {
        content: ""
    }

    .fa-whatsapp:before {
        content: ""
    }

    .fa-server:before {
        content: ""
    }

    .fa-user-plus:before {
        content: ""
    }

    .fa-user-times:before {
        content: ""
    }

    .fa-hotel:before, .fa-bed:before {
        content: ""
    }

    .fa-viacoin:before {
        content: ""
    }

    .fa-train:before {
        content: ""
    }

    .fa-subway:before {
        content: ""
    }

    .fa-medium:before {
        content: ""
    }

    .fa-yc:before, .fa-y-combinator:before {
        content: ""
    }

    .fa-optin-monster:before {
        content: ""
    }

    .fa-opencart:before {
        content: ""
    }

    .fa-expeditedssl:before {
        content: ""
    }

    .fa-battery-4:before, .fa-battery:before, .fa-battery-full:before {
        content: ""
    }

    .fa-battery-3:before, .fa-battery-three-quarters:before {
        content: ""
    }

    .fa-battery-2:before, .fa-battery-half:before {
        content: ""
    }

    .fa-battery-1:before, .fa-battery-quarter:before {
        content: ""
    }

    .fa-battery-0:before, .fa-battery-empty:before {
        content: ""
    }

    .fa-mouse-pointer:before {
        content: ""
    }

    .fa-i-cursor:before {
        content: ""
    }

    .fa-object-group:before {
        content: ""
    }

    .fa-object-ungroup:before {
        content: ""
    }

    .fa-sticky-note:before {
        content: ""
    }

    .fa-sticky-note-o:before {
        content: ""
    }

    .fa-cc-jcb:before {
        content: ""
    }

    .fa-cc-diners-club:before {
        content: ""
    }

    .fa-clone:before {
        content: ""
    }

    .fa-balance-scale:before {
        content: ""
    }

    .fa-hourglass-o:before {
        content: ""
    }

    .fa-hourglass-1:before, .fa-hourglass-start:before {
        content: ""
    }

    .fa-hourglass-2:before, .fa-hourglass-half:before {
        content: ""
    }

    .fa-hourglass-3:before, .fa-hourglass-end:before {
        content: ""
    }

    .fa-hourglass:before {
        content: ""
    }

    .fa-hand-grab-o:before, .fa-hand-rock-o:before {
        content: ""
    }

    .fa-hand-stop-o:before, .fa-hand-paper-o:before {
        content: ""
    }

    .fa-hand-scissors-o:before {
        content: ""
    }

    .fa-hand-lizard-o:before {
        content: ""
    }

    .fa-hand-spock-o:before {
        content: ""
    }

    .fa-hand-pointer-o:before {
        content: ""
    }

    .fa-hand-peace-o:before {
        content: ""
    }

    .fa-trademark:before {
        content: ""
    }

    .fa-registered:before {
        content: ""
    }

    .fa-creative-commons:before {
        content: ""
    }

    .fa-gg:before {
        content: ""
    }

    .fa-gg-circle:before {
        content: ""
    }

    .fa-tripadvisor:before {
        content: ""
    }

    .fa-odnoklassniki:before {
        content: ""
    }

    .fa-odnoklassniki-square:before {
        content: ""
    }

    .fa-get-pocket:before {
        content: ""
    }

    .fa-wikipedia-w:before {
        content: ""
    }

    .fa-safari:before {
        content: ""
    }

    .fa-chrome:before {
        content: ""
    }

    .fa-firefox:before {
        content: ""
    }

    .fa-opera:before {
        content: ""
    }

    .fa-internet-explorer:before {
        content: ""
    }

    .fa-tv:before, .fa-television:before {
        content: ""
    }

    .fa-contao:before {
        content: ""
    }

    .fa-500px:before {
        content: ""
    }

    .fa-amazon:before {
        content: ""
    }

    .fa-calendar-plus-o:before {
        content: ""
    }

    .fa-calendar-minus-o:before {
        content: ""
    }

    .fa-calendar-times-o:before {
        content: ""
    }

    .fa-calendar-check-o:before {
        content: ""
    }

    .fa-industry:before {
        content: ""
    }

    .fa-map-pin:before {
        content: ""
    }

    .fa-map-signs:before {
        content: ""
    }

    .fa-map-o:before {
        content: ""
    }

    .fa-map:before {
        content: ""
    }

    .fa-commenting:before {
        content: ""
    }

    .fa-commenting-o:before {
        content: ""
    }

    .fa-houzz:before {
        content: ""
    }

    .fa-vimeo:before {
        content: ""
    }

    .fa-black-tie:before {
        content: ""
    }

    .fa-fonticons:before {
        content: ""
    }

    .fa-reddit-alien:before {
        content: ""
    }

    .fa-edge:before {
        content: ""
    }

    .fa-credit-card-alt:before {
        content: ""
    }

    .fa-codiepie:before {
        content: ""
    }

    .fa-modx:before {
        content: ""
    }

    .fa-fort-awesome:before {
        content: ""
    }

    .fa-usb:before {
        content: ""
    }

    .fa-product-hunt:before {
        content: ""
    }

    .fa-mixcloud:before {
        content: ""
    }

    .fa-scribd:before {
        content: ""
    }

    .fa-pause-circle:before {
        content: ""
    }

    .fa-pause-circle-o:before {
        content: ""
    }

    .fa-stop-circle:before {
        content: ""
    }

    .fa-stop-circle-o:before {
        content: ""
    }

    .fa-shopping-bag:before {
        content: ""
    }

    .fa-shopping-basket:before {
        content: ""
    }

    .fa-hashtag:before {
        content: ""
    }

    .fa-bluetooth:before {
        content: ""
    }

    .fa-bluetooth-b:before {
        content: ""
    }

    .fa-percent:before {
        content: ""
    }

    .fa-gitlab:before {
        content: ""
    }

    .fa-wpbeginner:before {
        content: ""
    }

    .fa-wpforms:before {
        content: ""
    }

    .fa-envira:before {
        content: ""
    }

    .fa-universal-access:before {
        content: ""
    }

    .fa-wheelchair-alt:before {
        content: ""
    }

    .fa-question-circle-o:before {
        content: ""
    }

    .fa-blind:before {
        content: ""
    }

    .fa-audio-description:before {
        content: ""
    }

    .fa-volume-control-phone:before {
        content: ""
    }

    .fa-braille:before {
        content: ""
    }

    .fa-assistive-listening-systems:before {
        content: ""
    }

    .fa-asl-interpreting:before, .fa-american-sign-language-interpreting:before {
        content: ""
    }

    .fa-deafness:before, .fa-hard-of-hearing:before, .fa-deaf:before {
        content: ""
    }

    .fa-glide:before {
        content: ""
    }

    .fa-glide-g:before {
        content: ""
    }

    .fa-signing:before, .fa-sign-language:before {
        content: ""
    }

    .fa-low-vision:before {
        content: ""
    }

    .fa-viadeo:before {
        content: ""
    }

    .fa-viadeo-square:before {
        content: ""
    }

    .fa-snapchat:before {
        content: ""
    }

    .fa-snapchat-ghost:before {
        content: ""
    }

    .fa-snapchat-square:before {
        content: ""
    }

    .fa-pied-piper:before {
        content: ""
    }

    .fa-first-order:before {
        content: ""
    }

    .fa-yoast:before {
        content: ""
    }

    .fa-themeisle:before {
        content: ""
    }

    .fa-google-plus-circle:before, .fa-google-plus-official:before {
        content: ""
    }

    .fa-fa:before, .fa-font-awesome:before {
        content: ""
    }

    .fa-handshake-o:before {
        content: ""
    }

    .fa-envelope-open:before {
        content: ""
    }

    .fa-envelope-open-o:before {
        content: ""
    }

    .fa-linode:before {
        content: ""
    }

    .fa-address-book:before {
        content: ""
    }

    .fa-address-book-o:before {
        content: ""
    }

    .fa-vcard:before, .fa-address-card:before {
        content: ""
    }

    .fa-vcard-o:before, .fa-address-card-o:before {
        content: ""
    }

    .fa-user-circle:before {
        content: ""
    }

    .fa-user-circle-o:before {
        content: ""
    }

    .fa-user-o:before {
        content: ""
    }

    .fa-id-badge:before {
        content: ""
    }

    .fa-drivers-license:before, .fa-id-card:before {
        content: ""
    }

    .fa-drivers-license-o:before, .fa-id-card-o:before {
        content: ""
    }

    .fa-quora:before {
        content: ""
    }

    .fa-free-code-camp:before {
        content: ""
    }

    .fa-telegram:before {
        content: ""
    }

    .fa-thermometer-4:before, .fa-thermometer:before, .fa-thermometer-full:before {
        content: ""
    }

    .fa-thermometer-3:before, .fa-thermometer-three-quarters:before {
        content: ""
    }

    .fa-thermometer-2:before, .fa-thermometer-half:before {
        content: ""
    }

    .fa-thermometer-1:before, .fa-thermometer-quarter:before {
        content: ""
    }

    .fa-thermometer-0:before, .fa-thermometer-empty:before {
        content: ""
    }

    .fa-shower:before {
        content: ""
    }

    .fa-bathtub:before, .fa-s15:before, .fa-bath:before {
        content: ""
    }

    .fa-podcast:before {
        content: ""
    }

    .fa-window-maximize:before {
        content: ""
    }

    .fa-window-minimize:before {
        content: ""
    }

    .fa-window-restore:before {
        content: ""
    }

    .fa-times-rectangle:before, .fa-window-close:before {
        content: ""
    }

    .fa-times-rectangle-o:before, .fa-window-close-o:before {
        content: ""
    }

    .fa-bandcamp:before {
        content: ""
    }

    .fa-grav:before {
        content: ""
    }

    .fa-etsy:before {
        content: ""
    }

    .fa-imdb:before {
        content: ""
    }

    .fa-ravelry:before {
        content: ""
    }

    .fa-eercast:before {
        content: ""
    }

    .fa-microchip:before {
        content: ""
    }

    .fa-snowflake-o:before {
        content: ""
    }

    .fa-superpowers:before {
        content: ""
    }

    .fa-wpexplorer:before {
        content: ""
    }

    .fa-meetup:before {
        content: ""
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    @font-face {
        font-family: Simple-Line-Icons;
        src: url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.eot);
        src: url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.eot?#iefix) format('embedded-opentype'), url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.woff) format('woff'), url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.ttf) format('truetype'), url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.svg#Simple-Line-Icons) format('svg');
        font-weight: 400;
        font-style: normal
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        @font-face {
            font-family: Simple-Line-Icons;
            src: url(//hikeupdatastorage.s3-us-west-2.amazonaws.com/libs/simple-line-icons/fonts/Simple-Line-Icons.svg#Simple-Line-Icons) format('svg')
        }
    }

    [data-icon]:before {
        font-family: Simple-Line-Icons;
        content: attr(data-icon);
        speak: none;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-action-redo, .icon-action-undo, .icon-anchor, .icon-arrow-down, .icon-arrow-left, .icon-arrow-right, .icon-arrow-up, .icon-badge, .icon-bag, .icon-ban, .icon-bar-chart, .icon-basket, .icon-basket-loaded, .icon-bell, .icon-book-open, .icon-briefcase, .icon-bubble, .icon-bubbles, .icon-bulb, .icon-calculator, .icon-calendar, .icon-call-end, .icon-call-in, .icon-call-out, .icon-camcorder, .icon-camera, .icon-check, .icon-chemistry, .icon-clock, .icon-close, .icon-cloud-download, .icon-cloud-upload, .icon-compass, .icon-control-end, .icon-control-forward, .icon-control-pause, .icon-control-play, .icon-control-rewind, .icon-control-start, .icon-credit-card, .icon-crop, .icon-cup, .icon-cursor, .icon-cursor-move, .icon-diamond, .icon-direction, .icon-directions, .icon-disc, .icon-dislike, .icon-doc, .icon-docs, .icon-drawer, .icon-drop, .icon-earphones, .icon-earphones-alt, .icon-emoticon-smile, .icon-energy, .icon-envelope, .icon-envelope-letter, .icon-envelope-open, .icon-equalizer, .icon-eye, .icon-eyeglasses, .icon-feed, .icon-film, .icon-fire, .icon-flag, .icon-folder, .icon-folder-alt, .icon-frame, .icon-game-controller, .icon-ghost, .icon-globe, .icon-globe-alt, .icon-graduation, .icon-graph, .icon-grid, .icon-handbag, .icon-heart, .icon-home, .icon-hourglass, .icon-info, .icon-key, .icon-layers, .icon-like, .icon-link, .icon-list, .icon-lock, .icon-lock-open, .icon-login, .icon-logout, .icon-loop, .icon-magic-wand, .icon-magnet, .icon-magnifier, .icon-magnifier-add, .icon-magnifier-remove, .icon-map, .icon-microphone, .icon-mouse, .icon-moustache, .icon-music-tone, .icon-music-tone-alt, .icon-note, .icon-notebook, .icon-paper-clip, .icon-paper-plane, .icon-pencil, .icon-picture, .icon-pie-chart, .icon-pin, .icon-plane, .icon-playlist, .icon-plus, .icon-pointer, .icon-power, .icon-present, .icon-printer, .icon-puzzle, .icon-question, .icon-refresh, .icon-reload, .icon-rocket, .icon-screen-desktop, .icon-screen-smartphone, .icon-screen-tablet, .icon-settings, .icon-share, .icon-share-alt, .icon-shield, .icon-shuffle, .icon-size-actual, .icon-size-fullscreen, .icon-social-dribbble, .icon-social-dropbox, .icon-social-facebook, .icon-social-tumblr, .icon-social-twitter, .icon-social-youtube, .icon-speech, .icon-speedometer, .icon-star, .icon-support, .icon-symbol-female, .icon-symbol-male, .icon-tag, .icon-target, .icon-trash, .icon-trophy, .icon-umbrella, .icon-user, .icon-user-female, .icon-user-follow, .icon-user-following, .icon-user-unfollow, .icon-users, .icon-vector, .icon-volume-1, .icon-volume-2, .icon-volume-off, .icon-wallet, .icon-wrench {
        font-family: Simple-Line-Icons;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased
    }

    .icon-user-female:before {
        content: ""
    }

    .icon-user-follow:before {
        content: ""
    }

    .icon-user-following:before {
        content: ""
    }

    .icon-user-unfollow:before {
        content: ""
    }

    .icon-trophy:before {
        content: ""
    }

    .icon-screen-smartphone:before {
        content: ""
    }

    .icon-screen-desktop:before {
        content: ""
    }

    .icon-plane:before {
        content: ""
    }

    .icon-notebook:before {
        content: ""
    }

    .icon-moustache:before {
        content: ""
    }

    .icon-mouse:before {
        content: ""
    }

    .icon-magnet:before {
        content: ""
    }

    .icon-energy:before {
        content: ""
    }

    .icon-emoticon-smile:before {
        content: ""
    }

    .icon-disc:before {
        content: ""
    }

    .icon-cursor-move:before {
        content: ""
    }

    .icon-crop:before {
        content: ""
    }

    .icon-credit-card:before {
        content: ""
    }

    .icon-chemistry:before {
        content: ""
    }

    .icon-user:before {
        content: ""
    }

    .icon-speedometer:before {
        content: ""
    }

    .icon-social-youtube:before {
        content: ""
    }

    .icon-social-twitter:before {
        content: ""
    }

    .icon-social-tumblr:before {
        content: ""
    }

    .icon-social-facebook:before {
        content: ""
    }

    .icon-social-dropbox:before {
        content: ""
    }

    .icon-social-dribbble:before {
        content: ""
    }

    .icon-shield:before {
        content: ""
    }

    .icon-screen-tablet:before {
        content: ""
    }

    .icon-magic-wand:before {
        content: ""
    }

    .icon-hourglass:before {
        content: ""
    }

    .icon-graduation:before {
        content: ""
    }

    .icon-ghost:before {
        content: ""
    }

    .icon-game-controller:before {
        content: ""
    }

    .icon-fire:before {
        content: ""
    }

    .icon-eyeglasses:before {
        content: ""
    }

    .icon-envelope-open:before {
        content: ""
    }

    .icon-envelope-letter:before {
        content: ""
    }

    .icon-bell:before {
        content: ""
    }

    .icon-badge:before {
        content: ""
    }

    .icon-anchor:before {
        content: ""
    }

    .icon-wallet:before {
        content: ""
    }

    .icon-vector:before {
        content: ""
    }

    .icon-speech:before {
        content: ""
    }

    .icon-puzzle:before {
        content: ""
    }

    .icon-printer:before {
        content: ""
    }

    .icon-present:before {
        content: ""
    }

    .icon-playlist:before {
        content: ""
    }

    .icon-pin:before {
        content: ""
    }

    .icon-picture:before {
        content: ""
    }

    .icon-map:before {
        content: ""
    }

    .icon-layers:before {
        content: ""
    }

    .icon-handbag:before {
        content: ""
    }

    .icon-globe-alt:before {
        content: ""
    }

    .icon-globe:before {
        content: ""
    }

    .icon-frame:before {
        content: ""
    }

    .icon-folder-alt:before {
        content: ""
    }

    .icon-film:before {
        content: ""
    }

    .icon-feed:before {
        content: ""
    }

    .icon-earphones-alt:before {
        content: ""
    }

    .icon-earphones:before {
        content: ""
    }

    .icon-drop:before {
        content: ""
    }

    .icon-drawer:before {
        content: ""
    }

    .icon-docs:before {
        content: ""
    }

    .icon-directions:before {
        content: ""
    }

    .icon-direction:before {
        content: ""
    }

    .icon-diamond:before {
        content: ""
    }

    .icon-cup:before {
        content: ""
    }

    .icon-compass:before {
        content: ""
    }

    .icon-call-out:before {
        content: ""
    }

    .icon-call-in:before {
        content: ""
    }

    .icon-call-end:before {
        content: ""
    }

    .icon-calculator:before {
        content: ""
    }

    .icon-bubbles:before {
        content: ""
    }

    .icon-briefcase:before {
        content: ""
    }

    .icon-book-open:before {
        content: ""
    }

    .icon-basket-loaded:before {
        content: ""
    }

    .icon-basket:before {
        content: ""
    }

    .icon-bag:before {
        content: ""
    }

    .icon-action-undo:before {
        content: ""
    }

    .icon-action-redo:before {
        content: ""
    }

    .icon-wrench:before {
        content: ""
    }

    .icon-umbrella:before {
        content: ""
    }

    .icon-trash:before {
        content: ""
    }

    .icon-tag:before {
        content: ""
    }

    .icon-support:before {
        content: ""
    }

    .icon-size-fullscreen:before {
        content: ""
    }

    .icon-size-actual:before {
        content: ""
    }

    .icon-shuffle:before {
        content: ""
    }

    .icon-share-alt:before {
        content: ""
    }

    .icon-share:before {
        content: ""
    }

    .icon-rocket:before {
        content: ""
    }

    .icon-question:before {
        content: ""
    }

    .icon-pie-chart:before {
        content: ""
    }

    .icon-pencil:before {
        content: ""
    }

    .icon-note:before {
        content: ""
    }

    .icon-music-tone-alt:before {
        content: ""
    }

    .icon-music-tone:before {
        content: ""
    }

    .icon-microphone:before {
        content: ""
    }

    .icon-loop:before {
        content: ""
    }

    .icon-logout:before {
        content: ""
    }

    .icon-login:before {
        content: ""
    }

    .icon-list:before {
        content: ""
    }

    .icon-like:before {
        content: ""
    }

    .icon-home:before {
        content: ""
    }

    .icon-grid:before {
        content: ""
    }

    .icon-graph:before {
        content: ""
    }

    .icon-equalizer:before {
        content: ""
    }

    .icon-dislike:before {
        content: ""
    }

    .icon-cursor:before {
        content: ""
    }

    .icon-control-start:before {
        content: ""
    }

    .icon-control-rewind:before {
        content: ""
    }

    .icon-control-play:before {
        content: ""
    }

    .icon-control-pause:before {
        content: ""
    }

    .icon-control-forward:before {
        content: ""
    }

    .icon-control-end:before {
        content: ""
    }

    .icon-calendar:before {
        content: ""
    }

    .icon-bulb:before {
        content: ""
    }

    .icon-bar-chart:before {
        content: ""
    }

    .icon-arrow-up:before {
        content: ""
    }

    .icon-arrow-right:before {
        content: ""
    }

    .icon-arrow-left:before {
        content: ""
    }

    .icon-arrow-down:before {
        content: ""
    }

    .icon-ban:before {
        content: ""
    }

    .icon-bubble:before {
        content: ""
    }

    .icon-camcorder:before {
        content: ""
    }

    .icon-camera:before {
        content: ""
    }

    .icon-check:before {
        content: ""
    }

    .icon-clock:before {
        content: ""
    }

    .icon-close:before {
        content: ""
    }

    .icon-cloud-download:before {
        content: ""
    }

    .icon-cloud-upload:before {
        content: ""
    }

    .icon-doc:before {
        content: ""
    }

    .icon-envelope:before {
        content: ""
    }

    .icon-eye:before {
        content: ""
    }

    .icon-flag:before {
        content: ""
    }

    .icon-folder:before {
        content: ""
    }

    .icon-heart:before {
        content: ""
    }

    .icon-info:before {
        content: ""
    }

    .icon-key:before {
        content: ""
    }

    .icon-link:before {
        content: ""
    }

    .icon-lock:before {
        content: ""
    }

    .icon-lock-open:before {
        content: ""
    }

    .icon-magnifier:before {
        content: ""
    }

    .icon-magnifier-add:before {
        content: ""
    }

    .icon-magnifier-remove:before {
        content: ""
    }

    .icon-paper-clip:before {
        content: ""
    }

    .icon-paper-plane:before {
        content: ""
    }

    .icon-plus:before {
        content: ""
    }

    .icon-pointer:before {
        content: ""
    }

    .icon-power:before {
        content: ""
    }

    .icon-refresh:before {
        content: ""
    }

    .icon-reload:before {
        content: ""
    }

    .icon-settings:before {
        content: ""
    }

    .icon-star:before {
        content: ""
    }

    .icon-symbol-female:before {
        content: ""
    }

    .icon-symbol-male:before {
        content: ""
    }

    .icon-target:before {
        content: ""
    }

    .icon-volume-1:before {
        content: ""
    }

    .icon-volume-2:before {
        content: ""
    }

    .icon-volume-off:before {
        content: ""
    }

    .icon-users:before {
        content: ""
    }

    [class^="famfamfam-flag"] {
        display: inline-block;
        width: 16px;
        height: 11px;
        line-height: 11px;
        background-image: url(/Content/flags/famfamfam-flags.png);
        background-position: 0 0;
        background-repeat: no-repeat
    }

    .famfamfam-flag-zw {
        background-position: 0 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-zm {
        background-position: -16px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-za {
        background-position: 0 -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-yt {
        background-position: -16px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ye {
        background-position: -32px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ws {
        background-position: -32px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-wf {
        background-position: 0 -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-wales {
        background-position: -16px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-vu {
        background-position: -32px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-vn {
        background-position: 0 -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-vi {
        background-position: -16px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-vg {
        background-position: -32px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ve {
        background-position: -48px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-vc {
        background-position: -48px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-va {
        background-position: -48px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-uz {
        background-position: -48px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-uy {
        background-position: 0 -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-us {
        background-position: -16px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-um {
        background-position: -16px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ug {
        background-position: -32px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ua {
        background-position: -48px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tz {
        background-position: -64px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tw {
        background-position: -64px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tv {
        background-position: -64px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tt {
        background-position: -64px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tr {
        background-position: -64px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-to {
        background-position: 0 -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tn {
        background-position: -16px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tm {
        background-position: -32px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tl {
        background-position: -48px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tk {
        background-position: -64px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tj {
        background-position: 0 -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-th {
        background-position: -16px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tg {
        background-position: -32px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tf {
        background-position: -48px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-td {
        background-position: -64px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-tc {
        background-position: -80px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sz {
        background-position: -80px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sy {
        background-position: -80px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sx {
        background-position: -80px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sv {
        background-position: -80px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-st {
        background-position: -80px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ss {
        background-position: -80px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sr {
        background-position: 0 -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-so {
        background-position: -16px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sn {
        background-position: -32px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sm {
        background-position: -48px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sl {
        background-position: -64px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sk {
        background-position: -80px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-si {
        background-position: -96px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sh {
        background-position: -96px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sg {
        background-position: -96px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-se {
        background-position: -96px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sd {
        background-position: -96px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-scotland {
        background-position: -96px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sc {
        background-position: -96px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sb {
        background-position: -96px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sa {
        background-position: 0 -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-rw {
        background-position: -16px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ru {
        background-position: -32px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-rs {
        background-position: -48px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ro {
        background-position: -64px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-qa {
        background-position: -80px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-py {
        background-position: -96px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pw {
        background-position: 0 -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pt {
        background-position: -16px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ps {
        background-position: -32px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pr {
        background-position: -48px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pn {
        background-position: -64px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pm {
        background-position: -80px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pl {
        background-position: -96px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pk {
        background-position: -112px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ph {
        background-position: -112px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pg {
        background-position: -112px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pf {
        background-position: -112px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pe {
        background-position: -112px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-pa {
        background-position: -112px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-om {
        background-position: -112px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nz {
        background-position: -112px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nu {
        background-position: -112px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nr {
        background-position: -112px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-no {
        background-position: 0 -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bv {
        background-position: 0 -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-sj {
        background-position: 0 -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nl {
        background-position: -16px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ni {
        background-position: -32px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ng {
        background-position: -48px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nf {
        background-position: -64px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ne {
        background-position: -80px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-nc {
        background-position: -96px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-na {
        background-position: -112px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mz {
        background-position: -128px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-my {
        background-position: -128px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mx {
        background-position: -128px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mw {
        background-position: -128px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mv {
        background-position: -128px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mu {
        background-position: -128px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mt {
        background-position: -128px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ms {
        background-position: -128px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mr {
        background-position: -128px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mq {
        background-position: -128px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mp {
        background-position: -128px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mo {
        background-position: 0 -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mn {
        background-position: -16px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mm {
        background-position: -32px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ml {
        background-position: -48px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mk {
        background-position: -64px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mh {
        background-position: -80px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mg {
        background-position: -96px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-me {
        background-position: 0 -132px;
        width: 16px;
        height: 12px
    }

    .famfamfam-flag-md {
        background-position: -112px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mc {
        background-position: -128px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ma {
        background-position: -16px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ly {
        background-position: -32px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lv {
        background-position: -48px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lu {
        background-position: -64px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lt {
        background-position: -80px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ls {
        background-position: -96px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lr {
        background-position: -112px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lk {
        background-position: -128px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-li {
        background-position: -144px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lc {
        background-position: -144px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-lb {
        background-position: -144px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-la {
        background-position: -144px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kz {
        background-position: -144px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ky {
        background-position: -144px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kw {
        background-position: -144px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kr {
        background-position: -144px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kp {
        background-position: -144px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kn {
        background-position: -144px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-km {
        background-position: -144px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ki {
        background-position: -144px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kh {
        background-position: -144px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-kg {
        background-position: 0 -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ke {
        background-position: -16px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-jp {
        background-position: -32px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-jo {
        background-position: -48px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-jm {
        background-position: -64px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-je {
        background-position: -80px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-it {
        background-position: -96px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-is {
        background-position: -112px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ir {
        background-position: -128px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-iq {
        background-position: -144px -144px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-io {
        background-position: -160px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-in {
        background-position: -160px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-im {
        background-position: -160px -22px;
        width: 16px;
        height: 9px
    }

    .famfamfam-flag-il {
        background-position: -160px -31px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ie {
        background-position: -160px -42px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-id {
        background-position: -160px -53px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-hu {
        background-position: -160px -64px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ht {
        background-position: -160px -75px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-hr {
        background-position: -160px -86px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-hn {
        background-position: -160px -97px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-hk {
        background-position: -160px -108px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gy {
        background-position: -160px -119px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gw {
        background-position: -160px -130px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gu {
        background-position: -160px -141px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gt {
        background-position: 0 -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gs {
        background-position: -16px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gr {
        background-position: -32px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gq {
        background-position: -48px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gp {
        background-position: -64px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gn {
        background-position: -80px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gm {
        background-position: -96px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gl {
        background-position: -112px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gi {
        background-position: -128px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gh {
        background-position: -144px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gg {
        background-position: -160px -155px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ge {
        background-position: -176px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gd {
        background-position: -176px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gb {
        background-position: -176px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ga {
        background-position: -176px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fr {
        background-position: -176px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-gf {
        background-position: -176px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-re {
        background-position: -176px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-mf {
        background-position: -176px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bl {
        background-position: -176px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fo {
        background-position: -176px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fm {
        background-position: -176px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fk {
        background-position: -176px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fj {
        background-position: -176px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fi {
        background-position: -176px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-fam {
        background-position: -176px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-eu {
        background-position: -176px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-et {
        background-position: -176px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-es {
        background-position: -176px -143px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-er {
        background-position: -176px -154px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-england {
        background-position: 0 -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-eh {
        background-position: -16px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-eg {
        background-position: -32px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ee {
        background-position: -48px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ec {
        background-position: -64px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-dz {
        background-position: -80px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-do {
        background-position: -96px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-dm {
        background-position: -112px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-dk {
        background-position: -128px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-dj {
        background-position: -144px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-de {
        background-position: -160px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cz {
        background-position: -176px -166px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cy {
        background-position: 0 -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cx {
        background-position: -16px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cw {
        background-position: -32px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cv {
        background-position: -48px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cu {
        background-position: -64px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cs {
        background-position: -80px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cr {
        background-position: -96px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-co {
        background-position: -112px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cn {
        background-position: -128px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cm {
        background-position: -144px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cl {
        background-position: -160px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ck {
        background-position: -176px -177px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ci {
        background-position: -192px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cg {
        background-position: -192px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cf {
        background-position: -192px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cd {
        background-position: -192px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-cc {
        background-position: -192px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-catalonia {
        background-position: -192px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ca {
        background-position: -192px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bz {
        background-position: -192px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-by {
        background-position: -192px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bw {
        background-position: -192px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bt {
        background-position: -192px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bs {
        background-position: -192px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-br {
        background-position: -192px -132px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bq {
        background-position: -192px -143px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bo {
        background-position: -192px -154px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bn {
        background-position: -192px -165px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bm {
        background-position: -192px -176px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bj {
        background-position: 0 -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bi {
        background-position: -16px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bh {
        background-position: -32px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bg {
        background-position: -48px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bf {
        background-position: -64px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-be {
        background-position: -80px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bd {
        background-position: -96px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-bb {
        background-position: -112px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ba {
        background-position: -128px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-az {
        background-position: -144px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ax {
        background-position: -160px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-aw {
        background-position: -176px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-au {
        background-position: -192px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-hm {
        background-position: -192px -188px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-at {
        background-position: -208px 0;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-as {
        background-position: -208px -11px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ar {
        background-position: -208px -22px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ao {
        background-position: -208px -33px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-an {
        background-position: -208px -44px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-am {
        background-position: -208px -55px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-al {
        background-position: -208px -66px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ai {
        background-position: -208px -77px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ag {
        background-position: -208px -88px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-af {
        background-position: -208px -99px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ae {
        background-position: -208px -110px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-ad {
        background-position: -208px -121px;
        width: 16px;
        height: 11px
    }

    .famfamfam-flag-np {
        background-position: -208px -132px;
        width: 9px;
        height: 11px
    }

    .famfamfam-flag-ch {
        background-position: -208px -143px;
        width: 11px;
        height: 11px
    }

    @charset "UTF-8";
    .label, sub, sup {
        vertical-align: baseline
    }

    hr, img {
        border: 0
    }

    body, figure {
        margin: 0
    }

    .btn-group > .btn-group, .btn-toolbar .btn, .btn-toolbar .btn-group, .btn-toolbar .input-group, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .dropdown-menu {
        float: left
    }

    .img-responsive, .img-thumbnail, .table, label {
        max-width: 100%
    }

    .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .pre-scrollable {
        max-height: 340px
    }

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
    }

    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block
    }

    audio, canvas, progress, video {
        display: inline-block;
        vertical-align: baseline
    }

    audio:not([controls]) {
        display: none;
        height: 0
    }

    [hidden], template {
        display: none
    }

    a {
        background-color: transparent
    }

    a:active, a:hover {
        outline: 0
    }

    b, optgroup, strong {
        font-weight: 700
    }

    dfn {
        font-style: italic
    }

    h1 {
        margin: .67em 0
    }

    mark {
        background: #ff0;
        color: #000
    }

    sub, sup {
        font-size: 75%;
        line-height: 0;
        position: relative
    }

    sup {
        top: -.5em
    }

    sub {
        bottom: -.25em
    }

    img {
        vertical-align: middle
    }

    svg:not(:root) {
        overflow: hidden
    }

    hr {
        box-sizing: content-box;
        height: 0
    }

    pre, textarea {
        overflow: auto
    }

    code, kbd, pre, samp {
        font-size: 1em
    }

    button, input, optgroup, select, textarea {
        color: inherit;
        font: inherit;
        margin: 0
    }

    button {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    button, html input[type=button], input[type=reset], input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }

    button[disabled], html input[disabled] {
        cursor: default
    }

    button::-moz-focus-inner, input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
        height: auto
    }

    input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    td, th {
        padding: 0
    }

    @media print {
        blockquote, img, pre, tr {
            page-break-inside: avoid
        }

        *, :after, :before {
            background: 0 0 !important;
            color: #000 !important;
            box-shadow: none !important;
            text-shadow: none !important
        }

        a, a:visited {
            text-decoration: underline
        }

        a[href]:after {
            content: " (" attr(href) ")"
        }

        abbr[title]:after {
            content: " (" attr(title) ")"
        }

        a[href^="#"]:after, a[href^="javascript:"]:after {
            content: ""
        }

        blockquote, pre {
            border: 1px solid #999
        }

        thead {
            display: table-header-group
        }

        img {
            max-width: 100% !important
        }

        h2, h3, p {
            orphans: 3;
            widows: 3
        }

        h2, h3 {
            page-break-after: avoid
        }

        .navbar {
            display: none
        }

        .btn > .caret, .dropup > .btn > .caret {
            border-top-color: #000 !important
        }

        .label {
            border: 1px solid #000
        }

        .table {
            border-collapse: collapse !important
        }

        .table td, .table th {
            background-color: #fff !important
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd !important
        }
    }

    .btn, .btn-danger.active, .btn-danger:active, .btn-default.active, .btn-default:active, .btn-info.active, .btn-info:active, .btn-primary.active, .btn-primary:active, .btn-warning.active, .btn-warning:active, .btn.active, .btn:active, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover, .form-control, .navbar-toggle, .open > .btn-danger.dropdown-toggle, .open > .btn-default.dropdown-toggle, .open > .btn-info.dropdown-toggle, .open > .btn-primary.dropdown-toggle, .open > .btn-warning.dropdown-toggle {
        background-image: none
    }

    .img-thumbnail, body {
        background-color: #fff
    }

    @font-face {
        font-family: 'Glyphicons Halflings';
        src: url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.eot);
        src: url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.woff2) format("woff2"), url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.woff) format("woff"), url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.ttf) format("truetype"), url(/libs/bootstrap/fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
    }

    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .glyphicon-asterisk:before {
        content: "*"
    }

    .glyphicon-plus:before {
        content: "+"
    }

    .glyphicon-eur:before, .glyphicon-euro:before {
        content: "€"
    }

    .glyphicon-minus:before {
        content: "−"
    }

    .glyphicon-cloud:before {
        content: "☁"
    }

    .glyphicon-envelope:before {
        content: "✉"
    }

    .glyphicon-pencil:before {
        content: "✏"
    }

    .glyphicon-glass:before {
        content: ""
    }

    .glyphicon-music:before {
        content: ""
    }

    .glyphicon-search:before {
        content: ""
    }

    .glyphicon-heart:before {
        content: ""
    }

    .glyphicon-star:before {
        content: ""
    }

    .glyphicon-star-empty:before {
        content: ""
    }

    .glyphicon-user:before {
        content: ""
    }

    .glyphicon-film:before {
        content: ""
    }

    .glyphicon-th-large:before {
        content: ""
    }

    .glyphicon-th:before {
        content: ""
    }

    .glyphicon-th-list:before {
        content: ""
    }

    .glyphicon-ok:before {
        content: ""
    }

    .glyphicon-remove:before {
        content: ""
    }

    .glyphicon-zoom-in:before {
        content: ""
    }

    .glyphicon-zoom-out:before {
        content: ""
    }

    .glyphicon-off:before {
        content: ""
    }

    .glyphicon-signal:before {
        content: ""
    }

    .glyphicon-cog:before {
        content: ""
    }

    .glyphicon-trash:before {
        content: ""
    }

    .glyphicon-home:before {
        content: ""
    }

    .glyphicon-file:before {
        content: ""
    }

    .glyphicon-time:before {
        content: ""
    }

    .glyphicon-road:before {
        content: ""
    }

    .glyphicon-download-alt:before {
        content: ""
    }

    .glyphicon-download:before {
        content: ""
    }

    .glyphicon-upload:before {
        content: ""
    }

    .glyphicon-inbox:before {
        content: ""
    }

    .glyphicon-play-circle:before {
        content: ""
    }

    .glyphicon-repeat:before {
        content: ""
    }

    .glyphicon-refresh:before {
        content: ""
    }

    .glyphicon-list-alt:before {
        content: ""
    }

    .glyphicon-lock:before {
        content: ""
    }

    .glyphicon-flag:before {
        content: ""
    }

    .glyphicon-headphones:before {
        content: ""
    }

    .glyphicon-volume-off:before {
        content: ""
    }

    .glyphicon-volume-down:before {
        content: ""
    }

    .glyphicon-volume-up:before {
        content: ""
    }

    .glyphicon-qrcode:before {
        content: ""
    }

    .glyphicon-barcode:before {
        content: ""
    }

    .glyphicon-tag:before {
        content: ""
    }

    .glyphicon-tags:before {
        content: ""
    }

    .glyphicon-book:before {
        content: ""
    }

    .glyphicon-bookmark:before {
        content: ""
    }

    .glyphicon-print:before {
        content: ""
    }

    .glyphicon-camera:before {
        content: ""
    }

    .glyphicon-font:before {
        content: ""
    }

    .glyphicon-bold:before {
        content: ""
    }

    .glyphicon-italic:before {
        content: ""
    }

    .glyphicon-text-height:before {
        content: ""
    }

    .glyphicon-text-width:before {
        content: ""
    }

    .glyphicon-align-left:before {
        content: ""
    }

    .glyphicon-align-center:before {
        content: ""
    }

    .glyphicon-align-right:before {
        content: ""
    }

    .glyphicon-align-justify:before {
        content: ""
    }

    .glyphicon-list:before {
        content: ""
    }

    .glyphicon-indent-left:before {
        content: ""
    }

    .glyphicon-indent-right:before {
        content: ""
    }

    .glyphicon-facetime-video:before {
        content: ""
    }

    .glyphicon-picture:before {
        content: ""
    }

    .glyphicon-map-marker:before {
        content: ""
    }

    .glyphicon-adjust:before {
        content: ""
    }

    .glyphicon-tint:before {
        content: ""
    }

    .glyphicon-edit:before {
        content: ""
    }

    .glyphicon-share:before {
        content: ""
    }

    .glyphicon-check:before {
        content: ""
    }

    .glyphicon-move:before {
        content: ""
    }

    .glyphicon-step-backward:before {
        content: ""
    }

    .glyphicon-fast-backward:before {
        content: ""
    }

    .glyphicon-backward:before {
        content: ""
    }

    .glyphicon-play:before {
        content: ""
    }

    .glyphicon-pause:before {
        content: ""
    }

    .glyphicon-stop:before {
        content: ""
    }

    .glyphicon-forward:before {
        content: ""
    }

    .glyphicon-fast-forward:before {
        content: ""
    }

    .glyphicon-step-forward:before {
        content: ""
    }

    .glyphicon-eject:before {
        content: ""
    }

    .glyphicon-chevron-left:before {
        content: ""
    }

    .glyphicon-chevron-right:before {
        content: ""
    }

    .glyphicon-plus-sign:before {
        content: ""
    }

    .glyphicon-minus-sign:before {
        content: ""
    }

    .glyphicon-remove-sign:before {
        content: ""
    }

    .glyphicon-ok-sign:before {
        content: ""
    }

    .glyphicon-question-sign:before {
        content: ""
    }

    .glyphicon-info-sign:before {
        content: ""
    }

    .glyphicon-screenshot:before {
        content: ""
    }

    .glyphicon-remove-circle:before {
        content: ""
    }

    .glyphicon-ok-circle:before {
        content: ""
    }

    .glyphicon-ban-circle:before {
        content: ""
    }

    .glyphicon-arrow-left:before {
        content: ""
    }

    .glyphicon-arrow-right:before {
        content: ""
    }

    .glyphicon-arrow-up:before {
        content: ""
    }

    .glyphicon-arrow-down:before {
        content: ""
    }

    .glyphicon-share-alt:before {
        content: ""
    }

    .glyphicon-resize-full:before {
        content: ""
    }

    .glyphicon-resize-small:before {
        content: ""
    }

    .glyphicon-exclamation-sign:before {
        content: ""
    }

    .glyphicon-gift:before {
        content: ""
    }

    .glyphicon-leaf:before {
        content: ""
    }

    .glyphicon-fire:before {
        content: ""
    }

    .glyphicon-eye-open:before {
        content: ""
    }

    .glyphicon-eye-close:before {
        content: ""
    }

    .glyphicon-warning-sign:before {
        content: ""
    }

    .glyphicon-plane:before {
        content: ""
    }

    .glyphicon-calendar:before {
        content: ""
    }

    .glyphicon-random:before {
        content: ""
    }

    .glyphicon-comment:before {
        content: ""
    }

    .glyphicon-magnet:before {
        content: ""
    }

    .glyphicon-chevron-up:before {
        content: ""
    }

    .glyphicon-chevron-down:before {
        content: ""
    }

    .glyphicon-retweet:before {
        content: ""
    }

    .glyphicon-shopping-cart:before {
        content: ""
    }

    .glyphicon-folder-close:before {
        content: ""
    }

    .glyphicon-folder-open:before {
        content: ""
    }

    .glyphicon-resize-vertical:before {
        content: ""
    }

    .glyphicon-resize-horizontal:before {
        content: ""
    }

    .glyphicon-hdd:before {
        content: ""
    }

    .glyphicon-bullhorn:before {
        content: ""
    }

    .glyphicon-bell:before {
        content: ""
    }

    .glyphicon-certificate:before {
        content: ""
    }

    .glyphicon-thumbs-up:before {
        content: ""
    }

    .glyphicon-thumbs-down:before {
        content: ""
    }

    .glyphicon-hand-right:before {
        content: ""
    }

    .glyphicon-hand-left:before {
        content: ""
    }

    .glyphicon-hand-up:before {
        content: ""
    }

    .glyphicon-hand-down:before {
        content: ""
    }

    .glyphicon-circle-arrow-right:before {
        content: ""
    }

    .glyphicon-circle-arrow-left:before {
        content: ""
    }

    .glyphicon-circle-arrow-up:before {
        content: ""
    }

    .glyphicon-circle-arrow-down:before {
        content: ""
    }

    .glyphicon-globe:before {
        content: ""
    }

    .glyphicon-wrench:before {
        content: ""
    }

    .glyphicon-tasks:before {
        content: ""
    }

    .glyphicon-filter:before {
        content: ""
    }

    .glyphicon-briefcase:before {
        content: ""
    }

    .glyphicon-fullscreen:before {
        content: ""
    }

    .glyphicon-dashboard:before {
        content: ""
    }

    .glyphicon-paperclip:before {
        content: ""
    }

    .glyphicon-heart-empty:before {
        content: ""
    }

    .glyphicon-link:before {
        content: ""
    }

    .glyphicon-phone:before {
        content: ""
    }

    .glyphicon-pushpin:before {
        content: ""
    }

    .glyphicon-usd:before {
        content: ""
    }

    .glyphicon-gbp:before {
        content: ""
    }

    .glyphicon-sort:before {
        content: ""
    }

    .glyphicon-sort-by-alphabet:before {
        content: ""
    }

    .glyphicon-sort-by-alphabet-alt:before {
        content: ""
    }

    .glyphicon-sort-by-order:before {
        content: ""
    }

    .glyphicon-sort-by-order-alt:before {
        content: ""
    }

    .glyphicon-sort-by-attributes:before {
        content: ""
    }

    .glyphicon-sort-by-attributes-alt:before {
        content: ""
    }

    .glyphicon-unchecked:before {
        content: ""
    }

    .glyphicon-expand:before {
        content: ""
    }

    .glyphicon-collapse-down:before {
        content: ""
    }

    .glyphicon-collapse-up:before {
        content: ""
    }

    .glyphicon-log-in:before {
        content: ""
    }

    .glyphicon-flash:before {
        content: ""
    }

    .glyphicon-log-out:before {
        content: ""
    }

    .glyphicon-new-window:before {
        content: ""
    }

    .glyphicon-record:before {
        content: ""
    }

    .glyphicon-save:before {
        content: ""
    }

    .glyphicon-open:before {
        content: ""
    }

    .glyphicon-saved:before {
        content: ""
    }

    .glyphicon-import:before {
        content: ""
    }

    .glyphicon-export:before {
        content: ""
    }

    .glyphicon-send:before {
        content: ""
    }

    .glyphicon-floppy-disk:before {
        content: ""
    }

    .glyphicon-floppy-saved:before {
        content: ""
    }

    .glyphicon-floppy-remove:before {
        content: ""
    }

    .glyphicon-floppy-save:before {
        content: ""
    }

    .glyphicon-floppy-open:before {
        content: ""
    }

    .glyphicon-credit-card:before {
        content: ""
    }

    .glyphicon-transfer:before {
        content: ""
    }

    .glyphicon-cutlery:before {
        content: ""
    }

    .glyphicon-header:before {
        content: ""
    }

    .glyphicon-compressed:before {
        content: ""
    }

    .glyphicon-earphone:before {
        content: ""
    }

    .glyphicon-phone-alt:before {
        content: ""
    }

    .glyphicon-tower:before {
        content: ""
    }

    .glyphicon-stats:before {
        content: ""
    }

    .glyphicon-sd-video:before {
        content: ""
    }

    .glyphicon-hd-video:before {
        content: ""
    }

    .glyphicon-subtitles:before {
        content: ""
    }

    .glyphicon-sound-stereo:before {
        content: ""
    }

    .glyphicon-sound-dolby:before {
        content: ""
    }

    .glyphicon-sound-5-1:before {
        content: ""
    }

    .glyphicon-sound-6-1:before {
        content: ""
    }

    .glyphicon-sound-7-1:before {
        content: ""
    }

    .glyphicon-copyright-mark:before {
        content: ""
    }

    .glyphicon-registration-mark:before {
        content: ""
    }

    .glyphicon-cloud-download:before {
        content: ""
    }

    .glyphicon-cloud-upload:before {
        content: ""
    }

    .glyphicon-tree-conifer:before {
        content: ""
    }

    .glyphicon-tree-deciduous:before {
        content: ""
    }

    .glyphicon-cd:before {
        content: ""
    }

    .glyphicon-save-file:before {
        content: ""
    }

    .glyphicon-open-file:before {
        content: ""
    }

    .glyphicon-level-up:before {
        content: ""
    }

    .glyphicon-copy:before {
        content: ""
    }

    .glyphicon-paste:before {
        content: ""
    }

    .glyphicon-alert:before {
        content: ""
    }

    .glyphicon-equalizer:before {
        content: ""
    }

    .glyphicon-king:before {
        content: ""
    }

    .glyphicon-queen:before {
        content: ""
    }

    .glyphicon-pawn:before {
        content: ""
    }

    .glyphicon-bishop:before {
        content: ""
    }

    .glyphicon-knight:before {
        content: ""
    }

    .glyphicon-baby-formula:before {
        content: ""
    }

    .glyphicon-tent:before {
        content: "⛺"
    }

    .glyphicon-blackboard:before {
        content: ""
    }

    .glyphicon-bed:before {
        content: ""
    }

    .glyphicon-apple:before {
        content: ""
    }

    .glyphicon-erase:before {
        content: ""
    }

    .glyphicon-hourglass:before {
        content: "⌛"
    }

    .glyphicon-lamp:before {
        content: ""
    }

    .glyphicon-duplicate:before {
        content: ""
    }

    .glyphicon-piggy-bank:before {
        content: ""
    }

    .glyphicon-scissors:before {
        content: ""
    }

    .glyphicon-bitcoin:before, .glyphicon-btc:before, .glyphicon-xbt:before {
        content: ""
    }

    .glyphicon-jpy:before, .glyphicon-yen:before {
        content: "¥"
    }

    .glyphicon-rub:before, .glyphicon-ruble:before {
        content: "₽"
    }

    .glyphicon-scale:before {
        content: ""
    }

    .glyphicon-ice-lolly:before {
        content: ""
    }

    .glyphicon-ice-lolly-tasted:before {
        content: ""
    }

    .glyphicon-education:before {
        content: ""
    }

    .glyphicon-option-horizontal:before {
        content: ""
    }

    .glyphicon-option-vertical:before {
        content: ""
    }

    .glyphicon-menu-hamburger:before {
        content: ""
    }

    .glyphicon-modal-window:before {
        content: ""
    }

    .glyphicon-oil:before {
        content: ""
    }

    .glyphicon-grain:before {
        content: ""
    }

    .glyphicon-sunglasses:before {
        content: ""
    }

    .glyphicon-text-size:before {
        content: ""
    }

    .glyphicon-text-color:before {
        content: ""
    }

    .glyphicon-text-background:before {
        content: ""
    }

    .glyphicon-object-align-top:before {
        content: ""
    }

    .glyphicon-object-align-bottom:before {
        content: ""
    }

    .glyphicon-object-align-horizontal:before {
        content: ""
    }

    .glyphicon-object-align-left:before {
        content: ""
    }

    .glyphicon-object-align-vertical:before {
        content: ""
    }

    .glyphicon-object-align-right:before {
        content: ""
    }

    .glyphicon-triangle-right:before {
        content: ""
    }

    .glyphicon-triangle-left:before {
        content: ""
    }

    .glyphicon-triangle-bottom:before {
        content: ""
    }

    .glyphicon-triangle-top:before {
        content: ""
    }

    .glyphicon-console:before {
        content: ""
    }

    .glyphicon-superscript:before {
        content: ""
    }

    .glyphicon-subscript:before {
        content: ""
    }

    .glyphicon-menu-left:before {
        content: ""
    }

    .glyphicon-menu-right:before {
        content: ""
    }

    .glyphicon-menu-down:before {
        content: ""
    }

    .glyphicon-menu-up:before {
        content: ""
    }

    *, :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: transparent
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857;
        color: #333
    }

    button, input, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    a {
        color: #337ab7;
        text-decoration: none
    }

    a:focus, a:hover {
        color: #23527c;
        text-decoration: underline
    }

    a:focus {
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    .img-responsive {
        display: block;
        height: auto
    }

    .img-rounded {
        border-radius: 6px
    }

    .img-thumbnail {
        padding: 4px;
        line-height: 1.42857;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        display: inline-block;
        height: auto
    }

    .img-circle {
        border-radius: 50%
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border-top: 1px solid #eee
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    [role=button] {
        cursor: pointer
    }

    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }

    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-weight: 400;
        line-height: 1;
        color: #777
    }

    .h1, .h2, .h3, h1, h2, h3 {
        margin-top: 20px;
        margin-bottom: 10px
    }

    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
        font-size: 65%
    }

    .h4, .h5, .h6, h4, h5, h6 {
        margin-top: 10px;
        margin-bottom: 10px
    }

    .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-size: 75%
    }

    .h1, h1 {
        font-size: 36px
    }

    .h2, h2 {
        font-size: 30px
    }

    .h3, h3 {
        font-size: 24px
    }

    .h4, h4 {
        font-size: 18px
    }

    .h5, h5 {
        font-size: 14px
    }

    .h6, h6 {
        font-size: 12px
    }

    p {
        margin: 0 0 10px
    }

    .lead {
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.4
    }

    dt, kbd kbd, label {
        font-weight: 700
    }

    @media (min-width: 768px) {
        .lead {
            font-size: 21px
        }
    }

    .small, small {
        font-size: 85%
    }

    .mark, mark {
        background-color: #f9e491;
        padding: .2em
    }

    .list-inline, .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .text-left {
        text-align: left
    }

    .text-right {
        text-align: right
    }

    .text-center {
        text-align: center
    }

    .text-justify {
        text-align: justify
    }

    .text-nowrap {
        white-space: nowrap
    }

    .text-lowercase {
        text-transform: lowercase
    }

    .initialism, .text-uppercase {
        text-transform: uppercase
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .text-muted {
        color: #777
    }

    .text-primary {
        color: #337ab7
    }

    a.text-primary:focus, a.text-primary:hover {
        color: #286090
    }

    .text-success {
        color: #27a4b0
    }

    a.text-success:focus, a.text-success:hover {
        color: #1d7d86
    }

    .text-info {
        color: #327ad5
    }

    a.text-info:focus, a.text-info:hover {
        color: #2462b0
    }

    .text-warning {
        color: #c29d0b
    }

    a.text-warning:focus, a.text-warning:hover {
        color: #927608
    }

    .text-danger {
        color: #e73d4a
    }

    a.text-danger:focus, a.text-danger:hover {
        color: #d71b29
    }

    .bg-primary {
        color: #fff;
        background-color: #337ab7
    }

    a.bg-primary:focus, a.bg-primary:hover {
        background-color: #286090
    }

    .bg-success {
        background-color: #abe7ed
    }

    a.bg-success:focus, a.bg-success:hover {
        background-color: #81dbe3
    }

    .bg-info {
        background-color: #e0ebf9
    }

    a.bg-info:focus, a.bg-info:hover {
        background-color: #b5cff0
    }

    .bg-warning {
        background-color: #f9e491
    }

    a.bg-warning:focus, a.bg-warning:hover {
        background-color: #f6d861
    }

    .bg-danger {
        background-color: #fbe1e3
    }

    a.bg-danger:focus, a.bg-danger:hover {
        background-color: #f6b3b8
    }

    pre code, table {
        background-color: transparent
    }

    .page-header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee
    }

    dl, ol, ul {
        margin-top: 0
    }

    blockquote ol:last-child, blockquote p:last-child, blockquote ul:last-child, ol ol, ol ul, ul ol, ul ul {
        margin-bottom: 0
    }

    address, dl {
        margin-bottom: 20px
    }

    ol, ul {
        margin-bottom: 10px
    }

    .list-inline {
        margin-left: -5px
    }

    .list-inline > li {
        display: inline-block;
        padding-left: 5px;
        padding-right: 5px
    }

    dd, dt {
        line-height: 1.42857
    }

    dd {
        margin-left: 0
    }

    .dl-horizontal dd:after, .dl-horizontal dd:before {
        content: " ";
        display: table
    }

    .dl-horizontal dd:after {
        clear: both
    }

    @media (min-width: 768px) {
        .dl-horizontal dt {
            float: left;
            width: 160px;
            clear: left;
            text-align: right;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .dl-horizontal dd {
            margin-left: 180px
        }

        .container {
            width: 750px
        }
    }

    .btn-group-vertical > .btn-group:after, .btn-toolbar:after, .clearfix:after, .container-fluid:after, .container:after, .dropdown-menu > li > a, .form-horizontal .form-group:after, .modal-footer:after, .modal-header:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .pager:after, .panel-body:after, .row:after {
        clear: both
    }

    abbr[data-original-title], abbr[title] {
        cursor: help;
        border-bottom: 1px dotted #777
    }

    .initialism {
        font-size: 90%
    }

    blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee
    }

    blockquote .small, blockquote footer, blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857;
        color: #777
    }

    blockquote .small:before, blockquote footer:before, blockquote small:before {
        content: '— '
    }

    .blockquote-reverse, blockquote.pull-right {
        padding-right: 15px;
        padding-left: 0;
        border-right: 5px solid #eee;
        border-left: 0;
        text-align: right
    }

    code, kbd {
        padding: 2px 4px;
        font-size: 90%
    }

    caption, th {
        text-align: left
    }

    .blockquote-reverse .small:before, .blockquote-reverse footer:before, .blockquote-reverse small:before, blockquote.pull-right .small:before, blockquote.pull-right footer:before, blockquote.pull-right small:before {
        content: ''
    }

    .blockquote-reverse .small:after, .blockquote-reverse footer:after, .blockquote-reverse small:after, blockquote.pull-right .small:after, blockquote.pull-right footer:after, blockquote.pull-right small:after {
        content: ' —'
    }

    address {
        font-style: normal;
        line-height: 1.42857
    }

    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }

    code {
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 4px
    }

    kbd {
        color: #fff;
        background-color: #333;
        border-radius: 3px;
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        box-shadow: none
    }

    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857;
        word-break: break-all;
        word-wrap: break-word;
        color: #333;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    .container-fluid:after, .container-fluid:before, .container:after, .container:before, .row:after, .row:before {
        display: table;
        content: " "
    }

    .container, .container-fluid {
        margin-right: auto;
        margin-left: auto
    }

    pre code {
        padding: 0;
        font-size: inherit;
        color: inherit;
        white-space: pre-wrap;
        border-radius: 0
    }

    .container, .container-fluid {
        padding-left: 15px;
        padding-right: 15px
    }

    .pre-scrollable {
        overflow-y: scroll
    }

    @media (min-width: 992px) {
        .container {
            width: 970px
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px
        }
    }

    .row {
        margin-left: -15px;
        margin-right: -15px
    }

    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px
    }

    .col-xs-1 {
        width: 8.33333%
    }

    .col-xs-2 {
        width: 16.66667%
    }

    .col-xs-3 {
        width: 25%
    }

    .col-xs-4 {
        width: 33.33333%
    }

    .col-xs-5 {
        width: 41.66667%
    }

    .col-xs-6 {
        width: 50%
    }

    .col-xs-7 {
        width: 58.33333%
    }

    .col-xs-8 {
        width: 66.66667%
    }

    .col-xs-9 {
        width: 75%
    }

    .col-xs-10 {
        width: 83.33333%
    }

    .col-xs-11 {
        width: 91.66667%
    }

    .col-xs-12 {
        width: 100%
    }

    .col-xs-pull-0 {
        right: auto
    }

    .col-xs-pull-1 {
        right: 8.33333%
    }

    .col-xs-pull-2 {
        right: 16.66667%
    }

    .col-xs-pull-3 {
        right: 25%
    }

    .col-xs-pull-4 {
        right: 33.33333%
    }

    .col-xs-pull-5 {
        right: 41.66667%
    }

    .col-xs-pull-6 {
        right: 50%
    }

    .col-xs-pull-7 {
        right: 58.33333%
    }

    .col-xs-pull-8 {
        right: 66.66667%
    }

    .col-xs-pull-9 {
        right: 75%
    }

    .col-xs-pull-10 {
        right: 83.33333%
    }

    .col-xs-pull-11 {
        right: 91.66667%
    }

    .col-xs-pull-12 {
        right: 100%
    }

    .col-xs-push-0 {
        left: auto
    }

    .col-xs-push-1 {
        left: 8.33333%
    }

    .col-xs-push-2 {
        left: 16.66667%
    }

    .col-xs-push-3 {
        left: 25%
    }

    .col-xs-push-4 {
        left: 33.33333%
    }

    .col-xs-push-5 {
        left: 41.66667%
    }

    .col-xs-push-6 {
        left: 50%
    }

    .col-xs-push-7 {
        left: 58.33333%
    }

    .col-xs-push-8 {
        left: 66.66667%
    }

    .col-xs-push-9 {
        left: 75%
    }

    .col-xs-push-10 {
        left: 83.33333%
    }

    .col-xs-push-11 {
        left: 91.66667%
    }

    .col-xs-push-12 {
        left: 100%
    }

    .col-xs-offset-0 {
        margin-left: 0
    }

    .col-xs-offset-1 {
        margin-left: 8.33333%
    }

    .col-xs-offset-2 {
        margin-left: 16.66667%
    }

    .col-xs-offset-3 {
        margin-left: 25%
    }

    .col-xs-offset-4 {
        margin-left: 33.33333%
    }

    .col-xs-offset-5 {
        margin-left: 41.66667%
    }

    .col-xs-offset-6 {
        margin-left: 50%
    }

    .col-xs-offset-7 {
        margin-left: 58.33333%
    }

    .col-xs-offset-8 {
        margin-left: 66.66667%
    }

    .col-xs-offset-9 {
        margin-left: 75%
    }

    .col-xs-offset-10 {
        margin-left: 83.33333%
    }

    .col-xs-offset-11 {
        margin-left: 91.66667%
    }

    .col-xs-offset-12 {
        margin-left: 100%
    }

    @media (min-width: 768px) {
        .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
            float: left
        }

        .col-sm-1 {
            width: 8.33333%
        }

        .col-sm-2 {
            width: 16.66667%
        }

        .col-sm-3 {
            width: 25%
        }

        .col-sm-4 {
            width: 33.33333%
        }

        .col-sm-5 {
            width: 41.66667%
        }

        .col-sm-6 {
            width: 50%
        }

        .col-sm-7 {
            width: 58.33333%
        }

        .col-sm-8 {
            width: 66.66667%
        }

        .col-sm-9 {
            width: 75%
        }

        .col-sm-10 {
            width: 83.33333%
        }

        .col-sm-11 {
            width: 91.66667%
        }

        .col-sm-12 {
            width: 100%
        }

        .col-sm-pull-0 {
            right: auto
        }

        .col-sm-pull-1 {
            right: 8.33333%
        }

        .col-sm-pull-2 {
            right: 16.66667%
        }

        .col-sm-pull-3 {
            right: 25%
        }

        .col-sm-pull-4 {
            right: 33.33333%
        }

        .col-sm-pull-5 {
            right: 41.66667%
        }

        .col-sm-pull-6 {
            right: 50%
        }

        .col-sm-pull-7 {
            right: 58.33333%
        }

        .col-sm-pull-8 {
            right: 66.66667%
        }

        .col-sm-pull-9 {
            right: 75%
        }

        .col-sm-pull-10 {
            right: 83.33333%
        }

        .col-sm-pull-11 {
            right: 91.66667%
        }

        .col-sm-pull-12 {
            right: 100%
        }

        .col-sm-push-0 {
            left: auto
        }

        .col-sm-push-1 {
            left: 8.33333%
        }

        .col-sm-push-2 {
            left: 16.66667%
        }

        .col-sm-push-3 {
            left: 25%
        }

        .col-sm-push-4 {
            left: 33.33333%
        }

        .col-sm-push-5 {
            left: 41.66667%
        }

        .col-sm-push-6 {
            left: 50%
        }

        .col-sm-push-7 {
            left: 58.33333%
        }

        .col-sm-push-8 {
            left: 66.66667%
        }

        .col-sm-push-9 {
            left: 75%
        }

        .col-sm-push-10 {
            left: 83.33333%
        }

        .col-sm-push-11 {
            left: 91.66667%
        }

        .col-sm-push-12 {
            left: 100%
        }

        .col-sm-offset-0 {
            margin-left: 0
        }

        .col-sm-offset-1 {
            margin-left: 8.33333%
        }

        .col-sm-offset-2 {
            margin-left: 16.66667%
        }

        .col-sm-offset-3 {
            margin-left: 25%
        }

        .col-sm-offset-4 {
            margin-left: 33.33333%
        }

        .col-sm-offset-5 {
            margin-left: 41.66667%
        }

        .col-sm-offset-6 {
            margin-left: 50%
        }

        .col-sm-offset-7 {
            margin-left: 58.33333%
        }

        .col-sm-offset-8 {
            margin-left: 66.66667%
        }

        .col-sm-offset-9 {
            margin-left: 75%
        }

        .col-sm-offset-10 {
            margin-left: 83.33333%
        }

        .col-sm-offset-11 {
            margin-left: 91.66667%
        }

        .col-sm-offset-12 {
            margin-left: 100%
        }
    }

    @media (min-width: 992px) {
        .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
            float: left
        }

        .col-md-1 {
            width: 8.33333%
        }

        .col-md-2 {
            width: 16.66667%
        }

        .col-md-3 {
            width: 25%
        }

        .col-md-4 {
            width: 33.33333%
        }

        .col-md-5 {
            width: 41.66667%
        }

        .col-md-6 {
            width: 50%
        }

        .col-md-7 {
            width: 58.33333%
        }

        .col-md-8 {
            width: 66.66667%
        }

        .col-md-9 {
            width: 75%
        }

        .col-md-10 {
            width: 83.33333%
        }

        .col-md-11 {
            width: 91.66667%
        }

        .col-md-12 {
            width: 100%
        }

        .col-md-pull-0 {
            right: auto
        }

        .col-md-pull-1 {
            right: 8.33333%
        }

        .col-md-pull-2 {
            right: 16.66667%
        }

        .col-md-pull-3 {
            right: 25%
        }

        .col-md-pull-4 {
            right: 33.33333%
        }

        .col-md-pull-5 {
            right: 41.66667%
        }

        .col-md-pull-6 {
            right: 50%
        }

        .col-md-pull-7 {
            right: 58.33333%
        }

        .col-md-pull-8 {
            right: 66.66667%
        }

        .col-md-pull-9 {
            right: 75%
        }

        .col-md-pull-10 {
            right: 83.33333%
        }

        .col-md-pull-11 {
            right: 91.66667%
        }

        .col-md-pull-12 {
            right: 100%
        }

        .col-md-push-0 {
            left: auto
        }

        .col-md-push-1 {
            left: 8.33333%
        }

        .col-md-push-2 {
            left: 16.66667%
        }

        .col-md-push-3 {
            left: 25%
        }

        .col-md-push-4 {
            left: 33.33333%
        }

        .col-md-push-5 {
            left: 41.66667%
        }

        .col-md-push-6 {
            left: 50%
        }

        .col-md-push-7 {
            left: 58.33333%
        }

        .col-md-push-8 {
            left: 66.66667%
        }

        .col-md-push-9 {
            left: 75%
        }

        .col-md-push-10 {
            left: 83.33333%
        }

        .col-md-push-11 {
            left: 91.66667%
        }

        .col-md-push-12 {
            left: 100%
        }

        .col-md-offset-0 {
            margin-left: 0
        }

        .col-md-offset-1 {
            margin-left: 8.33333%
        }

        .col-md-offset-2 {
            margin-left: 16.66667%
        }

        .col-md-offset-3 {
            margin-left: 25%
        }

        .col-md-offset-4 {
            margin-left: 33.33333%
        }

        .col-md-offset-5 {
            margin-left: 41.66667%
        }

        .col-md-offset-6 {
            margin-left: 50%
        }

        .col-md-offset-7 {
            margin-left: 58.33333%
        }

        .col-md-offset-8 {
            margin-left: 66.66667%
        }

        .col-md-offset-9 {
            margin-left: 75%
        }

        .col-md-offset-10 {
            margin-left: 83.33333%
        }

        .col-md-offset-11 {
            margin-left: 91.66667%
        }

        .col-md-offset-12 {
            margin-left: 100%
        }
    }

    @media (min-width: 1200px) {
        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
            float: left
        }

        .col-lg-1 {
            width: 8.33333%
        }

        .col-lg-2 {
            width: 16.66667%
        }

        .col-lg-3 {
            width: 25%
        }

        .col-lg-4 {
            width: 33.33333%
        }

        .col-lg-5 {
            width: 41.66667%
        }

        .col-lg-6 {
            width: 50%
        }

        .col-lg-7 {
            width: 58.33333%
        }

        .col-lg-8 {
            width: 66.66667%
        }

        .col-lg-9 {
            width: 75%
        }

        .col-lg-10 {
            width: 83.33333%
        }

        .col-lg-11 {
            width: 91.66667%
        }

        .col-lg-12 {
            width: 100%
        }

        .col-lg-pull-0 {
            right: auto
        }

        .col-lg-pull-1 {
            right: 8.33333%
        }

        .col-lg-pull-2 {
            right: 16.66667%
        }

        .col-lg-pull-3 {
            right: 25%
        }

        .col-lg-pull-4 {
            right: 33.33333%
        }

        .col-lg-pull-5 {
            right: 41.66667%
        }

        .col-lg-pull-6 {
            right: 50%
        }

        .col-lg-pull-7 {
            right: 58.33333%
        }

        .col-lg-pull-8 {
            right: 66.66667%
        }

        .col-lg-pull-9 {
            right: 75%
        }

        .col-lg-pull-10 {
            right: 83.33333%
        }

        .col-lg-pull-11 {
            right: 91.66667%
        }

        .col-lg-pull-12 {
            right: 100%
        }

        .col-lg-push-0 {
            left: auto
        }

        .col-lg-push-1 {
            left: 8.33333%
        }

        .col-lg-push-2 {
            left: 16.66667%
        }

        .col-lg-push-3 {
            left: 25%
        }

        .col-lg-push-4 {
            left: 33.33333%
        }

        .col-lg-push-5 {
            left: 41.66667%
        }

        .col-lg-push-6 {
            left: 50%
        }

        .col-lg-push-7 {
            left: 58.33333%
        }

        .col-lg-push-8 {
            left: 66.66667%
        }

        .col-lg-push-9 {
            left: 75%
        }

        .col-lg-push-10 {
            left: 83.33333%
        }

        .col-lg-push-11 {
            left: 91.66667%
        }

        .col-lg-push-12 {
            left: 100%
        }

        .col-lg-offset-0 {
            margin-left: 0
        }

        .col-lg-offset-1 {
            margin-left: 8.33333%
        }

        .col-lg-offset-2 {
            margin-left: 16.66667%
        }

        .col-lg-offset-3 {
            margin-left: 25%
        }

        .col-lg-offset-4 {
            margin-left: 33.33333%
        }

        .col-lg-offset-5 {
            margin-left: 41.66667%
        }

        .col-lg-offset-6 {
            margin-left: 50%
        }

        .col-lg-offset-7 {
            margin-left: 58.33333%
        }

        .col-lg-offset-8 {
            margin-left: 66.66667%
        }

        .col-lg-offset-9 {
            margin-left: 75%
        }

        .col-lg-offset-10 {
            margin-left: 83.33333%
        }

        .col-lg-offset-11 {
            margin-left: 91.66667%
        }

        .col-lg-offset-12 {
            margin-left: 100%
        }
    }

    caption {
        padding-top: 8px;
        padding-bottom: 8px;
        color: #777
    }

    .table {
        width: 100%;
        margin-bottom: 20px
    }

    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        padding: 8px;
        line-height: 1.42857;
        vertical-align: top;
        border-top: 1px solid #e7ecf1
    }

    .table > thead > tr > th {
        vertical-align: bottom;
        border-bottom: 2px solid #e7ecf1
    }

    .table > caption + thead > tr:first-child > td, .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table > thead:first-child > tr:first-child > th {
        border-top: 0
    }

    .table > tbody + tbody {
        border-top: 2px solid #e7ecf1
    }

    .table .table {
        background-color: #fff
    }

    .table-condensed > tbody > tr > td, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > td, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > thead > tr > th {
        padding: 5px
    }

    .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
        border: 1px solid #e7ecf1
    }

    .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
        border-bottom-width: 2px
    }

    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #fbfcfd
    }

    .table-hover > tbody > tr:hover, .table > tbody > tr.active > td, .table > tbody > tr.active > th, .table > tbody > tr > td.active, .table > tbody > tr > th.active, .table > tfoot > tr.active > td, .table > tfoot > tr.active > th, .table > tfoot > tr > td.active, .table > tfoot > tr > th.active, .table > thead > tr.active > td, .table > thead > tr.active > th, .table > thead > tr > td.active, .table > thead > tr > th.active {
        background-color: #eef1f5
    }

    table col[class*=col-] {
        position: static;
        float: none;
        display: table-column
    }

    table td[class*=col-], table th[class*=col-] {
        position: static;
        float: none;
        display: table-cell
    }

    .table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr.active:hover > th, .table-hover > tbody > tr:hover > .active, .table-hover > tbody > tr > td.active:hover, .table-hover > tbody > tr > th.active:hover {
        background-color: #dee5ec
    }

    .table > tbody > tr.success > td, .table > tbody > tr.success > th, .table > tbody > tr > td.success, .table > tbody > tr > th.success, .table > tfoot > tr.success > td, .table > tfoot > tr.success > th, .table > tfoot > tr > td.success, .table > tfoot > tr > th.success, .table > thead > tr.success > td, .table > thead > tr.success > th, .table > thead > tr > td.success, .table > thead > tr > th.success {
        background-color: #abe7ed
    }

    .table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr.success:hover > th, .table-hover > tbody > tr:hover > .success, .table-hover > tbody > tr > td.success:hover, .table-hover > tbody > tr > th.success:hover {
        background-color: #96e1e8
    }

    .table > tbody > tr.info > td, .table > tbody > tr.info > th, .table > tbody > tr > td.info, .table > tbody > tr > th.info, .table > tfoot > tr.info > td, .table > tfoot > tr.info > th, .table > tfoot > tr > td.info, .table > tfoot > tr > th.info, .table > thead > tr.info > td, .table > thead > tr.info > th, .table > thead > tr > td.info, .table > thead > tr > th.info {
        background-color: #e0ebf9
    }

    .table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr.info:hover > th, .table-hover > tbody > tr:hover > .info, .table-hover > tbody > tr > td.info:hover, .table-hover > tbody > tr > th.info:hover {
        background-color: #caddf4
    }

    .table > tbody > tr.warning > td, .table > tbody > tr.warning > th, .table > tbody > tr > td.warning, .table > tbody > tr > th.warning, .table > tfoot > tr.warning > td, .table > tfoot > tr.warning > th, .table > tfoot > tr > td.warning, .table > tfoot > tr > th.warning, .table > thead > tr.warning > td, .table > thead > tr.warning > th, .table > thead > tr > td.warning, .table > thead > tr > th.warning {
        background-color: #f9e491
    }

    .table-hover > tbody > tr.warning:hover > td, .table-hover > tbody > tr.warning:hover > th, .table-hover > tbody > tr:hover > .warning, .table-hover > tbody > tr > td.warning:hover, .table-hover > tbody > tr > th.warning:hover {
        background-color: #f7de79
    }

    .table > tbody > tr.danger > td, .table > tbody > tr.danger > th, .table > tbody > tr > td.danger, .table > tbody > tr > th.danger, .table > tfoot > tr.danger > td, .table > tfoot > tr.danger > th, .table > tfoot > tr > td.danger, .table > tfoot > tr > th.danger, .table > thead > tr.danger > td, .table > thead > tr.danger > th, .table > thead > tr > td.danger, .table > thead > tr > th.danger {
        background-color: #fbe1e3
    }

    .table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr.danger:hover > th, .table-hover > tbody > tr:hover > .danger, .table-hover > tbody > tr > td.danger:hover, .table-hover > tbody > tr > th.danger:hover {
        background-color: #f8cace
    }

    .table-responsive {
        overflow-x: auto;
        min-height: .01%
    }

    @media screen and (max-width: 767px) {
        .table-responsive {
            width: 100%;
            margin-bottom: 15px;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #e7ecf1
        }

        .table-responsive > .table {
            margin-bottom: 0
        }

        .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tbody > tr > th, .table-responsive > .table > tfoot > tr > td, .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td, .table-responsive > .table > thead > tr > th {
            white-space: nowrap
        }

        .table-responsive > .table-bordered {
            border: 0
        }

        .table-responsive > .table-bordered > tbody > tr > td:first-child, .table-responsive > .table-bordered > tbody > tr > th:first-child, .table-responsive > .table-bordered > tfoot > tr > td:first-child, .table-responsive > .table-bordered > tfoot > tr > th:first-child, .table-responsive > .table-bordered > thead > tr > td:first-child, .table-responsive > .table-bordered > thead > tr > th:first-child {
            border-left: 0
        }

        .table-responsive > .table-bordered > tbody > tr > td:last-child, .table-responsive > .table-bordered > tbody > tr > th:last-child, .table-responsive > .table-bordered > tfoot > tr > td:last-child, .table-responsive > .table-bordered > tfoot > tr > th:last-child, .table-responsive > .table-bordered > thead > tr > td:last-child, .table-responsive > .table-bordered > thead > tr > th:last-child {
            border-right: 0
        }

        .table-responsive > .table-bordered > tbody > tr:last-child > td, .table-responsive > .table-bordered > tbody > tr:last-child > th, .table-responsive > .table-bordered > tfoot > tr:last-child > td, .table-responsive > .table-bordered > tfoot > tr:last-child > th {
            border-bottom: 0
        }
    }

    fieldset, legend {
        padding: 0;
        border: 0
    }

    fieldset {
        margin: 0;
        min-width: 0
    }

    legend {
        display: block;
        width: 100%;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: inherit;
        color: #34495e;
        border-bottom: 1px solid #e5e5e5
    }

    label {
        display: inline-block;
        margin-bottom: 5px
    }

    input[type=search] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none
    }

    input[type=checkbox], input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px \9;
        line-height: normal
    }

    .form-control, output {
        font-size: 14px;
        line-height: 1.42857;
        color: #555;
        display: block
    }

    input[type=file] {
        display: block
    }

    input[type=range] {
        display: block;
        width: 100%
    }

    select[multiple], select[size] {
        height: auto
    }

    input[type=file]:focus, input[type=checkbox]:focus, input[type=radio]:focus {
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    output {
        padding-top: 7px
    }

    .form-control {
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        background-color: #fff;
        border: 1px solid #c2cad8;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    .form-control:focus {
        border-color: #93a1bb;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(147, 161, 187, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(147, 161, 187, .6)
    }

    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .form-control:-ms-input-placeholder {
        color: #999
    }

    .form-control::-webkit-input-placeholder {
        color: #999
    }

    .has-success .checkbox, .has-success .checkbox-inline, .has-success .control-label, .has-success .form-control-feedback, .has-success .help-block, .has-success .radio, .has-success .radio-inline, .has-success.checkbox label, .has-success.checkbox-inline label, .has-success.radio label, .has-success.radio-inline label {
        color: #27a4b0
    }

    .form-control::-ms-expand {
        border: 0;
        background-color: transparent
    }

    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
        background-color: #eef1f5;
        opacity: 1
    }

    .form-control[disabled], fieldset[disabled] .form-control {
        cursor: not-allowed
    }

    textarea.form-control {
        height: auto
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        input[type=date].form-control, input[type=time].form-control, input[type=datetime-local].form-control, input[type=month].form-control {
            line-height: 34px
        }

        .input-group-sm input[type=date], .input-group-sm input[type=time], .input-group-sm input[type=datetime-local], .input-group-sm input[type=month], .input-group-sm > .input-group-btn > input[type=date].btn, .input-group-sm > .input-group-btn > input[type=time].btn, .input-group-sm > .input-group-btn > input[type=datetime-local].btn, .input-group-sm > .input-group-btn > input[type=month].btn, .input-group-sm > input[type=date].form-control, .input-group-sm > input[type=date].input-group-addon, .input-group-sm > input[type=time].form-control, .input-group-sm > input[type=time].input-group-addon, .input-group-sm > input[type=datetime-local].form-control, .input-group-sm > input[type=datetime-local].input-group-addon, .input-group-sm > input[type=month].form-control, .input-group-sm > input[type=month].input-group-addon, input[type=date].input-sm, input[type=time].input-sm, input[type=datetime-local].input-sm, input[type=month].input-sm {
            line-height: 30px
        }

        .input-group-lg input[type=date], .input-group-lg input[type=time], .input-group-lg input[type=datetime-local], .input-group-lg input[type=month], .input-group-lg > .input-group-btn > input[type=date].btn, .input-group-lg > .input-group-btn > input[type=time].btn, .input-group-lg > .input-group-btn > input[type=datetime-local].btn, .input-group-lg > .input-group-btn > input[type=month].btn, .input-group-lg > input[type=date].form-control, .input-group-lg > input[type=date].input-group-addon, .input-group-lg > input[type=time].form-control, .input-group-lg > input[type=time].input-group-addon, .input-group-lg > input[type=datetime-local].form-control, .input-group-lg > input[type=datetime-local].input-group-addon, .input-group-lg > input[type=month].form-control, .input-group-lg > input[type=month].input-group-addon, input[type=date].input-lg, input[type=time].input-lg, input[type=datetime-local].input-lg, input[type=month].input-lg {
            line-height: 46px
        }
    }

    .form-group {
        margin-bottom: 15px
    }

    .checkbox, .radio {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px
    }

    .checkbox label, .radio label {
        min-height: 20px;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        cursor: pointer
    }

    .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
        position: absolute;
        margin-left: -20px;
        margin-top: 4px \9
    }

    .checkbox + .checkbox, .radio + .radio {
        margin-top: -5px
    }

    .checkbox-inline, .radio-inline {
        position: relative;
        display: inline-block;
        padding-left: 20px;
        margin-bottom: 0;
        vertical-align: middle;
        font-weight: 400;
        cursor: pointer
    }

    .checkbox-inline + .checkbox-inline, .radio-inline + .radio-inline {
        margin-top: 0;
        margin-left: 10px
    }

    .checkbox-inline.disabled, .checkbox.disabled label, .radio-inline.disabled, .radio.disabled label, fieldset[disabled] .checkbox label, fieldset[disabled] .checkbox-inline, fieldset[disabled] .radio label, fieldset[disabled] .radio-inline, fieldset[disabled] input[type=checkbox], fieldset[disabled] input[type=radio], input[type=checkbox].disabled, input[type=checkbox][disabled], input[type=radio].disabled, input[type=radio][disabled] {
        cursor: not-allowed
    }

    .form-control-static {
        padding-top: 7px;
        padding-bottom: 7px;
        margin-bottom: 0;
        min-height: 34px
    }

    .form-control-static.input-lg, .form-control-static.input-sm, .input-group-lg > .form-control-static.form-control, .input-group-lg > .form-control-static.input-group-addon, .input-group-lg > .input-group-btn > .form-control-static.btn, .input-group-sm > .form-control-static.form-control, .input-group-sm > .form-control-static.input-group-addon, .input-group-sm > .input-group-btn > .form-control-static.btn {
        padding-left: 0;
        padding-right: 0
    }

    .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-sm {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .input-group-sm > .input-group-btn > select.btn, .input-group-sm > select.form-control, .input-group-sm > select.input-group-addon, select.input-sm {
        height: 30px;
        line-height: 30px
    }

    .input-group-sm > .input-group-btn > select[multiple].btn, .input-group-sm > .input-group-btn > textarea.btn, .input-group-sm > select[multiple].form-control, .input-group-sm > select[multiple].input-group-addon, .input-group-sm > textarea.form-control, .input-group-sm > textarea.input-group-addon, select[multiple].input-sm, textarea.input-sm {
        height: auto
    }

    .form-group-sm .form-control {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .form-group-sm select.form-control {
        height: 30px;
        line-height: 30px
    }

    .form-group-sm select[multiple].form-control, .form-group-sm textarea.form-control {
        height: auto
    }

    .form-group-sm .form-control-static {
        height: 30px;
        min-height: 32px;
        padding: 6px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-lg {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33333;
        border-radius: 6px
    }

    .input-group-lg > .input-group-btn > select.btn, .input-group-lg > select.form-control, .input-group-lg > select.input-group-addon, select.input-lg {
        height: 46px;
        line-height: 46px
    }

    .input-group-lg > .input-group-btn > select[multiple].btn, .input-group-lg > .input-group-btn > textarea.btn, .input-group-lg > select[multiple].form-control, .input-group-lg > select[multiple].input-group-addon, .input-group-lg > textarea.form-control, .input-group-lg > textarea.input-group-addon, select[multiple].input-lg, textarea.input-lg {
        height: auto
    }

    .form-group-lg .form-control {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33333;
        border-radius: 6px
    }

    .form-group-lg select.form-control {
        height: 46px;
        line-height: 46px
    }

    .form-group-lg select[multiple].form-control, .form-group-lg textarea.form-control {
        height: auto
    }

    .form-group-lg .form-control-static {
        height: 46px;
        min-height: 38px;
        padding: 11px 16px;
        font-size: 18px;
        line-height: 1.33333
    }

    .has-feedback {
        position: relative
    }

    .has-feedback .form-control {
        padding-right: 42.5px
    }

    .form-control-feedback {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        display: block;
        width: 34px;
        height: 34px;
        line-height: 34px;
        text-align: center;
        pointer-events: none
    }

    .collapsing, .dropdown, .dropup {
        position: relative
    }

    .form-group-lg .form-control + .form-control-feedback, .input-group-lg + .form-control-feedback, .input-group-lg > .form-control + .form-control-feedback, .input-group-lg > .input-group-addon + .form-control-feedback, .input-group-lg > .input-group-btn > .btn + .form-control-feedback, .input-lg + .form-control-feedback {
        width: 46px;
        height: 46px;
        line-height: 46px
    }

    .form-group-sm .form-control + .form-control-feedback, .input-group-sm + .form-control-feedback, .input-group-sm > .form-control + .form-control-feedback, .input-group-sm > .input-group-addon + .form-control-feedback, .input-group-sm > .input-group-btn > .btn + .form-control-feedback, .input-sm + .form-control-feedback {
        width: 30px;
        height: 30px;
        line-height: 30px
    }

    .has-success .form-control {
        border-color: #27a4b0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-success .form-control:focus {
        border-color: #1d7d86;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #60d2dc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #60d2dc
    }

    .has-success .input-group-addon {
        color: #27a4b0;
        border-color: #27a4b0;
        background-color: #abe7ed
    }

    .has-warning .checkbox, .has-warning .checkbox-inline, .has-warning .control-label, .has-warning .form-control-feedback, .has-warning .help-block, .has-warning .radio, .has-warning .radio-inline, .has-warning.checkbox label, .has-warning.checkbox-inline label, .has-warning.radio label, .has-warning.radio-inline label {
        color: #c29d0b
    }

    .has-warning .form-control {
        border-color: #c29d0b;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-warning .form-control:focus {
        border-color: #927608;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f4d03f;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f4d03f
    }

    .has-warning .input-group-addon {
        color: #c29d0b;
        border-color: #c29d0b;
        background-color: #f9e491
    }

    .has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .form-control-feedback, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
        color: #e73d4a
    }

    .has-error .form-control {
        border-color: #e73d4a;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-error .form-control:focus {
        border-color: #d71b29;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f2989f;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f2989f
    }

    .has-error .input-group-addon {
        color: #e73d4a;
        border-color: #e73d4a;
        background-color: #fbe1e3
    }

    .has-feedback label ~ .form-control-feedback {
        top: 25px
    }

    .has-feedback label.sr-only ~ .form-control-feedback {
        top: 0
    }

    .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #737373
    }

    @media (min-width: 768px) {
        .form-inline .form-control-static, .form-inline .form-group {
            display: inline-block
        }

        .form-inline .control-label, .form-inline .form-group {
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .input-group {
            display: inline-table;
            vertical-align: middle
        }

        .form-inline .input-group .form-control, .form-inline .input-group .input-group-addon, .form-inline .input-group .input-group-btn {
            width: auto
        }

        .form-inline .input-group > .form-control {
            width: 100%
        }

        .form-inline .checkbox, .form-inline .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .checkbox label, .form-inline .radio label {
            padding-left: 0
        }

        .form-inline .checkbox input[type=checkbox], .form-inline .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }

        .form-inline .has-feedback .form-control-feedback {
            top: 0
        }

        .form-horizontal .control-label {
            text-align: right;
            margin-bottom: 0;
            padding-top: 7px
        }
    }

    .form-horizontal .checkbox, .form-horizontal .checkbox-inline, .form-horizontal .radio, .form-horizontal .radio-inline {
        margin-top: 0;
        margin-bottom: 0;
        padding-top: 7px
    }

    .form-horizontal .checkbox, .form-horizontal .radio {
        min-height: 27px
    }

    .form-horizontal .form-group {
        margin-left: -15px;
        margin-right: -15px
    }

    .form-horizontal .form-group:after, .form-horizontal .form-group:before {
        content: " ";
        display: table
    }

    .form-horizontal .has-feedback .form-control-feedback {
        right: 15px
    }

    @media (min-width: 768px) {
        .form-horizontal .form-group-lg .control-label {
            padding-top: 11px;
            font-size: 18px
        }

        .form-horizontal .form-group-sm .control-label {
            padding-top: 6px;
            font-size: 12px
        }
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    .btn.focus, .btn:focus, .btn:hover {
        color: #333;
        text-decoration: none
    }

    .btn.active, .btn:active {
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    a.btn.disabled, fieldset[disabled] a.btn {
        pointer-events: none
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default.focus, .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }

    .btn-default.active, .btn-default:active, .btn-default:hover, .open > .btn-default.dropdown-toggle {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open > .btn-default.dropdown-toggle.focus, .open > .btn-default.dropdown-toggle:focus, .open > .btn-default.dropdown-toggle:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }

    .btn-default.disabled.focus, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled].focus, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary.focus, .btn-primary:focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }

    .btn-primary.active, .btn-primary:active, .btn-primary:hover, .open > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .btn-primary.dropdown-toggle.focus, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle:hover {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }

    .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled].focus, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }

    .btn-success {
        color: #fff;
        background-color: #36c6d3;
        border-color: #2bb8c4
    }

    .btn-success.focus, .btn-success:focus {
        color: #fff;
        background-color: #27a4b0;
        border-color: #14565c
    }

    .btn-success.active, .btn-success:active, .btn-success:hover, .open > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #27a4b0;
        border-color: #208992
    }

    .btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover, .btn-success:active.focus, .btn-success:active:focus, .btn-success:active:hover, .open > .btn-success.dropdown-toggle.focus, .open > .btn-success.dropdown-toggle:focus, .open > .btn-success.dropdown-toggle:hover {
        color: #fff;
        background-color: #208992;
        border-color: #14565c
    }

    .btn-success.active, .btn-success:active, .open > .btn-success.dropdown-toggle {
        background-image: none
    }

    .btn-success.disabled.focus, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled].focus, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
        background-color: #36c6d3;
        border-color: #2bb8c4
    }

    .btn-success .badge {
        color: #36c6d3;
        background-color: #fff
    }

    .btn-info {
        color: #fff;
        background-color: #659be0;
        border-color: #508edb
    }

    .btn-info.focus, .btn-info:focus {
        color: #fff;
        background-color: #3a80d7;
        border-color: #1d4f8e
    }

    .btn-info.active, .btn-info:active, .btn-info:hover, .open > .btn-info.dropdown-toggle {
        color: #fff;
        background-color: #3a80d7;
        border-color: #286ec5
    }

    .btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, .btn-info:active:hover, .open > .btn-info.dropdown-toggle.focus, .open > .btn-info.dropdown-toggle:focus, .open > .btn-info.dropdown-toggle:hover {
        color: #fff;
        background-color: #286ec5;
        border-color: #1d4f8e
    }

    .btn-info.disabled.focus, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled].focus, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
        background-color: #659be0;
        border-color: #508edb
    }

    .btn-info .badge {
        color: #659be0;
        background-color: #fff
    }

    .btn-warning {
        color: #fff;
        background-color: #f1c40f;
        border-color: #dab10d
    }

    .btn-warning.focus, .btn-warning:focus {
        color: #fff;
        background-color: #c29d0b;
        border-color: #614f06
    }

    .btn-warning.active, .btn-warning:active, .btn-warning:hover, .open > .btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #c29d0b;
        border-color: #a08209
    }

    .btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover, .btn-warning:active.focus, .btn-warning:active:focus, .btn-warning:active:hover, .open > .btn-warning.dropdown-toggle.focus, .open > .btn-warning.dropdown-toggle:focus, .open > .btn-warning.dropdown-toggle:hover {
        color: #fff;
        background-color: #a08209;
        border-color: #614f06
    }

    .btn-warning.disabled.focus, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled].focus, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
        background-color: #f1c40f;
        border-color: #dab10d
    }

    .btn-warning .badge {
        color: #f1c40f;
        background-color: #fff
    }

    .btn-danger {
        color: #fff;
        background-color: #ed6b75;
        border-color: #ea5460
    }

    .btn-danger.focus, .btn-danger:focus {
        color: #fff;
        background-color: #e73d4a;
        border-color: #a91520
    }

    .btn-danger.active, .btn-danger:active, .btn-danger:hover, .open > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #e73d4a;
        border-color: #e31d2d
    }

    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .btn-danger.dropdown-toggle.focus, .open > .btn-danger.dropdown-toggle:focus, .open > .btn-danger.dropdown-toggle:hover {
        color: #fff;
        background-color: #e31d2d;
        border-color: #a91520
    }

    .btn-danger.disabled.focus, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled].focus, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
        background-color: #ed6b75;
        border-color: #ea5460
    }

    .btn-danger .badge {
        color: #ed6b75;
        background-color: #fff
    }

    .btn-link {
        color: #337ab7;
        font-weight: 400;
        border-radius: 0
    }

    .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
        border-color: transparent
    }

    .btn-link:focus, .btn-link:hover {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link[disabled]:focus, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:focus, fieldset[disabled] .btn-link:hover {
        color: #6c8dae;
        text-decoration: none
    }

    .btn-group-lg > .btn, .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33333;
        border-radius: 6px
    }

    .btn-group-sm > .btn, .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-group-xs > .btn, .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block + .btn-block {
        margin-top: 5px
    }

    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    .fade.in {
        opacity: 1
    }

    .collapse {
        display: none
    }

    .collapse.in {
        display: block
    }

    tr.collapse.in {
        display: table-row
    }

    tbody.collapse.in {
        display: table-row-group
    }

    .collapsing {
        height: 0;
        overflow: hidden;
        -webkit-transition-property: height, visibility;
        transition-property: height, visibility;
        -webkit-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-timing-function: ease;
        transition-timing-function: ease
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid \9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }

    .dropdown-toggle:focus {
        outline: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        text-align: left;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        background-clip: padding-box
    }

    .dropdown-menu-right, .dropdown-menu.pull-right {
        left: auto;
        right: 0
    }

    .dropdown-header, .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        line-height: 1.42857;
        white-space: nowrap
    }

    .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle, .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child, .btn-group > .btn:last-child:not(:first-child), .btn-group > .dropdown-toggle:not(:first-child) {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group-vertical > .btn:not(:first-child):not(:last-child), .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn, .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .dropdown-menu > li > a {
        font-weight: 400;
        color: #333
    }

    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
        text-decoration: none;
        color: #262626;
        background-color: #e1e5ec
    }

    .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        background-color: #337ab7
    }

    .dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        color: #777
    }

    .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        text-decoration: none;
        background-color: transparent;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        cursor: not-allowed
    }

    .open > .dropdown-menu {
        display: block
    }

    .open > a {
        outline: 0
    }

    .dropdown-menu-left {
        left: 0;
        right: auto
    }

    .dropdown-header {
        font-size: 12px;
        color: #777
    }

    .dropdown-backdrop {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 990
    }

    .pull-right > .dropdown-menu {
        right: 0;
        left: auto
    }

    .dropup .caret, .navbar-fixed-bottom .dropdown .caret {
        border-top: 0;
        border-bottom: 4px dashed;
        border-bottom: 4px solid \9;
        content: ""
    }

    .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }

    @media (min-width: 768px) {
        .navbar-right .dropdown-menu {
            right: 0;
            left: auto
        }

        .navbar-right .dropdown-menu-left {
            left: 0;
            right: auto
        }
    }

    .btn-group, .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }

    .btn-group-vertical > .btn, .btn-group > .btn {
        position: relative;
        float: left
    }

    .btn-group-vertical > .btn.active, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn:focus, .btn-group-vertical > .btn:hover, .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus, .btn-group > .btn:hover {
        z-index: 2
    }

    .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group {
        margin-left: -1px
    }

    .btn-toolbar {
        margin-left: -5px
    }

    .btn-toolbar:after, .btn-toolbar:before {
        content: " ";
        display: table
    }

    .btn-toolbar > .btn, .btn-toolbar > .btn-group, .btn-toolbar > .input-group {
        margin-left: 5px
    }

    .btn .caret, .btn-group > .btn:first-child {
        margin-left: 0
    }

    .btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
        outline: 0
    }

    .btn-group > .btn + .dropdown-toggle {
        padding-left: 8px;
        padding-right: 8px
    }

    .btn-group-lg.btn-group > .btn + .dropdown-toggle, .btn-group > .btn-lg + .dropdown-toggle {
        padding-left: 12px;
        padding-right: 12px
    }

    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-group-lg > .btn .caret, .btn-lg .caret {
        border-width: 5px 5px 0
    }

    .dropup .btn-group-lg > .btn .caret, .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }

    .btn-group-vertical > .btn, .btn-group-vertical > .btn-group, .btn-group-vertical > .btn-group > .btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }

    .btn-group-vertical > .btn-group:after, .btn-group-vertical > .btn-group:before {
        content: " ";
        display: table
    }

    .btn-group-vertical > .btn-group > .btn {
        float: none
    }

    .btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group, .btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group {
        margin-top: -1px;
        margin-left: 0
    }

    .btn-group-vertical > .btn:first-child:not(:last-child) {
        border-radius: 4px 4px 0 0
    }

    .btn-group-vertical > .btn:last-child:not(:first-child) {
        border-radius: 0 0 4px 4px
    }

    .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn, .input-group .form-control:not(:first-child):not(:last-child), .input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }

    .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }

    .btn-group-justified > .btn, .btn-group-justified > .btn-group {
        float: none;
        display: table-cell;
        width: 1%
    }

    .btn-group-justified > .btn-group .btn {
        width: 100%
    }

    .btn-group-justified > .btn-group .dropdown-menu {
        left: auto
    }

    [data-toggle=buttons] > .btn input[type=checkbox], [data-toggle=buttons] > .btn input[type=radio], [data-toggle=buttons] > .btn-group > .btn input[type=checkbox], [data-toggle=buttons] > .btn-group > .btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group, .input-group-btn, .input-group-btn > .btn {
        position: relative
    }

    .input-group {
        display: table;
        border-collapse: separate
    }

    .input-group[class*=col-] {
        float: none;
        padding-left: 0;
        padding-right: 0
    }

    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }

    .input-group .form-control:focus {
        z-index: 3
    }

    .input-group .form-control, .input-group-addon, .input-group-btn {
        display: table-cell
    }

    .input-group-addon, .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle
    }

    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    .input-group-addon.input-sm, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .input-group-addon.btn {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px
    }

    .input-group-addon.input-lg, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .input-group-addon.btn {
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px
    }

    .input-group-addon input[type=checkbox], .input-group-addon input[type=radio] {
        margin-top: 0
    }

    .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn-group:not(:last-child) > .btn, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .input-group-addon:first-child {
        border-right: 0
    }

    .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child > .btn-group:not(:first-child) > .btn, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .input-group-addon:last-child {
        border-left: 0
    }

    .input-group-btn {
        font-size: 0;
        white-space: nowrap
    }

    .input-group-btn > .btn + .btn {
        margin-left: -1px
    }

    .input-group-btn > .btn:active, .input-group-btn > .btn:focus, .input-group-btn > .btn:hover {
        z-index: 2
    }

    .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group {
        margin-right: -1px
    }

    .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        z-index: 2;
        margin-left: -1px
    }

    .nav {
        margin-bottom: 0;
        padding-left: 0;
        list-style: none
    }

    .nav:after, .nav:before {
        content: " ";
        display: table
    }

    .nav > li, .nav > li > a {
        display: block;
        position: relative
    }

    .nav:after {
        clear: both
    }

    .nav > li > a {
        padding: 10px 15px
    }

    .nav > li > a:focus, .nav > li > a:hover {
        text-decoration: none;
        background-color: #eee
    }

    .nav > li.disabled > a {
        color: #777
    }

    .nav > li.disabled > a:focus, .nav > li.disabled > a:hover {
        color: #777;
        text-decoration: none;
        background-color: transparent;
        cursor: not-allowed
    }

    .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
        background-color: #eee;
        border-color: #337ab7
    }

    .nav .nav-divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .nav > li > a > img {
        max-width: none
    }

    .nav-tabs {
        border-bottom: 1px solid #ddd
    }

    .nav-tabs > li {
        float: left;
        margin-bottom: -1px
    }

    .nav-tabs > li > a {
        margin-right: 2px;
        line-height: 1.42857;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0
    }

    .nav-tabs > li > a:hover {
        border-color: #eee #eee #ddd
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        color: #555;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
        cursor: default
    }

    .nav-pills > li {
        float: left
    }

    .nav-justified > li, .nav-stacked > li, .nav-tabs.nav-justified > li {
        float: none
    }

    .nav-pills > li > a {
        border-radius: 4px
    }

    .nav-pills > li + li {
        margin-left: 2px
    }

    .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
        color: #fff;
        background-color: #337ab7
    }

    .nav-stacked > li + li {
        margin-top: 2px;
        margin-left: 0
    }

    .nav-justified, .nav-tabs.nav-justified {
        width: 100%
    }

    .nav-justified > li > a, .nav-tabs.nav-justified > li > a {
        text-align: center;
        margin-bottom: 5px
    }

    .nav-justified > .dropdown .dropdown-menu {
        top: auto;
        left: auto
    }

    .nav-tabs-justified, .nav-tabs.nav-justified {
        border-bottom: 0
    }

    .nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a {
        margin-right: 0;
        border-radius: 4px
    }

    .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover, .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
        border: 1px solid #ddd
    }

    @media (min-width: 768px) {
        .nav-justified > li, .nav-tabs.nav-justified > li {
            display: table-cell;
            width: 1%
        }

        .nav-justified > li > a, .nav-tabs.nav-justified > li > a {
            margin-bottom: 0
        }

        .nav-tabs-justified > li > a, .nav-tabs.nav-justified > li > a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover, .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
            border-bottom-color: #fff
        }
    }

    .tab-content > .tab-pane {
        display: none
    }

    .tab-content > .active {
        display: block
    }

    .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before {
        display: table;
        content: " "
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 20px;
        border: 1px solid transparent
    }

    .navbar-collapse {
        overflow-x: visible;
        padding-right: 15px;
        padding-left: 15px;
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        -webkit-overflow-scrolling: touch
    }

    .navbar-collapse.in {
        overflow-y: auto
    }

    @media (min-width: 768px) {
        .navbar {
            border-radius: 4px
        }

        .navbar-header {
            float: left
        }

        .navbar-collapse {
            width: auto;
            border-top: 0;
            box-shadow: none
        }

        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important
        }

        .navbar-collapse.in {
            overflow-y: visible
        }

        .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse {
            padding-left: 0;
            padding-right: 0
        }
    }

    .embed-responsive, .modal, .modal-open, .progress {
        overflow: hidden
    }

    @media (max-device-width: 480px) and (orientation: landscape) {
        .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
            max-height: 200px
        }
    }

    .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
        margin-right: -15px;
        margin-left: -15px
    }

    .navbar-static-top {
        z-index: 9995;
        border-width: 0 0 1px
    }

    .navbar-fixed-bottom, .navbar-fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030
    }

    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px
    }

    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0
    }

    .navbar-brand {
        float: left;
        padding: 15px;
        font-size: 18px;
        line-height: 20px;
        height: 50px
    }

    .navbar-brand:focus, .navbar-brand:hover {
        text-decoration: none
    }

    .navbar-brand > img {
        display: block
    }

    @media (min-width: 768px) {
        .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
            margin-right: 0;
            margin-left: 0
        }

        .navbar-fixed-bottom, .navbar-fixed-top, .navbar-static-top {
            border-radius: 0
        }

        .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
            margin-left: -15px
        }
    }

    .navbar-toggle {
        position: relative;
        float: right;
        margin-right: 15px;
        padding: 9px 10px;
        margin-top: 8px;
        margin-bottom: 8px;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .navbar-toggle:focus {
        outline: 0
    }

    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 1px
    }

    .navbar-toggle .icon-bar + .icon-bar {
        margin-top: 4px
    }

    .navbar-nav {
        margin: 7.5px -15px
    }

    .navbar-nav > li > a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px
    }

    @media (max-width: 767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            box-shadow: none
        }

        .navbar-nav .open .dropdown-menu .dropdown-header, .navbar-nav .open .dropdown-menu > li > a {
            padding: 5px 15px 5px 25px
        }

        .navbar-nav .open .dropdown-menu > li > a {
            line-height: 20px
        }

        .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-nav .open .dropdown-menu > li > a:hover {
            background-image: none
        }
    }

    .progress-bar-striped, .progress-striped .progress-bar, .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    @media (min-width: 768px) {
        .navbar-toggle {
            display: none
        }

        .navbar-nav {
            float: left;
            margin: 0
        }

        .navbar-nav > li {
            float: left
        }

        .navbar-nav > li > a {
            padding-top: 15px;
            padding-bottom: 15px
        }
    }

    .navbar-form {
        padding: 10px 15px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        margin: 8px -15px
    }

    @media (min-width: 768px) {
        .navbar-form .form-control-static, .navbar-form .form-group {
            display: inline-block
        }

        .navbar-form .control-label, .navbar-form .form-group {
            margin-bottom: 0;
            vertical-align: middle
        }

        .navbar-form .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .navbar-form .input-group {
            display: inline-table;
            vertical-align: middle
        }

        .navbar-form .input-group .form-control, .navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn {
            width: auto
        }

        .navbar-form .input-group > .form-control {
            width: 100%
        }

        .navbar-form .checkbox, .navbar-form .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }

        .navbar-form .checkbox label, .navbar-form .radio label {
            padding-left: 0
        }

        .navbar-form .checkbox input[type=checkbox], .navbar-form .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }

        .navbar-form .has-feedback .form-control-feedback {
            top: 0
        }

        .navbar-form {
            width: auto;
            border: 0;
            margin-left: 0;
            margin-right: 0;
            padding-top: 0;
            padding-bottom: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
    }

    .breadcrumb > li, .pagination {
        display: inline-block
    }

    .btn .badge, .btn .label {
        top: -1px;
        position: relative
    }

    @media (max-width: 767px) {
        .navbar-form .form-group {
            margin-bottom: 5px
        }

        .navbar-form .form-group:last-child {
            margin-bottom: 0
        }
    }

    .navbar-nav > li > .dropdown-menu {
        margin-top: 0;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
        margin-bottom: 0;
        border-radius: 4px 4px 0 0
    }

    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px
    }

    .btn-group-sm > .navbar-btn.btn, .navbar-btn.btn-sm {
        margin-top: 10px;
        margin-bottom: 10px
    }

    .btn-group-xs > .navbar-btn.btn, .navbar-btn.btn-xs {
        margin-top: 14px;
        margin-bottom: 14px
    }

    .navbar-text {
        margin-top: 15px;
        margin-bottom: 15px
    }

    @media (min-width: 768px) {
        .navbar-text {
            float: left;
            margin-left: 15px;
            margin-right: 15px
        }

        .navbar-left {
            float: left !important
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px
        }

        .navbar-right ~ .navbar-right {
            margin-right: 0
        }
    }

    .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7
    }

    .navbar-default .navbar-brand {
        color: #777
    }

    .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
        color: #5e5e5e;
        background-color: transparent
    }

    .navbar-default .navbar-nav > li > a, .navbar-default .navbar-text {
        color: #777
    }

    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        color: #333;
        background-color: transparent
    }

    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
        color: #555;
        background-color: #e7e7e7
    }

    .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:focus, .navbar-default .navbar-nav > .disabled > a:hover {
        color: #ccc;
        background-color: transparent
    }

    .navbar-default .navbar-toggle {
        border-color: #ddd
    }

    .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
        background-color: #ddd
    }

    .navbar-default .navbar-toggle .icon-bar {
        background-color: #888
    }

    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
        border-color: #e7e7e7
    }

    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
        background-color: #e7e7e7;
        color: #555
    }

    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #777
        }

        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
            color: #ccc;
            background-color: transparent
        }
    }

    .navbar-default .navbar-link {
        color: #777
    }

    .navbar-default .navbar-link:hover {
        color: #333
    }

    .navbar-default .btn-link {
        color: #777
    }

    .navbar-default .btn-link:focus, .navbar-default .btn-link:hover {
        color: #333
    }

    .navbar-default .btn-link[disabled]:focus, .navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:focus, fieldset[disabled] .navbar-default .btn-link:hover {
        color: #ccc
    }

    .navbar-inverse {
        background-color: #222;
        border-color: #090909
    }

    .navbar-inverse .navbar-brand {
        color: #9d9d9d
    }

    .navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav > li > a, .navbar-inverse .navbar-text {
        color: #9d9d9d
    }

    .navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover {
        color: #fff;
        background-color: #090909
    }

    .navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:focus, .navbar-inverse .navbar-nav > .disabled > a:hover {
        color: #444;
        background-color: transparent
    }

    .navbar-inverse .navbar-toggle {
        border-color: #333
    }

    .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
        background-color: #333
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff
    }

    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #101010
    }

    .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover {
        background-color: #090909;
        color: #fff
    }

    @media (max-width: 767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
            border-color: #090909
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
            background-color: #090909
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover {
            color: #fff;
            background-color: #090909
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover {
            color: #444;
            background-color: transparent
        }
    }

    .navbar-inverse .navbar-link {
        color: #9d9d9d
    }

    .navbar-inverse .navbar-link:hover {
        color: #fff
    }

    .navbar-inverse .btn-link {
        color: #9d9d9d
    }

    .navbar-inverse .btn-link:focus, .navbar-inverse .btn-link:hover {
        color: #fff
    }

    .navbar-inverse .btn-link[disabled]:focus, .navbar-inverse .btn-link[disabled]:hover, fieldset[disabled] .navbar-inverse .btn-link:focus, fieldset[disabled] .navbar-inverse .btn-link:hover {
        color: #444
    }

    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px
    }

    .breadcrumb > li + li:before {
        content: "/ ";
        padding: 0 5px;
        color: #ccc
    }

    .breadcrumb > .active {
        color: #777
    }

    .pagination {
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px
    }

    .pagination > li {
        display: inline
    }

    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.42857;
        text-decoration: none;
        color: #337ab7;
        background-color: #fff;
        border: 1px solid #ddd;
        margin-left: -1px
    }

    .pagination > li:first-child > a, .pagination > li:first-child > span {
        margin-left: 0;
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px
    }

    .pagination > li:last-child > a, .pagination > li:last-child > span {
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px
    }

    .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
        z-index: 2;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd
    }

    .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
        z-index: 3;
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7;
        cursor: default
    }

    .pagination > .disabled > a, .pagination > .disabled > a:focus, .pagination > .disabled > a:hover, .pagination > .disabled > span, .pagination > .disabled > span:focus, .pagination > .disabled > span:hover {
        color: #777;
        background-color: #fff;
        border-color: #ddd;
        cursor: not-allowed
    }

    .pagination-lg > li > a, .pagination-lg > li > span {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33333
    }

    .pagination-lg > li:first-child > a, .pagination-lg > li:first-child > span {
        border-bottom-left-radius: 6px;
        border-top-left-radius: 6px
    }

    .pagination-lg > li:last-child > a, .pagination-lg > li:last-child > span {
        border-bottom-right-radius: 6px;
        border-top-right-radius: 6px
    }

    .pagination-sm > li > a, .pagination-sm > li > span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .badge, .label {
        font-weight: 700;
        line-height: 1;
        white-space: nowrap;
        text-align: center
    }

    .pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px
    }

    .pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span {
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px
    }

    .pager {
        padding-left: 0;
        margin: 20px 0;
        list-style: none;
        text-align: center
    }

    .pager:after, .pager:before {
        content: " ";
        display: table
    }

    .pager li {
        display: inline
    }

    .pager li > a, .pager li > span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px
    }

    .pager li > a:focus, .pager li > a:hover {
        text-decoration: none;
        background-color: #eee
    }

    .pager .next > a, .pager .next > span {
        float: right
    }

    .pager .previous > a, .pager .previous > span {
        float: left
    }

    .pager .disabled > a, .pager .disabled > a:focus, .pager .disabled > a:hover, .pager .disabled > span {
        color: #777;
        background-color: #fff;
        cursor: not-allowed
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        color: #fff;
        border-radius: .25em
    }

    .label:empty {
        display: none
    }

    a.label:focus, a.label:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .label-default {
        background-color: #777
    }

    .label-default[href]:focus, .label-default[href]:hover {
        background-color: #5e5e5e
    }

    .label-primary {
        background-color: #337ab7
    }

    .label-primary[href]:focus, .label-primary[href]:hover {
        background-color: #286090
    }

    .label-success {
        background-color: #5cb85c
    }

    .label-success[href]:focus, .label-success[href]:hover {
        background-color: #449d44
    }

    .label-info {
        background-color: #5bc0de
    }

    .label-info[href]:focus, .label-info[href]:hover {
        background-color: #31b0d5
    }

    .label-warning {
        background-color: #f0ad4e
    }

    .label-warning[href]:focus, .label-warning[href]:hover {
        background-color: #ec971f
    }

    .label-danger {
        background-color: #d9534f
    }

    .label-danger[href]:focus, .label-danger[href]:hover {
        background-color: #c9302c
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        color: #fff;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px
    }

    .badge:empty {
        display: none
    }

    .media-object, .thumbnail {
        display: block
    }

    .btn-group-xs > .btn .badge, .btn-xs .badge {
        top: 0;
        padding: 1px 5px
    }

    .list-group-item.active > .badge, .nav-pills > .active > a > .badge {
        color: #337ab7;
        background-color: #fff
    }

    .list-group-item > .badge {
        float: right
    }

    .list-group-item > .badge + .badge {
        margin-right: 5px
    }

    .nav-pills > li > a > .badge {
        margin-left: 3px
    }

    a.badge:focus, a.badge:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .jumbotron, .jumbotron .h1, .jumbotron h1 {
        color: inherit
    }

    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        background-color: #eee
    }

    .jumbotron p {
        margin-bottom: 15px;
        font-size: 21px;
        font-weight: 200
    }

    .alert, .thumbnail {
        margin-bottom: 20px
    }

    .alert .alert-link, .close {
        font-weight: 700
    }

    .jumbotron > hr {
        border-top-color: #d5d5d5
    }

    .container .jumbotron, .container-fluid .jumbotron {
        border-radius: 6px;
        padding-left: 15px;
        padding-right: 15px
    }

    .jumbotron .container {
        max-width: 100%
    }

    @media screen and (min-width: 768px) {
        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .container .jumbotron, .container-fluid .jumbotron {
            padding-left: 60px;
            padding-right: 60px
        }

        .jumbotron .h1, .jumbotron h1 {
            font-size: 63px
        }
    }

    .thumbnail {
        padding: 4px;
        line-height: 1.42857;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }

    .thumbnail a > img, .thumbnail > img {
        display: block;
        max-width: 100%;
        height: auto;
        margin-left: auto;
        margin-right: auto
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333
    }

    a.thumbnail.active, a.thumbnail:focus, a.thumbnail:hover {
        border-color: #337ab7
    }

    .alert {
        padding: 15px;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .alert h4 {
        margin-top: 0;
        color: inherit
    }

    .alert > p, .alert > ul {
        margin-bottom: 0
    }

    .alert > p + p {
        margin-top: 5px
    }

    .alert-dismissable, .alert-dismissible {
        padding-right: 35px
    }

    .alert-dismissable .close, .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }

    .modal, .modal-backdrop {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .alert-success {
        background-color: #abe7ed;
        border-color: #abe7ed;
        color: #27a4b0
    }

    .alert-success hr {
        border-top-color: #96e1e8
    }

    .alert-success .alert-link {
        color: #1d7d86
    }

    .alert-info {
        background-color: #e0ebf9;
        border-color: #e0ebf9;
        color: #327ad5
    }

    .alert-info hr {
        border-top-color: #caddf4
    }

    .alert-info .alert-link {
        color: #2462b0
    }

    .alert-warning {
        background-color: #f9e491;
        border-color: #f9e491;
        color: #c29d0b
    }

    .alert-warning hr {
        border-top-color: #f7de79
    }

    .alert-warning .alert-link {
        color: #927608
    }

    .alert-danger {
        background-color: #fbe1e3;
        border-color: #fbe1e3;
        color: #e73d4a
    }

    .alert-danger hr {
        border-top-color: #f8cace
    }

    .alert-danger .alert-link {
        color: #d71b29
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }

    .progress {
        height: 20px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }

    .progress-bar {
        float: left;
        width: 0;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #fff;
        text-align: center;
        background-color: #337ab7;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease
    }

    .progress-bar-striped, .progress-striped .progress-bar {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-size: 40px 40px
    }

    .progress-bar.active, .progress.active .progress-bar {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite
    }

    .progress-bar-success {
        background-color: #36c6d3
    }

    .progress-striped .progress-bar-success {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-striped .progress-bar-info, .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-info {
        background-color: #659be0
    }

    .progress-striped .progress-bar-info {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-warning {
        background-color: #f1c40f
    }

    .progress-striped .progress-bar-warning {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-danger {
        background-color: #ed6b75
    }

    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .media {
        margin-top: 15px
    }

    .media:first-child {
        margin-top: 0
    }

    .media, .media-body {
        zoom: 1;
        overflow: hidden
    }

    .media-body {
        width: 10000px
    }

    .media-object.img-thumbnail {
        max-width: none
    }

    .media-right, .media > .pull-right {
        padding-left: 10px
    }

    .media-left, .media > .pull-left {
        padding-right: 10px
    }

    .media-body, .media-left, .media-right {
        display: table-cell;
        vertical-align: top
    }

    .media-middle {
        vertical-align: middle
    }

    .media-bottom {
        vertical-align: bottom
    }

    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .media-list {
        padding-left: 0;
        list-style: none
    }

    .list-group {
        margin-bottom: 20px;
        padding-left: 0
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .list-group-item:first-child {
        border-top-right-radius: 4px;
        border-top-left-radius: 4px
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }

    a.list-group-item, button.list-group-item {
        color: #555
    }

    a.list-group-item .list-group-item-heading, button.list-group-item .list-group-item-heading {
        color: #333
    }

    a.list-group-item:focus, a.list-group-item:hover, button.list-group-item:focus, button.list-group-item:hover {
        text-decoration: none;
        color: #555;
        background-color: #f5f5f5
    }

    button.list-group-item {
        width: 100%;
        text-align: left
    }

    .list-group-item.disabled, .list-group-item.disabled:focus, .list-group-item.disabled:hover {
        background-color: #f1f4f7;
        color: #b1b7bd;
        cursor: not-allowed
    }

    .list-group-item.disabled .list-group-item-heading, .list-group-item.disabled:focus .list-group-item-heading, .list-group-item.disabled:hover .list-group-item-heading {
        color: inherit
    }

    .list-group-item.disabled .list-group-item-text, .list-group-item.disabled:focus .list-group-item-text, .list-group-item.disabled:hover .list-group-item-text {
        color: #b1b7bd
    }

    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }

    .list-group-item.active .list-group-item-heading, .list-group-item.active .list-group-item-heading > .small, .list-group-item.active .list-group-item-heading > small, .list-group-item.active:focus .list-group-item-heading, .list-group-item.active:focus .list-group-item-heading > .small, .list-group-item.active:focus .list-group-item-heading > small, .list-group-item.active:hover .list-group-item-heading, .list-group-item.active:hover .list-group-item-heading > .small, .list-group-item.active:hover .list-group-item-heading > small {
        color: inherit
    }

    .list-group-item.active .list-group-item-text, .list-group-item.active:focus .list-group-item-text, .list-group-item.active:hover .list-group-item-text {
        color: #c7ddef
    }

    .list-group-item-success {
        color: #27a4b0;
        background-color: #abe7ed
    }

    a.list-group-item-success, button.list-group-item-success {
        color: #27a4b0
    }

    a.list-group-item-success .list-group-item-heading, button.list-group-item-success .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-success:focus, a.list-group-item-success:hover, button.list-group-item-success:focus, button.list-group-item-success:hover {
        color: #27a4b0;
        background-color: #96e1e8
    }

    a.list-group-item-success.active, a.list-group-item-success.active:focus, a.list-group-item-success.active:hover, button.list-group-item-success.active, button.list-group-item-success.active:focus, button.list-group-item-success.active:hover {
        color: #fff;
        background-color: #27a4b0;
        border-color: #27a4b0
    }

    .list-group-item-info {
        color: #327ad5;
        background-color: #e0ebf9
    }

    a.list-group-item-info, button.list-group-item-info {
        color: #327ad5
    }

    a.list-group-item-info .list-group-item-heading, button.list-group-item-info .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-info:focus, a.list-group-item-info:hover, button.list-group-item-info:focus, button.list-group-item-info:hover {
        color: #327ad5;
        background-color: #caddf4
    }

    a.list-group-item-info.active, a.list-group-item-info.active:focus, a.list-group-item-info.active:hover, button.list-group-item-info.active, button.list-group-item-info.active:focus, button.list-group-item-info.active:hover {
        color: #fff;
        background-color: #327ad5;
        border-color: #327ad5
    }

    .list-group-item-warning {
        color: #c29d0b;
        background-color: #f9e491
    }

    a.list-group-item-warning, button.list-group-item-warning {
        color: #c29d0b
    }

    a.list-group-item-warning .list-group-item-heading, button.list-group-item-warning .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-warning:focus, a.list-group-item-warning:hover, button.list-group-item-warning:focus, button.list-group-item-warning:hover {
        color: #c29d0b;
        background-color: #f7de79
    }

    a.list-group-item-warning.active, a.list-group-item-warning.active:focus, a.list-group-item-warning.active:hover, button.list-group-item-warning.active, button.list-group-item-warning.active:focus, button.list-group-item-warning.active:hover {
        color: #fff;
        background-color: #c29d0b;
        border-color: #c29d0b
    }

    .list-group-item-danger {
        color: #e73d4a;
        background-color: #fbe1e3
    }

    a.list-group-item-danger, button.list-group-item-danger {
        color: #e73d4a
    }

    a.list-group-item-danger .list-group-item-heading, button.list-group-item-danger .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-danger:focus, a.list-group-item-danger:hover, button.list-group-item-danger:focus, button.list-group-item-danger:hover {
        color: #e73d4a;
        background-color: #f8cace
    }

    a.list-group-item-danger.active, a.list-group-item-danger.active:focus, a.list-group-item-danger.active:hover, button.list-group-item-danger.active, button.list-group-item-danger.active:focus, button.list-group-item-danger.active:hover {
        color: #fff;
        background-color: #e73d4a;
        border-color: #e73d4a
    }

    .panel-heading > .dropdown .dropdown-toggle, .panel-title, .panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
        color: inherit
    }

    .list-group-item-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .list-group-item-text {
        margin-bottom: 0;
        line-height: 1.3
    }

    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-title, .panel > .list-group, .panel > .panel-collapse > .list-group, .panel > .panel-collapse > .table, .panel > .table, .panel > .table-responsive > .table {
        margin-bottom: 0
    }

    .panel-body {
        padding: 15px
    }

    .panel-body:after, .panel-body:before {
        content: " ";
        display: table
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .panel-title {
        margin-top: 0;
        font-size: 16px
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel > .list-group .list-group-item, .panel > .panel-collapse > .list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0
    }

    .panel-group .panel-heading, .panel > .table-bordered > tbody > tr:first-child > td, .panel > .table-bordered > tbody > tr:first-child > th, .panel > .table-bordered > tbody > tr:last-child > td, .panel > .table-bordered > tbody > tr:last-child > th, .panel > .table-bordered > tfoot > tr:last-child > td, .panel > .table-bordered > tfoot > tr:last-child > th, .panel > .table-bordered > thead > tr:first-child > td, .panel > .table-bordered > thead > tr:first-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th, .panel > .table-responsive > .table-bordered > thead > tr:first-child > td, .panel > .table-responsive > .table-bordered > thead > tr:first-child > th {
        border-bottom: 0
    }

    .panel > .table-responsive:last-child > .table:last-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child, .panel > .table:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child {
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px
    }

    .panel > .list-group:first-child .list-group-item:first-child, .panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .panel > .list-group:last-child .list-group-item:last-child, .panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .panel > .table-responsive:first-child > .table:first-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child, .panel > .table:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child, .panel > .table:first-child > thead:first-child > tr:first-child {
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .list-group + .panel-footer, .panel-heading + .list-group .list-group-item:first-child {
        border-top-width: 0
    }

    .panel > .panel-collapse > .table caption, .panel > .table caption, .panel > .table-responsive > .table caption {
        padding-left: 15px;
        padding-right: 15px
    }

    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child, .panel > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table:first-child > thead:first-child > tr:first-child th:first-child {
        border-top-left-radius: 3px
    }

    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child, .panel > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table:first-child > thead:first-child > tr:first-child th:last-child {
        border-top-right-radius: 3px
    }

    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child, .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
        border-bottom-left-radius: 3px
    }

    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
        border-bottom-right-radius: 3px
    }

    .panel > .panel-body + .table, .panel > .panel-body + .table-responsive, .panel > .table + .panel-body, .panel > .table-responsive + .panel-body {
        border-top: 1px solid #e7ecf1
    }

    .panel > .table > tbody:first-child > tr:first-child td, .panel > .table > tbody:first-child > tr:first-child th {
        border-top: 0
    }

    .panel > .table-bordered, .panel > .table-responsive > .table-bordered {
        border: 0
    }

    .panel > .table-bordered > tbody > tr > td:first-child, .panel > .table-bordered > tbody > tr > th:first-child, .panel > .table-bordered > tfoot > tr > td:first-child, .panel > .table-bordered > tfoot > tr > th:first-child, .panel > .table-bordered > thead > tr > td:first-child, .panel > .table-bordered > thead > tr > th:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child, .panel > .table-responsive > .table-bordered > thead > tr > td:first-child, .panel > .table-responsive > .table-bordered > thead > tr > th:first-child {
        border-left: 0
    }

    .panel > .table-bordered > tbody > tr > td:last-child, .panel > .table-bordered > tbody > tr > th:last-child, .panel > .table-bordered > tfoot > tr > td:last-child, .panel > .table-bordered > tfoot > tr > th:last-child, .panel > .table-bordered > thead > tr > td:last-child, .panel > .table-bordered > thead > tr > th:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child, .panel > .table-responsive > .table-bordered > thead > tr > td:last-child, .panel > .table-responsive > .table-bordered > thead > tr > th:last-child {
        border-right: 0
    }

    .panel > .table-responsive {
        border: 0;
        margin-bottom: 0
    }

    .panel-group {
        margin-bottom: 20px
    }

    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px
    }

    .panel-group .panel + .panel {
        margin-top: 5px
    }

    .panel-group .panel-heading + .panel-collapse > .list-group, .panel-group .panel-heading + .panel-collapse > .panel-body {
        border-top: 1px solid #ddd
    }

    .panel-group .panel-footer {
        border-top: 0
    }

    .panel-group .panel-footer + .panel-collapse .panel-body {
        border-bottom: 1px solid #ddd
    }

    .panel-default {
        border-color: #ddd
    }

    .panel-default > .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd
    }

    .panel-default > .panel-heading .badge {
        color: #f5f5f5;
        background-color: #333
    }

    .panel-default > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ddd
    }

    .panel-primary {
        border-color: #337ab7
    }

    .panel-primary > .panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }

    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #337ab7
    }

    .panel-primary > .panel-heading .badge {
        color: #337ab7;
        background-color: #fff
    }

    .panel-primary > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #337ab7
    }

    .panel-success {
        border-color: #abe7ed
    }

    .panel-success > .panel-heading {
        color: #27a4b0;
        background-color: #abe7ed;
        border-color: #abe7ed
    }

    .panel-success > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #abe7ed
    }

    .panel-success > .panel-heading .badge {
        color: #abe7ed;
        background-color: #27a4b0
    }

    .panel-success > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #abe7ed
    }

    .panel-info {
        border-color: #e0ebf9
    }

    .panel-info > .panel-heading {
        color: #327ad5;
        background-color: #e0ebf9;
        border-color: #e0ebf9
    }

    .panel-info > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #e0ebf9
    }

    .panel-info > .panel-heading .badge {
        color: #e0ebf9;
        background-color: #327ad5
    }

    .panel-info > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #e0ebf9
    }

    .panel-warning {
        border-color: #f9e491
    }

    .panel-warning > .panel-heading {
        color: #c29d0b;
        background-color: #f9e491;
        border-color: #f9e491
    }

    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #f9e491
    }

    .panel-warning > .panel-heading .badge {
        color: #f9e491;
        background-color: #c29d0b
    }

    .panel-warning > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #f9e491
    }

    .panel-danger {
        border-color: #fbe1e3
    }

    .panel-danger > .panel-heading {
        color: #e73d4a;
        background-color: #fbe1e3;
        border-color: #fbe1e3
    }

    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #fbe1e3
    }

    .panel-danger > .panel-heading .badge {
        color: #fbe1e3;
        background-color: #e73d4a
    }

    .panel-danger > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #fbe1e3
    }

    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0
    }

    .embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        border: 0
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%
    }

    .embed-responsive-4by3 {
        padding-bottom: 75%
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f1f4f7;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15)
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px
    }

    .close {
        float: right;
        font-size: 21px;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .2;
        filter: alpha(opacity=20)
    }

    .popover, .tooltip {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: normal;
        line-break: auto;
        line-height: 1.42857;
        text-shadow: none;
        text-transform: none;
        white-space: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        text-decoration: none
    }

    .close:focus, .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: .5;
        filter: alpha(opacity=50)
    }

    button.close {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none
    }

    .modal-content, .popover {
        background-clip: padding-box
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 10050;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }

    .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before {
        display: table;
        content: " "
    }

    .modal.fade .modal-dialog {
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%);
        -webkit-transition: -webkit-transform .3s ease-out;
        -moz-transition: -moz-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out
    }

    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        z-index: 10049;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0;
        filter: alpha(opacity=0)
    }

    .modal-backdrop.in {
        opacity: .5;
        filter: alpha(opacity=50)
    }

    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5
    }

    .modal-header .close {
        margin-top: -2px
    }

    .modal-title {
        margin: 0;
        line-height: 1.42857
    }

    .modal-body {
        position: relative;
        padding: 15px
    }

    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn + .btn {
        margin-left: 5px;
        margin-bottom: 0
    }

    .modal-footer .btn-group .btn + .btn {
        margin-left: -1px
    }

    .modal-footer .btn-block + .btn-block {
        margin-left: 0
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width: 768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }

        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }

        .modal-sm {
            width: 300px
        }
    }

    .tooltip.top-left .tooltip-arrow, .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    @media (min-width: 992px) {
        .modal-lg {
            width: 900px
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1030;
        display: block;
        text-align: left;
        text-align: start;
        font-size: 12px;
        opacity: 0;
        filter: alpha(opacity=0)
    }

    .tooltip.in {
        opacity: .9;
        filter: alpha(opacity=90)
    }

    .tooltip.top {
        margin-top: -3px;
        padding: 5px 0
    }

    .tooltip.right {
        margin-left: 3px;
        padding: 0 5px
    }

    .tooltip.bottom {
        margin-top: 3px;
        padding: 5px 0
    }

    .tooltip.left {
        margin-left: -3px;
        padding: 0 5px
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px
    }

    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.top-left .tooltip-arrow {
        right: 5px
    }

    .tooltip.top-right .tooltip-arrow {
        left: 5px
    }

    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }

    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }

    .tooltip.bottom .tooltip-arrow, .tooltip.bottom-left .tooltip-arrow, .tooltip.bottom-right .tooltip-arrow {
        border-width: 0 5px 5px;
        border-bottom-color: #000;
        top: 0
    }

    .tooltip.bottom .tooltip-arrow {
        left: 50%;
        margin-left: -5px
    }

    .tooltip.bottom-left .tooltip-arrow {
        right: 5px;
        margin-top: -5px
    }

    .tooltip.bottom-right .tooltip-arrow {
        left: 5px;
        margin-top: -5px
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1010;
        display: none;
        max-width: 276px;
        padding: 1px;
        text-align: left;
        text-align: start;
        font-size: 14px;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
    }

    .carousel-caption, .carousel-control {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .popover.top {
        margin-top: -10px
    }

    .popover.right {
        margin-left: 10px
    }

    .popover.bottom {
        margin-top: 10px
    }

    .popover.left {
        margin-left: -10px
    }

    .popover-title {
        margin: 0;
        padding: 8px 14px;
        font-size: 14px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-radius: 5px 5px 0 0
    }

    .popover-content {
        padding: 9px 14px
    }

    .popover > .arrow, .popover > .arrow:after {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .carousel, .carousel-inner {
        position: relative
    }

    .popover > .arrow {
        border-width: 11px
    }

    .popover > .arrow:after {
        border-width: 10px;
        content: ""
    }

    .popover.top > .arrow {
        left: 50%;
        margin-left: -11px;
        border-bottom-width: 0;
        border-top-color: #999;
        border-top-color: rgba(0, 0, 0, .25);
        bottom: -11px
    }

    .popover.top > .arrow:after {
        content: " ";
        bottom: 1px;
        margin-left: -10px;
        border-bottom-width: 0;
        border-top-color: #fff
    }

    .popover.left > .arrow:after, .popover.right > .arrow:after {
        content: " ";
        bottom: -10px
    }

    .popover.right > .arrow {
        top: 50%;
        left: -11px;
        margin-top: -11px;
        border-left-width: 0;
        border-right-color: #999;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .popover.right > .arrow:after {
        left: 1px;
        border-left-width: 0;
        border-right-color: #fff
    }

    .popover.bottom > .arrow {
        left: 50%;
        margin-left: -11px;
        border-top-width: 0;
        border-bottom-color: #999;
        border-bottom-color: rgba(0, 0, 0, .25);
        top: -11px
    }

    .popover.bottom > .arrow:after {
        content: " ";
        top: 1px;
        margin-left: -10px;
        border-top-width: 0;
        border-bottom-color: #fff
    }

    .popover.left > .arrow {
        top: 50%;
        right: -11px;
        margin-top: -11px;
        border-right-width: 0;
        border-left-color: #999;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.left > .arrow:after {
        right: 1px;
        border-right-width: 0;
        border-left-color: #fff
    }

    .carousel-inner {
        overflow: hidden;
        width: 100%
    }

    .carousel-inner > .item {
        display: none;
        position: relative;
        -webkit-transition: .6s ease-in-out left;
        -o-transition: .6s ease-in-out left;
        transition: .6s ease-in-out left
    }

    .carousel-inner > .item > a > img, .carousel-inner > .item > img {
        display: block;
        max-width: 100%;
        height: auto;
        line-height: 1
    }

    @media all and (transform-3d),(-webkit-transform-3d) {
        .carousel-inner > .item {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            -moz-transition: -moz-transform .6s ease-in-out;
            -o-transition: -o-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            perspective: 1000px
        }

        .carousel-inner > .item.active.right, .carousel-inner > .item.next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            left: 0
        }

        .carousel-inner > .item.active.left, .carousel-inner > .item.prev {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            left: 0
        }

        .carousel-inner > .item.active, .carousel-inner > .item.next.left, .carousel-inner > .item.prev.right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0
        }
    }

    .carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev {
        display: block
    }

    .carousel-inner > .active {
        left: 0
    }

    .carousel-inner > .next, .carousel-inner > .prev {
        position: absolute;
        top: 0;
        width: 100%
    }

    .carousel-inner > .next {
        left: 100%
    }

    .carousel-inner > .prev {
        left: -100%
    }

    .carousel-inner > .next.left, .carousel-inner > .prev.right {
        left: 0
    }

    .carousel-inner > .active.left {
        left: -100%
    }

    .carousel-inner > .active.right {
        left: 100%
    }

    .carousel-control {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 15%;
        opacity: .5;
        filter: alpha(opacity=50);
        font-size: 20px;
        background-color: transparent
    }

    .carousel-control.left {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)
    }

    .carousel-control.right {
        left: auto;
        right: 0;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)
    }

    .carousel-control:focus, .carousel-control:hover {
        outline: 0;
        color: #fff;
        text-decoration: none;
        opacity: .9;
        filter: alpha(opacity=90)
    }

    .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
        position: absolute;
        top: 50%;
        margin-top: -10px;
        z-index: 5;
        display: inline-block
    }

    .carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
        left: 50%;
        margin-left: -10px
    }

    .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
        right: 50%;
        margin-right: -10px
    }

    .carousel-control .icon-next, .carousel-control .icon-prev {
        width: 20px;
        height: 20px;
        line-height: 1;
        font-family: serif
    }

    .carousel-control .icon-prev:before {
        content: '‹'
    }

    .carousel-control .icon-next:before {
        content: '›'
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        margin-left: -30%;
        padding-left: 0;
        list-style: none;
        text-align: center
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        border: 1px solid #fff;
        border-radius: 10px;
        cursor: pointer;
        background-color: #000 \9;
        background-color: transparent
    }

    .carousel-indicators .active {
        margin: 0;
        width: 12px;
        height: 12px;
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        left: 15%;
        right: 15%;
        bottom: 20px;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px
    }

    .carousel-caption .btn, .text-hide {
        text-shadow: none
    }

    @media screen and (min-width: 768px) {
        .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
            width: 30px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px
        }

        .carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
            margin-left: -10px
        }

        .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
            margin-right: -10px
        }

        .carousel-caption {
            left: 20%;
            right: 20%;
            padding-bottom: 30px
        }

        .carousel-indicators {
            bottom: 20px
        }
    }

    .clearfix:after, .clearfix:before {
        content: " ";
        display: table
    }

    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .hidden, .visible-lg, .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
        display: none !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        background-color: transparent;
        border: 0
    }

    .affix {
        position: fixed
    }

    @-ms-viewport {
        width: device-width
    }

    @media (max-width: 767px) {
        .visible-xs {
            display: block !important
        }

        table.visible-xs {
            display: table !important
        }

        tr.visible-xs {
            display: table-row !important
        }

        td.visible-xs, th.visible-xs {
            display: table-cell !important
        }

        .visible-xs-block {
            display: block !important
        }

        .visible-xs-inline {
            display: inline !important
        }

        .visible-xs-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm {
            display: block !important
        }

        table.visible-sm {
            display: table !important
        }

        tr.visible-sm {
            display: table-row !important
        }

        td.visible-sm, th.visible-sm {
            display: table-cell !important
        }

        .visible-sm-block {
            display: block !important
        }

        .visible-sm-inline {
            display: inline !important
        }

        .visible-sm-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md {
            display: block !important
        }

        table.visible-md {
            display: table !important
        }

        tr.visible-md {
            display: table-row !important
        }

        td.visible-md, th.visible-md {
            display: table-cell !important
        }

        .visible-md-block {
            display: block !important
        }

        .visible-md-inline {
            display: inline !important
        }

        .visible-md-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width: 1200px) {
        .visible-lg {
            display: block !important
        }

        table.visible-lg {
            display: table !important
        }

        tr.visible-lg {
            display: table-row !important
        }

        td.visible-lg, th.visible-lg {
            display: table-cell !important
        }

        .visible-lg-block {
            display: block !important
        }

        .visible-lg-inline {
            display: inline !important
        }

        .visible-lg-inline-block {
            display: inline-block !important
        }

        .hidden-lg {
            display: none !important
        }
    }

    @media (max-width: 767px) {
        .hidden-xs {
            display: none !important
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .hidden-sm {
            display: none !important
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .hidden-md {
            display: none !important
        }
    }

    .visible-print {
        display: none !important
    }

    @media print {
        .visible-print {
            display: block !important
        }

        table.visible-print {
            display: table !important
        }

        tr.visible-print {
            display: table-row !important
        }

        td.visible-print, th.visible-print {
            display: table-cell !important
        }
    }

    .visible-print-block {
        display: none !important
    }

    @media print {
        .visible-print-block {
            display: block !important
        }
    }

    .visible-print-inline {
        display: none !important
    }

    @media print {
        .visible-print-inline {
            display: inline !important
        }
    }

    .visible-print-inline-block {
        display: none !important
    }

    @media print {
        .visible-print-inline-block {
            display: inline-block !important
        }

        .hidden-print {
            display: none !important
        }
    }

    div.selector, div.selector span, div.checker span, div.radio span, div.uploader, div.uploader span.action, div.button, div.button span {
        background-image: url("../images/sprite.png");
        background-repeat: no-repeat;
        -webkit-font-smoothing: antialiased
    }

    div.selector, div.checker, div.button, div.radio, div.uploader {
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1;
        vertical-align: middle
    }

    div.selector:focus, div.checker:focus, div.button:focus, div.radio:focus, div.uploader:focus {
        outline: 0
    }

    div.selector, div.selector *, div.radio, div.radio *, div.checker, div.checker *, div.uploader, div.uploader *, div.button, div.button * {
        margin: 0;
        padding: 0
    }

    .highContrastDetect {
        background: url("../images/bg-input.png") repeat-x 0 0;
        width: 0;
        height: 0
    }

    input.uniform-input, select.uniform-multiselect, textarea.uniform {
        padding: 3px;
        background: url("../images/bg-input.png") repeat-x 0 0;
        outline: 0
    }

    input.uniform-input.active, select.uniform-multiselect.active, textarea.uniform.active {
        background: url("../images/bg-input-focus.png") repeat-x 0 0
    }

    div.checker input, input[type="search"], input[type="search"]:active {
        -moz-appearance: none;
        -webkit-appearance: none
    }

    div.selector {
        background-position: 0 -130px;
        line-height: 26px;
        height: 26px;
        padding: 0 0 0 10px;
        position: relative;
        overflow: hidden
    }

    div.selector span {
        text-overflow: ellipsis;
        display: block;
        overflow: hidden;
        white-space: nowrap;
        background-position: right 0;
        height: 26px;
        line-height: 26px;
        padding-right: 25px;
        cursor: pointer;
        width: 100%;
        display: block
    }

    div.selector.fixedWidth {
        width: 190px
    }

    div.selector.fixedWidth span {
        width: 155px
    }

    div.selector select {
        opacity: 0;
        filter: alpha(opacity=0);
        -moz-opacity: 0;
        border: none;
        background: none;
        position: absolute;
        height: 22px;
        top: 2px;
        left: 0;
        width: 100%
    }

    div.selector.active {
        background-position: 0 -156px
    }

    div.selector.active span {
        background-position: right -26px
    }

    div.selector.hover, div.selector.focus {
        background-position: 0 -182px
    }

    div.selector.hover span, div.selector.focus span {
        background-position: right -52px
    }

    div.selector.hover.active, div.selector.focus.active {
        background-position: 0 -208px
    }

    div.selector.hover.active span, div.selector.focus.active span {
        background-position: right -78px
    }

    div.selector.disabled, div.selector.disabled.active {
        background-position: 0 -234px
    }

    div.selector.disabled span, div.selector.disabled.active span {
        background-position: right -104px
    }

    div.checker {
        position: relative
    }

    div.checker, div.checker span, div.checker input {
        width: 19px;
        height: 19px
    }

    div.checker span {
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1;
        text-align: center;
        background-position: 0 -260px
    }

    div.checker span.checked {
        background-position: -76px -260px
    }

    div.checker input {
        opacity: 0;
        filter: alpha(opacity=0);
        -moz-opacity: 0;
        border: none;
        background: none;
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1
    }

    div.checker.active span {
        background-position: -19px -260px
    }

    div.checker.active span.checked {
        background-position: -95px -260px
    }

    div.checker.hover span, div.checker.focus span {
        background-position: -38px -260px
    }

    div.checker.hover span.checked, div.checker.focus span.checked {
        background-position: -114px -260px
    }

    div.checker.hover.active span, div.checker.focus.active span {
        background-position: -57px -260px
    }

    div.checker.hover.active span.checked, div.checker.focus.active span.checked {
        background-position: -133px -260px
    }

    div.checker.disabled, div.checker.disabled.active {
        background-position: -152px -260px
    }

    div.checker.disabled span.checked, div.checker.disabled.active span.checked {
        background-position: -171px -260px
    }

    div.radio {
        position: relative
    }

    div.radio, div.radio span, div.radio input {
        width: 18px;
        height: 18px
    }

    div.radio span {
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1;
        text-align: center;
        background-position: 0 -279px
    }

    div.radio span.checked {
        background-position: -72px -279px
    }

    div.radio input {
        opacity: 0;
        filter: alpha(opacity=0);
        -moz-opacity: 0;
        border: none;
        background: none;
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1;
        text-align: center
    }

    div.radio.active span {
        background-position: -18px -18px -279px
    }

    div.radio.active span.checked {
        background-position: -90px -279px
    }

    div.radio.hover span, div.radio.focus span {
        background-position: -36px -36px -279px
    }

    div.radio.hover span.checked, div.radio.focus span.checked {
        background-position: -108px -279px
    }

    div.radio.hover.active span, div.radio.focus.active span {
        background-position: -54px -279px
    }

    div.radio.hover.active span.checked, div.radio.focus.active span.checked {
        background-position: -126px -279px
    }

    div.radio.disabled span, div.radio.disabled.active span {
        background-position: -144px -279px
    }

    div.radio.disabled span.checked, div.radio.disabled.active span.checked {
        background-position: -162px -279px
    }

    div.uploader {
        background-position: 0 -297px;
        height: 28px;
        width: 190px;
        cursor: pointer;
        position: relative;
        overflow: hidden
    }

    div.uploader span.action {
        background-position: right -409px;
        height: 28px;
        line-height: 28px;
        width: 82px;
        text-align: center;
        float: left;
        display: inline;
        overflow: hidden;
        cursor: pointer
    }

    div.uploader span.filename {
        text-overflow: ellipsis;
        display: block;
        overflow: hidden;
        white-space: nowrap;
        float: left;
        cursor: default;
        height: 24px;
        margin: 2px 0 2px 2px;
        line-height: 24px;
        width: 85px;
        padding: 0 10px
    }

    div.uploader input {
        opacity: 0;
        filter: alpha(opacity=0);
        -moz-opacity: 0;
        border: none;
        background: none;
        position: absolute;
        top: 0;
        right: 0;
        float: right;
        cursor: default;
        width: 100%;
        height: 100%
    }

    div.uploader.active span.action {
        background-position: right -465px
    }

    div.uploader.hover, div.uploader.focus {
        background-position: 0 -353px
    }

    div.uploader.hover span.action, div.uploader.focus span.action {
        background-position: right -437px
    }

    div.uploader.hover.active span.action, div.uploader.focus.active span.action {
        background-position: right -493px
    }

    div.uploader.disabled, div.uploader.disabled.active {
        background-position: 0 -325px
    }

    div.uploader.disabled span.action, div.uploader.disabled.active span.action {
        background-position: right -381px
    }

    div.button {
        background-position: 0 -641px;
        height: 30px;
        cursor: pointer;
        position: relative
    }

    div.button a, div.button button, div.button input {
        opacity: .01;
        filter: alpha(opacity=1);
        -moz-opacity: .01;
        display: block;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute
    }

    div.button span {
        display: -moz-inline-box;
        display: inline-block;
        *display: inline;
        zoom: 1;
        line-height: 22px;
        text-align: center;
        background-position: right -521px;
        height: 22px;
        margin-left: 13px;
        padding: 8px 15px 0 2px
    }

    div.button.active {
        background-position: 0 -671px
    }

    div.button.active span {
        background-position: right -551px;
        cursor: default
    }

    div.button.hover, div.button.focus {
        background-position: 0 -701px
    }

    div.button.hover span, div.button.focus span {
        background-position: right -581px
    }

    div.button.disabled, div.button.disabled.active {
        background-position: 0 -731px
    }

    div.button.disabled span, div.button.disabled.active span {
        background-position: right -611px;
        cursor: default
    }

    input.uniform-input, select.uniform-multiselect, textarea.uniform {
        font-size: 12px;
        font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        font-weight: normal;
        color: #777;
        border-top: solid 1px #aaa;
        border-left: solid 1px #aaa;
        border-bottom: solid 1px #ccc;
        border-right: solid 1px #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px
    }

    input.uniform-input.hover, input.uniform-input.focus, select.uniform-multiselect.hover, select.uniform-multiselect.focus, textarea.uniform.hover, textarea.uniform.focus {
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, .3);
        box-shadow: 0 0 4px rgba(0, 0, 0, .3);
        border-color: #999
    }

    div.button span {
        font-weight: bold;
        font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase
    }

    div.button.hover span, div.button.focus span {
        color: #555
    }

    div.button.disabled span, div.button.disabled.active span {
        color: #bbb
    }

    div.selector {
        font-size: 12px
    }

    div.selector span {
        color: #666;
        text-shadow: 0 1px 0 #fff
    }

    div.selector select {
        font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
        font-size: 12px
    }

    div.selector.disabled span, div.selector.disabled.active span {
        color: #bbb
    }

    div.checker {
        margin-right: 5px
    }

    div.radio {
        margin-right: 3px
    }

    div.uploader span.action {
        text-shadow: #fff 0 1px 0;
        background-color: #fff;
        font-size: 11px;
        font-weight: bold
    }

    div.uploader span.filename {
        color: #777;
        border-right: solid 1px #bbb;
        font-size: 11px
    }

    div.uploader.disabled span.action, div.uploader.disabled.active span.action {
        color: #aaa
    }

    div.uploader.disabled span.filename, div.uploader.disabled.active span.filename {
        border-color: #ddd;
        color: #aaa
    }

    input.uniform-input, input.uniform-input:focus {
        background-color: #fff
    }

    .morris-hover {
        position: absolute;
        z-index: 1000
    }

    .morris-hover.morris-default-style {
        border-radius: 10px;
        padding: 6px;
        color: #666;
        background: rgba(255, 255, 255, .8);
        border: solid 2px rgba(230, 230, 230, .8);
        font-family: sans-serif;
        font-size: 12px;
        text-align: center
    }

    .morris-hover.morris-default-style .morris-hover-row-label {
        font-weight: bold;
        margin: .25em 0
    }

    .morris-hover.morris-default-style .morris-hover-point {
        white-space: nowrap;
        margin: .1em 0
    }

    .jstree-node, .jstree-children, .jstree-container-ul {
        display: block;
        margin: 0;
        padding: 0;
        list-style-type: none;
        list-style-image: none
    }

    .jstree-node {
        white-space: nowrap
    }

    .jstree-anchor {
        display: inline-block;
        color: #000;
        white-space: nowrap;
        padding: 0 4px 0 1px;
        margin: 0;
        vertical-align: top
    }

    .jstree-anchor:focus {
        outline: 0
    }

    .jstree-anchor, .jstree-anchor:link, .jstree-anchor:visited, .jstree-anchor:hover, .jstree-anchor:active {
        text-decoration: none;
        color: inherit
    }

    .jstree-icon {
        display: inline-block;
        text-decoration: none;
        margin: 0;
        padding: 0;
        vertical-align: top;
        text-align: center
    }

    .jstree-icon:empty {
        display: inline-block;
        text-decoration: none;
        margin: 0;
        padding: 0;
        vertical-align: top;
        text-align: center
    }

    .jstree-ocl {
        cursor: pointer
    }

    .jstree-leaf > .jstree-ocl {
        cursor: default
    }

    .jstree .jstree-open > .jstree-children {
        display: block
    }

    .jstree .jstree-closed > .jstree-children, .jstree .jstree-leaf > .jstree-children {
        display: none
    }

    .jstree-anchor > .jstree-themeicon {
        margin-right: 2px
    }

    .jstree-no-icons .jstree-themeicon, .jstree-anchor > .jstree-themeicon-hidden {
        display: none
    }

    .jstree-hidden {
        display: none
    }

    .jstree-rtl .jstree-anchor {
        padding: 0 1px 0 4px
    }

    .jstree-rtl .jstree-anchor > .jstree-themeicon {
        margin-left: 2px;
        margin-right: 0
    }

    .jstree-rtl .jstree-node {
        margin-left: 0
    }

    .jstree-rtl .jstree-container-ul > .jstree-node {
        margin-right: 0
    }

    .jstree-wholerow-ul {
        position: relative;
        display: inline-block;
        min-width: 100%
    }

    .jstree-wholerow-ul .jstree-leaf > .jstree-ocl {
        cursor: pointer
    }

    .jstree-wholerow-ul .jstree-anchor, .jstree-wholerow-ul .jstree-icon {
        position: relative
    }

    .jstree-wholerow-ul .jstree-wholerow {
        width: 100%;
        cursor: pointer;
        position: absolute;
        left: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .vakata-context {
        display: none
    }

    .vakata-context, .vakata-context ul {
        margin: 0;
        padding: 2px;
        position: absolute;
        background: #f5f5f5;
        border: 1px solid #979797;
        box-shadow: 2px 2px 2px #999
    }

    .vakata-context ul {
        list-style: none;
        left: 100%;
        margin-top: -2.7em;
        margin-left: -4px
    }

    .vakata-context .vakata-context-right ul {
        left: auto;
        right: 100%;
        margin-left: auto;
        margin-right: -4px
    }

    .vakata-context li {
        list-style: none;
        display: inline
    }

    .vakata-context li > a {
        display: block;
        padding: 0 2em 0 2em;
        text-decoration: none;
        width: auto;
        color: #000;
        white-space: nowrap;
        line-height: 2.4em;
        text-shadow: 1px 1px 0 white;
        border-radius: 1px
    }

    .vakata-context li > a:hover {
        position: relative;
        background-color: #e8eff7;
        box-shadow: 0 0 2px #0a6aa1
    }

    .vakata-context li > a.vakata-context-parent {
        background-image: url(/libs/jstree/themes/default/data:image/gif;base64,R0lGODlhCwAHAIAAACgoKP/yH5BAEAAAEALAAAAAALAAcAAAIORI4JlrqN1oMSnmmZDQUAOw==);
        background-position: right center;
        background-repeat: no-repeat
    }

    .vakata-context li > a:focus {
        outline: 0
    }

    .vakata-context .vakata-context-hover > a {
        position: relative;
        background-color: #e8eff7;
        box-shadow: 0 0 2px #0a6aa1
    }

    .vakata-context .vakata-context-separator > a, .vakata-context .vakata-context-separator > a:hover {
        background: #fff;
        border: 0;
        border-top: 1px solid #e2e3e3;
        height: 1px;
        min-height: 1px;
        max-height: 1px;
        padding: 0;
        margin: 0 0 0 2.4em;
        border-left: 1px solid #e0e0e0;
        text-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        border-radius: 0
    }

    .vakata-context .vakata-contextmenu-disabled a, .vakata-context .vakata-contextmenu-disabled a:hover {
        color: silver;
        background-color: transparent;
        border: 0;
        box-shadow: 0 0 0
    }

    .vakata-context li > a > i {
        text-decoration: none;
        display: inline-block;
        width: 2.4em;
        height: 2.4em;
        background: transparent;
        margin: 0 0 0 -2em;
        vertical-align: top;
        text-align: center;
        line-height: 2.4em
    }

    .vakata-context li > a > i:empty {
        width: 2.4em;
        line-height: 2.4em
    }

    .vakata-context li > a .vakata-contextmenu-sep {
        display: inline-block;
        width: 1px;
        height: 2.4em;
        background: #fff;
        margin: 0 .5em 0 0;
        border-left: 1px solid #e2e3e3
    }

    .vakata-context .vakata-contextmenu-shortcut {
        font-size: .8em;
        color: silver;
        opacity: .5;
        display: none
    }

    .vakata-context-rtl ul {
        left: auto;
        right: 100%;
        margin-left: auto;
        margin-right: -4px
    }

    .vakata-context-rtl li > a.vakata-context-parent {
        background-image: url(/libs/jstree/themes/default/data:image/gif;base64,R0lGODlhCwAHAIAAACgoKP/yH5BAEAAAEALAAAAAALAAcAAAINjI+AC7rWHIsPtmoxLAA7);
        background-position: left center;
        background-repeat: no-repeat
    }

    .vakata-context-rtl .vakata-context-separator > a {
        margin: 0 2.4em 0 0;
        border-left: 0;
        border-right: 1px solid #e2e3e3
    }

    .vakata-context-rtl .vakata-context-left ul {
        right: auto;
        left: 100%;
        margin-left: -4px;
        margin-right: auto
    }

    .vakata-context-rtl li > a > i {
        margin: 0 -2em 0 0
    }

    .vakata-context-rtl li > a .vakata-contextmenu-sep {
        margin: 0 0 0 .5em;
        border-left-color: #fff;
        background: #e2e3e3
    }

    #jstree-marker {
        position: absolute;
        top: 0;
        left: 0;
        margin: -5px 0 0 0;
        padding: 0;
        border-right: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid;
        width: 0;
        height: 0;
        font-size: 0;
        line-height: 0
    }

    #jstree-dnd {
        line-height: 16px;
        margin: 0;
        padding: 4px
    }

    #jstree-dnd .jstree-icon, #jstree-dnd .jstree-copy {
        display: inline-block;
        text-decoration: none;
        margin: 0 2px 0 0;
        padding: 0;
        width: 16px;
        height: 16px
    }

    #jstree-dnd .jstree-ok {
        background: green
    }

    #jstree-dnd .jstree-er {
        background: red
    }

    #jstree-dnd .jstree-copy {
        margin: 0 2px 0 2px
    }

    .jstree-default .jstree-node, .jstree-default .jstree-icon {
        background-repeat: no-repeat;
        background-color: transparent
    }

    .jstree-default .jstree-anchor, .jstree-default .jstree-wholerow {
        transition: background-color .15s, box-shadow .15s
    }

    .jstree-default .jstree-hovered {
        background: #e7f4f9;
        border-radius: 2px;
        box-shadow: inset 0 0 1px #ccc
    }

    .jstree-default .jstree-clicked {
        background: #beebff;
        border-radius: 2px;
        box-shadow: inset 0 0 1px #999
    }

    .jstree-default .jstree-no-icons .jstree-anchor > .jstree-themeicon {
        display: none
    }

    .jstree-default .jstree-disabled {
        background: transparent;
        color: #666
    }

    .jstree-default .jstree-disabled.jstree-hovered {
        background: transparent;
        box-shadow: none
    }

    .jstree-default .jstree-disabled.jstree-clicked {
        background: #efefef
    }

    .jstree-default .jstree-disabled > .jstree-icon {
        opacity: .8;
        filter: gray;
        -webkit-filter: grayscale(100%)
    }

    .jstree-default .jstree-search {
        font-style: italic;
        color: #8b0000;
        font-weight: bold
    }

    .jstree-default .jstree-no-checkboxes .jstree-checkbox {
        display: none !important
    }

    .jstree-default.jstree-checkbox-no-clicked .jstree-clicked {
        background: transparent;
        box-shadow: none
    }

    .jstree-default.jstree-checkbox-no-clicked .jstree-clicked.jstree-hovered {
        background: #e7f4f9
    }

    .jstree-default.jstree-checkbox-no-clicked > .jstree-wholerow-ul .jstree-wholerow-clicked {
        background: transparent
    }

    .jstree-default.jstree-checkbox-no-clicked > .jstree-wholerow-ul .jstree-wholerow-clicked.jstree-wholerow-hovered {
        background: #e7f4f9
    }

    .jstree-default > .jstree-striped {
        min-width: 100%;
        display: inline-block;
        background: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAkCAMAAAB/qqA+AAAABlBMVEUAAAAAAAClZ7nPAAAAAnRSTlMNAMM9s3UAAAAXSURBVHjajcEBAQAAAIKg/H/aCQZ70AUBjAATb6YPDgAAAABJRU5ErkJggg==) left top repeat
    }

    .jstree-default > .jstree-wholerow-ul .jstree-hovered, .jstree-default > .jstree-wholerow-ul .jstree-clicked {
        background: transparent;
        box-shadow: none;
        border-radius: 0
    }

    .jstree-default .jstree-wholerow {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .jstree-default .jstree-wholerow-hovered {
        background: #e7f4f9
    }

    .jstree-default .jstree-wholerow-clicked {
        background: #beebff;
        background: -webkit-linear-gradient(top, #beebff 0%, #a8e4ff 100%);
        background: linear-gradient(to bottom, #beebff 0%, #a8e4ff 100%)
    }

    .jstree-default .jstree-node {
        min-height: 24px;
        line-height: 24px;
        margin-left: 24px;
        min-width: 24px
    }

    .jstree-default .jstree-anchor {
        line-height: 24px;
        height: 24px
    }

    .jstree-default .jstree-icon {
        width: 24px;
        height: 24px;
        line-height: 24px
    }

    .jstree-default .jstree-icon:empty {
        width: 24px;
        height: 24px;
        line-height: 24px
    }

    .jstree-default.jstree-rtl .jstree-node {
        margin-right: 24px
    }

    .jstree-default .jstree-wholerow {
        height: 24px
    }

    .jstree-default .jstree-node, .jstree-default .jstree-icon {
        background-image: url(/libs/jstree/themes/default/32px.png)
    }

    .jstree-default .jstree-node {
        background-position: -292px -4px;
        background-repeat: repeat-y
    }

    .jstree-default .jstree-last {
        background: transparent
    }

    .jstree-default .jstree-open > .jstree-ocl {
        background-position: -132px -4px
    }

    .jstree-default .jstree-closed > .jstree-ocl {
        background-position: -100px -4px
    }

    .jstree-default .jstree-leaf > .jstree-ocl {
        background-position: -68px -4px
    }

    .jstree-default .jstree-themeicon {
        background-position: -260px -4px
    }

    .jstree-default > .jstree-no-dots .jstree-node, .jstree-default > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -36px -4px
    }

    .jstree-default > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: -4px -4px
    }

    .jstree-default .jstree-disabled {
        background: transparent
    }

    .jstree-default .jstree-disabled.jstree-hovered {
        background: transparent
    }

    .jstree-default .jstree-disabled.jstree-clicked {
        background: #efefef
    }

    .jstree-default .jstree-checkbox {
        background-position: -164px -4px
    }

    .jstree-default .jstree-checkbox:hover {
        background-position: -164px -36px
    }

    .jstree-default.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox, .jstree-default .jstree-checked > .jstree-checkbox {
        background-position: -228px -4px
    }

    .jstree-default.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox:hover, .jstree-default .jstree-checked > .jstree-checkbox:hover {
        background-position: -228px -36px
    }

    .jstree-default .jstree-anchor > .jstree-undetermined {
        background-position: -196px -4px
    }

    .jstree-default .jstree-anchor > .jstree-undetermined:hover {
        background-position: -196px -36px
    }

    .jstree-default .jstree-checkbox-disabled {
        opacity: .8;
        filter: gray;
        -webkit-filter: grayscale(100%)
    }

    .jstree-default > .jstree-striped {
        background-size: auto 48px
    }

    .jstree-default.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAACAQMAAAB49I5GAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjAAMOBgAAGAAJMwQHdQAAAABJRU5ErkJggg==);
        background-position: 100% 1px;
        background-repeat: repeat-y
    }

    .jstree-default.jstree-rtl .jstree-last {
        background: transparent
    }

    .jstree-default.jstree-rtl .jstree-open > .jstree-ocl {
        background-position: -132px -36px
    }

    .jstree-default.jstree-rtl .jstree-closed > .jstree-ocl {
        background-position: -100px -36px
    }

    .jstree-default.jstree-rtl .jstree-leaf > .jstree-ocl {
        background-position: -68px -36px
    }

    .jstree-default.jstree-rtl > .jstree-no-dots .jstree-node, .jstree-default.jstree-rtl > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default.jstree-rtl > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -36px -36px
    }

    .jstree-default.jstree-rtl > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: -4px -36px
    }

    .jstree-default .jstree-themeicon-custom {
        background-color: transparent;
        background-image: none;
        background-position: 0 0
    }

    .jstree-default > .jstree-container-ul .jstree-loading > .jstree-ocl {
        background: url(/libs/jstree/themes/default/throbber.gif) center center no-repeat
    }

    .jstree-default .jstree-file {
        background: url(/libs/jstree/themes/default/32px.png) -100px -68px no-repeat
    }

    .jstree-default .jstree-folder {
        background: url(/libs/jstree/themes/default/32px.png) -260px -4px no-repeat
    }

    .jstree-default > .jstree-container-ul > .jstree-node {
        margin-left: 0;
        margin-right: 0
    }

    #jstree-dnd.jstree-default {
        line-height: 24px;
        padding: 0 4px
    }

    #jstree-dnd.jstree-default .jstree-ok, #jstree-dnd.jstree-default .jstree-er {
        background-image: url(/libs/jstree/themes/default/32px.png);
        background-repeat: no-repeat;
        background-color: transparent
    }

    #jstree-dnd.jstree-default i {
        background: transparent;
        width: 24px;
        height: 24px;
        line-height: 24px
    }

    #jstree-dnd.jstree-default .jstree-ok {
        background-position: -4px -68px
    }

    #jstree-dnd.jstree-default .jstree-er {
        background-position: -36px -68px
    }

    .jstree-default.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAACAQMAAAB49I5GAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjAAMOBgAAGAAJMwQHdQAAAABJRU5ErkJggg==)
    }

    .jstree-default.jstree-rtl .jstree-last {
        background: transparent
    }

    .jstree-default-small .jstree-node {
        min-height: 18px;
        line-height: 18px;
        margin-left: 18px;
        min-width: 18px
    }

    .jstree-default-small .jstree-anchor {
        line-height: 18px;
        height: 18px
    }

    .jstree-default-small .jstree-icon {
        width: 18px;
        height: 18px;
        line-height: 18px
    }

    .jstree-default-small .jstree-icon:empty {
        width: 18px;
        height: 18px;
        line-height: 18px
    }

    .jstree-default-small.jstree-rtl .jstree-node {
        margin-right: 18px
    }

    .jstree-default-small .jstree-wholerow {
        height: 18px
    }

    .jstree-default-small .jstree-node, .jstree-default-small .jstree-icon {
        background-image: url(/libs/jstree/themes/default/32px.png)
    }

    .jstree-default-small .jstree-node {
        background-position: -295px -7px;
        background-repeat: repeat-y
    }

    .jstree-default-small .jstree-last {
        background: transparent
    }

    .jstree-default-small .jstree-open > .jstree-ocl {
        background-position: -135px -7px
    }

    .jstree-default-small .jstree-closed > .jstree-ocl {
        background-position: -103px -7px
    }

    .jstree-default-small .jstree-leaf > .jstree-ocl {
        background-position: -71px -7px
    }

    .jstree-default-small .jstree-themeicon {
        background-position: -263px -7px
    }

    .jstree-default-small > .jstree-no-dots .jstree-node, .jstree-default-small > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default-small > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -39px -7px
    }

    .jstree-default-small > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: -7px -7px
    }

    .jstree-default-small .jstree-disabled {
        background: transparent
    }

    .jstree-default-small .jstree-disabled.jstree-hovered {
        background: transparent
    }

    .jstree-default-small .jstree-disabled.jstree-clicked {
        background: #efefef
    }

    .jstree-default-small .jstree-checkbox {
        background-position: -167px -7px
    }

    .jstree-default-small .jstree-checkbox:hover {
        background-position: -167px -39px
    }

    .jstree-default-small.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox, .jstree-default-small .jstree-checked > .jstree-checkbox {
        background-position: -231px -7px
    }

    .jstree-default-small.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox:hover, .jstree-default-small .jstree-checked > .jstree-checkbox:hover {
        background-position: -231px -39px
    }

    .jstree-default-small .jstree-anchor > .jstree-undetermined {
        background-position: -199px -7px
    }

    .jstree-default-small .jstree-anchor > .jstree-undetermined:hover {
        background-position: -199px -39px
    }

    .jstree-default-small .jstree-checkbox-disabled {
        opacity: .8;
        filter: gray;
        -webkit-filter: grayscale(100%)
    }

    .jstree-default-small > .jstree-striped {
        background-size: auto 36px
    }

    .jstree-default-small.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAACAQMAAAB49I5GAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjAAMOBgAAGAAJMwQHdQAAAABJRU5ErkJggg==);
        background-position: 100% 1px;
        background-repeat: repeat-y
    }

    .jstree-default-small.jstree-rtl .jstree-last {
        background: transparent
    }

    .jstree-default-small.jstree-rtl .jstree-open > .jstree-ocl {
        background-position: -135px -39px
    }

    .jstree-default-small.jstree-rtl .jstree-closed > .jstree-ocl {
        background-position: -103px -39px
    }

    .jstree-default-small.jstree-rtl .jstree-leaf > .jstree-ocl {
        background-position: -71px -39px
    }

    .jstree-default-small.jstree-rtl > .jstree-no-dots .jstree-node, .jstree-default-small.jstree-rtl > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default-small.jstree-rtl > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -39px -39px
    }

    .jstree-default-small.jstree-rtl > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: -7px -39px
    }

    .jstree-default-small .jstree-themeicon-custom {
        background-color: transparent;
        background-image: none;
        background-position: 0 0
    }

    .jstree-default-small > .jstree-container-ul .jstree-loading > .jstree-ocl {
        background: url(/libs/jstree/themes/default/throbber.gif) center center no-repeat
    }

    .jstree-default-small .jstree-file {
        background: url(/libs/jstree/themes/default/32px.png) -103px -71px no-repeat
    }

    .jstree-default-small .jstree-folder {
        background: url(/libs/jstree/themes/default/32px.png) -263px -7px no-repeat
    }

    .jstree-default-small > .jstree-container-ul > .jstree-node {
        margin-left: 0;
        margin-right: 0
    }

    #jstree-dnd.jstree-default-small {
        line-height: 18px;
        padding: 0 4px
    }

    #jstree-dnd.jstree-default-small .jstree-ok, #jstree-dnd.jstree-default-small .jstree-er {
        background-image: url(/libs/jstree/themes/default/32px.png);
        background-repeat: no-repeat;
        background-color: transparent
    }

    #jstree-dnd.jstree-default-small i {
        background: transparent;
        width: 18px;
        height: 18px;
        line-height: 18px
    }

    #jstree-dnd.jstree-default-small .jstree-ok {
        background-position: -7px -71px
    }

    #jstree-dnd.jstree-default-small .jstree-er {
        background-position: -39px -71px
    }

    .jstree-default-small.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAACAQMAAABv1h6PAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjAAMHBgAAiABBI4gz9AAAAABJRU5ErkJggg==)
    }

    .jstree-default-small.jstree-rtl .jstree-last {
        background: transparent
    }

    .jstree-default-large .jstree-node {
        min-height: 32px;
        line-height: 32px;
        margin-left: 32px;
        min-width: 32px
    }

    .jstree-default-large .jstree-anchor {
        line-height: 32px;
        height: 32px
    }

    .jstree-default-large .jstree-icon {
        width: 32px;
        height: 32px;
        line-height: 32px
    }

    .jstree-default-large .jstree-icon:empty {
        width: 32px;
        height: 32px;
        line-height: 32px
    }

    .jstree-default-large.jstree-rtl .jstree-node {
        margin-right: 32px
    }

    .jstree-default-large .jstree-wholerow {
        height: 32px
    }

    .jstree-default-large .jstree-node, .jstree-default-large .jstree-icon {
        background-image: url(/libs/jstree/themes/default/32px.png)
    }

    .jstree-default-large .jstree-node {
        background-position: -288px 0;
        background-repeat: repeat-y
    }

    .jstree-default-large .jstree-last {
        background: transparent
    }

    .jstree-default-large .jstree-open > .jstree-ocl {
        background-position: -128px 0
    }

    .jstree-default-large .jstree-closed > .jstree-ocl {
        background-position: -96px 0
    }

    .jstree-default-large .jstree-leaf > .jstree-ocl {
        background-position: -64px 0
    }

    .jstree-default-large .jstree-themeicon {
        background-position: -256px 0
    }

    .jstree-default-large > .jstree-no-dots .jstree-node, .jstree-default-large > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default-large > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -32px 0
    }

    .jstree-default-large > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: 0 0
    }

    .jstree-default-large .jstree-disabled {
        background: transparent
    }

    .jstree-default-large .jstree-disabled.jstree-hovered {
        background: transparent
    }

    .jstree-default-large .jstree-disabled.jstree-clicked {
        background: #efefef
    }

    .jstree-default-large .jstree-checkbox {
        background-position: -160px 0
    }

    .jstree-default-large .jstree-checkbox:hover {
        background-position: -160px -32px
    }

    .jstree-default-large.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox, .jstree-default-large .jstree-checked > .jstree-checkbox {
        background-position: -224px 0
    }

    .jstree-default-large.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox:hover, .jstree-default-large .jstree-checked > .jstree-checkbox:hover {
        background-position: -224px -32px
    }

    .jstree-default-large .jstree-anchor > .jstree-undetermined {
        background-position: -192px 0
    }

    .jstree-default-large .jstree-anchor > .jstree-undetermined:hover {
        background-position: -192px -32px
    }

    .jstree-default-large .jstree-checkbox-disabled {
        opacity: .8;
        filter: gray;
        -webkit-filter: grayscale(100%)
    }

    .jstree-default-large > .jstree-striped {
        background-size: auto 64px
    }

    .jstree-default-large.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAACAQMAAAB49I5GAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjAAMOBgAAGAAJMwQHdQAAAABJRU5ErkJggg==);
        background-position: 100% 1px;
        background-repeat: repeat-y
    }

    .jstree-default-large.jstree-rtl .jstree-last {
        background: transparent
    }

    .jstree-default-large.jstree-rtl .jstree-open > .jstree-ocl {
        background-position: -128px -32px
    }

    .jstree-default-large.jstree-rtl .jstree-closed > .jstree-ocl {
        background-position: -96px -32px
    }

    .jstree-default-large.jstree-rtl .jstree-leaf > .jstree-ocl {
        background-position: -64px -32px
    }

    .jstree-default-large.jstree-rtl > .jstree-no-dots .jstree-node, .jstree-default-large.jstree-rtl > .jstree-no-dots .jstree-leaf > .jstree-ocl {
        background: transparent
    }

    .jstree-default-large.jstree-rtl > .jstree-no-dots .jstree-open > .jstree-ocl {
        background-position: -32px -32px
    }

    .jstree-default-large.jstree-rtl > .jstree-no-dots .jstree-closed > .jstree-ocl {
        background-position: 0 -32px
    }

    .jstree-default-large .jstree-themeicon-custom {
        background-color: transparent;
        background-image: none;
        background-position: 0 0
    }

    .jstree-default-large > .jstree-container-ul .jstree-loading > .jstree-ocl {
        background: url(/libs/jstree/themes/default/throbber.gif) center center no-repeat
    }

    .jstree-default-large .jstree-file {
        background: url(/libs/jstree/themes/default/32px.png) -96px -64px no-repeat
    }

    .jstree-default-large .jstree-folder {
        background: url(/libs/jstree/themes/default/32px.png) -256px 0 no-repeat
    }

    .jstree-default-large > .jstree-container-ul > .jstree-node {
        margin-left: 0;
        margin-right: 0
    }

    #jstree-dnd.jstree-default-large {
        line-height: 32px;
        padding: 0 4px
    }

    #jstree-dnd.jstree-default-large .jstree-ok, #jstree-dnd.jstree-default-large .jstree-er {
        background-image: url(/libs/jstree/themes/default/32px.png);
        background-repeat: no-repeat;
        background-color: transparent
    }

    #jstree-dnd.jstree-default-large i {
        background: transparent;
        width: 32px;
        height: 32px;
        line-height: 32px
    }

    #jstree-dnd.jstree-default-large .jstree-ok {
        background-position: 0 -64px
    }

    #jstree-dnd.jstree-default-large .jstree-er {
        background-position: -32px -64px
    }

    .jstree-default-large.jstree-rtl .jstree-node {
        background-image: url(/libs/jstree/themes/default/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAACAQMAAAAD0EyKAAAABlBMVEUAAAAdHRvEkCwcAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjgIIGBgABCgCBvVLXcAAAAABJRU5ErkJggg==)
    }

    .jstree-default-large.jstree-rtl .jstree-last {
        background: transparent
    }

    @media (max-width: 768px) {
        #jstree-dnd.jstree-dnd-responsive {
            line-height: 40px;
            font-weight: bold;
            font-size: 1.1em;
            text-shadow: 1px 1px white
        }

        #jstree-dnd.jstree-dnd-responsive > i {
            background: transparent;
            width: 40px;
            height: 40px
        }

        #jstree-dnd.jstree-dnd-responsive > .jstree-ok {
            background-image: url(/libs/jstree/themes/default/40px.png);
            background-position: 0 -200px;
            background-size: 120px 240px
        }

        #jstree-dnd.jstree-dnd-responsive > .jstree-er {
            background-image: url(/libs/jstree/themes/default/40px.png);
            background-position: -40px -200px;
            background-size: 120px 240px
        }

        #jstree-marker.jstree-dnd-responsive {
            border-left-width: 10px;
            border-top-width: 10px;
            border-bottom-width: 10px;
            margin-top: -10px
        }
    }

    @media (max-width: 768px) {
        .jstree-default-responsive {
        }

        .jstree-default-responsive .jstree-icon {
            background-image: url(/libs/jstree/themes/default/40px.png)
        }

        .jstree-default-responsive .jstree-node, .jstree-default-responsive .jstree-leaf > .jstree-ocl {
            background: transparent
        }

        .jstree-default-responsive .jstree-node {
            min-height: 40px;
            line-height: 40px;
            margin-left: 40px;
            min-width: 40px;
            white-space: nowrap
        }

        .jstree-default-responsive .jstree-anchor {
            line-height: 40px;
            height: 40px
        }

        .jstree-default-responsive .jstree-icon, .jstree-default-responsive .jstree-icon:empty {
            width: 40px;
            height: 40px;
            line-height: 40px
        }

        .jstree-default-responsive > .jstree-container-ul > .jstree-node {
            margin-left: 0
        }

        .jstree-default-responsive.jstree-rtl .jstree-node {
            margin-left: 0;
            margin-right: 40px
        }

        .jstree-default-responsive.jstree-rtl .jstree-container-ul > .jstree-node {
            margin-right: 0
        }

        .jstree-default-responsive .jstree-ocl, .jstree-default-responsive .jstree-themeicon, .jstree-default-responsive .jstree-checkbox {
            background-size: 120px 240px
        }

        .jstree-default-responsive .jstree-leaf > .jstree-ocl {
            background: transparent
        }

        .jstree-default-responsive .jstree-open > .jstree-ocl {
            background-position: 0 0 !important
        }

        .jstree-default-responsive .jstree-closed > .jstree-ocl {
            background-position: 0 -40px !important
        }

        .jstree-default-responsive.jstree-rtl .jstree-closed > .jstree-ocl {
            background-position: -40px 0 !important
        }

        .jstree-default-responsive .jstree-themeicon {
            background-position: -40px -40px
        }

        .jstree-default-responsive .jstree-checkbox, .jstree-default-responsive .jstree-checkbox:hover {
            background-position: -40px -80px
        }

        .jstree-default-responsive.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox, .jstree-default-responsive.jstree-checkbox-selection .jstree-clicked > .jstree-checkbox:hover, .jstree-default-responsive .jstree-checked > .jstree-checkbox, .jstree-default-responsive .jstree-checked > .jstree-checkbox:hover {
            background-position: 0 -80px
        }

        .jstree-default-responsive .jstree-anchor > .jstree-undetermined, .jstree-default-responsive .jstree-anchor > .jstree-undetermined:hover {
            background-position: 0 -120px
        }

        .jstree-default-responsive .jstree-anchor {
            font-weight: bold;
            font-size: 1.1em;
            text-shadow: 1px 1px white
        }

        .jstree-default-responsive > .jstree-striped {
            background: transparent
        }

        .jstree-default-responsive .jstree-wholerow {
            border-top: 1px solid rgba(255, 255, 255, .7);
            border-bottom: 1px solid rgba(64, 64, 64, .2);
            background: #ebebeb;
            height: 40px
        }

        .jstree-default-responsive .jstree-wholerow-hovered {
            background: #e7f4f9
        }

        .jstree-default-responsive .jstree-wholerow-clicked {
            background: #beebff
        }

        .jstree-default-responsive .jstree-children .jstree-last > .jstree-wholerow {
            box-shadow: inset 0 -6px 3px -5px #666
        }

        .jstree-default-responsive .jstree-children .jstree-open > .jstree-wholerow {
            box-shadow: inset 0 6px 3px -5px #666;
            border-top: 0
        }

        .jstree-default-responsive .jstree-children .jstree-open + .jstree-open {
            box-shadow: none
        }

        .jstree-default-responsive .jstree-node, .jstree-default-responsive .jstree-icon, .jstree-default-responsive .jstree-node > .jstree-ocl, .jstree-default-responsive .jstree-themeicon, .jstree-default-responsive .jstree-checkbox {
            background-image: url(/libs/jstree/themes/default/40px.png);
            background-size: 120px 240px
        }

        .jstree-default-responsive .jstree-node {
            background-position: -80px 0;
            background-repeat: repeat-y
        }

        .jstree-default-responsive .jstree-last {
            background: transparent
        }

        .jstree-default-responsive .jstree-leaf > .jstree-ocl {
            background-position: -40px -120px
        }

        .jstree-default-responsive .jstree-last > .jstree-ocl {
            background-position: -40px -160px
        }

        .jstree-default-responsive .jstree-themeicon-custom {
            background-color: transparent;
            background-image: none;
            background-position: 0 0
        }

        .jstree-default-responsive .jstree-file {
            background: url(/libs/jstree/themes/default/40px.png) 0 -160px no-repeat;
            background-size: 120px 240px
        }

        .jstree-default-responsive .jstree-folder {
            background: url(/libs/jstree/themes/default/40px.png) -40px -40px no-repeat;
            background-size: 120px 240px
        }

        .jstree-default-responsive > .jstree-container-ul > .jstree-node {
            margin-left: 0;
            margin-right: 0
        }
    }

    .toast-title {
        font-weight: 700
    }

    .toast-message {
        -ms-word-wrap: break-word;
        word-wrap: break-word
    }

    .toast-message a, .toast-message label {
        color: #fff
    }

    .toast-message a:hover {
        color: #ccc;
        text-decoration: none
    }

    .toast-close-button {
        position: relative;
        right: -.3em;
        top: -.3em;
        float: right;
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        -webkit-text-shadow: 0 1px 0 #fff;
        text-shadow: 0 1px 0 #fff;
        opacity: .8;
        -ms-filter: alpha(Opacity=80);
        filter: alpha(opacity=80)
    }

    .toast-close-button:focus, .toast-close-button:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: .4;
        -ms-filter: alpha(Opacity=40);
        filter: alpha(opacity=40)
    }

    button.toast-close-button {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none
    }

    .toast-top-center {
        top: 0;
        right: 0;
        width: 100%
    }

    .toast-bottom-center {
        bottom: 0;
        right: 0;
        width: 100%
    }

    .toast-top-full-width {
        top: 0;
        right: 0;
        width: 100%
    }

    .toast-bottom-full-width {
        bottom: 0;
        right: 0;
        width: 100%
    }

    .toast-top-left {
        top: 12px;
        left: 12px
    }

    .toast-top-right {
        top: 12px;
        right: 12px
    }

    .toast-bottom-right {
        right: 12px;
        bottom: 12px
    }

    .toast-bottom-left {
        bottom: 12px;
        left: 12px
    }

    #toast-container {
        position: fixed;
        z-index: 999999
    }

    #toast-container * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    #toast-container > div {
        position: relative;
        overflow: hidden;
        margin: 0 0 6px;
        padding: 15px 15px 15px 50px;
        width: 300px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        background-position: 15px center;
        background-repeat: no-repeat;
        -moz-box-shadow: 0 0 12px #999;
        -webkit-box-shadow: 0 0 12px #999;
        box-shadow: 0 0 12px #999;
        color: #fff;
        opacity: .8;
        -ms-filter: alpha(Opacity=80);
        filter: alpha(opacity=80)
    }

    #toast-container > :hover {
        -moz-box-shadow: 0 0 12px #000;
        -webkit-box-shadow: 0 0 12px #000;
        box-shadow: 0 0 12px #000;
        opacity: 1;
        -ms-filter: alpha(Opacity=100);
        filter: alpha(opacity=100);
        cursor: pointer
    }

    #toast-container > .toast-info {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important
    }

    #toast-container > .toast-error {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important
    }

    #toast-container > .toast-success {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important
    }

    #toast-container > .toast-warning {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important
    }

    #toast-container.toast-bottom-center > div, #toast-container.toast-top-center > div {
        width: 300px;
        margin: auto
    }

    #toast-container.toast-bottom-full-width > div, #toast-container.toast-top-full-width > div {
        width: 96%;
        margin: auto
    }

    .toast {
        background-color: #030303
    }

    .toast-success {
        background-color: #51a351
    }

    .toast-error {
        background-color: #bd362f
    }

    .toast-info {
        background-color: #2f96b4
    }

    .toast-warning {
        background-color: #f89406
    }

    .toast-progress {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        background-color: #000;
        opacity: .4;
        -ms-filter: alpha(Opacity=40);
        filter: alpha(opacity=40)
    }

    @media all and (max-width: 240px) {
        #toast-container > div {
            padding: 8px 8px 8px 50px;
            width: 11em
        }

        #toast-container .toast-close-button {
            right: -.2em;
            top: -.2em
        }
    }

    @media all and (min-width: 241px) and (max-width: 480px) {
        #toast-container > div {
            padding: 8px 8px 8px 50px;
            width: 18em
        }

        #toast-container .toast-close-button {
            right: -.2em;
            top: -.2em
        }
    }

    @media all and (min-width: 481px) and (max-width: 768px) {
        #toast-container > div {
            padding: 15px 15px 15px 50px;
            width: 25em
        }
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:before, #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:before, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:before, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        content: " ";
        display: table
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        clear: both
    }

    .ui-grid {
        border: 1px solid #d4d4d4;
        box-sizing: content-box;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -o-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0)
    }

    .ui-grid-vertical-bar {
        position: absolute;
        right: 0;
        width: 0
    }

    .ui-grid-header-cell:not(:last-child) .ui-grid-vertical-bar, .ui-grid-cell:not(:last-child) .ui-grid-vertical-bar {
        width: 1px
    }

    .ui-grid-scrollbar-placeholder {
        background-color: transparent
    }

    .ui-grid-header-cell:not(:last-child) .ui-grid-vertical-bar {
        background-color: #d4d4d4
    }

    .ui-grid-cell:not(:last-child) .ui-grid-vertical-bar {
        background-color: #d4d4d4
    }

    .ui-grid-header-cell:last-child .ui-grid-vertical-bar {
        right: -1px;
        width: 1px;
        background-color: #d4d4d4
    }

    .ui-grid-clearfix:before, .ui-grid-clearfix:after {
        content: "";
        display: table
    }

    .ui-grid-clearfix:after {
        clear: both
    }

    .ui-grid-invisible {
        visibility: hidden
    }

    .ui-grid-contents-wrapper {
        position: relative;
        height: 100%;
        width: 100%
    }

    .ui-grid-sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .ui-grid-top-panel-background {
        background: #f3f3f3;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(1, #fff));
        background: -ms-linear-gradient(bottom, #eee, #fff);
        background: -moz-linear-gradient(center bottom, #eee 0, #fff 100%);
        background: -o-linear-gradient(#fff, #eee);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0)
    }

    .ui-grid-header {
        border-bottom: 1px solid #d4d4d4;
        box-sizing: border-box
    }

    .ui-grid-top-panel {
        position: relative;
        overflow: hidden;
        font-weight: bold;
        background: #f3f3f3;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(1, #fff));
        background: -ms-linear-gradient(bottom, #eee, #fff);
        background: -moz-linear-gradient(center bottom, #eee 0, #fff 100%);
        background: -o-linear-gradient(#fff, #eee);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
        -webkit-border-top-right-radius: -1px;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: -1px;
        -moz-border-radius-topright: -1px;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: -1px;
        border-top-right-radius: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: -1px;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    .ui-grid-header-viewport {
        overflow: hidden
    }

    .ui-grid-header-canvas:before, .ui-grid-header-canvas:after {
        content: "";
        display: table;
        line-height: 0
    }

    .ui-grid-header-canvas:after {
        clear: both
    }

    .ui-grid-header-cell-wrapper {
        position: relative;
        display: table;
        box-sizing: border-box;
        height: 100%
    }

    .ui-grid-header-cell-row {
        display: table-row;
        position: relative
    }

    .ui-grid-header-cell {
        position: relative;
        box-sizing: border-box;
        background-color: inherit;
        border-right: 1px solid;
        border-color: #d4d4d4;
        display: table-cell;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        width: 0
    }

    .ui-grid-header-cell:last-child {
        border-right: 0
    }

    .ui-grid-header-cell .sortable {
        cursor: pointer
    }

    .ui-grid-header-cell .ui-grid-sort-priority-number {
        margin-left: -8px
    }

    .ui-grid-header .ui-grid-vertical-bar {
        top: 0;
        bottom: 0
    }

    .ui-grid-column-menu-button {
        position: absolute;
        right: 1px;
        top: 0
    }

    .ui-grid-column-menu-button .ui-grid-icon-angle-down {
        vertical-align: sub
    }

    .ui-grid-column-menu-button-last-col {
        margin-right: 25px
    }

    .ui-grid-column-menu {
        position: absolute
    }

    .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-add, .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove {
        -webkit-transition: all .05s linear;
        -moz-transition: all .05s linear;
        -o-transition: all .05s linear;
        transition: all .05s linear;
        display: block !important
    }

    .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-add.ng-hide-add-active, .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove {
        -webkit-transform: translateY(-100%);
        -moz-transform: translateY(-100%);
        -o-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%)
    }

    .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-add, .ui-grid-column-menu .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove.ng-hide-remove-active {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -o-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }

    .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-add, .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove {
        -webkit-transition: all .05s linear;
        -moz-transition: all .05s linear;
        -o-transition: all .05s linear;
        transition: all .05s linear;
        display: block !important
    }

    .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-add.ng-hide-add-active, .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove {
        -webkit-transform: translateY(-100%);
        -moz-transform: translateY(-100%);
        -o-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%)
    }

    .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-add, .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid.ng-hide-remove.ng-hide-remove-active {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -o-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }

    .ui-grid-filter-container {
        padding: 4px 10px;
        position: relative
    }

    .ui-grid-filter-container .ui-grid-filter-button {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0
    }

    .ui-grid-filter-container .ui-grid-filter-button [class^="ui-grid-icon"] {
        position: absolute;
        top: 50%;
        line-height: 32px;
        margin-top: -16px;
        right: 10px;
        opacity: .66
    }

    .ui-grid-filter-container .ui-grid-filter-button [class^="ui-grid-icon"]:hover {
        opacity: 1
    }

    .ui-grid-filter-container .ui-grid-filter-button-select {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0
    }

    .ui-grid-filter-container .ui-grid-filter-button-select [class^="ui-grid-icon"] {
        position: absolute;
        top: 50%;
        line-height: 32px;
        margin-top: -16px;
        right: 0;
        opacity: .66
    }

    .ui-grid-filter-container .ui-grid-filter-button-select [class^="ui-grid-icon"]:hover {
        opacity: 1
    }

    input[type="text"].ui-grid-filter-input {
        padding: 0;
        margin: 0;
        border: 0;
        width: 100%;
        border: 1px solid #d4d4d4;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    input[type="text"].ui-grid-filter-input:hover {
        border: 1px solid #d4d4d4
    }

    select.ui-grid-filter-select {
        padding: 0;
        margin: 0;
        border: 0;
        width: 90%;
        border: 1px solid #d4d4d4;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    select.ui-grid-filter-select:hover {
        border: 1px solid #d4d4d4
    }

    .ui-grid-filter-cancel-button-hidden select.ui-grid-filter-select {
        width: 100%
    }

    .ui-grid-render-container {
        position: inherit;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    .ui-grid-render-container:focus {
        outline: none
    }

    .ui-grid-viewport {
        min-height: 20px;
        position: relative;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch
    }

    .ui-grid-viewport:focus {
        outline: none !important
    }

    .ui-grid-canvas {
        position: relative;
        padding-top: 1px
    }

    .ui-grid-row:nth-child(odd) .ui-grid-cell {
        background-color: #fdfdfd
    }

    .ui-grid-row:nth-child(even) .ui-grid-cell {
        background-color: #f3f3f3
    }

    .ui-grid-row:last-child .ui-grid-cell {
        border-bottom-color: #d4d4d4;
        border-bottom-style: solid
    }

    .ui-grid-no-row-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 10%;
        background: #f3f3f3;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(1, #fff));
        background: -ms-linear-gradient(bottom, #eee, #fff);
        background: -moz-linear-gradient(center bottom, #eee 0, #fff 100%);
        background: -o-linear-gradient(#fff, #eee);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #d4d4d4;
        font-size: 2em;
        text-align: center
    }

    .ui-grid-no-row-overlay > * {
        position: absolute;
        display: table;
        margin: auto 0;
        width: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: .66
    }

    .ui-grid-cell {
        overflow: hidden;
        float: left;
        background-color: inherit;
        border-right: 1px solid;
        border-color: #d4d4d4;
        box-sizing: border-box
    }

    .ui-grid-cell:last-child {
        border-right: 0
    }

    .ui-grid-cell-contents {
        padding: 5px;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        height: 100%
    }

    .ui-grid-cell-contents-hidden {
        visibility: hidden;
        width: 0;
        height: 0;
        display: none
    }

    .ui-grid-row .ui-grid-cell.ui-grid-row-header-cell {
        background-color: #f0f0ee;
        border-bottom: solid 1px #d4d4d4
    }

    .ui-grid-footer-panel-background {
        background: #f3f3f3;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(1, #fff));
        background: -ms-linear-gradient(bottom, #eee, #fff);
        background: -moz-linear-gradient(center bottom, #eee 0, #fff 100%);
        background: -o-linear-gradient(#fff, #eee);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0)
    }

    .ui-grid-footer-panel {
        position: relative;
        border-bottom: 1px solid #d4d4d4;
        border-top: 1px solid #d4d4d4;
        overflow: hidden;
        font-weight: bold;
        background: #f3f3f3;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(1, #fff));
        background: -ms-linear-gradient(bottom, #eee, #fff);
        background: -moz-linear-gradient(center bottom, #eee 0, #fff 100%);
        background: -o-linear-gradient(#fff, #eee);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
        -webkit-border-top-right-radius: -1px;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: -1px;
        -moz-border-radius-topright: -1px;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: -1px;
        border-top-right-radius: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: -1px;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    .ui-grid-grid-footer {
        float: left;
        width: 100%
    }

    .ui-grid-footer-viewport {
        overflow: hidden
    }

    .ui-grid-footer-canvas {
        position: relative
    }

    .ui-grid-footer-canvas:before, .ui-grid-footer-canvas:after {
        content: "";
        display: table;
        line-height: 0
    }

    .ui-grid-footer-canvas:after {
        clear: both
    }

    .ui-grid-footer-cell-wrapper {
        position: relative;
        display: table;
        box-sizing: border-box;
        height: 100%
    }

    .ui-grid-footer-cell-row {
        display: table-row
    }

    .ui-grid-footer-cell {
        overflow: hidden;
        background-color: inherit;
        border-right: 1px solid;
        border-color: #d4d4d4;
        box-sizing: border-box;
        display: table-cell
    }

    .ui-grid-footer-cell:last-child {
        border-right: 0
    }

    input[type="text"].ui-grid-filter-input {
        padding: 0;
        margin: 0;
        border: 0;
        width: 100%;
        border: 1px solid #d4d4d4;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -webkit-border-bottom-left-radius: 0;
        -webkit-border-top-left-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        -moz-border-radius-bottomleft: 0;
        -moz-border-radius-topleft: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        -moz-background-clip: padding-box;
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    input[type="text"].ui-grid-filter-input:hover {
        border: 1px solid #d4d4d4
    }

    .ui-grid-menu-button {
        z-index: 2;
        position: absolute;
        right: 0;
        top: 0;
        background: #f3f3f3;
        border: 1px solid #d4d4d4;
        cursor: pointer;
        height: 31px;
        font-weight: normal
    }

    .ui-grid-menu-button .ui-grid-icon-container {
        margin-top: 3px
    }

    .ui-grid-menu-button .ui-grid-menu {
        right: 0
    }

    .ui-grid-menu-button .ui-grid-menu .ui-grid-menu-mid {
        overflow: scroll;
        border: 1px solid #d4d4d4
    }

    .ui-grid-menu {
        z-index: 2;
        position: absolute;
        padding: 0 10px 20px 10px;
        cursor: pointer;
        box-sizing: border-box
    }

    .ui-grid-menu .ui-grid-menu-inner {
        background: #f3f3f3;
        border: 1px solid #d4d4d4;
        position: relative;
        white-space: nowrap;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, .2), inset 0 12px 12px -14px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, .2), inset 0 12px 12px -14px rgba(0, 0, 0, .2);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .2), inset 0 12px 12px -14px rgba(0, 0, 0, .2)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button {
        position: absolute;
        right: 0;
        top: 0;
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding: 1px 1px;
        font-size: 10px;
        line-height: 1;
        border-radius: 2px;
        color: transparent;
        background-color: transparent;
        border-color: transparent
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active.focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active.focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:hover, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.focus {
        color: #333;
        text-decoration: none
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active {
        outline: 0;
        background-image: none;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.disabled, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button[disabled], fieldset[disabled] .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    a.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.disabled, fieldset[disabled] a.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button {
        pointer-events: none
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.focus {
        color: transparent;
        background-color: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:hover {
        color: transparent;
        background-color: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active, .open > .dropdown-toggle.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button {
        color: transparent;
        background-color: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active:hover, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active:hover, .open > .dropdown-toggle.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:hover, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active:focus, .open > .dropdown-toggle.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active.focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active.focus, .open > .dropdown-toggle.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.focus {
        color: transparent;
        background-color: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0)
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:active, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.active, .open > .dropdown-toggle.ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button {
        background-image: none
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.disabled:hover, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button[disabled]:hover, fieldset[disabled] .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:hover, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.disabled:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button[disabled]:focus, fieldset[disabled] .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button:focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.disabled.focus, .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button[disabled].focus, fieldset[disabled] .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button.focus {
        background-color: transparent;
        border-color: transparent
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button .badge {
        color: transparent;
        background-color: transparent
    }

    .ui-grid-menu .ui-grid-menu-inner .ui-grid-menu-close-button > i {
        opacity: .75;
        color: #000
    }

    .ui-grid-menu .ui-grid-menu-inner ul {
        margin: 0;
        padding: 0;
        list-style-type: none
    }

    .ui-grid-menu .ui-grid-menu-inner ul li {
        padding: 0
    }

    .ui-grid-menu .ui-grid-menu-inner ul li button {
        min-width: 100%;
        padding: 8px;
        text-align: left;
        background: transparent;
        border: none
    }

    .ui-grid-menu .ui-grid-menu-inner ul li button:hover, .ui-grid-menu .ui-grid-menu-inner ul li button:focus {
        -webkit-box-shadow: inset 0 0 14px rgba(0, 0, 0, .2);
        -moz-box-shadow: inset 0 0 14px rgba(0, 0, 0, .2);
        box-shadow: inset 0 0 14px rgba(0, 0, 0, .2)
    }

    .ui-grid-menu .ui-grid-menu-inner ul li button.ui-grid-menu-item-active {
        -webkit-box-shadow: inset 0 0 14px rgba(0, 0, 0, .2);
        -moz-box-shadow: inset 0 0 14px rgba(0, 0, 0, .2);
        box-shadow: inset 0 0 14px rgba(0, 0, 0, .2);
        background-color: #cecece
    }

    .ui-grid-menu .ui-grid-menu-inner ul li:not(:last-child) > button {
        border-bottom: 1px solid #d4d4d4
    }

    .ui-grid-sortarrow {
        right: 5px;
        position: absolute;
        width: 20px;
        top: 0;
        bottom: 0;
        background-position: center
    }

    .ui-grid-sortarrow.down {
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    @font-face {
        font-family: 'ui-grid';
        src: url(/libs/angular-ui-grid/ui-grid.eot);
        src: url(/libs/angular-ui-grid/ui-grid.eot#iefix) format('embedded-opentype'), url(/libs/angular-ui-grid/ui-grid.woff) format('woff'), url(/libs/angular-ui-grid/ui-grid.ttf) format('truetype'), url(/libs/angular-ui-grid/ui-grid.svg?#ui-grid) format('svg');
        font-weight: normal;
        font-style: normal
    }

    [class^="ui-grid-icon"]:before, [class*=" ui-grid-icon"]:before {
        font-family: "ui-grid";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        font-variant: normal;
        text-transform: none;
        line-height: 1em;
        margin-left: .2em
    }

    .ui-grid-icon-blank::before {
        width: 1em;
        content: ' '
    }

    .ui-grid[dir=rtl] .ui-grid-header-cell, .ui-grid[dir=rtl] .ui-grid-footer-cell, .ui-grid[dir=rtl] .ui-grid-cell {
        float: right !important
    }

    .ui-grid[dir=rtl] .ui-grid-column-menu-button {
        position: absolute;
        left: 1px;
        top: 0;
        right: inherit
    }

    .ui-grid[dir=rtl] .ui-grid-cell:first-child, .ui-grid[dir=rtl] .ui-grid-header-cell:first-child, .ui-grid[dir=rtl] .ui-grid-footer-cell:first-child {
        border-right: 0
    }

    .ui-grid[dir=rtl] .ui-grid-cell:last-child, .ui-grid[dir=rtl] .ui-grid-header-cell:last-child {
        border-right: 1px solid #d4d4d4;
        border-left: 0
    }

    .ui-grid[dir=rtl] .ui-grid-header-cell:first-child .ui-grid-vertical-bar, .ui-grid[dir=rtl] .ui-grid-footer-cell:first-child .ui-grid-vertical-bar, .ui-grid[dir=rtl] .ui-grid-cell:first-child .ui-grid-vertical-bar {
        width: 0
    }

    .ui-grid[dir=rtl] .ui-grid-menu-button {
        z-index: 2;
        position: absolute;
        left: 0;
        right: auto;
        background: #f3f3f3;
        border: 1px solid #d4d4d4;
        cursor: pointer;
        min-height: 27px;
        font-weight: normal
    }

    .ui-grid[dir=rtl] .ui-grid-menu-button .ui-grid-menu {
        left: 0;
        right: auto
    }

    .ui-grid[dir=rtl] .ui-grid-filter-container .ui-grid-filter-button {
        right: initial;
        left: 0
    }

    .ui-grid[dir=rtl] .ui-grid-filter-container .ui-grid-filter-button [class^="ui-grid-icon"] {
        right: initial;
        left: 10px
    }

    .ui-grid-animate-spin {
        -moz-animation: ui-grid-spin 2s infinite linear;
        -o-animation: ui-grid-spin 2s infinite linear;
        -webkit-animation: ui-grid-spin 2s infinite linear;
        animation: ui-grid-spin 2s infinite linear;
        display: inline-block
    }

    @-moz-keyframes ui-grid-spin {
        0% {
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @-webkit-keyframes ui-grid-spin {
        0% {
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @-o-keyframes ui-grid-spin {
        0% {
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @-ms-keyframes ui-grid-spin {
        0% {
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes ui-grid-spin {
        0% {
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }
        100% {
            -moz-transform: rotate(359deg);
            -o-transform: rotate(359deg);
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:before, #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:before, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:before, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        content: " ";
        display: table
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        clear: both
    }

    .ui-grid-cell-focus {
        outline: 0;
        background-color: #b3c4c7
    }

    .ui-grid-focuser {
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        width: 100%;
        height: 100%
    }

    .ui-grid-focuser:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .ui-grid-offscreen {
        display: block;
        position: absolute;
        left: -10000px;
        top: -10000px;
        clip: rect(0, 0, 0, 0)
    }

    div.ui-grid-cell input {
        border-radius: inherit;
        padding: 0;
        width: 100%;
        color: inherit;
        height: auto;
        font: inherit;
        outline: none
    }

    div.ui-grid-cell input:focus {
        color: inherit;
        outline: none
    }

    div.ui-grid-cell input[type="checkbox"] {
        margin: 9px 0 0 6px;
        width: auto
    }

    div.ui-grid-cell input.ng-invalid {
        border: 1px solid #fc8f8f
    }

    div.ui-grid-cell input.ng-valid {
        border: 1px solid #d4d4d4
    }

    .expandableRow .ui-grid-row:nth-child(odd) .ui-grid-cell {
        background-color: #fdfdfd
    }

    .expandableRow .ui-grid-row:nth-child(even) .ui-grid-cell {
        background-color: #f3f3f3
    }

    .ui-grid-cell.ui-grid-disable-selection.ui-grid-row-header-cell {
        pointer-events: none
    }

    .ui-grid-expandable-buttons-cell i {
        pointer-events: all
    }

    .scrollFiller {
        float: left;
        border: 1px solid #d4d4d4
    }

    .ui-grid-tree-header-row {
        font-weight: bold !important
    }

    .movingColumn {
        position: absolute;
        top: 0;
        border: 1px solid #d4d4d4;
        box-shadow: inset 0 0 14px rgba(0, 0, 0, .2)
    }

    .movingColumn .ui-grid-icon-angle-down {
        display: none
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:before, #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:before, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:before, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        content: " ";
        display: table
    }

    #ui-grid-twbs #ui-grid-twbs .form-horizontal .form-group:after, #ui-grid-twbs #ui-grid-twbs .btn-toolbar:after, #ui-grid-twbs #ui-grid-twbs .btn-group-vertical > .btn-group:after {
        clear: both
    }

    .ui-grid-pager-panel {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        padding-top: 3px;
        padding-bottom: 3px;
        box-sizing: content-box
    }

    .ui-grid-pager-container {
        float: left
    }

    .ui-grid-pager-control {
        margin-right: 10px;
        margin-left: 10px;
        min-width: 135px;
        float: left
    }

    .ui-grid-pager-control button {
        height: 25px;
        min-width: 26px;
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #eee;
        background-color: #f3f3f3;
        border-color: #ccc
    }

    .ui-grid-pager-control button:focus, .ui-grid-pager-control button:active:focus, .ui-grid-pager-control button.active:focus, .ui-grid-pager-control button.focus, .ui-grid-pager-control button:active.focus, .ui-grid-pager-control button.active.focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    .ui-grid-pager-control button:hover, .ui-grid-pager-control button:focus, .ui-grid-pager-control button.focus {
        color: #333;
        text-decoration: none
    }

    .ui-grid-pager-control button:active, .ui-grid-pager-control button.active {
        outline: 0;
        background-image: none;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .ui-grid-pager-control button.disabled, .ui-grid-pager-control button[disabled], fieldset[disabled] .ui-grid-pager-control button {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    a.ui-grid-pager-control button.disabled, fieldset[disabled] a.ui-grid-pager-control button {
        pointer-events: none
    }

    .ui-grid-pager-control button:focus, .ui-grid-pager-control button.focus {
        color: #eee;
        background-color: #dadada;
        border-color: #8c8c8c
    }

    .ui-grid-pager-control button:hover {
        color: #eee;
        background-color: #dadada;
        border-color: #adadad
    }

    .ui-grid-pager-control button:active, .ui-grid-pager-control button.active, .open > .dropdown-toggle.ui-grid-pager-control button {
        color: #eee;
        background-color: #dadada;
        border-color: #adadad
    }

    .ui-grid-pager-control button:active:hover, .ui-grid-pager-control button.active:hover, .open > .dropdown-toggle.ui-grid-pager-control button:hover, .ui-grid-pager-control button:active:focus, .ui-grid-pager-control button.active:focus, .open > .dropdown-toggle.ui-grid-pager-control button:focus, .ui-grid-pager-control button:active.focus, .ui-grid-pager-control button.active.focus, .open > .dropdown-toggle.ui-grid-pager-control button.focus {
        color: #eee;
        background-color: #c8c8c8;
        border-color: #8c8c8c
    }

    .ui-grid-pager-control button:active, .ui-grid-pager-control button.active, .open > .dropdown-toggle.ui-grid-pager-control button {
        background-image: none
    }

    .ui-grid-pager-control button.disabled:hover, .ui-grid-pager-control button[disabled]:hover, fieldset[disabled] .ui-grid-pager-control button:hover, .ui-grid-pager-control button.disabled:focus, .ui-grid-pager-control button[disabled]:focus, fieldset[disabled] .ui-grid-pager-control button:focus, .ui-grid-pager-control button.disabled.focus, .ui-grid-pager-control button[disabled].focus, fieldset[disabled] .ui-grid-pager-control button.focus {
        background-color: #f3f3f3;
        border-color: #ccc
    }

    .ui-grid-pager-control button .badge {
        color: #f3f3f3;
        background-color: #eee
    }

    .ui-grid-pager-control input {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
        display: inline;
        height: 26px;
        width: 50px;
        vertical-align: top
    }

    .ui-grid-pager-control input:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .ui-grid-pager-control input::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .ui-grid-pager-control input:-ms-input-placeholder {
        color: #999
    }

    .ui-grid-pager-control input::-webkit-input-placeholder {
        color: #999
    }

    .ui-grid-pager-control input::-ms-expand {
        border: 0;
        background-color: transparent
    }

    .ui-grid-pager-control input[disabled], .ui-grid-pager-control input[readonly], fieldset[disabled] .ui-grid-pager-control input {
        background-color: #eee;
        opacity: 1
    }

    .ui-grid-pager-control input[disabled], fieldset[disabled] .ui-grid-pager-control input {
        cursor: not-allowed
    }

    textarea.ui-grid-pager-control input {
        height: auto
    }

    select.ui-grid-pager-control input {
        height: 30px;
        line-height: 30px
    }

    textarea.ui-grid-pager-control input, select[multiple].ui-grid-pager-control input {
        height: auto
    }

    .ui-grid-pager-control .ui-grid-pager-max-pages-number {
        vertical-align: bottom
    }

    .ui-grid-pager-control .ui-grid-pager-max-pages-number > * {
        vertical-align: middle
    }

    .ui-grid-pager-control .first-bar {
        width: 10px;
        border-left: 2px solid #4d4d4d;
        margin-top: -6px;
        height: 12px;
        margin-left: -3px
    }

    .ui-grid-pager-control .first-bar-rtl {
        width: 10px;
        border-left: 2px solid #4d4d4d;
        margin-top: -6px;
        height: 12px;
        margin-right: -7px
    }

    .ui-grid-pager-control .first-triangle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 8.7px 5px 0;
        border-color: transparent #4d4d4d transparent transparent;
        margin-left: 2px
    }

    .ui-grid-pager-control .next-triangle {
        margin-left: 1px
    }

    .ui-grid-pager-control .prev-triangle {
        margin-left: 0
    }

    .ui-grid-pager-control .last-triangle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 5px 0 5px 8.7px;
        border-color: transparent transparent transparent #4d4d4d;
        margin-left: -1px
    }

    .ui-grid-pager-control .last-bar {
        width: 10px;
        border-left: 2px solid #4d4d4d;
        margin-top: -6px;
        height: 12px;
        margin-left: 1px
    }

    .ui-grid-pager-control .last-bar-rtl {
        width: 10px;
        border-left: 2px solid #4d4d4d;
        margin-top: -6px;
        height: 12px;
        margin-right: -11px
    }

    .ui-grid-pager-row-count-picker {
        float: left
    }

    .ui-grid-pager-row-count-picker select {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
        height: 26px;
        width: 67px;
        display: inline
    }

    .ui-grid-pager-row-count-picker select:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .ui-grid-pager-row-count-picker select::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .ui-grid-pager-row-count-picker select:-ms-input-placeholder {
        color: #999
    }

    .ui-grid-pager-row-count-picker select::-webkit-input-placeholder {
        color: #999
    }

    .ui-grid-pager-row-count-picker select::-ms-expand {
        border: 0;
        background-color: transparent
    }

    .ui-grid-pager-row-count-picker select[disabled], .ui-grid-pager-row-count-picker select[readonly], fieldset[disabled] .ui-grid-pager-row-count-picker select {
        background-color: #eee;
        opacity: 1
    }

    .ui-grid-pager-row-count-picker select[disabled], fieldset[disabled] .ui-grid-pager-row-count-picker select {
        cursor: not-allowed
    }

    textarea.ui-grid-pager-row-count-picker select {
        height: auto
    }

    select.ui-grid-pager-row-count-picker select {
        height: 30px;
        line-height: 30px
    }

    textarea.ui-grid-pager-row-count-picker select, select[multiple].ui-grid-pager-row-count-picker select {
        height: auto
    }

    .ui-grid-pager-row-count-picker .ui-grid-pager-row-count-label {
        margin-top: 3px
    }

    .ui-grid-pager-count-container {
        float: right;
        margin-top: 4px;
        min-width: 50px
    }

    .ui-grid-pager-count-container .ui-grid-pager-count {
        margin-right: 10px;
        margin-left: 10px;
        float: right
    }

    .ui-grid-pinned-container {
        position: absolute;
        display: inline;
        top: 0
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left {
        float: left;
        left: 0
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right {
        float: right;
        right: 0
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-header-cell:last-child {
        box-sizing: border-box;
        border-right: 1px solid;
        border-width: 1px;
        border-right-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-cell:last-child {
        box-sizing: border-box;
        border-right: 1px solid;
        border-width: 1px;
        border-right-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-header-cell:not(:last-child) .ui-grid-vertical-bar, .ui-grid-pinned-container .ui-grid-cell:not(:last-child) .ui-grid-vertical-bar {
        width: 1px
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-header-cell:not(:last-child) .ui-grid-vertical-bar {
        background-color: #d4d4d4
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-cell:not(:last-child) .ui-grid-vertical-bar {
        background-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-left .ui-grid-header-cell:last-child .ui-grid-vertical-bar {
        right: -1px;
        width: 1px;
        background-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right .ui-grid-header-cell:first-child {
        box-sizing: border-box;
        border-left: 1px solid;
        border-width: 1px;
        border-left-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right .ui-grid-cell:first-child {
        box-sizing: border-box;
        border-left: 1px solid;
        border-width: 1px;
        border-left-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right .ui-grid-header-cell:not(:first-child) .ui-grid-vertical-bar, .ui-grid-pinned-container .ui-grid-cell:not(:first-child) .ui-grid-vertical-bar {
        width: 1px
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right .ui-grid-header-cell:not(:first-child) .ui-grid-vertical-bar {
        background-color: #d4d4d4
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-right .ui-grid-cell:not(:last-child) .ui-grid-vertical-bar {
        background-color: #aeaeae
    }

    .ui-grid-pinned-container.ui-grid-pinned-container-first .ui-grid-header-cell:first-child .ui-grid-vertical-bar {
        left: -1px;
        width: 1px;
        background-color: #aeaeae
    }

    .ui-grid-column-resizer {
        top: 0;
        bottom: 0;
        width: 5px;
        position: absolute;
        cursor: col-resize
    }

    .ui-grid-column-resizer.left {
        left: 0
    }

    .ui-grid-column-resizer.right {
        right: 0
    }

    .ui-grid-header-cell:last-child .ui-grid-column-resizer.right {
        border-right: 1px solid #d4d4d4
    }

    .ui-grid[dir=rtl] .ui-grid-header-cell:last-child .ui-grid-column-resizer.right {
        border-right: 0
    }

    .ui-grid[dir=rtl] .ui-grid-header-cell:last-child .ui-grid-column-resizer.left {
        border-left: 1px solid #d4d4d4
    }

    .ui-grid.column-resizing {
        cursor: col-resize
    }

    .ui-grid.column-resizing .ui-grid-resize-overlay {
        position: absolute;
        top: 0;
        height: 100%;
        width: 1px;
        background-color: #aeaeae
    }

    .ui-grid-row-saving .ui-grid-cell {
        color: #848484 !important
    }

    .ui-grid-row-dirty .ui-grid-cell {
        color: #610b38
    }

    .ui-grid-row-error .ui-grid-cell {
        color: red !important
    }

    .ui-grid-row.ui-grid-row-selected > [ui-grid-row] > .ui-grid-cell {
        background-color: #c9dde1
    }

    .ui-grid-disable-selection {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default
    }

    .ui-grid-selection-row-header-buttons {
        cursor: pointer;
        opacity: .1
    }

    .ui-grid-selection-row-header-buttons.ui-grid-row-selected {
        opacity: 1
    }

    .ui-grid-selection-row-header-buttons.ui-grid-all-selected {
        opacity: 1
    }

    .ui-grid-tree-row-header-buttons.ui-grid-tree-header {
        cursor: pointer;
        opacity: 1
    }

    .ui-grid-tree-header-row {
        font-weight: bold !important
    }

    .ui-grid-tree-header-row .ui-grid-cell.ui-grid-disable-selection.ui-grid-row-header-cell {
        pointer-events: all
    }

    div.ui-grid-cell-contents.invalid {
        border: 1px solid #fc8f8f
    }

    .ui-grid-icon-plus-squared:before {
        content: '썐'
    }

    .ui-grid-icon-minus-squared:before {
        content: '썑'
    }

    .ui-grid-icon-search:before {
        content: '썒'
    }

    .ui-grid-icon-cancel:before {
        content: '썓'
    }

    .ui-grid-icon-info-circled:before {
        content: '썔'
    }

    .ui-grid-icon-lock:before {
        content: '썕'
    }

    .ui-grid-icon-lock-open:before {
        content: '썖'
    }

    .ui-grid-icon-pencil:before {
        content: '썗'
    }

    .ui-grid-icon-down-dir:before {
        content: '썘'
    }

    .ui-grid-icon-up-dir:before {
        content: '썙'
    }

    .ui-grid-icon-left-dir:before {
        content: '썚'
    }

    .ui-grid-icon-right-dir:before {
        content: '썛'
    }

    .ui-grid-icon-left-open:before {
        content: '썜'
    }

    .ui-grid-icon-right-open:before {
        content: '썝'
    }

    .ui-grid-icon-angle-down:before {
        content: '썞'
    }

    .ui-grid-icon-filter:before {
        content: '썟'
    }

    .ui-grid-icon-sort-alt-up:before {
        content: '썠'
    }

    .ui-grid-icon-sort-alt-down:before {
        content: '썡'
    }

    .ui-grid-icon-ok:before {
        content: '썢'
    }

    .ui-grid-icon-menu:before {
        content: '썣'
    }

    .ui-grid-icon-indent-left:before {
        content: ''
    }

    .ui-grid-icon-indent-right:before {
        content: ''
    }

    .ui-grid-icon-spin5:before {
        content: ''
    }

    .daterangepicker {
        position: absolute;
        background: #fff;
        top: 100px;
        left: 20px;
        padding: 4px;
        margin-top: 1px;
        border-radius: 4px
    }

    .daterangepicker.opensleft:before {
        position: absolute;
        top: -7px;
        right: 9px;
        display: inline-block;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #ccc;
        border-left: 7px solid transparent;
        border-bottom-color: rgba(0, 0, 0, .2);
        content: ''
    }

    .daterangepicker.opensleft:after {
        position: absolute;
        top: -6px;
        right: 10px;
        display: inline-block;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent;
        content: ''
    }

    .daterangepicker.openscenter:before {
        position: absolute;
        top: -7px;
        left: 0;
        right: 0;
        width: 0;
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #ccc;
        border-left: 7px solid transparent;
        border-bottom-color: rgba(0, 0, 0, .2);
        content: ''
    }

    .daterangepicker.openscenter:after {
        position: absolute;
        top: -6px;
        left: 0;
        right: 0;
        width: 0;
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent;
        content: ''
    }

    .daterangepicker.opensright:before {
        position: absolute;
        top: -7px;
        left: 9px;
        display: inline-block;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #ccc;
        border-left: 7px solid transparent;
        border-bottom-color: rgba(0, 0, 0, .2);
        content: ''
    }

    .daterangepicker.opensright:after {
        position: absolute;
        top: -6px;
        left: 10px;
        display: inline-block;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent;
        content: ''
    }

    .daterangepicker.dropup {
        margin-top: -5px
    }

    .daterangepicker.dropup:before {
        top: initial;
        bottom: -7px;
        border-bottom: initial;
        border-top: 7px solid #ccc
    }

    .daterangepicker.dropup:after {
        top: initial;
        bottom: -6px;
        border-bottom: initial;
        border-top: 6px solid #fff
    }

    .daterangepicker.dropdown-menu {
        max-width: none;
        z-index: 3000
    }

    .daterangepicker .ranges, .daterangepicker .calendar {
        float: left
    }

    .daterangepicker.single .ranges, .daterangepicker.single .calendar {
        float: none
    }

    .daterangepicker .ranges {
        margin: 4px;
        text-align: left
    }

    .daterangepicker .calendar {
        display: none;
        max-width: 270px
    }

    .daterangepicker.show-calendar .calendar {
        display: block
    }

    .daterangepicker .calendar.single .calendar-table {
        border: none
    }

    .daterangepicker .calendar th, .daterangepicker .calendar td {
        white-space: nowrap;
        text-align: center;
        min-width: 32px
    }

    .daterangepicker .calendar-table {
        border: 1px solid #ddd;
        padding: 4px;
        border-radius: 4px;
        background: #fff
    }

    .daterangepicker .calendar.left .calendar-table {
        border-right: none;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .daterangepicker .calendar.right .calendar-table {
        border-left: none;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .daterangepicker .calendar.left {
        margin: 4px 0 4px 4px
    }

    .daterangepicker .calendar.right {
        margin: 4px 4px 4px 0
    }

    .daterangepicker .calendar.left .calendar-table {
        padding-right: 12px
    }

    .daterangepicker table {
        width: 100%;
        margin: 0
    }

    .daterangepicker td, .daterangepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        border-radius: 4px;
        white-space: nowrap;
        cursor: pointer
    }

    .daterangepicker td.off, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date, .daterangepicker td.off.end-date {
        color: #999;
        background: #fff
    }

    .daterangepicker td.disabled, .daterangepicker option.disabled {
        color: #999
    }

    .daterangepicker td.available:hover, .daterangepicker th.available:hover {
        background: #eee
    }

    .daterangepicker td.in-range {
        background: #ebf4f8;
        border-radius: 0
    }

    .daterangepicker td.start-date {
        border-radius: 4px 0 0 4px
    }

    .daterangepicker td.end-date {
        border-radius: 0 4px 4px 0
    }

    .daterangepicker td.start-date.end-date {
        border-radius: 4px
    }

    .daterangepicker td.active, .daterangepicker td.active:hover {
        background-color: #357ebd;
        border-color: #3071a9;
        color: #fff
    }

    .daterangepicker td.week, .daterangepicker th.week {
        font-size: 80%;
        color: #ccc
    }

    .daterangepicker select.monthselect, .daterangepicker select.yearselect {
        font-size: 12px;
        padding: 1px;
        height: auto;
        margin: 0;
        cursor: default
    }

    .daterangepicker select.monthselect {
        margin-right: 2%;
        width: 56%
    }

    .daterangepicker select.yearselect {
        width: 40%
    }

    .daterangepicker select.hourselect, .daterangepicker select.minuteselect, .daterangepicker select.secondselect, .daterangepicker select.ampmselect {
        width: 50px;
        margin-bottom: 0
    }

    .daterangepicker th.month {
        width: auto
    }

    .daterangepicker .input-mini {
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #555;
        display: block;
        height: 30px;
        line-height: 30px;
        vertical-align: middle;
        margin: 0 0 5px 0;
        padding: 0 6px 0 28px;
        width: 100%
    }

    .daterangepicker .input-mini.active {
        border: 1px solid #357ebd
    }

    .daterangepicker .daterangepicker_input i {
        position: absolute;
        left: 8px;
        top: 8px
    }

    .daterangepicker .left .daterangepicker_input {
        padding-right: 12px
    }

    .daterangepicker .daterangepicker_input {
        position: relative
    }

    .daterangepicker .calendar-time {
        text-align: center;
        margin: 5px auto;
        line-height: 30px;
        position: relative;
        padding-left: 28px
    }

    .daterangepicker .calendar-time select.disabled {
        color: #ccc;
        cursor: not-allowed
    }

    .daterangepicker .ranges {
        font-size: 11px
    }

    .daterangepicker .ranges ul {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 160px
    }

    .daterangepicker .ranges li {
        font-size: 13px;
        background: #f5f5f5;
        border: 1px solid #f5f5f5;
        color: #08c;
        padding: 3px 12px;
        margin-bottom: 8px;
        border-radius: 5px;
        cursor: pointer
    }

    .daterangepicker .ranges li.active, .daterangepicker .ranges li:hover {
        background: #08c;
        border: 1px solid #08c;
        color: #fff
    }

    .datepicker-dropdown:after, .datepicker-dropdown:before {
        content: '';
        display: inline-block;
        border-top: 0;
        position: absolute
    }

    .datepicker {
        padding: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        direction: ltr
    }

    .datepicker-inline {
        width: 220px
    }

    .datepicker.datepicker-rtl {
        direction: rtl
    }

    .datepicker.datepicker-rtl table tr td span {
        float: right
    }

    .datepicker-dropdown {
        top: 0;
        left: 0
    }

    .datepicker-dropdown:before {
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #999;
        border-bottom-color: rgba(0, 0, 0, .2)
    }

    .datepicker-dropdown:after {
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff
    }

    .datepicker-dropdown.datepicker-orient-left:before {
        left: 6px
    }

    .datepicker-dropdown.datepicker-orient-left:after {
        left: 7px
    }

    .datepicker-dropdown.datepicker-orient-right:before {
        right: 6px
    }

    .datepicker-dropdown.datepicker-orient-right:after {
        right: 7px
    }

    .datepicker-dropdown.datepicker-orient-bottom:before {
        top: -7px
    }

    .datepicker-dropdown.datepicker-orient-bottom:after {
        top: -6px
    }

    .datepicker-dropdown.datepicker-orient-top:before {
        bottom: -7px;
        border-bottom: 0;
        border-top: 7px solid #999
    }

    .datepicker-dropdown.datepicker-orient-top:after {
        bottom: -6px;
        border-bottom: 0;
        border-top: 6px solid #fff
    }

    .datepicker > div {
        display: none
    }

    .datepicker table {
        margin: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .datepicker td, .datepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border: none
    }

    .table-striped .datepicker table tr td, .table-striped .datepicker table tr th {
        background-color: transparent
    }

    .datepicker table tr td.day.focused, .datepicker table tr td.day:hover {
        background: #eee;
        cursor: pointer
    }

    .datepicker table tr td.new, .datepicker table tr td.old {
        color: #999
    }

    .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
        background: 0 0;
        color: #999;
        cursor: default
    }

    .datepicker table tr td.highlighted {
        background: #d9edf7;
        border-radius: 0
    }

    .datepicker table tr td.today, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today:hover {
        background-color: #fde19a;
        background-image: -moz-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -ms-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
        background-image: -webkit-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -o-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-repeat: repeat-x;
        border-color: #fdf59a #fdf59a #fbed50;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #000
    }

    .datepicker table tr td.today.active, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled.active, .datepicker table tr td.today.disabled.disabled, .datepicker table tr td.today.disabled:active, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today.disabled:hover.active, .datepicker table tr td.today.disabled:hover.disabled, .datepicker table tr td.today.disabled:hover:active, .datepicker table tr td.today.disabled:hover:hover, .datepicker table tr td.today.disabled:hover[disabled], .datepicker table tr td.today.disabled[disabled], .datepicker table tr td.today:active, .datepicker table tr td.today:hover, .datepicker table tr td.today:hover.active, .datepicker table tr td.today:hover.disabled, .datepicker table tr td.today:hover:active, .datepicker table tr td.today:hover:hover, .datepicker table tr td.today:hover[disabled], .datepicker table tr td.today[disabled] {
        background-color: #fdf59a
    }

    .datepicker table tr td.today.active, .datepicker table tr td.today.disabled.active, .datepicker table tr td.today.disabled:active, .datepicker table tr td.today.disabled:hover.active, .datepicker table tr td.today.disabled:hover:active, .datepicker table tr td.today:active, .datepicker table tr td.today:hover.active, .datepicker table tr td.today:hover:active {
        background-color: #fbf069 \9
    }

    .datepicker table tr td.today:hover:hover {
        color: #000
    }

    .datepicker table tr td.today.active:hover {
        color: #fff
    }

    .datepicker table tr td.range, .datepicker table tr td.range.disabled, .datepicker table tr td.range.disabled:hover, .datepicker table tr td.range:hover {
        background: #eee;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0
    }

    .datepicker table tr td.range.today, .datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today.disabled:hover, .datepicker table tr td.range.today:hover {
        background-color: #f3d17a;
        background-image: -moz-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -ms-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3c17a), to(#f3e97a));
        background-image: -webkit-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -o-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-repeat: repeat-x;
        border-color: #f3e97a #f3e97a #edde34;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0
    }

    .datepicker table tr td.range.today.active, .datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today.disabled.active, .datepicker table tr td.range.today.disabled.disabled, .datepicker table tr td.range.today.disabled:active, .datepicker table tr td.range.today.disabled:hover, .datepicker table tr td.range.today.disabled:hover.active, .datepicker table tr td.range.today.disabled:hover.disabled, .datepicker table tr td.range.today.disabled:hover:active, .datepicker table tr td.range.today.disabled:hover:hover, .datepicker table tr td.range.today.disabled:hover[disabled], .datepicker table tr td.range.today.disabled[disabled], .datepicker table tr td.range.today:active, .datepicker table tr td.range.today:hover, .datepicker table tr td.range.today:hover.active, .datepicker table tr td.range.today:hover.disabled, .datepicker table tr td.range.today:hover:active, .datepicker table tr td.range.today:hover:hover, .datepicker table tr td.range.today:hover[disabled], .datepicker table tr td.range.today[disabled] {
        background-color: #f3e97a
    }

    .datepicker table tr td.range.today.active, .datepicker table tr td.range.today.disabled.active, .datepicker table tr td.range.today.disabled:active, .datepicker table tr td.range.today.disabled:hover.active, .datepicker table tr td.range.today.disabled:hover:active, .datepicker table tr td.range.today:active, .datepicker table tr td.range.today:hover.active, .datepicker table tr td.range.today:hover:active {
        background-color: #efe24b \9
    }

    .datepicker table tr td.selected, .datepicker table tr td.selected.disabled, .datepicker table tr td.selected.disabled:hover, .datepicker table tr td.selected:hover {
        background-color: #9e9e9e;
        background-image: -moz-linear-gradient(to bottom, #b3b3b3, grey);
        background-image: -ms-linear-gradient(to bottom, #b3b3b3, grey);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#b3b3b3), to(grey));
        background-image: -webkit-linear-gradient(to bottom, #b3b3b3, grey);
        background-image: -o-linear-gradient(to bottom, #b3b3b3, grey);
        background-image: linear-gradient(to bottom, #b3b3b3, grey);
        background-repeat: repeat-x;
        border-color: grey grey #595959;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .datepicker table tr td.selected.active, .datepicker table tr td.selected.disabled, .datepicker table tr td.selected.disabled.active, .datepicker table tr td.selected.disabled.disabled, .datepicker table tr td.selected.disabled:active, .datepicker table tr td.selected.disabled:hover, .datepicker table tr td.selected.disabled:hover.active, .datepicker table tr td.selected.disabled:hover.disabled, .datepicker table tr td.selected.disabled:hover:active, .datepicker table tr td.selected.disabled:hover:hover, .datepicker table tr td.selected.disabled:hover[disabled], .datepicker table tr td.selected.disabled[disabled], .datepicker table tr td.selected:active, .datepicker table tr td.selected:hover, .datepicker table tr td.selected:hover.active, .datepicker table tr td.selected:hover.disabled, .datepicker table tr td.selected:hover:active, .datepicker table tr td.selected:hover:hover, .datepicker table tr td.selected:hover[disabled], .datepicker table tr td.selected[disabled] {
        background-color: grey
    }

    .datepicker table tr td.selected.active, .datepicker table tr td.selected.disabled.active, .datepicker table tr td.selected.disabled:active, .datepicker table tr td.selected.disabled:hover.active, .datepicker table tr td.selected.disabled:hover:active, .datepicker table tr td.selected:active, .datepicker table tr td.selected:hover.active, .datepicker table tr td.selected:hover:active {
        background-color: #666 \9
    }

    .datepicker table tr td.active, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #08c, #04c);
        background-image: -ms-linear-gradient(to bottom, #08c, #04c);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#08c), to(#04c));
        background-image: -webkit-linear-gradient(to bottom, #08c, #04c);
        background-image: -o-linear-gradient(to bottom, #08c, #04c);
        background-image: linear-gradient(to bottom, #08c, #04c);
        background-repeat: repeat-x;
        border-color: #04c #04c #002a80;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .datepicker table tr td.active.active, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled.disabled, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover.active, .datepicker table tr td.active.disabled:hover.disabled, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active.disabled:hover[disabled], .datepicker table tr td.active.disabled[disabled], .datepicker table tr td.active:active, .datepicker table tr td.active:hover, .datepicker table tr td.active:hover.active, .datepicker table tr td.active:hover.disabled, .datepicker table tr td.active:hover:active, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active:hover[disabled], .datepicker table tr td.active[disabled] {
        background-color: #04c
    }

    .datepicker table tr td.active.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover.active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active:active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active:hover:active {
        background-color: #039 \9
    }

    .datepicker table tr td span {
        display: block;
        width: 23%;
        height: 54px;
        line-height: 54px;
        float: left;
        margin: 1%;
        cursor: pointer;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px
    }

    .datepicker table tr td span:hover {
        background: #eee
    }

    .datepicker table tr td span.disabled, .datepicker table tr td span.disabled:hover {
        background: 0 0;
        color: #999;
        cursor: default
    }

    .datepicker .datepicker-switch, .datepicker .next, .datepicker .prev, .datepicker tfoot tr th, .input-append.date .add-on, .input-prepend.date .add-on {
        cursor: pointer
    }

    .datepicker table tr td span.active, .datepicker table tr td span.active.disabled, .datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #08c, #04c);
        background-image: -ms-linear-gradient(to bottom, #08c, #04c);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#08c), to(#04c));
        background-image: -webkit-linear-gradient(to bottom, #08c, #04c);
        background-image: -o-linear-gradient(to bottom, #08c, #04c);
        background-image: linear-gradient(to bottom, #08c, #04c);
        background-repeat: repeat-x;
        border-color: #04c #04c #002a80;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .datepicker table tr td span.active.active, .datepicker table tr td span.active.disabled, .datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled.disabled, .datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active.disabled:hover.active, .datepicker table tr td span.active.disabled:hover.disabled, .datepicker table tr td span.active.disabled:hover:active, .datepicker table tr td span.active.disabled:hover:hover, .datepicker table tr td span.active.disabled:hover[disabled], .datepicker table tr td span.active.disabled[disabled], .datepicker table tr td span.active:active, .datepicker table tr td span.active:hover, .datepicker table tr td span.active:hover.active, .datepicker table tr td span.active:hover.disabled, .datepicker table tr td span.active:hover:active, .datepicker table tr td span.active:hover:hover, .datepicker table tr td span.active:hover[disabled], .datepicker table tr td span.active[disabled] {
        background-color: #04c
    }

    .datepicker table tr td span.active.active, .datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover.active, .datepicker table tr td span.active.disabled:hover:active, .datepicker table tr td span.active:active, .datepicker table tr td span.active:hover.active, .datepicker table tr td span.active:hover:active {
        background-color: #039 \9
    }

    .datepicker table tr td span.new, .datepicker table tr td span.old {
        color: #999
    }

    .datepicker .datepicker-switch {
        width: 145px
    }

    .datepicker .datepicker-switch:hover, .datepicker .next:hover, .datepicker .prev:hover, .datepicker tfoot tr th:hover {
        background: #eee
    }

    .datepicker .cw {
        font-size: 10px;
        width: 12px;
        padding: 0 2px 0 5px;
        vertical-align: middle
    }

    .input-append.date .add-on i, .input-prepend.date .add-on i {
        margin-top: 3px
    }

    .input-daterange input {
        text-align: center
    }

    .input-daterange input:first-child {
        -webkit-border-radius: 3px 0 0 3px;
        -moz-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px
    }

    .input-daterange input:last-child {
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0
    }

    .input-daterange .add-on {
        display: inline-block;
        width: auto;
        min-width: 16px;
        height: 18px;
        padding: 4px 5px;
        font-weight: 400;
        line-height: 18px;
        text-align: center;
        text-shadow: 0 1px 0 #fff;
        vertical-align: middle;
        background-color: #eee;
        border: 1px solid #ccc;
        margin-left: -5px;
        margin-right: -5px
    }

    .datetimepicker {
        padding: 4px;
        margin-top: 1px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        direction: ltr
    }

    .datetimepicker-inline {
        width: 220px
    }

    .datetimepicker.datetimepicker-rtl {
        direction: rtl
    }

    .datetimepicker.datetimepicker-rtl table tr td span {
        float: right
    }

    .datetimepicker-dropdown, .datetimepicker-dropdown-left {
        top: 0;
        left: 0
    }

    [class*=" datetimepicker-dropdown"]:before {
        content: '';
        display: inline-block;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #ccc;
        border-bottom-color: rgba(0, 0, 0, .2);
        position: absolute
    }

    [class*=" datetimepicker-dropdown"]:after {
        content: '';
        display: inline-block;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        position: absolute
    }

    [class*=" datetimepicker-dropdown-top"]:before {
        content: '';
        display: inline-block;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 7px solid #ccc;
        border-top-color: rgba(0, 0, 0, .2);
        border-bottom: 0
    }

    [class*=" datetimepicker-dropdown-top"]:after {
        content: '';
        display: inline-block;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #fff;
        border-bottom: 0
    }

    .datetimepicker-dropdown-bottom-left:before {
        top: -7px;
        right: 6px
    }

    .datetimepicker-dropdown-bottom-left:after {
        top: -6px;
        right: 7px
    }

    .datetimepicker-dropdown-bottom-right:before {
        top: -7px;
        left: 6px
    }

    .datetimepicker-dropdown-bottom-right:after {
        top: -6px;
        left: 7px
    }

    .datetimepicker-dropdown-top-left:before {
        bottom: -7px;
        right: 6px
    }

    .datetimepicker-dropdown-top-left:after {
        bottom: -6px;
        right: 7px
    }

    .datetimepicker-dropdown-top-right:before {
        bottom: -7px;
        left: 6px
    }

    .datetimepicker-dropdown-top-right:after {
        bottom: -6px;
        left: 7px
    }

    .datetimepicker > div {
        display: none
    }

    .datetimepicker.days div.datetimepicker-days, .datetimepicker.hours div.datetimepicker-hours, .datetimepicker.minutes div.datetimepicker-minutes, .datetimepicker.months div.datetimepicker-months, .datetimepicker.years div.datetimepicker-years {
        display: block
    }

    .datetimepicker table {
        margin: 0
    }

    .datetimepicker td, .datetimepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border: none
    }

    .table-striped .datetimepicker table tr td, .table-striped .datetimepicker table tr th {
        background-color: transparent
    }

    .datetimepicker table tr td.day:hover, .datetimepicker table tr td.hour:hover, .datetimepicker table tr td.minute:hover {
        background: #eee;
        cursor: pointer
    }

    .datetimepicker table tr td.new, .datetimepicker table tr td.old {
        color: #999
    }

    .datetimepicker table tr td.disabled, .datetimepicker table tr td.disabled:hover {
        background: 0 0;
        color: #999;
        cursor: default
    }

    .datetimepicker table tr td.today, .datetimepicker table tr td.today.disabled, .datetimepicker table tr td.today.disabled:hover, .datetimepicker table tr td.today:hover {
        background-color: #fde19a;
        background-image: -moz-linear-gradient(top, #fdd49a, #fdf59a);
        background-image: -ms-linear-gradient(top, #fdd49a, #fdf59a);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
        background-image: -webkit-linear-gradient(top, #fdd49a, #fdf59a);
        background-image: -o-linear-gradient(top, #fdd49a, #fdf59a);
        background-image: linear-gradient(top, #fdd49a, #fdf59a);
        background-repeat: repeat-x;
        border-color: #fdf59a #fdf59a #fbed50;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
    }

    .datetimepicker table tr td.today.active, .datetimepicker table tr td.today.disabled, .datetimepicker table tr td.today.disabled.active, .datetimepicker table tr td.today.disabled.disabled, .datetimepicker table tr td.today.disabled:active, .datetimepicker table tr td.today.disabled:hover, .datetimepicker table tr td.today.disabled:hover.active, .datetimepicker table tr td.today.disabled:hover.disabled, .datetimepicker table tr td.today.disabled:hover:active, .datetimepicker table tr td.today.disabled:hover:hover, .datetimepicker table tr td.today.disabled:hover[disabled], .datetimepicker table tr td.today.disabled[disabled], .datetimepicker table tr td.today:active, .datetimepicker table tr td.today:hover, .datetimepicker table tr td.today:hover.active, .datetimepicker table tr td.today:hover.disabled, .datetimepicker table tr td.today:hover:active, .datetimepicker table tr td.today:hover:hover, .datetimepicker table tr td.today:hover[disabled], .datetimepicker table tr td.today[disabled] {
        background-color: #fdf59a
    }

    .datetimepicker table tr td.active, .datetimepicker table tr td.active.disabled, .datetimepicker table tr td.active.disabled:hover, .datetimepicker table tr td.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(top, #08c, #04c);
        background-image: -ms-linear-gradient(top, #08c, #04c);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#08c), to(#04c));
        background-image: -webkit-linear-gradient(top, #08c, #04c);
        background-image: -o-linear-gradient(top, #08c, #04c);
        background-image: linear-gradient(top, #08c, #04c);
        background-repeat: repeat-x;
        border-color: #04c #04c #002a80;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .datetimepicker table tr td.active.active, .datetimepicker table tr td.active.disabled, .datetimepicker table tr td.active.disabled.active, .datetimepicker table tr td.active.disabled.disabled, .datetimepicker table tr td.active.disabled:active, .datetimepicker table tr td.active.disabled:hover, .datetimepicker table tr td.active.disabled:hover.active, .datetimepicker table tr td.active.disabled:hover.disabled, .datetimepicker table tr td.active.disabled:hover:active, .datetimepicker table tr td.active.disabled:hover:hover, .datetimepicker table tr td.active.disabled:hover[disabled], .datetimepicker table tr td.active.disabled[disabled], .datetimepicker table tr td.active:active, .datetimepicker table tr td.active:hover, .datetimepicker table tr td.active:hover.active, .datetimepicker table tr td.active:hover.disabled, .datetimepicker table tr td.active:hover:active, .datetimepicker table tr td.active:hover:hover, .datetimepicker table tr td.active:hover[disabled], .datetimepicker table tr td.active[disabled] {
        background-color: #04c
    }

    .datetimepicker table tr td span {
        display: block;
        width: 23%;
        height: 54px;
        line-height: 54px;
        float: left;
        margin: 1%;
        cursor: pointer;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px
    }

    .datetimepicker .datetimepicker-hours span {
        height: 26px;
        line-height: 26px
    }

    .datetimepicker .datetimepicker-hours table tr td span.hour_am, .datetimepicker .datetimepicker-hours table tr td span.hour_pm {
        width: 14.6%
    }

    .datetimepicker .datetimepicker-hours fieldset legend, .datetimepicker .datetimepicker-minutes fieldset legend {
        margin-bottom: inherit;
        line-height: 30px
    }

    .datetimepicker .datetimepicker-minutes span {
        height: 26px;
        line-height: 26px
    }

    .datetimepicker table tr td span:hover {
        background: #eee
    }

    .datetimepicker table tr td span.disabled, .datetimepicker table tr td span.disabled:hover {
        background: 0 0;
        color: #999;
        cursor: default
    }

    .datetimepicker table tr td span.active, .datetimepicker table tr td span.active.disabled, .datetimepicker table tr td span.active.disabled:hover, .datetimepicker table tr td span.active:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(top, #08c, #04c);
        background-image: -ms-linear-gradient(top, #08c, #04c);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#08c), to(#04c));
        background-image: -webkit-linear-gradient(top, #08c, #04c);
        background-image: -o-linear-gradient(top, #08c, #04c);
        background-image: linear-gradient(top, #08c, #04c);
        background-repeat: repeat-x;
        border-color: #04c #04c #002a80;
        border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .datetimepicker table tr td span.active.active, .datetimepicker table tr td span.active.disabled, .datetimepicker table tr td span.active.disabled.active, .datetimepicker table tr td span.active.disabled.disabled, .datetimepicker table tr td span.active.disabled:active, .datetimepicker table tr td span.active.disabled:hover, .datetimepicker table tr td span.active.disabled:hover.active, .datetimepicker table tr td span.active.disabled:hover.disabled, .datetimepicker table tr td span.active.disabled:hover:active, .datetimepicker table tr td span.active.disabled:hover:hover, .datetimepicker table tr td span.active.disabled:hover[disabled], .datetimepicker table tr td span.active.disabled[disabled], .datetimepicker table tr td span.active:active, .datetimepicker table tr td span.active:hover, .datetimepicker table tr td span.active:hover.active, .datetimepicker table tr td span.active:hover.disabled, .datetimepicker table tr td span.active:hover:active, .datetimepicker table tr td span.active:hover:hover, .datetimepicker table tr td span.active:hover[disabled], .datetimepicker table tr td span.active[disabled] {
        background-color: #04c
    }

    .datetimepicker table tr td span.old {
        color: #999
    }

    .datetimepicker th.switch {
        width: 145px
    }

    .datetimepicker tfoot tr:first-child th, .datetimepicker thead tr:first-child th {
        cursor: pointer
    }

    .datetimepicker tfoot tr:first-child th:hover, .datetimepicker thead tr:first-child th:hover {
        background: #eee
    }

    .input-append.date .add-on i, .input-prepend.date .add-on i {
        cursor: pointer;
        width: 14px;
        height: 14px
    }

    .minicolors {
        position: relative
    }

    .minicolors-sprite {
        background-image: url(data:image/png;base64,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)
    }

    .minicolors-no-data-uris .minicolors-sprite {
        background-image: url(jquery.minicolors.png)
    }

    .minicolors-swatch {
        position: absolute;
        vertical-align: middle;
        background-position: -80px 0;
        border: solid 1px #ccc;
        cursor: text;
        padding: 0;
        margin: 0;
        display: inline-block
    }

    .minicolors-swatch-color {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    .minicolors input[type=hidden] + .minicolors-swatch {
        width: 28px;
        position: static;
        cursor: pointer
    }

    .minicolors input[type=hidden][disabled] + .minicolors-swatch {
        cursor: default
    }

    .minicolors-panel {
        position: absolute;
        width: 173px;
        height: 152px;
        background: #fff;
        border: solid 1px #ccc;
        box-shadow: 0 0 20px rgba(0, 0, 0, .2);
        z-index: 99999;
        box-sizing: content-box;
        display: none
    }

    .minicolors-panel.minicolors-with-swatches {
        height: 182px
    }

    .minicolors-panel.minicolors-visible {
        display: block
    }

    .minicolors-position-top .minicolors-panel {
        top: -154px
    }

    .minicolors-position-right .minicolors-panel {
        right: 0
    }

    .minicolors-position-bottom .minicolors-panel {
        top: auto
    }

    .minicolors-position-left .minicolors-panel {
        left: 0
    }

    .minicolors-with-opacity .minicolors-panel {
        width: 194px
    }

    .minicolors .minicolors-grid {
        position: absolute;
        top: 1px;
        left: 1px;
        width: 150px;
        height: 150px;
        background-position: -120px 0;
        cursor: crosshair
    }

    .minicolors .minicolors-grid-inner {
        position: absolute;
        top: 0;
        left: 0;
        width: 150px;
        height: 150px
    }

    .minicolors-slider-saturation .minicolors-grid {
        background-position: -420px 0
    }

    .minicolors-slider-saturation .minicolors-grid-inner {
        background-position: -270px 0;
        background-image: inherit
    }

    .minicolors-slider-brightness .minicolors-grid {
        background-position: -570px 0
    }

    .minicolors-slider-brightness .minicolors-grid-inner {
        background-color: #000
    }

    .minicolors-slider-wheel .minicolors-grid {
        background-position: -720px 0
    }

    .minicolors-slider, .minicolors-opacity-slider {
        position: absolute;
        top: 1px;
        left: 152px;
        width: 20px;
        height: 150px;
        background-color: #fff;
        background-position: 0 0;
        cursor: row-resize
    }

    .minicolors-slider-saturation .minicolors-slider {
        background-position: -60px 0
    }

    .minicolors-slider-brightness .minicolors-slider {
        background-position: -20px 0
    }

    .minicolors-slider-wheel .minicolors-slider {
        background-position: -20px 0
    }

    .minicolors-opacity-slider {
        left: 173px;
        background-position: -40px 0;
        display: none
    }

    .minicolors-with-opacity .minicolors-opacity-slider {
        display: block
    }

    .minicolors-grid .minicolors-picker {
        position: absolute;
        top: 70px;
        left: 70px;
        width: 12px;
        height: 12px;
        border: solid 1px #000;
        border-radius: 10px;
        margin-top: -6px;
        margin-left: -6px;
        background: none
    }

    .minicolors-grid .minicolors-picker > div {
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 8px;
        border-radius: 8px;
        border: solid 2px #fff;
        box-sizing: content-box
    }

    .minicolors-picker {
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 2px;
        background: #fff;
        border: solid 1px #000;
        margin-top: -2px;
        box-sizing: content-box
    }

    .minicolors-swatches, .minicolors-swatches li {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
        position: absolute;
        top: 157px;
        left: 5px
    }

    .minicolors-swatches .minicolors-swatch {
        position: relative;
        float: left;
        cursor: pointer;
        margin: 0 4px 0 0
    }

    .minicolors-with-opacity .minicolors-swatches .minicolors-swatch {
        margin-right: 7px
    }

    .minicolors-swatch.selected {
        border-color: #000
    }

    .minicolors-inline {
        display: inline-block
    }

    .minicolors-inline .minicolors-input {
        display: none !important
    }

    .minicolors-inline .minicolors-panel {
        position: relative;
        top: auto;
        left: auto;
        box-shadow: none;
        z-index: auto;
        display: inline-block
    }

    .minicolors-theme-default .minicolors-swatch {
        top: 5px;
        left: 5px;
        width: 18px;
        height: 18px
    }

    .minicolors-theme-default .minicolors-swatches .minicolors-swatch {
        top: 0;
        left: 0;
        width: 18px;
        height: 18px
    }

    .minicolors-theme-default .minicolors-swatches {
        height: 20px
    }

    .minicolors-theme-default.minicolors-position-right .minicolors-swatch {
        left: auto;
        right: 5px
    }

    .minicolors-theme-default.minicolors {
        width: auto;
        display: inline-block
    }

    .minicolors-theme-default .minicolors-input {
        height: 20px;
        width: auto;
        display: inline-block;
        padding-left: 26px
    }

    .minicolors-theme-default.minicolors-position-right .minicolors-input {
        padding-right: 26px;
        padding-left: inherit
    }

    .minicolors-theme-bootstrap .minicolors-swatch {
        z-index: 2;
        top: 3px;
        left: 3px;
        width: 28px;
        height: 28px;
        border-radius: 3px
    }

    .minicolors-theme-bootstrap .minicolors-swatches .minicolors-swatch {
        top: 0;
        left: 0;
        width: 20px;
        height: 20px
    }

    .minicolors-theme-bootstrap .minicolors-swatch-color {
        border-radius: inherit
    }

    .minicolors-theme-bootstrap.minicolors-position-right > .minicolors-swatch {
        left: auto;
        right: 3px
    }

    .minicolors-theme-bootstrap .minicolors-input {
        float: none;
        padding-left: 44px
    }

    .minicolors-theme-bootstrap.minicolors-position-right .minicolors-input {
        padding-right: 44px;
        padding-left: 12px
    }

    .minicolors-theme-bootstrap .minicolors-input.input-lg + .minicolors-swatch {
        top: 4px;
        left: 4px;
        width: 37px;
        height: 37px;
        border-radius: 5px
    }

    .minicolors-theme-bootstrap .minicolors-input.input-sm + .minicolors-swatch {
        width: 24px;
        height: 24px
    }

    .minicolors-theme-bootstrap .minicolors-input.input-xs + .minicolors-swatch {
        width: 18px;
        height: 18px
    }

    .input-group .minicolors-theme-bootstrap:not(:first-child) .minicolors-input {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .minicolors-theme-semanticui .minicolors-swatch {
        top: 0;
        left: 0;
        padding: 18px
    }

    .minicolors-theme-semanticui input {
        text-indent: 30px
    }

    .btn-file {
        position: relative;
        overflow: hidden;
        vertical-align: middle
    }

    .btn-file > input {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        font-size: 23px;
        cursor: pointer;
        filter: alpha(opacity=0);
        opacity: 0;
        direction: ltr
    }

    .fileinput {
        display: inline-block;
        margin-bottom: 9px
    }

    .fileinput .form-control {
        display: inline-block;
        padding-top: 7px;
        padding-bottom: 5px;
        margin-bottom: 0;
        vertical-align: middle;
        cursor: text
    }

    .fileinput .thumbnail {
        display: inline-block;
        margin-bottom: 5px;
        overflow: hidden;
        text-align: center;
        vertical-align: middle
    }

    .fileinput .thumbnail > img {
        max-height: 100%
    }

    .fileinput .btn {
        vertical-align: middle
    }

    .fileinput-exists .fileinput-new, .fileinput-new .fileinput-exists {
        display: none
    }

    .fileinput-inline .fileinput-controls {
        display: inline
    }

    .fileinput-filename {
        display: inline-block;
        overflow: hidden;
        vertical-align: middle
    }

    .form-control .fileinput-filename {
        vertical-align: bottom
    }

    .fileinput.input-group {
        display: table
    }

    .fileinput.input-group > * {
        position: relative;
        z-index: 2
    }

    .fileinput.input-group > .btn-file {
        z-index: 1
    }

    .fileinput-new.input-group .btn-file, .fileinput-new .input-group .btn-file {
        border-radius: 0 4px 4px 0
    }

    .fileinput-new.input-group .btn-file.btn-xs, .fileinput-new .input-group .btn-file.btn-xs, .fileinput-new.input-group .btn-file.btn-sm, .fileinput-new .input-group .btn-file.btn-sm {
        border-radius: 0 3px 3px 0
    }

    .fileinput-new.input-group .btn-file.btn-lg, .fileinput-new .input-group .btn-file.btn-lg {
        border-radius: 0 6px 6px 0
    }

    .form-group.has-warning .fileinput .fileinput-preview {
        color: #8a6d3b
    }

    .form-group.has-warning .fileinput .thumbnail {
        border-color: #faebcc
    }

    .form-group.has-error .fileinput .fileinput-preview {
        color: #a94442
    }

    .form-group.has-error .fileinput .thumbnail {
        border-color: #ebccd1
    }

    .form-group.has-success .fileinput .fileinput-preview {
        color: #3c763d
    }

    .form-group.has-success .fileinput .thumbnail {
        border-color: #d6e9c6
    }

    .input-group-addon:not(:first-child) {
        border-left: 0
    }

    table.dataTable {
        width: 100%;
        margin: 0 auto;
        clear: both;
        border-collapse: separate;
        border-spacing: 0
    }

    table.dataTable thead th, table.dataTable tfoot th {
        font-weight: bold
    }

    table.dataTable thead th, table.dataTable thead td {
        padding: 10px 18px;
        border-bottom: 1px solid #111
    }

    table.dataTable thead th:active, table.dataTable thead td:active {
        outline: none
    }

    table.dataTable tfoot th, table.dataTable tfoot td {
        padding: 10px 18px 6px 18px;
        border-top: 1px solid #111
    }

    table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc {
        cursor: pointer;
        *cursor: hand
    }

    table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
        background-repeat: no-repeat;
        background-position: center right
    }

    table.dataTable thead .sorting {
        background-image: url("DataTables-1.10.12/images/sort_both.png")
    }

    table.dataTable thead .sorting_asc {
        background-image: url("DataTables-1.10.12/images/sort_asc.png")
    }

    table.dataTable thead .sorting_desc {
        background-image: url("DataTables-1.10.12/images/sort_desc.png")
    }

    table.dataTable thead .sorting_asc_disabled {
        background-image: url("DataTables-1.10.12/images/sort_asc_disabled.png")
    }

    table.dataTable thead .sorting_desc_disabled {
        background-image: url("DataTables-1.10.12/images/sort_desc_disabled.png")
    }

    table.dataTable tbody tr {
        background-color: #fff
    }

    table.dataTable tbody tr.selected {
        background-color: #b0bed9
    }

    table.dataTable tbody th, table.dataTable tbody td {
        padding: 8px 10px
    }

    table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
        border-top: 1px solid #ddd
    }

    table.dataTable.row-border tbody tr:first-child th, table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th, table.dataTable.display tbody tr:first-child td {
        border-top: none
    }

    table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td {
        border-top: 1px solid #ddd;
        border-right: 1px solid #ddd
    }

    table.dataTable.cell-border tbody tr th:first-child, table.dataTable.cell-border tbody tr td:first-child {
        border-left: 1px solid #ddd
    }

    table.dataTable.cell-border tbody tr:first-child th, table.dataTable.cell-border tbody tr:first-child td {
        border-top: none
    }

    table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {
        background-color: #f9f9f9
    }

    table.dataTable.stripe tbody tr.odd.selected, table.dataTable.display tbody tr.odd.selected {
        background-color: #acbad4
    }

    table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
        background-color: #f6f6f6
    }

    table.dataTable.hover tbody tr:hover.selected, table.dataTable.display tbody tr:hover.selected {
        background-color: #aab7d1
    }

    table.dataTable.order-column tbody tr > .sorting_1, table.dataTable.order-column tbody tr > .sorting_2, table.dataTable.order-column tbody tr > .sorting_3, table.dataTable.display tbody tr > .sorting_1, table.dataTable.display tbody tr > .sorting_2, table.dataTable.display tbody tr > .sorting_3 {
        background-color: #fafafa
    }

    table.dataTable.order-column tbody tr.selected > .sorting_1, table.dataTable.order-column tbody tr.selected > .sorting_2, table.dataTable.order-column tbody tr.selected > .sorting_3, table.dataTable.display tbody tr.selected > .sorting_1, table.dataTable.display tbody tr.selected > .sorting_2, table.dataTable.display tbody tr.selected > .sorting_3 {
        background-color: #acbad5
    }

    table.dataTable.display tbody tr.odd > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {
        background-color: #f1f1f1
    }

    table.dataTable.display tbody tr.odd > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd > .sorting_2 {
        background-color: #f3f3f3
    }

    table.dataTable.display tbody tr.odd > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd > .sorting_3 {
        background-color: #f5f5f5
    }

    table.dataTable.display tbody tr.odd.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_1 {
        background-color: #a6b4cd
    }

    table.dataTable.display tbody tr.odd.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_2 {
        background-color: #a8b5cf
    }

    table.dataTable.display tbody tr.odd.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_3 {
        background-color: #a9b7d1
    }

    table.dataTable.display tbody tr.even > .sorting_1, table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {
        background-color: #fafafa
    }

    table.dataTable.display tbody tr.even > .sorting_2, table.dataTable.order-column.stripe tbody tr.even > .sorting_2 {
        background-color: #fcfcfc
    }

    table.dataTable.display tbody tr.even > .sorting_3, table.dataTable.order-column.stripe tbody tr.even > .sorting_3 {
        background-color: #fefefe
    }

    table.dataTable.display tbody tr.even.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_1 {
        background-color: #acbad5
    }

    table.dataTable.display tbody tr.even.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_2 {
        background-color: #aebcd6
    }

    table.dataTable.display tbody tr.even.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_3 {
        background-color: #afbdd8
    }

    table.dataTable.display tbody tr:hover > .sorting_1, table.dataTable.order-column.hover tbody tr:hover > .sorting_1 {
        background-color: #eaeaea
    }

    table.dataTable.display tbody tr:hover > .sorting_2, table.dataTable.order-column.hover tbody tr:hover > .sorting_2 {
        background-color: #ececec
    }

    table.dataTable.display tbody tr:hover > .sorting_3, table.dataTable.order-column.hover tbody tr:hover > .sorting_3 {
        background-color: #efefef
    }

    table.dataTable.display tbody tr:hover.selected > .sorting_1, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_1 {
        background-color: #a2aec7
    }

    table.dataTable.display tbody tr:hover.selected > .sorting_2, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_2 {
        background-color: #a3b0c9
    }

    table.dataTable.display tbody tr:hover.selected > .sorting_3, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_3 {
        background-color: #a5b2cb
    }

    table.dataTable.no-footer {
        border-bottom: 1px solid #111
    }

    table.dataTable.nowrap th, table.dataTable.nowrap td {
        white-space: nowrap
    }

    table.dataTable.compact thead th, table.dataTable.compact thead td {
        padding: 4px 17px 4px 4px
    }

    table.dataTable.compact tfoot th, table.dataTable.compact tfoot td {
        padding: 4px
    }

    table.dataTable.compact tbody th, table.dataTable.compact tbody td {
        padding: 4px
    }

    table.dataTable th.dt-left, table.dataTable td.dt-left {
        text-align: left
    }

    table.dataTable th.dt-center, table.dataTable td.dt-center, table.dataTable td.dataTables_empty {
        text-align: center
    }

    table.dataTable th.dt-right, table.dataTable td.dt-right {
        text-align: right
    }

    table.dataTable th.dt-justify, table.dataTable td.dt-justify {
        text-align: justify
    }

    table.dataTable th.dt-nowrap, table.dataTable td.dt-nowrap {
        white-space: nowrap
    }

    table.dataTable thead th.dt-head-left, table.dataTable thead td.dt-head-left, table.dataTable tfoot th.dt-head-left, table.dataTable tfoot td.dt-head-left {
        text-align: left
    }

    table.dataTable thead th.dt-head-center, table.dataTable thead td.dt-head-center, table.dataTable tfoot th.dt-head-center, table.dataTable tfoot td.dt-head-center {
        text-align: center
    }

    table.dataTable thead th.dt-head-right, table.dataTable thead td.dt-head-right, table.dataTable tfoot th.dt-head-right, table.dataTable tfoot td.dt-head-right {
        text-align: right
    }

    table.dataTable thead th.dt-head-justify, table.dataTable thead td.dt-head-justify, table.dataTable tfoot th.dt-head-justify, table.dataTable tfoot td.dt-head-justify {
        text-align: justify
    }

    table.dataTable thead th.dt-head-nowrap, table.dataTable thead td.dt-head-nowrap, table.dataTable tfoot th.dt-head-nowrap, table.dataTable tfoot td.dt-head-nowrap {
        white-space: nowrap
    }

    table.dataTable tbody th.dt-body-left, table.dataTable tbody td.dt-body-left {
        text-align: left
    }

    table.dataTable tbody th.dt-body-center, table.dataTable tbody td.dt-body-center {
        text-align: center
    }

    table.dataTable tbody th.dt-body-right, table.dataTable tbody td.dt-body-right {
        text-align: right
    }

    table.dataTable tbody th.dt-body-justify, table.dataTable tbody td.dt-body-justify {
        text-align: justify
    }

    table.dataTable tbody th.dt-body-nowrap, table.dataTable tbody td.dt-body-nowrap {
        white-space: nowrap
    }

    table.dataTable, table.dataTable th, table.dataTable td {
        -webkit-box-sizing: content-box;
        box-sizing: content-box
    }

    .dataTables_wrapper {
        position: relative;
        clear: both;
        *zoom: 1;
        zoom: 1
    }

    .dataTables_wrapper .dataTables_length {
        float: left
    }

    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: right
    }

    .dataTables_wrapper .dataTables_filter input {
        margin-left: .5em
    }

    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: .755em
    }

    .dataTables_wrapper .dataTables_paginate {
        float: right;
        text-align: right;
        padding-top: .25em
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: .5em 1em;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        *cursor: hand;
        color: #333 !important;
        border: 1px solid transparent;
        border-radius: 2px
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #333 !important;
        border: 1px solid #979797;
        background-color: #fff;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
        background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
        background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
        background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
        background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
        background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%)
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        cursor: default;
        color: #666 !important;
        border: 1px solid transparent;
        background: transparent;
        box-shadow: none
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        border: 1px solid #111;
        background-color: #585858;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));
        background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
        background: -moz-linear-gradient(top, #585858 0%, #111 100%);
        background: -ms-linear-gradient(top, #585858 0%, #111 100%);
        background: -o-linear-gradient(top, #585858 0%, #111 100%);
        background: linear-gradient(to bottom, #585858 0%, #111 100%)
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        outline: none;
        background-color: #2b2b2b;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
        background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
        background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
        box-shadow: inset 0 0 3px #111
    }

    .dataTables_wrapper .dataTables_paginate .ellipsis {
        padding: 0 1em
    }

    .dataTables_wrapper .dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 40px;
        margin-left: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        background-color: #fff;
        background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, .9)), color-stop(75%, rgba(255, 255, 255, .9)), color-stop(100%, rgba(255, 255, 255, 0)));
        background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 25%, rgba(255, 255, 255, .9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 25%, rgba(255, 255, 255, .9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 25%, rgba(255, 255, 255, .9) 75%, rgba(255, 255, 255, 0) 100%);
        background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 25%, rgba(255, 255, 255, .9) 75%, rgba(255, 255, 255, 0) 100%);
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 25%, rgba(255, 255, 255, .9) 75%, rgba(255, 255, 255, 0) 100%)
    }

    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
        color: #333
    }

    .dataTables_wrapper .dataTables_scroll {
        clear: both
    }

    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
        *margin-top: -1px;
        -webkit-overflow-scrolling: touch
    }

    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody td {
        vertical-align: middle
    }

    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody th > div.dataTables_sizing, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody td > div.dataTables_sizing {
        height: 0;
        overflow: hidden;
        margin: 0 !important;
        padding: 0 !important
    }

    .dataTables_wrapper.no-footer .dataTables_scrollBody {
        border-bottom: 1px solid #111
    }

    .dataTables_wrapper.no-footer div.dataTables_scrollHead table, .dataTables_wrapper.no-footer div.dataTables_scrollBody table {
        border-bottom: none
    }

    .dataTables_wrapper:after {
        visibility: hidden;
        display: block;
        content: "";
        clear: both;
        height: 0
    }

    @media screen and (max-width: 767px) {
        .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_paginate {
            float: none;
            text-align: center
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-top: .5em
        }
    }

    @media screen and (max-width: 640px) {
        .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: center
        }

        .dataTables_wrapper .dataTables_filter {
            margin-top: .5em
        }
    }

    div.dt-button-info {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 400px;
        margin-top: -100px;
        margin-left: -200px;
        background-color: #fff;
        border: 2px solid #111;
        box-shadow: 3px 3px 8px rgba(0, 0, 0, .3);
        border-radius: 3px;
        text-align: center;
        z-index: 21
    }

    div.dt-button-info h2 {
        padding: .5em;
        margin: 0;
        font-weight: normal;
        border-bottom: 1px solid #ddd;
        background-color: #f3f3f3
    }

    div.dt-button-info > div {
        padding: 1em
    }

    button.dt-button, div.dt-button, a.dt-button {
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        margin-right: .333em;
        padding: .5em 1em;
        border: 1px solid #999;
        border-radius: 2px;
        cursor: pointer;
        font-size: .88em;
        color: #000;
        white-space: nowrap;
        overflow: hidden;
        background-color: #e9e9e9;
        background-image: -webkit-linear-gradient(top, #fff 0%, #e9e9e9 100%);
        background-image: -moz-linear-gradient(top, #fff 0%, #e9e9e9 100%);
        background-image: -ms-linear-gradient(top, #fff 0%, #e9e9e9 100%);
        background-image: -o-linear-gradient(top, #fff 0%, #e9e9e9 100%);
        background-image: linear-gradient(to bottom, #fff 0%, #e9e9e9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='white', EndColorStr='#e9e9e9');
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-decoration: none;
        outline: none
    }

    button.dt-button.disabled, div.dt-button.disabled, a.dt-button.disabled {
        color: #999;
        border: 1px solid #d0d0d0;
        cursor: default;
        background-color: #f9f9f9;
        background-image: -webkit-linear-gradient(top, #fff 0%, #f9f9f9 100%);
        background-image: -moz-linear-gradient(top, #fff 0%, #f9f9f9 100%);
        background-image: -ms-linear-gradient(top, #fff 0%, #f9f9f9 100%);
        background-image: -o-linear-gradient(top, #fff 0%, #f9f9f9 100%);
        background-image: linear-gradient(to bottom, #fff 0%, #f9f9f9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#ffffff', EndColorStr='#f9f9f9')
    }

    button.dt-button:active:not(.disabled), button.dt-button.active:not(.disabled), div.dt-button:active:not(.disabled), div.dt-button.active:not(.disabled), a.dt-button:active:not(.disabled), a.dt-button.active:not(.disabled) {
        background-color: #e2e2e2;
        background-image: -webkit-linear-gradient(top, #f3f3f3 0%, #e2e2e2 100%);
        background-image: -moz-linear-gradient(top, #f3f3f3 0%, #e2e2e2 100%);
        background-image: -ms-linear-gradient(top, #f3f3f3 0%, #e2e2e2 100%);
        background-image: -o-linear-gradient(top, #f3f3f3 0%, #e2e2e2 100%);
        background-image: linear-gradient(to bottom, #f3f3f3 0%, #e2e2e2 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#f3f3f3', EndColorStr='#e2e2e2');
        box-shadow: inset 1px 1px 3px #999
    }

    button.dt-button:active:not(.disabled):hover:not(.disabled), button.dt-button.active:not(.disabled):hover:not(.disabled), div.dt-button:active:not(.disabled):hover:not(.disabled), div.dt-button.active:not(.disabled):hover:not(.disabled), a.dt-button:active:not(.disabled):hover:not(.disabled), a.dt-button.active:not(.disabled):hover:not(.disabled) {
        box-shadow: inset 1px 1px 3px #999;
        background-color: #ccc;
        background-image: -webkit-linear-gradient(top, #eaeaea 0%, #ccc 100%);
        background-image: -moz-linear-gradient(top, #eaeaea 0%, #ccc 100%);
        background-image: -ms-linear-gradient(top, #eaeaea 0%, #ccc 100%);
        background-image: -o-linear-gradient(top, #eaeaea 0%, #ccc 100%);
        background-image: linear-gradient(to bottom, #eaeaea 0%, #ccc 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#eaeaea', EndColorStr='#cccccc')
    }

    button.dt-button:hover, div.dt-button:hover, a.dt-button:hover {
        text-decoration: none
    }

    button.dt-button:hover:not(.disabled), div.dt-button:hover:not(.disabled), a.dt-button:hover:not(.disabled) {
        border: 1px solid #666;
        background-color: #e0e0e0;
        background-image: -webkit-linear-gradient(top, #f9f9f9 0%, #e0e0e0 100%);
        background-image: -moz-linear-gradient(top, #f9f9f9 0%, #e0e0e0 100%);
        background-image: -ms-linear-gradient(top, #f9f9f9 0%, #e0e0e0 100%);
        background-image: -o-linear-gradient(top, #f9f9f9 0%, #e0e0e0 100%);
        background-image: linear-gradient(to bottom, #f9f9f9 0%, #e0e0e0 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#f9f9f9', EndColorStr='#e0e0e0')
    }

    button.dt-button:focus:not(.disabled), div.dt-button:focus:not(.disabled), a.dt-button:focus:not(.disabled) {
        border: 1px solid #426c9e;
        text-shadow: 0 1px 0 #c4def1;
        outline: none;
        background-color: #79ace9;
        background-image: -webkit-linear-gradient(top, #bddef4 0%, #79ace9 100%);
        background-image: -moz-linear-gradient(top, #bddef4 0%, #79ace9 100%);
        background-image: -ms-linear-gradient(top, #bddef4 0%, #79ace9 100%);
        background-image: -o-linear-gradient(top, #bddef4 0%, #79ace9 100%);
        background-image: linear-gradient(to bottom, #bddef4 0%, #79ace9 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#bddef4', EndColorStr='#79ace9')
    }

    .dt-button embed {
        outline: none
    }

    div.dt-buttons {
        position: relative;
        float: left
    }

    div.dt-buttons.buttons-right {
        float: right
    }

    div.dt-button-collection {
        position: absolute;
        top: 0;
        left: 0;
        width: 150px;
        margin-top: 3px;
        padding: 8px 8px 4px 8px;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .4);
        background-color: #fff;
        overflow: hidden;
        z-index: 2002;
        border-radius: 5px;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, .3);
        z-index: 2002;
        -webkit-column-gap: 8px;
        -moz-column-gap: 8px;
        -ms-column-gap: 8px;
        -o-column-gap: 8px;
        column-gap: 8px
    }

    div.dt-button-collection button.dt-button, div.dt-button-collection div.dt-button, div.dt-button-collection a.dt-button {
        position: relative;
        left: 0;
        right: 0;
        display: block;
        float: none;
        margin-bottom: 4px;
        margin-right: 0
    }

    div.dt-button-collection button.dt-button:active:not(.disabled), div.dt-button-collection button.dt-button.active:not(.disabled), div.dt-button-collection div.dt-button:active:not(.disabled), div.dt-button-collection div.dt-button.active:not(.disabled), div.dt-button-collection a.dt-button:active:not(.disabled), div.dt-button-collection a.dt-button.active:not(.disabled) {
        background-color: #dadada;
        background-image: -webkit-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
        background-image: -moz-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
        background-image: -ms-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
        background-image: -o-linear-gradient(top, #f0f0f0 0%, #dadada 100%);
        background-image: linear-gradient(to bottom, #f0f0f0 0%, #dadada 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr='#f0f0f0', EndColorStr='#dadada');
        box-shadow: inset 1px 1px 3px #666
    }

    div.dt-button-collection.fixed {
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -75px;
        border-radius: 0
    }

    div.dt-button-collection.fixed.two-column {
        margin-left: -150px
    }

    div.dt-button-collection.fixed.three-column {
        margin-left: -225px
    }

    div.dt-button-collection.fixed.four-column {
        margin-left: -300px
    }

    div.dt-button-collection > * {
        -webkit-column-break-inside: avoid;
        break-inside: avoid
    }

    div.dt-button-collection.two-column {
        width: 300px;
        padding-bottom: 1px;
        -webkit-column-count: 2;
        -moz-column-count: 2;
        -ms-column-count: 2;
        -o-column-count: 2;
        column-count: 2
    }

    div.dt-button-collection.three-column {
        width: 450px;
        padding-bottom: 1px;
        -webkit-column-count: 3;
        -moz-column-count: 3;
        -ms-column-count: 3;
        -o-column-count: 3;
        column-count: 3
    }

    div.dt-button-collection.four-column {
        width: 600px;
        padding-bottom: 1px;
        -webkit-column-count: 4;
        -moz-column-count: 4;
        -ms-column-count: 4;
        -o-column-count: 4;
        column-count: 4
    }

    div.dt-button-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .7);
        background: -ms-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, .3) 0%, rgba(0, 0, 0, .7) 100%);
        background: -moz-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, .3) 0%, rgba(0, 0, 0, .7) 100%);
        background: -o-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, .3) 0%, rgba(0, 0, 0, .7) 100%);
        background: -webkit-gradient(radial, center center, 0, center center, 497, color-stop(0, rgba(0, 0, 0, .3)), color-stop(1, rgba(0, 0, 0, .7)));
        background: -webkit-radial-gradient(center, ellipse farthest-corner, rgba(0, 0, 0, .3) 0%, rgba(0, 0, 0, .7) 100%);
        background: radial-gradient(ellipse farthest-corner at center, rgba(0, 0, 0, .3) 0%, rgba(0, 0, 0, .7) 100%);
        z-index: 2001
    }

    @media screen and (max-width: 640px) {
        div.dt-buttons {
            float: none !important;
            text-align: center
        }
    }

    table.DTCR_clonedTable.dataTable {
        position: absolute !important;
        background-color: rgba(255, 255, 255, .7);
        z-index: 202
    }

    div.DTCR_pointer {
        width: 1px;
        background-color: #0259c4;
        z-index: 201
    }

    table.DTFC_Cloned thead, table.DTFC_Cloned tfoot {
        background-color: #fff
    }

    div.DTFC_Blocker {
        background-color: #fff
    }

    div.DTFC_LeftWrapper table.dataTable, div.DTFC_RightWrapper table.dataTable {
        margin-bottom: 0;
        z-index: 2
    }

    div.DTFC_LeftWrapper table.dataTable.no-footer, div.DTFC_RightWrapper table.dataTable.no-footer {
        border-bottom: none
    }

    table.fixedHeader-floating {
        position: fixed !important;
        background-color: #fff
    }

    table.fixedHeader-floating.no-footer {
        border-bottom-width: 0
    }

    table.fixedHeader-locked {
        position: absolute !important;
        background-color: #fff
    }

    @media print {
        table.fixedHeader-floating {
            display: none
        }
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child, table.dataTable.dtr-inline.collapsed > tbody > tr > th.child, table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
        cursor: default !important
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th.child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty:before {
        display: none !important
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child {
        position: relative;
        padding-left: 30px;
        cursor: pointer
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
        top: 9px;
        left: 4px;
        height: 14px;
        width: 14px;
        display: block;
        position: absolute;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 14px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        line-height: 14px;
        content: '+';
        background-color: #31b131
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before, table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
        content: '-';
        background-color: #d33333
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr.child td:before {
        display: none
    }

    table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child, table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child {
        padding-left: 27px
    }

    table.dataTable.dtr-inline.collapsed.compact > tbody > tr > td:first-child:before, table.dataTable.dtr-inline.collapsed.compact > tbody > tr > th:first-child:before {
        top: 5px;
        left: 4px;
        height: 14px;
        width: 14px;
        border-radius: 14px;
        line-height: 14px;
        text-indent: 3px
    }

    table.dataTable.dtr-column > tbody > tr > td.control, table.dataTable.dtr-column > tbody > tr > th.control {
        position: relative;
        cursor: pointer
    }

    table.dataTable.dtr-column > tbody > tr > td.control:before, table.dataTable.dtr-column > tbody > tr > th.control:before {
        top: 50%;
        left: 50%;
        height: 16px;
        width: 16px;
        margin-top: -10px;
        margin-left: -10px;
        display: block;
        position: absolute;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 14px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        line-height: 14px;
        content: '+';
        background-color: #31b131
    }

    table.dataTable.dtr-column > tbody > tr.parent td.control:before, table.dataTable.dtr-column > tbody > tr.parent th.control:before {
        content: '-';
        background-color: #d33333
    }

    table.dataTable > tbody > tr.child {
        padding: .5em 1em
    }

    table.dataTable > tbody > tr.child:hover {
        background: transparent !important
    }

    table.dataTable > tbody > tr.child ul {
        display: inline-block;
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    table.dataTable > tbody > tr.child ul li {
        border-bottom: 1px solid #efefef;
        padding: .5em 0
    }

    table.dataTable > tbody > tr.child ul li:first-child {
        padding-top: 0
    }

    table.dataTable > tbody > tr.child ul li:last-child {
        border-bottom: none
    }

    table.dataTable > tbody > tr.child span.dtr-title {
        display: inline-block;
        min-width: 75px;
        font-weight: bold
    }

    div.dtr-modal {
        position: fixed;
        box-sizing: border-box;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 100;
        padding: 10em 1em
    }

    div.dtr-modal div.dtr-modal-display {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 50%;
        height: 50%;
        overflow: auto;
        margin: auto;
        z-index: 102;
        overflow: auto;
        background-color: #f5f5f7;
        border: 1px solid #000;
        border-radius: .5em;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .6)
    }

    div.dtr-modal div.dtr-modal-content {
        position: relative;
        padding: 1em
    }

    div.dtr-modal div.dtr-modal-close {
        position: absolute;
        top: 6px;
        right: 6px;
        width: 22px;
        height: 22px;
        border: 1px solid #eaeaea;
        background-color: #f9f9f9;
        text-align: center;
        border-radius: 3px;
        cursor: pointer;
        z-index: 12
    }

    div.dtr-modal div.dtr-modal-close:hover {
        background-color: #eaeaea
    }

    div.dtr-modal div.dtr-modal-background {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 101;
        background: rgba(0, 0, 0, .6)
    }

    @media screen and (max-width: 767px) {
        div.dtr-modal div.dtr-modal-display {
            width: 95%
        }
    }

    table.dt-rowReorder-float {
        position: absolute !important;
        opacity: .8;
        table-layout: fixed;
        outline: 2px solid #888;
        outline-offset: -2px;
        z-index: 2001
    }

    tr.dt-rowReorder-moving {
        outline: 2px solid #555;
        outline-offset: -2px
    }

    body.dt-rowReorder-noOverflow {
        overflow-x: hidden
    }

    table.dataTable td.reorder {
        text-align: center;
        cursor: move
    }

    div.DTS {
        display: block !important
    }

    div.DTS tbody th, div.DTS tbody td {
        white-space: nowrap
    }

    div.DTS div.DTS_Loading {
        z-index: 1
    }

    div.DTS div.dataTables_scrollBody {
        background: repeating-linear-gradient(45deg, #edeeff, #edeeff 10px, #fff 10px, #fff 20px)
    }

    div.DTS div.dataTables_scrollBody table {
        z-index: 2
    }

    div.DTS div.dataTables_paginate, div.DTS div.dataTables_length {
        display: none
    }

    table.dataTable tbody > tr.selected, table.dataTable tbody > tr > .selected {
        background-color: #b0bed9
    }

    table.dataTable.stripe tbody > tr.odd.selected, table.dataTable.stripe tbody > tr.odd > .selected, table.dataTable.display tbody > tr.odd.selected, table.dataTable.display tbody > tr.odd > .selected {
        background-color: #acbad4
    }

    table.dataTable.hover tbody > tr.selected:hover, table.dataTable.hover tbody > tr > .selected:hover, table.dataTable.display tbody > tr.selected:hover, table.dataTable.display tbody > tr > .selected:hover {
        background-color: #aab7d1
    }

    table.dataTable.order-column tbody > tr.selected > .sorting_1, table.dataTable.order-column tbody > tr.selected > .sorting_2, table.dataTable.order-column tbody > tr.selected > .sorting_3, table.dataTable.order-column tbody > tr > .selected, table.dataTable.display tbody > tr.selected > .sorting_1, table.dataTable.display tbody > tr.selected > .sorting_2, table.dataTable.display tbody > tr.selected > .sorting_3, table.dataTable.display tbody > tr > .selected {
        background-color: #acbad5
    }

    table.dataTable.display tbody > tr.odd.selected > .sorting_1, table.dataTable.order-column.stripe tbody > tr.odd.selected > .sorting_1 {
        background-color: #a6b4cd
    }

    table.dataTable.display tbody > tr.odd.selected > .sorting_2, table.dataTable.order-column.stripe tbody > tr.odd.selected > .sorting_2 {
        background-color: #a8b5cf
    }

    table.dataTable.display tbody > tr.odd.selected > .sorting_3, table.dataTable.order-column.stripe tbody > tr.odd.selected > .sorting_3 {
        background-color: #a9b7d1
    }

    table.dataTable.display tbody > tr.even.selected > .sorting_1, table.dataTable.order-column.stripe tbody > tr.even.selected > .sorting_1 {
        background-color: #acbad5
    }

    table.dataTable.display tbody > tr.even.selected > .sorting_2, table.dataTable.order-column.stripe tbody > tr.even.selected > .sorting_2 {
        background-color: #aebcd6
    }

    table.dataTable.display tbody > tr.even.selected > .sorting_3, table.dataTable.order-column.stripe tbody > tr.even.selected > .sorting_3 {
        background-color: #afbdd8
    }

    table.dataTable.display tbody > tr.odd > .selected, table.dataTable.order-column.stripe tbody > tr.odd > .selected {
        background-color: #a6b4cd
    }

    table.dataTable.display tbody > tr.even > .selected, table.dataTable.order-column.stripe tbody > tr.even > .selected {
        background-color: #acbad5
    }

    table.dataTable.display tbody > tr.selected:hover > .sorting_1, table.dataTable.order-column.hover tbody > tr.selected:hover > .sorting_1 {
        background-color: #a2aec7
    }

    table.dataTable.display tbody > tr.selected:hover > .sorting_2, table.dataTable.order-column.hover tbody > tr.selected:hover > .sorting_2 {
        background-color: #a3b0c9
    }

    table.dataTable.display tbody > tr.selected:hover > .sorting_3, table.dataTable.order-column.hover tbody > tr.selected:hover > .sorting_3 {
        background-color: #a5b2cb
    }

    table.dataTable.display tbody > tr:hover > .selected, table.dataTable.display tbody > tr > .selected:hover, table.dataTable.order-column.hover tbody > tr:hover > .selected, table.dataTable.order-column.hover tbody > tr > .selected:hover {
        background-color: #a2aec7
    }

    table.dataTable td.select-checkbox {
        position: relative
    }

    table.dataTable td.select-checkbox:before, table.dataTable td.select-checkbox:after {
        display: block;
        position: absolute;
        top: 1.2em;
        left: 50%;
        width: 12px;
        height: 12px;
        box-sizing: border-box
    }

    table.dataTable td.select-checkbox:before {
        content: ' ';
        margin-top: -6px;
        margin-left: -6px;
        border: 1px solid #000;
        border-radius: 3px
    }

    table.dataTable tr.selected td.select-checkbox:after {
        content: '✔';
        margin-top: -11px;
        margin-left: -4px;
        text-align: center;
        text-shadow: 1px 1px #b0bed9, -1px -1px #b0bed9, 1px -1px #b0bed9, -1px 1px #b0bed9
    }

    div.dataTables_wrapper span.select-info, div.dataTables_wrapper span.select-item {
        margin-left: .5em
    }

    @media screen and (max-width: 640px) {
        div.dataTables_wrapper span.select-info, div.dataTables_wrapper span.select-item {
            margin-left: 0;
            display: block
        }
    }

    .bootstrap-select {
        width: 220px \9
    }

    .bootstrap-select > .dropdown-toggle {
        width: 100%;
        padding-right: 25px;
        z-index: 1
    }

    .bootstrap-select > select {
        position: absolute !important;
        bottom: 0;
        left: 50%;
        width: .11px !important;
        height: 100% !important;
        padding: 0 !important;
        opacity: 0 !important;
        border: none
    }

    .bootstrap-select > select.mobile-device {
        top: 0;
        left: 0;
        display: block !important;
        width: 100% !important;
        z-index: 2
    }

    .error .bootstrap-select .dropdown-toggle, .has-error .bootstrap-select .dropdown-toggle {
        border-color: #b94a48
    }

    .bootstrap-select.fit-width {
        width: auto !important
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
        width: 220px
    }

    .bootstrap-select .dropdown-toggle:focus {
        outline: thin dotted #333 !important;
        outline: 5px auto -webkit-focus-ring-color !important;
        outline-offset: -2px
    }

    .bootstrap-select.form-control {
        margin-bottom: 0;
        padding: 0;
        border: none
    }

    .bootstrap-select.form-control:not([class*=col-]) {
        width: 100%
    }

    .bootstrap-select.form-control.input-group-btn {
        z-index: auto
    }

    .bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*=col-] {
        float: none;
        display: inline-block;
        margin-left: 0
    }

    .bootstrap-select.btn-group.dropdown-menu-right, .bootstrap-select.btn-group[class*=col-].dropdown-menu-right, .row .bootstrap-select.btn-group[class*=col-].dropdown-menu-right {
        float: right
    }

    .form-group .bootstrap-select.btn-group, .form-horizontal .bootstrap-select.btn-group, .form-inline .bootstrap-select.btn-group {
        margin-bottom: 0
    }

    .form-group-lg .bootstrap-select.btn-group.form-control, .form-group-sm .bootstrap-select.btn-group.form-control {
        padding: 0
    }

    .form-inline .bootstrap-select.btn-group .form-control {
        width: 100%
    }

    .bootstrap-select.btn-group.disabled, .bootstrap-select.btn-group > .disabled {
        cursor: not-allowed
    }

    .bootstrap-select.btn-group.disabled:focus, .bootstrap-select.btn-group > .disabled:focus {
        outline: 0 !important
    }

    .bootstrap-select.btn-group.bs-container {
        position: absolute
    }

    .bootstrap-select.btn-group.bs-container .dropdown-menu {
        z-index: 1060
    }

    .bootstrap-select.btn-group .dropdown-toggle .filter-option {
        display: inline-block;
        overflow: hidden;
        width: 100%;
        text-align: left
    }

    .bootstrap-select.btn-group .dropdown-toggle .caret {
        position: absolute;
        top: 50%;
        right: 12px;
        margin-top: -2px;
        vertical-align: middle
    }

    .bootstrap-select.btn-group[class*=col-] .dropdown-toggle {
        width: 100%
    }

    .bootstrap-select.btn-group .dropdown-menu {
        min-width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bootstrap-select.btn-group .dropdown-menu.inner {
        position: static;
        float: none;
        border: 0;
        padding: 0;
        margin: 0;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .bootstrap-select.btn-group .dropdown-menu li {
        position: relative
    }

    .bootstrap-select.btn-group .dropdown-menu li.active small {
        color: #fff
    }

    .bootstrap-select.btn-group .dropdown-menu li.disabled a {
        cursor: not-allowed
    }

    .bootstrap-select.btn-group .dropdown-menu li a {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .bootstrap-select.btn-group .dropdown-menu li a.opt {
        position: relative;
        padding-left: 2.25em
    }

    .bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
        display: none
    }

    .bootstrap-select.btn-group .dropdown-menu li a span.text {
        display: inline-block
    }

    .bootstrap-select.btn-group .dropdown-menu li small {
        padding-left: .5em
    }

    .bootstrap-select.btn-group .dropdown-menu .notify {
        position: absolute;
        bottom: 5px;
        width: 96%;
        margin: 0 2%;
        min-height: 26px;
        padding: 3px 5px;
        background: #f5f5f5;
        border: 1px solid #e3e3e3;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        pointer-events: none;
        opacity: .9;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bootstrap-select.btn-group .no-results {
        padding: 3px;
        background: #f5f5f5;
        margin: 0 5px;
        white-space: nowrap
    }

    .bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
        position: static
    }

    .bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
        position: static;
        top: auto;
        margin-top: -1px
    }

    .bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {
        position: absolute;
        display: inline-block;
        right: 15px;
        margin-top: 5px
    }

    .bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
        margin-right: 34px
    }

    .bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
        z-index: 1061
    }

    .bootstrap-select.show-menu-arrow .dropdown-toggle:before {
        content: '';
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid rgba(204, 204, 204, .2);
        position: absolute;
        bottom: -4px;
        left: 9px;
        display: none
    }

    .bootstrap-select.show-menu-arrow .dropdown-toggle:after {
        content: '';
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        position: absolute;
        bottom: -4px;
        left: 10px;
        display: none
    }

    .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
        bottom: auto;
        top: -3px;
        border-top: 7px solid rgba(204, 204, 204, .2);
        border-bottom: 0
    }

    .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
        bottom: auto;
        top: -3px;
        border-top: 6px solid #fff;
        border-bottom: 0
    }

    .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
        right: 12px;
        left: auto
    }

    .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
        right: 13px;
        left: auto
    }

    .bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after, .bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before {
        display: block
    }

    .bs-actionsbox, .bs-donebutton, .bs-searchbox {
        padding: 4px 8px
    }

    .bs-actionsbox {
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bs-actionsbox .btn-group button {
        width: 50%
    }

    .bs-donebutton {
        float: left;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .bs-donebutton .btn-group button {
        width: 100%
    }

    .bs-searchbox + .bs-actionsbox {
        padding: 0 8px 4px
    }

    .bs-searchbox .form-control {
        margin-bottom: 0;
        width: 100%;
        float: none
    }

    .bootstrap-switch {
        display: inline-block;
        direction: ltr;
        cursor: pointer;
        border-radius: 4px;
        border: 1px solid;
        border-color: #ccc;
        position: relative;
        text-align: left;
        overflow: hidden;
        line-height: 8px;
        z-index: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        vertical-align: middle;
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    .bootstrap-switch .bootstrap-switch-container {
        display: inline-block;
        top: 0;
        border-radius: 4px;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .bootstrap-switch .bootstrap-switch-handle-on, .bootstrap-switch .bootstrap-switch-handle-off, .bootstrap-switch .bootstrap-switch-label {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block !important;
        height: 100%;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 20px
    }

    .bootstrap-switch .bootstrap-switch-handle-on, .bootstrap-switch .bootstrap-switch-handle-off {
        text-align: center;
        z-index: 1
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary {
        color: #fff;
        background: #428bca
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info {
        color: #fff;
        background: #5bc0de
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success {
        color: #fff;
        background: #5cb85c
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning {
        background: #f0ad4e;
        color: #fff
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger {
        color: #fff;
        background: #d9534f
    }

    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default, .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default {
        color: #000;
        background: #eee
    }

    .bootstrap-switch .bootstrap-switch-label {
        text-align: center;
        margin-top: -1px;
        margin-bottom: -1px;
        z-index: 100;
        color: #333;
        background: #fff
    }

    .bootstrap-switch .bootstrap-switch-handle-on {
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px
    }

    .bootstrap-switch .bootstrap-switch-handle-off {
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px
    }

    .bootstrap-switch input[type='radio'], .bootstrap-switch input[type='checkbox'] {
        position: absolute !important;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
        z-index: -1
    }

    .bootstrap-switch input[type='radio'].form-control, .bootstrap-switch input[type='checkbox'].form-control {
        height: auto
    }

    .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-mini .bootstrap-switch-label {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5
    }

    .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-small .bootstrap-switch-label {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label {
        padding: 6px 16px;
        font-size: 18px;
        line-height: 1.33
    }

    .bootstrap-switch.bootstrap-switch-disabled, .bootstrap-switch.bootstrap-switch-readonly, .bootstrap-switch.bootstrap-switch-indeterminate {
        cursor: default !important
    }

    .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-disabled .bootstrap-switch-label, .bootstrap-switch.bootstrap-switch-readonly .bootstrap-switch-label, .bootstrap-switch.bootstrap-switch-indeterminate .bootstrap-switch-label {
        opacity: .5;
        filter: alpha(opacity=50);
        cursor: default !important
    }

    .bootstrap-switch.bootstrap-switch-animate .bootstrap-switch-container {
        -webkit-transition: margin-left .5s;
        transition: margin-left .5s
    }

    .bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-on {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px
    }

    .bootstrap-switch.bootstrap-switch-inverse .bootstrap-switch-handle-off {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px
    }

    .bootstrap-switch.bootstrap-switch-focused {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .bootstrap-switch.bootstrap-switch-on .bootstrap-switch-label, .bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-off .bootstrap-switch-label {
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px
    }

    .bootstrap-switch.bootstrap-switch-off .bootstrap-switch-label, .bootstrap-switch.bootstrap-switch-inverse.bootstrap-switch-on .bootstrap-switch-label {
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px
    }

    .editable-wrap {
        display: inline-block;
        white-space: pre;
        margin: 0
    }

    .editable-wrap .editable-controls, .editable-wrap .editable-error {
        margin-bottom: 0
    }

    .editable-wrap .editable-controls > input, .editable-wrap .editable-controls > select, .editable-wrap .editable-controls > textarea {
        margin-bottom: 0
    }

    .editable-wrap .editable-input {
        display: inline-block
    }

    .editable-buttons {
        display: inline-block;
        vertical-align: top
    }

    .editable-buttons button {
        margin-left: 5px
    }

    .editable-input.editable-has-buttons {
        width: auto
    }

    .editable-bstime .editable-input input[type=text] {
        width: 46px
    }

    .editable-bstime .well-small {
        margin-bottom: 0;
        padding: 10px
    }

    .editable-range output {
        display: inline-block;
        min-width: 30px;
        vertical-align: top;
        text-align: center
    }

    .editable-color input[type=color] {
        width: 50px
    }

    .editable-checkbox label span, .editable-checklist label span, .editable-radiolist label span {
        margin-left: 7px;
        margin-right: 10px
    }

    .editable-hide {
        display: none !important
    }

    .editable-click, a.editable-click {
        text-decoration: none;
        color: #428bca;
        border-bottom: dashed 1px #428bca
    }

    .editable-click:hover, a.editable-click:hover {
        text-decoration: none;
        color: #2a6496;
        border-bottom-color: #2a6496
    }

    .editable-empty, .editable-empty:hover, .editable-empty:focus, a.editable-empty, a.editable-empty:hover, a.editable-empty:focus {
        font-style: italic;
        color: #d14;
        text-decoration: none
    }

    .popover-wrapper > a {
        display: inline !important
    }

    .popover-wrapper {
        display: inline;
        position: relative
    }

    .popover-wrapper form {
        position: absolute;
        top: -53px;
        background: #fff;
        border: 1px solid #aaa;
        border-radius: 5px;
        padding: 7px;
        width: auto;
        display: inline-block;
        left: 50%;
        z-index: 101
    }

    .popover-wrapper form:before {
        content: "";
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #aaa;
        position: absolute;
        bottom: -10px
    }

    .popover-wrapper form:after {
        content: "";
        width: 0;
        height: 0;
        border-left: 9px solid transparent;
        border-right: 9px solid transparent;
        border-top: 9px solid #fff;
        position: absolute;
        bottom: -9px
    }

    @media screen and (max-width: 750px) {
        .popover-wrapper form {
            margin-left: -60px
        }

        .popover-wrapper form:before {
            left: 50px
        }

        .popover-wrapper form:after {
            left: 51px
        }
    }

    @media screen and (min-width: 750px) {
        .popover-wrapper form {
            margin-left: -110px
        }

        .popover-wrapper form:before {
            left: 100px
        }

        .popover-wrapper form:after {
            left: 101px
        }
    }

    .jcrop-holder {
        direction: ltr;
        text-align: left
    }

    .jcrop-vline, .jcrop-hline {
        background: #fff url("Jcrop.gif");
        font-size: 0;
        position: absolute
    }

    .jcrop-vline {
        height: 100%;
        width: 1px !important
    }

    .jcrop-vline.right {
        right: 0
    }

    .jcrop-hline {
        height: 1px !important;
        width: 100%
    }

    .jcrop-hline.bottom {
        bottom: 0
    }

    .jcrop-tracker {
        height: 100%;
        width: 100%;
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none
    }

    .jcrop-handle {
        background-color: #333;
        border: 1px #eee solid;
        width: 7px;
        height: 7px;
        font-size: 1px
    }

    .jcrop-handle.ord-n {
        left: 50%;
        margin-left: -4px;
        margin-top: -4px;
        top: 0
    }

    .jcrop-handle.ord-s {
        bottom: 0;
        left: 50%;
        margin-bottom: -4px;
        margin-left: -4px
    }

    .jcrop-handle.ord-e {
        margin-right: -4px;
        margin-top: -4px;
        right: 0;
        top: 50%
    }

    .jcrop-handle.ord-w {
        left: 0;
        margin-left: -4px;
        margin-top: -4px;
        top: 50%
    }

    .jcrop-handle.ord-nw {
        left: 0;
        margin-left: -4px;
        margin-top: -4px;
        top: 0
    }

    .jcrop-handle.ord-ne {
        margin-right: -4px;
        margin-top: -4px;
        right: 0;
        top: 0
    }

    .jcrop-handle.ord-se {
        bottom: 0;
        margin-bottom: -4px;
        margin-right: -4px;
        right: 0
    }

    .jcrop-handle.ord-sw {
        bottom: 0;
        left: 0;
        margin-bottom: -4px;
        margin-left: -4px
    }

    .jcrop-dragbar.ord-n, .jcrop-dragbar.ord-s {
        height: 7px;
        width: 100%
    }

    .jcrop-dragbar.ord-e, .jcrop-dragbar.ord-w {
        height: 100%;
        width: 7px
    }

    .jcrop-dragbar.ord-n {
        margin-top: -4px
    }

    .jcrop-dragbar.ord-s {
        bottom: 0;
        margin-bottom: -4px
    }

    .jcrop-dragbar.ord-e {
        margin-right: -4px;
        right: 0
    }

    .jcrop-dragbar.ord-w {
        margin-left: -4px
    }

    .jcrop-light .jcrop-vline, .jcrop-light .jcrop-hline {
        background: #fff;
        filter: alpha(opacity=70) !important;
        opacity: .7 !important
    }

    .jcrop-light .jcrop-handle {
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background-color: #000;
        border-color: #fff;
        border-radius: 3px
    }

    .jcrop-dark .jcrop-vline, .jcrop-dark .jcrop-hline {
        background: #000;
        filter: alpha(opacity=70) !important;
        opacity: .7 !important
    }

    .jcrop-dark .jcrop-handle {
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background-color: #fff;
        border-color: #000;
        border-radius: 3px
    }

    .solid-line .jcrop-vline, .solid-line .jcrop-hline {
        background: #fff
    }

    .jcrop-holder img, img.jcrop-preview {
        max-width: none
    }

    .owl-carousel .owl-wrapper:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
    }

    .owl-carousel {
        display: none;
        position: relative;
        width: 100%;
        -ms-touch-action: pan-y
    }

    .owl-carousel .owl-wrapper {
        display: none;
        position: relative;
        -webkit-transform: translate3d(0, 0, 0)
    }

    .owl-carousel .owl-wrapper-outer {
        overflow: hidden;
        position: relative;
        width: 100%
    }

    .owl-carousel .owl-wrapper-outer.autoHeight {
        -webkit-transition: height 500ms ease-in-out;
        -moz-transition: height 500ms ease-in-out;
        -ms-transition: height 500ms ease-in-out;
        -o-transition: height 500ms ease-in-out;
        transition: height 500ms ease-in-out
    }

    .owl-carousel .owl-item {
        float: left
    }

    .owl-controls .owl-page, .owl-controls .owl-buttons div {
        cursor: pointer
    }

    .owl-controls {
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .grabbing {
        cursor: url(grabbing.png) 8 8, move
    }

    .owl-carousel .owl-wrapper, .owl-carousel .owl-item {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0)
    }

    .owl-theme .owl-controls {
        margin-top: 10px;
        text-align: center
    }

    .owl-theme .owl-controls .owl-buttons div {
        color: #fff;
        display: inline-block;
        zoom: 1;
        *display: inline;
        margin: 5px;
        padding: 3px 10px;
        font-size: 12px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background: #869791;
        filter: Alpha(Opacity=50);
        opacity: .5
    }

    .owl-theme .owl-controls.clickable .owl-buttons div:hover {
        filter: Alpha(Opacity=100);
        opacity: 1;
        text-decoration: none
    }

    .owl-theme .owl-controls .owl-page {
        display: inline-block;
        zoom: 1;
        *display: inline
    }

    .owl-theme .owl-controls .owl-page span {
        display: block;
        width: 12px;
        height: 12px;
        margin: 5px 7px;
        filter: Alpha(Opacity=50);
        opacity: .5;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        background: #869791
    }

    .owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span {
        filter: Alpha(Opacity=100);
        opacity: 1
    }

    .owl-theme .owl-controls .owl-page span.owl-numbers {
        height: auto;
        width: auto;
        color: #fff;
        padding: 2px 10px;
        font-size: 12px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px
    }

    .owl-item.loading {
        min-height: 150px;
        background: url(AjaxLoader.gif) no-repeat center center
    }

    .nav-tabs, .nav-pills {
        position: relative
    }

    .pricing-content-1 {
        background-color: #fff
    }

    .pricing-content-1:after, .pricing-content-1:before {
        content: " ";
        display: table
    }

    .pricing-content-1:after {
        clear: both
    }

    .pricing-content-1 .arrow-down {
        width: 0;
        height: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-top: 15px solid;
        margin: auto
    }

    .pricing-content-1 .arrow-down.arrow-blue {
        border-top-color: #3598dc
    }

    .pricing-content-1 .arrow-down.arrow-green {
        border-top-color: #32c5d2
    }

    .pricing-content-1 .arrow-down.arrow-dark {
        border-top-color: #2f353b
    }

    .pricing-content-1 .arrow-down.arrow-grey {
        border-top-color: #f7f9fb
    }

    .pricing-content-1 .price-ribbon {
        position: absolute;
        top: 75px;
        right: -4px;
        width: 90px;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 300;
        padding: 6px 20px 6px 15px;
        color: #fff;
        background-color: #d91e18;
        text-shadow: 0 1px 2px #bbb;
        -webkit-box-shadow: 0 2px 4px #888;
        -moz-box-shadow: 0 2px 4px #888;
        box-shadow: 0 2px 4px #888
    }

    .pricing-content-1 .price-ribbon:after {
        content: ' ';
        position: absolute;
        width: 0;
        height: 0;
        right: 0;
        top: 100%;
        border-width: 5px 10px;
        border-style: solid;
        border-color: #64120f transparent transparent #64120f
    }

    .pricing-content-1 .pricing-title {
        border-bottom: 1px solid;
        border-color: #fff
    }

    .pricing-content-1 .pricing-title > h1 {
        margin: 20px 0
    }

    .pricing-content-1 .price-column-container {
        text-align: center;
        margin: 0;
        background-color: #fff
    }

    .pricing-content-1 .price-column-container.border-active {
        border: 1px solid #e5e9ee
    }

    .pricing-content-1 .price-column-container:first-child {
        margin-left: 0
    }

    .pricing-content-1 .price-column-container:last-child {
        margin-right: 0
    }

    .pricing-content-1 .price-table-head {
        color: #fff;
        padding: 20px 0
    }

    .pricing-content-1 .price-table-head h2 {
        font-size: 26px
    }

    .pricing-content-1 .price-table-head.price-1 {
        background-color: #3598dc
    }

    .pricing-content-1 .price-table-head.price-2 {
        background-color: #32c5d2
    }

    .pricing-content-1 .price-table-head.price-3 {
        background-color: #2f353b
    }

    .pricing-content-1 .price-table-pricing > h3 {
        font-size: 60px;
        position: relative
    }

    .pricing-content-1 .price-table-pricing > h3 > .price-sign {
        font-size: 24px;
        margin-left: -15px;
        vertical-align: top;
        top: 15px
    }

    .pricing-content-1 .price-table-pricing > p {
        margin-top: 0
    }

    .pricing-content-1 .price-table-content {
        background-color: #f7f9fb;
        color: #5c6d7e;
        font-weight: 600;
        font-size: 16px
    }

    .pricing-content-1 .price-table-content .row {
        padding-top: 10px;
        padding-bottom: 10px
    }

    .pricing-content-1 .price-table-content .row i {
        color: #6cade6
    }

    .pricing-content-1 .price-table-content .row:first-child {
        padding-top: 20px
    }

    .pricing-content-1 .price-table-content .row:last-child {
        padding-bottom: 20px
    }

    .pricing-content-1 .price-table-footer {
        padding: 20px 0
    }

    .pricing-content-1 .price-table-footer > .price-button {
        font-weight: 700;
        padding: 10px 20px
    }

    @media (max-width: 1024px) {
        .pricing-content-1 .mobile-padding {
            padding: 0 15px;
            margin: 0 -15px
        }

        .pricing-content-1 .mobile-padding > i {
            margin-right: 20px
        }

        .pricing-content-1 .price-table-content {
            padding-left: 15px;
            padding-right: 15px
        }
    }

    .pricing-content-2 {
        background-color: #fff
    }

    .pricing-content-2 .no-padding {
        padding: 0
    }

    .pricing-content-2 .text-left {
        text-align: left
    }

    .pricing-content-2 .text-right {
        text-align: right
    }

    .pricing-content-2.pricing-bg-dark {
        background-color: #2f353b
    }

    .pricing-content-2 .pricing-title {
        border-color: #444
    }

    .pricing-content-2 .pricing-title > h1 {
        color: #fff
    }

    .pricing-content-2 .pricing-table-container {
        padding-top: 40px;
        padding-bottom: 40px
    }

    .pricing-content-2 .pricing-table-container .padding-fix {
        padding-left: 15px;
        padding-right: 15px
    }

    .pricing-content-2 .pricing-table-container .price-column-container {
        background-color: #fff;
        margin: 30px 0;
        padding: 60px 0;
        text-align: center;
        border-bottom: 4px solid #ccc
    }

    .pricing-content-2 .pricing-table-container .price-column-container.border-right {
        border-right: 1px solid #ccc
    }

    .pricing-content-2 .pricing-table-container .price-column-container.border-left {
        border-left: 1px solid #ccc
    }

    .pricing-content-2 .pricing-table-container .price-column-container.border-top {
        border-top: 1px solid #ccc
    }

    .pricing-content-2 .pricing-table-container .price-column-container.featured-price {
        margin: 0;
        padding: 89px 0;
        border: 1px solid #ccc;
        border-bottom: 4px solid
    }

    .pricing-content-2 .pricing-table-container .price-column-container.featured-price > .price-feature-label {
        position: absolute;
        top: 0;
        left: 50%;
        display: inline-block;
        width: 110px;
        margin: 0 0 0 -60px;
        padding: 7px 15px;
        color: #fff;
        font-weight: 300
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-head > h2 {
        letter-spacing: 1px;
        font-weight: 600;
        font-size: 18px;
        color: #acb5c3
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-head > h2.opt-pricing-5 {
        padding: 7px 15px;
        display: inline;
        margin: 0 auto 20px;
        font-size: 16px
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-pricing > h3 {
        font-size: 60px;
        position: relative;
        font-weight: 600
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-pricing > h3 > .price-sign {
        font-size: 24px;
        margin-left: -15px;
        vertical-align: top;
        top: 15px
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-pricing > p {
        margin-top: 0
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-content {
        color: #333;
        font-weight: 300;
        font-size: 16px
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-content .row {
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid;
        border-color: #eee
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-content .row:first-child {
        border-top: 1px solid;
        border-color: #eee
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-footer {
        padding: 40px 0 0
    }

    .pricing-content-2 .pricing-table-container .price-column-container > .price-table-footer > .featured-price {
        font-size: 20px;
        font-weight: 300;
        border-bottom: 3px solid #3faba4
    }

    @media (max-width: 991px) {
        .pricing-content-2 .price-column-container {
            border-left: 1px solid;
            border-right: 1px solid;
            border-color: #ccc
        }
    }

    tags-input {
        display: block
    }

    tags-input *, tags-input *:before, tags-input *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    tags-input .host {
        position: relative;
        margin-top: 5px;
        margin-bottom: 5px;
        height: 100%
    }

    tags-input .host:active {
        outline: none
    }

    tags-input .tags {
        -moz-appearance: textfield;
        -webkit-appearance: textfield;
        padding: 1px;
        overflow: hidden;
        word-wrap: break-word;
        cursor: text;
        background-color: #fff;
        border: 1px solid #a9a9a9;
        box-shadow: 1px 1px 1px 0 lightgray inset;
        height: 100%
    }

    tags-input .tags.focused {
        outline: none;
        -webkit-box-shadow: 0 0 3px 1px rgba(5, 139, 242, .6);
        -moz-box-shadow: 0 0 3px 1px rgba(5, 139, 242, .6);
        box-shadow: 0 0 3px 1px rgba(5, 139, 242, .6)
    }

    tags-input .tags .tag-list {
        margin: 0;
        padding: 0;
        list-style-type: none
    }

    tags-input .tags .tag-item {
        margin: 2px;
        padding: 0 5px;
        display: inline-block;
        float: left;
        font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
        height: 26px;
        line-height: 25px;
        border: 1px solid #acacac;
        border-radius: 3px;
        background: -webkit-linear-gradient(top, #f0f9ff 0%, #cbebff 47%, #a1dbff 100%);
        background: linear-gradient(to bottom, #f0f9ff 0%, #cbebff 47%, #a1dbff 100%)
    }

    tags-input .tags .tag-item.selected {
        background: -webkit-linear-gradient(top, #febbbb 0%, #fe9090 45%, #ff5c5c 100%);
        background: linear-gradient(to bottom, #febbbb 0%, #fe9090 45%, #ff5c5c 100%)
    }

    tags-input .tags .tag-item .remove-button {
        margin: 0 0 0 5px;
        padding: 0;
        border: none;
        background: none;
        cursor: pointer;
        vertical-align: middle;
        font: bold 16px Arial, sans-serif;
        color: #585858
    }

    tags-input .tags .tag-item .remove-button:active {
        color: red
    }

    tags-input .tags .input {
        border: 0;
        outline: none;
        margin: 2px;
        padding: 0;
        padding-left: 5px;
        float: left;
        height: 26px;
        font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif
    }

    tags-input .tags .input.invalid-tag {
        color: red
    }

    tags-input .tags .input::-ms-clear {
        display: none
    }

    tags-input.ng-invalid .tags {
        -webkit-box-shadow: 0 0 3px 1px rgba(255, 0, 0, .6);
        -moz-box-shadow: 0 0 3px 1px rgba(255, 0, 0, .6);
        box-shadow: 0 0 3px 1px rgba(255, 0, 0, .6)
    }

    tags-input[disabled] .host:focus {
        outline: none
    }

    tags-input[disabled] .tags {
        background-color: #eee;
        cursor: default
    }

    tags-input[disabled] .tags .tag-item {
        opacity: .65;
        background: -webkit-linear-gradient(top, #f0f9ff 0%, rgba(203, 235, 255, .75) 47%, rgba(161, 219, 255, .62) 100%);
        background: linear-gradient(to bottom, #f0f9ff 0%, rgba(203, 235, 255, .75) 47%, rgba(161, 219, 255, .62) 100%)
    }

    tags-input[disabled] .tags .tag-item .remove-button {
        cursor: default
    }

    tags-input[disabled] .tags .tag-item .remove-button:active {
        color: #585858
    }

    tags-input[disabled] .tags .input {
        background-color: #eee;
        cursor: default
    }

    tags-input .autocomplete {
        margin-top: 5px;
        position: absolute;
        padding: 5px 0;
        z-index: 999;
        width: 100%;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .2);
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
    }

    tags-input .autocomplete .suggestion-list {
        margin: 0;
        padding: 0;
        list-style-type: none;
        max-height: 280px;
        overflow-y: auto;
        position: relative
    }

    tags-input .autocomplete .suggestion-item {
        padding: 5px 10px;
        cursor: pointer;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font: 16px "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #000;
        background-color: #fff
    }

    tags-input .autocomplete .suggestion-item.selected {
        color: #fff;
        background-color: #0097cf
    }

    tags-input .autocomplete .suggestion-item.selected em {
        color: #fff;
        background-color: #0097cf
    }

    tags-input .autocomplete .suggestion-item em {
        font: normal bold 16px "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #000;
        background-color: #fff
    }

    tags-input {
        box-shadow: none;
        border: none;
        padding: 0;
        min-height: 34px
    }

    tags-input .host {
        margin: 0
    }

    tags-input .tags {
        -moz-appearance: none;
        -webkit-appearance: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        -moz-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    tags-input .tags .tag-item {
        color: #fff;
        background: #428bca;
        border: 1px solid #357ebd;
        border-radius: 4px
    }

    tags-input .tags .tag-item.selected {
        color: #fff;
        background: #d9534f;
        border: 1px solid #d43f3a
    }

    tags-input .tags .tag-item .remove-button:hover {
        text-decoration: none
    }

    tags-input .tags.focused {
        border: 1px solid #66afe9;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    tags-input .autocomplete {
        border-radius: 4px
    }

    tags-input .autocomplete .suggestion-item.selected {
        color: #262626;
        background-color: #f5f5f5
    }

    tags-input .autocomplete .suggestion-item.selected em {
        color: #262626;
        background-color: #f5f5f5
    }

    tags-input .autocomplete .suggestion-item em {
        color: #000;
        background-color: #fff
    }

    tags-input.ng-invalid .tags {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    tags-input[disabled] .tags {
        background-color: #eee
    }

    tags-input[disabled] .tags .tag-item {
        background: #337ab7;
        opacity: .65
    }

    tags-input[disabled] .tags .input {
        background-color: #eee
    }

    .input-group tags-input {
        padding: 0;
        display: table-cell
    }

    .input-group tags-input:not(:first-child) .tags {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group tags-input:not(:last-child) .tags {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group-lg tags-input:first-child .tags {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px
    }

    .input-group-lg tags-input:last-child .tags {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px
    }

    .input-group-sm tags-input:first-child .tags {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .input-group-sm tags-input:last-child .tags {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px
    }

    tags-input.ti-input-lg, .input-group-lg tags-input {
        min-height: 46px
    }

    tags-input.ti-input-lg .tags, .input-group-lg tags-input .tags {
        border-radius: 6px
    }

    tags-input.ti-input-lg .tags .tag-item, .input-group-lg tags-input .tags .tag-item {
        height: 38px;
        line-height: 37px;
        font-size: 18px;
        border-radius: 6px
    }

    tags-input.ti-input-lg .tags .tag-item .remove-button, .input-group-lg tags-input .tags .tag-item .remove-button {
        font-size: 20px
    }

    tags-input.ti-input-lg .tags .input, .input-group-lg tags-input .tags .input {
        height: 38px;
        font-size: 18px
    }

    tags-input.ti-input-sm, .input-group-sm tags-input {
        min-height: 30px
    }

    tags-input.ti-input-sm .tags, .input-group-sm tags-input .tags {
        border-radius: 3px
    }

    tags-input.ti-input-sm .tags .tag-item, .input-group-sm tags-input .tags .tag-item {
        height: 22px;
        line-height: 21px;
        font-size: 12px;
        border-radius: 3px
    }

    tags-input.ti-input-sm .tags .tag-item .remove-button, .input-group-sm tags-input .tags .tag-item .remove-button {
        font-size: 16px
    }

    tags-input.ti-input-sm .tags .input, .input-group-sm tags-input .tags .input {
        height: 22px;
        font-size: 12px
    }

    .has-feedback tags-input .tags {
        padding-right: 30px
    }

    .has-success tags-input .tags {
        border-color: #3c763d
    }

    .has-success tags-input .tags.focused {
        border-color: #2b542c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }

    .has-error tags-input .tags {
        border-color: #a94442
    }

    .has-error tags-input .tags.focused {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    .has-warning tags-input .tags {
        border-color: #8a6d3b
    }

    .has-warning tags-input .tags.focused {
        border-color: #66512c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }

    .select2-container .select2-choice, .select2-results .select2-result-label {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-touch-callout: none
    }

    .select2-container {
        margin: 0;
        position: relative;
        display: inline-block;
        zoom: 1;
        vertical-align: middle
    }

    .select2-container, .select2-drop, .select2-search, .select2-search input {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .select2-container .select2-choice {
        display: block;
        height: 26px;
        padding: 0 0 0 8px;
        overflow: hidden;
        position: relative;
        border: 1px solid #aaa;
        white-space: nowrap;
        line-height: 26px;
        color: #444;
        text-decoration: none;
        border-radius: 4px;
        background-clip: padding-box;
        user-select: none;
        background-color: #fff;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(.5, #fff));
        background-image: -webkit-linear-gradient(center bottom, #eee 0, #fff 50%);
        background-image: -moz-linear-gradient(center bottom, #eee 0, #fff 50%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
        background-image: linear-gradient(top, #fff 0, #eee 50%)
    }

    .select2-container.select2-drop-above .select2-choice {
        border-bottom-color: #aaa;
        border-radius: 0 0 4px 4px;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(.9, #fff));
        background-image: -webkit-linear-gradient(center bottom, #eee 0, #fff 90%);
        background-image: -moz-linear-gradient(center bottom, #eee 0, #fff 90%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
        background-image: linear-gradient(top, #eee 0, #fff 90%)
    }

    .select2-container.select2-allowclear .select2-choice .select2-chosen {
        margin-right: 42px
    }

    .select2-container .select2-choice > .select2-chosen {
        margin-right: 26px;
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis
    }

    .select2-container .select2-choice abbr {
        display: none;
        width: 12px;
        height: 12px;
        position: absolute;
        right: 24px;
        top: 8px;
        font-size: 1px;
        text-decoration: none;
        border: 0;
        background: url(select2.png) right top no-repeat;
        cursor: pointer;
        outline: 0
    }

    .select2-container.select2-allowclear .select2-choice abbr {
        display: inline-block
    }

    .select2-container .select2-choice abbr:hover {
        background-position: right -11px;
        cursor: pointer
    }

    .select2-drop-mask {
        border: 0;
        margin: 0;
        padding: 0;
        position: fixed;
        left: 0;
        top: 0;
        min-height: 100%;
        min-width: 100%;
        height: auto;
        width: auto;
        opacity: 0;
        z-index: 9998;
        background-color: #fff;
        filter: alpha(opacity=0)
    }

    .select2-drop {
        width: 100%;
        margin-top: -1px;
        position: absolute;
        z-index: 9999;
        top: 100%;
        background: #fff;
        color: #000;
        border: 1px solid #aaa;
        border-top: 0;
        border-radius: 0 0 4px 4px;
        -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, .15);
        box-shadow: 0 4px 5px rgba(0, 0, 0, .15)
    }

    .select2-drop-auto-width {
        border-top: 1px solid #aaa;
        width: auto
    }

    .select2-drop-auto-width .select2-search {
        padding-top: 4px
    }

    .select2-drop.select2-drop-above {
        margin-top: 1px;
        border-top: 1px solid #aaa;
        border-bottom: 0;
        border-radius: 4px 4px 0 0;
        -webkit-box-shadow: 0 -4px 5px rgba(0, 0, 0, .15);
        box-shadow: 0 -4px 5px rgba(0, 0, 0, .15)
    }

    .select2-drop-active {
        border: 1px solid #5897fb;
        border-top: none
    }

    .select2-drop.select2-drop-above.select2-drop-active {
        border-top: 1px solid #5897fb
    }

    .select2-container .select2-choice .select2-arrow {
        display: inline-block;
        width: 18px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        border-left: 1px solid #aaa;
        border-radius: 0 4px 4px 0;
        background: #ccc;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(.6, #eee));
        background-image: -webkit-linear-gradient(center bottom, #ccc 0, #eee 60%);
        background-image: -moz-linear-gradient(center bottom, #ccc 0, #eee 60%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#cccccc', GradientType=0);
        background-image: linear-gradient(top, #ccc 0, #eee 60%)
    }

    .select2-dropdown-open .select2-choice, .select2-dropdown-open.select2-drop-above .select2-choice, .select2-dropdown-open.select2-drop-above .select2-choices {
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff', GradientType=0)
    }

    .select2-container .select2-choice .select2-arrow b {
        display: block;
        width: 100%;
        height: 100%;
        background: url(select2.png) 0 1px no-repeat
    }

    .select2-search {
        display: inline-block;
        width: 100%;
        min-height: 26px;
        margin: 0;
        padding-left: 4px;
        padding-right: 4px;
        position: relative;
        z-index: 10000;
        white-space: nowrap
    }

    .select2-search input {
        width: 100%;
        height: auto !important;
        min-height: 26px;
        padding: 4px 20px 4px 5px;
        margin: 0;
        outline: 0;
        font-family: sans-serif;
        font-size: 1em;
        border: 1px solid #aaa;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        background: url(select2.png) 100% -22px no-repeat #fff;
        background: url(select2.png) 100% -22px no-repeat, -webkit-gradient(linear, left bottom, left top, color-stop(.85, #fff), color-stop(.99, #eee));
        background: url(select2.png) 100% -22px no-repeat, -webkit-linear-gradient(center bottom, #fff 85%, #eee 99%);
        background: url(select2.png) 100% -22px no-repeat, -moz-linear-gradient(center bottom, #fff 85%, #eee 99%);
        background: url(select2.png) 100% -22px no-repeat, linear-gradient(top, #fff 85%, #eee 99%)
    }

    .select2-drop.select2-drop-above .select2-search input {
        margin-top: 4px
    }

    .select2-search input.select2-active {
        background: url(select2-spinner.gif) 100% no-repeat #fff;
        background: url(select2-spinner.gif) 100% no-repeat, -webkit-gradient(linear, left bottom, left top, color-stop(.85, #fff), color-stop(.99, #eee));
        background: url(select2-spinner.gif) 100% no-repeat, -webkit-linear-gradient(center bottom, #fff 85%, #eee 99%);
        background: url(select2-spinner.gif) 100% no-repeat, -moz-linear-gradient(center bottom, #fff 85%, #eee 99%);
        background: url(select2-spinner.gif) 100% no-repeat, linear-gradient(top, #fff 85%, #eee 99%)
    }

    .select2-container-active .select2-choice, .select2-container-active .select2-choices {
        border: 1px solid #5897fb;
        outline: 0;
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
        box-shadow: 0 0 5px rgba(0, 0, 0, .3)
    }

    .select2-dropdown-open .select2-choice {
        border-bottom-color: transparent;
        -webkit-box-shadow: 0 1px 0 #fff inset;
        box-shadow: 0 1px 0 #fff inset;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        background-color: #eee;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #fff), color-stop(.5, #eee));
        background-image: -webkit-linear-gradient(center bottom, #fff 0, #eee 50%);
        background-image: -moz-linear-gradient(center bottom, #fff 0, #eee 50%);
        background-image: linear-gradient(top, #fff 0, #eee 50%)
    }

    .select2-dropdown-open.select2-drop-above .select2-choice, .select2-dropdown-open.select2-drop-above .select2-choices {
        border: 1px solid #5897fb;
        border-top-color: transparent;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(.5, #eee));
        background-image: -webkit-linear-gradient(center top, #fff 0, #eee 50%);
        background-image: -moz-linear-gradient(center top, #fff 0, #eee 50%);
        background-image: linear-gradient(bottom, #fff 0, #eee 50%)
    }

    .select2-dropdown-open .select2-choice .select2-arrow {
        background: 0 0;
        border-left: none;
        filter: none
    }

    .select2-dropdown-open .select2-choice .select2-arrow b {
        background-position: -18px 1px
    }

    .select2-results {
        max-height: 200px;
        padding: 0 0 0 4px;
        margin: 4px 4px 4px 0;
        position: relative;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-tap-highlight-color: transparent
    }

    .select2-results ul.select2-result-sub {
        margin: 0;
        padding-left: 0
    }

    .select2-results ul.select2-result-sub > li .select2-result-label {
        padding-left: 20px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 40px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 60px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 80px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 100px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 110px
    }

    .select2-results ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub ul.select2-result-sub > li .select2-result-label {
        padding-left: 120px
    }

    .select2-results li {
        list-style: none;
        display: list-item;
        background-image: none
    }

    .select2-results li.select2-result-with-children > .select2-result-label {
        font-weight: 700
    }

    .select2-results .select2-result-label {
        padding: 3px 7px 4px;
        margin: 0;
        cursor: pointer;
        min-height: 1em;
        user-select: none
    }

    .select2-results .select2-highlighted {
        background: #3875d7;
        color: #fff
    }

    .select2-results li em {
        background: #feffde;
        font-style: normal
    }

    .select2-results .select2-highlighted em {
        background: 0 0
    }

    .select2-results .select2-highlighted ul {
        background: #fff;
        color: #000
    }

    .select2-results .select2-disabled, .select2-results .select2-no-results, .select2-results .select2-searching, .select2-results .select2-selection-limit {
        background: #f4f4f4;
        display: list-item
    }

    .select2-results .select2-disabled.select2-highlighted {
        color: #666;
        background: #f4f4f4;
        display: list-item;
        cursor: default
    }

    .select2-results .select2-disabled {
        cursor: default
    }

    .select2-results .select2-selected {
        display: none
    }

    .select2-more-results.select2-active {
        background: url(select2-spinner.gif) 100% no-repeat #f4f4f4
    }

    .select2-more-results {
        background: #f4f4f4;
        display: list-item
    }

    .select2-container.select2-container-disabled .select2-choice {
        background-color: #f4f4f4;
        background-image: none;
        border: 1px solid #ddd;
        cursor: default
    }

    .select2-container.select2-container-disabled .select2-choice .select2-arrow {
        background-color: #f4f4f4;
        background-image: none;
        border-left: 0
    }

    .select2-container.select2-container-disabled .select2-choice abbr {
        display: none
    }

    .select2-container-multi .select2-choices {
        height: auto !important;
        height: 1%;
        margin: 0;
        padding: 0;
        position: relative;
        border: 1px solid #aaa;
        cursor: text;
        overflow: hidden;
        background-color: #fff;
        background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(1%, #eee), color-stop(15%, #fff));
        background-image: -webkit-linear-gradient(top, #eee 1%, #fff 15%);
        background-image: -moz-linear-gradient(top, #eee 1%, #fff 15%);
        background-image: linear-gradient(top, #eee 1%, #fff 15%);
        min-height: 26px
    }

    .select2-locked {
        padding: 3px 5px !important
    }

    .select2-container-multi.select2-container-active .select2-choices {
        border: 1px solid #5897fb;
        outline: 0;
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, .3);
        box-shadow: 0 0 5px rgba(0, 0, 0, .3)
    }

    .select2-container-multi .select2-choices li {
        float: left;
        list-style: none
    }

    .select2-container-multi .select2-choices .select2-search-field {
        margin: 0;
        padding: 0;
        white-space: nowrap
    }

    .select2-container-multi .select2-choices .select2-search-field input {
        padding: 5px;
        margin: 1px 0;
        font-family: sans-serif;
        font-size: 100%;
        color: #666;
        outline: 0;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        background: 0 0 !important
    }

    .select2-container-multi .select2-choices .select2-search-field input.select2-active {
        background: url(select2-spinner.gif) 100% no-repeat #fff !important
    }

    .select2-default {
        color: #999 !important
    }

    .select2-container-multi .select2-choices .select2-search-choice {
        padding: 3px 5px 3px 18px;
        margin: 3px 0 3px 5px;
        position: relative;
        line-height: 13px;
        color: #333;
        cursor: default;
        border: 1px solid #aaa;
        border-radius: 3px;
        -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, .05);
        box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, .05);
        background-clip: padding-box;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #e4e4e4;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#f4f4f4', GradientType=0);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eee));
        background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
        background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
        background-image: linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%)
    }

    .select2-container-multi .select2-choices .select2-search-choice .select2-chosen {
        cursor: default
    }

    .select2-container-multi .select2-choices .select2-search-choice-focus {
        background: #d4d4d4
    }

    .select2-search-choice-close {
        display: block;
        width: 12px;
        height: 13px;
        position: absolute;
        right: 3px;
        top: 4px;
        font-size: 1px;
        outline: 0;
        background: url(select2.png) right top no-repeat
    }

    .select2-container-multi .select2-search-choice-close {
        left: 3px
    }

    .select2-container-multi .select2-choices .select2-search-choice .select2-search-choice-close:hover, .select2-container-multi .select2-choices .select2-search-choice-focus .select2-search-choice-close {
        background-position: right -11px
    }

    .select2-container-multi.select2-container-disabled .select2-choices {
        background-color: #f4f4f4;
        background-image: none;
        border: 1px solid #ddd;
        cursor: default
    }

    .select2-container-multi.select2-container-disabled .select2-choices .select2-search-choice {
        padding: 3px 5px;
        border: 1px solid #ddd;
        background-image: none;
        background-color: #f4f4f4
    }

    .select2-container-multi.select2-container-disabled .select2-choices .select2-search-choice .select2-search-choice-close {
        display: none;
        background: 0 0
    }

    .select2-result-selectable .select2-match, .select2-result-unselectable .select2-match {
        text-decoration: underline
    }

    .select2-offscreen, .select2-offscreen:focus {
        clip: rect(0 0 0 0) !important;
        width: 1px !important;
        height: 1px !important;
        border: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
        position: absolute !important;
        outline: 0 !important;
        left: 0 !important;
        top: 0 !important
    }

    .select2-display-none {
        display: none
    }

    .select2-measure-scrollbar {
        position: absolute;
        top: -10000px;
        left: -10000px;
        width: 100px;
        height: 100px;
        overflow: scroll
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 144dpi) {
        .select2-container .select2-choice .select2-arrow b, .select2-container .select2-choice abbr, .select2-search input, .select2-search-choice-close {
            background-image: url(select2x2.png) !important;
            background-repeat: no-repeat !important;
            background-size: 60px 40px !important
        }

        .select2-search input {
            background-position: 100% -21px !important
        }
    }

    .ui-select-highlight {
        font-weight: 700
    }

    .ui-select-offscreen {
        clip: rect(0 0 0 0) !important;
        width: 1px !important;
        height: 1px !important;
        border: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
        position: absolute !important;
        outline: 0 !important;
        left: 0 !important;
        top: 0 !important
    }

    .selectize-control.single > .selectize-input > input, .selectize-control > .selectize-dropdown {
        width: 100%
    }

    .ui-select-choices-row:hover {
        background-color: #f5f5f5
    }

    .ng-dirty.ng-invalid > a.select2-choice {
        border-color: #d44950
    }

    .select2-result-single {
        padding-left: 0
    }

    .select-locked > .ui-select-match-close, .select2-locked > .select2-search-choice-close {
        display: none
    }

    body > .select2-container.open {
        z-index: 9999
    }

    .ui-select-container.select2.direction-up .ui-select-match, .ui-select-container[theme=select2].direction-up .ui-select-match {
        border-radius: 0 0 4px 4px
    }

    .ui-select-container.select2.direction-up .ui-select-dropdown, .ui-select-container[theme=select2].direction-up .ui-select-dropdown {
        border-radius: 4px 4px 0 0;
        border-top-width: 1px;
        border-top-style: solid;
        box-shadow: 0 -4px 8px rgba(0, 0, 0, .25);
        margin-top: -4px
    }

    .ui-select-container.select2.direction-up .ui-select-dropdown .select2-search, .ui-select-container[theme=select2].direction-up .ui-select-dropdown .select2-search {
        margin-top: 4px
    }

    .ui-select-container.select2.direction-up.select2-dropdown-open .ui-select-match, .ui-select-container[theme=select2].direction-up.select2-dropdown-open .ui-select-match {
        border-bottom-color: #5897fb
    }

    .ui-select-container[theme=select2] .ui-select-dropdown .ui-select-search-hidden, .ui-select-container[theme=select2] .ui-select-dropdown .ui-select-search-hidden input {
        opacity: 0;
        height: 0;
        min-height: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    .selectize-input.selectize-focus {
        border-color: #007fbb !important
    }

    .selectize-control.multi > .selectize-input > input {
        margin: 0 !important
    }

    .ng-dirty.ng-invalid > div.selectize-input {
        border-color: #d44950
    }

    .ui-select-container[theme=selectize].direction-up .ui-select-dropdown {
        box-shadow: 0 -4px 8px rgba(0, 0, 0, .25);
        margin-top: -2px
    }

    .ui-select-container[theme=selectize] input.ui-select-search-hidden {
        opacity: 0;
        height: 0;
        min-height: 0;
        padding: 0;
        margin: 0;
        border: 0;
        width: 0
    }

    .btn-default-focus {
        color: #333;
        background-color: #ebebeb;
        border-color: #adadad;
        text-decoration: none;
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .ui-select-bootstrap .ui-select-toggle {
        position: relative
    }

    .ui-select-bootstrap .ui-select-toggle > .caret {
        position: absolute;
        height: 10px;
        top: 50%;
        right: 10px;
        margin-top: -2px
    }

    .input-group > .ui-select-bootstrap.dropdown {
        position: static
    }

    .input-group > .ui-select-bootstrap > input.ui-select-search.form-control {
        border-radius: 4px 0 0 4px
    }

    .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
        border-radius: 4px 0 0 4px !important
    }

    .ui-select-bootstrap .ui-select-search-hidden {
        opacity: 0;
        height: 0;
        min-height: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    .ui-select-bootstrap > .ui-select-match > .btn {
        text-align: left !important
    }

    .ui-select-bootstrap > .ui-select-match > .caret {
        position: absolute;
        top: 45%;
        right: 15px
    }

    .ui-select-bootstrap > .ui-select-choices, .ui-select-bootstrap > .ui-select-no-choice {
        width: 100%;
        height: auto;
        max-height: 200px;
        overflow-x: hidden;
        margin-top: -1px
    }

    body > .ui-select-bootstrap.open {
        z-index: 1000
    }

    .ui-select-multiple.ui-select-bootstrap {
        height: auto;
        padding: 3px 3px 0
    }

    .ui-select-multiple.ui-select-bootstrap input.ui-select-search {
        background-color: transparent !important;
        border: none;
        outline: 0;
        height: 1.666666em;
        margin-bottom: 3px
    }

    .ui-select-multiple.ui-select-bootstrap .ui-select-match .close {
        font-size: 1.6em;
        line-height: .75
    }

    .ui-select-multiple.ui-select-bootstrap .ui-select-match-item {
        outline: 0;
        margin: 0 3px 3px 0
    }

    .ui-select-multiple .ui-select-match-item {
        position: relative
    }

    .ui-select-multiple .ui-select-match-item.dropping .ui-select-match-close {
        pointer-events: none
    }

    .ui-select-multiple:hover .ui-select-match-item.dropping-before:before {
        content: "";
        position: absolute;
        top: 0;
        right: 100%;
        height: 100%;
        margin-right: 2px;
        border-left: 1px solid #428bca
    }

    .ui-select-multiple:hover .ui-select-match-item.dropping-after:after {
        content: "";
        position: absolute;
        top: 0;
        left: 100%;
        height: 100%;
        margin-left: 2px;
        border-right: 1px solid #428bca
    }

    .ui-select-bootstrap .ui-select-choices-row > span {
        cursor: pointer;
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }

    .ui-select-bootstrap .ui-select-choices-row > span:focus, .ui-select-bootstrap .ui-select-choices-row > span:hover {
        text-decoration: none;
        color: #262626;
        background-color: #f5f5f5
    }

    .ui-select-bootstrap .ui-select-choices-row.active > span {
        color: #fff;
        text-decoration: none;
        outline: 0;
        background-color: #428bca
    }

    .ui-select-bootstrap .ui-select-choices-row.active.disabled > span, .ui-select-bootstrap .ui-select-choices-row.disabled > span {
        color: #777;
        cursor: not-allowed;
        background-color: #fff
    }

    .ui-select-match.ng-hide-add, .ui-select-search.ng-hide-add {
        display: none !important
    }

    .ui-select-bootstrap.ng-dirty.ng-invalid > button.btn.ui-select-match {
        border-color: #d44950
    }

    .ui-select-container[theme=bootstrap].direction-up .ui-select-dropdown {
        box-shadow: 0 -4px 8px rgba(0, 0, 0, .25)
    }

    .ui-select-bootstrap .ui-select-match-text {
        width: 100%;
        padding-right: 1em
    }

    .ui-select-bootstrap .ui-select-match-text span {
        display: inline-block;
        width: 100%;
        overflow: hidden
    }

    .ui-select-bootstrap .ui-select-toggle > a.btn {
        position: absolute;
        height: 10px;
        right: 10px;
        margin-top: -2px
    }

    .ui-select-refreshing {
        position: absolute;
        right: 0;
        padding: 8px 27px;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased
    }

    @-webkit-keyframes ui-select-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes ui-select-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .ui-select-spin {
        -webkit-animation: ui-select-spin 2s infinite linear;
        animation: ui-select-spin 2s infinite linear
    }

    .ui-select-refreshing.ng-animate {
        -webkit-animation: none 0s
    }

    .select2-container--bootstrap {
        display: block
    }

    .select2-container--bootstrap .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        background-color: #fff;
        border: 1px solid #c2cad8;
        border-radius: 4px;
        color: #555;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        outline: 0
    }

    .select2-container--bootstrap .select2-search--dropdown .select2-search__field {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        background-color: #fff;
        border: 1px solid #c2cad8;
        border-radius: 4px;
        color: #555;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px
    }

    .select2-container--bootstrap .select2-search__field {
        outline: 0
    }

    .select2-container--bootstrap .select2-search__field::-webkit-input-placeholder {
        color: #999
    }

    .select2-container--bootstrap .select2-search__field:-moz-placeholder {
        color: #999
    }

    .select2-container--bootstrap .select2-search__field::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .select2-container--bootstrap .select2-search__field:-ms-input-placeholder {
        color: #999
    }

    .select2-container--bootstrap .select2-results__option[role=group] {
        padding: 0
    }

    .select2-container--bootstrap .select2-results__option[aria-disabled=true] {
        color: #777;
        cursor: not-allowed
    }

    .select2-container--bootstrap .select2-results__option[aria-selected=true] {
        background-color: #e1e5ec;
        color: #262626
    }

    .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
        background-color: #337ab7;
        color: #fff
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option {
        padding: 6px 12px
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__group {
        padding-left: 0
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -12px;
        padding-left: 24px
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -24px;
        padding-left: 36px
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -36px;
        padding-left: 48px
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -48px;
        padding-left: 60px
    }

    .select2-container--bootstrap .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -60px;
        padding-left: 72px
    }

    .select2-container--bootstrap .select2-results__group {
        color: #777;
        display: block;
        padding: 6px 12px;
        font-size: 12px;
        line-height: 1.42857;
        white-space: nowrap
    }

    .select2-container--bootstrap.select2-container--focus .select2-selection, .select2-container--bootstrap.select2-container--open .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(147, 161, 187, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(147, 161, 187, .6);
        -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        border-color: #93a1bb
    }

    .select2-container--bootstrap.select2-container--open .select2-selection .select2-selection__arrow b {
        border-color: transparent transparent #999 transparent;
        border-width: 0 4px 4px 4px
    }

    .select2-container--bootstrap.select2-container--open.select2-container--below .select2-selection {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-color: transparent
    }

    .select2-container--bootstrap.select2-container--open.select2-container--above .select2-selection {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
        border-top-color: transparent
    }

    .select2-container--bootstrap .select2-selection__clear {
        color: #999;
        cursor: pointer;
        float: right;
        font-weight: bold;
        margin-right: 10px
    }

    .select2-container--bootstrap .select2-selection__clear:hover {
        color: #333
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection {
        border-color: #c2cad8;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection, .select2-container--bootstrap.select2-container--disabled .select2-search__field {
        cursor: not-allowed
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection, .select2-container--bootstrap.select2-container--disabled .select2-selection--multiple .select2-selection__choice {
        background-color: #eef1f5
    }

    .select2-container--bootstrap.select2-container--disabled .select2-selection__clear, .select2-container--bootstrap.select2-container--disabled .select2-selection--multiple .select2-selection__choice__remove {
        display: none
    }

    .select2-container--bootstrap .select2-dropdown {
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        border-color: #93a1bb;
        overflow-x: hidden;
        margin-top: -1px
    }

    .select2-container--bootstrap .select2-dropdown--above {
        margin-top: 1px
    }

    .select2-container--bootstrap .select2-results > .select2-results__options {
        max-height: 200px;
        overflow-y: auto
    }

    .select2-container--bootstrap .select2-selection--single {
        height: 34px;
        line-height: 1.42857;
        padding: 6px 24px 6px 12px
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
        position: absolute;
        bottom: 0;
        right: 12px;
        top: 0;
        width: 4px
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
        border-color: #999 transparent transparent transparent;
        border-style: solid;
        border-width: 4px 4px 0 4px;
        height: 0;
        left: 0;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
        color: #555;
        padding: 0
    }

    .select2-container--bootstrap .select2-selection--single .select2-selection__placeholder {
        color: #999
    }

    .select2-container--bootstrap .select2-selection--multiple {
        min-height: 34px
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__rendered {
        box-sizing: border-box;
        display: block;
        line-height: 1.42857;
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
        width: 100%;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__placeholder {
        color: #999;
        float: left;
        margin-top: 5px
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
        color: #555;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin: 5px 0 0 6px;
        padding: 0 6px
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
        background: transparent;
        padding: 0 12px;
        height: 32px;
        line-height: 1.42857;
        margin-top: 0;
        min-width: 5em
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
        color: #999;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        margin-right: 3px
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #333
    }

    .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear {
        margin-top: 6px
    }

    .select2-container--bootstrap.input-sm, .select2-container--bootstrap.input-lg {
        border-radius: 0;
        font-size: 12px;
        height: auto;
        line-height: 1;
        padding: 0
    }

    .select2-container--bootstrap.input-sm .select2-selection--single, .input-group-sm .select2-container--bootstrap .select2-selection--single, .form-group-sm .select2-container--bootstrap .select2-selection--single {
        border-radius: 3px;
        font-size: 12px;
        height: 30px;
        line-height: 1.5;
        padding: 5px 22px 5px 10px
    }

    .select2-container--bootstrap.input-sm .select2-selection--single .select2-selection__arrow b, .input-group-sm .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b, .form-group-sm .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
        margin-left: -5px
    }

    .select2-container--bootstrap.input-sm .select2-selection--multiple, .input-group-sm .select2-container--bootstrap .select2-selection--multiple, .form-group-sm .select2-container--bootstrap .select2-selection--multiple {
        min-height: 30px
    }

    .select2-container--bootstrap.input-sm .select2-selection--multiple .select2-selection__choice, .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice, .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
        font-size: 12px;
        line-height: 1.5;
        margin: 4px 0 0 5px;
        padding: 0 5px
    }

    .select2-container--bootstrap.input-sm .select2-selection--multiple .select2-search--inline .select2-search__field, .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field, .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
        padding: 0 10px;
        font-size: 12px;
        height: 28px;
        line-height: 1.5
    }

    .select2-container--bootstrap.input-sm .select2-selection--multiple .select2-selection__clear, .input-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear, .form-group-sm .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear {
        margin-top: 5px
    }

    .select2-container--bootstrap.input-lg .select2-selection--single, .input-group-lg .select2-container--bootstrap .select2-selection--single, .form-group-lg .select2-container--bootstrap .select2-selection--single {
        border-radius: 6px;
        font-size: 18px;
        height: 46px;
        line-height: 1.33333;
        padding: 10px 31px 10px 16px
    }

    .select2-container--bootstrap.input-lg .select2-selection--single .select2-selection__arrow, .input-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow, .form-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow {
        width: 5px
    }

    .select2-container--bootstrap.input-lg .select2-selection--single .select2-selection__arrow b, .input-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b, .form-group-lg .select2-container--bootstrap .select2-selection--single .select2-selection__arrow b {
        border-width: 5px 5px 0 5px;
        margin-left: -5px;
        margin-left: -10px;
        margin-top: -2.5px
    }

    .select2-container--bootstrap.input-lg .select2-selection--multiple, .input-group-lg .select2-container--bootstrap .select2-selection--multiple, .form-group-lg .select2-container--bootstrap .select2-selection--multiple {
        min-height: 46px
    }

    .select2-container--bootstrap.input-lg .select2-selection--multiple .select2-selection__choice, .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice, .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
        font-size: 18px;
        line-height: 1.33333;
        border-radius: 4px;
        margin: 9px 0 0 8px;
        padding: 0 10px
    }

    .select2-container--bootstrap.input-lg .select2-selection--multiple .select2-search--inline .select2-search__field, .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field, .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-search--inline .select2-search__field {
        padding: 0 16px;
        font-size: 18px;
        height: 44px;
        line-height: 1.33333
    }

    .select2-container--bootstrap.input-lg .select2-selection--multiple .select2-selection__clear, .input-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear, .form-group-lg .select2-container--bootstrap .select2-selection--multiple .select2-selection__clear {
        margin-top: 10px
    }

    .select2-container--bootstrap.input-lg.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #999 transparent;
        border-width: 0 5px 5px 5px
    }

    .input-group-lg .select2-container--bootstrap.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #999 transparent;
        border-width: 0 5px 5px 5px
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--single {
        padding-left: 24px;
        padding-right: 12px
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--single .select2-selection__rendered {
        padding-right: 0;
        padding-left: 0;
        text-align: right
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--single .select2-selection__clear {
        float: left
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--single .select2-selection__arrow {
        left: 12px;
        right: auto
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--single .select2-selection__arrow b {
        margin-left: 0
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--multiple .select2-selection__choice, .select2-container--bootstrap[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder {
        float: right
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
        margin-left: 0;
        margin-right: 6px
    }

    .select2-container--bootstrap[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
        margin-left: 2px;
        margin-right: auto
    }

    .has-warning .select2-dropdown, .has-warning .select2-selection {
        border-color: #c29d0b
    }

    .has-warning .select2-container--focus .select2-selection, .has-warning .select2-container--open .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f4d03f;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f4d03f;
        border-color: #927608
    }

    .has-warning.select2-drop-active {
        border-color: #927608
    }

    .has-warning.select2-drop-active.select2-drop.select2-drop-above {
        border-top-color: #927608
    }

    .has-error .select2-dropdown, .has-error .select2-selection {
        border-color: #e73d4a
    }

    .has-error .select2-container--focus .select2-selection, .has-error .select2-container--open .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f2989f;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f2989f;
        border-color: #d71b29
    }

    .has-error.select2-drop-active {
        border-color: #d71b29
    }

    .has-error.select2-drop-active.select2-drop.select2-drop-above {
        border-top-color: #d71b29
    }

    .has-success .select2-dropdown, .has-success .select2-selection {
        border-color: #27a4b0
    }

    .has-success .select2-container--focus .select2-selection, .has-success .select2-container--open .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #60d2dc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #60d2dc;
        border-color: #1d7d86
    }

    .has-success.select2-drop-active {
        border-color: #1d7d86
    }

    .has-success.select2-drop-active.select2-drop.select2-drop-above {
        border-top-color: #1d7d86
    }

    .input-group .select2-container--bootstrap {
        display: table;
        table-layout: fixed;
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }

    .input-group.select2-bootstrap-prepend .select2-container--bootstrap .select2-selection {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .input-group.select2-bootstrap-append .select2-container--bootstrap .select2-selection {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .select2-bootstrap-append .select2-container--bootstrap, .select2-bootstrap-append .input-group-btn, .select2-bootstrap-append .input-group-btn .btn, .select2-bootstrap-prepend .select2-container--bootstrap, .select2-bootstrap-prepend .input-group-btn, .select2-bootstrap-prepend .input-group-btn .btn {
        vertical-align: top
    }

    .form-control.select2-hidden-accessible {
        position: absolute !important;
        width: 1px !important
    }

    .form-inline .select2-container--bootstrap {
        display: inline-block
    }

    #ngProgress {
        margin: 0;
        padding: 0;
        z-index: 99998;
        background-color: green;
        color: green;
        box-shadow: 0 0 10px 0;
        height: 2px;
        opacity: 0;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    #ngProgress-container {
        position: fixed;
        margin: 0;
        padding: 0;
        top: 0;
        left: 0;
        right: 0;
        z-index: 99999
    }

    .cfp-hotkeys-container {
        display: table !important;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        color: #333;
        font-size: 1em;
        background-color: rgba(255, 255, 255, .9)
    }

    .cfp-hotkeys-container.fade {
        z-index: -1024;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -moz-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    .cfp-hotkeys-container.fade.in {
        z-index: 10002;
        visibility: visible;
        opacity: 1
    }

    .cfp-hotkeys-title {
        font-weight: bold;
        text-align: center;
        font-size: 1.2em
    }

    .cfp-hotkeys {
        width: 100%;
        height: 100%;
        display: table-cell;
        vertical-align: middle
    }

    .cfp-hotkeys table {
        margin: auto;
        color: #333
    }

    .cfp-content {
        display: table-cell;
        vertical-align: middle
    }

    .cfp-hotkeys-keys {
        padding: 5px;
        text-align: right
    }

    .cfp-hotkeys-key {
        display: inline-block;
        color: #fff;
        background-color: #333;
        border: 1px solid #333;
        border-radius: 5px;
        text-align: center;
        margin-right: 5px;
        box-shadow: inset 0 1px 0 #666, 0 1px 0 #bbb;
        padding: 5px 9px;
        font-size: 1em
    }

    .cfp-hotkeys-text {
        padding-left: 10px;
        font-size: 1em
    }

    .cfp-hotkeys-close {
        position: fixed;
        top: 20px;
        right: 20px;
        font-size: 2em;
        font-weight: bold;
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        min-height: 45px;
        min-width: 45px;
        text-align: center
    }

    .cfp-hotkeys-close:hover {
        background-color: #fff;
        cursor: pointer
    }

    @media all and (max-width: 500px) {
        .cfp-hotkeys {
            font-size: .8em
        }
    }

    @media all and (min-width: 750px) {
        .cfp-hotkeys {
            font-size: 1.2em
        }
    }
</style>