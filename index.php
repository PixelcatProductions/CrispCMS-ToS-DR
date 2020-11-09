<?php

/*
 * Copyright 2020 Pixelcat Productions <support@pixelcatproductions.net>
 * @author 2020 Justin René Back <jback@pixelcatproductions.net>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once __DIR__ . "/pixelcatproductions/crisp.php";

echo $TwigTheme->render("views/frontpage.twig", array("PopularServices" => array(
        crisp\api\Phoenix::getService(182),
        crisp\api\Phoenix::getService(190),
        crisp\api\Phoenix::getService(194),
        crisp\api\Phoenix::getService(265),
        crisp\api\Phoenix::getService(222),
        crisp\api\Phoenix::getService(274),
        crisp\api\Phoenix::getService(1815),
        crisp\api\Phoenix::getService(314),
        crisp\api\Phoenix::getService(539),
        crisp\api\Phoenix::getService(324),
)));
