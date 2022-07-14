<x-layout>
  <x-sidebar />
  <div class="w-96 ">
    <form action="{{ route('course') }}" method="get">
      <label for="search" class="block text-sm text-gray-700 font-bold">Quick search</label>
      <div class="mt-1 relative flex items-center">
        <input type="text" name="search" id="search" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md" value="" >
        <div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5">
          <button class="inline-flex items-center border border-gray-200 rounded px-2 text-sm font-sans font-medium text-gray-400 hover:bg-sky-700"> Enter </button>
        </div>
      </div>
    </form>
  </div>
  <form action="{{ route('create_course') }}">  
  <button class="inline-flex items-center border border-gray-200 rounded px-2 text-sm font-sans font-medium text-black hover:bg-sky-700"> Create a word </button>
  </form>
  @if($vocabularies->isEmpty())
  <script>
      var answer = window.confirm("Do you want to create a vocabulary?");
      if (answer) {
          window.location.href = "{{ route('create_course') }}";
      }
      else {
          //some code
      }
    </script>
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