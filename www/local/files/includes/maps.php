<?$APPLICATION->IncludeComponent(
    "bitrix:map.google.view",
    ".default",
    array(
        "API_KEY" => App::$config->apiKeyOtherOfficesMap,
        "CONTROLS" => array(
            0 => "SMALL_ZOOM_CONTROL",
            1 => "TYPECONTROL",
            2 => "SCALELINE",
        ),
        "INIT_MAP_TYPE" => "ROADMAP",
        "MAP_DATA" => "a:4:{s:10:\"google_lat\";d:48.981552997384;s:10:\"google_lon\";d:33.668085263255;s:12:\"google_scale\";i:7;s:10:\"PLACEMARKS\";a:6:{i:0;a:3:{s:4:\"TEXT\";s:114:\"Coffee Мachine Service  ###RN###г. Киев###RN###ул. Антоновича 172###RN###т. +380 (95) 284-50-00\";s:3:\"LON\";d:30.521539848537;s:3:\"LAT\";d:50.414903885939;}i:1;a:3:{s:4:\"TEXT\";s:131:\"Coffee Machine Service ###RN###г .Краматорск###RN###ул.Архипа Куинджи 1###RN###т. +380 ‎(50) 531-77-88\";s:3:\"LON\";d:37.588037248392;s:3:\"LAT\";d:48.756642573714;}i:2;a:3:{s:4:\"TEXT\";s:152:\"Coffee Machine Service###RN###г. Харьков###RN###ул. Тарасовская, 3###RN###т. +380 (57) 752-49-69###RN###т. ‎+380 (50) 605-00-10\";s:3:\"LON\";d:36.265306051521;s:3:\"LAT\";d:49.98400088866;}i:3;a:3:{s:4:\"TEXT\";s:140:\"Coffee Machine Service ###RN###г. Днепр###RN###пр. Гагарина 12###RN###т. +380 (50) 449-06-00###RN###т. +380 (67) 621-32-52\";s:3:\"LON\";d:35.058412579762;s:3:\"LAT\";d:48.449041579071;}i:4;a:3:{s:4:\"TEXT\";s:145:\"Coffee Machine Service###RN###г. Запорожье###RN###ул. Нижнеднепровская 6а, оф 11###RN###т. +38‎0 (67) 954-75-22\";s:3:\"LON\";d:35.109885331796;s:3:\"LAT\";d:47.839747189314;}i:5;a:3:{s:4:\"TEXT\";s:87:\"г. Одесса###RN###ул. Дворянская 12###RN###т. +38‎0 (67) 621-32-52\";s:3:\"LON\";d:30.728301791336776;s:3:\"LAT\";d:46.485684240080495;}}}",
        "MAP_HEIGHT" => "500",
        "MAP_ID" => $mapId,
        "MAP_WIDTH" => "100%",
        "OPTIONS" => array(
            0 => "ENABLE_DRAGGING",
            1 => "ENABLE_KEYBOARD",
        ),
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
);?>