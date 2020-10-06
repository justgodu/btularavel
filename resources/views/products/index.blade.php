@extends("layouts.main")

@section("content")
    <div class="container">
    <table class="table">
        <tr>
            <td>Title</td>
            <td>Description</td>
        </tr>
        @foreach ($products as $product)
          <tr>
          <td>{{ $product->title}}</td>      
          <td>{{ $product->short_description}}</td>      
        </tr>  
        @endforeach
    </table>
    </div>
@endsection