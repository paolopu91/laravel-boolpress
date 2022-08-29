@component('mail::message')
# Gentile <strong>{{ $user->name }}</strong>

Benvenuto sul mio sito.

Per accedere al tuo account, clicca anche il link qui sotto:

@component('mail::button', ['url' => route("login")])
Accedi
@endcomponent

Cordiali Saluti,<br>
{{ config('app.name') }}
@endcomponent
