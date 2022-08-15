<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        
    </head>
<body>
    <h1>{{env('APP_NAME')}}</h1>

 <ul>  
    {{-- @empty($query)
        <h3>Query is empty</h3>
    @else
           Query is not empty
        @foreach ($query as $key => $value)

           <li>{{$key.' - '.$value}}</li>

        @endforeach
 
    @endif   --}}
</ul> 
 <ul>         
        {{-- @forelse ($query as $key => $value )
            
            <li>{{$key.' - '.$value}}</li>
            @empty
                <h3>Query is empty.</h3> 
             
        @endforelse --}}

</ul> 
<form action= "{{ route('register') }}" method="POST">
  @csrf
  <input type="text" name="username" placeholder="Username">
  <input type="text" name="name" placeholder="Name">
  <input type="date" name="birthday" placeholder="Birthday">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Submit</button>

</form>
</body>
    
</html>
