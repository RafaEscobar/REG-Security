@props(['placeholder', 'values', 'name', 'isRequired'])

{{ html()
    ->select($name, $values)
    ->class('mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-500')
    ->placeholder($placeholder)
    ->required($isRequired)
}}