<div class="make_team d-flex align-items-center">
    <img class="doodle doodle-1" src="{{ asset('images/doodle-arrow-1.png') }}" alt="">
    <img class="doodle doodle-2" src="{{ asset('images/doodle-arrow-2.png') }}" alt="">
    <img class="doodle doodle-3" src="{{ asset('images/doodle-bulb.png') }}" alt="">
    <img class="doodle doodle-4" src="{{ asset('images/doodle-bulb.png') }}" alt="">
    <div class="container mt-5 py-5">
        <div class="form-container">
            <!-- Centered Heading -->
            <div class="text-center mt-5 ">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/logo.gif') }}" alt="">
                    <h2 class="text-decoration-underline">Manage Your Business with Us</h2>
                </div>
                <p class="fw-light">Fill out the form below to get started with creating and managing your business.</p>
            </div>

            <form wire:submit.prevent="createCompany">
                <div class="row">
                    <!-- Name -->
                    <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" wire:model.defer="name" class="form-control" placeholder="Enter your name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" wire:model.defer="email" class="form-control" placeholder="Enter your email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>


                    <!-- Type -->
                    <div class="mb-3 col-md-6">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" wire:model.defer="type" class="form-select">
                            <option value="">Select type</option>
                            @foreach($types as $type)
                            <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                            @endforeach
                        </select>
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Members -->
                    <div class="mb-3 col-md-6">
                        <label for="members" class="form-label">Members</label>
                        <input type="number" id="members" wire:model.defer="members" class="form-control" placeholder="Enter number of members">
                        @error('members') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Country -->
                    <div class="mb-3 col-md-6">
                        <label for="country" class="form-label">Country</label>
                        <select id="type" wire:model.defer="country" class="form-select selectpicker" data-live-search="true">
                            <option value="">Select country</option>
                            @foreach($countries as $country)
                                <option data-content="<img src='{{ country_flag($country->code) }}' width='20' class='me-2'>{{ ucfirst($country->name) }}" value="{{ $country->code }}">
                                    {{ ucfirst($country->name) }}
                                </option>
                            @endforeach
                        </select>
                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Company Name -->
                    <div class="mb-3 col-md-6">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" id="company_name" wire:model.defer="company_name" class="form-control" placeholder="Enter your company name">
                        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3 col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" wire:model.defer="password" class="form-control" placeholder="Enter your password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password Confirmation -->
                    <div class="mb-3 col-md-6">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" wire:model.defer="password_confirmation" class="form-control" placeholder="Confirm your password">
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Description -->
                    <div class="mb-3 col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" wire:model.defer="description" class="form-control" rows="3" placeholder="Enter a description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 d-flex align-items-center justify-content-end mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
