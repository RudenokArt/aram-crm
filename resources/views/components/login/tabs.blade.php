<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link @if($slot=='login') active @endif" href="/login/auth/">
      Вход
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($slot=='registration') active @endif" href="/login/reg/">
      Регистрация
    </a>
  </li>
</ul>