@if (count($errors) > 0)
    <div >
        <ul>
             @foreach ($errors->all() as $error)

            <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
  @if (session('success'))
  <div >
    <ul>
        <li class="success">{{session('success')}}</li> </h7>
</ul>
</div>
@endif
@if (session('error'))
  <div >
    <ul>
        <li class="success">{{session('error')}}</li> </h7>
</ul>
</div>
@endif