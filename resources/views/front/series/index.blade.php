@extends('layouts.app')

@section('content')
    <div class="container">
        <b-container>
            <section class="mb-5">
                <div>
                    <b-row>
                        @foreach($series as $s)
                            <b-col cols="4">
                                <b-card title="{{$s->title}}" class="text-center" img-src="https://picsum.photos/300/300/?image=41"
                                        img-alt="Image" img-top>
                                    <b-card-text>
                                        {{\Illuminate\Support\Str::words($s->description,3)}}
                                    </b-card-text>
                                    <template v-slot:footer>
                                        <b-button href="{{route('series.show',$s->id)}}" variant="primary">Play</b-button>
                                    </template>
                                </b-card>
                            </b-col>
                        @endforeach
                    </b-row>
                </div>
            </section>

            <section>
                <h3 class="mb-3 text-center">Choose Plan that fits your need</h3>
                <pricing></pricing>
            </section>

            <div id="page-content">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h1 class="font-weight-light mt-4 text-white">Sticky Footer using Flexbox</h1>
                            <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS
                                rule</p>
                        </div>
                    </div>
                </div>
            </div>

        </b-container>
    </div>
@endsection

