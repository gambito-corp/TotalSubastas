<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>@yield('RSB-Title')</h5>
        <p>@yield('RSB-SubTitle')</p>
        @yield('RSB-Menu')
        @if(session()->has('personificacion'))
            <form action="{{ route('User.inpersonificar') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-outline-danger" value="Dejar de Personificar">
            </form>
        @endif

    </div>
  </aside>
  <!-- /.control-sidebar -->
