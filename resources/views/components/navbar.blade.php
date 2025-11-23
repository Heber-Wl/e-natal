<nav class="barra-navegacao">
    <div class="logo">
        <i class="fas fa-heartbeat"></i>
        <span>PréNatal</span>
    </div>

    <div class="menu-links">
        <a href="{{ route('pacientes') }}" class="ativo">Inicio</a>
        <a href="{{ route('cadastro') }}">Novo Registro</a>
    </div>

    <div class="info-usuario">
        <span>Dr. {{ Auth::guard('medico')->user()->resgatarPrimeirosDoisNomes() }}</span>
        <div class="avatar-usuario">DS</div>
    </div>
</nav>