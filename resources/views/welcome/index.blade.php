@extends('layouts.master')


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('login')
<div class="colr">
  <h2><img src="images/paws.gif" width="25" height="22" alt=""/>Sign In<img src="images/paws.gif" width="25" height="22" alt=""/></h2>
  <form method="POST" action="/login">
    {!! csrf_field() !!}
    <div>
      Email <input type="email" name="email" >
    </div>
    <div>
      Password <input type="password" name="password" id="password" size="15"><input type="checkbox" name="remember"> Remember Me
    </div>
    <div>
      <button type="submit">Login</button>
    </div>
  </form>
  </div>
@stop

@section('intro')
<h1>Register Your Pets!</h1>
      <div class="coll">
      <p><img src="images/pups.gif" width="210" height="140" alt=""/> Magna aenean mauris feugiat dui luctus nisl purus sem class, in morbi est taciti ultricies donec massa convallis potenti mollis, phasellus arcu blandit turpis gravida fringilla habitant erat. Sed donec eget integer suspendisse donec integer rhoncus, tortor ultricies luctus tristique porttitor netus. Duis tincidunt habitant per cubilia curae justo ultrices torquent proin mattis inceptos est, potenti aliquet. </p>
      </div>
      <div class="colreg">
        <a href="login.php"><img src="images/here.gif"/></a>
      </div>
@stop
