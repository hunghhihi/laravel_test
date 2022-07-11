@extends('layouts.base')
@yield('sidebar')
        @include('layouts.sidebar')
@yield('content')
        @if(empty($vocabularies))
                <h2>khong co j</h2>
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