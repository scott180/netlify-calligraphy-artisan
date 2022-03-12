@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required value="无为徐生">
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required value="1021151991@qq.com">
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required>书法练习轨迹--明月几时有</textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

    </form>
@endsection
