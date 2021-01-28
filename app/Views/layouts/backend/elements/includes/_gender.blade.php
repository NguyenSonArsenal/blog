@if($entity->isUserBoy())
    <span class="badge badge-danger">{{ genderBoyAlias() }}</span>
@else
    <span class="badge badge-cyan">{{ genderGirlAlias() }}</span>
@endif