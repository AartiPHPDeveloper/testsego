@extends('layouts.app')

@section('content')
  <!--@include('partials.page-header')-->

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <!--@while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile-->
<!--<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer;float:right;" class="slider" onclick="openNav()">&#9776; open</span>-->
<div class="left-part"></div>
<div class="right-part"></div>
<div class="mobile mobile-two">
	<div class="header">
	    <div class="menu-toggle">
		    <div class="line"></div>
			<div class="line"></div>
		</div>
	</div>
	<div class="mobile-nav">
		<ul>
		  <li><a href="#">Home</a></li>
		  <li><a href="#">About</a></li>
		  <li><a href="#">Portfolio</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Contact</a></li>
		</ul>
	</div>
</div>

  {!! get_the_posts_navigation() !!}
@endsection
