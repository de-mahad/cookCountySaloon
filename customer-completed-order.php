<?php
include 'email-functions.php';
$name;
$time;
$address;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="background: #FAFAFA; min-height: 100%">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII" />
    <meta name="viewport" content="width=device-width" />
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; box-sizing: border-box; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 22px; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important">
    <style type="text/css">

        body {
            width: 100% !important;
            min-width: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass {
            line-height: 100%;
        }

        #backgroundTable {
            margin: 0;
            padding: 0;
            width: 100% !important;
            line-height: 100% !important;
        }

        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
            width: auto;
            max-width: 100%;
            clear: both;
            display: block;
        }

        body {
            color: #1C232B;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: normal;
            padding: 0;
            margin: 0;
            text-align: left;
            line-height: 1.3;
        }

        body {
            font-size: 16px;
            line-height: 1.3;
        }

        a:hover {
            color: #1f54ed;
        }

        a:active {
            color: #1f54ed;
        }

        a:visited {
            color: #4E78F1;
        }

        h1 a:visited {
            color: #4E78F1;
        }

        h2 a:visited {
            color: #4E78F1;
        }

        h3 a:visited {
            color: #4E78F1;
        }

        h4 a:visited {
            color: #4E78F1;
        }

        h5 a:visited {
            color: #4E78F1;
        }

        h6 a:visited {
            color: #4E78F1;
        }

        table.button:hover table tr td a {
            color: #FFFFFF;
        }

        table.button:active table tr td a {
            color: #FFFFFF;
        }

        table.button table tr td a:visited {
            color: #FFFFFF;
        }

        table.button.tiny:hover table tr td a {
            color: #FFFFFF;
        }

        table.button.tiny:active table tr td a {
            color: #FFFFFF;
        }

        table.button.tiny table tr td a:visited {
            color: #FFFFFF;
        }

        table.button.small:hover table tr td a {
            color: #FFFFFF;
        }

        table.button.small:active table tr td a {
            color: #FFFFFF;
        }

        table.button.small table tr td a:visited {
            color: #FFFFFF;
        }

        table.button.large:hover table tr td a {
            color: #FFFFFF;
        }

        table.button.large:active table tr td a {
            color: #FFFFFF;
        }

        table.button.large table tr td a:visited {
            color: #FFFFFF;
        }

        table.button:hover table td {
            background: #1f54ed;
            color: #FFFFFF;
        }

        table.button:visited table td {
            background: #1f54ed;
            color: #FFFFFF;
        }

        table.button:active table td {
            background: #1f54ed;
            color: #FFFFFF;
        }

        table.button:hover table a {
            border: 0 solid #1f54ed;
        }

        table.button:visited table a {
            border: 0 solid #1f54ed;
        }

        table.button:active table a {
            border: 0 solid #1f54ed;
        }

        table.button.secondary:hover table td {
            background: #fefefe;
            color: #FFFFFF;
        }

        table.button.secondary:hover table a {
            border: 0 solid #fefefe;
        }

        table.button.secondary:hover table td a {
            color: #FFFFFF;
        }

        table.button.secondary:active table td a {
            color: #FFFFFF;
        }

        table.button.secondary table td a:visited {
            color: #FFFFFF;
        }

        table.button.success:hover table td {
            background: #009482;
        }

        table.button.success:hover table a {
            border: 0 solid #009482;
        }

        table.button.alert:hover table td {
            background: #ff6131;
        }

        table.button.alert:hover table a {
            border: 0 solid #ff6131;
        }

        table.button.warning:hover table td {
            background: #fcae1a;
        }

        table.button.warning:hover table a {
            border: 0px solid #fcae1a;
        }

        .thumbnail:hover {
            box-shadow: 0 0 6px 1px rgba(78, 120, 241, 0.5);
        }

        .thumbnail:focus {
            box-shadow: 0 0 6px 1px rgba(78, 120, 241, 0.5);
        }

        body.outlook p {
            display: inline !important;
        }

        body {
            font-weight: normal;
            font-size: 16px;
            line-height: 22px;
        }

        table.button.secondary:hover table td {
            background: #4E78F1;
            color: white;
        }

        table.button.secondary:hover table td a {
            color: white;
            border: 1px solid #4E78F1;
            box-sizing: border-box;
            height: 46px;
        }

        table.button.secondary:hover table td a p {
            color: white;
        }

        table.button.secondary:active table td a {
            color: white;
        }

        table.button.secondary:active table td a p {
            color: white;
        }

        table.button.secondary:visited table td a {
            color: #4E78F1;
        }

        table.button.secondary:visited table td a p {
            color: #4E78F1;
        }

        @media only screen and (max-width: 596px) {
            .small-float-center {
                margin: 0 auto !important;
                float: none !important;
                text-align: center !important;
            }

            .small-text-center {
                text-align: center !important;
            }

            .small-text-left {
                text-align: left !important;
            }

            .small-text-right {
                text-align: right !important;
            }

            .hide-for-large {
                display: block !important;
                width: auto !important;
                overflow: visible !important;
                max-height: none !important;
                font-size: inherit !important;
                line-height: inherit !important;
            }

            table.body table.container .hide-for-large {
                display: table !important;
                width: 100% !important;
            }

            table.body table.container .row.hide-for-large {
                display: table !important;
                width: 100% !important;
            }

            table.body table.container .callout-inner.hide-for-large {
                display: table-cell !important;
                width: 100% !important;
            }

            table.body table.container .show-for-large {
                display: none !important;
                width: 0;
                mso-hide: all;
                overflow: hidden;
            }

            table.body img {
                width: auto;
                height: auto;
            }

            table.body center {
                min-width: 0 !important;
            }

            table.body .container {
                width: 95% !important;
            }

            table.body .columns {
                height: auto !important;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding-left: 16px !important;
                padding-right: 16px !important;
            }

            table.body .column {
                height: auto !important;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding-left: 16px !important;
                padding-right: 16px !important;
            }

            table.body .columns .column {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.body .columns .columns {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.body .column .column {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.body .column .columns {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.body .collapse .columns {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.body .collapse .column {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            td.small-1 {
                display: inline-block !important;
                width: 8.333333% !important;
            }

            th.small-1 {
                display: inline-block !important;
                width: 8.333333% !important;
            }

            td.small-2 {
                display: inline-block !important;
                width: 16.666666% !important;
            }

            th.small-2 {
                display: inline-block !important;
                width: 16.666666% !important;
            }

            td.small-3 {
                display: inline-block !important;
                width: 25% !important;
            }

            th.small-3 {
                display: inline-block !important;
                width: 25% !important;
            }

            td.small-4 {
                display: inline-block !important;
                width: 33.333333% !important;
            }

            th.small-4 {
                display: inline-block !important;
                width: 33.333333% !important;
            }

            td.small-5 {
                display: inline-block !important;
                width: 41.666666% !important;
            }

            th.small-5 {
                display: inline-block !important;
                width: 41.666666% !important;
            }

            td.small-6 {
                display: inline-block !important;
                width: 50% !important;
            }

            th.small-6 {
                display: inline-block !important;
                width: 50% !important;
            }

            td.small-7 {
                display: inline-block !important;
                width: 58.333333% !important;
            }

            th.small-7 {
                display: inline-block !important;
                width: 58.333333% !important;
            }

            td.small-8 {
                display: inline-block !important;
                width: 66.666666% !important;
            }

            th.small-8 {
                display: inline-block !important;
                width: 66.666666% !important;
            }

            td.small-9 {
                display: inline-block !important;
                width: 75% !important;
            }

            th.small-9 {
                display: inline-block !important;
                width: 75% !important;
            }

            td.small-10 {
                display: inline-block !important;
                width: 83.333333% !important;
            }

            th.small-10 {
                display: inline-block !important;
                width: 83.333333% !important;
            }

            td.small-11 {
                display: inline-block !important;
                width: 91.666666% !important;
            }

            th.small-11 {
                display: inline-block !important;
                width: 91.666666% !important;
            }

            td.small-12 {
                display: inline-block !important;
                width: 100% !important;
            }

            th.small-12 {
                display: inline-block !important;
                width: 100% !important;
            }

            .columns td.small-12 {
                display: block !important;
                width: 100% !important;
            }

            .column td.small-12 {
                display: block !important;
                width: 100% !important;
            }

            .columns th.small-12 {
                display: block !important;
                width: 100% !important;
            }

            .column th.small-12 {
                display: block !important;
                width: 100% !important;
            }

            table.body td.small-offset-1 {
                margin-left: 8.333333% !important;
            }

            table.body th.small-offset-1 {
                margin-left: 8.333333% !important;
            }

            table.body td.small-offset-2 {
                margin-left: 16.666666% !important;
            }

            table.body th.small-offset-2 {
                margin-left: 16.666666% !important;
            }

            table.body td.small-offset-3 {
                margin-left: 25% !important;
            }

            table.body th.small-offset-3 {
                margin-left: 25% !important;
            }

            table.body td.small-offset-4 {
                margin-left: 33.333333% !important;
            }

            table.body th.small-offset-4 {
                margin-left: 33.333333% !important;
            }

            table.body td.small-offset-5 {
                margin-left: 41.666666% !important;
            }

            table.body th.small-offset-5 {
                margin-left: 41.666666% !important;
            }

            table.body td.small-offset-6 {
                margin-left: 50% !important;
            }

            table.body th.small-offset-6 {
                margin-left: 50% !important;
            }

            table.body td.small-offset-7 {
                margin-left: 58.333333% !important;
            }

            table.body th.small-offset-7 {
                margin-left: 58.333333% !important;
            }

            table.body td.small-offset-8 {
                margin-left: 66.666666% !important;
            }

            table.body th.small-offset-8 {
                margin-left: 66.666666% !important;
            }

            table.body td.small-offset-9 {
                margin-left: 75% !important;
            }

            table.body th.small-offset-9 {
                margin-left: 75% !important;
            }

            table.body td.small-offset-10 {
                margin-left: 83.333333% !important;
            }

            table.body th.small-offset-10 {
                margin-left: 83.333333% !important;
            }

            table.body td.small-offset-11 {
                margin-left: 91.666666% !important;
            }

            table.body th.small-offset-11 {
                margin-left: 91.666666% !important;
            }

            table.body table.columns td.expander {
                display: none !important;
            }

            table.body table.columns th.expander {
                display: none !important;
            }

            table.body .right-text-pad {
                padding-left: 10px !important;
            }

            table.body .text-pad-right {
                padding-left: 10px !important;
            }

            table.body .left-text-pad {
                padding-right: 10px !important;
            }

            table.body .text-pad-left {
                padding-right: 10px !important;
            }

            table.menu {
                width: 100% !important;
            }

            table.menu td {
                width: auto !important;
                display: inline-block !important;
            }

            table.menu th {
                width: auto !important;
                display: inline-block !important;
            }

            table.menu.vertical td {
                display: block !important;
            }

            table.menu.vertical th {
                display: block !important;
            }

            table.menu.small-vertical td {
                display: block !important;
            }

            table.menu.small-vertical th {
                display: block !important;
            }

            table.menu[align="center"] {
                width: auto !important;
            }

            table.button.small-expand {
                width: 100% !important;
            }

            table.button.small-expanded {
                width: 100% !important;
            }

            table.button.small-expand table {
                width: 100%;
            }

            table.button.small-expanded table {
                width: 100%;
            }

            table.button.small-expand table a {
                text-align: center !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.button.small-expanded table a {
                text-align: center !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            table.button.small-expand center {
                min-width: 0;
            }

            table.button.small-expanded center {
                min-width: 0;
            }

            table.body .container {
                width: 100% !important;
            }
        }

        @media only screen and (min-width: 732px) {
            table.body table.milkyway-email-card {
                width: 525px !important;
            }

            table.body table.emailer-footer {
                width: 525px !important;
            }
        }

        @media only screen and (max-width: 731px) {
            table.body table.milkyway-email-card {
                width: 320px !important;
            }

            table.body table.emailer-footer {
                width: 320px !important;
            }
        }

        @media only screen and (max-width: 320px) {
            table.body table.milkyway-email-card {
                width: 100% !important;
                border-radius: 0;
                box-sizing: none;
            }

            table.body table.emailer-footer {
                width: 100% !important;
                border-radius: 0;
                box-sizing: none;
            }
        }

        @media only screen and (max-width: 280px) {
            table.body table.milkyway-email-card .milkyway-content {
                width: 100% !important;
            }
        }

        @media (min-width: 596px) {
            .milkyway-header {
                width: 11%;
            }
        }

        @media (max-width: 596px) {
            .milkyway-header {
                width: 50%;
            }

            .emailer-footer .emailer-border-bottom {
                border-bottom: 0.5px solid #E2E5E7;
            }

            .emailer-footer .make-you-smile {
                margin-top: 24px;
            }

            .emailer-footer .make-you-smile .email-tag-line {
                width: 80%;
                position: relative;
                left: 10%;
            }

            .emailer-footer .make-you-smile .universe-address {
                margin-bottom: 10px !important;
            }

            .emailer-footer .make-you-smile .email-tag-line {
                margin-bottom: 10px !important;
            }

            .have-questions-text {
                width: 70%;
            }

            .hide-on-small {
                display: none;
            }

            .product-card-stacked-row .thumbnail-image {
                max-width: 32% !important;
            }

            .product-card-stacked-row .thumbnail-content p {
                width: 64%;
            }

            .welcome-subcontent {
                text-align: left;
                margin: 20px 0 10px;
            }

            .milkyway-title {
                padding: 16px;
            }

            .gdpr-host-notify .intro-subcontent {
                text-align: left;
                margin: 20px 0 10px;
            }

            .meta-data {
                text-align: center;
            }

            .label {
                text-align: center;
            }

            .host_ticket_fulfilled .pig_img {
                max-width: 50% !important;
                height: auto;
                margin: auto;
            }

            .welcome-email .wavey-background-subcontent {
                width: calc(100% - 32px);
            }
        }

        @media (min-width: 597px) {
            .emailer-footer .show-on-mobile {
                display: none;
            }

            .emailer-footer .emailer-border-bottom {
                border-bottom: none;
            }

            .have-questions-text {
                border-bottom: none;
            }

            .hide-on-large {
                display: none;
            }

            .milkyway-title {
                padding: 55px 55px 16px;
            }
        }

        @media only screen and (max-width: 290px) {
            table.container.your-tickets .tickets-container {
                width: 100%;
            }
        }
    </style>
    <table class="body" data-made-with-foundation="" style="background: #FAFAFA; border-collapse: collapse; border-spacing: 0; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%" bgcolor="#FAFAFA">
        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
            <td class="center" align="center" valign="top" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word">
                <center style="min-width: 580px; width: 100%">
                    <table class=" spacer  float-center" align="center" style="border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="header-spacer spacer  float-center" align="center" style="border-collapse: collapse; border-spacing: 0; float: none; line-height: 60px; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td height="16px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="header-spacer-bottom spacer  float-center" align="center" style="border-collapse: collapse; border-spacing: 0; float: none; line-height: 30px; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td height="16px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="milkyway-email-card container float-center" align="center" style="background: #502002; border-collapse: collapse; border-radius: 6px; border-spacing: 0; box-shadow: 0 1px 8px 0 rgba(28,35,43,0.15); float: none; margin: 0 auto; overflow: hidden; padding: 0; text-align: center; vertical-align: top; width: 580px" bgcolor="#FFFFFF">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                    <table class=" spacer " style="background-color: #502002; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                        <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                <td height="30px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 30px; font-weight: normal; hyphens: none; line-height: 30px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="milkyway-content flash-info row" style="background-color: #502002; border-collapse: collapse; border-spacing: 0; color: #6F7881; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                        <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                <div class="flash_message">
                                                                    <img src="https://ccs.meteorco.de/wp-content/uploads/2021/09/cropped-cropped-cooklogo_HQ2.png" alt="">
                                                                </div>
                                                            </th>
                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="milkyway-email order-confirmation-email container" align="center" style="background: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px" bgcolor="#FFFFFF">
                                        <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td height="40px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 40px; font-weight: normal; hyphens: none; line-height: 40px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                <h1 class="welcome-header" style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 600; hyphens: none; line-height: 30px; margin: 0 0 24px; padding: 0; text-align: center !important; width: 100%; word-wrap: normal" align="center">
                                                                                    <?php echo $order->get_billing_first_name();
                                                                                    ?>
                                                                                    <br>

                                                                                </h1>
                                                                                <h4>
                                                                                    Thank You For supporting local.
                                                                                </h4>
                                                                                <?php if (ticket($order)) {
                                                                                ?>
                                                                                    <h5>These tickets are valid for entry into Cook County Saloon on <?php echo $time ?>. Seating is first-come, first-serve unless VIP table experience has been added, or specific tickets tickets include table access.</h5>

                                                                                <?php
                                                                                } ?>

                                                                            </th>
                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                        </tr>
                                                                    </table>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="event-details space-darker-bkg container" align="center" style="background-color: #F5F5F5 !important; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 100% !important" bgcolor="#F5F5F5">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <table class="large_image row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class="full-width-image small-12 large-12 columns first last" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <!-- DESKTOP ITEM DESCRIPTION AND PRICE HEADER -->
                                                                                    <table cellpadding="0" cellspacing="0" border="0" role="presentation" align="center" style="width: 80%; max-width: 480px;" class="hide">
                                                                                        <tr>
                                                                                            <td align="center" style="width: 170px;"></td>
                                                                                            <td align="left" style="font-size:16px; line-height:24px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;">
                                                                                                Description
                                                                                            </td>
                                                                                            <td align="right" style="font-size:16px; line-height:24px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;">
                                                                                                Price
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <table cellpadding="0" cellspacing="0" border="0" bgcolor="#D8D8D8" style="width: 92%; max-width: 550px;">
                                                                                        <tr>
                                                                                            <td style="line-height:1px; font-size:1px; mso-line-height-rule:exactly;">&nbsp;</td>
                                                                                        </tr>
                                                                                    </table>

                                                                                    <!-- 
        BOOK ROW 
        Hide everything between this comment and "END BOOK ROW" if no credit used to purchase book
    -->
                                                                                    <div style="font-size:1px;line-height:30px;mso-line-height-rule:exactly;">&nbsp;</div>
                                                                                    <table cellpadding="0" cellspacing="0" border="0" role="presentation" align="center" style="width: 80%; max-width: 480px;" class="width92p">
                                                                                        <?php
                                                                                        foreach ($order->get_items() as $key => $value) {
                                                                                            $product = wc_get_product($value['product_id']);
                                                                                            $image_id = $product->get_image_id();
                                                                                            $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');


                                                                                            $terms = wp_get_post_terms($value['product_id'], 'product_cat', array("fields" => "names"));


                                                                                        ?>
                                                                                            <tr>
                                                                                                <th align="center" style="vertical-align:top !important; width: 130px;" class="block width100p">
                                                                                                    <table cellpadding="0" cellspacing="0" border="0" role="presentation" align="center" style="width: 130px;">
                                                                                                        <?php
                                                                                                        if ($image_url) {
                                                                                                        ?>
                                                                                                            <tr>
                                                                                                                <td align="center" class="pb30">
                                                                                                                    <a href="#"><img src="<?php echo $image_url ?>" width="130" height="130" border="0" style="width: 130px; height: auto; display:block; font-family: Arial, sans-serif; font-size:12px; color:#141414;" alt="" /></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php
                                                                                                        }
                                                                                                        ?>
                                                                                                    </table>
                                                                                                </th>
                                                                                                <td style="width: 40px;" class="hide"></td>
                                                                                                <th align="left" style="vertical-align:top  !important;" class="block width100p">
                                                                                                    <table cellpadding="0" cellspacing="0" border="0" align="left" role="presentation" class="width100p aligncenter centertable">
                                                                                                        <tr>
                                                                                                            <td align="left" style="font-size:16px; line-height:24px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;" class="aligncenter">
                                                                                                                <strong>
                                                                                                                    <?php
                                                                                                                    echo $value['name'];
                                                                                                                    ?>

                                                                                                                </strong>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td align="left" class="aligncenter">
                                                                                                                <table cellpadding="0" cellspacing="0" border="0" role="presentation" style="width: 200px;" class="width92p centertable">
                                                                                                                    <tr>
                                                                                                                        <td align="left" style="padding-top: 5px; padding-bottom: 10px; font-size:12px; line-height:16px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;" class="aligncenter">

                                                                                                                            <!-- WRITER -->
                                                                                                                            <?php if (strcmp(strtolower($terms[0]), "tickets") == 0) {
                                                                                                                                $name = get_field('event_name', $value['product_id']);
                                                                                                                                $time = get_field('event_time', $value['product_id']);
                                                                                                                                $address = get_field('event_address', $value['product_id']);
                                                                                                                            ?>
                                                                                                                                <strong>Event Name:</strong>
                                                                                                                            <?php
                                                                                                                                echo $name;
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <br />

                                                                                                                            <!-- VOICE -->

                                                                                                                            <?php if (strcmp(strtolower($terms[0]), "tickets") == 0) {
                                                                                                                            ?>
                                                                                                                                <strong>Event Date & Time:</strong>
                                                                                                                            <?php
                                                                                                                                echo $time;
                                                                                                                            }
                                                                                                                            ?>

                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </th>
                                                                                                <th align="right" style="vertical-align:top  !important;" class="block width100p">
                                                                                                    <table cellpadding="0" cellspacing="0" border="0" align="right" role="presentation" class="width100p aligncenter centertable">
                                                                                                        <tr>
                                                                                                            <td align="left" style="font-size:16px; line-height:24px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;" class="aligncenter">

                                                                                                                <!--[if !mso]>

<!-->
                                                                                                                <div class="show" style="display:none; float:left; overflow:hidden; width:0; max-height:0; line-height:0;">
                                                                                                                    <strong style="font-size:16px; line-height:24px; color:#141414; font-family: AudibleSansRg, Arial, sans-serif;">Price:</strong><br />
                                                                                                                </div>

                                                                                                                <!--<![endif]-->

                                                                                                                <!-- PRICE -->
                                                                                                                <?php echo '$';
                                                                                                                echo $value['subtotal'] ?>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </th>
                                                                                            </tr>
                                                                                        <?php
                                                                                        } ?>
                                                                                    </table>
                                                                                    <div style="font-size:1px;line-height:30px;mso-line-height-rule:exactly;">&nbsp;</div>
                                                                                    <table cellpadding="0" cellspacing="0" border="0" bgcolor="#D8D8D8" style="width: 92%; max-width: 550px;">
                                                                                        <tr>
                                                                                            <td style="line-height:1px; font-size:1px; mso-line-height-rule:exactly;">&nbsp;</td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <?php
                                                                    if (ticket($order) > 0) {
                                                                        # code...
                                                                    ?>

                                                                        <table class="milkyway-content space-darker-bkg container" align="center" style="background: none; background-color: #F5F5F5 !important; border-collapse: collapse; border-spacing: 0; hyphens: none; margin: auto; max-width: 100%; padding: 0; text-align: inherit; vertical-align: top; width: 280px !important" bgcolor="#F5F5F5" background="none">
                                                                            <tbody>
                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">


                                                                                        <table class="event-details-section row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 20px; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tbody>
                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                    <th class=" small-12 large-12 columns first last" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <th style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>

                                                                                                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD4AAABACAYAAABC6cT1AAAABGdBTUEAALGP
C/xhBQAABcxJREFUaAXtW11sFFUUPufOtFsIki3KAwQUELGGnwaSJvJgJPjz
ABITlSYGjKhPBlO2RKXbdsvYbXebQrethsSYEDVBNCLBYFAfWo0xMTbRaNQI
WBMQGv+IlvJjt52dOZ6Z0mV2em9teLE7nUl25853vjtzvnPu37Z3EKZ41NY1
P2cjxIBgHiB8NBv0WDpdf0FVfXc8uckmSrF9GX/6QMearpbESSU/0Vxp56Cb
77+OAH7SBO3JpPb2qvix+tYFQNbLAHQ/c/5EEO2d6cRBFd+Pox+QXdfGW560
yXrDa0PEz7rSTRu82HiZnVoHlOsjAn0c4/NAeVn5SsOoueTB3GI8nrr5H8id
BKL51204gjqulQXLMEgMjiS/ZH7VdT6ApsFjmda9R72YqixUBi9OZO/wXjtl
Iro3ZqSX+HHXZue2+0Q78KIhc/A+GX8Y7E2Fot27RMC2H5fxh6zkSr9oh2fZ
uEPGl2FTE46wWFZZM61FMpwxKU4kpDiLkOIcPDluyfkIclzm45SEI9GUuoTs
AdMVm5Jw4g49XQXcqF9SQS80Jm83c1DNPXkjITcfwju4rPkfwuH4m5vjqB/n
UT/Ko3OZH0fAywR01Y8zfw7z5/hx5g8zf8iPA2CE/SmX4CYg9XO982zr0YQ4
0tHa+MtEHt/BC8aMziiOXGq3CZ+WCfVyi6OMJiK9Go3cUm8YO694fc4LH8sy
neAI3+klBKKM8J0mtIcyrY1OS3APt4/X1aXLTcv+OJCiHZkEayzb+tAwDuS7
kys8i6OvcF9dPhaLgH4TrBoc/WvfuDp8vr51jWlb33JY8s1+3Bi0Mw/GOaTS
uzrb4j+LHFnbVKJ5dOxBFI/y+XtZEIQGj6DQ1/o/zD0i5SPG/dyxa0jK+Ozo
m1I+aNsV/K+cZSvPvp/L7M5qkiDnrgZ5LU0Pykgs9gQv+rfwTag23lzJlVYX
8BDPrK+sOF5dXW0V4HwRiycP8zJ3qxfn+w2XRCKH2o09A17cKfPAetUkew8/
o9RrQxKHOtMN3BoLD8N4/dRg9lw7owsLLXgk09p0lNfyxy5mk708Zm0otPMV
0gP8nXT6+K0TjAyQJtod0Y5t6YJoisvv5nksmkO3VSba4XSlE+8LxBZ+ihsU
Fj0kNHpCJtrh72tJ9DP/GZ5c3SnHaZJ8He9sS/Q4dv9hGE9l2R9eZ0A+iE7r
iEbuyThcw0AbBO3317t27erFXXUvueL8JG5iC7tSDb95ceenIGrWvPWrK06p
RBfweV0grMu3zdUWn3ac9dpk5dpMZhYOXlkxV4uekf2K89cxjE/1K6NfVHAz
uZBKNfzhte+Op1ZYZJ72Ym6Zg9ud3nuTUnhp2awF+4wXf59QsUiA2rr0chtG
+ye4e024O51NMM4AIBQ+A5JcIHHGZpzncflhZrOv8Yj/nyOxvPb/jxKY+XW5
zBulcJ78t8gqFAvG/k/q6oxt6qHwSdtFAI0zNuPKwY3/JdMIAib816N4km/P
JxsSKn+VwkvKIgeLfa3OfwBWCp+xTT0UruoLQcXDjAc1sypdYcZVkQkqHmY8
qJlV6QozropMUPEw40HNrEpXmHFVZIKKhxkPamZVusKMqyITVDzMeFAzq9IV
ZlwVmaDiYcaDmlmVrsBmXNdzk25R5X10cFEWFXMku1SGFwtm2/YSqa80plfw
voEBKQFopxwvDpTfSFL57+rVBeAnNtAqvxzeV7ptV10zaZo4oJWUnvXbp+O1
OWryi0jWMvYtxq+HPSzzEQX0OrhuAxzmc42MxDtat1uWxZ9hubnoUCQdtHcc
t0V3uqmPN8QeLzoNN+Iwwtv7Uw0/uMKdr9JI5FkWX7Bh90buO53r8BB/1nkf
dtxHdzrj7dS/Ch02B1j8OQ1LNntfAs7P45lk0zcoRBXvLf9gPCpBOHMy3ysp
m13Vka7/0atHOsnvbmi5m/iFVh7tNzJhEY/wUW+l6V3GQX4L4Tzv7+vVAd/q
aGv6Wubvv1W84tqfLbH2AAAAAElFTkSuQmCC" style="-ms-interpolation-mode: bicubic; clear: both; display: inline-block; height: auto; margin-right: 4px; max-height: 1em; max-width: 1em; outline: none; text-decoration: none; vertical-align: text-top; width: auto" />
                                                                                                                    <?php
                                                                                                                    echo $time;
                                                                                                                    ?>
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="5px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 5px; font-weight: normal; hyphens: none; line-height: 5px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                                <th class="expander" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="event-details-section row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 20px; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tbody>
                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                    <th class=" small-12 large-12 columns first last" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <th style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="5px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 5px; font-weight: normal; hyphens: none; line-height: 5px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <img class="icon" src="data:image/png;base64,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" style="-ms-interpolation-mode: bicubic; clear: both; display: inline-block; height: auto; margin-right: 4px; max-height: 1em; max-width: 1em; outline: none; text-decoration: none; vertical-align: text-top; width: auto" />
                                                                                                                    <a href="https://maps.google.com/maps?q=Paramount+Theatre%2C+2025+Broadway" style="color: #4E78F1; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none"><?php echo $address ?></a>
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="5px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 5px; font-weight: normal; hyphens: none; line-height: 5px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                                <th class="expander" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="event-details-section row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 20px; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tbody>
                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                    <th class=" small-12 large-12 columns first last" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <th style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="5px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 5px; font-weight: normal; hyphens: none; line-height: 5px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <img class="icon" src="data:image/png;base64,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
/U+i6bW9AAAAAElFTkSuQmCC" style="-ms-interpolation-mode: bicubic; clear: both; display: inline-block; height: auto; margin-right: 4px; max-height: 1em; max-width: 1em; outline: none; text-decoration: none; vertical-align: text-top; width: auto" />
                                                                                                                    <a target="_blank" href="https://www.universe.com/users/5RQDCM" style="color: #4E78F1; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none"><?php echo $name; ?></a>
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                                <th class="expander" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="your-tickets container" align="center" style="background: #FFFFFF; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px" bgcolor="#FFFFFF">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left"><?php if (ticket($order)) {
                                                                                                                                                                                                                                                                                                                echo 'Your ticket';
                                                                                                                                                                                                                                                                                                            } else echo 'Your Order QR'; ?></h3>
                                                                                                <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <td height="15px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; hyphens: none; line-height: 15px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="tickets-container row" style="border: 1px solid #e2e5e7; border-collapse: separate; border-radius: 5px; border-spacing: 0; display: table; margin: auto; max-width: 100% !important; padding: 0; position: relative; text-align: left; vertical-align: top; width: 290px">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class="ticket-item small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <table class="ticket-title row" style="background: #FAFAFA; border-bottom-color: #F5F5F5; border-bottom-style: solid; border-bottom-width: 1px; border-collapse: collapse; border-spacing: 0; border-top-left-radius: 5px; border-top-right-radius: 5px; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%" bgcolor="#FAFAFA">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <th class="ticket-title-content small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0 16px; text-align: left; width: 100%" align="left">
                                                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                        <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="16px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                            <!-- <h4 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">Hustle Con 2019</h4> -->
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="5px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 5px; font-weight: normal; hyphens: none; line-height: 5px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                        </th>
                                                                                                                        <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <table class="cost-item row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <th class="cost-item-content small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0 16px; text-align: left; width: 100%" align="left">
                                                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                        <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                            <small style="color: #6F7881; font-size: 14px; font-weight: normal; line-height: 20px">Name</small><br />
                                                                                                                            <b><?php echo $order->get_billing_first_name(); ?></b>
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="10px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; hyphens: none; line-height: 10px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                            <br />
                                                                                                                            <?php
                                                                                                                            if (ticket($order)) {
                                                                                                                            ?>
                                                                                                                                <small style="color: #6F7881; font-size: 14px; font-weight: normal; line-height: 20px">
                                                                                                                                    Ticket type
                                                                                                                                </small>
                                                                                                                                <br />
                                                                                                                                You're Early! 1-Day Ticket
                                                                                                                            <?php
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="10px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; hyphens: none; line-height: 10px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                            <center style="min-width: none !important; width: 100%">
                                                                                                                                <div>
                                                                                                                                    <?php echo WC_Order_Barcodes()->display_barcode($order->id); ?>
                                                                                                                                </div>
                                                                                                                            </center>
                                                                                                                            <!-- <small class="qr-code-ref" style="color: #6F7881; display: block; font-size: 12px; font-weight: normal; line-height: 20px; margin: auto; text-align: center">R6500600</small> -->
                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="8px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 8px; font-weight: normal; hyphens: none; line-height: 8px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>

                                                                                                                            <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tbody>
                                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                        <td height="8px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 8px; font-weight: normal; hyphens: none; line-height: 8px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                                    </tr>
                                                                                                                                </tbody>
                                                                                                                            </table>
                                                                                                                        </th>
                                                                                                                        <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="10px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; hyphens: none; line-height: 10px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                    <tbody>
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <td height="15px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; hyphens: none; line-height: 15px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </th>
                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                        </tr>
                                                                    </table>
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="listing-location space-darker-bkg container" align="center" style="background-color: #F5F5F5 !important; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 100% !important" bgcolor="#F5F5F5">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <?php
                                                                    if (ticket($order)) {
                                                                    ?>
                                                                        <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                            <tbody>
                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                        <tbody>
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">Event location</h3>
                                                                                                </th>
                                                                                                <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                        <table class="milkyway-content space-darker-bkg container" align="center" style="background: none; background-color: #F5F5F5 !important; border-collapse: collapse; border-spacing: 0; hyphens: none; margin: auto; max-width: 100%; padding: 0; text-align: inherit; vertical-align: top; width: 280px !important" bgcolor="#F5F5F5" background="none">
                                                                            <tbody>
                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                                        <table class="event-details-section row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tbody>
                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <th style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                    <span class="dark" style="color: #1C232B"><?php echo $address ?></span>
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="10px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; hyphens: none; line-height: 10px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                                <th class="expander" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <table class="event-details-section row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tbody>
                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                <th style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                        <tbody>
                                                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                <td height="10px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; hyphens: none; line-height: 10px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <a href="https://www.google.com/maps/place/Cook+County+Saloon/@53.5165,-113.4951,15z/data=!4m5!3m4!1s0x0:0x709cb7eccc65bbb4!8m2!3d53.5165002!4d-113.4950146" style="color: #4E78F1; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none">Get directions</a>
                                                                                                                </th>
                                                                                                                <th class="expander" style="color: #6F7881 !important; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    <?php
                                                                                }
                                                                                    ?>
                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tbody>
                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                                        <tbody>
                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th class="google-calendar-button small-12 large-5 columns first" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 225.6666666667px" align="left">
                                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                <table class="cta-text radius button" style="border-collapse: collapse; border-spacing: 0; font-size: 14px; font-weight: 400; line-height: 0; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                        <td style="-moz-hyphens: none; -webkit-hyphens: none; background: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                    <!-- <td style="-moz-hyphens: none; -webkit-hyphens: none; background: #4E78F1 none; border: 2px none #4e78f1; border-collapse: collapse !important; border-radius: 6px; color: #FFFFFF; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" bgcolor="#4E78F1" valign="top"><a href="#" style="background: white; border: 1px solid #e2e5e7; border-radius: 6px; box-sizing: border-box; color: #1C232B; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 12px; text-align: center; text-decoration: none; text-transform: none; width: 100%">Google Calendar</a></td> -->
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </th>
                                                                                                <th class="hide-for-small small-1 large-1 columns" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 32.3333333333px" align="left">
                                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left"></th>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </th>
                                                                                                <th class="yahoo-calendar-button small-12 large-5 columns last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 225.6666666667px" align="left">
                                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                                <table class="cta-text radius button" style="border-collapse: collapse; border-spacing: 0; font-size: 14px; font-weight: 400; line-height: 0; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                    <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                        <td style="-moz-hyphens: none; -webkit-hyphens: none; background: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                                                                <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                                                    <!-- <td style="-moz-hyphens: none; -webkit-hyphens: none; background: #4E78F1 none; border: 2px none #4e78f1; border-collapse: collapse !important; border-radius: 6px; color: #FFFFFF; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" bgcolor="#4E78F1" valign="top"><a href="#" style="background: white; border: 1px solid #e2e5e7; border-radius: 6px; box-sizing: border-box; color: #1C232B; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 12px; text-align: center; text-decoration: none; text-transform: none; width: 100%">Yahoo Calendar</a></td> -->
                                                                                                                                </tr>
                                                                                                                            </table>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </table>
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tbody>
                                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <td height="25px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 25px; font-weight: normal; hyphens: none; line-height: 25px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="milkyway-content payment-information container" align="center" style="background: #FFFFFF; border-collapse: collapse; border-spacing: 0; hyphens: none; margin: auto; max-width: 100%; padding: 0; text-align: inherit; vertical-align: top; width: 280px !important" bgcolor="#FFFFFF">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class=" row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">Payment Information</h3>
                                                                                            </th>
                                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class=" row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-7 large-7 columns first" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 322.3333333333px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <small style="color: #6F7881; font-size: 14px; font-weight: normal; line-height: 20px">Order Item</small>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class="text-right small-5 large-5 columns last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: right; width: 225.6666666667px" align="right">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right" align="right">
                                                                                                <small style="color: #6F7881; font-size: 14px; font-weight: normal; line-height: 20px">Amount</small>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <?php
                                                                    foreach ($order->get_items() as $key => $value) {
                                                                    ?>
                                                                        <table class="line-item-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                            <tbody>
                                                                                <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-7 large-7 columns first" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0 auto; padding: 0; text-align: left; width: 322.3333333333px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <?php echo $value['name']; ?>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                    <th class="text-right small-5 large-5 columns last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0 auto; padding: 0; text-align: right; width: 225.6666666667px" align="right">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0; padding: 0; text-align: right" align="right">
                                                                                                    <?php echo '$';
                                                                                                    echo $value['subtotal'] ?>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>




                                                                    <?php   # code...
                                                                    }

                                                                    ?>

                                                                    <hr style="border-style: solid none none; border-top-color: #E2E5E7; border-top-width: 1px" />
                                                                    <table class="line-item-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-7 large-7 columns first" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0 auto; padding: 0; text-align: left; width: 322.3333333333px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                Total
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                                <th class="text-right small-5 large-5 columns last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0 auto; padding: 0; text-align: right; width: 225.6666666667px" align="right">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="height: 30px; line-height: 30px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 30px; line-height: 30px; margin: 0; padding: 0; text-align: right" align="right">
                                                                                                <?php echo '$';
                                                                                                echo $order->get_total(); ?>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <hr style="border-style: solid none none; border-top-color: #E2E5E7; border-top-width: 1px" />
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <?php
                                                                    if (ticket($order)) {
                                                                    ?>
                                                                        <table class="order-details-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                            <tbody>
                                                                                <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <strong><?php echo 'First Name:';
                                                                                                            echo $order->get_billing_first_name() ?></strong>
                                                                                                </th>
                                                                                                <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table class="order-details-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                            <tbody>
                                                                                <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <strong><?php echo 'Last Name:';
                                                                                                            echo $order->get_billing_last_name() ?></strong>
                                                                                                </th>
                                                                                                <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table class="order-details-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                            <tbody>
                                                                                <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <strong><?php echo 'Email: ';
                                                                                                            echo $order->get_billing_email() ?></strong>
                                                                                                </th>
                                                                                                <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <table class="order-details-row row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                                                            <tbody>
                                                                                <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                    <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                            <tr style="font-size: 15px; padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <?php echo $order->get_formatted_billing_address() ?>
                                                                                                </th>
                                                                                                <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="additional-info space-darker-bkg container" align="center" style="background-color: #F5F5F5 !important; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px" bgcolor="#F5F5F5">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <!-- <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <h1 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 600; line-height: 30px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">Additional Info</h1>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left"><strong>Do you realize what you&#8217;ve done!?</strong>
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">...probably the best decision of 2019. You&#8217;re coming to Hustle Con.
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">Congrats, salutations, and cheers! Our team is flipping out.
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">We couldn&#8217;t be more excited to have you onboard. It&#8217;s really early right now, but as we get closer to Hustle Con, we&#8217;ll keep you updated with the info you need to make the most of your time.
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">In the meantime, hotel and lodging information is on our <a href="https://hustlecon.com/faqs" rel="nofollow" target="_blank" style="color: #3A66E5; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none">FAQ page</a>. If you're local, The Paramount Theatre is located at 2025 Broadway Street, Oakland CA 94612. There are metered and paid lots all around the venue but your best bet is to take BART (a station across the street). If you're flying in, we've provided a list of hotels that are within a short walk or Uber ride<span> to the Paramount.</span>
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">Want to enjoy Hustle Con even more? Bring your friends! Let your network know about Hustle Con <a href="#" rel="nofollow" target="_blank" style="color: #3A66E5; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none">with this link</a>.
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">Oh, and be sure to <a href="https://hustlecon.com/?utm_source=universe&utm_medium=email&utm_campaign=HC19-general&utm_term=website&utm_content=attendee-confirm" rel="nofollow" target="_blank" style="color: #3A66E5; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none">check out the website</a> to find the most up-to-date information on the Hustle Con agenda, pre-event meet-ups, and other happenings.
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">Ok, talk to you soon!
                                                                                                </p>
                                                                                                <p style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 0 10px; padding: 0; text-align: left" align="left">- The Hustle Events Team<br />events@hustlecon.com
                                                                                                </p>
                                                                                            </th>
                                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table> -->
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="have-questions-wrapper white-bkg container" align="center" style="background-color: #FFFFFF !important; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 100% !important" bgcolor="#FFFFFF">
                                                        <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="milkyway-content row" style="border-collapse: collapse; border-spacing: 0; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <?php if (ticket($order)) {
                                                                                            ?>
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">IMPORTANT NOTE:</h3>
                                                                                                    <p>Must be legal drinking age. Must have proof of dual vaccination OR proof of negative covid test within 72 hours of arrival. </p>
                                                                                                </th>
                                                                                            <?php
                                                                                            } elseif (partyPackages($order)) {
                                                                                            ?>


                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">IMPORTANT NOTE:</h3>
                                                                                                    <p>Please bring this confirmation email as proof of your purchase. Another friendly reminder that you must show up BETWEEN 9:45PM and 10:15PM to secure your table reservation. If you show up early you must pay for tickets to the band (if we have one playing.) If you are late, you will forfeit your table. You will still receive your champagne or drink tickets upon arrival, but your table will not be available.</p>
                                                                                                </th>

                                                                                            <?php

                                                                                            } elseif (merchandise($order)) {
                                                                                            ?>
                                                                                                <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                    <h3 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 600; line-height: 26px; margin: 0 0 10px; padding: 0; text-align: left; word-wrap: normal" align="left">IMPORTANT NOTE:</h3>
                                                                                                    <p>Please bring your QR code to The General Store inside Cook County to receive your purchase.</p>
                                                                                                </th>
                                                                                            <?php
                                                                                            }

                                                                                            ?>
                                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                    <table class=" spacer " style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <td height="24px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; hyphens: none; line-height: 24px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class=" spacer  float-center" align="center" style="border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td height="20px" style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-weight: normal; hyphens: none; line-height: 20px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">&#160;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="emailer-footer container float-center" align="center" style="background-color: transparent !important; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px" bgcolor="transparent">
                        <tbody>
                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                <td style="-moz-hyphens: none; -webkit-hyphens: none; border-collapse: collapse !important; color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: none; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word" align="left" valign="top">
                                    <table class=" row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="em_wrapper" style="max-width:600px !important; width:600px; background-color:#f6f6f7 ; " width="600">
                                                        <tbody>
                                                            <tr>
                                                                <td height="10" style="height:10px; font-size:0px; line-height:0px; background-color:#f6f6f7; max-width:600px; ">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ft_13" align="center" style="font-family: 'Lato', sans-serif; font-weight:900; font-size:13px; line-height:14px; color:#2e343e;" valign="top"><a href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6mQ3p_8yV1-WJV7CgFqwW7HwBrD93C299W5z27Vf5Mn20GVZ7Ql399bDxsN3Dgz-Y92WGgW2ChpVK6_KMTJV6g61n28gWz6W9lV4rV7dCqSTN5HFpCxpBrfjW1DRg175-TF6SW80Fbx17NSnX7W60zBMX5fycq_W1rgTj-8Gnj50VZF_M29k6gNKN1_YBlHXVHHKW8jfdTB7JBgdHW486HfH3fCnRZW2m4bdp1cl5mxW2C2lYD6CPbxCW1r1XYZ7Nmw2BW5wdcWh7p-LZB3fZ81" style="color:#2e343e;text-decoration:none; text-transform: uppercase; font-weight:900; letter-spacing: 2px;" target="_blank" data-hs-link-id="0">FOLLOW &amp; SHARE</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="20" style="height:20px; font-size:0px; line-height:0px; background-color:#f6f6f7; max-width:600px; ">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" valign="top">
                                                                    <table width="70" border="0" cellspacing="0" cellpadding="0" align="center" style="width:70px;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td height="2" style="height:2px; font-size:0px; line-height:0px; background-color:#dddddd; max-width:70px; ">&nbsp;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="30" style="height:30px; font-size:0px; line-height:0px; background-color:#f6f6f7; max-width:600px; ">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" valign="top">
                                                                    <table bgcolor="#f6f6f7" class="em_wrapper" style="width: 600px;" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="em_h10" style="line-height: 0px; font-size: 0px; height: 12px;" height="12">&nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td bgcolor="#f6f6f7" align="center">
                                                                                    <table bgcolor="#f6f6f7" border="0" cellspacing="0" cellpadding="0" align="center">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="em_side" style="width: 38px;" width="38">&nbsp; </td>
                                                                                                <td style="width: 36px;" width="36" align="center" valign="top"> <a style="text-decoration: none;" href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6mw2-HvfV1-WJV7CgNFwW40Z3xl2Wty1JW7rh-402JVFRkW2rrk866v_g2rW3Z5f6D4SDvgKW6_xgd96J3KwrW6RCzXv79hdvVW9h2XvC7t8nbKW6d0tHh79Tk4RW4fK9bM1mnXdvW8p9F7_3RWFyDMyJ9ZCxj5bqW5m_ltb87hgrsW4bTtcY97dQlYW86XSs299KPlCW16p9258mn1zgW8QcRyR12TTypW1kDDCP7q2vS0W121l6N3jBD263j5G1" target="_blank" data-hs-link-id="0">
                                                                                                        <img style="display: block; font-family: Arial, sans-serif; font-size: 11px; line-height: 13px; color: #ffffff; max-width: 36px;" src="https://images.emailaptitude.com/Pic_Monkey/2020/07_July/07.20.20_Make-This-Thing/fb.png" border="0" alt="Facebook" width="36" height="36"> </a> </td>
                                                                                                <td class="em_side" style="width: 38px;" width="38">&nbsp; </td>
                                                                                                <td style="width: 36px;" width="36" align="center" valign="top"> <a style="text-decoration: none;" href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6mw2-HvfV1-WJV7CgQ1fV3xbWB6R2TlvW4_1D1M2j3HNXW51B6Ky3772RxW6BqjWz4LTPN8W8zHDrH6ngVBXW1yDctR3j9v9SW3kBXKQ5BGcsNW8-80YB4Dl6zPW1B3QQR5Fg0fNW133l413-bL4YW4ff6mV8wPmlsW7rM2mw3cP2K3W3BW5zd4wRK_7W1LrxYg5LtK1hW361Yh44r-dJDW8KbRcM21qyMSW8ycVv99flD-RW2CVxG05SmV333jYJ1" target="_blank" data-hs-link-id="0"> <img style="display: block; font-family: Arial, sans-serif; font-size: 11px; line-height: 13px; color: #ffffff; max-width: 36px;" src="https://images.emailaptitude.com/Pic_Monkey/2020/07_July/07.20.20_Make-This-Thing/ig.png" border="0" alt="Twitter" width="36" height="36"> </a> </td>
                                                                                                <td class="em_side" style="width: 38px;" width="38">&nbsp; </td>
                                                                                                <td style="width: 36px;" width="36" align="center" valign="top"> <a style="text-decoration: none;" href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6mw2-HvfV1-WJV7CgLT-W8F05nZ6JsDbFW40jFVZ18QTg4W5C_0ns2GSdz3W8Nwqlg1J075LW5DNZFk7VgM7LW5-MTkJ3wzs52W5RxQK14JrqHnW7gfwwb8Lsm6yVlMDWT5vrNkbW8C3sCt6J2Rl5W5SzdDq3J911DW6MXqtM50zYVlW3tVdHD5Qlf59W6Z6TSP8CXcZbW1N2rLn2xDz_TW5SGt4v6wdJKSW4xdx3b3WfkR-W6MyDl28rgLFJ3pZN1" target="_blank" data-hs-link-id="0"> <img style="display: block; font-family: Arial, sans-serif; font-size: 11px; line-height: 13px; color: #ffffff; max-width: 36px;" src="https://images.emailaptitude.com/Pic_Monkey/2020/07_July/07.20.20_Make-This-Thing/tw.png" border="0" alt="Instagram" width="36" height="36"> </a> </td>
                                                                                                <td class="em_side" style="width: 38px;" width="38">&nbsp; </td>
                                                                                                    
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="em_h10" style="line-height: 0px; font-size: 0px; height: 12px;" height="12">&nbsp;
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="40" style="height:40px; font-size:0px; line-height:0px; background-color:#f6f6f7; max-width:600px; ">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <!--=== // social section=== -->

                                            <!--===footer section=== -->
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table bgcolor="#502002" align="center" border="0" cellpadding="0" cellspacing="0" class="em_wrapper" style="width:600px;" width="600">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="top">
                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="em_wrapper" style="width:600px;" width="600">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="em_height" height="50" style="font-size:1px; line-height:1px; height:50px;"></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="ft_13" align="center" style="font-family: 'Lato', sans-serif; font-weight:400; font-size:13px; line-height:22px; color:#f6f6f7; text-decoration:none;" valign="top">
                                                                                    <br>
                                                                                    1505 5th Avenue&nbsp;&nbsp;|&nbsp;&nbsp;Seattle,
                                                                                    WA&nbsp;98101
                                                                                    <br>
                                                                                    Our app is available on the
                                                                                    <a href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6mQ2-HvyV1-WJV7CgQYBW7YJFnj8lkFMfW7CkGb33z1scxW7f3cp94wMWXdN3qgzjmYG2VxW1PdKn_1ykkw5W3BNMF55Q9br6W6XM_YN2knlC_W4Kk0Kg2vdq67W1mf9W35mvHNVW1n94H693mgZ_W7RnZVl7LVQTsW8hfbdY8RHK-lN5KFY-MND0VZW4t_Blg5sy6JkN4sjzYDT_8rNW1l9K6T62dkD5W3s3H026Hb_HZW9gWp7h96pjMYN20VP60CrKfVV5Lpcm5pg2qh37Ss1" style="text-decoration:underline; color:#f6f6f7;font-weight:700;" target="_blank" data-hs-link-id="0">APP
                                                                                        STORE</a> or <a href="https://mail.picmonkey.com/e2t/tc/VXjJWS91dbNXW3Pn8d22tRr9vW8pQGPD4jt8sWN63y6n52-HvSV1-WJV7CgzPTVkcnR06yD5ZjW5_7Q2X7xsShjW60qtXm3t1fYMW2sdQHZ3Pgg7gW5rzPWD6hb7PKW2KrXN56Dk7MkW6vB_1y8D0XJjW5VsVf05P2ZvWN57PlNHRCjMHW1tF8GH88CZ33N2385c42H5WDW5mrPDg56ylH_W8qKjZy6nwgPtW2Dsmdf8zSC-RW21Qnxt8yjlt7N7dl6zpFMKzJW2CG6m74PJfyyW2KZQLM7pjvWsW6Rlg8l5KXFGDW34SblK40q59TN9k7K8crzydCVyQm5d13D8gt2zT1" style="text-decoration:underline; color:#f6f6f7;font-weight:700;" target="_blank" data-hs-link-id="0">GOOGLE
                                                                                        PLAY</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="em_height" height="50" style="font-size:1px; line-height:1px; height:50px;"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table class="milkyway-content flash-info row" style="border-collapse: collapse; border-spacing: 0; color: #6F7881; display: table; hyphens: none; margin: auto; max-width: 100%; padding: 0; position: relative; text-align: left; vertical-align: top; width: 280px !important">
                                                                        <tbody>
                                                                            <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                <th class=" small-12 large-12 columns first last" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; text-align: left; width: 564px" align="left">
                                                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%">
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top" align="left">
                                                                                            <th style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left" align="left">
                                                                                                <div class="flash_message">
                                                                                                    <img src="https://ccs.meteorco.de/wp-content/uploads/2021/09/cropped-cropped-cooklogo_HQ2.png" alt="" >
                                                                                                </div>
                                                                                            </th>
                                                                                            <th class="expander" style="color: #1C232B; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; visibility: hidden; width: 0" align="left"></th>
                                                                                        </tr>
                                                                                    </table>
                                                                                </th>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>
    </table>
</body>

</html>