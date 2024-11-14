<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')


        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Messages</h1>
                </div>
                <div class="row">
                    <div class="">
                        <table class="table table-striped">

                                <thead>
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Message Send Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $item)
                                    <tr>
                                        <td>{{$loop ->iteration }} </td>
                                        <td>{{$item->user_name}} </td>
                                        <td>{{$item->user_subject}} </td>
                                        <td>{{$item ->user_message}}</td>

                                        <td>{{$item->created_at}} </td>

                                @endforeach
                                </tbody>

                          </table>
                    </div>

                </div>
            </section>
        </div>

    </div>
</div>

<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

@endsection
</body>
</html>
