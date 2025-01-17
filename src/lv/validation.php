<?php

return [
    'accepted'             => ' :attribute ir jābūt pieņemtam.',
    'active_url'           => ' :attribute ir ar nederīgu linku.',
    'after'                => ' :attribute ir jābūt ar datumu pēc :datums.',
    'after_or_equal'       => ' :attribute ir jābūt ar datumu pēc vai vienādu ar :datums.',
    'alpha'                => ' :attribute var saturēt tikai burtus.',
    'alpha_dash'           => ' :attribute var saturēt tikai burtus, nummurus un atstarpes.',
    'alpha_num'            => ' :attribute var tikai saturēt burtus un nummurus.',
    'array'                => ' :attribute ir jābūt sakārtotam.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => ' :attribute ir jābūt ar datumu pirms :datums.',
    'before_or_equal'      => ' :attribute ir jābūt ar datumu pirms vai vienādu ar :datums.',
    'between'              => [
        'array'   => ' :attribute jābūt no :min līdz :max vienībām.',
        'file'    => ' :attribute jābūt starp :min un :max kilobaiti.',
        'numeric' => ' :attribute jābūt starp :min un :max.',
        'string'  => ' :attribute jābūt no :min līdz :max zīmēm.',
    ],
    'boolean'              => ' :attribute laiciņam jābūt atbilstošam vai neatbilstošam.',
    'confirmed'            => ' :attribute apstiprinājums neatbilst.',
    'date'                 => ' :attribute nav derīgs.',
    'date_equals'          => ':attribute datumam jāsakrīt ar  :date.',
    'date_format'          => ' :attribute neatbilst formātam :format.',
    'different'            => ' :attribute un :other ir jābūt citiem.',
    'digits'               => ' :attribute ir jābūt :digits ciparam.',
    'digits_between'       => ' :attribute ir jābūt :min un :max ciparam.',
    'dimensions'           => ' :attribute ir nederīgs attēla izmērs.',
    'distinct'             => ' :attribute laikam ir dubulta vērtība.',
    'email'                => ' :attribute derīgam e-pastam.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'exists'               => 'Izvēlētais :attribute ir nederīgs.',
    'file'                 => ' :attribute jābūt failam.',
    'filled'               => ':attribute lauks ir nepieciešams.',
    'gt'                   => [
        'array'   => ':attribute jābūt vairāk nekā :value vienībām.',
        'file'    => ':attribute jābūt lielākam par :value kilobaitiem.',
        'numeric' => ':attribute jābūt lielākam par :value.',
        'string'  => ':attribute jāpārsniedz :value rakstzīmes.',
    ],
    'gte'                  => [
        'array'   => ':attribute jābūt :value vai vairāk vienībām.',
        'file'    => ':attribute jābūt lielākam par :value kilobaitiem vai vienādam ar šo skaitu.',
        'numeric' => ':attribute jābūt lielākam vai vienādam ar :value.',
        'string'  => ':attribute jāpārsniedz :value rakstzīmes vai jābūt vienādam ar šo skaitu.',
    ],
    'image'                => ' :attribute jābūt attēlam.',
    'in'                   => 'Izvēlētais :attribute ir nederīgs.',
    'in_array'             => ' :attribute laiks neeksistē :cits.',
    'integer'              => ' :attribute ir jabūt skaitim.',
    'ip'                   => ' :attribute jābūt derīgai IP adresei.',
    'ipv4'                 => ':attribute jābūt derīgai IPv4 adresei.',
    'ipv6'                 => ':attribute jābūt derīgai IPv6 adresei.',
    'json'                 => ' :attribute jābūt derīgai JSON virknei.',
    'lt'                   => [
        'array'   => ':attribute jābūt mazāk nekā :value vienībām.',
        'file'    => ':attribute nedrīkst pārsniegt :value kilobaitus.',
        'numeric' => ':attribute jābūt mazākam nekā :value.',
        'string'  => ':attribute nedrīkst pārsniegt :value rakstzīmes.',
    ],
    'lte'                  => [
        'array'   => ':attribute nedrīkst būt vairāk par :value vienībām.',
        'file'    => ':attribute nedrīkst pārsniegt :value kilobaitus vai būt vienādam ar šo skaitu.',
        'numeric' => ':attribute jābūt mazākam vai vienādam ar :value.',
        'string'  => ':attribute nedrīkst pārsniegt :value rakstzīmes vai būt vienādam ar šo skaitu.',
    ],
    'max'                  => [
        'array'   => ' :attribute nedrīkst pārsniegt :max vienības.',
        'file'    => ' :attribute nedrīkst pārsniegt :max kilobaiti.',
        'numeric' => ' :attribute nedrīkst pārsniegt :max.',
        'string'  => ' :attribute nedrīkst pārsniegt :max zīmes.',
    ],
    'mimes'                => ' :attribute jābūt faila tipam: :values',
    'mimetypes'            => ' :attribute jābūt faile tipam: :values.',
    'min'                  => [
        'array'   => ' :attribute jāsatur vismaz :min vienības.',
        'file'    => ' :attribute jābūt vismaz :min kilobaiti.',
        'numeric' => ' :attribute jābūt vismaz :min.',
        'string'  => ' :attribute jābūt vismaz :min zīmes.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => ' izvēlieties :attribute ir nederīgs.',
    'not_regex'            => ':attribute formāts ir nederīgs.',
    'numeric'              => ' :attribute jābūt skaitlim.',
    'password'             => 'The password is incorrect.',
    'present'              => ' :attribute laikums ir nepieciešams.',
    'regex'                => ' :attribute formāts ir nederīgs.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ' :attribute laukums ir nepieciešams.',
    'required_if'          => ' :attribute laukums ir nepieciešams, ja vien :other ir :values.',
    'required_unless'      => ' :attribute laukums ir nepieciešams, ja vien :other ir :values.',
    'required_with'        => ' :attribute laukums ir nepieciešams, kad :values ir pieejama.',
    'required_with_all'    => ' :attribute laukums ir nepieciešams, kad :values ir pieejama.',
    'required_without'     => ' :attribute laukums ir nepieciešams, kad :values nav pieejama.',
    'required_without_all' => ' :attribute laukums ir nepieciešams, kad neviena no :values nav pieejama.',
    'same'                 => ' :attribute un :citiem ir jāsakrīt.',
    'size'                 => [
        'array'   => ' :attribute jāsatur :size vienības.',
        'file'    => ' :attribute jābūt :size kilobaiti.',
        'numeric' => ' :attribute jābūt :size.',
        'string'  => ' :attribute jābūt :size zīmes.',
    ],
    'starts_with'          => ':attribute jāsākas ar kādu no šiem: :values',
    'string'               => ' :attribute jābūt virknē.',
    'timezone'             => ' :attribute jābūt derīgā zonā.',
    'unique'               => ' :attribute jau ir aizņemts.',
    'uploaded'             => ' :attribute netika augšuplādēts.',
    'url'                  => ' :attribute formāts ir nederīgs.',
    'uuid'                 => ':attribute jābūt derīgam UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'ziņa pēc pieprasījuma',
        ],
    ],
    'attributes'           => [],
];
