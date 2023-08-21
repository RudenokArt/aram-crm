@if(Route::current()->getName()!='login')
<div class="header bg-light pt-1 pb-1">
  <div class="container border-bottom">
    <div class="row justify-content-between">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="/resources/img/logotip.png" width="200" alt="Юг Идеал">
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='orders')
              text-body
              @endif" href="#">
              Заказы
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              О компании
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Помощь
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 text-end text-primary">
        @if ($current_user)
        <a href="#" class="text-secondary smart_link">
          {{$current_user->email}}
        </a>
        <br>
        <a href="/login/auth/?logout=Y" class="smart_link text-secondary">
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
 @endif