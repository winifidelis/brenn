<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #ffffff;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: #74b49b;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/
        .btn {
            padding: 5px 20px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #74b49b;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black {
            border-radius: 0px;
            background: #000;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        .btn.btn-custom {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 12px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .5);
        }

        a {
            color: #74b49b;
        }

        p {
            margin-top: 0;
        }

        table {}

        /*LOGO*/

        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #000000;
            font-size: 20px;
            font-weight: 700;
            font-family: 'Playfair Display', sans-serif;
        }

        /*HERO*/
        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            width: 100%;
            background: #000000;
            z-index: -1;
            opacity: .2;
        }

        .hero .text {
            color: rgba(255, 255, 255, .9);
            max-width: 50%;
            margin: 0 auto 0;
        }

        .hero .text h2 {
            color: #fff;
            font-size: 34px;
            margin-bottom: 0;
            font-weight: 700;
            line-height: 1.4;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #74b49b;
        }

        /*SERVICES*/
        .services {}

        .text-services {
            padding: 10px 10px 0;
            text-align: center;
        }

        .text-services h3 {
            font-size: 18px;
            font-weight: 400;
        }

        .services-list {
            margin: 0 0 20px 0;
            width: 100%;
        }

        .services-list img {
            float: left;
        }

        .services-list h3 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .services-list p {
            margin: 0;
        }

        /*MINISTRY*/
        .text-ministry {
            padding: 10px 0;
            text-align: center;
            border-top: none;
        }

        .text-ministry h3 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .text-ministry h3 a {
            color: #000;
        }

        /*CHARITY*/
        .text-charity h2 {
            font-size: 22px;
            margin-bottom: 5px;
        }


        /*COUNTER*/
        .counter {
            width: 100%;
            position: relative;
            z-index: 0;
        }

        .counter .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            width: 100%;
            background: #000000;
            z-index: -1;
            opacity: .3;
        }

        .counter-text {
            text-align: center;
        }

        .counter-text .num {
            display: block;
            color: #ffffff;
            font-size: 34px;
            font-weight: 700;
        }

        .counter-text .name {
            display: block;
            color: rgba(255, 255, 255, .9);
            font-size: 13px;
        }


        /*HEADING SECTION*/
        .heading-section {}

        .heading-section h2 {
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #74b49b;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family:
                line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }


        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
            /*border: 1px solid #74b49b;*/
            padding: 10px;
            border-radius: 50%;
            background: rgba(0, 0, 0, .05);
        }

        /*FOOTER*/

        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }


        @media screen and (max-width: 500px) {}
    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #FFFFFF;">
    <center style="width: 100%; background-color: #ffffff;">
        <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td valign="top" class="bg_light" style="padding: .5em 2.5em 1em 2.5em;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="logo" style="text-align: center;">
                                    <h1><a href="#"><img src="https://makroservice.com.br/assets_site/assets/images/logoEmail.png" /></a></h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bg_white email-section" style="width: 100%;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td valign="middle" width="100%">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                        <tr>
                                            <td class="text-services" style="text-align: left; padding-right:25px;">
                                                <div class="heading-section">
                                                    <h2>Contato do site</h2>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Assunto</h3>
                                                        <p>{{$assunto}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Nome</h3>
                                                        <p>{{$nome}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Email</h3>
                                                        <p>{{$email}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Telefone</h3>
                                                        <p>{{$telefone}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Celular</h3>
                                                        <p>{{$celular}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Estado</h3>
                                                        <p>{{$estado}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Cidade</h3>
                                                        <p>{{$cidade}}</p>
                                                    </div>
                                                </div>
                                                <div class="services-list">
                                                    <div class="text">
                                                        <h3>Mensagem</h3>
                                                        <p>{{$mensagem}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end: tr -->
            </table>

        </div>
    </center>
</body>

</html>