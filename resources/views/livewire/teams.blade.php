<?php
$description = "Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum "
?>
<div class="row row-gap-2 teams">
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 ">
        <div class="card">
            <div class="card-body d-flex justify-content-center flex-column">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('images/team-card-icon.png') }}" alt="">
                    <h5 class="card-title">Team Name : Team 1</h5>
                </div>
                <p class="card-text">
                    <span>team Description :</span>
                    {{ Str::limit($description, 70, '.....') }} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    {{-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card">
            <img src="{{ asset('images/single_team.gif') }}" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title 2</h5>
                <p class="card-text">Some description for card 2.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card">
            <img src="{{ asset('images/single_team.gif') }}" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title 3</h5>
                <p class="card-text">Some description for card 3.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="card">
            <img src="{{ asset('images/single_team.gif') }}" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title 4</h5>
                <p class="card-text">Some description for card 4.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div> --}}
</div>
