<div class="header bg-secondary pt-1 pb-1">
  <div class="container border-bottom">
    <div class="row justify-content-between">
      <div class="col-lg-2 col-md-3 col-sm-6 col-4"></div>
      <div class="col-lg-8 col-md-6 col-sm-6 col-4"></div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-4 text-end text-primary">
        @if ($current_user)
        <div class="text-light">{{$current_user->email}}</div>
        <a href="/login/auth/?logout=Y" class="smart_link text-white">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          Выход
        </a>
        @endif
        <div>
        </div>
      </div>
    </div>
  </div>
</div>