<?php

return [
    'accepted' => ':attribute turi būti priimtas.',
    'accepted_if' => ':attribute turi būti priimtas, kai :other yra :value.',
    'active_url' => ':attribute nėra tinkama nuoroda.',
    'after' => ':attribute turi būti data po :date.',
    'after_or_equal' => ':attribute turi būti data po arba lygi :date.',
    'alpha' => ':attribute must only contain letters.',
    'alpha_dash' => ':attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => ':attribute must only contain letters and numbers.',
    'array' => ':attribute must be an array.',
    'before' => ':attribute must be a date before :date.',
    'before_or_equal' => ':attribute must be a date before or equal to :date.',
    'between' => [
        'array' => ':attribute must have between :min and :max items.',
        'file' => ':attribute must be between :min and :max kilobytes.',
        'numeric' => ':attribute must be between :min and :max.',
        'string' => ':attribute must be between :min and :max characters.',
    ],
    'boolean' => ':attribute field must be true or false.',
    'confirmed' => 'Įvestas :attribute nesutampa.',
    'current_password' => 'Slaptažodis neteisingas.',
    'date' => ':attribute is not a valid date.',
    'date_equals' => ':attribute must be a date equal to :date.',
    'date_format' => ':attribute does not match format :format.',
    'declined' => ':attribute must be declined.',
    'declined_if' => ':attribute must be declined when :other is :value.',
    'different' => ':attribute and :other must be different.',
    'digits' => ':attribute must be :digits digits.',
    'digits_between' => ':attribute must be between :min and :max digits.',
    'dimensions' => ':attribute has invalid image dimensions.',
    'distinct' => ':attribute field has a duplicate value.',
    'email' => 'El. pašto adresas pateiktas neteisingai, turi būti pvz. (vardas@gmail.com)',
    'ends_with' => ':attribute must end with one of following: :values.',
    'enum' => 'selected :attribute is invalid.',
    'exists' => 'selected :attribute is invalid.',
    'file' => ':attribute must be a file.',
    'filled' => ':attribute field must have a value.',
    'gt' => [
        'array' => ':attribute must have more than :value items.',
        'file' => ':attribute must be greater than :value kilobytes.',
        'numeric' => ':attribute must be greater than :value.',
        'string' => ':attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => ':attribute must have :value items or more.',
        'file' => ':attribute must be greater than or equal to :value kilobytes.',
        'numeric' => ':attribute must be greater than or equal to :value.',
        'string' => ':attribute must be greater than or equal to :value characters.',
    ],
    'image' => ':attribute must be an image.',
    'in' => 'selected :attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lt' => [
        'array' => ':attribute must have less than :value items.',
        'file' => ':attribute must be less than :value kilobytes.',
        'numeric' => ':attribute must be less than :value.',
        'string' => ':attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => ':attribute must not have more than :value items.',
        'file' => ':attribute must be less than or equal to :value kilobytes.',
        'numeric' => ':attribute must be less than or equal to :value.',
        'string' => ':attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => ':attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute must not have more than :max items.',
        'file' => ':attribute must not be greater than :max kilobytes.',
        'numeric' => ':attribute must not be greater than :max.',
        'string' => 'Maksimalus skirtingų simbolių klasių kiekis: :max',
    ],
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'array' => ':attribute must have at least :min items.',
        'file' => ':attribute must be at least :min kilobytes.',
        'numeric' => 'Minimalus skaičių kiekis: :min.',
        'string' => 'Minimalus skirtingų simbolių klasių kiekis: :min',
    ],
    'multiple_of' => ':attribute must be a multiple of :value.',
    'not_in' => 'selected :attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute must be a number.',
    'password' => 'Slaptažodis neteisingas!',
    'present' => ':attribute field must be present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'prohibits' => ':attribute field prohibits :other from being present.',
    'regex' => ':attribute format is invalid.',
    'required' => 'Šis laukelis yra privalomas.',
    'required_array_keys' => ':attribute field must contain entries for: :values.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'array' => ':attribute must contain :size items.',
        'file' => ':attribute must be :size kilobytes.',
        'numeric' => ':attribute must be :size.',
        'string' => ':attribute must be :size characters.',
    ],
    'starts_with' => ':attribute must start with one of following: :values.',
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute jau yra naudojamas.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute must be a valid URL.',
    'uuid' => ':attribute must be a valid UUID.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    
    'attributes' => [
        'name' => 'Pavadinimas',
        'password' => 'Slaptažodis',
    ],
];
