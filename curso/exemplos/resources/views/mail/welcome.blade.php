@component('mail::message')
# Olá, {{ $user->name }}

Bem vindo a Periquito Virtual.

@component('mail::button', ['url' => 'http://periquitovirtual.com.br'])
Veja nosso site
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
