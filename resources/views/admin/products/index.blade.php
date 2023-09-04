@extends('layouts.app')
@section('content')
   <h2>Products Page</h2> 

    @if (count($products) > 0)
  <div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Title</th>
        <th>Size</th>
        <th>Price</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
        @php 
        $sn =1
        @endphp
        @foreach ($products as $product )
      <tr>
        <td>{{ $sn++ }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->size }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <form action="{{ route('product.delete') }}" method="post" @style(['display:inline-block'])>
                @method('delete')
                @csrf
            <input type="hidden" name="idd" value="{{ $product->id }}">
            <input type="submit" value="Delete">
         </form> || <a  @style(['display:inline-block']) href="{{ url('admin/products/edit', $product->id) }}"> Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@else
<p>No Product Available</p>
@endif
@endsection