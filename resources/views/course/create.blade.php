<x-layout>
    <x-sidebar />
    <div class='create_vocabulary'>
        <form method="post" action="{{ route('create_vocabulary') }}">
          @csrf
          <input class="input" type="text" name="word" placeholder="Enter your word...">
          <input class='input' type="text" name="mean" placeholder="Enter your meaning...">
          <input class='input' type="text" name="example" placeholder="Enter your example...">
          <button class='submit' type="submit" name="action" value="create">Create</button>
          <button class='submit' type="submit" name="action" value="back">Back</button>
        </form>
      </div>
</x-layout>