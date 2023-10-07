<div class="row pt-5">
    <div class="col-lg-12 text-center">
    @if(str_contains(url()->current(), '/mobile') || str_contains(url()->current(), '/ecran') || str_contains(url()->current(), '/imprimantes') || str_contains(url()->current(), '/automobile') || str_contains(url()->current(), '/multimedia') || str_contains(url()->current(), '/ordinateur'))
        <img src="../../assets/img/elements/user.png" alt="User" class="rounded-circle w-75">
    @else
        <img src="assets/img/elements/user.png" alt="User" class="rounded-circle w-75">
    @endif
    </div>

    <div class="col-lg-12 py-3 text-center text-light">
        <span class="name-profile">
            <b><?php echo explode(" ", $_SESSION['name'])[0] . " " . explode(" ", $_SESSION['name'])[1]  ?></b>
        </span>
    </div>
    <div class="col-lg-12 text-center">
        <span class="badge badge-orange mx-1"><i class="fas fa-image"></i></span>
        <span class="badge badge-orange mx-1"><i class="fas fa-power-off"></i></span>
        <span class="badge badge-orange mx-1"><i class="fas fa-user-circle"></i></span>
    </div>
</div>