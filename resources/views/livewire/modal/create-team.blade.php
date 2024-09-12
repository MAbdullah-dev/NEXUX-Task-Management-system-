<div wire:ignore.self id="createTeam" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="staticBackdropLabel">Create a New Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-3 row align-items-center justify-content-center">
                <div class="col-5">
                    <img class="w-100 object-fit-cover" src="{{ asset('images/maketeaM.png') }}" alt="Team Image">
                </div>
                <!-- Livewire form for creating a team -->
                <form class="p-0 bg-light col-6" wire:submit.prevent="createTeam">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-10">
                            <label for="teamName" class="form-label">Team Name</label>
                            <input type="text" id="teamName" wire:model="name" class="form-control"
                                placeholder="Enter team name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-10">
                            <label for="teamDescription" class="form-label">Team Description</label>
                            <textarea id="teamDescription" wire:model="description" class="form-control" rows="3"
                                placeholder="Enter team description"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-grid gap-2 col-10">
                            <button type="submit" class="btn btn-primary">Create Team</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script to handle modal close after team creation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Livewire.on('teamCreated', () => {
            $('#createTeam').modal('hide'); // Hide modal using jQuery
        });
    });
</script>
