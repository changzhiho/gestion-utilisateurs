@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'utilisateur</h1>

    <!-- Affichage du nom, email, et rôle de l'utilisateur -->
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>
    <p><strong>Rôle :</strong> {{ $user->role }}</p>

    <!-- Lien pour revenir à la liste des utilisateurs -->
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Retour à la liste des utilisateurs</a>
</div>
@endsection