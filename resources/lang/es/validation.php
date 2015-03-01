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

	"accepted"             => "El :attribute debe ser aceptado.",
	"active_url"           => "El :attribute no es una URL valida.",
	"after"                => "El :attribute debe ser una fecha antes de :date.",
	"alpha"                => "El :attribute may only contain letters.",
	"alpha_dash"           => "El :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"            => "El :attribute may only contain letters and numbers.",
	"array"                => "El :attribute must be an array.",
	"before"               => "El :attribute must be a date before :date.",
	"between"              => [
		"numeric" => "El :attribute must be between :min and :max.",
		"file"    => "El :attribute must be between :min and :max kilobytes.",
		"string"  => "El :attribute must be between :min and :max characters.",
		"array"   => "El :attribute must have between :min and :max items.",
	],
	"boolean"              => "El :attribute field must be true or false.",
	"confirmed"            => "El :attribute confirmation does not match.",
	"date"                 => "El :attribute is not a valid date.",
	"date_format"          => "El :attribute does not match the format :format.",
	"different"            => "El :attribute and :other must be different.",
	"digits"               => "El :attribute must be :digits digits.",
	"digits_between"       => "El :attribute must be between :min and :max digits.",
	"email"                => "El :attribute must be a valid email address.",
	"filled"               => "El :attribute field is required.",
	"exists"               => "El selected :attribute is invalid.",
	"image"                => "El :attribute must be an image.",
	"in"                   => "El selected :attribute is invalid.",
	"integer"              => "El :attribute must be an integer.",
	"ip"                   => "El :attribute must be a valid IP address.",
	"max"                  => [
		"numeric" => "El :attribute may not be greater than :max.",
		"file"    => "El :attribute may not be greater than :max kilobytes.",
		"string"  => "El :attribute may not be greater than :max characters.",
		"array"   => "El :attribute may not have more than :max items.",
	],
	"mimes"                => "El :attribute must be a file of type: :values.",
	"min"                  => [
		"numeric" => "El :attribute must be at least :min.",
		"file"    => "El :attribute must be at least :min kilobytes.",
		"string"  => "El :attribute must be at least :min characters.",
		"array"   => "El :attribute must have at least :min items.",
	],
	"not_in"               => "El selected :attribute is invalid.",
	"numeric"              => "El :attribute must be a number.",
	"regex"                => "El :attribute format is invalid.",
	"required"             => "El :attribute field is required.",
	"required_if"          => "El :attribute field is required when :other is :value.",
	"required_with"        => "El :attribute field is required when :values is present.",
	"required_with_all"    => "El :attribute field is required when :values is present.",
	"required_without"     => "El :attribute field is required when :values is not present.",
	"required_without_all" => "El :attribute field is required when none of :values are present.",
	"same"                 => "El :attribute and :other must match.",
	"size"                 => [
		"numeric" => "El :attribute must be :size.",
		"file"    => "El :attribute must be :size kilobytes.",
		"string"  => "El :attribute must be :size characters.",
		"array"   => "El :attribute must contain :size items.",
	],
	"unique"               => "El :attribute has already been taken.",
	"url"                  => "El :attribute format is invalid.",
	"timezone"             => "El :attribute must be a valid zone.",

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

	'attributes' => [],

];
