@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Modifica utente {{ $user->id }}</h1>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><line x1="20" y1="12" x2="4" y2="12"></line><polyline points="10 18 4 12 10 6"></polyline>
                    </svg>
                     Tutti gli Utenti
                </a>
            </div>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Inserisci il titolo" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <legend>Dati Secondati</legend>

                <div class="form-group">
                    <label>Indirizzo</label>
                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="10" placeholder="Inizia a scrivere qualcosa..." required>{{ old('address', $user->details ? $user->details->address : '' ) }}</textarea>
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Città</label>
                    <textarea name="city" class="form-control @error('city') is-invalid @enderror" rows="10" placeholder="Inizia a scrivere qualcosa..." required>{{ old('city', $user->details ? $user->details->city : '' ) }}</textarea>
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Provincia</label>
                    <textarea name="province" class="form-control @error('province') is-invalid @enderror" rows="10" placeholder="Inizia a scrivere qualcosa..." required>{{ old('province', $user->details ? $user->details->province : '' ) }}</textarea>
                    @error('province')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Telefono</label>
                    <textarea name="phone" class="form-control @error('phone') is-invalid @enderror" rows="10" placeholder="Inizia a scrivere qualcosa..." required>{{ old('phone', $user->details ? $user->details->phone : '' ) }}</textarea>
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                <legend>Ruoli e permessi</legend>

                <div class="form-group">
                    <label>Ruolo</label>
                    <select name="role" class="form-control @error('role') is-invalid @enderror" rows="10" required
                      value="{{ old('phone', $user->role ? $user->role : '') }}">
                      <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Utente</option>
                      <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8">
                            </polyline>
                            </svg> 
                            Salva
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection