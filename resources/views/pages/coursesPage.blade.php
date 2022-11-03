@extends('pages/pageTemplate')
@section('title','Online Courses')

@section('content')
    <section class="p-5 bg-light">
        <div>
            <h1>Belajar Online</h1>
            <p>Kami menyediakan kursus online bagi murid yang ingin belajar apapun, dimanapun, dan kapanpun. Kontak kami dan daftarlah sekarang!</p>
        </div>
        <div>
            <h2>Kursus kami:</h2>
            <ol>
                @foreach($courses as $course)
                    @if($course['available'] === true)
                        <li>
                            {{$course['name']}}
                        </li>
                    @else
                        <li class="text-black-50">
                            <strike>{{$course['name']}} (Tutup)</strike>
                        </li>
                    @endif
                @endforeach
            </ol>
        </div>
    </section>
@endsection
