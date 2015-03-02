<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | The following language lines contain the default error messages used by
  | the validator class. Some of these rules have multiple versions such
  | as the size rules. Feel free to tweak each of these messages here.
  |
  */

  "accepted"             => "El campo :attribute debe ser aceptado.",
  "active_url"           => "El campo :attribute no es una URL valida.",
  "after"                => "El campo :attribute debe ser una fecha despues de campo :date.",
  "alpha"                => "El campo :attribute puede solo contener letras.",
  "alpha_dash"           => "El campo :attribute puede solo contener letras, numeros, y guiones.",
  "alpha_num"            => "El campo :attribute puede solo contener letras y numeros.",
  "array"                => "El campo :attribute debe ser un arreglo.",
  "before"               => "El campo :attribute debe ser una fecha antes de :date.",
  "between"              => [
    "numeric" => "El campo :attribute debe tener entre :min y :max.",
    "file"    => "El campo :attribute debe tener entre :min y :max kilobytes.",
    "string"  => "El campo :attribute debe tener entre :min y :max caracteres.",
    "array"   => "El campo :attribute debe tener entre :min y :max items.",
  ],
  "boolean"              => "El campo :attribute debe ser verdadero o falso.",
  "confirmed"            => "El campo :attribute debe estar confirmado.",
  "date"                 => "El campo :attribute no es una fecha valida.",
  "date_format"          => "El campo :attribute no concuerda con el formato :format.",
  "different"            => "Los campos :attribute y :other deben ser diferentes.",
  "digits"               => "El campo :attribute debe tener :digits digitos.",
  "digits_between"       => "El campo :attribute debe ser entre :min y :max digitos.",
  "email"                => "El campo :attribute debe ser un correo electronico valido.",
  "filled"               => "El campo :attribute es requerido.",
  "exists"               => "El campo :attribute seleccionado es invalido.",
  "image"                => "El campo :attribute debe ser una imagen.",
  "in"                   => "El campo :attribute seleccionado es invalido.",
  "integer"              => "El campo :attribute debe ser un numero entero.",
  "ip"                   => "El campo :attribute debe ser una direccion IP valida.",
  "max"                  => [
    "numeric" => "El campo :attribute no puede ser mayor que :max.",
    "file"    => "El campo :attribute no puede ser mayor que :max kilobytes.",
    "string"  => "El campo :attribute no puede ser mayor que :max caracteres.",
    "array"   => "El campo :attribute no puede tener mas de :max items.",
  ],
  "mimes"                => "El campo :attribute debe ser un archivo de tipo: :values.",
  "min"                  => [
    "numeric" => "El campo :attribute debe ser al menos :min.",
    "file"    => "El campo :attribute debe ser al menos :min kilobytes.",
    "string"  => "El campo :attribute debe ser al menos :min caracteres.",
    "array"   => "El campo :attribute debe tener al menos :min items.",
  ],
  "not_in"               => "El campo :attribute seleccionado es invalido.",
  "numeric"              => "El campo :attribute debe ser un numero.",
  "regex"                => "El formato del campo :attribute es invalido.",
  "required"             => "El campo :attribute es requerido.",
  "required_if"          => "El campo :attribute es requerido cuando :other es :value.",
  "required_with"        => "El campo :attribute es requerido cuando :values esta presente.",
  "required_with_all"    => "El campo :attribute es requerido cuando :values esta presente.",
  "required_without"     => "El campo :attribute es requerido cuando :values no esta presente.",
  "required_without_all" => "El campo :attribute es requerido cuando ninguno de :values estan presentes.",
  "same"                 => "Los campos :attribute y :other deben ser iguales.",
  "size"                 => [
    "numeric" => "El campo :attribute debe ser :size.",
    "file"    => "El campo :attribute debe ser :size kilobytes.",
    "string"  => "El campo :attribute debe ser :size caracteres.",
    "array"   => "El campo :attribute debe contener :size items.",
  ],
  "unique"               => "El campo :attribute ya ha sido tomado.",
  "url"                  => "El formato del campo :attribute es invalido.",
  "timezone"             => "El campo :attribute debe ser una una zona horaria valida.",

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | Here you may specify custom validation messages for attributes using the
  | convention "attribute.rule" to name the lines. This makes it quick to
  | specify a specific custom language line for a given attribute rule.
  |
  */

  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Attributes
  |--------------------------------------------------------------------------
  |
  | The following language lines are used to swap attribute place-holders
  | with something more reader friendly such as E-Mail Address instead
  | of "email". This simply helps us make messages a little cleaner.
  |
  */

  'attributes' => [
    'title'            => 'Titulo',
    'body'             => 'Cuerpo o Descripcion',
    'description'      => 'Descripcion',
    'event_type_id'    => 'Tipo de Evento',
    'message_type_id'  => 'Tipo de Mensaje',
    'building_id'      => 'Edificio',
    'user_id'          => 'Asociado a persona(s)',
    'floor'            => 'Piso',
    'number'           => 'Numero',
    'apartment_id'     => 'Apartamento',
    'username'         => 'Seudonimo',
    'name'             => 'Nombre',
    'email'            => 'E-mail',
    'password'         => 'Contraseña',
    'exact_direction'  => 'Direccion',
    'state_id'         => 'Estado',
    'town_id'          => 'Municipio',
    'parish_id'        => 'Parroquia',
    'total'            => 'Total',
    'account_id'       => 'Numero de cuenta',
    'check_number'     => 'Numero de cheque',
    'movement_type_id' => 'Tipo de movimiento',
    'operation'        => 'Operacion',
    'concept'          => 'Concepto',
    'item_id'          => 'Asociado a Item(s)',
    'identity_card'    => 'Cedula',
    'first_name'       => 'Primer Nombre',
    'middle_name'      => 'Segundo Nombre',
    'first_surname'    => 'Primer Apellido',
    'last_surname'     => 'Segundo Apellido',
  ],

];
