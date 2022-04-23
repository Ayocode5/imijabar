<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="HandheldFriendly" content="true">
    <title>Thank You</title>
    <link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021-dark.ico">
    <script type="text/javascript" src="https://cdn.jotfor.ms//js/prototype.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms//css/thankyou.css">
    <style type="text/css">
        body {
            background: rgb(89, 150, 236);
            font-family: Inter, sans-serif;
            font-size: 16px;
            color: #2C3345;
        }

        .form-all {
            background: rgb(248, 248, 248);
            max-width: 752px;
        }

        .thankyou-sub-text {
            color: #2C3345;
        }

        #footer {
            max-width: 752px;
        }

        .thankYouDownloadPDFWrapper {
            border-top: 1px solid rgb(89, 150, 236);
        }

        .ty-buttons.thankYouEditSubmission,
        .ty-buttons.thankYouDownloadPDF {
            color: #2C3345;
            background-color: rgb(248, 248, 248);
            border-color: #2C3345;
        }

        .ty-buttons.thankYouFillAgain {
            color: #2C3345;
            background-color: rgb(248, 248, 248);
            border-color: #2C3345;
        }

        @media print {
            .form-all {
                width: 752px;
            }

        }

    </style>
    <style type="text/css">
        .form-all {
            padding: 0 10px;
            padding-bottom: 30px;
        }

        .wrapper {
            display: flex;
            min-height: 370px;
            margin: 0 auto;
            justify-content: center;
            flex-direction: column;
        }

        .wrapper.isPDF {
            min-height: 250px;
        }

        div img {
            margin: 24px 0 0;
        }

        [class*="col-"] {
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        .col-1 img {
            width: 100%;
            max-width: 153px;
        }

        .col-1 {
            justify-content: center;
            align-items: center;
        }

        .col-2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }

        @media screen and (max-width: 480px) {
            .wrapper {
                display: inline;
                min-height: 470px;
                height: 100vh;
            }
        }

        div.wrapper .col-1 {
            background-size: ;
        }

    </style>
    <style type="text/css"></style>
</head>

<body class="thankyou">
    <div id="stage" class="form-all">
        <div class="wrapper isPDF">
            <div class="col-1"><img class="tyBgImage"
                    src="https://cdn.jotfor.ms/assets/img/thankYou/icons/icon1.png" alt=""></div>
            <div class="col-2">
                <p><strong><span style="font-size:24pt;font-family:helvetica, arial, sans-serif;">Terima
                            Kasih!</span></strong></p>
                <p style="text-align:center;"><span
                        style="font-family:helvetica, arial, sans-serif;font-size:14pt;">Formulir kamu telah berhasil
                        terdaftar,&nbsp;Untuk melanjutkan proses registrasi silahkan lakukan pembayaran biaya pembuatan
                        KIS (Kartu Izin Start) sebesar Rp.300.000, dan Melaporkan bukti transfer kepada Admin.</span>
                </p>
                <p style="text-align:center;"><span style="font-size:12pt;"><span
                            style="font-family:helvetica, arial, sans-serif;">Rekening BCA: 01234567 - Ikatan Motor
                            Indonesia (IMI) Jabar</span></span></p>
                <p style="text-align:center;"><span
                        style="font-family:helvetica, arial, sans-serif;font-size:12pt;">Whatsapp Admin IMI Jabar:
                        081234567890&nbsp;</span></p>
                <div class="nonEditableInvisable">
                    <div class="thankYouButtonWrapper notActive">
                        <div class="thankYouFillAgain thankYouFillAgainWrapper tyWrapper notActive newActionButtons">
                            <div class="thankyou-btn-wrapper"><a class="ty-buttons thankYouFillAgain"
                                    style="text-decoration:none;" href="/221005514058040"> Fill Again </a></div>
                            <div class="settingButonWrapper">&nbsp;</div>
                        </div>
                        <div
                            class="thankYouEditSubmission thankYouEditSubmissionWrapper tyWrapper notActive newActionButtons">
                            <div class="thankyou-btn-wrapper"><a class="ty-buttons thankYouEditSubmission"
                                    style="text-decoration:none;"
                                    href="https://www.jotform.com/edit/5262292452323833257" rel="nofollow"> Edit
                                    Submission </a></div>
                            <div class="settingButonWrapper">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nonEditableInvisable isFillAnotherForm notActive">&nbsp;</div>
        <div class="nonEditableInvisable isPDF active">
            <div class="settingButonWrapper">&nbsp;</div>
            </li>
            </ul>
        </div>
    </div>

    </div>
    <div id="footer" class="form-footer">
        <div class="thankyou-footer-wrapper">
        </div>
    </div>

    <script type="text/javascript">
        if (window.parent !== window) {
            var stageMarginTop = ($('stage')) ? parseInt($('stage').getStyle('marginTop')) : 0;
            var height = $$('body').first().getHeight() + (stageMarginTop * 2);
            window.parent.postMessage('setHeight:' + height + ':221005514058040', '*');
            window.parent.postMessage({
                action: 'submission-completed',
                formID: '221005514058040'
            }, '*');
        }
        // Prevent duplicate submissions caused by reloading thank you pages
        var origin = 'https://submit.jotform.com/';
        var url = origin + '221005514058040';
        // be sure of being same origin before using referrer
        if (document.referrer && document.referrer.indexOf(origin) !== -1) {
            url = document.referrer;
        }

        if (url.indexOf("/submit/221005514058040") !== -1) {
            url = url.replace("/submit/", "/");
        }

        if ('false' !== 'true') {
            window.history.replaceState("", "", url);
        }
        window.newThankYouPage = true;
        window.submissionID = '';
        window.formID = '221005514058040';
        var favicon = document.querySelector('link[rel="shortcut icon"]');
        window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
        if (favicon && window.isDarkMode) {
            favicon.href = favicon.href.replaceAll('favicon-2021-light.ico', 'favicon-2021-dark.ico');
        }
    </script>
    <script src="https://submit.jotform.com//js/includes/thankYouPageScripts.js"></script>


</body>

</html>
