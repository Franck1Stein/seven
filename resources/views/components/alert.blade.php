<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    {{ $slot }}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @elseif (session()->has('error'))
      <div class="alert alert-danger">
          {{ session()->get('error') }}
      </div>
    @endif

</div>
