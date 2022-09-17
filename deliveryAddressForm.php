<?php

class deliveryAddressForm {

    static function getCountries() {
        return array (
            'AF' => 'Afghanistan',
            'AX' => 'Åland Islands',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua & Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia & Herzegovina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'VG' => 'British Virgin Islands',
            'BN' => 'Brunei',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'BQ' => 'Caribbean Netherlands',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo - Brazzaville',
            'CD' => 'Congo - Kinshasa',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Côte d’Ivoire',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CW' => 'Curaçao',
            'CY' => 'Cyprus',
            'CZ' => 'Czechia',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'SZ' => 'Eswatini',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard & McDonald Islands',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong SAR China',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IM' => 'Isle of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Laos',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao SAR China',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar (Burma)',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'KP' => 'North Korea',
            'MK' => 'North Macedonia',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territories',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn Islands',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Réunion',
            'RO' => 'Romania',
            'RU' => 'Russia',
            'RW' => 'Rwanda',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'São Tomé & Príncipe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SX' => 'Sint Maarten',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia & South Sandwich Islands',
            'KR' => 'South Korea',
            'SS' => 'South Sudan',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'BL' => 'St. Barthélemy',
            'SH' => 'St. Helena',
            'KN' => 'St. Kitts & Nevis',
            'LC' => 'St. Lucia',
            'MF' => 'St. Martin',
            'PM' => 'St. Pierre & Miquelon',
            'VC' => 'St. Vincent & Grenadines',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard & Jan Mayen',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syria',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad & Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks & Caicos Islands',
            'TV' => 'Tuvalu',
            'UM' => 'U.S. Outlying Islands',
            'VI' => 'U.S. Virgin Islands',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VA' => 'Vatican City',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'WF' => 'Wallis & Futuna',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        );
    }

    static function print_JP_form() {
        print <<<HTML
        <form method="post" action="#">
        <div class="container">
            <div class="row">
                <div class="form-group mb-3">
                    <label for="firstname">Name</label>
                    <input id="firstname" class="form-control" placeholder="Your name here" type="text" name="firstname">
                </div>
                <div class="form-group mb-3">
                    <label for="lastname">Surname</label>
                    <input id="lastname" class="form-control"  placeholder="Your surname here" type="text" name="lastname">
                </div>
                <div class="form-group mb-3">
                    <label for="patronymic">Patronymic</label>
                    <input id="patronymic" class="form-control" placeholder="Your patronymic here" type="text" name="patronymic">
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control" placeholder="Your E-mail here" type="text" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input id="phone" class="form-control" placeholder="Your phone number here" type="text" name="phone">
                </div>
                <div class="form-group mb-3">
                    <label for="zipcode">Zip code</label>
                    <input id="zipcode" class="form-control" placeholder="Zip code" type="text" name="zipcode">
                </div>
                <div class="form-group mb-3">
                    <label for="prefecture">Prefecture</label>
                    <input id="prefecture" class="form-control" placeholder="Prefecture" type="text" name="prefecture">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" placeholder="Address" type="address" name="address">
                </div>
            </div>
        </div>
    </form>
    HTML;
    }

    static function print_MOS_form() {
        $date_time = date_create();
        for ($i=0; $i<10;$i++) {
            date_modify($date_time, "+1 day");
            $date[] = date_format($date_time, 'd-m-Y');
        }
        print <<<HTML
        <form method="post" action="#">
        <div class="container">
            <div class="row">
                <div class="form-group mb-3">
                    <label for="firstname">Name</label>
                    <input id="firstname" class="form-control" placeholder="Your name here" type="text" name="firstname">
                </div>
                <div class="form-group mb-3">
                    <label for="lastname">Surname</label>
                    <input id="lastname" class="form-control"  placeholder="Your surname here" type="text" name="lastname">
                </div>
                <div class="form-group mb-3">
                    <label for="patronymic">Patronymic</label>
                    <input id="patronymic" class="form-control" placeholder="Your patronymic here" type="text" name="patronymic">
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control" placeholder="Your E-mail here" type="text" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input id="phone" class="form-control" placeholder="Your phone number here" type="text" name="phone">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" placeholder="Address" type="address" name="address">
                </div>
                <div class="form-group mb-3">
                    <label for="date_select">Date</label>
                    <select id="date_select" class="form-select" name="date_select">
                        <option value=$date[0]>$date[0]</option>
                        <option value=$date[1]>$date[1]</option>
                        <option value=$date[2]>$date[2]</option>
                        <option value=$date[3]>$date[3]</option>
                        <option value=$date[4]>$date[4]</option>
                        <option value=$date[5]>$date[5]</option>
                        <option value=$date[6]>$date[6]</option>
                        <option value=$date[7]>$date[7]</option>
                        <option value=$date[8]>$date[8]</option>
                        <option value=$date[9]>$date[9]</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="time_select">Time</label>
                    <select id="time_select" class="form-select" name="time_select">
                        <option value="0">Any time</option>
                        <option value="1">9:00-12:00</option>
                        <option value="2">12:00-14:00</option>
                        <option value="3">14:00-18:00</option>
                        <option value="5">18:00-20:00</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
    HTML;
    }

    static function print_ALL_form() {
        $countries = self::getCountries();
        print <<<HTML
        <form method="post" action="#">
        <div class="container">
            <div class="row">
                <div class="form-group mb-3">
                    <label for="firstname">Name</label>
                    <input id="firstname" class="form-control" placeholder="Your name here" type="text" name="firstname">
                </div>
                <div class="form-group mb-3">
                    <label for="lastname">Surname</label>
                    <input id="lastname" class="form-control"  placeholder="Your surname here" type="text" name="lastname">
                </div>
                <div class="form-group mb-3">
                    <label for="patronymic">Patronymic</label>
                    <input id="patronymic" class="form-control" placeholder="Your patronymic here" type="text" name="patronymic">
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control" placeholder="Your E-mail here" type="text" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input id="phone" class="form-control" placeholder="Your phone number here" type="text" name="phone">
                </div>
                <div class="form-group mb-3">
                    <label for="country">Country</label>
                    <select id="country" class="form-select" name="country">
                        <option value='RU'>$countries[RU]</option>
                        <option value='JP'>$countries[JP]</option>
                        <option value='CN'>$countries[CN]</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="zipcode">Zip code</label>
                    <input id="zipcode" class="form-control" placeholder="Zip code" type="text" name="zipcode">
                </div>
                <div class="form-group mb-3">
                    <label for="region">State, region</label>
                    <input id="region" class="form-control" placeholder="State, region" type="text" name="region">
                </div>
                <div class="form-group mb-3">
                    <label for="town">Town</label>
                    <input id="town" class="form-control" placeholder="Town" type="text" name="town">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" placeholder="Address" type="address" name="address">
                </div>
            </div>
        </div>
    </form>
    HTML;
    }

    function getForm($form = "") {
        if ($form == "JAP") {
            self::print_JP_form();
        }
        else if ($form == "MOS") {
            self::print_MOS_form();
        }
        else {
            self::print_ALL_form();
        }
        
    }
}

?>