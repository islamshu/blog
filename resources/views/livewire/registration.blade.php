<div class="pt-5">
    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link {{ $currentSection != 1 ? '' : 'active' }}" href="#step1">Step 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentSection != 2 ? '' : 'active' }}" href="#step2">Step 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentSection != 3 ? '' : 'active' }}" href="#step3">Step 3</a>
        </li>
    </ul>
    <div class="row pt-3">
        {{-- Step 1 --}}
        <div id="step1" class="needs-validation" style="display: {{ $currentSection != 1 ? 'none' : '' }}">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control {{$errors->first('name') ? "is-invalid" : "" }}" id="name" aria-describedby="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" wire:model="username" class="form-control {{$errors->first('username') ? "is-invalid" : "" }}" id="username">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="birth_place" class="form-label">Birth Place</label>
                <input type="text" wire:model="birthPlace" class="form-control {{$errors->first('birthPlace') ? "is-invalid" : "" }}" id="birth_place">
                @error('birthPlace')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input type="date" wire:model="birthDate" class="form-control {{$errors->first('birthDate') ? "is-invalid" : "" }}" id="birth_date">
                @error('birthDate')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label><br>
                <label class="radio-inline me-2"><input type="radio" wire:model="status" class="me-2" value="married"
                    {{{ $status == 'married' ? "checked" : "" }}}>Married</label>
                <label class="radio-inline"><input type="radio" wire:model="status" class="me-2" value="single"
                        {{{ $status == 'single' ? "checked" : "" }}}>Single</label>
                @error('status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary" wire:click="step1"
                type="button">Next</button>
        </div>

        {{-- Step 2 --}}
        <div id="step2" style="display: {{ $currentSection != 2 ? 'none' : '' }}">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control {{$errors->first('email') ? "is-invalid" : "" }}" id="email" aria-describedby="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" wire:model="phone" class="form-control {{$errors->first('phone') ? "is-invalid" : "" }}" id="phone">
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-danger" type="button" wire:click="back(1)">Back</button>
            <button class="btn btn-primary" type="button" wire:click="step2">Next</button>
        </div>

        {{-- Step 3 --}}
        <div id="step3" style="display: {{ $currentSection != 3 ? 'none' : '' }}">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Name: {{$name}}</li>
                <li class="list-group-item">Username: {{ $username }}</li>
                <li class="list-group-item">Birth Place: {{ $birthPlace }}</li>
                <li class="list-group-item">Birth Date: {{ $birthDate }}</li>
                <li class="list-group-item">Status: {{$status ? 'Married' : 'Single'}}</li>
                <li class="list-group-item">Email: {{ $email }}</li>
                <li class="list-group-item">Phone: {{ $phone }}</li>
            </ul>
            <button class="btn btn-danger" type="button" wire:click="back(2)">Back</button>
            <button class="btn btn-success" wire:click="step3" type="button">Finish</button>
        </div>
    </div>
</div>