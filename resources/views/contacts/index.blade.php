@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Contact List
                        <span class="float-right">
                            <a class="btn btn-sm btn-primary" href="{{route('contacts.create')}}">New</a>
                        </span>
                    </div>

                    <div class="card-body">
                        <table class="table table-borderless table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->mobile}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                    <a class="btn btn-sm bg-info" href="{{route('contacts.edit', $contact)}}">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="{{ route('contacts.destroy', $contact) }}"
                                       onclick="event.preventDefault();  document.getElementById('contact-delete').submit();">
                                        Delete
                                    </a>

                                    <form id="contact-delete" action="{{ route('contacts.destroy', $contact) }}"
                                          method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
