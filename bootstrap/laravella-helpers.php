<?php
/**
 * Laravella CMS
 * File: laravella-helpers.php
 * Created by Elman (https://linkedin.com/in/huseyn0w)
 * Date: 22.07.2019
 */

use App\Http\Models\UserRoles;
use App\Http\Models\UserPermissions;
use App\Http\Models\User;
use App\Http\Models\CPanel\CPanelCategory;

function get_front_templates_array():array
{
    $folders_array = [];

    $dir = public_path().'\front';
    $array= scandir($dir);

    if($array)
    {
        unset($array[0]);
        unset($array[1]);
        $folders_array = $array;
    }

    return $folders_array;
}

function get_user_roles():object
{
    $roles = UserRoles::select('id', 'name')->get();

    return $roles;

}

function get_post_categories_list():object
{
    $roles = CPanelCategory::select('id', 'name')->get();

    return $roles;

}

function get_user_role_permissions()
{
    $role_permissions = UserPermissions::all();

    return $role_permissions;

}
function get_authors_list()
{
    $list = User::select('id', 'username')->get();

    return $list;
}

function get_countries_array():array
{
    $countries = array(
        array('code' => 'US', 'name' => 'United States'),
        array('code' => 'CA', 'name' => 'Canada'),
        array('code' => 'AF', 'name' => 'Afghanistan'),
        array('code' => 'AL', 'name' => 'Albania'),
        array('code' => 'DZ', 'name' => 'Algeria'),
        array('code' => 'AS', 'name' => 'American Samoa'),
        array('code' => 'AD', 'name' => 'Andorra'),
        array('code' => 'AO', 'name' => 'Angola'),
        array('code' => 'AI', 'name' => 'Anguilla'),
        array('code' => 'AQ', 'name' => 'Antarctica'),
        array('code' => 'AG', 'name' => 'Antigua and/or Barbuda'),
        array('code' => 'AR', 'name' => 'Argentina'),
        array('code' => 'AM', 'name' => 'Armenia'),
        array('code' => 'AW', 'name' => 'Aruba'),
        array('code' => 'AU', 'name' => 'Australia'),
        array('code' => 'AT', 'name' => 'Austria'),
        array('code' => 'AZ', 'name' => 'Azerbaijan'),
        array('code' => 'BS', 'name' => 'Bahamas'),
        array('code' => 'BH', 'name' => 'Bahrain'),
        array('code' => 'BD', 'name' => 'Bangladesh'),
        array('code' => 'BB', 'name' => 'Barbados'),
        array('code' => 'BY', 'name' => 'Belarus'),
        array('code' => 'BE', 'name' => 'Belgium'),
        array('code' => 'BZ', 'name' => 'Belize'),
        array('code' => 'BJ', 'name' => 'Benin'),
        array('code' => 'BM', 'name' => 'Bermuda'),
        array('code' => 'BT', 'name' => 'Bhutan'),
        array('code' => 'BO', 'name' => 'Bolivia'),
        array('code' => 'BA', 'name' => 'Bosnia and Herzegovina'),
        array('code' => 'BW', 'name' => 'Botswana'),
        array('code' => 'BV', 'name' => 'Bouvet Island'),
        array('code' => 'BR', 'name' => 'Brazil'),
        array('code' => 'IO', 'name' => 'British lndian Ocean Territory'),
        array('code' => 'BN', 'name' => 'Brunei Darussalam'),
        array('code' => 'BG', 'name' => 'Bulgaria'),
        array('code' => 'BF', 'name' => 'Burkina Faso'),
        array('code' => 'BI', 'name' => 'Burundi'),
        array('code' => 'KH', 'name' => 'Cambodia'),
        array('code' => 'CM', 'name' => 'Cameroon'),
        array('code' => 'CV', 'name' => 'Cape Verde'),
        array('code' => 'KY', 'name' => 'Cayman Islands'),
        array('code' => 'CF', 'name' => 'Central African Republic'),
        array('code' => 'TD', 'name' => 'Chad'),
        array('code' => 'CL', 'name' => 'Chile'),
        array('code' => 'CN', 'name' => 'China'),
        array('code' => 'CX', 'name' => 'Christmas Island'),
        array('code' => 'CC', 'name' => 'Cocos (Keeling) Islands'),
        array('code' => 'CO', 'name' => 'Colombia'),
        array('code' => 'KM', 'name' => 'Comoros'),
        array('code' => 'CG', 'name' => 'Congo'),
        array('code' => 'CK', 'name' => 'Cook Islands'),
        array('code' => 'CR', 'name' => 'Costa Rica'),
        array('code' => 'HR', 'name' => 'Croatia (Hrvatska)'),
        array('code' => 'CU', 'name' => 'Cuba'),
        array('code' => 'CY', 'name' => 'Cyprus'),
        array('code' => 'CZ', 'name' => 'Czech Republic'),
        array('code' => 'CD', 'name' => 'Democratic Republic of Congo'),
        array('code' => 'DK', 'name' => 'Denmark'),
        array('code' => 'DJ', 'name' => 'Djibouti'),
        array('code' => 'DM', 'name' => 'Dominica'),
        array('code' => 'DO', 'name' => 'Dominican Republic'),
        array('code' => 'TP', 'name' => 'East Timor'),
        array('code' => 'EC', 'name' => 'Ecudaor'),
        array('code' => 'EG', 'name' => 'Egypt'),
        array('code' => 'SV', 'name' => 'El Salvador'),
        array('code' => 'GQ', 'name' => 'Equatorial Guinea'),
        array('code' => 'ER', 'name' => 'Eritrea'),
        array('code' => 'EE', 'name' => 'Estonia'),
        array('code' => 'ET', 'name' => 'Ethiopia'),
        array('code' => 'FK', 'name' => 'Falkland Islands (Malvinas)'),
        array('code' => 'FO', 'name' => 'Faroe Islands'),
        array('code' => 'FJ', 'name' => 'Fiji'),
        array('code' => 'FI', 'name' => 'Finland'),
        array('code' => 'FR', 'name' => 'France'),
        array('code' => 'FX', 'name' => 'France, Metropolitan'),
        array('code' => 'GF', 'name' => 'French Guiana'),
        array('code' => 'PF', 'name' => 'French Polynesia'),
        array('code' => 'TF', 'name' => 'French Southern Territories'),
        array('code' => 'GA', 'name' => 'Gabon'),
        array('code' => 'GM', 'name' => 'Gambia'),
        array('code' => 'GE', 'name' => 'Georgia'),
        array('code' => 'DE', 'name' => 'Germany'),
        array('code' => 'GH', 'name' => 'Ghana'),
        array('code' => 'GI', 'name' => 'Gibraltar'),
        array('code' => 'GR', 'name' => 'Greece'),
        array('code' => 'GL', 'name' => 'Greenland'),
        array('code' => 'GD', 'name' => 'Grenada'),
        array('code' => 'GP', 'name' => 'Guadeloupe'),
        array('code' => 'GU', 'name' => 'Guam'),
        array('code' => 'GT', 'name' => 'Guatemala'),
        array('code' => 'GN', 'name' => 'Guinea'),
        array('code' => 'GW', 'name' => 'Guinea-Bissau'),
        array('code' => 'GY', 'name' => 'Guyana'),
        array('code' => 'HT', 'name' => 'Haiti'),
        array('code' => 'HM', 'name' => 'Heard and Mc Donald Islands'),
        array('code' => 'HN', 'name' => 'Honduras'),
        array('code' => 'HK', 'name' => 'Hong Kong'),
        array('code' => 'HU', 'name' => 'Hungary'),
        array('code' => 'IS', 'name' => 'Iceland'),
        array('code' => 'IN', 'name' => 'India'),
        array('code' => 'ID', 'name' => 'Indonesia'),
        array('code' => 'IR', 'name' => 'Iran (Islamic Republic of)'),
        array('code' => 'IQ', 'name' => 'Iraq'),
        array('code' => 'IE', 'name' => 'Ireland'),
        array('code' => 'IL', 'name' => 'Israel'),
        array('code' => 'IT', 'name' => 'Italy'),
        array('code' => 'CI', 'name' => 'Ivory Coast'),
        array('code' => 'JM', 'name' => 'Jamaica'),
        array('code' => 'JP', 'name' => 'Japan'),
        array('code' => 'JO', 'name' => 'Jordan'),
        array('code' => 'KZ', 'name' => 'Kazakhstan'),
        array('code' => 'KE', 'name' => 'Kenya'),
        array('code' => 'KI', 'name' => 'Kiribati'),
        array('code' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of'),
        array('code' => 'KR', 'name' => 'Korea, Republic of'),
        array('code' => 'KW', 'name' => 'Kuwait'),
        array('code' => 'KG', 'name' => 'Kyrgyzstan'),
        array('code' => 'LA', 'name' => 'Lao People\'s Democratic Republic'),
        array('code' => 'LV', 'name' => 'Latvia'),
        array('code' => 'LB', 'name' => 'Lebanon'),
        array('code' => 'LS', 'name' => 'Lesotho'),
        array('code' => 'LR', 'name' => 'Liberia'),
        array('code' => 'LY', 'name' => 'Libyan Arab Jamahiriya'),
        array('code' => 'LI', 'name' => 'Liechtenstein'),
        array('code' => 'LT', 'name' => 'Lithuania'),
        array('code' => 'LU', 'name' => 'Luxembourg'),
        array('code' => 'MO', 'name' => 'Macau'),
        array('code' => 'MK', 'name' => 'Macedonia'),
        array('code' => 'MG', 'name' => 'Madagascar'),
        array('code' => 'MW', 'name' => 'Malawi'),
        array('code' => 'MY', 'name' => 'Malaysia'),
        array('code' => 'MV', 'name' => 'Maldives'),
        array('code' => 'ML', 'name' => 'Mali'),
        array('code' => 'MT', 'name' => 'Malta'),
        array('code' => 'MH', 'name' => 'Marshall Islands'),
        array('code' => 'MQ', 'name' => 'Martinique'),
        array('code' => 'MR', 'name' => 'Mauritania'),
        array('code' => 'MU', 'name' => 'Mauritius'),
        array('code' => 'TY', 'name' => 'Mayotte'),
        array('code' => 'MX', 'name' => 'Mexico'),
        array('code' => 'FM', 'name' => 'Micronesia, Federated States of'),
        array('code' => 'MD', 'name' => 'Moldova, Republic of'),
        array('code' => 'MC', 'name' => 'Monaco'),
        array('code' => 'MN', 'name' => 'Mongolia'),
        array('code' => 'MS', 'name' => 'Montserrat'),
        array('code' => 'MA', 'name' => 'Morocco'),
        array('code' => 'MZ', 'name' => 'Mozambique'),
        array('code' => 'MM', 'name' => 'Myanmar'),
        array('code' => 'NA', 'name' => 'Namibia'),
        array('code' => 'NR', 'name' => 'Nauru'),
        array('code' => 'NP', 'name' => 'Nepal'),
        array('code' => 'NL', 'name' => 'Netherlands'),
        array('code' => 'AN', 'name' => 'Netherlands Antilles'),
        array('code' => 'NC', 'name' => 'New Caledonia'),
        array('code' => 'NZ', 'name' => 'New Zealand'),
        array('code' => 'NI', 'name' => 'Nicaragua'),
        array('code' => 'NE', 'name' => 'Niger'),
        array('code' => 'NG', 'name' => 'Nigeria'),
        array('code' => 'NU', 'name' => 'Niue'),
        array('code' => 'NF', 'name' => 'Norfork Island'),
        array('code' => 'MP', 'name' => 'Northern Mariana Islands'),
        array('code' => 'NO', 'name' => 'Norway'),
        array('code' => 'OM', 'name' => 'Oman'),
        array('code' => 'PK', 'name' => 'Pakistan'),
        array('code' => 'PW', 'name' => 'Palau'),
        array('code' => 'PA', 'name' => 'Panama'),
        array('code' => 'PG', 'name' => 'Papua New Guinea'),
        array('code' => 'PY', 'name' => 'Paraguay'),
        array('code' => 'PE', 'name' => 'Peru'),
        array('code' => 'PH', 'name' => 'Philippines'),
        array('code' => 'PN', 'name' => 'Pitcairn'),
        array('code' => 'PL', 'name' => 'Poland'),
        array('code' => 'PT', 'name' => 'Portugal'),
        array('code' => 'PR', 'name' => 'Puerto Rico'),
        array('code' => 'QA', 'name' => 'Qatar'),
        array('code' => 'SS', 'name' => 'Republic of South Sudan'),
        array('code' => 'RE', 'name' => 'Reunion'),
        array('code' => 'RO', 'name' => 'Romania'),
        array('code' => 'RU', 'name' => 'Russian Federation'),
        array('code' => 'RW', 'name' => 'Rwanda'),
        array('code' => 'KN', 'name' => 'Saint Kitts and Nevis'),
        array('code' => 'LC', 'name' => 'Saint Lucia'),
        array('code' => 'VC', 'name' => 'Saint Vincent and the Grenadines'),
        array('code' => 'WS', 'name' => 'Samoa'),
        array('code' => 'SM', 'name' => 'San Marino'),
        array('code' => 'ST', 'name' => 'Sao Tome and Principe'),
        array('code' => 'SA', 'name' => 'Saudi Arabia'),
        array('code' => 'SN', 'name' => 'Senegal'),
        array('code' => 'RS', 'name' => 'Serbia'),
        array('code' => 'SC', 'name' => 'Seychelles'),
        array('code' => 'SL', 'name' => 'Sierra Leone'),
        array('code' => 'SG', 'name' => 'Singapore'),
        array('code' => 'SK', 'name' => 'Slovakia'),
        array('code' => 'SI', 'name' => 'Slovenia'),
        array('code' => 'SB', 'name' => 'Solomon Islands'),
        array('code' => 'SO', 'name' => 'Somalia'),
        array('code' => 'ZA', 'name' => 'South Africa'),
        array('code' => 'GS', 'name' => 'South Georgia South Sandwich Islands'),
        array('code' => 'ES', 'name' => 'Spain'),
        array('code' => 'LK', 'name' => 'Sri Lanka'),
        array('code' => 'SH', 'name' => 'St. Helena'),
        array('code' => 'PM', 'name' => 'St. Pierre and Miquelon'),
        array('code' => 'SD', 'name' => 'Sudan'),
        array('code' => 'SR', 'name' => 'Suriname'),
        array('code' => 'SJ', 'name' => 'Svalbarn and Jan Mayen Islands'),
        array('code' => 'SZ', 'name' => 'Swaziland'),
        array('code' => 'SE', 'name' => 'Sweden'),
        array('code' => 'CH', 'name' => 'Switzerland'),
        array('code' => 'SY', 'name' => 'Syrian Arab Republic'),
        array('code' => 'TW', 'name' => 'Taiwan'),
        array('code' => 'TJ', 'name' => 'Tajikistan'),
        array('code' => 'TZ', 'name' => 'Tanzania, United Republic of'),
        array('code' => 'TH', 'name' => 'Thailand'),
        array('code' => 'TG', 'name' => 'Togo'),
        array('code' => 'TK', 'name' => 'Tokelau'),
        array('code' => 'TO', 'name' => 'Tonga'),
        array('code' => 'TT', 'name' => 'Trinidad and Tobago'),
        array('code' => 'TN', 'name' => 'Tunisia'),
        array('code' => 'TR', 'name' => 'Turkey'),
        array('code' => 'TM', 'name' => 'Turkmenistan'),
        array('code' => 'TC', 'name' => 'Turks and Caicos Islands'),
        array('code' => 'TV', 'name' => 'Tuvalu'),
        array('code' => 'UG', 'name' => 'Uganda'),
        array('code' => 'UA', 'name' => 'Ukraine'),
        array('code' => 'AE', 'name' => 'United Arab Emirates'),
        array('code' => 'GB', 'name' => 'United Kingdom'),
        array('code' => 'UM', 'name' => 'United States minor outlying islands'),
        array('code' => 'UY', 'name' => 'Uruguay'),
        array('code' => 'UZ', 'name' => 'Uzbekistan'),
        array('code' => 'VU', 'name' => 'Vanuatu'),
        array('code' => 'VA', 'name' => 'Vatican City State'),
        array('code' => 'VE', 'name' => 'Venezuela'),
        array('code' => 'VN', 'name' => 'Vietnam'),
        array('code' => 'VG', 'name' => 'Virgin Islands (British)'),
        array('code' => 'VI', 'name' => 'Virgin Islands (U.S.)'),
        array('code' => 'WF', 'name' => 'Wallis and Futuna Islands'),
        array('code' => 'EH', 'name' => 'Western Sahara'),
        array('code' => 'YE', 'name' => 'Yemen'),
        array('code' => 'YU', 'name' => 'Yugoslavia'),
        array('code' => 'ZR', 'name' => 'Zaire'),
        array('code' => 'ZM', 'name' => 'Zambia'),
        array('code' => 'ZW', 'name' => 'Zimbabwe'),
    );

    return $countries;
}

