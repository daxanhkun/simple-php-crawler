@if(!empty($results))
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Result</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($results as $index => $result)
        <tr>
          <th scope="row">{{ $index + 1 }}</th>
          @if ($file_extension)
          <td><a href="{{ $result }}">{{ $result }}</a></td>
          @else
          <td>{{ $result }}</td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
