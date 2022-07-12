<x-layout>
  <x-sidebar />
  <div class='create_vocabulary'>
    <form method="post" action="{{ route('create_vocabulary') }}">
      @csrf
      <input class="input" type="text" name="word" placeholder="Enter your word...">
      <input class='input' type="text" name="mean" placeholder="Enter your meaning...">
      <input class='input' type="text" name="example" placeholder="Enter your example...">
      <button class='submit' type="submit">Create</button>
    </form>
  </div> 
  @if($vocabularies->isEmpty())
                <h2>Nothing</h2>
  @else
    <div class="container_table">
        <table class="content-table">
                <thead>
                  <tr>
                    <th>Word</th>
                    <th>Meaning</th>
                    <th>Example</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($vocabularies as $item)
                  <tr>
                    <td>{{ $item->word }}</td>
                    <td>{{ $item->meaning }}</td>
                    <td>{{ $item->example }}</td>

                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
  @endif
</x-layout>