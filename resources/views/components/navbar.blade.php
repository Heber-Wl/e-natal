<nav class="barra-navegacao">
    <div class="logo">
        <i class="fas fa-heartbeat"></i>
        <span>E-natal</span>
    </div>

    <div class="menu-links">
        <a href="{{ route('pacientes') }}" class="{{ Request::routeIs('pacientes') ? 'ativo' : '' }}">
            Início
        </a>

        <a href="{{ route('cadastro') }}" class="{{ Request::routeIs('cadastro') ? 'ativo' : '' }}">
            Novo Registro
        </a>
    </div>

    <div class="info-usuario">
        <span>Dr. {{ Auth::guard('medico')->user()->resgatarPrimeirosDoisNomes() }}</span>
        <div class="avatar-usuario">DS</div>
    </div>
</nav>
